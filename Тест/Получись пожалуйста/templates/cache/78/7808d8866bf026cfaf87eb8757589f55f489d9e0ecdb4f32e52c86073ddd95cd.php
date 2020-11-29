<?php

/* search.html.twig */
class __TwigTemplate_2d79d06c0f4d5bac6d7218b38614b2b36686bebba9a73d0766dad1c9e35afed7 extends Twig_Template
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
        echo "<div class=\"container  search_box\">
\t<div class=\"float-right\">
\t\t<form action=\"\" method=\"get\" class=\"form-inline\">
\t\t\t<div class=\"form-group \">
\t\t\t\t<label for=\"sort_by\">Сортировать по: </label>
\t\t\t\t<select name=\"sort_by\" class=\"form-control\">
\t\t\t\t\t<option value=\"username\">Имя пользователя</option>
\t\t\t\t\t<option value=\"e-mail\">Почта</option>
\t\t\t\t\t<option value=\"fulfilled\">Статус</option>
\t\t\t\t\t<option value=\"admin_fulfilled\">Отредактировано</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"form-group \" >
\t\t\t\t<label for=\"asc\">По возр.</label>
\t\t\t\t<input type=\"radio\" name=\"order\" id=\"asc\" value=\"asc\" checked=\"checked\" class=\"form-control\">
\t\t\t</div>
\t\t\t<div class=\"form-group \">
\t\t\t\t<label for=\"desc\">По убыв.</label>
\t\t\t\t<input type=\"radio\" name=\"order\" id=\"desc\" value=\"desc\" class=\"form-control\">
\t\t\t</div>
\t\t\t<input type=\"submit\" class=\"btn btn-info\" value=\"Сортировать\">
\t\t\t
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search.html.twig", "/storage/ssd3/870/11186870/public_html/templates/List/search.html.twig");
    }
}
