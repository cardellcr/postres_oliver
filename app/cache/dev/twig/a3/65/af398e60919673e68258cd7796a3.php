<?php

/* WebWebBundle:Default:index.html.twig */
class __TwigTemplate_a365af398e60919673e68258cd7796a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebWebBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " 
";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#description_index\").fadeIn(3000);
        });
    </script>
";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        echo " 
    <div class=\"menu\">
       <a class=\"active\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Index", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cataleg"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Catàleg", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacte"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contacte", array(), "messages");
        echo "</a>
    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t<img style=\"margin-left:35px;\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/images/postres_01.jpg"), "html", null, true);
        echo "\"/>

        <div id=\"description_index\">
            <div>Postres casolans a domicili</div>
            <div style=\"font-size: 14px;\">Portam els seus postres a qualsevol barri de palma, raiguer i zona nord</div>
            <div style=\"font-size: 14px;\">Truca'ns i consulti la disponibilitat al seu poble</div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "WebWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  79 => 23,  70 => 19,  64 => 18,  58 => 17,  52 => 15,  41 => 7,  36 => 6,  29 => 3,);
    }
}
