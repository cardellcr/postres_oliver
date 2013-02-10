<?php

/* WebWebBundle::layout.html.twig */
class __TwigTemplate_4cf8ee3649f3eb3827dbaefd691d36db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <title>
      ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>

    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ensjobeet/images/favicon.ico"), "html", null, true);
        echo "\" />
  </head>
  <body>
\t<div id=\"container\">
            <div id=\"header\">
                <div id=\"language\">
                    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "ca")), "html", null, true);
        echo "\">CAT</a>-
                    <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "es")), "html", null, true);
        echo "\">ESP</a>-
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "en")), "html", null, true);
        echo "\">ENG</a>-
                    <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), array("_locale" => "de")), "html", null, true);
        echo "\">DEU</a>
                </div>

                ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "            </div>
            <div id=\"menu\">
                ";
        // line 41
        $this->displayBlock('menu', $context, $blocks);
        // line 43
        echo "            </div>
            <div id=\"content\">
                ";
        // line 45
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "            </div>
            <div id=\"footer\">   
                <div class=\"menu_footer\">
                   <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Index", array(), "messages");
        echo "</a>
                   <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cataleg"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Catàleg", array(), "messages");
        echo "</a>
                   <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacte"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contacte", array(), "messages");
        echo "</a>
                </div>
\t\t<div id=\"contact_footer\">
\t\t  <div id=\"title_contact_footer\"><b>";
        // line 55
        echo $this->env->getExtension('translator')->getTranslator()->trans("Centre de producció", array(), "messages");
        echo "</b></div>
\t\t  <div id=\"sub_contact_footer\">";
        // line 56
        echo $this->env->getExtension('translator')->getTranslator()->trans("Palma, 600 600 600 (Jaume)", array(), "messages");
        echo "</div>
\t\t</div>
            </div>
\t</div>
  </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "          title 
      ";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "    ";
    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        // line 32
        echo "                    <div id=\"logo\">
\t\t\t<a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">
\t\t\t  <div id=\"name\">postres</div><div id=\"name2\">casolans</div>
\t\t\t  <div id=\"sub_name\">JAUME</div><div id=\"sub_name2\">OLIVER</div>
\t\t\t</a>
                    </div>
                ";
    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        // line 42
        echo "                ";
    }

    // line 45
    public function block_content($context, array $blocks = array())
    {
        // line 46
        echo "                ";
    }

    public function getTemplateName()
    {
        return "WebWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 46,  177 => 45,  173 => 42,  170 => 41,  160 => 33,  157 => 32,  154 => 31,  150 => 17,  147 => 16,  143 => 14,  140 => 13,  135 => 6,  132 => 5,  121 => 56,  117 => 55,  109 => 52,  103 => 51,  97 => 50,  92 => 47,  90 => 45,  86 => 43,  84 => 41,  80 => 39,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  48 => 18,  46 => 16,  43 => 15,  41 => 13,  37 => 12,  31 => 8,  23 => 1,  81 => 24,  78 => 31,  69 => 19,  63 => 18,  57 => 17,  54 => 16,  51 => 19,  39 => 7,  36 => 6,  29 => 5,);
    }
}
