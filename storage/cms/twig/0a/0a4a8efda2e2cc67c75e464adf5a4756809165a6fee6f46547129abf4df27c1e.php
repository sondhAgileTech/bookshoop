<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productlist/product.htm */
class __TwigTemplate_fc5fb258c0ea826f0a80c03fe6307ae5d9fe32b3691c03f2fde0ca53127a351e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("partial" => 4, "if" => 8);
        $filters = array("escape" => 3, "trans" => 9, "currency" => 34, "length" => 42, "join" => 43, "nl2br" => 47);
        $functions = array("str_limit" => 31);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'if'],
                ['escape', 'trans', 'currency', 'length', 'join', 'nl2br'],
                ['str_limit']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"col col-md-3 col-xs-4\">
\t<div class=\"product-container product-card\">
\t\t<form id=\"favorite-product-";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "\" data-request=\"onSetFavorite\" data-request-flash>
\t\t\t";
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['product'] = ($context["product"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@favorite"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "\t\t</form>

\t\t<div class=\"card-status-label\">
\t\t\t";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "is_on_sale", [], "any", false, false, true, 8)) {
            // line 9
            echo "\t\t\t\t<span class=\"label label-success\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.onsale"]);
            echo "</span>
\t\t\t";
        }
        // line 11
        echo "
\t\t\t";
        // line 12
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, true, 12) < 1) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, true, 12) != null))) {
            // line 13
            echo "\t\t\t\t<span class=\"label label-danger\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.soldout"]);
            echo "</span>
\t\t\t";
        }
        // line 15
        echo "\t\t</div>

\t\t<div class=\"card-block card-actions\">
\t\t\t";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, true, 18)) {
            // line 19
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\">
\t\t\t\t<img class=\"card-img-top img-responsive\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, true, 20), "thumb", [0 => 500, 1 => 500, 2 => "crop"], "method", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\" alt=\"\">
            </a>
\t\t\t";
        }
        // line 23
        echo "
\t\t\t<div class=\"card-body vertical-align\">
\t\t\t\t<div class=\"vertical-wrap\">
\t\t\t\t\t";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, true, 26), "name", [], "any", false, false, true, 26)) {
            // line 27
            echo "\t\t\t\t\t\t<span class=\"label label-default shop__product-brand\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, true, 27), "name", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</span>
\t\t\t\t\t";
        }
        // line 29
        echo "
\t\t\t\t\t<h4 class=\"card-title shop__product-title\">
\t\t\t\t\t\t";
        // line 31
        echo call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, true, 31), 31, $this->source), 48, "..."]);
        echo "
\t\t\t\t\t</h4>
\t\t\t\t\t<h3 class=\"card-price shop__product-price\">
\t\t\t\t\t\t";
        // line 34
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "method", false, false, true, 34), 34, $this->source)]);
        echo "
\t\t\t\t\t</h3>
\t\t\t\t\t";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "is_on_sale", [], "any", false, false, true, 36)) {
            // line 37
            echo "\t\t\t\t\t<small class=\"shop__product-old-price\">
\t\t\t\t\t\t<strike class=\"text-danger\">";
            // line 38
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getOldPrice", [], "method", false, false, true, 38), 38, $this->source)]);
            echo "</strike>
\t\t\t\t\t</small>
\t\t\t\t\t";
        }
        // line 41
        echo "
\t\t\t\t\t";
        // line 42
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categories", [], "any", false, false, true, 42)) > 0)) {
            // line 43
            echo "\t\t\t\t\t<p><small><i class=\"fas fa-tag\"></i> ";
            echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categories", [], "any", false, false, true, 43), "lists", [0 => "name"], "method", false, false, true, 43), 43, $this->source), ", "), "html", null, true);
            echo "</small></p>
\t\t\t\t\t";
        }
        // line 45
        echo "
\t\t\t\t\t";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "short_description", [], "any", false, false, true, 46)) {
            // line 47
            echo "\t\t\t\t\t\t<p class=\"shop__product-short-description\">";
            echo nl2br(call_user_func_array($this->env->getFunction('str_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "short_description", [], "any", false, false, true, 47), 47, $this->source), 120, "..."]));
            echo "</p>
\t\t\t\t\t";
        }
        // line 49
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 52
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, true, 52) > 0) || (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, true, 52) == null))) {
            // line 53
            echo "\t\t\t<form data-request=\"onAddToCart\" data-request-flash data-request-success=\"CartButton.onSuccess(data)\">
\t\t\t\t";
            // line 54
            if (($context["showQuickAdd"] ?? null)) {
                // line 55
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "is_with_variants", [], "any", false, false, true, 55) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, true, 55)) > 0))) {
                    // line 56
                    echo "\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-block btn-footer\">
\t\t\t\t\t<span class=\"fas fa-info-circle\" aria-hidden=\"true\"></span> 
\t\t\t\t\t";
                    // line 58
                    echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.moreinfo"]);
                    echo "
\t\t\t\t</a>
\t\t\t\t";
                } else {
                    // line 61
                    echo "\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                    echo "\">
\t\t\t\t<input type=\"hidden\" name=\"price\" value=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                    echo "\">
\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"1\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block btn-footer\" data-attach-loading>
\t\t\t\t\t<span class=\"fas fa-shopping-cart\" aria-hidden=\"true\"></span> 
\t\t\t\t\t";
                    // line 66
                    echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.addtocart"]);
                    echo "
\t\t\t\t</button>
\t\t\t\t";
                }
                // line 69
                echo "
\t\t\t\t";
            } else {
                // line 71
                echo "\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block btn-footer\">
\t\t\t\t\t<span class=\"fas fa-info-circle\" aria-hidden=\"true\"></span> 
\t\t\t\t\t";
                // line 73
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.moreinfo"]);
                echo "
\t\t\t\t</a>
\t\t\t\t";
            }
            // line 76
            echo "\t\t\t</form>
\t\t\t";
        } else {
            // line 78
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "\" class=\"btn btn-warning btn-block btn-footer\">
\t\t\t\t<span class=\"fas fa-plus-circle\" aria-hidden=\"true\"></span> 
\t\t\t\t";
            // line 80
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.order_reserve"]);
            echo "
\t\t\t</a>
\t\t\t";
        }
        // line 83
        echo "\t\t</div>


\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productlist/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 83,  249 => 80,  243 => 78,  239 => 76,  233 => 73,  227 => 71,  223 => 69,  217 => 66,  210 => 62,  205 => 61,  199 => 58,  193 => 56,  190 => 55,  188 => 54,  185 => 53,  183 => 52,  178 => 49,  172 => 47,  170 => 46,  167 => 45,  161 => 43,  159 => 42,  156 => 41,  150 => 38,  147 => 37,  145 => 36,  140 => 34,  134 => 31,  130 => 29,  124 => 27,  122 => 26,  117 => 23,  111 => 20,  106 => 19,  104 => 18,  99 => 15,  93 => 13,  91 => 12,  88 => 11,  82 => 9,  80 => 8,  75 => 5,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col col-md-3 col-xs-4\">
\t<div class=\"product-container product-card\">
\t\t<form id=\"favorite-product-{{ product.id }}\" data-request=\"onSetFavorite\" data-request-flash>
\t\t\t{% partial '@favorite' product=product %}
\t\t</form>

\t\t<div class=\"card-status-label\">
\t\t\t{% if product.is_on_sale %}
\t\t\t\t<span class=\"label label-success\">{{ 'pixel.shop::lang.frontend.onsale'|trans }}</span>
\t\t\t{% endif %}

\t\t\t{% if product.quantity < 1 and product.quantity != null %}
\t\t\t\t<span class=\"label label-danger\">{{ 'pixel.shop::lang.frontend.soldout'|trans }}</span>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"card-block card-actions\">
\t\t\t{% if product.image %}
\t\t\t<a href=\"{{ product.url }}\">
\t\t\t\t<img class=\"card-img-top img-responsive\" src=\"{{ product.image.thumb(500,500,'crop') }}\" alt=\"\">
            </a>
\t\t\t{% endif %}

\t\t\t<div class=\"card-body vertical-align\">
\t\t\t\t<div class=\"vertical-wrap\">
\t\t\t\t\t{% if product.brand.name %}
\t\t\t\t\t\t<span class=\"label label-default shop__product-brand\">{{ product.brand.name }}</span>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<h4 class=\"card-title shop__product-title\">
\t\t\t\t\t\t{{ str_limit( product.name, 48,'...')  }}
\t\t\t\t\t</h4>
\t\t\t\t\t<h3 class=\"card-price shop__product-price\">
\t\t\t\t\t\t{{ product.getPrice()|currency }}
\t\t\t\t\t</h3>
\t\t\t\t\t{% if product.is_on_sale %}
\t\t\t\t\t<small class=\"shop__product-old-price\">
\t\t\t\t\t\t<strike class=\"text-danger\">{{ product.getOldPrice()|currency }}</strike>
\t\t\t\t\t</small>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if product.categories|length > 0 %}
\t\t\t\t\t<p><small><i class=\"fas fa-tag\"></i> {{ product.categories.lists('name')|join(', ') }}</small></p>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if product.short_description %}
\t\t\t\t\t\t<p class=\"shop__product-short-description\">{{ str_limit( product.short_description, 120,'...')|nl2br  }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% if product.quantity > 0 or product.quantity == null %}
\t\t\t<form data-request=\"onAddToCart\" data-request-flash data-request-success=\"CartButton.onSuccess(data)\">
\t\t\t\t{% if showQuickAdd %}
\t\t\t\t{% if product.is_with_variants and product.variants|length > 0 %}
\t\t\t\t<a href=\"{{ product.url }}\" class=\"btn btn-primary btn-block btn-footer\">
\t\t\t\t\t<span class=\"fas fa-info-circle\" aria-hidden=\"true\"></span> 
\t\t\t\t\t{{ 'pixel.shop::lang.frontend.moreinfo'|trans }}
\t\t\t\t</a>
\t\t\t\t{% else %}
\t\t\t\t<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\">
\t\t\t\t<input type=\"hidden\" name=\"price\" value=\"{{ product.price }}\">
\t\t\t\t<input type=\"hidden\" name=\"quantity\" value=\"1\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-block btn-footer\" data-attach-loading>
\t\t\t\t\t<span class=\"fas fa-shopping-cart\" aria-hidden=\"true\"></span> 
\t\t\t\t\t{{ 'pixel.shop::lang.frontend.addtocart'|trans }}
\t\t\t\t</button>
\t\t\t\t{% endif %}

\t\t\t\t{% else %}
\t\t\t\t<a href=\"{{ product.url }}\" class=\"btn btn-primary btn-block btn-footer\">
\t\t\t\t\t<span class=\"fas fa-info-circle\" aria-hidden=\"true\"></span> 
\t\t\t\t\t{{ 'pixel.shop::lang.frontend.moreinfo'|trans }}
\t\t\t\t</a>
\t\t\t\t{% endif %}
\t\t\t</form>
\t\t\t{% else %}
\t\t\t<a href=\"{{ product.url }}\" class=\"btn btn-warning btn-block btn-footer\">
\t\t\t\t<span class=\"fas fa-plus-circle\" aria-hidden=\"true\"></span> 
\t\t\t\t{{ 'pixel.shop::lang.frontend.order_reserve'|trans }}
\t\t\t</a>
\t\t\t{% endif %}
\t\t</div>


\t</div>
</div>", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productlist/product.htm", "");
    }
}
