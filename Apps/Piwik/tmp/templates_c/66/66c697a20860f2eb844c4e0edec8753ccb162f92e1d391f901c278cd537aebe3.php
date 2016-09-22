<?php

/* @CoreUpdater/layout.twig */
class __TwigTemplate_bc4bd57377d4c1f8d1b7dc008be368b442d0521ccbc74b5ead242851341a3b3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html id=\"ng-app\" ng-app=\"piwikApp\">
<head>
    <meta charset=\"utf-8\">
    <title>Piwik &rsaquo; ";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")), "html", null, true);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
    <meta name=\"viewport\" content=\"initial-scale=1.0\" />
    <meta name=\"robots\" content=\"noindex,nofollow\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/themes/base/jquery-ui.min.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"index.php?module=Installation&action=getBaseCss\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Morpheus/stylesheets/simple_structure.css\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/CoreHome/stylesheets/jquery.ui.autocomplete.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/CoreUpdater/stylesheets/updateLayout.css\" />

    <script type=\"text/javascript\" src=\"libs/bower_components/jquery/dist/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"libs/bower_components/jquery-ui/ui/minified/jquery-ui.min.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/javascripts/donate.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreUpdater/javascripts/updateLayout.js\"></script>

    <script type=\"text/javascript\" src=\"libs/bower_components/angular/angular.min.js\"></script>
    <script type=\"text/javascript\" src=\"libs/bower_components/angular-sanitize/angular-sanitize.js\"></script>
    <script type=\"text/javascript\" src=\"libs/bower_components/angular-animate/angular-animate.js\"></script>
    <script type=\"text/javascript\" src=\"libs/bower_components/angular-cookies/angular-cookies.js\"></script>
    <script type=\"text/javascript\" src=\"libs/bower_components/ngDialog/js/ngDialog.min.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/services/service.module.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/filters/filter.module.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/filters/translate.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/directives/directive.module.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/common/directives/focus-anywhere-but-here.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/piwikApp.config.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/angularjs/piwikApp.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/Installation/javascripts/installation.js\"></script>

    <script type=\"text/javascript\">";
        // line 35
        echo call_user_func_array($this->env->getFunction('getJavascriptTranslations')->getCallable(), array());
        echo "</script>

    ";
        // line 37
        $this->loadTemplate("@CoreHome/_favicon.twig", "@CoreUpdater/layout.twig", 37)->display($context);
        // line 38
        echo "</head>
<!--[if lt IE 9 ]>
<body id=\"simple\" ng-app=\"app\" class=\"old-ie\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<body id=\"simple\" ng-app=\"app\"><!--<![endif]-->

<div class=\"logo\">
    <img title=\"Piwik\" alt=\"Piwik\" src=\"";
        // line 45
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["logoHeader"]) ? $context["logoHeader"] : $this->getContext($context, "logoHeader")), "html", null, true);
        echo "\"/>
    <br/>
    ";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "
</div>

<div class=\"box\">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "</div>

</body>
</html>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "    ";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 52,  97 => 51,  89 => 53,  87 => 51,  80 => 47,  75 => 45,  66 => 38,  64 => 37,  59 => 35,  26 => 5,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html id="ng-app" ng-app="piwikApp">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>Piwik &rsaquo; {{ 'CoreUpdater_UpdateTitle'|translate }}</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=EDGE,chrome=1"/>*/
/*     <meta name="viewport" content="initial-scale=1.0" />*/
/*     <meta name="robots" content="noindex,nofollow">*/
/* */
/*     <link rel="stylesheet" type="text/css" href="libs/jquery/themes/base/jquery-ui.min.css"/>*/
/*     <link rel="stylesheet" type="text/css" href="index.php?module=Installation&action=getBaseCss"/>*/
/*     <link rel="stylesheet" type="text/css" href="plugins/Morpheus/stylesheets/simple_structure.css"/>*/
/*     <link rel="stylesheet" type="text/css" href="plugins/CoreHome/stylesheets/jquery.ui.autocomplete.css" />*/
/*     <link rel="stylesheet" type="text/css" href="plugins/CoreUpdater/stylesheets/updateLayout.css" />*/
/* */
/*     <script type="text/javascript" src="libs/bower_components/jquery/dist/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="libs/bower_components/jquery-ui/ui/minified/jquery-ui.min.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreHome/javascripts/donate.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreUpdater/javascripts/updateLayout.js"></script>*/
/* */
/*     <script type="text/javascript" src="libs/bower_components/angular/angular.min.js"></script>*/
/*     <script type="text/javascript" src="libs/bower_components/angular-sanitize/angular-sanitize.js"></script>*/
/*     <script type="text/javascript" src="libs/bower_components/angular-animate/angular-animate.js"></script>*/
/*     <script type="text/javascript" src="libs/bower_components/angular-cookies/angular-cookies.js"></script>*/
/*     <script type="text/javascript" src="libs/bower_components/ngDialog/js/ngDialog.min.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreHome/angularjs/common/services/service.module.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreHome/angularjs/common/filters/filter.module.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreHome/angularjs/common/filters/translate.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreHome/angularjs/common/directives/directive.module.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreHome/angularjs/common/directives/focus-anywhere-but-here.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreHome/angularjs/piwikApp.config.js"></script>*/
/*     <script type="text/javascript" src="plugins/CoreHome/angularjs/piwikApp.js"></script>*/
/*     <script type="text/javascript" src="plugins/Installation/javascripts/installation.js"></script>*/
/* */
/*     <script type="text/javascript">{{ getJavascriptTranslations()|raw }}</script>*/
/* */
/*     {% include "@CoreHome/_favicon.twig" %}*/
/* </head>*/
/* <!--[if lt IE 9 ]>*/
/* <body id="simple" ng-app="app" class="old-ie"> <![endif]-->*/
/* <!--[if (gte IE 9)|!(IE)]><!-->*/
/* <body id="simple" ng-app="app"><!--<![endif]-->*/
/* */
/* <div class="logo">*/
/*     <img title="Piwik" alt="Piwik" src="{{ logoHeader }}"/>*/
/*     <br/>*/
/*     {{ 'General_OpenSourceWebAnalytics'|translate }}*/
/* </div>*/
/* */
/* <div class="box">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
/* */
