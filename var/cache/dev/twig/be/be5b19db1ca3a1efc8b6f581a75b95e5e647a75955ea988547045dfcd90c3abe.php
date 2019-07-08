<?php

/* @SyliusShop/Cart/summary.html.twig */
class __TwigTemplate_d98ce44f1ca4c84c2c4a4f0206f71adf5ee0cc1a3d252f0abe81bb03968bd99b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Cart/summary.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'sheets' => array($this, 'block_sheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@SyliusShop/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/summary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Cart/summary.html.twig"));

        // line 7
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), array(0 => "@SyliusUi/Form/theme.html.twig"), true);
        // line 9
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Cart/summary.html.twig", 9);
        // line 11
        $context["header"] = "sylius.ui.your_shopping_cart";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/cartpage.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_sheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sheets"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new Twig_Error_Runtime('Variable "header" does not exist.', 13, $this->source); })())), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 16, $this->source); })()), "empty", array())) {
            // line 17
            echo "
        <!-- Content Shoping Cart -->
        <div class=\"relative container-web\">
            <div class=\"container\">
                <div class=\"row relative\">
                    <!-- Content Shoping Cart -->
                    <div class=\"col-md-8 col-sm-12 col-xs-12 relative left-content-shoping clear-padding-left\">
                        ";
            // line 24
            $this->loadTemplate("@SyliusShop/Cart/Summary/_header.html.twig", "@SyliusShop/Cart/summary.html.twig", 24)->display($context);
            // line 25
            echo "
                        ";
            // line 26
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_content_header", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 26, $this->source); })()))));
            echo "

                        ";
            // line 28
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_items", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 28, $this->source); })()))));
            echo "

                        ";
            // line 30
            $this->loadTemplate("@SyliusShop/Cart/Summary/_items.html.twig", "@SyliusShop/Cart/summary.html.twig", 30)->display($context);
            // line 31
            echo "
                        ";
            // line 32
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_items", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 32, $this->source); })()))));
            echo "


                    </div>
                    <!-- End Content Shoping Cart -->
                    <!-- Content Right -->
                    <div class=\"col-md-4 col-sm-12 col-xs-12 right-content-shoping relative clear-padding-right\">
                        ";
            // line 39
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 39, $this->source); })()))));
            echo "

                        ";
            // line 41
            $this->loadTemplate("@SyliusShop/Cart/Summary/_totals.html.twig", "@SyliusShop/Cart/summary.html.twig", 41)->display($context);
            // line 42
            echo "
                        ";
            // line 43
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.after_totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 43, $this->source); })()))));
            echo "

                        ";
            // line 45
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.cart.summary.before_totals", array("cart" => (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 45, $this->source); })()))));
            echo "

                        ";
            // line 47
            $this->loadTemplate("@SyliusShop/Cart/Summary/_checkout.html.twig", "@SyliusShop/Cart/summary.html.twig", 47)->display($context);
            // line 48
            echo "
                    </div>
                    <!-- End Content Right -->
                </div>
            </div>
        </div>
        <!-- End Content Shoping Cart -->
        <!-- Support -->
        <div class=\" support-box full-width bg-red support_box_v2\">
            <div class=\"container-web\">
                <div class=\" container\">
                    <div class=\"row\">
                        <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                            <img src=\"img/icon_free_ship_white-min.png\" alt=\"Icon Free Ship\" class=\"absolute\" />
                            <p>free shipping</p>
                            <p>on order over \$500</p>
                        </div>
                        <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                            <img src=\"img/icon_support_white-min.png\" alt=\"Icon Supports\" class=\"absolute\">
                            <p>support</p>
                            <p>life time support 24/7</p>
                        </div>
                        <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                            <img src=\"img/icon_patner_white-min.png\" alt=\"Icon partner\" class=\"absolute\">
                            <p>help partner</p>
                            <p>help all aspects</p>
                        </div>
                        <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                            <img src=\"img/icon_phone_table_white-min.png\" alt=\"Icon Phone Tablet\" class=\"absolute\">
                            <p>contact with us</p>
                            <p>+07 (0) 7782 9137</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    ";
        } else {
            // line 86
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.your_cart_is_empty");
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Cart/summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 86,  187 => 48,  185 => 47,  180 => 45,  175 => 43,  172 => 42,  170 => 41,  165 => 39,  155 => 32,  152 => 31,  150 => 30,  145 => 28,  140 => 26,  137 => 25,  135 => 24,  126 => 17,  123 => 16,  114 => 15,  94 => 13,  76 => 5,  63 => 3,  54 => 2,  44 => 1,  42 => 11,  40 => 9,  38 => 7,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}
{% block style %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/cartpage.css') }}\">
{% endblock %}
{% block sheets %} {% endblock %}

{% form_theme form '@SyliusUi/Form/theme.html.twig' %}

{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% set header = 'sylius.ui.your_shopping_cart' %}

{% block title %}{{ parent() }} | {{ header|trans }}{% endblock %}

{% block content %}
    {% if not cart.empty %}

        <!-- Content Shoping Cart -->
        <div class=\"relative container-web\">
            <div class=\"container\">
                <div class=\"row relative\">
                    <!-- Content Shoping Cart -->
                    <div class=\"col-md-8 col-sm-12 col-xs-12 relative left-content-shoping clear-padding-left\">
                        {% include '@SyliusShop/Cart/Summary/_header.html.twig' %}

                        {{ sonata_block_render_event('sylius.shop.cart.summary.after_content_header', {'cart': cart}) }}

                        {{ sonata_block_render_event('sylius.shop.cart.summary.before_items', {'cart': cart}) }}

                        {% include '@SyliusShop/Cart/Summary/_items.html.twig' %}

                        {{ sonata_block_render_event('sylius.shop.cart.summary.after_items', {'cart': cart}) }}


                    </div>
                    <!-- End Content Shoping Cart -->
                    <!-- Content Right -->
                    <div class=\"col-md-4 col-sm-12 col-xs-12 right-content-shoping relative clear-padding-right\">
                        {{ sonata_block_render_event('sylius.shop.cart.summary.before_totals', {'cart': cart}) }}

                        {% include '@SyliusShop/Cart/Summary/_totals.html.twig' %}

                        {{ sonata_block_render_event('sylius.shop.cart.summary.after_totals', {'cart': cart}) }}

                        {{ sonata_block_render_event('sylius.shop.cart.summary.before_totals', {'cart': cart}) }}

                        {% include '@SyliusShop/Cart/Summary/_checkout.html.twig' %}

                    </div>
                    <!-- End Content Right -->
                </div>
            </div>
        </div>
        <!-- End Content Shoping Cart -->
        <!-- Support -->
        <div class=\" support-box full-width bg-red support_box_v2\">
            <div class=\"container-web\">
                <div class=\" container\">
                    <div class=\"row\">
                        <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                            <img src=\"img/icon_free_ship_white-min.png\" alt=\"Icon Free Ship\" class=\"absolute\" />
                            <p>free shipping</p>
                            <p>on order over \$500</p>
                        </div>
                        <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                            <img src=\"img/icon_support_white-min.png\" alt=\"Icon Supports\" class=\"absolute\">
                            <p>support</p>
                            <p>life time support 24/7</p>
                        </div>
                        <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                            <img src=\"img/icon_patner_white-min.png\" alt=\"Icon partner\" class=\"absolute\">
                            <p>help partner</p>
                            <p>help all aspects</p>
                        </div>
                        <div class=\" support-box-info relative col-md-3 col-sm-3 col-xs-6\">
                            <img src=\"img/icon_phone_table_white-min.png\" alt=\"Icon Phone Tablet\" class=\"absolute\">
                            <p>contact with us</p>
                            <p>+07 (0) 7782 9137</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {% else %}
        {{ messages.info('sylius.ui.your_cart_is_empty') }}
    {% endif %}
{% endblock %}
", "@SyliusShop/Cart/summary.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/Cart/summary.html.twig");
    }
}
