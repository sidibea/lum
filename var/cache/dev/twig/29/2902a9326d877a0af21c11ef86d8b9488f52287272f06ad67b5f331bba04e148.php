<?php

/* @SyliusShop/Taxon/_horizontalMenu.html.twig */
class __TwigTemplate_a4d3bde2fc0f4df3eca09e7e7b885b11cefc7e4498c017bd8926299f6f633f27 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_horizontalMenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Taxon/_horizontalMenu.html.twig"));

        // line 17
        echo "
";
        // line 18
        $context["macros"] = $this;
        // line 19
        echo "
";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 20, $this->source); })())) > 0)) {
            // line 21
            echo "
    <ul>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["taxons"]) || array_key_exists("taxons", $context) ? $context["taxons"] : (function () { throw new Twig_Error_Runtime('Variable "taxons" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["taxon"]) {
                // line 24
                echo "            ";
                echo $context["macros"]->macro_item($context["taxon"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taxon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    </ul>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_item($__taxon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "taxon" => $__taxon__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "item"));

            // line 2
            echo "    ";
            $context["macros"] = $this;
            // line 3
            echo "
    ";
            // line 4
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 4, $this->source); })()), "children", array())) > 0)) {
                // line 5
                echo "
            <li>
                <a href=\"";
                // line 7
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 7, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 7, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 7, $this->source); })()), "name", array()), "html", null, true);
                echo "</a>

            </li>



    ";
            } else {
                // line 14
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_product_index", array("slug" => twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 14, $this->source); })()), "slug", array()), "_locale" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 14, $this->source); })()), "translation", array()), "locale", array()))), "html", null, true);
                echo "\" class=\"item\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["taxon"]) || array_key_exists("taxon", $context) ? $context["taxon"] : (function () { throw new Twig_Error_Runtime('Variable "taxon" does not exist.', 14, $this->source); })()), "name", array()), "html", null, true);
                echo "</a></li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@SyliusShop/Taxon/_horizontalMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 14,  99 => 7,  95 => 5,  93 => 4,  90 => 3,  87 => 2,  69 => 1,  56 => 26,  47 => 24,  43 => 23,  39 => 21,  37 => 20,  34 => 19,  32 => 18,  29 => 17,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro item(taxon) %}
    {% import _self as macros %}

    {% if taxon.children|length > 0 %}

            <li>
                <a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\">{{ taxon.name }}</a>

            </li>



    {% else %}
        <li><a href=\"{{ path('sylius_shop_product_index', {'slug': taxon.slug, '_locale': taxon.translation.locale}) }}\" class=\"item\">{{ taxon.name }}</a></li>
    {% endif %}
{% endmacro %}

{% import _self as macros %}

{% if taxons|length > 0 %}

    <ul>
        {% for taxon in taxons %}
            {{ macros.item(taxon) }}
        {% endfor %}
    </ul>

{% endif %}
", "@SyliusShop/Taxon/_horizontalMenu.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/Taxon/_horizontalMenu.html.twig");
    }
}
