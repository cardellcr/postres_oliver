<?php

/* WebWebBundle:Default:cataleg.html.twig */
class __TwigTemplate_006c5f890b3400b2a139dcaffeb2d887 extends Twig_Template
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
    <link class=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/css/jquery.lightbox-0.5.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webweb/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"#description_cataleg\").fadeIn(2000);
            setTimeout(function(){\$(\"#description_productes\").fadeIn(2000);},1500)
            setTimeout(function(){\$(\"#description_fotos_productes\").fadeIn(2000);},1500)
        });
        
        function showFoto (foto, name, price, description) {
            \$('#foto').css('display', 'block');
            \$('#foto').html(
                '<img class=\"thumb\" style=\"width: 414x; height: 300px;\" src=\"/postres_oliver/web/bundles/webweb/images/cataleg/' + foto + '\"/>'
            );
            \$('#description').html(
                '<div id=\"title_postre\">' + name + '</div>' +
                '<div id=\"price_postre\">' + price + '&nbsp;&euro;</div>' +
                '<div id=\"description2\">' + ";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("description", array(), "messages");
        echo " + '</div>'
            );
        }
    </script>
";
    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        echo " 
    <div class=\"menu\">
       <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("index"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Index", array(), "messages");
        echo "</a>
       <a class=\"active\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cataleg"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Catàleg", array(), "messages");
        echo "</a>
       <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacte"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Contacte", array(), "messages");
        echo "</a>
    </div>
";
    }

    // line 38
    public function block_content($context, array $blocks = array())
    {
        // line 39
        echo "    <img style=\"margin-left:35px;\" src=\"/postres_oliver/web/bundles/webweb/images/postres_01.jpg\"/>

    <div id=\"description_cataleg\">
        <div style=\"margin-left: 10px;\">Catàleg de productes</div>
    </div>

    <div id=\"description_productes\"></div>
    <div id=\"description_fotos_productes\">
        ";
        // line 47
        if (array_key_exists("postres", $context)) {
            // line 48
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "postres"));
            foreach ($context['_seq'] as $context["_key"] => $context["postre"]) {
                // line 49
                echo "                <img class=\"thumb\" style=\"width: 70px; height: 70px;\" src=\"/postres_oliver/web/bundles/webweb/images/cataleg/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "postre"), "getFotoThumb"), "html", null, true);
                echo "\" onclick=\"showFoto('";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "postre"), "foto"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "postre"), "name"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "postre"), "price"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "postre"), "name"), "html", null, true);
                echo "');\"/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postre'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 51
            echo "        ";
        }
        // line 52
        echo "    </div>
    
    <div id=\"description\"></div>
    
    <div id=\"foto\"></div>
    
";
    }

    public function getTemplateName()
    {
        return "WebWebBundle:Default:cataleg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 52,  136 => 51,  119 => 49,  114 => 48,  112 => 47,  102 => 39,  99 => 38,  90 => 34,  84 => 33,  78 => 32,  72 => 30,  63 => 24,  43 => 8,  40 => 7,  34 => 4,  29 => 3,);
    }
}
