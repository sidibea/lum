<?php

/* @SyliusShop/_header.html.twig */
class __TwigTemplate_cb0014e02714eeb3d7e33f9881b0b86a2e4a6526deba3c82e1c1d84e9c9adcb7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/_header.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"clearfix header-content full-width relative\">
        <div class=\"clearfix icon-menu-bar\">
            <i class=\"data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu\"></i>
        </div>
        <div class=\"clearfix logo\">
            <a href=\"#\"><img alt=\"Logo\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/logo.png"), "html", null, true);
        echo "\" /></a>
        </div>
        <div class=\"clearfix search-box relative float-left\">
            <form method=\"GET\" action=\"/\" class=\"\">
                <div class=\"clearfix category-box relative\">
                    <select name=\"cate_search\">
                        <option>All Category</option>
                        <option>Food</option>
                        <option>Mobile & Tablet</option>
                        <option>Electric Appliances</option>
                        <option>Electronics & Technology</option>
                        <option>Fashion</option>
                        <option>Health & Beauty</option>
                        <option>Mother & Baby</option>
                        <option>Books & Stationery</option>
                        <option>Home & Life</option>
                        <option>Sports & Outdoors</option>
                        <option>Auto & Moto</option>
                        <option>Voucher Service</option>
                    </select>
                </div>
                <input type=\"text\" name=\"s\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.enter_keywords"), "html", null, true);
        echo "\">
                <button type=\"submit\" class=\"animate-default button-hover-red\">";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.search"), "html", null, true);
        echo "</button>
            </form>
        </div>
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_cart_summary", array("template" => "@SyliusShop/Cart/_widget.html.twig")));
        echo "
        <div class=\"mask-search absolute clearfix\" onclick=\"hiddenBoxSearchMobile()\"></div>
        <div class=\"clearfix box-search-mobile\">
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 32,  65 => 29,  61 => 28,  37 => 7,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"clearfix header-content full-width relative\">
        <div class=\"clearfix icon-menu-bar\">
            <i class=\"data-icon data-icon-arrows icon-arrows-hamburger-2 icon-pushmenu js-push-menu\"></i>
        </div>
        <div class=\"clearfix logo\">
            <a href=\"#\"><img alt=\"Logo\" src=\"{{ asset('shop/img/logo.png') }}\" /></a>
        </div>
        <div class=\"clearfix search-box relative float-left\">
            <form method=\"GET\" action=\"/\" class=\"\">
                <div class=\"clearfix category-box relative\">
                    <select name=\"cate_search\">
                        <option>All Category</option>
                        <option>Food</option>
                        <option>Mobile & Tablet</option>
                        <option>Electric Appliances</option>
                        <option>Electronics & Technology</option>
                        <option>Fashion</option>
                        <option>Health & Beauty</option>
                        <option>Mother & Baby</option>
                        <option>Books & Stationery</option>
                        <option>Home & Life</option>
                        <option>Sports & Outdoors</option>
                        <option>Auto & Moto</option>
                        <option>Voucher Service</option>
                    </select>
                </div>
                <input type=\"text\" name=\"s\" placeholder=\"{{ 'sylius.front.enter_keywords'|trans }}\">
                <button type=\"submit\" class=\"animate-default button-hover-red\">{{ 'sylius.front.search'|trans }}</button>
            </form>
        </div>
        {{ render(url('sylius_shop_partial_cart_summary', {'template': '@SyliusShop/Cart/_widget.html.twig'})) }}
        <div class=\"mask-search absolute clearfix\" onclick=\"hiddenBoxSearchMobile()\"></div>
        <div class=\"clearfix box-search-mobile\">
        </div>
    </div>
</div>", "@SyliusShop/_header.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/_header.html.twig");
    }
}
