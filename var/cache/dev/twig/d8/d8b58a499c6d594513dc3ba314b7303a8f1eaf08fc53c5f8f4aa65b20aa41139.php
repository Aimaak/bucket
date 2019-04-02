<?php

/* layout/about_us.html.twig */
class __TwigTemplate_06ad3142f533c0d7925aa3fcb6a77228dfbb18932bcd3e1ca8d0f5554d18876c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "layout/about_us.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/about_us.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/about_us.html.twig"));

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
        echo "    <h1>About Us</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae delectus deserunt dolorum, itaque labore quisquam repellat sapiente? A aspernatur consequatur earum illum iste iusto molestiae odio officiis sapiente temporibus. Ut a nisl nulla. Nulla consectetur nisl vitae feugiat interdum. Maecenas rhoncus molestie rhoncus. Mauris aliquet pulvinar pellentesque. Maecenas sit amet ligula aliquet, semper libero nec, ornare sem. Aliquam erat volutpat. Suspendisse a diam fermentum, ultrices elit sed, fringilla velit. Duis eu leo ligula. Donec porttitor risus at tellus mattis, eget elementum tortor commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ac justo a nibh varius consectetur vel sed sem. Duis pharetra est at turpis mollis, vitae consequat tortor ultrices. Sed sollicitudin suscipit felis. Cras quis augue magna. Sed euismod nisi at interdum cursus. In faucibus commodo sapien, ac lacinia sem ultricies quis. Integer in nulla eu neque faucibus tempor. Donec vestibulum diam erat, ut molestie nibh porttitor non. Etiam suscipit sapien quis elit accumsan tempus. Nunc tincidunt felis a justo auctor, sed cursus mi aliquam. Donec egestas dui ac lorem dapibus cursus. Fusce dignissim ipsum arcu, vel posuere dolor tempus non. Cras ut lacinia metus</p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/layout.html.twig\" %}

{% block maincontent %}
    <h1>About Us</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae delectus deserunt dolorum, itaque labore quisquam repellat sapiente? A aspernatur consequatur earum illum iste iusto molestiae odio officiis sapiente temporibus. Ut a nisl nulla. Nulla consectetur nisl vitae feugiat interdum. Maecenas rhoncus molestie rhoncus. Mauris aliquet pulvinar pellentesque. Maecenas sit amet ligula aliquet, semper libero nec, ornare sem. Aliquam erat volutpat. Suspendisse a diam fermentum, ultrices elit sed, fringilla velit. Duis eu leo ligula. Donec porttitor risus at tellus mattis, eget elementum tortor commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ac justo a nibh varius consectetur vel sed sem. Duis pharetra est at turpis mollis, vitae consequat tortor ultrices. Sed sollicitudin suscipit felis. Cras quis augue magna. Sed euismod nisi at interdum cursus. In faucibus commodo sapien, ac lacinia sem ultricies quis. Integer in nulla eu neque faucibus tempor. Donec vestibulum diam erat, ut molestie nibh porttitor non. Etiam suscipit sapien quis elit accumsan tempus. Nunc tincidunt felis a justo auctor, sed cursus mi aliquam. Donec egestas dui ac lorem dapibus cursus. Fusce dignissim ipsum arcu, vel posuere dolor tempus non. Cras ut lacinia metus</p>
{% endblock %}", "layout/about_us.html.twig", "C:\\wamp64\\www\\bucket\\app\\Resources\\views\\layout\\about_us.html.twig");
    }
}
