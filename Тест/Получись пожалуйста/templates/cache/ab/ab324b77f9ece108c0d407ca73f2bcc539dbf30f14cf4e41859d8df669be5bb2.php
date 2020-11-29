<?php

/* table.html.twig */
class __TwigTemplate_84fa0d250e69481ac1d258a2ffc28efe4d6ffcd7a3ad0cefe33fe3a2dffee0fd extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new Twig_Error_Runtime('Variable "tasks" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 2
            echo "\t<div class=\"task \">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8 col-lg-8 align-middle\" >
\t\t\t\t<p>Имя пользователя: ";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "username", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p>Электронная почта: ";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "email", array()), "html", null, true);
            echo "</p>
\t\t\t\t<div id=\"response\"></div>
\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t<p>Текст задачи: ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "text", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p>Статус задачи: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "fulfilled", array()), "html", null, true);
            echo "</p>
\t\t\t\t<p>Отредактировано администратором: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "admin_fulfilled", array()), "html", null, true);
            echo "</p>
\t\t\t\t";
            // line 12
            if (((isset($context["is_admin"]) || array_key_exists("is_admin", $context) ? $context["is_admin"] : (function () { throw new Twig_Error_Runtime('Variable "is_admin" does not exist.', 12, $this->getSourceContext()); })()) == true)) {
                // line 13
                echo "\t\t\t\t\t<form action=\"edit.php\" method=\"post\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label for=\"status\">Выполнено</label>
\t\t\t\t\t\t\t<input type=\"checkbox\" id = \"status\" name=\"fulfilled\" value=\"1\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"display: none\">
\t\t\t\t\t\t\t<label for=\"status_todo\">Отредактировать</label>
\t\t\t\t\t\t\t<input type=\"checkbox:checked\" id =\"status_todo\" name=\"admin_fulfilled\" value=\"1\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"task_id\" value=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-default\">Редактировать</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t";
            }
            // line 28
            echo "\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<ul class=\"pagination\">
\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["queries"]) || array_key_exists("queries", $context) ? $context["queries"] : (function () { throw new Twig_Error_Runtime('Variable "queries" does not exist.', 33, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
            // line 34
            echo "\t\t<li><a href=\"?";
            echo twig_escape_filter($this->env, $context["query"], "html", null, true);
            echo "\" class=\"inline-block\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()), "html", null, true);
            echo " </a></li>
\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 36,  101 => 34,  84 => 33,  81 => 32,  72 => 28,  64 => 23,  52 => 13,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  32 => 6,  28 => 5,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "table.html.twig", "/storage/ssd3/870/11186870/public_html/templates/List/table.html.twig");
    }
}
