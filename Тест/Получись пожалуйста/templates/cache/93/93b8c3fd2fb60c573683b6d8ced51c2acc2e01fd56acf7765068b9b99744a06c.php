<?php

/* edit.html.twig */
class __TwigTemplate_fb64198a639fa8619cc7a8287dd8bdf1797b09a730c15af983c4354be915dc83 extends Twig_Template
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

<div class=\"container\">
\t<form action=\"https://authorizationform.000webhostapp.com/public/edit.php\" method=\"post\">
\t\t<div class=\"form-group\">
\t\t\t<label for=\"task_text\" title=\"Максимум 2000 знаков\">Текст задачи номер ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["task_id"]) || array_key_exists("task_id", $context) ? $context["task_id"] : (function () { throw new Twig_Error_Runtime('Variable "task_id" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "</label>
\t\t\t<textarea cols=\"80\" rows=\"10\" class=\"form-control\"
\t\t\t          name=\"task_text\" id=\"task_text\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["task_text"]) || array_key_exists("task_text", $context) ? $context["task_text"] : (function () { throw new Twig_Error_Runtime('Variable "task_text" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>
\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<input type=\"hidden\" name=\"task_id\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["task_id"]) || array_key_exists("task_id", $context) ? $context["task_id"] : (function () { throw new Twig_Error_Runtime('Variable "task_id" does not exist.', 22, $this->getSourceContext()); })()), "html", null, true);
        echo "\">
\t\t\t<input type=\"hidden\" name=\"edit_form_sent\" value=\"1\">
\t\t\t<button type=\"submit\" class=\"btn btn-default\">Сохранить</button>
\t\t\t<a href=\"list.php\" class=\"btn btn-default\">Вернуться</a>
\t\t</div>
\t</form>
</div>
</body>";
    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  42 => 19,  37 => 17,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "edit.html.twig", "/storage/ssd3/870/11186870/public_html/templates/Edit/edit.html.twig");
    }
}
