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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartcontainer/default.htm */
class __TwigTemplate_6278fee05c22c8d2cfbb970198e23d36eb9016d7ef3a871c67a10a3b463732a8 extends \Twig\Template
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
        $tags = array("if" => 3, "partial" => 4, "put" => 68);
        $filters = array("trans" => 14, "page" => 54);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial', 'put'],
                ['trans', 'page'],
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
        echo "<div class=\"shop__cart-checkout\">
\t<div class=\"row\" id=\"checkout-container\">
\t\t";
        // line 3
        if (($context["order"] ?? null)) {
            // line 4
            echo "\t\t\t";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@order_summary"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "\t\t";
        } else {
            // line 6
            echo "
\t\t<div class=\"col-md-4\" id=\"shop__cart-partial\">
\t\t\t";
            // line 8
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@cart"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 9
            echo "\t\t</div>

\t\t<div class=\"col-md-8\" id=\"shop__cart-steps\">
\t\t\t<form novalidate=\"\" data-request=\"onSendCheckout\" data-request-flash data-request-validate data-request-complete=\"Cart.focusToInvalidFields(data)\">
                <div class=\"shop__steps\">
                    <h3>";
            // line 14
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.customer_information"]);
            echo "</h3>
                    <div class=\"step-content\">
                        ";
            // line 16
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@customer_information"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 17
            echo "                    </div>

                    <h3>";
            // line 19
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.shipping_method"]);
            echo "</h3>
                    <div class=\"step-content\">
                        ";
            // line 21
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@shipping_address"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "                    </div>
                    <h3>";
            // line 23
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.complete_order"]);
            echo "</h3>
                    <div class=\"step-content\">
                        ";
            // line 25
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@billing_address"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "
                        <div class=\"checkbox\">
                            <label for=\"same-address\">
                                <input type=\"checkbox\" name=\"is_ship_same_bill\" id=\"same-address\" ";
            // line 29
            if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_ship_same_bill", [], "any", false, false, true, 29)) {
                echo "checked=\"checked\"";
            }
            echo " data-request=\"onSameAddressChange\" onchange=\"Cart.checkSameAddress(\$(this))\">
                                <b>";
            // line 30
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.is_ship_same_bill"]);
            echo "</b>
                            </label>
                        </div>

                        ";
            // line 34
            if (($context["user"] ?? null)) {
                // line 35
                echo "                        <div class=\"checkbox\">
                            <label class=\"custom-control-label\" for=\"save-info\">
                                <input type=\"checkbox\" name=\"is_save_for_later\" id=\"save-info\"><b>";
                // line 37
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.is_save_for_later"]);
                echo "</b>
                            </label>
                        </div>
                        ";
            }
            // line 41
            echo "
                        <legend>";
            // line 42
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.payment_method"]);
            echo "</legend>

                        <div class=\"shop__methods-list\">
                            ";
            // line 45
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@methods"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 46
            echo "                        </div>
                    </div>
                </div>
                

                <div class=\"row\" id=\"form-bag\">
                    <div class=\"col-md-12 text-right\">
                        <hr>
                        <a href=\"";
            // line 54
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["product_page"] ?? null), 54, $this->source));
            echo "\" class=\"btn btn-link btn-back-shopping\"><i class=\"fas fa-shopping-cart\"></i> ";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.continue_shopping"]);
            echo "</a>
                        <a href=\"javascript:;\" class=\"btn btn-link btn-prev\" style=\"display: none\">";
            // line 55
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.components.cart_prev"]);
            echo "</a>
                        <a href=\"javascript:;\" class=\"btn btn-primary btn-next\">";
            // line 56
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.components.cart_next"]);
            echo "</a>
                        <button class=\"btn btn-success btn-finish\" type=\"submit\" data-attach-loading style=\"display: none\">
                            <i class=\"fas fa-credit-card\"></i> ";
            // line 58
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.place_order"]);
            echo "
                        </button>
                    </div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t
\t\t";
        }
        // line 66
        echo "\t</div>
</div>\t
";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 69
        echo "<script>
    jQuery.extend(jQuery.validator.messages, {
        required: \"";
        // line 71
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::validation.jquery.required"]);
        echo "\",
        email: \"";
        // line 72
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::validation.jquery.email"]);
        echo "\",
        maxlength: jQuery.validator.format(\"";
        // line 73
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::validation.jquery.maxlength"]);
        echo "\"),
        minlength: jQuery.validator.format(\"";
        // line 74
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::validation.jquery.minlength"]);
        echo "\"),
    });
</script>
";
        // line 68
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 68,  227 => 74,  223 => 73,  219 => 72,  215 => 71,  211 => 69,  209 => 68,  205 => 66,  194 => 58,  189 => 56,  185 => 55,  179 => 54,  169 => 46,  165 => 45,  159 => 42,  156 => 41,  149 => 37,  145 => 35,  143 => 34,  136 => 30,  130 => 29,  125 => 26,  121 => 25,  116 => 23,  113 => 22,  109 => 21,  104 => 19,  100 => 17,  96 => 16,  91 => 14,  84 => 9,  80 => 8,  76 => 6,  73 => 5,  68 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"shop__cart-checkout\">
\t<div class=\"row\" id=\"checkout-container\">
\t\t{% if order %}
\t\t\t{% partial '@order_summary' %}
\t\t{% else %}

\t\t<div class=\"col-md-4\" id=\"shop__cart-partial\">
\t\t\t{% partial '@cart' %}
\t\t</div>

\t\t<div class=\"col-md-8\" id=\"shop__cart-steps\">
\t\t\t<form novalidate=\"\" data-request=\"onSendCheckout\" data-request-flash data-request-validate data-request-complete=\"Cart.focusToInvalidFields(data)\">
                <div class=\"shop__steps\">
                    <h3>{{ 'pixel.shop::component.cart.customer_information'|trans }}</h3>
                    <div class=\"step-content\">
                        {% partial '@customer_information' %}
                    </div>

                    <h3>{{ 'pixel.shop::component.cart.shipping_method'|trans }}</h3>
                    <div class=\"step-content\">
                        {% partial '@shipping_address' %}
                    </div>
                    <h3>{{ 'pixel.shop::component.cart.complete_order'|trans }}</h3>
                    <div class=\"step-content\">
                        {% partial '@billing_address' %}

                        <div class=\"checkbox\">
                            <label for=\"same-address\">
                                <input type=\"checkbox\" name=\"is_ship_same_bill\" id=\"same-address\" {% if user.is_ship_same_bill %}checked=\"checked\"{% endif %} data-request=\"onSameAddressChange\" onchange=\"Cart.checkSameAddress(\$(this))\">
                                <b>{{ 'pixel.shop::component.cart.is_ship_same_bill'|trans }}</b>
                            </label>
                        </div>

                        {% if user %}
                        <div class=\"checkbox\">
                            <label class=\"custom-control-label\" for=\"save-info\">
                                <input type=\"checkbox\" name=\"is_save_for_later\" id=\"save-info\"><b>{{ 'pixel.shop::component.cart.is_save_for_later'|trans }}</b>
                            </label>
                        </div>
                        {% endif %}

                        <legend>{{ 'pixel.shop::component.cart.payment_method'|trans }}</legend>

                        <div class=\"shop__methods-list\">
                            {% partial '@methods' %}
                        </div>
                    </div>
                </div>
                

                <div class=\"row\" id=\"form-bag\">
                    <div class=\"col-md-12 text-right\">
                        <hr>
                        <a href=\"{{ product_page|page }}\" class=\"btn btn-link btn-back-shopping\"><i class=\"fas fa-shopping-cart\"></i> {{ 'pixel.shop::component.cart.continue_shopping'|trans }}</a>
                        <a href=\"javascript:;\" class=\"btn btn-link btn-prev\" style=\"display: none\">{{ 'pixel.shop::lang.components.cart_prev'|trans }}</a>
                        <a href=\"javascript:;\" class=\"btn btn-primary btn-next\">{{ 'pixel.shop::lang.components.cart_next'|trans }}</a>
                        <button class=\"btn btn-success btn-finish\" type=\"submit\" data-attach-loading style=\"display: none\">
                            <i class=\"fas fa-credit-card\"></i> {{ 'pixel.shop::component.cart.place_order'|trans }}
                        </button>
                    </div>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t\t
\t\t{% endif %}
\t</div>
</div>\t
{% put scripts %}
<script>
    jQuery.extend(jQuery.validator.messages, {
        required: \"{{ 'pixel.shop::validation.jquery.required'|trans }}\",
        email: \"{{ 'pixel.shop::validation.jquery.email'|trans }}\",
        maxlength: jQuery.validator.format(\"{{ 'pixel.shop::validation.jquery.maxlength'|trans }}\"),
        minlength: jQuery.validator.format(\"{{ 'pixel.shop::validation.jquery.minlength'|trans }}\"),
    });
</script>
{% endput %}
", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/default.htm", "");
    }
}
