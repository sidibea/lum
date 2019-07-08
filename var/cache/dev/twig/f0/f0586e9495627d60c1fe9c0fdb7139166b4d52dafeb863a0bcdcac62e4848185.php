<?php

/* @SyliusShop/layout.html.twig */
class __TwigTemplate_845ab847b927f118ffb0661cacc710531e128ccf73b294b7cd72097a4321bf6c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metatags' => array($this, 'block_metatags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'style' => array($this, 'block_style'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->source); })()), "request", array()), "locale", array()), 0, 2), "html", null, true);
        echo "\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    ";
        // line 9
        $this->displayBlock('metatags', $context, $blocks);
        // line 11
        echo "
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "

</head>
<body>
    <div class=\"pushmenu menu-home5\">
        <div class=\"menu-push\">
        <span class=\"close-left js-close\"><i class=\"fa fa-times f-20\"></i></span>
        <div class=\"clearfix\"></div>
        <form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"/search\">
            <div>
                <label class=\"screen-reader-text\" for=\"q\"></label>
                <input type=\"text\" placeholder=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.enter_keyword"), "html", null, true);
        echo "\" value=\"\" name=\"q\" id=\"q\" autocomplete=\"off\">
                <input type=\"hidden\" name=\"type\" value=\"product\">
                <button type=\"submit\" id=\"searchsubmit\"><i class=\"ion-ios-search-strong\"></i></button>
            </div>
        </form>
        <ul class=\"nav-home5 js-menubar\">
            <li class=\"level1 active \">
                <a href=\"#\">";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.home"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"level1 active \"><a href=\"#\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.properties"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"level1\">
                <a href=\"#\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.events"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"level1\">
                <a href=\"#\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.travel"), "html", null, true);
        echo "</a>

            </li>
        </ul>
    </div>
    </div>
    <!-- Menu Mobile -->
    <div class=\"menu-mobile-left-content menu-bg-white\">
        <ul>
            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_taxon_index_by_code", array("code" => "category", "template" => "@SyliusShop/Taxon/_horizontalMenu.html.twig")));
        echo "
        </ul>
    </div>
    <div class=\"wrappage\">
        <header class=\"relative full-width\">
            <div class=\" container-web relative\">
                <div class=\" container\">
                    <div class=\"row\">
                        <div class=\" header-top\">
                            <p class=\"contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin\">
                                <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/icon_phone_top.png"), "html", null, true);
        echo " \" alt=\"Icon Phone Top Header\" /> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.call_us"), "html", null, true);
        echo " <span class=\"text-red bold\">(223) 51 26 57 57</span>
                            </p>
                            ";
        // line 88
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_currency_switcher"));
        echo "


                            <div class=\"menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding\">
                                ";
        // line 92
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_security_widget"));
        echo "
                                <ul class=\"clear-margin\">
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.security_widget:renderAction"));
        echo "
                                    ";
        // line 95
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_security_widget"));
        echo "



                                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.locale_switch:renderAction"));
        echo "


                                    ";
        // line 102
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.before_currency_switcher"));
        echo "
                                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("sylius.controller.shop.currency_switch:renderAction"));
        echo "


                                </ul>
                            </div>
                        </div>
                    </div>
                    ";
        // line 110
        $this->displayBlock('header', $context, $blocks);
        // line 118
        echo "                    <div class=\"row\">
                        <a class=\"menu-vertical hidden-md hidden-lg\" onclick=\"showMenuMobie()\">
                            <span class=\"animate-default\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.all_categories"), "html", null, true);
        echo "</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"menu-header-v3 hidden-ipx\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Menu Page -->
                        <div class=\"menu-header full-width\">
                            <ul class=\"clear-margin\">
                                <li onclick=\"showMenuHomeV3()\"><a class=\"animate-default\" href=\"#\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.all_categories"), "html", null, true);
        echo "</a></li>


                            </ul>
                        </div>
                        <!-- End Menu Page -->
                    </div>
                </div>
            </div>
            <div class=\"clearfix menu_more_header menu-web menu-bg-white\">
                <ul>
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sylius_shop_partial_taxon_index_by_code", array("code" => "category", "template" => "@SyliusShop/Taxon/_horizontalMenu.html.twig")));
        echo "
                </ul>
            </div>
            <div class=\"header-ontop\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"clearfix logo\">
                                <a href=\"#\"><img alt=\"Logo\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/logo.png"), "html", null, true);
        echo "\" /></a>
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            <div class=\"menu-header\">
                                <ul class=\"main__menu clear-margin\">
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.home"), "html", null, true);
        echo "</a>
                                    </li>
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.foods"), "html", null, true);
        echo "</a>
                                    </li>
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.properties"), "html", null, true);
        echo "</a>
                                    </li>
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.events"), "html", null, true);
        echo "</a>
                                    </li>
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sylius.front.travel"), "html", null, true);
        echo "</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        ";
        // line 180
        $this->displayBlock('content', $context, $blocks);
        // line 182
        echo "
        <footer class=\" bg-gray full-width border no-border-r no-border-l footer-v3 no-border-b\">
            <div class=\"clearfix container-web relative\">
                <div class=\" container clear-padding\">
                    <div class=\"row\">
                        ";
        // line 187
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bitbag_sylius_cms_plugin_shop_media_index_by_section_code", array("sectionCode" => "support_box_info ", "template" => "@SyliusShop/_supportbox.html.twig")));
        echo "


                    </div>
                    <div class=\"row\">
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>mon compte</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_account_dashboard");
        echo "\">Mon compte</a></li>
                                <li><a href=\"";
        // line 196
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_login");
        echo "\">Login</a></li>
                                <li><a href=\"";
        // line 197
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sylius_shop_cart_summary");
        echo "\">Mon panier</a></li>
                                <li><a href=\"#\">Comparer</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>information</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Historique de commande</a></li>
                                <li><a href=\"#\">Politique de confidentialite</a></li>
                                <li><a href=\"#\">Site Map</a></li>
                            </ul>
                        </div>

                        <div class=\"clearfix col-md-6 col-sm-6 col-xs-12 text-footer\">
                            <p>contactez-nous</p>
                            <ul class=\"icon-footer\">
                                <li><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Badalabougou SEMA Rue: 101 Porte: 202</li>
                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> contact@lumoo.ml</li>
                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> </li>
                                <li><i class=\"fa fa-fax\" aria-hidden=\"true\"></i>223 75 65 71 77</li>
                                <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 08:00 - 18:00 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Box Social -->
            <div class=\" top-footer full-width\">
                <div class=\"clearfix container-web relative\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-9 col-sm-12 clear-padding col-xs-12\">

                            </div>
                            <div class=\"clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right\">
                                <a href=\"#\"><img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/social_tw-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Twiter\"></a>
                                <a href=\"#\"><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/social_fa-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Facebook\"></a>
                                <a href=\"#\"><img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/social_int-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Instagram\"></a>
                                <a href=\"#\"><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/social_yt-min.png"), "html", null, true);
        echo "\" alt=\"Icon Social Youtube\" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Box Social -->
            <div class=\" bottom-footer full-width\">
                <div class=\"clearfix container-web\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-7 clear-padding copyright\">
                                <p>Copyright © 2018 by InfoSys. All Rights Reserved.</p>
                            </div>
                            <div class=\"clearfix footer-icon-bottom col-md-5 float-right clear-padding\">
                                <div class=\"icon_logo_footer float-right\">
                                    <img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/img/image_payment_footer-min.png"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>



";
        // line 266
        $this->displayBlock('javascripts', $context, $blocks);
        // line 277
        echo "
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lumoo";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_metatags($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metatags"));

        // line 10
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/icon-font-linea.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/multirange.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/themify-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/effect.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/slick.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/slick-theme.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        ";
        // line 29
        $this->displayBlock('style', $context, $blocks);
        // line 32
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/category.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/responsive.css"), "html", null, true);
        echo "\">
        ";
        // line 36
        $this->loadTemplate("@SyliusUi/_stylesheets.html.twig", "@SyliusShop/layout.html.twig", 36)->display(array_merge($context, array("path" => "assets/shop/css/style.css")));
        // line 37
        echo "

        ";
        // line 39
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.stylesheets"));
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_style($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 30
        echo "            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/css/home.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 111
        echo "                        <header>
                            ";
        // line 112
        $this->loadTemplate("@SyliusShop/_header.html.twig", "@SyliusShop/layout.html.twig", 112)->display($context);
        // line 113
        echo "
                            ";
        // line 114
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.after_header"));
        echo "

                        </header>
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 181
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 266
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 267
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/js/bootstrap.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/js/multirange.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/js/slick.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/js/owl.carousel.min.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("shop/js/scripts.js"), "html", null, true);
        echo "\" defer=\"\"></script>
    ";
        // line 273
        $this->loadTemplate("@SyliusUi/_javascripts.html.twig", "@SyliusShop/layout.html.twig", 273)->display(array_merge($context, array("path" => "assets/shop/js/app.js")));
        // line 274
        echo "
    ";
        // line 275
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.layout.javascripts"));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 275,  637 => 274,  635 => 273,  631 => 272,  627 => 271,  623 => 270,  619 => 269,  615 => 268,  610 => 267,  601 => 266,  591 => 181,  582 => 180,  568 => 114,  565 => 113,  563 => 112,  560 => 111,  551 => 110,  538 => 30,  529 => 29,  517 => 39,  513 => 37,  511 => 36,  507 => 35,  503 => 34,  499 => 33,  494 => 32,  492 => 29,  488 => 28,  484 => 27,  480 => 26,  476 => 25,  472 => 24,  468 => 23,  464 => 22,  460 => 21,  456 => 20,  452 => 19,  444 => 13,  435 => 12,  425 => 10,  416 => 9,  398 => 4,  384 => 277,  382 => 266,  365 => 252,  346 => 236,  342 => 235,  338 => 234,  334 => 233,  295 => 197,  291 => 196,  287 => 195,  276 => 187,  269 => 182,  267 => 180,  253 => 169,  247 => 166,  241 => 163,  235 => 160,  229 => 157,  219 => 150,  208 => 142,  194 => 131,  180 => 120,  176 => 118,  174 => 110,  164 => 103,  160 => 102,  154 => 99,  147 => 95,  143 => 94,  138 => 92,  131 => 88,  124 => 86,  111 => 76,  99 => 67,  93 => 64,  87 => 61,  82 => 59,  72 => 52,  59 => 41,  57 => 12,  54 => 11,  52 => 9,  44 => 4,  39 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|slice(0, 2) }}\">
<head>
    <title>{% block title %}Lumoo{% endblock %}</title>
    <meta name=\"format-detection\" content=\"telephone=no\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    {% block metatags %}
    {% endblock %}

    {% block stylesheets %}

        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:100,300,400,500,700,900%7CRoboto+Condensed:100,300,400,500,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/icon-font-linea.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/multirange.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/bootstrap-theme.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/themify-icons.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/style.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/effect.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/slick.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/slick-theme.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/font-awesome.min.css') }}\">
        {% block style %}
            <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/home.css') }}\">
        {% endblock %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/category.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/owl.carousel.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('shop/css/responsive.css') }}\">
        {% include '@SyliusUi/_stylesheets.html.twig' with {'path': 'assets/shop/css/style.css'} %}


        {{ sonata_block_render_event('sylius.shop.layout.stylesheets') }}
    {% endblock %}


</head>
<body>
    <div class=\"pushmenu menu-home5\">
        <div class=\"menu-push\">
        <span class=\"close-left js-close\"><i class=\"fa fa-times f-20\"></i></span>
        <div class=\"clearfix\"></div>
        <form role=\"search\" method=\"get\" id=\"searchform\" class=\"searchform\" action=\"/search\">
            <div>
                <label class=\"screen-reader-text\" for=\"q\"></label>
                <input type=\"text\" placeholder=\"{{ 'sylius.front.enter_keyword'|trans }}\" value=\"\" name=\"q\" id=\"q\" autocomplete=\"off\">
                <input type=\"hidden\" name=\"type\" value=\"product\">
                <button type=\"submit\" id=\"searchsubmit\"><i class=\"ion-ios-search-strong\"></i></button>
            </div>
        </form>
        <ul class=\"nav-home5 js-menubar\">
            <li class=\"level1 active \">
                <a href=\"#\">{{ 'sylius.front.home'|trans }}</a>
            </li>
            <li class=\"level1 active \"><a href=\"#\">{{ 'sylius.front.properties'|trans }}</a>
            </li>
            <li class=\"level1\">
                <a href=\"#\">{{ 'sylius.front.events'|trans }}</a>
            </li>
            <li class=\"level1\">
                <a href=\"#\">{{ 'sylius.front.travel'|trans }}</a>

            </li>
        </ul>
    </div>
    </div>
    <!-- Menu Mobile -->
    <div class=\"menu-mobile-left-content menu-bg-white\">
        <ul>
            {{ render(url('sylius_shop_partial_taxon_index_by_code', {'code': 'category', 'template': '@SyliusShop/Taxon/_horizontalMenu.html.twig'})) }}
        </ul>
    </div>
    <div class=\"wrappage\">
        <header class=\"relative full-width\">
            <div class=\" container-web relative\">
                <div class=\" container\">
                    <div class=\"row\">
                        <div class=\" header-top\">
                            <p class=\"contact_us_header col-md-4 col-xs-12 col-sm-3 clear-margin\">
                                <img src=\"{{ asset('shop/img/icon_phone_top.png') }} \" alt=\"Icon Phone Top Header\" /> {{ 'sylius.front.call_us'|trans }} <span class=\"text-red bold\">(223) 51 26 57 57</span>
                            </p>
                            {{ sonata_block_render_event('sylius.shop.layout.before_currency_switcher') }}


                            <div class=\"menu-header-top text-right col-md-8 col-xs-12 col-sm-6 clear-padding\">
                                {{ sonata_block_render_event('sylius.shop.layout.before_security_widget') }}
                                <ul class=\"clear-margin\">
                                    {{ render(controller('sylius.controller.shop.security_widget:renderAction')) }}
                                    {{ sonata_block_render_event('sylius.shop.layout.after_security_widget') }}



                                    {{ render(controller('sylius.controller.shop.locale_switch:renderAction')) }}


                                    {{ sonata_block_render_event('sylius.shop.layout.before_currency_switcher') }}
                                    {{ render(controller('sylius.controller.shop.currency_switch:renderAction')) }}


                                </ul>
                            </div>
                        </div>
                    </div>
                    {% block header %}
                        <header>
                            {% include '@SyliusShop/_header.html.twig' %}

                            {{ sonata_block_render_event('sylius.shop.layout.after_header') }}

                        </header>
                    {% endblock %}
                    <div class=\"row\">
                        <a class=\"menu-vertical hidden-md hidden-lg\" onclick=\"showMenuMobie()\">
                            <span class=\"animate-default\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'sylius.front.all_categories'|trans }}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"menu-header-v3 hidden-ipx\">
                <div class=\"container\">
                    <div class=\"row\">
                        <!-- Menu Page -->
                        <div class=\"menu-header full-width\">
                            <ul class=\"clear-margin\">
                                <li onclick=\"showMenuHomeV3()\"><a class=\"animate-default\" href=\"#\"><i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'sylius.front.all_categories'|trans }}</a></li>


                            </ul>
                        </div>
                        <!-- End Menu Page -->
                    </div>
                </div>
            </div>
            <div class=\"clearfix menu_more_header menu-web menu-bg-white\">
                <ul>
                    {{ render(url('sylius_shop_partial_taxon_index_by_code', {'code': 'category', 'template': '@SyliusShop/Taxon/_horizontalMenu.html.twig'})) }}
                </ul>
            </div>
            <div class=\"header-ontop\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <div class=\"clearfix logo\">
                                <a href=\"#\"><img alt=\"Logo\" src=\"{{ asset('shop/img/logo.png') }}\" /></a>
                            </div>
                        </div>
                        <div class=\"col-md-9\">
                            <div class=\"menu-header\">
                                <ul class=\"main__menu clear-margin\">
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">{{ 'sylius.front.home'|trans }}</a>
                                    </li>
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">{{ 'sylius.front.foods'|trans }}</a>
                                    </li>
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">{{ 'sylius.front.properties'|trans }}</a>
                                    </li>
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">{{ 'sylius.front.events'|trans }}</a>
                                    </li>
                                    <li class=\"title-hover-red\">
                                        <a class=\"animate-default\" href=\"#\">{{ 'sylius.front.travel'|trans }}</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        {% block content %}
        {% endblock %}

        <footer class=\" bg-gray full-width border no-border-r no-border-l footer-v3 no-border-b\">
            <div class=\"clearfix container-web relative\">
                <div class=\" container clear-padding\">
                    <div class=\"row\">
                        {{ render(path('bitbag_sylius_cms_plugin_shop_media_index_by_section_code', {'sectionCode' : 'support_box_info ', 'template' : '@SyliusShop/_supportbox.html.twig'})) }}


                    </div>
                    <div class=\"row\">
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>mon compte</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"{{ path('sylius_shop_account_dashboard') }}\">Mon compte</a></li>
                                <li><a href=\"{{ path('sylius_shop_login') }}\">Login</a></li>
                                <li><a href=\"{{ path('sylius_shop_cart_summary') }}\">Mon panier</a></li>
                                <li><a href=\"#\">Comparer</a></li>
                            </ul>
                        </div>
                        <div class=\"clearfix col-md-3 col-sm-6 col-xs-12 text-footer\">
                            <p>information</p>
                            <ul class=\"list-footer\">
                                <li><a href=\"#\">Information</a></li>
                                <li><a href=\"#\">Historique de commande</a></li>
                                <li><a href=\"#\">Politique de confidentialite</a></li>
                                <li><a href=\"#\">Site Map</a></li>
                            </ul>
                        </div>

                        <div class=\"clearfix col-md-6 col-sm-6 col-xs-12 text-footer\">
                            <p>contactez-nous</p>
                            <ul class=\"icon-footer\">
                                <li><i class=\"fa fa-home\" aria-hidden=\"true\"></i> Badalabougou SEMA Rue: 101 Porte: 202</li>
                                <li><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> contact@lumoo.ml</li>
                                <li><i class=\"fa fa-phone\" aria-hidden=\"true\"></i> </li>
                                <li><i class=\"fa fa-fax\" aria-hidden=\"true\"></i>223 75 65 71 77</li>
                                <li><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> 08:00 - 18:00 </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Box Social -->
            <div class=\" top-footer full-width\">
                <div class=\"clearfix container-web relative\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-9 col-sm-12 clear-padding col-xs-12\">

                            </div>
                            <div class=\"clearfix col-md-3 col-sm-12 col-xs-12 clear-padding social-box text-right\">
                                <a href=\"#\"><img src=\"{{ asset('shop/img/social_tw-min.png') }}\" alt=\"Icon Social Twiter\"></a>
                                <a href=\"#\"><img src=\"{{ asset('shop/img/social_fa-min.png') }}\" alt=\"Icon Social Facebook\"></a>
                                <a href=\"#\"><img src=\"{{ asset('shop/img/social_int-min.png') }}\" alt=\"Icon Social Instagram\"></a>
                                <a href=\"#\"><img src=\"{{ asset('shop/img/social_yt-min.png') }}\" alt=\"Icon Social Youtube\" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Box Social -->
            <div class=\" bottom-footer full-width\">
                <div class=\"clearfix container-web\">
                    <div class=\" container\">
                        <div class=\"row\">
                            <div class=\"clearfix col-md-7 clear-padding copyright\">
                                <p>Copyright © 2018 by InfoSys. All Rights Reserved.</p>
                            </div>
                            <div class=\"clearfix footer-icon-bottom col-md-5 float-right clear-padding\">
                                <div class=\"icon_logo_footer float-right\">
                                    <img src=\"{{ asset('shop/img/image_payment_footer-min.png') }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


    </div>



{% block javascripts %}
    <script src=\"{{ asset('shop/js/jquery-3.3.1.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('shop/js/bootstrap.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('shop/js/multirange.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('shop/js/slick.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('shop/js/owl.carousel.min.js') }}\" defer=\"\"></script>
    <script src=\"{{ asset('shop/js/scripts.js') }}\" defer=\"\"></script>
    {% include '@SyliusUi/_javascripts.html.twig' with {'path': 'assets/shop/js/app.js'} %}

    {{ sonata_block_render_event('sylius.shop.layout.javascripts') }}
{% endblock %}

</body>
</html>

", "@SyliusShop/layout.html.twig", "/Applications/MAMP/htdocs/lumoo/app/themes/AminaTheme/SyliusShopBundle/views/layout.html.twig");
    }
}
