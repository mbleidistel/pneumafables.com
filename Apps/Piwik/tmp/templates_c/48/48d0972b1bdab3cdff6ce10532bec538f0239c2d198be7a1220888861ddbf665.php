<?php

/* @CoreUpdater/runUpdaterAndExit_done.twig */
class __TwigTemplate_14062a44c40e41e58fc765f00f8487c8babadc70428e95bb0d9edde9ae4ff253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@CoreUpdater/layout.twig", "@CoreUpdater/runUpdaterAndExit_done.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CoreUpdater/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageContent", "<a target=\"_blank\" href=\"?module=Proxy&action=redirect&url=http://piwik.org/faq/\">", "</a>", "</li><li>"));
        echo "
";
        $context["helpMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if ((isset($context["coreError"]) ? $context["coreError"] : $this->getContext($context, "coreError"))) {
            // line 9
            echo "    <div class=\"header\">
        <h1>";
            // line 10
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateErrorTitle")), "html", null, true);
            echo "</h1>
    </div>
    <div class=\"content\">
        <div class=\"alert alert-danger\">
            ";
            // line 14
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_CriticalErrorDuringTheUpgradeProcess")), "html", null, true);
            echo "
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "                <br/><strong>";
                echo \Piwik\piwik_escape_filter($this->env, strip_tags($context["message"]), "html", null, true);
                echo "</strong>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </div>
        <p>";
            // line 19
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenError")), "html", null, true);
            echo "</p>
        <ul>
            <li>";
            // line 21
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["helpMessage"]) ? $context["helpMessage"] : $this->getContext($context, "helpMessage")), "html", null, true);
            echo "</li>
        </ul>
        <p>";
            // line 23
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp")), "html", null, true);
            echo "</p>
        <ul>
            <li>";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_1")), "html", null, true);
            echo "</li>
            <li>";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_2")), "html", null, true);
            echo "</li>
            <li>";
            // line 27
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_3")), "html", null, true);
            echo " <a href='https://piwik.org/faq/how-to-update/#faq_179' rel='noreferrer' target='_blank'>(see FAQ)</a></li>
            <li>";
            // line 28
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_4")), "html", null, true);
            echo "</li>
            <li>";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDIYHelp_5")), "html", null, true);
            echo "</li>
        </ul>
    </div>
";
        } else {
            // line 33
            echo "
    ";
            // line 34
            if (((twig_length_filter($this->env, (isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) == 0) && (twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) == 0))) {
                // line 35
                echo "        <div class=\"header\">
            <h1>";
                // line 36
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikHasBeenSuccessfullyUpgraded")), "html", null, true);
                echo "</h1>
        </div>
    ";
            }
            // line 39
            echo "
    <div class=\"content\">

        ";
            // line 42
            if ((twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0)) {
                // line 43
                echo "            <div class=\"alert alert-warning\">
                <p>";
                // line 44
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_WarningMessages")), "html", null, true);
                echo "</p>
                ";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 46
                    echo "                    <br/><strong>";
                    echo \Piwik\piwik_escape_filter($this->env, strip_tags($context["message"]), "html", null, true);
                    echo "</strong>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "            </div>
        ";
            }
            // line 50
            echo "
        ";
            // line 51
            if ((twig_length_filter($this->env, (isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) > 0)) {
                // line 52
                echo "            <div class=\"alert alert-warning\">
                <p>";
                // line 53
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ErrorDuringPluginsUpdates")), "html", null, true);
                echo "</p>
                ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages")));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 55
                    echo "                    <br/><strong>";
                    echo \Piwik\piwik_escape_filter($this->env, strip_tags($context["message"]), "html", null, true);
                    echo "</strong>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "            </div>
            ";
                // line 58
                if ((array_key_exists("deactivatedPlugins", $context) && (twig_length_filter($this->env, (isset($context["deactivatedPlugins"]) ? $context["deactivatedPlugins"] : $this->getContext($context, "deactivatedPlugins"))) > 0))) {
                    // line 59
                    echo "                ";
                    $context["listOfDeactivatedPlugins"] = twig_join_filter((isset($context["deactivatedPlugins"]) ? $context["deactivatedPlugins"] : $this->getContext($context, "deactivatedPlugins")), ", ");
                    // line 60
                    echo "                <div class=\"alert alert-danger\">
                    ";
                    // line 61
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_WeAutomaticallyDeactivatedTheFollowingPlugins", (isset($context["listOfDeactivatedPlugins"]) ? $context["listOfDeactivatedPlugins"] : $this->getContext($context, "listOfDeactivatedPlugins")))), "html", null, true);
                    echo "
                </div>
            ";
                }
                // line 64
                echo "        ";
            }
            // line 65
            echo "
        ";
            // line 66
            if (((twig_length_filter($this->env, (isset($context["errorMessages"]) ? $context["errorMessages"] : $this->getContext($context, "errorMessages"))) > 0) || (twig_length_filter($this->env, (isset($context["warningMessages"]) ? $context["warningMessages"] : $this->getContext($context, "warningMessages"))) > 0))) {
                // line 67
                echo "            <p>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenWarning")), "html", null, true);
                echo "</p>
            <ul>
                <li>";
                // line 69
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["helpMessage"]) ? $context["helpMessage"] : $this->getContext($context, "helpMessage")), "html", null, true);
                echo "</li>
            </ul>
        ";
            } else {
                // line 72
                echo "            <div id=\"donate-form-container\">
                ";
                // line 73
                $this->loadTemplate("@CoreHome/_donate.twig", "@CoreUpdater/runUpdaterAndExit_done.twig", 73)->display($context);
                // line 74
                echo "            </div>
        ";
            }
            // line 76
            echo "
    </div>

    <div class=\"footer\">
        <a href=\"index.php\">";
            // line 80
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ContinueToPiwik")), "html", null, true);
            echo "</a>
    </div>

";
        }
        // line 84
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/runUpdaterAndExit_done.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 84,  235 => 80,  229 => 76,  225 => 74,  223 => 73,  220 => 72,  214 => 69,  208 => 67,  206 => 66,  203 => 65,  200 => 64,  194 => 61,  191 => 60,  188 => 59,  186 => 58,  183 => 57,  174 => 55,  170 => 54,  166 => 53,  163 => 52,  161 => 51,  158 => 50,  154 => 48,  145 => 46,  141 => 45,  137 => 44,  134 => 43,  132 => 42,  127 => 39,  121 => 36,  118 => 35,  116 => 34,  113 => 33,  106 => 29,  102 => 28,  98 => 27,  94 => 26,  90 => 25,  85 => 23,  80 => 21,  75 => 19,  72 => 18,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  45 => 9,  43 => 8,  40 => 7,  37 => 6,  33 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends '@CoreUpdater/layout.twig' %}*/
/* {% set helpMessage %}*/
/*     {{ 'CoreUpdater_HelpMessageContent'|translate('<a target="_blank" href="?module=Proxy&action=redirect&url=http://piwik.org/faq/">','</a>','</li><li>')|raw }}*/
/* {% endset %}*/
/* */
/* {% block content %}*/
/* */
/* {% if coreError %}*/
/*     <div class="header">*/
/*         <h1>{{ 'CoreUpdater_UpdateErrorTitle'|translate }}</h1>*/
/*     </div>*/
/*     <div class="content">*/
/*         <div class="alert alert-danger">*/
/*             {{ 'CoreUpdater_CriticalErrorDuringTheUpgradeProcess'|translate }}*/
/*             {% for message in errorMessages %}*/
/*                 <br/><strong>{{ message|striptags }}</strong>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <p>{{ 'CoreUpdater_HelpMessageIntroductionWhenError'|translate }}</p>*/
/*         <ul>*/
/*             <li>{{ helpMessage }}</li>*/
/*         </ul>*/
/*         <p>{{ 'CoreUpdater_ErrorDIYHelp'|translate }}</p>*/
/*         <ul>*/
/*             <li>{{ 'CoreUpdater_ErrorDIYHelp_1'|translate }}</li>*/
/*             <li>{{ 'CoreUpdater_ErrorDIYHelp_2'|translate }}</li>*/
/*             <li>{{ 'CoreUpdater_ErrorDIYHelp_3'|translate }} <a href='https://piwik.org/faq/how-to-update/#faq_179' rel='noreferrer' target='_blank'>(see FAQ)</a></li>*/
/*             <li>{{ 'CoreUpdater_ErrorDIYHelp_4'|translate }}</li>*/
/*             <li>{{ 'CoreUpdater_ErrorDIYHelp_5'|translate }}</li>*/
/*         </ul>*/
/*     </div>*/
/* {% else %}*/
/* */
/*     {% if errorMessages|length == 0 and warningMessages|length == 0 %}*/
/*         <div class="header">*/
/*             <h1>{{ 'CoreUpdater_PiwikHasBeenSuccessfullyUpgraded'|translate }}</h1>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="content">*/
/* */
/*         {% if warningMessages|length > 0 %}*/
/*             <div class="alert alert-warning">*/
/*                 <p>{{ 'CoreUpdater_WarningMessages'|translate }}</p>*/
/*                 {% for message in warningMessages %}*/
/*                     <br/><strong>{{ message|striptags }}</strong>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% if errorMessages|length > 0 %}*/
/*             <div class="alert alert-warning">*/
/*                 <p>{{ 'CoreUpdater_ErrorDuringPluginsUpdates'|translate }}</p>*/
/*                 {% for message in errorMessages %}*/
/*                     <br/><strong>{{ message|striptags }}</strong>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             {% if deactivatedPlugins is defined and deactivatedPlugins|length > 0 %}*/
/*                 {% set listOfDeactivatedPlugins=deactivatedPlugins|join(', ') %}*/
/*                 <div class="alert alert-danger">*/
/*                     {{ 'CoreUpdater_WeAutomaticallyDeactivatedTheFollowingPlugins'|translate(listOfDeactivatedPlugins) }}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if errorMessages|length > 0 or warningMessages|length > 0 %}*/
/*             <p>{{ 'CoreUpdater_HelpMessageIntroductionWhenWarning'|translate }}</p>*/
/*             <ul>*/
/*                 <li>{{ helpMessage }}</li>*/
/*             </ul>*/
/*         {% else %}*/
/*             <div id="donate-form-container">*/
/*                 {% include "@CoreHome/_donate.twig" %}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     <div class="footer">*/
/*         <a href="index.php">{{ 'General_ContinueToPiwik'|translate }}</a>*/
/*     </div>*/
/* */
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
