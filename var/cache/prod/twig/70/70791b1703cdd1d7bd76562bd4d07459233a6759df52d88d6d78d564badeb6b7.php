<?php

/* layout/page2.html.twig */
class __TwigTemplate_e11af8f6cff9daa0a2120dfc51938abb4cfa798e7e8549d161228de8a53e4e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.html.twig", "layout/page2.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_maincontent($context, array $blocks = [])
    {
        // line 4
        echo "    <p style=\"text-align: center;\"><br class=\"br\"/><br class=\"br\"/><br class=\"br\"/>LES SARDINES &#8211; PATRICK
        SÉBASTIEN</p>
    <p style=\"text-align: center;\">Pour faire une chanson facile, facile,<br/>
        Faut d’abord des paroles débiles, débiles,<br/>
        Une petite mélodie qui te prend bien la tête,<br/>
        Et une chorégraphie pour bien faire la fête,<br/>
        Dans celle là, on se rassemble, à 5, ou 6, ou 7<br/>
        Et on se colle tous ensemble, en chantant à tue tête.</p>
    <p style=\"text-align: center;\">Ha ! Qu’est-ce qu’on est serré, au fond de cette boite,<br/>
        Chantent les sardines, chantent les sardines,<br/>
        Ha ! Qu’est-ce qu’on est serré, au fond de cette boite,<br/>
        Chantent les sardines entre l’huile et les aromates. (2x)</p>
    <p style=\"text-align: center;\">Bien sûr, que c’est vraiment facile, facile,<br/>
        C’est même complètement débile, débile,<br/>
        C’est pas fait pour penser, c’est fait pour faire la fête,<br/>
        C’est fait pour se toucher, se frotter les arêtes ,<br/>
        Alors on se rassemble, à 5, ou 6, ou 7,<br/>
        Et puis on saute ensemble en chantant à tue tête,</p>
    <p style=\"text-align: center;\">Ha ! Qu’est-ce qu’on est serré, au fond de cette boite,<br/>
        Chantent les sardines, chantent les sardines,<br/>
        Ha ! Qu’est-ce qu’on est serré, au fond de cette boite,<br/>
        Chantent les sardines entre l’huile et les aromates. (2x)</p>
    <p style=\"text-align: center;\">Et puis,… pour respirer un p’tit peu, on s’écarte en se tenant la main,<br/>
        Et puis, … pour être encore plus heureux,<br/>
        On fait là, là, là, en chantant mon refrain !<br/>
        Là, là, et les mains en l’air, là, là !<br/>
        Là, là, là, là, là, là, là, là, là, là, là, là, là, là, là, ……..</p>
    <p style=\"text-align: center;\">(Parlé 8 mesures)<br/>
        Et maintenant, on se resserre tous !<br/>
        On se resserre, et maintenant qu’on l’a connaît, on va chanter la chanson des sardines ! Attention ! Allez !</p>
    <p style=\"text-align: center;\">Ha ! Qu’est-ce qu’on est serré, au fond de cette boite,<br/>
        Chantent les sardines, chantent les sardines,<br/>
        Ha ! Qu’est-ce qu’on est serré, au fond de cette boite,<br/>
        Chantent les sardines entre l’huile et les aromates. (2x)</p>
    <p style=\"text-align: center;\">Ha ! Qu’est-ce qu’on est serré, au fond de cette boite,<br/>
        Chantent les sardines, chantent les sardines,<br/>
        Ha ! Qu’est-ce qu’on est serré, au fond de cette boite,<br/>
        Chantent les sardines entre l’huile et les aromates. (1x)</p>
    <p style=\"text-align: center;\">là, là, là, là, là, là, là, là, là, là, là, là, là, là, là, …….. (8 mesures)<br/>
        là, là, là, là, là, là, là, là, là, là, là, là, là, là, là, …….. (8 mesures)</p>
";
    }

    public function getTemplateName()
    {
        return "layout/page2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/page2.html.twig", "C:\\wamp64\\www\\bucket\\app\\Resources\\views\\layout\\page2.html.twig");
    }
}
