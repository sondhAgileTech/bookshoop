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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartcontainer/cart.htm */
class __TwigTemplate_2cd9140bb36181d0a2077abf68338cfdb8d11f9ec770bec47a8369d6bac4a934 extends \Twig\Template
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
        $tags = array("for" => 7, "if" => 9);
        $filters = array("trans" => 2, "escape" => 3, "length" => 3, "currency" => 24, "page" => 46);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['trans', 'escape', 'length', 'currency', 'page'],
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
        echo "<h4>
\t<span class=\"text-muted\">";
        // line 2
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.your_cart"]);
        echo "</span>
\t<span class=\"badge badge-secondary badge-pill\">";
        // line 3
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, true, 3), 3, $this->source)), "html", null, true);
        echo "</span>
</h4>

<ul class=\"list-group\">
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, true, 7));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "\t<li class=\"list-group-item\">
        ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, true, 9)) {
                // line 10
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "thumb", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\" width=\"42\" height=\"42\" alt=\"\" class=\"shop__cart-item-thumb\">
        ";
            }
            // line 12
            echo "\t\t<div class=\"shop__cart-item-details\">
\t\t\t<h5 class=\"shop__cart-item-title\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "
\t\t\t\t</a>
\t\t\t</h5>

            ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 19)) {
                // line 20
                echo "\t\t\t<small class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</small>
\t\t\t<br>
            ";
            }
            // line 23
            echo "            
\t\t\t<small>";
            // line 24
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, true, 24), 24, $this->source)]);
            echo " x";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</small>

\t\t\t<a href=\"#\" 
\t\t\t\tclass=\"text-danger shop__cart-delete-item\" 
\t\t\t\tdata-request=\"onDeleteFromCart\" 
\t\t\t\tdata-request-data=\"index: ";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\"
\t\t\t\tdata-request-flash>
\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t</a>
        </div>
        <span class=\"text-muted text-right\">
            ";
            // line 35
            echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, true, 35), 35, $this->source)]);
            echo "
        </span>
\t</li>
\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 39
            echo "\t<li class=\"list-group-item text-center flex-column\">
\t\t<svg viewBox=\"0 0 32 32\" fill=\"#AAA\" width=\"128\" height=\"128\">
\t\t\t<g id=\"surface1\" fill=\"#AAA\">
\t\t\t\t<path style=\" \" d=\"M 5 7 C 4.449219 7 4 7.449219 4 8 C 4 8.550781 4.449219 9 5 9 L 7.21875 9 L 9.84375 19.5 C 10.066406 20.390625 10.863281 21 11.78125 21 L 23.25 21 C 24.152344 21 24.917969 20.402344 25.15625 19.53125 L 27.75 10 L 11 10 L 11.5 12 L 25.15625 12 L 23.25 19 L 11.78125 19 L 9.15625 8.5 C 8.933594 7.609375 8.136719 7 7.21875 7 Z M 22 21 C 20.355469 21 19 22.355469 19 24 C 19 25.644531 20.355469 27 22 27 C 23.644531 27 25 25.644531 25 24 C 25 22.355469 23.644531 21 22 21 Z M 13 21 C 11.355469 21 10 22.355469 10 24 C 10 25.644531 11.355469 27 13 27 C 14.644531 27 16 25.644531 16 24 C 16 22.355469 14.644531 21 13 21 Z M 13 23 C 13.5625 23 14 23.4375 14 24 C 14 24.5625 13.5625 25 13 25 C 12.4375 25 12 24.5625 12 24 C 12 23.4375 12.4375 23 13 23 Z M 22 23 C 22.5625 23 23 23.4375 23 24 C 23 24.5625 22.5625 25 22 25 C 21.4375 25 21 24.5625 21 24 C 21 23.4375 21.4375 23 22 23 Z \" fill=\"#AAA\" />
\t\t\t</g>
\t\t</svg>
\t\t<h4 class=\"shop__cart-item-title\">";
            // line 45
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.cart_empty"]);
            echo "</h4>
\t\t<p><a href=\"";
            // line 46
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["product_page"] ?? null), 46, $this->source));
            echo "\">";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.continue_shopping"]);
            echo "</a></p>
\t</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
\t";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "coupon", [], "any", false, false, true, 50)) {
            // line 51
            echo "\t<li class=\"list-group-item\">
\t\t<div class=\"text-success\">
\t\t\t<h5 class=\"shop__cart-item-title\">";
            // line 53
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.promo_code"]);
            echo "</h5>
\t\t\t<small>";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "coupon", [], "any", false, false, true, 54), "code", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "</small>
\t\t</div>
\t\t<a href=\"#\" 
\t\t\tclass=\"text-danger shop__cart-delete-item\" 
\t\t\tdata-request=\"onClearCoupon\" 
\t\t\tdata-request-flash>
\t\t\t<i class=\"fas fa-trash-alt\"></i>
        </a>
        <span class=\"text-success\">
            -";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "coupon", [], "any", false, false, true, 63), "discount", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "
        </span>
\t</li>
\t";
        }
        // line 67
        echo "
\t<li class=\"list-group-item\">
        <span>";
        // line 69
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.shipping"]);
        echo "</span>
\t\t<strong>";
        // line 70
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipping_total", [], "any", false, false, true, 70), 70, $this->source)]);
        echo "</strong>
\t</li>

\t<li class=\"list-group-item\">
        <span>";
        // line 74
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.tax"]);
        echo "</span>
\t\t<strong>";
        // line 75
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "tax_total", [], "any", false, false, true, 75), 75, $this->source)]);
        echo "</strong>
\t</li>

\t<li class=\"list-group-item\">
        <span>";
        // line 79
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.total"]);
        echo "</span>
\t\t<strong>";
        // line 80
        echo call_user_func_array($this->env->getFilter('currency')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "total", [], "any", false, false, true, 80), 80, $this->source)]);
        echo "</strong>
\t</li>

\t";
        // line 83
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "items", [], "any", false, false, true, 83)) > 0)) {
            // line 84
            echo "\t<a href=\"#\" 
\t\tdata-request=\"onClearCart\" 
\t\tdata-request-flash 
\t\tdata-attach-loading
\t\tclass=\"list-group-item list-group-item-action list-group-item-danger active text-center\">
\t\t";
            // line 89
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.empty_the_cart"]);
            echo "
\t</a>
\t";
        }
        // line 92
        echo "</ul>

";
        // line 94
        if (( !twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "coupon", [], "any", false, false, true, 94) &&  !twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "order", [], "any", false, false, true, 94))) {
            // line 95
            echo "<form class=\"card\" data-request=\"onCheckCoupon\" data-request-validate data-request-flash>
\t<div class=\"input-group\">
\t\t<input name=\"coupon_code\" type=\"text\" class=\"form-control\" placeholder=\"Promo code\">
\t\t<div class=\"input-group-btn\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>";
            // line 99
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.redeem"]);
            echo "</button>
\t\t</div>
\t</div>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/cart.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 99,  277 => 95,  275 => 94,  271 => 92,  265 => 89,  258 => 84,  256 => 83,  250 => 80,  246 => 79,  239 => 75,  235 => 74,  228 => 70,  224 => 69,  220 => 67,  213 => 63,  201 => 54,  197 => 53,  193 => 51,  191 => 50,  188 => 49,  177 => 46,  173 => 45,  165 => 39,  148 => 35,  139 => 29,  129 => 24,  126 => 23,  119 => 20,  117 => 19,  110 => 15,  105 => 12,  99 => 10,  97 => 9,  94 => 8,  76 => 7,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h4>
\t<span class=\"text-muted\">{{ 'pixel.shop::component.cart.your_cart'|trans }}</span>
\t<span class=\"badge badge-secondary badge-pill\">{{ cart.items|length }}</span>
</h4>

<ul class=\"list-group\">
\t{% for item in cart.items %}
\t<li class=\"list-group-item\">
        {% if item.thumb %}
        <img src=\"{{ item.thumb }}\" width=\"42\" height=\"42\" alt=\"\" class=\"shop__cart-item-thumb\">
        {% endif %}
\t\t<div class=\"shop__cart-item-details\">
\t\t\t<h5 class=\"shop__cart-item-title\">
\t\t\t\t<a href=\"#\">
\t\t\t\t\t{{ item.title }}
\t\t\t\t</a>
\t\t\t</h5>

            {% if item.description %}
\t\t\t<small class=\"text-muted\">{{ item.description }}</small>
\t\t\t<br>
            {% endif %}
            
\t\t\t<small>{{ item.price|currency }} x{{ item.quantity }}</small>

\t\t\t<a href=\"#\" 
\t\t\t\tclass=\"text-danger shop__cart-delete-item\" 
\t\t\t\tdata-request=\"onDeleteFromCart\" 
\t\t\t\tdata-request-data=\"index: {{ loop.index0 }}\"
\t\t\t\tdata-request-flash>
\t\t\t\t<i class=\"fas fa-trash-alt\"></i>
\t\t\t</a>
        </div>
        <span class=\"text-muted text-right\">
            {{ item.total|currency }}
        </span>
\t</li>
\t{% else %}
\t<li class=\"list-group-item text-center flex-column\">
\t\t<svg viewBox=\"0 0 32 32\" fill=\"#AAA\" width=\"128\" height=\"128\">
\t\t\t<g id=\"surface1\" fill=\"#AAA\">
\t\t\t\t<path style=\" \" d=\"M 5 7 C 4.449219 7 4 7.449219 4 8 C 4 8.550781 4.449219 9 5 9 L 7.21875 9 L 9.84375 19.5 C 10.066406 20.390625 10.863281 21 11.78125 21 L 23.25 21 C 24.152344 21 24.917969 20.402344 25.15625 19.53125 L 27.75 10 L 11 10 L 11.5 12 L 25.15625 12 L 23.25 19 L 11.78125 19 L 9.15625 8.5 C 8.933594 7.609375 8.136719 7 7.21875 7 Z M 22 21 C 20.355469 21 19 22.355469 19 24 C 19 25.644531 20.355469 27 22 27 C 23.644531 27 25 25.644531 25 24 C 25 22.355469 23.644531 21 22 21 Z M 13 21 C 11.355469 21 10 22.355469 10 24 C 10 25.644531 11.355469 27 13 27 C 14.644531 27 16 25.644531 16 24 C 16 22.355469 14.644531 21 13 21 Z M 13 23 C 13.5625 23 14 23.4375 14 24 C 14 24.5625 13.5625 25 13 25 C 12.4375 25 12 24.5625 12 24 C 12 23.4375 12.4375 23 13 23 Z M 22 23 C 22.5625 23 23 23.4375 23 24 C 23 24.5625 22.5625 25 22 25 C 21.4375 25 21 24.5625 21 24 C 21 23.4375 21.4375 23 22 23 Z \" fill=\"#AAA\" />
\t\t\t</g>
\t\t</svg>
\t\t<h4 class=\"shop__cart-item-title\">{{ 'pixel.shop::component.cart.cart_empty'|trans }}</h4>
\t\t<p><a href=\"{{ product_page|page }}\">{{ 'pixel.shop::component.cart.continue_shopping'|trans }}</a></p>
\t</li>
\t{% endfor %}

\t{% if cart.coupon %}
\t<li class=\"list-group-item\">
\t\t<div class=\"text-success\">
\t\t\t<h5 class=\"shop__cart-item-title\">{{ 'pixel.shop::component.cart.promo_code'|trans }}</h5>
\t\t\t<small>{{ cart.coupon.code }}</small>
\t\t</div>
\t\t<a href=\"#\" 
\t\t\tclass=\"text-danger shop__cart-delete-item\" 
\t\t\tdata-request=\"onClearCoupon\" 
\t\t\tdata-request-flash>
\t\t\t<i class=\"fas fa-trash-alt\"></i>
        </a>
        <span class=\"text-success\">
            -{{ cart.coupon.discount }}
        </span>
\t</li>
\t{% endif %}

\t<li class=\"list-group-item\">
        <span>{{ 'pixel.shop::lang.fields.shipping'|trans }}</span>
\t\t<strong>{{ cart.shipping_total|currency }}</strong>
\t</li>

\t<li class=\"list-group-item\">
        <span>{{ 'pixel.shop::lang.fields.tax'|trans }}</span>
\t\t<strong>{{ cart.tax_total|currency }}</strong>
\t</li>

\t<li class=\"list-group-item\">
        <span>{{ 'pixel.shop::lang.fields.total'|trans }}</span>
\t\t<strong>{{ cart.total|currency }}</strong>
\t</li>

\t{% if cart.items|length > 0 %}
\t<a href=\"#\" 
\t\tdata-request=\"onClearCart\" 
\t\tdata-request-flash 
\t\tdata-attach-loading
\t\tclass=\"list-group-item list-group-item-action list-group-item-danger active text-center\">
\t\t{{ 'pixel.shop::component.cart.empty_the_cart'|trans }}
\t</a>
\t{% endif %}
</ul>

{% if not cart.coupon and not cart.order %}
<form class=\"card\" data-request=\"onCheckCoupon\" data-request-validate data-request-flash>
\t<div class=\"input-group\">
\t\t<input name=\"coupon_code\" type=\"text\" class=\"form-control\" placeholder=\"Promo code\">
\t\t<div class=\"input-group-btn\">
\t\t\t<button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>{{ 'pixel.shop::component.cart.redeem'|trans }}</button>
\t\t</div>
\t</div>
</form>
{% endif %}", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/cart.htm", "");
    }
}
