<?php

/* form.html.twig */
class __TwigTemplate_a13c9b0ea6838734e3764d1cc29281cc68ab6a4881bb703b14fd17721c2e2076 extends Twig_Template
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
        echo "<form action=\"https://authorizationform.000webhostapp.com/public/addNewTask.php\" method=\"post\" id=\"upload_form\">
\t<!-- добавьте адрес почты -->
\t<div class=\"form-group col-lg-7 col-md-7 \">
\t\t<label for=\"email\" title=\"Валидный адрес почты\">Электронная почта:</label>
\t\t<input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\"  value=\"";
        // line 5
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "email", array(), "array", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "email", array(), "array")))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "email", array(), "array")) : ("")), "html", null, true);
        echo "\"
\t\t       title=\"Валидный адрес почты\">
\t</div>
\t<!-- добавьте текст задачи -->
\t<div class=\"form-group col-lg-7 col-md-7 \">
\t\t<label for=\"task_text\" title=\"Минимум один, максимум 2000 знаков\">Текст:</label>
\t\t<textarea cols=\"80\" rows=\"10\" class=\"form-control\" name=\"task_text\" id=\"task_text\"
\t\t          title=\"Минимум один, максимум 2000 знаков\">";
        // line 12
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "task_text", array(), "array", true, true) &&  !(null === twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "task_text", array(), "array")))) ? (twig_get_attribute($this->env, $this->getSourceContext(), ($context["databack"] ?? null), "task_text", array(), "array")) : ("")), "html", null, true);
        echo "</textarea>
\t</div>
\t<!-- скрытые поля для хранения данных и кнопки -->
\t<div class=\"form-group col-lg-7 col-md-7 pull-right\">
\t\t<input type=\"hidden\" name=\"new_task_sent\" value=\"1\">
\t\t<button type=\"button\"
\t\t        onclick=\"previewTask(
\t\t            'preview_task',
\t\t            'upload_form', 'email', 'task_text'
\t\t            )\">
\t\t\tПредпросмотр
\t\t</button>
\t\t<button type=\"button\" onclick=\"upload('upload_form')\">Отправить</button>
\t</div>
</form>

<script src=\"js/upload.js\"></script>
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
        return array (  35 => 12,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form.html.twig", "/storage/ssd3/870/11186870/public_html/templates/NewTask/form.html.twig");
    }
}
