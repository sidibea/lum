<?php

/* @SyliusShop/Cart/_widget.html.twig */
class __TwigTemplate_a53e7f050e0679c331b63174154972160480438cbdc231d7ff560bc85c808f81 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/_widget.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "@SyliusShop/Cart/_widget.html.twig", 1);
        // line 2
        echo "
    ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.partial.cart.summary.before_widget_content", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 3, $this->source); })()))));
        echo "

<div class=\"clearfix icon-search-mobile absolute\">
    <i onclick=\"showBoxSearchMobile()\" class=\"data-icon data-icon-basic icon-basic-magnifier\"></i>
</div>
<div class=\"clearfix cart-website absolute\" onclick=\"showCartBoxDetail()\">
    <img alt=\"Icon Cart\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/icon_cart.png"), "html", null, true);
        echo "\" />
    <p class=\"count-total-shopping absolute\">2</p>
</div>
<div class=\"clearfix cart-website absolute\" onclick=\"showCartBoxDetail()\">
    <img alt=\"Icon Cart\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/icon_cart.png"), "html", null, true);
        echo "\" />
    <p class=\"count-total-shopping absolute\">2</p>
</div>
<div class=\"cart-detail-header border\">
    <div class=\"relative\">
        <div class=\"product-cart-son clearfix\">
            <div class=\"image-product-cart float-left center-vertical-image \">
                <a href=\"#\"><img src=\"img/product_image_6-min.png\" alt=\"\" /></a>
            </div>
            <div class=\"info-product-cart float-left\">
                <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">MH02-Black09</a></p>
                <p class=\"clearfix price-product\">\$350 <span class=\"total-product-cart-son\">(x1)</span></p>
            </div>
        </div>
        <div class=\"product-cart-son\">
            <div class=\"image-product-cart float-left center-vertical-image\">
                <a href=\"#\"><img src=\"img/product_image_7-min.png\" alt=\"\" /></a>
            </div>
            <div class=\"info-product-cart float-left\">
                <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">Voyage Yoga Bag</a></p>
                <p class=\"clearfix price-product\">\$350 <span class=\"total-product-cart-son\">(x1)</span></p>
            </div>
        </div>
    </div>
    <div class=\"relative border no-border-l no-border-r total-cart-header\">
        <p class=\"bold clear-margin\">Subtotal:</p>
        <p class=\" clear-margin bold\">\$700</p>
    </div>
    <div class=\"relative btn-cart-header\">
        <a href=\"#\" class=\"uppercase bold animate-default\">view cart</a>
        <a href=\"#\" class=\"uppercase bold button-hover-red animate-default\">checkout</a>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/_widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  43 => 9,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

    {{ sonata_block_render_event('sylius.shop.partial.cart.summary.before_widget_content', {'cart': cart}) }}

<div class=\"clearfix icon-search-mobile absolute\">
    <i onclick=\"showBoxSearchMobile()\" class=\"data-icon data-icon-basic icon-basic-magnifier\"></i>
</div>
<div class=\"clearfix cart-website absolute\" onclick=\"showCartBoxDetail()\">
    <img alt=\"Icon Cart\" src=\"{{  asset('shop/img/icon_cart.png') }}\" />
    <p class=\"count-total-shopping absolute\">2</p>
</div>
<div class=\"clearfix cart-website absolute\" onclick=\"showCartBoxDetail()\">
    <img alt=\"Icon Cart\" src=\"{{  asset('shop/img/icon_cart.png') }}\" />
    <p class=\"count-total-shopping absolute\">2</p>
</div>
<div class=\"cart-detail-header border\">
    <div class=\"relative\">
        <div class=\"product-cart-son clearfix\">
            <div class=\"image-product-cart float-left center-vertical-image \">
                <a href=\"#\"><img src=\"img/product_image_6-min.png\" alt=\"\" /></a>
            </div>
            <div class=\"info-product-cart float-left\">
                <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">MH02-Black09</a></p>
                <p class=\"clearfix price-product\">\$350 <span class=\"total-product-cart-son\">(x1)</span></p>
            </div>
        </div>
        <div class=\"product-cart-son\">
            <div class=\"image-product-cart float-left center-vertical-image\">
                <a href=\"#\"><img src=\"img/product_image_7-min.png\" alt=\"\" /></a>
            </div>
            <div class=\"info-product-cart float-left\">
                <p class=\"title-product title-hover-black\"><a class=\"animate-default\" href=\"#\">Voyage Yoga Bag</a></p>
                <p class=\"clearfix price-product\">\$350 <span class=\"total-product-cart-son\">(x1)</span></p>
            </div>
        </div>
    </div>
    <div class=\"relative border no-border-l no-border-r total-cart-header\">
        <p class=\"bold clear-margin\">Subtotal:</p>
        <p class=\" clear-margin bold\">\$700</p>
    </div>
    <div class=\"relative btn-cart-header\">
        <a href=\"#\" class=\"uppercase bold animate-default\">view cart</a>
        <a href=\"#\" class=\"uppercase bold button-hover-red animate-default\">checkout</a>
    </div>
</div>", "@SyliusShop/Cart/_widget.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/Cart/_widget.html.twig");
    }
}
