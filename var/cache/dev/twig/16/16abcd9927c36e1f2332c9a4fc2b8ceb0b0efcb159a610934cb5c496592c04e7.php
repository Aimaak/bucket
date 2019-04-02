<?php

/* layout/layout.html.twig */
class __TwigTemplate_f6af10a039811ad93bf7d5b4d6432f2cd3c3afff7770f471f58d05d9770cda45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'maincontent' => [$this, 'block_maincontent'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout/layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    <title>Bucket-List</title>
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color:darkblue\">
        <a class=\"navbar-brand\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Logo Bucket List\">
            Bucket-List
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
                ";
        // line 28
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 29
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"navbarDropdown\" href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_logout");
            echo "\">Logout</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"navbarDropdown\" href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("idea_add");
            echo "\">Add your idea</a>
                    </li>
                ";
        } else {
            // line 36
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"navbarDropdown\" href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_login");
            echo "\">Login</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"navbarDropdown\" href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register");
            echo "\">Register</a>
                    </li>
                ";
        }
        // line 43
        echo "
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Dropdown menu
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Home</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secondePage");
        echo "\">Patrick Sébastien</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("idea_list");
        echo "\">Ideas list</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Categories list</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("aboutUs");
        echo "\">About us</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("idea_add");
        echo "\">Add an idea</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
";
        // line 63
        $this->displayBlock('maincontent', $context, $blocks);
        // line 91
        echo "<footer class=\"page-footer font-small\" style=\"background-color: darkblue\">
    <div class=\"footer-copyright text-center py-3\">
      ©Bucket-List ";
        // line 93
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        <div>
            By <a target=\"_blank\" href=\"https://github.com/fabianalexisinostroza/Antu\">Fabián Alexis</a>
            <div>
                <a target=\"_blank\" href=\"https://creativecommons.org/licenses/by-sa/3.0\">CC BY-SA 3.0</a>,
                <a target=\"_blank\" href=\"https://commons.wikimedia.org/wiki/File%3AAntu_color-fill.svg\">via Wikimedia
                    Commons.</a>
            </div>
        </div>
    </div>
    </div>
</footer>
</body>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
        integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
        integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
        crossorigin=\"anonymous\"></script>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 63
    public function block_maincontent($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 64
        echo "    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae delectus deserunt dolorum, itaque
        labore
        quisquam repellat sapiente? A aspernatur consequatur earum illum iste iusto molestiae odio officiis sapiente
        temporibus.
        Ut a nisl nulla. Nulla consectetur nisl vitae feugiat interdum. Maecenas rhoncus molestie rhoncus. Mauris
        aliquet pulvinar pellentesque. Maecenas sit amet ligula aliquet, semper libero nec, ornare sem. Aliquam erat
        volutpat. Suspendisse a diam fermentum, ultrices elit sed, fringilla velit. Duis eu leo ligula. Donec porttitor
        risus at tellus mattis, eget elementum tortor commodo.
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ac justo a nibh varius consectetur vel sed
        sem. Duis pharetra est at turpis mollis, vitae consequat tortor ultrices. Sed sollicitudin suscipit felis. Cras
        quis augue magna. Sed euismod nisi at interdum cursus. In faucibus commodo sapien, ac lacinia sem ultricies
        quis. Integer in nulla eu neque faucibus tempor. Donec vestibulum diam erat, ut molestie nibh porttitor non.
        Etiam suscipit sapien quis elit accumsan tempus. Nunc tincidunt felis a justo auctor, sed cursus mi aliquam.
        Donec egestas dui ac lorem dapibus cursus. Fusce dignissim ipsum arcu, vel posuere dolor tempus non. Cras ut
        lacinia metus. Aliquam erat volutpat. Curabitur accumsan lacus arcu, vel ornare odio lobortis sed. Fusce arcu
        arcu, accumsan rhoncus nisi et, mattis fermentum purus. In gravida non sem nec varius. Quisque condimentum, arcu
        nec accumsan dignissim, diam orci scelerisque turpis, quis maximus urna nunc ut lacus. Nullam tellus mauris,
        condimentum a sagittis ut, fringilla non ipsum. Aliquam mattis sed turpis at facilisis. Ut eget ornare ante.
        Etiam commodo orci sit amet metus fringilla, sit amet feugiat tortor maximus. Sed at maximus elit. Donec
        hendrerit, nisi id tempor convallis, tortor dolor efficitur mauris, nec ultrices sem odio nec quam. Nam id dui
        laoreet, ultricies nibh id, porttitor felis. Duis laoreet consectetur ex, non sodales nibh auctor vitae. Nullam
        ultrices venenatis vestibulum. Curabitur pulvinar, dui ultrices rutrum ultrices, tortor lorem rutrum augue, nec
        mollis tellus elit sed urna. Donec nec diam pulvinar, congue purus quis, mollis sem. Sed mattis lorem eu
        consequat vehicula. Phasellus semper orci at elit consectetur commodo. Curabitur dapibus tellus nec lorem
        pharetra feugiat in et sem.
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 64,  178 => 63,  145 => 93,  141 => 91,  139 => 63,  129 => 56,  125 => 55,  121 => 54,  117 => 53,  113 => 52,  109 => 51,  99 => 43,  93 => 40,  87 => 37,  84 => 36,  78 => 33,  72 => 30,  69 => 29,  67 => 28,  54 => 18,  50 => 17,  41 => 11,  37 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
          integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('img/favicon.png') }}\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
    <title>Bucket-List</title>
</head>
<body>
<header>
    <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color:darkblue\">
        <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">
            <img src=\"{{ asset('img/logo.png') }}\" alt=\"Logo Bucket List\">
            Bucket-List
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav ml-auto\">
                {% if is_granted(\"ROLE_USER\") %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"navbarDropdown\" href=\"{{ path('user_logout') }}\">Logout</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"navbarDropdown\" href=\"{{ path('idea_add') }}\">Add your idea</a>
                    </li>
                {% else %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"navbarDropdown\" href=\"{{ path('user_login') }}\">Login</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link\" id=\"navbarDropdown\" href=\"{{ path('user_register') }}\">Register</a>
                    </li>
                {% endif %}

                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Dropdown menu
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"{{ path('accueil') }}\">Home</a>
                        <a class=\"dropdown-item\" href=\"{{ path('secondePage') }}\">Patrick Sébastien</a>
                        <a class=\"dropdown-item\" href=\"{{ path('idea_list') }}\">Ideas list</a>
                        <a class=\"dropdown-item\" href=\"{{ path('category_index') }}\">Categories list</a>
                        <a class=\"dropdown-item\" href=\"{{ path('aboutUs') }}\">About us</a>
                        <a class=\"dropdown-item\" href=\"{{ path('idea_add') }}\">Add an idea</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
{% block maincontent %}
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae delectus deserunt dolorum, itaque
        labore
        quisquam repellat sapiente? A aspernatur consequatur earum illum iste iusto molestiae odio officiis sapiente
        temporibus.
        Ut a nisl nulla. Nulla consectetur nisl vitae feugiat interdum. Maecenas rhoncus molestie rhoncus. Mauris
        aliquet pulvinar pellentesque. Maecenas sit amet ligula aliquet, semper libero nec, ornare sem. Aliquam erat
        volutpat. Suspendisse a diam fermentum, ultrices elit sed, fringilla velit. Duis eu leo ligula. Donec porttitor
        risus at tellus mattis, eget elementum tortor commodo.
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ac justo a nibh varius consectetur vel sed
        sem. Duis pharetra est at turpis mollis, vitae consequat tortor ultrices. Sed sollicitudin suscipit felis. Cras
        quis augue magna. Sed euismod nisi at interdum cursus. In faucibus commodo sapien, ac lacinia sem ultricies
        quis. Integer in nulla eu neque faucibus tempor. Donec vestibulum diam erat, ut molestie nibh porttitor non.
        Etiam suscipit sapien quis elit accumsan tempus. Nunc tincidunt felis a justo auctor, sed cursus mi aliquam.
        Donec egestas dui ac lorem dapibus cursus. Fusce dignissim ipsum arcu, vel posuere dolor tempus non. Cras ut
        lacinia metus. Aliquam erat volutpat. Curabitur accumsan lacus arcu, vel ornare odio lobortis sed. Fusce arcu
        arcu, accumsan rhoncus nisi et, mattis fermentum purus. In gravida non sem nec varius. Quisque condimentum, arcu
        nec accumsan dignissim, diam orci scelerisque turpis, quis maximus urna nunc ut lacus. Nullam tellus mauris,
        condimentum a sagittis ut, fringilla non ipsum. Aliquam mattis sed turpis at facilisis. Ut eget ornare ante.
        Etiam commodo orci sit amet metus fringilla, sit amet feugiat tortor maximus. Sed at maximus elit. Donec
        hendrerit, nisi id tempor convallis, tortor dolor efficitur mauris, nec ultrices sem odio nec quam. Nam id dui
        laoreet, ultricies nibh id, porttitor felis. Duis laoreet consectetur ex, non sodales nibh auctor vitae. Nullam
        ultrices venenatis vestibulum. Curabitur pulvinar, dui ultrices rutrum ultrices, tortor lorem rutrum augue, nec
        mollis tellus elit sed urna. Donec nec diam pulvinar, congue purus quis, mollis sem. Sed mattis lorem eu
        consequat vehicula. Phasellus semper orci at elit consectetur commodo. Curabitur dapibus tellus nec lorem
        pharetra feugiat in et sem.
    </div>
{% endblock %}
<footer class=\"page-footer font-small\" style=\"background-color: darkblue\">
    <div class=\"footer-copyright text-center py-3\">
      ©Bucket-List {{ 'now'|date('Y') }}
        <div>
            By <a target=\"_blank\" href=\"https://github.com/fabianalexisinostroza/Antu\">Fabián Alexis</a>
            <div>
                <a target=\"_blank\" href=\"https://creativecommons.org/licenses/by-sa/3.0\">CC BY-SA 3.0</a>,
                <a target=\"_blank\" href=\"https://commons.wikimedia.org/wiki/File%3AAntu_color-fill.svg\">via Wikimedia
                    Commons.</a>
            </div>
        </div>
    </div>
    </div>
</footer>
</body>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
        integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
        integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
        crossorigin=\"anonymous\"></script>
</html>", "layout/layout.html.twig", "C:\\wamp64\\www\\bucket\\app\\Resources\\views\\layout\\layout.html.twig");
    }
}
