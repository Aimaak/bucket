<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_5dcc8f7a5ae56f4dc7b4745c927e37c0cdfd50d8cbd3245e883e51eb6649e884 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "trace", []))) {
            // line 2
            echo $this->getAttribute(($context["exception"] ?? null), "class", []);
            echo ":
";
            // line 3
            if ( !twig_test_empty($this->getAttribute(($context["exception"] ?? null), "message", []))) {
                // line 4
                echo $this->getAttribute(($context["exception"] ?? null), "message", []);
                echo "
";
            }
            // line 6
            echo "
";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? null), "trace", []));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 8
                echo "  ";
                echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", ["trace" => $context["trace"]], false);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 8,  35 => 7,  32 => 6,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/traces.txt.twig", "C:\\wamp64\\www\\bucket\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
