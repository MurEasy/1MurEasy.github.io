<?php

/* navbar.html.twig */
class __TwigTemplate_26d9d1d4bb5f8f1537777ef09a938c549bbbdd38bc50358eee4783d8ba6d06f2 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default\">
\t<div class=\"container-fluid\">
\t\t<!-- сворачиваемый навбар бутстрапа -->
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<p class=\"navbar-brand\">Задачник</p>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t<li><a href=\"list.php\">Главная</a></li>
\t\t\t\t<li><a href=\"registration.php\">Регистрация</a></li>
\t\t\t\t<li><a href=\"addNewTask.php\">Добавить задачу</a></li>
\t\t\t</ul>
\t\t\t<!-- опциональная панель логина перенаправляет на login.php -->
\t\t\t";
        // line 19
        if ( !(isset($context["authorized"]) || array_key_exists("authorized", $context) ? $context["authorized"] : (function () { throw new Twig_Error_Runtime('Variable "authorized" does not exist.', 19, $this->getSourceContext()); })())) {
            // line 20
            echo "\t\t\t\t<form class=\"navbar-form navbar-right\" action=\"login.php\" method=\"post\">
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Имя пользователя\" name=\"navbar_username\">
\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Пароль\" name=\"navbar_pwd\">
\t\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"login_form_sent\" value=\"1\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Войти</button>
\t\t\t\t</form>
\t\t\t";
        } else {
            // line 27
            echo "\t\t\t<!-- опциональная панель логаута, только если пользователь уже залогинен -->
\t\t\t<form action=\"https://authorizationform.000webhostapp.com/public/logout.php\" method=\"post\" class=\"navbar-form navbar-right\" >
\t\t\t\t<input type=\"text\" value = \"Пользователь: ";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new Twig_Error_Runtime('Variable "username" does not exist.', 29, $this->getSourceContext()); })()), "html", null, true);
            echo "\" class=\"form-control\" name=\"navbar_username_readonly\" readonly>
\t\t\t\t<input type=\"hidden\" class=\"form-control\" name=\"logout\" value=\"1\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Выйти</button>
\t\t\t</form>
\t\t\t";
        }
        // line 34
        echo "\t\t</div>
\t</div>
</nav>";
    }

    public function getTemplateName()
    {
        return "navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 34,  54 => 29,  50 => 27,  41 => 20,  39 => 19,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar.html.twig", "/storage/ssd3/870/11186870/public_html/templates/navbar.html.twig");
    }
}
