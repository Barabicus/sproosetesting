<?php

/* C:\xampp\htdocs\octobercms/themes/demo/pages/ajax.htm */
class __TwigTemplate_e67a2d99d06af8f669715d380b4f537ae145a9bae45db054fb67d67b86f3b148 extends Twig_Template
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
        echo "<div class=\"jumbotron title-js\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-8\">
                <h1>AJAX framework</h1>
                <p>This built-in JavaScript poo framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container\">

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Calculator</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
                <input type=\"text\" class=\"form-control\" value=\"15\" name=\"value1\" style=\"width:100px\">
                <select class=\"form-control\" name=\"operation\" style=\"width: 70px\">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                    <option>/</option>
                </select>
                <input type=\"text\" class=\"form-control\" value=\"5\" name=\"value2\" style=\"width:100px\">
                <button type=\"submit\" class=\"btn btn btn-primary\">Calculate</button>
            </form>
        </div>
        
        <div class=\"panel-footer\" id=\"result\">
            ";
        // line 33
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("calcresult"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "        </div>
    </div>
    
    
        <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">Server side command</h3>
        </div>
        <div class=\"panel-body\">
            <form class=\"form-inline\" data-request=\"onCmd\">
                <button type=\"submit\" class=\"btn btn btn-primary\">Execute Command</button>
            </form>
        </div>
        
        <div class=\"panel-footer\" id=\"result\">
            ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("calcresult"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "        </div>
    </div>

</div>

<!-- Page Explanation -->
<div class=\"container\">";
        // line 56
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("explain/ajax.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        echo "</div>

<br />

<div class=\"text-center\">
    <p><a href=\"";
        // line 61
        echo $this->env->getExtension('CMS')->pageFilter("plugins");
        echo "\" class=\"btn btn-lg btn-default\">Continue to Plugin components</a></p>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/demo/pages/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 61,  86 => 56,  78 => 50,  74 => 49,  57 => 34,  53 => 33,  19 => 1,);
    }
}
/* <div class="jumbotron title-js">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-8">*/
/*                 <h1>AJAX framework</h1>*/
/*                 <p>This built-in JavaScript poo framework provides simple but powerful AJAX capabilities. Check out the calculator example below.</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Calculator</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form class="form-inline" data-request="onTest" data-request-update="calcresult: '#result'">*/
/*                 <input type="text" class="form-control" value="15" name="value1" style="width:100px">*/
/*                 <select class="form-control" name="operation" style="width: 70px">*/
/*                     <option>+</option>*/
/*                     <option>-</option>*/
/*                     <option>*</option>*/
/*                     <option>/</option>*/
/*                 </select>*/
/*                 <input type="text" class="form-control" value="5" name="value2" style="width:100px">*/
/*                 <button type="submit" class="btn btn btn-primary">Calculate</button>*/
/*             </form>*/
/*         </div>*/
/*         */
/*         <div class="panel-footer" id="result">*/
/*             {% partial "calcresult" %}*/
/*         </div>*/
/*     </div>*/
/*     */
/*     */
/*         <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">Server side command</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             <form class="form-inline" data-request="onCmd">*/
/*                 <button type="submit" class="btn btn btn-primary">Execute Command</button>*/
/*             </form>*/
/*         </div>*/
/*         */
/*         <div class="panel-footer" id="result">*/
/*             {% partial "calcresult" %}*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* */
/* <!-- Page Explanation -->*/
/* <div class="container">{% partial "explain/ajax.htm" %}</div>*/
/* */
/* <br />*/
/* */
/* <div class="text-center">*/
/*     <p><a href="{{ 'plugins'|page }}" class="btn btn-lg btn-default">Continue to Plugin components</a></p>*/
/* </div>*/
