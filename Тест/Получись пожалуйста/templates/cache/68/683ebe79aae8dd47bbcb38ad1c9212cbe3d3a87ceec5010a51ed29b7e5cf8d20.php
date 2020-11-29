<?php

/* reg.html.twig */
class __TwigTemplate_ecb1428cf8ce789903f30fbe10cb2c8e6a51d8867e6007cac00781e33cb83f4f extends Twig_Template
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
\t<title>Регистрация</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width\" >
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"https://authorizationform.000webhostapp.com/public/css/reg.css\"/>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
\t";
        // line 13
        $this->loadTemplate("navbar.html.twig", "reg.html.twig", 13)->display($context);
        // line 14
        echo "\t<div class=\"container\">
\t\t<h1>Регистрация</h1>
\t\t";
        // line 16
        $this->loadTemplate("usermessage.html.twig", "reg.html.twig", 16)->display($context);
        // line 17
        echo "\t\t";
        $this->loadTemplate("form.html.twig", "reg.html.twig", 17)->display($context);
        // line 18
        echo "\t</div>
\t
</body>

";
    }

    public function getTemplateName()
    {
        return "reg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 17,  39 => 16,  35 => 14,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reg.html.twig", "/storage/ssd3/870/11186870/public_html/templates/Registration/reg.html.twig");
    }
}
