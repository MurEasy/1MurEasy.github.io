<?php

/* list.html.twig */
class __TwigTemplate_ab59eb3abc8994d91ae38a67dfd65e5ad9df30ce12299b1e10fb495613efc343 extends Twig_Template
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
<html lang=\"ru\">
<head>
\t<title>Задачник</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://authorizationform.000webhostapp.com/public/css/list.css\"/>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>

";
        // line 14
        $this->loadTemplate("navbar.html.twig", "list.html.twig", 14)->display($context);
        // line 15
        echo "<div class=\"container\">
\t";
        // line 16
        if ((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 16, $this->getSourceContext()); })())) {
            // line 17
            echo "\t\t<div class=\"message\">
\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 18, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "\t\t\t\t<p><strong>";
                echo twig_escape_filter($this->env, $context["message"]);
                echo "</strong></p>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "\t\t</div>
\t";
        }
        // line 23
        echo "\t";
        $this->loadTemplate("search.html.twig", "list.html.twig", 23)->display($context);
        // line 24
        echo "\t";
        $this->loadTemplate("table.html.twig", "list.html.twig", 24)->display($context);
        // line 25
        echo "</div>
</body>";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  64 => 24,  61 => 23,  57 => 21,  48 => 19,  44 => 18,  41 => 17,  39 => 16,  36 => 15,  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "list.html.twig", "/storage/ssd3/870/11186870/public_html/templates/List/list.html.twig");
    }
}
