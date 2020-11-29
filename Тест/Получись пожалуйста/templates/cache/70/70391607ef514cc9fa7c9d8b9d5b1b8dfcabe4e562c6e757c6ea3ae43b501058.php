<?php

/* form.html.twig */
class __TwigTemplate_59247ca129f9c1ae795d803e6510bd968dac034c3712bc75171c4e5d4066be34 extends Twig_Template
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
        echo "<form action=\"https://authorizationform.000webhostapp.com/public/registration.php\" method=\"post\">
\t<div class=\"form-group\">
\t\t<label for=\"name\" title=\"Четыре буквы, цифры или _\">Имя пользователя:</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"username\" id=\"name\"
\t\t       title=\"Четыре буквы, цифры или _\"
\t\t       value=\"";
        // line 6
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "username", array(), "array", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "username", array(), "array")))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "username", array(), "array")) : ("")), "html", null, true);
        echo "\"
\t\t>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"pwd\" title=\"Минимум шесть знаков\">Пароль:</label>
\t\t<input type=\"password\" class=\"form-control\" name=\"pwd\" id=\"pwd\" title=\"Минимум шесть знаков\">
\t</div>
\t<input type=\"hidden\" name=\"reg_form_sent\" value=\"1\">
\t<button type=\"submit\" class=\"btn btn-default\">Зарегистрироваться</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form.html.twig", "/storage/ssd3/870/11186870/public_html/templates/Registration/form.html.twig");
    }
}
