<?php

/* macros.twig */
class __TwigTemplate_6b1a1ef134259a232777f8bfc9032ca098806c106a560ad58930f8e7a5d20ede extends Twig_Template
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
    }

    // line 1
    public function macro_nested($__array__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "array" => $__array__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            if (twig_test_iterable(($context["array"] ?? null))) {
                // line 3
                echo "\t\t<blockquote>
\t\t\t";
                // line 4
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["array"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                    // line 5
                    echo "\t\t\t\t";
                    $context["__internal_6a080d4066567bce170a16f34cadb032dd596f581e4caae9f8079b0572b8e2be"] = $this;
                    // line 6
                    echo "\t\t\t\t";
                    echo $context["__internal_6a080d4066567bce170a16f34cadb032dd596f581e4caae9f8079b0572b8e2be"]->macro_nested($context["element"]);
                    echo "
\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 8
                echo "\t\t</blockquote>
\t";
            } else {
                // line 10
                echo "\t\t<p>";
                echo twig_escape_filter($this->env, ($context["array"] ?? null), "html", null, true);
                echo "</p>
\t";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  55 => 8,  46 => 6,  43 => 5,  39 => 4,  36 => 3,  33 => 2,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "macros.twig", "/storage/ssd3/870/11186870/public_html/templates/macros.twig");
    }
}
