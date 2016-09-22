/**
 * Created by Michael on 2016-01-27.
 */
var row = 0;
var col = 0;
var max_col = 5;
var table = [];
var Directory = "Essays/";

function Init()
{
	$.getJSON(Directory + "/GetDirectory.php", function(files)
	{
		files.sort();

		for(var i=0; i < files.length; i++)
		{
			var file = files[i];
			if ( file == "index.html")
				continue;

			if ( file.toLowerCase().indexOf(".pdf") != -1 )
				addFile(file);
		}

		$('#Essays').html(table.join(''));
	});
}

function addFile(file)
{
	// If we are at the beginning, start the row
	if ( col == 0 )
		addRowStart();

	var filename = file.substr(0, file.indexOf(".pdf"));

	// Add the item
	addColStart();
	addItem(filename);
	addColEnd();
	col++;

	// If this is the last item, start the next row
	if ( col+1 == max_col )
	{
		addRowEnd(table);
		row++;
		col = 0;
	}
}

function addItem(filename)
{
	table.push("<center><a class='text' href='" + (Directory + filename) +".pdf'><div class='container'><img class='image' src='" + Directory + "pdflogo.png'><p class='text'>" + filename + "</p></div></a></center>");
}

function addColStart()
{
	table.push("<td class='EssayCol'>");
}

function addColEnd()
{
	table.push("</td>");
}

function addRowStart()
{
	table.push("<tr class='EssayRow'>");
}

function addRowEnd()
{
	table.push("</tr>");
}