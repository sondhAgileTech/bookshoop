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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productdetails/details.htm */
class __TwigTemplate_35e4b48342e82b857e1b33c65505eb400c8531cbc291aff178d8618e643def9f extends \Twig\Template
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
        $tags = array("if" => 7, "for" => 72, "partial" => 129);
        $filters = array("escape" => 3, "trans" => 8, "length" => 20, "join" => 21, "currency" => 29, "raw" => 63);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
                ['escape', 'trans', 'length', 'join', 'currency', 'raw'],
                []
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
        echo "<form data-request=\"onAddToCart\" data-request-flash data-request-success=\"CartButton.onSuccess(data)\">
\t<h1 id=\"product-title\">
\t\t";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
\t</h1>
\t<h4 id=\"product-option-title\"></h4>
\t<div class=\"text-uppercase row-border\">
\t\t";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "is_on_sale", [], "any", false, false, true, 7)) {
            // line 8
            echo "\t\t\t<span class=\"label label-success\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.onsale"]);
            echo "</span>
\t\t";
        }
        // line 10
        echo "
\t\t";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, true, 11) > 0)) {
            // line 12
            echo "\t\t\t<span class=\"label label-success\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.instock"]);
            echo "</span>
\t\t";
        }
        // line 14
        echo "
\t\t";
        // line 15
        if (( !twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isInfiniteQuantity", [], "method", false, false, true, 15) && (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, true, 15) == 0))) {
            // line 16
            echo "\t\t\t<span class=\"label label-danger\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.soldout"]);
            echo "</span>
\t\t";
        }
        // line 18
        echo "\t</div>

\t";
        // line 20
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categories", [], "any", false, false, true, 20)) > 0)) {
            // line 21
            echo "\t<p><small><i class=\"fas fa-tag\"></i> ";
            echo twig_escape_filter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "categories", [], "any", false, false, true, 21), "lists", [0 => "name"], "method", false, false, true, 21), 21, $this->source), ", "), "html", null, true);
            echo "</small></p>
\t";
        }
        // line 23
        echo "
\t<hr>

\t<div class=\"form-group\">
\t\t<h3 id=\"product-price\" class=\"shop__product-price\">
\t\t\t<span class=\"shop__product-price-amount\" data-currency=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getDefaultCurrencySymbol", [], "method", false, false, true, 28), 28, $this->source), "html", null, true);
        echo "\">
\t\t\t\t";
        // line 29
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "method", false, false, true, 29), 29, $this->source)]);
        echo "
\t\t\t</span>

\t\t\t<input type=\"hidden\" name=\"base_price\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [0 => false], "method", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "\">
\t\t\t<input type=\"hidden\" name=\"old_price\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getOldPrice", [0 => false], "method", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "\">

\t\t\t<input type=\"hidden\" name=\"base_price_with_tax\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPrice", [], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo "\">
\t\t\t<input type=\"hidden\" name=\"old_price_with_tax\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getOldPrice", [], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo "\">

\t\t\t";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "is_on_sale", [], "any", false, false, true, 38)) {
            // line 39
            echo "\t\t\t\t&nbsp;
\t\t\t\t<small class=\"shop__product-old-price\">
\t\t\t\t\t<strike class=\"text-danger\">
\t\t\t\t\t\t<span class=\"shop__product-price-old\" data-currency=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getDefaultCurrencySymbol", [], "method", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getOldPrice", [], "method", false, false, true, 42), 42, $this->source)]);
            echo "</span>
\t\t\t\t\t</strike>
\t\t\t\t</small>
\t\t\t";
        }
        // line 46
        echo "\t\t</h3>
\t</div>

\t";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, true, 49)) {
            // line 50
            echo "\t<div class=\"form-group\">
\t\t";
            // line 51
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.brand"]);
            echo "

\t\t";
            // line 53
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, true, 53), "url", [], "any", false, false, true, 53)) {
                // line 54
                echo "\t\t\t<strong><a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, true, 54), "url", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, true, 54), "name", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                echo "</a></strong>
\t\t";
            } else {
                // line 56
                echo "\t\t\t<strong>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "brand", [], "any", false, false, true, 56), "name", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "</strong>
\t\t";
            }
            // line 58
            echo "\t</div>
\t";
        }
        // line 60
        echo "
\t<div class=\"form-group\">
\t\t<div class=\"product-detail-description \">
\t\t\t";
        // line 63
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, true, 63), 63, $this->source);
        echo "
\t\t</div>
\t</div>

\t<br>

\t";
        // line 69
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attachments", [], "any", false, false, true, 69)) > 0)) {
            // line 70
            echo "\t\t<hr>
\t\t<h4>";
            // line 71
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.attachments"]);
            echo "</h4>
\t\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "attachments", [], "any", false, false, true, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 73
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fas fa-download\"></i> ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["file"], "title", [], "any", false, false, true, 73)) ? (twig_get_attribute($this->env, $this->source, $context["file"], "title", [], "any", false, false, true, 73)) : (twig_get_attribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, true, 73))), "html", null, true);
                echo "</a><br />
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "\t\t<hr>
\t";
        }
        // line 77
        echo "
\t";
        // line 78
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "is_with_variants", [], "any", false, false, true, 78)) {
            // line 79
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "variants", [], "any", false, false, true, 79));
            foreach ($context['_seq'] as $context["_key"] => $context["variant"]) {
                // line 80
                echo "\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-md-3 text-right\">";
                // line 81
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["variant"], "variant", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
                echo "</label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<select name=\"option[";
                // line 83
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slugOption", [0 => twig_get_attribute($this->env, $this->source, $context["variant"], "variant", [], "any", false, false, true, 83)], "method", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "]\" class=\"form-control shop__product-option\" data-label=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["variant"], "variant", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "\" data-slug=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["variant"], "id", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t\t<option value=\"\" data-quantity=\"\">";
                // line 84
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.select_option"]);
                echo "</option>

\t\t\t\t\t\t";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["variant"], "items", [], "any", false, false, true, 86));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "checkIfOutStock", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "quantity", [], "any", false, false, true, 87)], "method", false, false, true, 87)) {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "ref", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "\" data-price=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPriceOption", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "any", false, false, true, 88)], "method", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "\" data-tax=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getTaxOption", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "any", false, false, true, 88)], "method", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo " data-quantity=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "quantity", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                        echo "\" disabled=\"disabled\">
\t\t\t\t\t\t\t\t\t";
                        // line 89
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "val", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
                        echo " (";
                        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.messages.out_of_stock"]);
                        echo ")
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t";
                    } else {
                        // line 92
                        echo "\t\t\t\t\t\t\t\t<option value=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "ref", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\" data-price=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getPriceOption", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "any", false, false, true, 92)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\" data-tax=";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getTaxOption", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "price", [], "any", false, false, true, 92)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo " data-quantity=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "quantity", [], "any", false, false, true, 92), 92, $this->source), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t";
                        // line 93
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "val", [], "any", false, false, true, 93), 93, $this->source), "html", null, true);
                        echo "
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variant'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "\t";
        }
        // line 102
        echo "
\t";
        // line 103
        if (((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "quantity", [], "any", false, false, true, 103) > 0) || twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isInfiniteQuantity", [], "method", false, false, true, 103))) {
            // line 104
            echo "\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-md-3 text-right\">";
            // line 105
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.quantity"]);
            echo "</label>
\t\t\t<div class=\"col-md-3 text-right\">
\t\t\t\t<div class=\"number-input shop__product-qty\">
\t\t\t\t\t<button type=\"button\" onclick=\"this.parentNode.querySelector('input[type=number]').stepDown()\" ></button>
\t\t\t\t\t<input name=\"quantity\" type=\"number\" class=\"form-control text-center\" value=\"1\" min=\"1\">
\t\t\t\t\t<button type=\"button\" onclick=\"this.parentNode.querySelector('input[type=number]').stepUp()\" class=\"plus\"></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" name=\"id\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" name=\"price\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            echo "\">
\t\t<input type=\"hidden\" name=\"options\" value=\"\">
\t\t<input type=\"hidden\" name=\"options_index\" value=\"\">
\t\t<button type=\"submit\" class=\"btn btn-primary btn-block btn-footer\" data-attach-loading>
\t\t\t<span class=\"fas fa-shopping-cart\" aria-hidden=\"true\"></span> 
\t\t\t";
            // line 121
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.addtocart"]);
            echo "
\t\t</button>
\t";
        }
        // line 124
        echo "</form>

<hr>

<div class=\"share-buttons pull-right\">
\t";
        // line 129
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@share-buttons"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 130
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/details.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 130,  381 => 129,  374 => 124,  368 => 121,  360 => 116,  356 => 115,  343 => 105,  340 => 104,  338 => 103,  335 => 102,  332 => 101,  323 => 97,  317 => 96,  311 => 93,  300 => 92,  292 => 89,  281 => 88,  278 => 87,  274 => 86,  269 => 84,  261 => 83,  256 => 81,  253 => 80,  248 => 79,  246 => 78,  243 => 77,  239 => 75,  228 => 73,  224 => 72,  220 => 71,  217 => 70,  215 => 69,  206 => 63,  201 => 60,  197 => 58,  191 => 56,  183 => 54,  181 => 53,  176 => 51,  173 => 50,  171 => 49,  166 => 46,  157 => 42,  152 => 39,  150 => 38,  145 => 36,  141 => 35,  136 => 33,  132 => 32,  126 => 29,  122 => 28,  115 => 23,  109 => 21,  107 => 20,  103 => 18,  97 => 16,  95 => 15,  92 => 14,  86 => 12,  84 => 11,  81 => 10,  75 => 8,  73 => 7,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form data-request=\"onAddToCart\" data-request-flash data-request-success=\"CartButton.onSuccess(data)\">
\t<h1 id=\"product-title\">
\t\t{{ product.name }}
\t</h1>
\t<h4 id=\"product-option-title\"></h4>
\t<div class=\"text-uppercase row-border\">
\t\t{% if product.is_on_sale %}
\t\t\t<span class=\"label label-success\">{{ 'pixel.shop::lang.frontend.onsale'|trans }}</span>
\t\t{% endif %}

\t\t{% if product.quantity > 0 %}
\t\t\t<span class=\"label label-success\">{{ 'pixel.shop::lang.frontend.instock'|trans }}</span>
\t\t{% endif %}

\t\t{% if not product.isInfiniteQuantity() and product.quantity == 0 %}
\t\t\t<span class=\"label label-danger\">{{ 'pixel.shop::lang.frontend.soldout'|trans }}</span>
\t\t{% endif %}
\t</div>

\t{% if product.categories|length > 0 %}
\t<p><small><i class=\"fas fa-tag\"></i> {{ product.categories.lists('name')|join(', ') }}</small></p>
\t{% endif %}

\t<hr>

\t<div class=\"form-group\">
\t\t<h3 id=\"product-price\" class=\"shop__product-price\">
\t\t\t<span class=\"shop__product-price-amount\" data-currency=\"{{ product.getDefaultCurrencySymbol() }}\">
\t\t\t\t{{ product.getPrice()|currency }}
\t\t\t</span>

\t\t\t<input type=\"hidden\" name=\"base_price\" value=\"{{ product.getPrice(false) }}\">
\t\t\t<input type=\"hidden\" name=\"old_price\" value=\"{{ product.getOldPrice(false) }}\">

\t\t\t<input type=\"hidden\" name=\"base_price_with_tax\" value=\"{{ product.getPrice() }}\">
\t\t\t<input type=\"hidden\" name=\"old_price_with_tax\" value=\"{{ product.getOldPrice() }}\">

\t\t\t{% if product.is_on_sale %}
\t\t\t\t&nbsp;
\t\t\t\t<small class=\"shop__product-old-price\">
\t\t\t\t\t<strike class=\"text-danger\">
\t\t\t\t\t\t<span class=\"shop__product-price-old\" data-currency=\"{{ product.getDefaultCurrencySymbol() }}\">{{ product.getOldPrice()|currency }}</span>
\t\t\t\t\t</strike>
\t\t\t\t</small>
\t\t\t{% endif %}
\t\t</h3>
\t</div>

\t{% if product.brand %}
\t<div class=\"form-group\">
\t\t{{ 'pixel.shop::lang.frontend.brand'|trans }}

\t\t{% if (product.brand.url) %}
\t\t\t<strong><a href=\"{{ product.brand.url }}\">{{ product.brand.name }}</a></strong>
\t\t{% else %}
\t\t\t<strong>{{ product.brand.name }}</strong>
\t\t{% endif %}
\t</div>
\t{% endif %}

\t<div class=\"form-group\">
\t\t<div class=\"product-detail-description \">
\t\t\t{{ product.description|raw }}
\t\t</div>
\t</div>

\t<br>

\t{% if product.attachments|length > 0 %}
\t\t<hr>
\t\t<h4>{{ 'pixel.shop::lang.frontend.attachments'|trans }}</h4>
\t\t{% for file in product.attachments %}
\t\t\t<a href=\"{{ file.path }}\" target=\"_blank\"><i class=\"fas fa-download\"></i> {{ file.title ?  file.title : file.file_name }}</a><br />
\t\t{% endfor %}
\t\t<hr>
\t{% endif  %}

\t{% if product.is_with_variants %}
\t\t{% for variant in product.variants %}
\t\t\t<div class=\"form-group row\">
\t\t\t\t<label class=\"col-md-3 text-right\">{{ variant.variant }}</label>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t<select name=\"option[{{ product.slugOption(variant.variant) }}]\" class=\"form-control shop__product-option\" data-label=\"{{ variant.variant }}\" data-slug=\"{{ variant.id }}\">
\t\t\t\t\t\t<option value=\"\" data-quantity=\"\">{{ 'pixel.shop::lang.frontend.select_option'|trans }}</option>

\t\t\t\t\t\t{% for option in variant.items %}
\t\t\t\t\t\t\t{% if product.checkIfOutStock(option.quantity) %}
\t\t\t\t\t\t\t\t<option value=\"{{ option.ref }}\" data-price=\"{{ product.getPriceOption(option.price) }}\" data-tax={{ product.getTaxOption(option.price) }} data-quantity=\"{{ option.quantity }}\" disabled=\"disabled\">
\t\t\t\t\t\t\t\t\t{{ option.val }} ({{ 'pixel.shop::lang.messages.out_of_stock'|trans }})
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<option value=\"{{ option.ref }}\" data-price=\"{{ product.getPriceOption(option.price) }}\" data-tax={{ product.getTaxOption(option.price) }} data-quantity=\"{{ option.quantity }}\">
\t\t\t\t\t\t\t\t\t{{ option.val }}
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}

\t{% if product.quantity > 0 or product.isInfiniteQuantity() %}
\t\t<div class=\"form-group row\">
\t\t\t<label class=\"col-md-3 text-right\">{{ 'pixel.shop::lang.fields.quantity'|trans }}</label>
\t\t\t<div class=\"col-md-3 text-right\">
\t\t\t\t<div class=\"number-input shop__product-qty\">
\t\t\t\t\t<button type=\"button\" onclick=\"this.parentNode.querySelector('input[type=number]').stepDown()\" ></button>
\t\t\t\t\t<input name=\"quantity\" type=\"number\" class=\"form-control text-center\" value=\"1\" min=\"1\">
\t\t\t\t\t<button type=\"button\" onclick=\"this.parentNode.querySelector('input[type=number]').stepUp()\" class=\"plus\"></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\">
\t\t<input type=\"hidden\" name=\"price\" value=\"{{ product.price }}\">
\t\t<input type=\"hidden\" name=\"options\" value=\"\">
\t\t<input type=\"hidden\" name=\"options_index\" value=\"\">
\t\t<button type=\"submit\" class=\"btn btn-primary btn-block btn-footer\" data-attach-loading>
\t\t\t<span class=\"fas fa-shopping-cart\" aria-hidden=\"true\"></span> 
\t\t\t{{ 'pixel.shop::lang.frontend.addtocart'|trans }}
\t\t</button>
\t{% endif %}
</form>

<hr>

<div class=\"share-buttons pull-right\">
\t{% partial '@share-buttons' %}
</div>", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/details.htm", "");
    }
}
