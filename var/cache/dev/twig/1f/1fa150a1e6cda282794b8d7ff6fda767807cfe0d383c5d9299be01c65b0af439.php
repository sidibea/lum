<?php

/* @SyliusShop/Homepage/index.html.twig */
class __TwigTemplate_d30d4a9841db91138968b3cf66084717b6323517b323d48f9948023d05abfff2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@SyliusShop/layout.html.twig", "@SyliusShop/Homepage/index.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Homepage/index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/home.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"relative clearfix full-width\">
        <!-- Menu & Slide -->
        <div class=\"clearfix container-web relative\">
            <div class=\" container relative\">
                <div class=\"row\">
                    <div class=\" relative menu-slide col-lg-12 clear-padding bottom-margin-15-default\">
                        <!-- Menu -->
                        <div class=\" menu-web relative menu-bg-white border no-border-t\">
                            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_taxon_index_by_code", array("code" => "category", "template" => "@SyliusShop/Taxon/_horizontalMenu.html.twig")));
        echo "

                        </div>
                        <!-- Slide -->
                        <div class=\"clearfix slide-box-home slide-v3 relative top-margin-15-default left-margin-15-default\">
                            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_index_by_section_code", array("sectionCode" => "slider", "template" => "@SyliusShop/_slider.html.twig")));
        echo "

                        </div>
                        <div class=\"category-image top-margin-15-default left-margin-15-default float-left border\">
                            <div class=\"owl-carousel owl-theme\">
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_index_by_section_code", array("sectionCode" => "category_image_slide", "template" => "@SyliusShop/category_slide.html.twig")));
        echo "


                            </div>
                        </div>
                        <div class=\"clearfix box-banner-small-v3 top-margin-15-default left-margin-15-default box-banner-small\">
                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_index_by_section_code", array("sectionCode" => "banner_slide", "template" => "@SyliusShop/_banner_slide.html.twig")));
        echo "
                        </div>
                    </div>
                    <!-- End Menu & Slide -->
                </div>
            </div>
        </div>
        <!-- Box Banner Percent 3 -->
        <div class=\" banner-percent-3 container-web\">
            <div class=\" container\">
                <div class=\"row\">
                    <div class=\"banner-pecent-3-top bottom-margin-15-default display-table\">

                        <div class=\"effect-bubba zoom-image-hover overfollow-hidden float-left relative right-margin-15-default \">
                            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/lot.jpg"), "html", null, true);
        echo "\" class=\"\" alt=\"Banner Percent\" />
                            <a href=\"#\"></a>
                        </div>
                        <div class=\"effect-bubba zoom-image-hover overfollow-hidden float-left relative\">
                            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/lip.jpg"), "html", null, true);
        echo "\" class=\"\" alt=\"Banner Percent\" />
                            <a href=\"#\"></a>
                        </div>
                        <div class=\"effect-bubba zoom-image-hover overfollow-hidden float-left relative left-margin-15-default\">
                            <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/rice.jpg"), "html", null, true);
        echo "\" class=\"\" alt=\"Banner Percent\" />
                            <a href=\"#\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Percent 3 -->


        <!-- Product Category Percent 2 -->
        <div class=\" full-width category-percent-two bottom-margin-default\">
            <div class=\"clearfix container-web\">
                <div class=\" container\">
                    <div class=\"row\">
                        <div class=\" clearfix content-left col-md-6 col-sm-6\">
                            <!-- Title Product -->
                            <div class=\"clearfix title-box full-width border\">
                                <div class=\"clearfix name-title-box title-category title-gold-bg relative\">
                                    <p>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.fruits"), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"clearfix menu-title-box\">
                                    <p class=\"view-all-product-category title-hover-red\"><a href=\"#\" class=\"animate-default\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.view_all"), "html", null, true);
        echo "</a></p>
                                </div>
                            </div>
                            <div class=\" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative\">
                                <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/fruits.jpg"), "html", null, true);
        echo "\" class=\"max-width\" alt=\"Image . . .\" />
                                <a href=\"#\"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class=\"clearfix product-percent-content border-collapsed-box full-width\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 6, "code" => "fruit_vegetales", "template" => "@SyliusShop/Product/_horizontalListM.html.twig")));
        echo "
                            </div>


                        </div>
                        <div class=\" clearfix content-right col-md-6 col-sm-6\">
                            <!-- Title Product -->
                            <div class=\"clearfix title-box full-width border\">
                                <div class=\"clearfix name-title-box title-category title-violet-bg relative\">
                                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/icon_health.png"), "html", null, true);
        echo "\" alt=\"Icon Health & Beauty\" class=\"absolute\" />
                                    <p>";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.bakery"), "html", null, true);
        echo "</p>
                                </div>
                                <div class=\"clearfix menu-title-box\">
                                    <p class=\"view-all-product-category title-hover-red\"><a href=\"#\" class=\"animate-default\">";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.view_all"), "html", null, true);
        echo "</a></p>
                                </div>
                            </div>
                            <div class=\" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative\">
                                <img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/banner_p_2_1.png"), "html", null, true);
        echo "\" class=\"max-width\" alt=\"Image . . .\" />
                                <a href=\"#\"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class=\"clearfix product-percent-content border-collapsed-box full-width\">
                                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_shop_partial_product_index_latest_by_taxon_code", array("count" => 6, "code" => "bakery", "template" => "@SyliusShop/Product/_horizontalListM.html.twig")));
        echo "


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 106,  214 => 101,  207 => 97,  201 => 94,  197 => 93,  185 => 84,  177 => 79,  170 => 75,  164 => 72,  142 => 53,  135 => 49,  128 => 45,  111 => 31,  102 => 25,  94 => 20,  86 => 15,  76 => 7,  67 => 6,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@SyliusShop/layout.html.twig' %}
{% block style %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/home.css') }}\">
{% endblock %}

{% block content %}
    <div class=\"relative clearfix full-width\">
        <!-- Menu & Slide -->
        <div class=\"clearfix container-web relative\">
            <div class=\" container relative\">
                <div class=\"row\">
                    <div class=\" relative menu-slide col-lg-12 clear-padding bottom-margin-15-default\">
                        <!-- Menu -->
                        <div class=\" menu-web relative menu-bg-white border no-border-t\">
                            {{ render(url('sylius_shop_partial_taxon_index_by_code', {'code': 'category', 'template': '@SyliusShop/Taxon/_horizontalMenu.html.twig'})) }}

                        </div>
                        <!-- Slide -->
                        <div class=\"clearfix slide-box-home slide-v3 relative top-margin-15-default left-margin-15-default\">
                            {{ render(path('bitbag_sylius_cms_plugin_shop_media_index_by_section_code', {'sectionCode' : 'slider', 'template' : '@SyliusShop/_slider.html.twig'})) }}

                        </div>
                        <div class=\"category-image top-margin-15-default left-margin-15-default float-left border\">
                            <div class=\"owl-carousel owl-theme\">
                                {{ render(path('bitbag_sylius_cms_plugin_shop_media_index_by_section_code', {'sectionCode' : 'category_image_slide', 'template' : '@SyliusShop/category_slide.html.twig'})) }}


                            </div>
                        </div>
                        <div class=\"clearfix box-banner-small-v3 top-margin-15-default left-margin-15-default box-banner-small\">
                            {{ render(path('bitbag_sylius_cms_plugin_shop_media_index_by_section_code', {'sectionCode' : 'banner_slide', 'template' : '@SyliusShop/_banner_slide.html.twig'})) }}
                        </div>
                    </div>
                    <!-- End Menu & Slide -->
                </div>
            </div>
        </div>
        <!-- Box Banner Percent 3 -->
        <div class=\" banner-percent-3 container-web\">
            <div class=\" container\">
                <div class=\"row\">
                    <div class=\"banner-pecent-3-top bottom-margin-15-default display-table\">

                        <div class=\"effect-bubba zoom-image-hover overfollow-hidden float-left relative right-margin-15-default \">
                            <img src=\"{{ asset('shop/img/lot.jpg') }}\" class=\"\" alt=\"Banner Percent\" />
                            <a href=\"#\"></a>
                        </div>
                        <div class=\"effect-bubba zoom-image-hover overfollow-hidden float-left relative\">
                            <img src=\"{{ asset('shop/img/lip.jpg') }}\" class=\"\" alt=\"Banner Percent\" />
                            <a href=\"#\"></a>
                        </div>
                        <div class=\"effect-bubba zoom-image-hover overfollow-hidden float-left relative left-margin-15-default\">
                            <img src=\"{{ asset('shop/img/rice.jpg') }}\" class=\"\" alt=\"Banner Percent\" />
                            <a href=\"#\"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Percent 3 -->


        <!-- Product Category Percent 2 -->
        <div class=\" full-width category-percent-two bottom-margin-default\">
            <div class=\"clearfix container-web\">
                <div class=\" container\">
                    <div class=\"row\">
                        <div class=\" clearfix content-left col-md-6 col-sm-6\">
                            <!-- Title Product -->
                            <div class=\"clearfix title-box full-width border\">
                                <div class=\"clearfix name-title-box title-category title-gold-bg relative\">
                                    <p>{{ 'sylius.front.fruits'|trans }}</p>
                                </div>
                                <div class=\"clearfix menu-title-box\">
                                    <p class=\"view-all-product-category title-hover-red\"><a href=\"#\" class=\"animate-default\">{{ 'sylius.front.view_all'|trans }}</a></p>
                                </div>
                            </div>
                            <div class=\" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative\">
                                <img src=\"{{ asset('shop/img/fruits.jpg') }}\" class=\"max-width\" alt=\"Image . . .\" />
                                <a href=\"#\"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class=\"clearfix product-percent-content border-collapsed-box full-width\">
                                {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 6, 'code': 'fruit_vegetales', 'template': '@SyliusShop/Product/_horizontalListM.html.twig'})) }}
                            </div>


                        </div>
                        <div class=\" clearfix content-right col-md-6 col-sm-6\">
                            <!-- Title Product -->
                            <div class=\"clearfix title-box full-width border\">
                                <div class=\"clearfix name-title-box title-category title-violet-bg relative\">
                                    <img src=\"{{ asset('shop/img/icon_health.png') }}\" alt=\"Icon Health & Beauty\" class=\"absolute\" />
                                    <p>{{ 'sylius.front.bakery'|trans }}</p>
                                </div>
                                <div class=\"clearfix menu-title-box\">
                                    <p class=\"view-all-product-category title-hover-red\"><a href=\"#\" class=\"animate-default\">{{ 'sylius.front.view_all'|trans }}</a></p>
                                </div>
                            </div>
                            <div class=\" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative\">
                                <img src=\"{{ asset('shop/img/banner_p_2_1.png') }}\" class=\"max-width\" alt=\"Image . . .\" />
                                <a href=\"#\"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class=\"clearfix product-percent-content border-collapsed-box full-width\">
                                {{ render(url('app_shop_partial_product_index_latest_by_taxon_code', { 'count': 6, 'code': 'bakery', 'template': '@SyliusShop/Product/_horizontalListM.html.twig'})) }}


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}
", "@SyliusShop/Homepage/index.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/Homepage/index.html.twig");
    }
}
