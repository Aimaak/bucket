<?php

/* layout/detail.html.twig */
class __TwigTemplate_241d5eed659810be8925d52069b951cac377b25c73a5016a4fa1f1b2b56b0f56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "layout/detail.html.twig", 1);
        $this->blocks = [
            'maincontent' => [$this, 'block_maincontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_maincontent($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["idea"] ?? $this->getContext($context, "idea")));
        foreach ($context['_seq'] as $context["_key"] => $context["currentIdea"]) {
            // line 5
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentIdea"], "title", []), "html", null, true);
            echo "</h3>
        ";
            // line 6
            if (($this->getAttribute($context["currentIdea"], "category", []) != null)) {
                // line 7
                echo "            <h6>Category : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["currentIdea"], "category", []), "name", []), "html", null, true);
                echo "</h6>
        ";
            } else {
                // line 9
                echo "            <h6>No category</h6>
        ";
            }
            // line 11
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentIdea"], "description", []), "html", null, true);
            echo "</p>
        <small>Written on ";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["currentIdea"], "dateCreated", []), "j F Y \\a\\t H:i:s"), "html", null, true);
            echo ", by ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["currentIdea"], "author", []), "html", null, true);
            echo "</small>

        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("idea_edit", ["id" => $this->getAttribute($context["currentIdea"], "id", [])]), "html", null, true);
            echo "\">Edit this idea</a>
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("idea_delete", ["id" => $this->getAttribute($context["currentIdea"], "id", [])]), "html", null, true);
            echo "\">Delete this idea</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentIdea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  83 => 14,  76 => 12,  71 => 11,  67 => 9,  61 => 7,  59 => 6,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends\"layout/layout.html.twig\" %}

{% block maincontent %}
    {% for currentIdea in idea %}
        <h3>{{ currentIdea.title }}</h3>
        {% if currentIdea.category != null %}
            <h6>Category : {{ currentIdea.category.name }}</h6>
        {% else %}
            <h6>No category</h6>
        {% endif %}
        <p>{{ currentIdea.description }}</p>
        <small>Written on {{ currentIdea.dateCreated|date(\"j F Y \\\\a\\\\t H:i:s\") }}, by {{ currentIdea.author }}</small>

        <a href=\"{{ path('idea_edit', {\"id\" : currentIdea.id}) }}\">Edit this idea</a>
        <a href=\"{{ path('idea_delete', {\"id\" : currentIdea.id}) }}\">Delete this idea</a>
    {% endfor %}
{% endblock %}", "layout/detail.html.twig", "C:\\wamp64\\www\\bucket\\app\\Resources\\views\\layout\\detail.html.twig");
    }
}
