<?php

/* user/login.html.twig */
class __TwigTemplate_e2cfcc09ed57d3f58667896578c5d6210a91cd2c14334cd39ae0f922366bef11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "user/login.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_maincontent($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 3
        echo "
    ";
        // line 4
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 5
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messagekey", []), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", []), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 9
        echo "
    <form method=\"post\">
        <div class=\"form-group\">
            <label for=\"_username\">Pseudo</label>
            <input type=\"text\" class=\"form-control\" id=\"_username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["lastUsername"] ?? $this->getContext($context, "lastUsername")), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"_password\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"_password\" name=\"_password\">
        </div>
        <div>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
        <label for=\"remember_me\">Se souvenir de moi</label>
        </div>
        <button type=\"submit\">Valider</button>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  63 => 9,  57 => 6,  54 => 5,  52 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout/layout.html.twig' %}
{% block maincontent %}

    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messagekey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <form method=\"post\">
        <div class=\"form-group\">
            <label for=\"_username\">Pseudo</label>
            <input type=\"text\" class=\"form-control\" id=\"_username\" name=\"_username\" value=\"{{ lastUsername }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"_password\">Mot de passe</label>
            <input type=\"password\" class=\"form-control\" id=\"_password\" name=\"_password\">
        </div>
        <div>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked/>
        <label for=\"remember_me\">Se souvenir de moi</label>
        </div>
        <button type=\"submit\">Valider</button>
    </form>

{% endblock %}", "user/login.html.twig", "C:\\wamp64\\www\\bucket\\app\\Resources\\views\\user\\login.html.twig");
    }
}
