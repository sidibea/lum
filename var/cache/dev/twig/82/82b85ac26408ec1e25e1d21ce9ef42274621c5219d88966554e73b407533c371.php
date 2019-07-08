<?php

/* @SyliusShop/_supportbox.html.twig */
class __TwigTemplate_b98e16cb60288fcdf4c6e6fa177e6defade5a0fa709228b7a9505d9ea26e52af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_supportbox.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_supportbox.html.twig"));

        // line 1
        echo "<!-- Support -->
<div class=\"clearfix support-box support-box-v3 full-width\">
    <div class=\"container-web clearfix\">
        <div class=\" container \">
            <div class=\"row\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 7
            echo "                    <div class=\" support-box-info relative col-md-4 col-sm-4 col-xs-6\">
                        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "path", array()), "html", null, true);
            echo "\" alt=\"Icon Free Ship\" class=\"float-left\" />
                        <p class=\"float-left\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "name", array()), "html", null, true);
            echo "</p>
                        <p class=\"float-left\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "content", array()), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "


            </div>
        </div>
    </div>
</div>
<!-- End Support Box -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/_supportbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  51 => 10,  47 => 9,  43 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Support -->
<div class=\"clearfix support-box support-box-v3 full-width\">
    <div class=\"container-web clearfix\">
        <div class=\" container \">
            <div class=\"row\">
                {% for key, val in media %}
                    <div class=\" support-box-info relative col-md-4 col-sm-4 col-xs-6\">
                        <img src=\"{{ val.path }}\" alt=\"Icon Free Ship\" class=\"float-left\" />
                        <p class=\"float-left\">{{ val.name }}</p>
                        <p class=\"float-left\">{{ val.content }}</p>
                    </div>
                {% endfor %}



            </div>
        </div>
    </div>
</div>
<!-- End Support Box -->", "@SyliusShop/_supportbox.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/_supportbox.html.twig");
    }
}
