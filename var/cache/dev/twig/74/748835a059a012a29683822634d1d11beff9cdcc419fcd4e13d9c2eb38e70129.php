<?php

/* @SyliusShop/category_slide.html.twig */
class __TwigTemplate_894a049ebb91c996b5c3f94d59372fee8055561d6bb629eaaefa68284211a718 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/category_slide.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/category_slide.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["media"]) || array_key_exists("media", $context) ? $context["media"] : (function () { throw new Twig_Error_Runtime('Variable "media" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 2
            echo "    <div class=\" category-image-slide relative full-width\">
        <div class=\"clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative\">
            <img class=\"animate-default\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "path", array()), "html", null, true);
            echo "\" alt=\"Image Shore\" />
            <a href=\"#\"></a>
        </div>
        <a href=\"#\">
            <p class=\"uppercase bold\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["val"], "name", array()), "html", null, true);
            echo "</p>
        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/category_slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 8,  37 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for key, val in media %}
    <div class=\" category-image-slide relative full-width\">
        <div class=\"clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative\">
            <img class=\"animate-default\" src=\"{{ val.path }}\" alt=\"Image Shore\" />
            <a href=\"#\"></a>
        </div>
        <a href=\"#\">
            <p class=\"uppercase bold\">{{ val.name }}</p>
        </a>
    </div>
{% endfor %}
", "@SyliusShop/category_slide.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/category_slide.html.twig");
    }
}
