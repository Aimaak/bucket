<?php

/* layout/layout.html.twig */
class __TwigTemplate_20a81b7a5440b909378eacb65db38a258c77590daad64076b067777856d341cc extends Twig_Template
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
    <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background-color: blueviolet\">
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
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                       data-toggle=\"dropdown\"
                       aria-haspopup=\"true\" aria-expanded=\"false\">
                        Menu déroulant
                    </a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                        <a class=\"dropdown-item\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accueil");
        echo "\">Accueil</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("secondePage");
        echo "\">Autre page</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<img id=\"img\" src=\"img\" style=\"visibility:hidden;\"/>
<button onclick=\"image()\">Cliquez</button>
<img id=\"img\" src=\"img\" style=\"visibility:hidden;\"/>
<button onclick=\"image2()\">Cliquez</button>
";
        // line 47
        $this->displayBlock('maincontent', $context, $blocks);
        // line 54
        echo "<div style=\"content: 'center';\">
    <script src=\"https://cdn.htmlgames.com/embed.js?game=NeonBubble&amp;width=800&amp;height=480&amp;bgcolor=white\"></script>
</div>
<div>
    <script src=\"https://cdn.htmlgames.com/embed.js?game=Pizzeria&amp;width=800&amp;height=480&amp;bgcolor=white\"></script>
</div>
<footer class=\"page-footer font-small blue\" style=\"background-color: blueviolet\">
    <div class=\"footer-copyright text-center py-3\">
        ©Bucket-List ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        <div>
            By Fabián Alexis (https://github.com/fabianalexisinostroza/Antu)
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
<script type=\"text/javascript\">
    function image() {
        var img = \"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjsBB_3Gb1gmFJruFkWPAK_QFxUbb9vxw-aLILjAAG_qugu5jUfQ\";
        document.getElementById('img').src = img.replace('90x90', '300x300');
        document.getElementById('img').style.visibility = 'visible';
    }

    function image2() {
        var img = \"data:image/jpeg;base64,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\";
        document.getElementById('img').src = img.replace('90x90', '300x300');
        document.getElementById('img').style.visibility = 'visible';
    }
</script>
</html>";
    }

    // line 47
    public function block_maincontent($context, array $blocks = [])
    {
        // line 48
        echo "    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam beatae delectus deserunt dolorum, itaque labore quisquam repellat sapiente? A aspernatur consequatur earum illum iste iusto molestiae odio officiis sapiente temporibus.
    Ut a nisl nulla. Nulla consectetur nisl vitae feugiat interdum. Maecenas rhoncus molestie rhoncus. Mauris aliquet pulvinar pellentesque. Maecenas sit amet ligula aliquet, semper libero nec, ornare sem. Aliquam erat volutpat. Suspendisse a diam fermentum, ultrices elit sed, fringilla velit. Duis eu leo ligula. Donec porttitor risus at tellus mattis, eget elementum tortor commodo.
    Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer ac justo a nibh varius consectetur vel sed sem. Duis pharetra est at turpis mollis, vitae consequat tortor ultrices. Sed sollicitudin suscipit felis. Cras quis augue magna. Sed euismod nisi at interdum cursus. In faucibus commodo sapien, ac lacinia sem ultricies quis. Integer in nulla eu neque faucibus tempor. Donec vestibulum diam erat, ut molestie nibh porttitor non. Etiam suscipit sapien quis elit accumsan tempus. Nunc tincidunt felis a justo auctor, sed cursus mi aliquam.
    Donec egestas dui ac lorem dapibus cursus. Fusce dignissim ipsum arcu, vel posuere dolor tempus non. Cras ut lacinia metus. Aliquam erat volutpat. Curabitur accumsan lacus arcu, vel ornare odio lobortis sed. Fusce arcu arcu, accumsan rhoncus nisi et, mattis fermentum purus. In gravida non sem nec varius. Quisque condimentum, arcu nec accumsan dignissim, diam orci scelerisque turpis, quis maximus urna nunc ut lacus. Nullam tellus mauris, condimentum a sagittis ut, fringilla non ipsum. Aliquam mattis sed turpis at facilisis. Ut eget ornare ante.
    Etiam commodo orci sit amet metus fringilla, sit amet feugiat tortor maximus. Sed at maximus elit. Donec hendrerit, nisi id tempor convallis, tortor dolor efficitur mauris, nec ultrices sem odio nec quam. Nam id dui laoreet, ultricies nibh id, porttitor felis. Duis laoreet consectetur ex, non sodales nibh auctor vitae. Nullam ultrices venenatis vestibulum. Curabitur pulvinar, dui ultrices rutrum ultrices, tortor lorem rutrum augue, nec mollis tellus elit sed urna. Donec nec diam pulvinar, congue purus quis, mollis sem. Sed mattis lorem eu consequat vehicula. Phasellus semper orci at elit consectetur commodo. Curabitur dapibus tellus nec lorem pharetra feugiat in et sem.
";
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
        return array (  141 => 48,  138 => 47,  98 => 62,  88 => 54,  86 => 47,  72 => 36,  68 => 35,  48 => 18,  44 => 17,  35 => 11,  31 => 10,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/layout.html.twig", "C:\\wamp64\\www\\bucket\\app\\Resources\\views\\layout\\layout.html.twig");
    }
}
