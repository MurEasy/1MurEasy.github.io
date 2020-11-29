<?php

/* newtask.html.twig */
class __TwigTemplate_423a82adcc369d5f2732193f209c65a53d370281f887dc5ff260912f868c5d65 extends Twig_Template
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
\t<title>Добавить задачу</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link href=\"css/newtask.css\" rel=\"stylesheet\"  type=\"text/css\" />
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" type=\"text/javascript\"></script>
</head>
<body>
";
        // line 13
        $this->loadTemplate("navbar.html.twig", "newtask.html.twig", 13)->display($context);
        // line 14
        echo "<div class=\"container\" id=\"main_container\">
\t<h1>Добавить задачу</h1>
\t";
        // line 16
        $this->loadTemplate("usermessage.html.twig", "newtask.html.twig", 16)->display($context);
        // line 17
        echo "\t";
        $this->loadTemplate("form.html.twig", "newtask.html.twig", 17)->display($context);
        // line 18
        echo "\t";
        $this->loadTemplate("preview.html.twig", "newtask.html.twig", 18)->display($context);
        // line 19
        echo "</div>

</body>


";
    }

    public function getTemplateName()
    {
        return "newtask.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 19,  44 => 18,  41 => 17,  39 => 16,  35 => 14,  33 => 13,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newtask.html.twig", "/storage/ssd3/870/11186870/public_html/templates/NewTask/newtask.html.twig");
    }
}
