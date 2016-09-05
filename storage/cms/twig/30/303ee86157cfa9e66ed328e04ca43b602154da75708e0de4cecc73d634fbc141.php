<?php

/* C:\xampp\htdocs\octobercms/themes/demo/layouts/default.htm */
class __TwigTemplate_a2d4f8db3a55f796c5e20ce04aa8079e764c72dbb286ee607b98a327014091a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>OctoberCMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->env->getExtension('CMS')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 12
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 13
        echo "        <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/theme.css"));
        // line 15
        echo "\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">

            <!-- Nav -->
            <nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">October Demo</a>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                       <ul class=\"nav navbar-nav\">
                       <!--
                            <li class=\"";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("home");
        echo "\">1) Basic concepts</a></li>
                            <li class=\"";
        // line 38
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("ajax");
        echo "\">1) AJAX framework</a></li>
                            <li class=\"";
        // line 39
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('CMS')->pageFilter("plugins");
        echo "\">1) Plugin components</a></li>
                           --> 
                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["derps"]) ? $context["derps"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["derp"]) {
            // line 42
            echo "                        <li class=\"";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "id", array()) == $this->getAttribute($context["derp"], "id", array()))) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo $this->env->getExtension('CMS')->pageFilter($this->getAttribute($context["derp"], "id", array()));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["derp"], "title", array()), "html", null, true);
            echo "</a></li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['derp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 53
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 54
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 58
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 62
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js"));
        // line 77
        echo "\"></script>
        ";
        // line 78
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 79
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 80
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 80,  161 => 79,  154 => 78,  151 => 77,  149 => 62,  144 => 59,  140 => 58,  134 => 54,  132 => 53,  121 => 44,  106 => 42,  102 => 41,  93 => 39,  85 => 38,  77 => 37,  69 => 32,  50 => 15,  47 => 13,  44 => 12,  40 => 11,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>OctoberCMS - {{ this.page.title }}</title>*/
/*         <meta name="description" content="{{ this.page.meta_description }}">*/
/*         <meta name="title" content="{{ this.page.meta_title }}">*/
/*         <meta name="author" content="OctoberCMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <meta name="generator" content="OctoberCMS">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/images/october.png'|theme }}" />*/
/*         {% styles %}*/
/*         <link href="{{ [*/
/*             'assets/css/theme.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/*     </head>*/
/*     <body>*/
/* */
/*         <!-- Header -->*/
/*         <header id="layout-header">*/
/* */
/*             <!-- Nav -->*/
/*             <nav id="layout-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*                 <div class="container">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand" href="{{ 'home'|page }}">October Demo</a>*/
/*                     </div>*/
/*                     <div class="collapse navbar-collapse navbar-main-collapse">*/
/*                        <ul class="nav navbar-nav">*/
/*                        <!--*/
/*                             <li class="{% if this.page.id == 'home' %}active{% endif %}"><a href="{{ 'home'|page }}">1) Basic concepts</a></li>*/
/*                             <li class="{% if this.page.id == 'ajax' %}active{% endif %}"><a href="{{ 'ajax'|page }}">1) AJAX framework</a></li>*/
/*                             <li class="{% if this.page.id == 'plugins' %}active{% endif %}"><a href="{{ 'plugins'|page }}">1) Plugin components</a></li>*/
/*                            --> */
/*                         {% for derp in derps %}*/
/*                         <li class="{% if this.page.id == derp.id %}active{% endif %}"><a href="{{derp.id|page}}">{{derp.title}}</a></li>*/
/*                         {% endfor %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/* */
/*         </header>*/
/* */
/*         <!-- Content -->*/
/*         <section id="layout-content">*/
/*             {% page %}*/
/*         </section>*/
/* */
/*         <!-- Footer -->*/
/*         <footer id="layout-footer">*/
/*             {% partial "footer" %}*/
/*         </footer>*/
/* */
/*         <!-- Scripts -->*/
/*         <script src="{{ [*/
/*             'assets/javascript/jquery.js',*/
/*             'assets/vendor/bootstrap/js/transition.js',*/
/*             'assets/vendor/bootstrap/js/alert.js',*/
/*             'assets/vendor/bootstrap/js/button.js',*/
/*             'assets/vendor/bootstrap/js/carousel.js',*/
/*             'assets/vendor/bootstrap/js/collapse.js',*/
/*             'assets/vendor/bootstrap/js/dropdown.js',*/
/*             'assets/vendor/bootstrap/js/modal.js',*/
/*             'assets/vendor/bootstrap/js/tooltip.js',*/
/*             'assets/vendor/bootstrap/js/popover.js',*/
/*             'assets/vendor/bootstrap/js/scrollspy.js',*/
/*             'assets/vendor/bootstrap/js/tab.js',*/
/*             'assets/vendor/bootstrap/js/affix.js',*/
/*             'assets/javascript/app.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/* */
/*     </body>*/
/* </html>*/
