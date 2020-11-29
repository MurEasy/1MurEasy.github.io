<?php

/* Errors/error.html.twig */
class __TwigTemplate_5d5461cec42cf863c156dac6de3a4958441fce4d8ef367546342951e6fa7b4ad extends Twig_Template
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
        $context["macros"] = $this->loadTemplate("macros.twig", "Errors/error.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
\t<head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://authorizationform.000webhostapp.com/public/css/error.css\"/>
\t\t<title>Упс, что-то пошло не так</title>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
\t</head>
\t<body>
\t\t";
        // line 10
        echo $context["macros"]->macro_nested(($context["error"] ?? null));
        echo "
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" class=\"button\">";
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "</a>
\t\t
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "Errors/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Errors/error.html.twig", "/storage/ssd3/870/11186870/public_html/templates/Errors/error.html.twig");
    }
}
