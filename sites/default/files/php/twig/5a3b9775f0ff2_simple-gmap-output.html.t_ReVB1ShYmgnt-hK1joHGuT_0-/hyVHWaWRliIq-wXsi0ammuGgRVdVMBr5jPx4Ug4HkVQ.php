<?php

/* modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig */
class __TwigTemplate_8330ab6e77d4af026c982ad54d7d3db60a4277be80c89a13a165c4c8f8c4eb18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 29);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 29
        if ((isset($context["include_map"]) ? $context["include_map"] : null)) {
            // line 30
            echo "  <iframe width=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
            echo "\" height=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
            echo "\" frameborder=\"0\" style=\"border:0\" src=\"https://maps.google.com/maps?hl=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["langcode"]) ? $context["langcode"] : null), "html", null, true));
            echo "&amp;q=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url_suffix"]) ? $context["url_suffix"] : null), "html", null, true));
            echo "&amp;t=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["map_type"]) ? $context["map_type"] : null), "html", null, true));
            echo "&amp;z=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["zoom"]) ? $context["zoom"] : null), "html", null, true));
            echo "&amp;output=embed\"></iframe>
";
        }
        // line 32
        if ((isset($context["include_static_map"]) ? $context["include_static_map"] : null)) {
            // line 33
            echo "  <div class=\"simple-gmap-static-map\">
    <img src=\"https://maps.googleapis.com/maps/api/staticmap?size=";
            // line 34
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true));
            echo "x";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true));
            echo "&amp;scale=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["static_scale"]) ? $context["static_scale"] : null), "html", null, true));
            echo "&amp;zoom=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["zoom"]) ? $context["zoom"] : null), "html", null, true));
            echo "&amp;language=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["langcode"]) ? $context["langcode"] : null), "html", null, true));
            echo "&amp;maptype=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["static_map_type"]) ? $context["static_map_type"] : null), "html", null, true));
            echo "&amp;markers=color:red|";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url_suffix"]) ? $context["url_suffix"] : null), "html", null, true));
            echo "&amp;sensor=false&amp;key=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["apikey"]) ? $context["apikey"] : null), "html", null, true));
            echo "\" />
  </div>
";
        }
        // line 37
        if ((isset($context["include_link"]) ? $context["include_link"] : null)) {
            // line 38
            echo "  <p class=\"simple-gmap-link\"><a href=\"https://maps.google.com/maps?q=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["url_suffix"]) ? $context["url_suffix"] : null), "html", null, true));
            echo "&amp;hl=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["langcode"]) ? $context["langcode"] : null), "html", null, true));
            echo "&amp;t=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["map_type"]) ? $context["map_type"] : null), "html", null, true));
            echo "&amp;z=";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["zoom"]) ? $context["zoom"] : null), "html", null, true));
            echo "\" target=\"_blank\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["link_text"]) ? $context["link_text"] : null), "html", null, true));
            echo "</a></p>
";
        }
        // line 40
        if ( !twig_test_empty((isset($context["address_text"]) ? $context["address_text"] : null))) {
            // line 41
            echo "  <p class=\"simple-gmap-address\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["address_text"]) ? $context["address_text"] : null), "html", null, true));
            echo "</p>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 41,  102 => 40,  88 => 38,  86 => 37,  66 => 34,  63 => 33,  61 => 32,  45 => 30,  43 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig", "/var/www/html/gym-management/modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig");
    }
}
