<?php

/* @SyliusShop/Checkout/_steps.html.twig */
class __TwigTemplate_b34cc884a396e2d09aa0b8a677d5caa22821a6d07f1049a399e8ae8b7fe80632 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_steps.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Checkout/_steps.html.twig"));

        // line 1
        if (( !(isset($context["active"]) || array_key_exists("active", $context)) || ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 1, $this->source); })()) == "address"))) {
            // line 2
            echo "    ";
            $context["steps"] = array("address" => "active", "select_shipping" => "disabled", "select_payment" => "disabled", "complete" => "disabled");
        } elseif ((        // line 3
(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 3, $this->source); })()) == "select_shipping")) {
            // line 4
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "active", "select_payment" => "disabled", "complete" => "disabled");
        } elseif ((        // line 5
(isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 5, $this->source); })()) == "select_payment")) {
            // line 6
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "completed", "select_payment" => "active", "complete" => "disabled");
        } else {
            // line 8
            echo "    ";
            $context["steps"] = array("address" => "completed", "select_shipping" => "completed", "select_payment" => "completed", "complete" => "active");
        }
        // line 10
        echo "
";
        // line 11
        $context["order_requires_payment"] = call_user_func_array($this->env->getFunction('sylius_is_payment_required')->getCallable(), array((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 11, $this->source); })())));
        // line 12
        $context["order_requires_shipping"] = call_user_func_array($this->env->getFunction('sylius_is_shipping_required')->getCallable(), array((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 12, $this->source); })())));
        // line 13
        echo "
";
        // line 14
        $context["steps_count"] = "four";
        // line 15
        if (( !(isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_payment" does not exist.', 15, $this->source); })()) &&  !(isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_shipping" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "    ";
            $context["steps_count"] = "two";
        } elseif (( !        // line 17
(isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_payment" does not exist.', 17, $this->source); })()) ||  !(isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_shipping" does not exist.', 17, $this->source); })()))) {
            // line 18
            echo "    ";
            $context["steps_count"] = "three";
        }
        // line 20
        echo "
<div class=\"ui ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["steps_count"]) || array_key_exists("steps_count", $context) ? $context["steps_count"] : (function () { throw new Twig_Error_Runtime('Variable "steps_count" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " steps\">
    <a class=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new Twig_Error_Runtime('Variable "steps" does not exist.', 22, $this->source); })()), "address", array(), "array"), "html", null, true);
        echo " step\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_address");
        echo "\">
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.address"), "html", null, true);
        echo "</div>
            <div class=\"description\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.fill_in_your_billing_and_shipping_addresses"), "html", null, true);
        echo "</div>
        </div>
    </a>
    ";
        // line 29
        if ((isset($context["order_requires_shipping"]) || array_key_exists("order_requires_shipping", $context) ? $context["order_requires_shipping"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_shipping" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new Twig_Error_Runtime('Variable "steps" does not exist.', 30, $this->source); })()), "select_shipping", array(), "array"), "html", null, true);
            echo " step\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_shipping");
            echo "\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.shipping"), "html", null, true);
            echo "</div>
            <div class=\"description\">";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_how_your_goods_will_be_delivered"), "html", null, true);
            echo "</div>
        </div>
    </a>
    ";
        }
        // line 38
        echo "    ";
        if ((isset($context["order_requires_payment"]) || array_key_exists("order_requires_payment", $context) ? $context["order_requires_payment"] : (function () { throw new Twig_Error_Runtime('Variable "order_requires_payment" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "    <a class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new Twig_Error_Runtime('Variable "steps" does not exist.', 39, $this->source); })()), "select_payment", array(), "array"), "html", null, true);
            echo " step\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_select_payment");
            echo "\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.payment"), "html", null, true);
            echo "</div>
            <div class=\"description\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.choose_how_you_will_pay"), "html", null, true);
            echo "</div>
        </div>
    </a>
    ";
        }
        // line 47
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["steps"]) || array_key_exists("steps", $context) ? $context["steps"] : (function () { throw new Twig_Error_Runtime('Variable "steps" does not exist.', 47, $this->source); })()), "complete", array(), "array"), "html", null, true);
        echo " step\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_checkout_complete");
        echo "\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.complete"), "html", null, true);
        echo "</div>
            <div class=\"description\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.ui.review_and_confirm_your_order"), "html", null, true);
        echo "</div>
        </div>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Checkout/_steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 51,  151 => 50,  142 => 47,  135 => 43,  131 => 42,  122 => 39,  119 => 38,  112 => 34,  108 => 33,  99 => 30,  97 => 29,  91 => 26,  87 => 25,  79 => 22,  75 => 21,  72 => 20,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  59 => 14,  56 => 13,  54 => 12,  52 => 11,  49 => 10,  45 => 8,  41 => 6,  39 => 5,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if active is not defined or active == 'address' %}
    {% set steps = {'address': 'active', 'select_shipping': 'disabled', 'select_payment': 'disabled', 'complete': 'disabled'} %}
{% elseif active == 'select_shipping' %}
    {% set steps = {'address': 'completed', 'select_shipping': 'active', 'select_payment': 'disabled', 'complete': 'disabled'} %}
{% elseif active == 'select_payment' %}
    {% set steps = {'address': 'completed', 'select_shipping': 'completed', 'select_payment': 'active', 'complete': 'disabled'} %}
{% else %}
    {% set steps = {'address': 'completed', 'select_shipping': 'completed', 'select_payment': 'completed', 'complete': 'active'} %}
{% endif %}

{% set order_requires_payment = sylius_is_payment_required(order) %}
{% set order_requires_shipping = sylius_is_shipping_required(order) %}

{% set steps_count = 'four' %}
{% if not order_requires_payment and not order_requires_shipping %}
    {% set steps_count = 'two' %}
{% elseif not order_requires_payment or not order_requires_shipping %}
    {% set steps_count = 'three' %}
{% endif %}

<div class=\"ui {{ steps_count }} steps\">
    <a class=\"{{ steps['address'] }} step\" href=\"{{ path('sylius_shop_checkout_address') }}\">
        <i class=\"map icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.address'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.fill_in_your_billing_and_shipping_addresses'|trans }}</div>
        </div>
    </a>
    {% if order_requires_shipping %}
    <a class=\"{{ steps['select_shipping'] }} step\" href=\"{{ path('sylius_shop_checkout_select_shipping') }}\">
        <i class=\"truck icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.shipping'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.choose_how_your_goods_will_be_delivered'|trans }}</div>
        </div>
    </a>
    {% endif %}
    {% if order_requires_payment %}
    <a class=\"{{ steps['select_payment'] }} step\" href=\"{{ path('sylius_shop_checkout_select_payment') }}\">
        <i class=\"payment icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.payment'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.choose_how_you_will_pay'|trans }}</div>
        </div>
    </a>
    {% endif %}
    <div class=\"{{ steps['complete'] }} step\" href=\"{{ path('sylius_shop_checkout_complete') }}\">
        <i class=\"checkered flag icon\"></i>
        <div class=\"content\">
            <div class=\"title\">{{ 'sylius.ui.complete'|trans }}</div>
            <div class=\"description\">{{ 'sylius.ui.review_and_confirm_your_order'|trans }}</div>
        </div>
    </div>
</div>
", "@SyliusShop/Checkout/_steps.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/Checkout/_steps.html.twig");
    }
}
