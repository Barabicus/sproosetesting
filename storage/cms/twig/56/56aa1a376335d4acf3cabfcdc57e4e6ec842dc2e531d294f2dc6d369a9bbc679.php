<?php

/* C:\xampp\htdocs\octobercms/themes/demo/partials/footer.htm */
class __TwigTemplate_5e4a6bb0b31e40f003d2748fc3467dcf5debcaef328205f42e2b591f62d28523 extends Twig_Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">&copy; 2013 - ";
        // line 4
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Alexey Bobkov &amp; Samuel Georges.</p>
        <p>Poopy</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/demo/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div id="footer">*/
/*     <div class="container">*/
/*         <hr />*/
/*         <p class="muted credit">&copy; 2013 - {{ "now"|date("Y") }} Alexey Bobkov &amp; Samuel Georges.</p>*/
/*         <p>Poopy</p>*/
/*     </div>*/
/* </div>*/
