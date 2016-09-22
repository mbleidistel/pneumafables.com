/**
 * Created by Michael on 2014-07-24.
 */

function GetLinkForName(Name)
{
	var link = {link:""};
	for ( var i=0; i < Links.length; i++ )
	{
		link = Links[i];
		if ( link.book.toLowerCase() == Name.toLowerCase() )
		{
			// Remove the record
			Links.splice(i, 1);
			break;
		}
	}

	return link.link;
}

var PDFViewer = "<iframe id='PDFPreviewText' width='100%' height='100%' type='text/html' allowfullscreen webkitallowfullscreen></iframe>";

function ShowBook(Name)
{
	$('#PDFText').html(PDFViewer);
	$('#PDFPreviewText').attr('src', 'JS/ViewerJS/#../../Intros/' + Name + '.pdf');

	// Set the PDF Download link
	$('#PDFLink').prop("href", "PDFs/" + Name + ".pdf");

	// Do not show Nefertiti's Gown or Musing the Maenad
	if (Name.indexOf('efertiti') == -1 && Name.indexOf('aenad') == -1)
	{
		$('#iBookStoreLine').css('display','block');
		// Set the iBookStore Link
		$('#iBookLink').prop("href", GetLinkForName(Name));
	}
	else
	{
		$('#iBookStoreLine').css('display','none');
	}

	// Show the control
	$('#BookPreview').fadeIn();
}

function ClosePreview()
{
	$('#BookPreview').fadeOut();
}

function TableLayoutParser(TableLayout, TableName)
{
	// This will receive all the HTML code to make up the table
	var html = [];

	// Helper function to create the html for a book
	var Book = function(i, special)
	{
		if ( TableLayout[i] == undefined )
		{
			return "";
		}
		else if ( TableLayout[i].toLowerCase().indexOf('blank') == 0 )
		{
			var text = TableLayout[i].split(':')[1];
			return "<div alt='' class='Covers' style='background-color:#ACACAC'><h3 class='BlankCoverText'><center>" + text + "</center></h3></div>";
		}
		else if ( TableLayout[i].toLowerCase().indexOf('nomagnification_nolink') == 0 )
		{
			var image = TableLayout[i].split(':')[1];
			var html = [
				"<img alt='' id='" + image + "' class='Covers' src='Images/" + image + ".png'>",
				"<img alt='' id='" + image + "_Large' class='Magnified' src='Images/" + image + ".png'>"
			];

			return html.join('');
		}
		else if ( TableLayout[i].toLowerCase().indexOf('nolink') == 0 )
		{
			var image = TableLayout[i].split(':')[1];
			var html = [
				"<img alt='' id='" + image + "' class='Covers' src='Images/" + image + ".png'>",
				"<img alt='' id='" + image + "_Large' class='Magnified' src='Images/" + image + ".png'>"
			];

			return html.join('');
		}
		else
		{
			var html = null;
			if ( TableLayout[i].indexOf('Essays') == -1 )
			{
				// Books
				html = [
					"<a onclick='ShowBook(\"" + TableLayout[i] + "\")'>",
					"<img alt='' id='" + TableLayout[i] + "' class='Covers' src='Images/" + TableLayout[i] + ".png'>",
					"</a>",
					"<div id='" + TableLayout[i] + "_Combo' class='Magnified'>",
					"<img alt='' id='" + TableLayout[i] + "_Large' class='CoverImage' src='Images/" + TableLayout[i] + ".png'>",
					"</div>"
				];
			}
			else
			{
				// Essays section
				html = [
					"<a href='" + GetLinkForName(TableLayout[i]) + "'>",
					"<img alt='' id='" + TableLayout[i] + "' class='Covers' src='Images/" + TableLayout[i] + ".png'>",
					"</a>",
					//"<center><a class='LinkText' href='Books/" + TableLayout[i] + "/index.html?title=" + TableLayout[i]+"'>Preview Book</a></center>",
					"<div id='" + TableLayout[i] + "_Combo' class='Magnified'>",
					"<img alt='' id='" + TableLayout[i] + "_Large' class='CoverImage' src='Images/" + TableLayout[i] + ".png'>",
					"</div>"
				];
			}

			return html.join('');
		}
	};

	var addRow = function(data)
	{
		var html = ['<tr>'];

		for ( var i=0; i < data.length; i++ )
		{
			var row = data[i];

			// create the <td>
			var td = '<td';
			if ( row.style )
			{
				td += " style='" + row.style + "'";
			}
			if ( row.class )
			{
				td += " class='" + row.class + "'";
			}
			if ( row.colspan)
			{
				td += " colspan='" + row.colspan + "'";
			}
			td += ">";
			html.push(td);

			// Add the contents
			if ( row.contents )
			{
				html.push( row.contents );
			}
			html.push('</td>');
		}

		html.push('</tr>');

		return html;
	};

	// Build the objects based on the list entries
	var objects = [];
	for ( var item=0; item < TableLayout.length; item++)
	{
		if (TableLayout[item].toLowerCase() == 'leftspacer' || TableLayout[item].toLowerCase() == 'rightspacer' )
		{
			objects.push({style:'width:25%;', contents:''});
		}
		else if (TableLayout[item].toLowerCase() == 'line')
		{
			objects.push({style:'width: 5px;'});
			objects.push({style:'width: 5px;', class:'Line'});
			objects.push({style:'width: 5px;'});
		}
		else if (TableLayout[item].toLowerCase() == 'noline')
		{
			objects.push({style:'width: 5px;'});
			objects.push({style:'width: 5px;'});
			objects.push({style:'width: 5px;'});
		}
		else if (TableLayout[item].toLowerCase().indexOf('empty') == 0 )
		{
			var position = TableLayout[item].indexOf(':');
			var text = '';
			if ( position != -1 )
			{
				text = TableLayout[item];
				text = text.slice(position+1);
			}
			objects.push({contents:text});
		}
		else if ( TableLayout[item].toLowerCase().indexOf('header') == 0 )
		{
			var position = TableLayout[item].indexOf(':');
			var text = '';
			if ( position != -1 )
			{
				text = TableLayout[item];
				text = text.slice(position+1);
			}
			objects.push({contents:"<center><h3 class='CellHeadingText'>" + text + "</h3></center>"});
		}
		else
		{
			objects.push({class:'CoverCell', contents:Book(item)} );
		}

		if ( TableLayout[item].toLowerCase() == 'rightspacer' )
		{
			var h = addRow( objects );
			objects = [];
			html = html.concat(h);
		}
	}

	// Add all the created HTML to the table
	$('#' + TableName).html( html.join('') );

	// Add the magnification effect to the books
	/*for ( var i=0; i < TableLayout.length; i++ )
	{
		var Name = TableLayout[i];
		if ( $.inArray(Name.split(':')[0].toLowerCase(),['leftspacer','rightspacer','empty','header','line','noline','blank']) != -1 )
		{
			continue;
		}
		(function(Name)
		{
			if ( Name.split(':')[0].toLowerCase() == "nolink" )
			{
				Name = Name.split(':')[1];
			}
			$("#" + Name).hover(function ()
			{
				$("#" + Name + "_Combo").css('display', 'block');
			}, function ()
			{
				$("#" + Name + "_Combo").css('display', 'none');
			});
			$("#" + Name).mousemove(function (e)
			{
				$("#" + Name + "_Combo").css("top", e.pageY - 230);

				// Swap the display from being on the right of the mouse onto the left for the right side of the screen
				if ( e.pageX < $(document).width() / 2 )
				{
					$("#" + Name + "_Combo").css("left", e.pageX + 10);
				}
				else
				{
					$("#" + Name + "_Combo").css("left", e.pageX - ( $("#" + Name + "_Large").width() + $("#" + Name + "_Text").width() ) - 40);
				}
			});
		})(Name);
	}*/
}