<?php

/* preview.html.twig */
class __TwigTemplate_34b5130fdd95c26d0d5bb03a5bdfe1920377c1f2dc6953bc20b44b9ac6ef4818 extends Twig_Template
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
        echo "<div class=\"preview_task\">
\t\t<div class=\"col-md-8 col-lg-8 align-middle\" >
\t\t\t<p>Имя пользователя: ";
        // line 3
        echo twig_escape_filter($this->env, ((($context["authorized"] ?? null)) ? (($context["username"] ?? null)) : ("Guest")), "html", null, true);
        echo "</p>
\t\t\t<p>Электронная почта: %js_replace_email%</p>
\t\t\t<div id=\"response\"></div>
\t\t\t<div class=\"clear\"></div>
\t\t\t<p>Текст задачи: %js_replace_text%</p>
\t\t\t<p>Статус задачи: Не выполнено</p>
\t\t\t<button type=\"button\" onclick=\"closePreview('preview_task', 'upload_form')\">Закрыть предпросмотр</button>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "preview.html.twig", "/storage/ssd3/870/11186870/public_html/templates/NewTask/preview.html.twig");
    }
}
