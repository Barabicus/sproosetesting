<?php

/* C:\xampp\htdocs\octobercms/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_71fae2d076fdf66d80b8a85e49c5fe7aae6b6dac7dd1aca7efadf0e7a9347609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_e4ba16cfc99ca29d730742f129af102e9b51c93f27508984bfc242a353d8e694' => array($this, 'block___internal_e4ba16cfc99ca29d730742f129af102e9b51c93f27508984bfc242a353d8e694'),
            '__internal_870c805361fe5021d903c383336935271848a8f530d0a8a29bfd6501efc156c0' => array($this, 'block___internal_870c805361fe5021d903c383336935271848a8f530d0a8a29bfd6501efc156c0'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<hr />

<!-- This file is an explanation of the AJAX page -->

<p class=\"lead\">
    <i class=\"icon-copy\"></i> &nbsp; The HTML markup for this example:
</p>

<pre>";
        // line 9
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_e4ba16cfc99ca29d730742f129af102e9b51c93f27508984bfc242a353d8e694", $context, $blocks));
        // line 24
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-tags\"></i> &nbsp; The <code>calcresult</code> partial:
</p>

<pre>";
        // line 32
        echo twig_escape_filter($this->env, (string) $this->renderBlock("__internal_870c805361fe5021d903c383336935271848a8f530d0a8a29bfd6501efc156c0", $context, $blocks));
        // line 37
        echo "</pre>

<hr />

<p class=\"lead\">
    <i class=\"icon-code\"></i> &nbsp; The <code>onTest</code> PHP code:
</p>

<pre>function onTest()
{
    \$value1 = post('value1');
    \$value2 = post('value2');
    \$operation = post('operation');

    switch (\$operation) {
        case '+' : 
            \$this['result'] = \$value1 + \$value2;
            break;
        case '-' : 
            \$this['result'] = \$value1 - \$value2;
            break;
        case '*' : 
            \$this['result'] = \$value1 * \$value2;
            break;
        default : 
            \$this['result'] = \$value1 / \$value2;
            break;
    }
}</pre>";
    }

    // line 9
    public function block___internal_e4ba16cfc99ca29d730742f129af102e9b51c93f27508984bfc242a353d8e694($context, array $blocks = array())
    {
        echo "<!-- The form -->
<form data-request=\"onTest\" data-request-update=\"calcresult: '#result'\">
    <input type=\"text\" value=\"15\" name=\"value1\">
    <select name=\"operation\">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type=\"text\" value=\"5\" name=\"value2\">
    <button type=\"submit\">Calculate</button>
</form>

<!-- The result -->
<div id=\"result\">";
        // line 23
        echo "{% partial \"calcresult\" %}";
        echo "</div>
";
    }

    // line 32
    public function block___internal_870c805361fe5021d903c383336935271848a8f530d0a8a29bfd6501efc156c0($context, array $blocks = array())
    {
        // line 33
        echo "{% if result %}";
        echo "
    The result is ";
        // line 34
        echo "{{ result }}";
        echo ".
";
        // line 35
        echo "{% else %}";
        echo "
    Click the <em>Calculate</em> button to find the answer.
";
        // line 37
        echo "{% endif %}";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octobercms/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 37,  112 => 35,  108 => 34,  104 => 33,  101 => 32,  95 => 23,  77 => 9,  45 => 37,  43 => 32,  33 => 24,  31 => 9,  21 => 1,);
    }
}
/* <hr />*/
/* */
/* <!-- This file is an explanation of the AJAX page -->*/
/* */
/* <p class="lead">*/
/*     <i class="icon-copy"></i> &nbsp; The HTML markup for this example:*/
/* </p>*/
/* */
/* <pre>{% filter escape %}<!-- The form -->*/
/* <form data-request="onTest" data-request-update="calcresult: '#result'">*/
/*     <input type="text" value="15" name="value1">*/
/*     <select name="operation">*/
/*         <option>+</option>*/
/*         <option>-</option>*/
/*         <option>*</option>*/
/*         <option>/</option>*/
/*     </select>*/
/*     <input type="text" value="5" name="value2">*/
/*     <button type="submit">Calculate</button>*/
/* </form>*/
/* */
/* <!-- The result -->*/
/* <div id="result">{{ "{% partial \"calcresult\" %}" }}</div>*/
/* {% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-tags"></i> &nbsp; The <code>calcresult</code> partial:*/
/* </p>*/
/* */
/* <pre>{% filter escape %}*/
/* {{ "{% if result %}" }}*/
/*     The result is {{ "{{ result }}" }}.*/
/* {{ "{% else %}" }}*/
/*     Click the <em>Calculate</em> button to find the answer.*/
/* {{ "{% endif %}" }}{% endfilter %}</pre>*/
/* */
/* <hr />*/
/* */
/* <p class="lead">*/
/*     <i class="icon-code"></i> &nbsp; The <code>onTest</code> PHP code:*/
/* </p>*/
/* */
/* <pre>function onTest()*/
/* {*/
/*     $value1 = post('value1');*/
/*     $value2 = post('value2');*/
/*     $operation = post('operation');*/
/* */
/*     switch ($operation) {*/
/*         case '+' : */
/*             $this['result'] = $value1 + $value2;*/
/*             break;*/
/*         case '-' : */
/*             $this['result'] = $value1 - $value2;*/
/*             break;*/
/*         case '*' : */
/*             $this['result'] = $value1 * $value2;*/
/*             break;*/
/*         default : */
/*             $this['result'] = $value1 / $value2;*/
/*             break;*/
/*     }*/
/* }</pre>*/
