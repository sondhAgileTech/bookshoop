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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartcontainer/shipping_address.htm */
class __TwigTemplate_0150857418772b77d7281a6996a78741e9e60eeeb38c99664b5fd1cbe32cac46 extends \Twig\Template
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
        $tags = array("for" => 27, "if" => 30, "partial" => 44);
        $filters = array("trans" => 1, "escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if', 'partial'],
                ['trans', 'escape'],
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
        echo "<legend>";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.shipping_address"]);
        echo "</legend>
<div class=\"row small-gutter\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.address"]);
        echo "</label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.shipping_address_ex1"]);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 6), "first_line", [], "any", false, false, true, 6)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 6), "first_line", [], "any", false, false, true, 6)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipping_address", [], "any", false, false, true, 6), "first_line", [], "any", false, false, true, 6))), "html", null, true);
        echo "\" name=\"shipping_address[first_line]\" minlength=\"3\" maxlength=\"190\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.first_line\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 12
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.address_alt"]);
        echo " <span class=\"text-muted\">(";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.optional"]);
        echo ")</span></label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 13
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.shipping_address_ex2"]);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 13), "second_line", [], "any", false, false, true, 13)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 13), "second_line", [], "any", false, false, true, 13)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipping_address", [], "any", false, false, true, 13), "second_line", [], "any", false, false, true, 13))), "html", null, true);
        echo "\" name=\"shipping_address[second_line]\" minlength=\"3\" maxlength=\"190\">
\t\t</div>
\t</div>
</div>
<div class=\"row small-gutter\">
\t<div class=\"col-shipping col-md-3\">
\t\t<div class=\"form-group\">
            <label>";
        // line 20
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.country"]);
        echo "</label> ";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "is_ship_same_bill", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
\t\t\t<select required
\t\t\t\tclass=\"form-control\" 
\t\t\t\tname=\"shipping_address[country]\" 
\t\t\t\tdata-request=\"onShippingCountrySelect\" 
\t\t\t\tdata-request-success=\"Cart.setShippingCountryOnSelect(data)\">
\t\t\t\t<option value=\"\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.choose"]);
        echo "</option>
\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 28
            echo "\t\t\t\t<option 
\t\t\t\t\tvalue=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["country"], "code", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\" 
\t\t\t\t\t";
            // line 30
            if ((($context["shipping_country"] ?? null) == twig_get_attribute($this->env, $this->source, $context["country"], "code", [], "any", false, false, true, 30))) {
                // line 31
                echo "\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t";
            }
            // line 32
            echo ">
\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["country"], "code", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo ")
\t\t\t\t</option>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</select>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.country\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-4\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 42
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.state"]);
        echo "</label>
\t\t\t<div class=\"shippingStateContainer\">
\t\t\t\t";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@shipping_states"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "            </div>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.state\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-shipping col-md-3\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 51
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.city"]);
        echo "</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"shipping_address[city]\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 52), "city", [], "any", false, false, true, 52)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 52), "city", [], "any", false, false, true, 52)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipping_address", [], "any", false, false, true, 52), "city", [], "any", false, false, true, 52))), "html", null, true);
        echo "\" minlength=\"2\" maxlength=\"90\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.city\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-shipping-zip col-md-2\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 58
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.zip"]);
        echo "</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"shipping_address[zip]\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 59), "zip", [], "any", false, false, true, 59)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 59), "zip", [], "any", false, false, true, 59)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipping_address", [], "any", false, false, true, 59), "zip", [], "any", false, false, true, 59))), "html", null, true);
        echo "\" minlength=\"5\" maxlength=\"12\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.zip\"></div>
\t\t</div>
\t</div>
    <input type=\"hidden\" name=\"shipping_zip_required\">
</div>
<div class=\"row small-gutter\">
\t<div class=\"col-md-12\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 68
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.note"]);
        echo "</label>
\t\t\t<textarea name=\"notes\" class=\"form-control\" maxlength=\"200\" rows=\"2\">";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "notes", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
        echo "</textarea>
\t\t</div>
\t</div>
</div>

";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "prepareFields", [0 => "shipping"], "method", false, false, true, 74)) {
            // line 75
            echo "    <div class=\"row small-gutter\">
    ";
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "prepareFields", [0 => "shipping"], "method", false, false, true, 76));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 77
                echo "    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                $context['__cms_partial_params']['group'] = "shipping"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@custom_fields"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 78
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/shipping_address.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 79,  231 => 78,  224 => 77,  220 => 76,  217 => 75,  215 => 74,  207 => 69,  203 => 68,  191 => 59,  187 => 58,  178 => 52,  174 => 51,  166 => 45,  162 => 44,  157 => 42,  149 => 36,  138 => 33,  135 => 32,  131 => 31,  129 => 30,  125 => 29,  122 => 28,  118 => 27,  114 => 26,  103 => 20,  91 => 13,  85 => 12,  74 => 6,  70 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<legend>{{ 'pixel.shop::component.cart.shipping_address'|trans }}</legend>
<div class=\"row small-gutter\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.address'|trans }}</label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ 'pixel.shop::lang.fields.shipping_address_ex1'|trans }}\" value=\"{{ user.shipping_address.first_line ?: cart.shipping_address.first_line }}\" name=\"shipping_address[first_line]\" minlength=\"3\" maxlength=\"190\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.first_line\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.address_alt'|trans }} <span class=\"text-muted\">({{ 'pixel.shop::component.cart.optional'|trans }})</span></label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ 'pixel.shop::lang.fields.shipping_address_ex2'|trans }}\" value=\"{{ user.shipping_address.second_line ?: cart.shipping_address.second_line }}\" name=\"shipping_address[second_line]\" minlength=\"3\" maxlength=\"190\">
\t\t</div>
\t</div>
</div>
<div class=\"row small-gutter\">
\t<div class=\"col-shipping col-md-3\">
\t\t<div class=\"form-group\">
            <label>{{ 'pixel.shop::lang.fields.country'|trans }}</label> {{ cart.is_ship_same_bill }}
\t\t\t<select required
\t\t\t\tclass=\"form-control\" 
\t\t\t\tname=\"shipping_address[country]\" 
\t\t\t\tdata-request=\"onShippingCountrySelect\" 
\t\t\t\tdata-request-success=\"Cart.setShippingCountryOnSelect(data)\">
\t\t\t\t<option value=\"\">{{ 'pixel.shop::component.cart.choose'|trans }}</option>
\t\t\t\t{% for country in countries %}
\t\t\t\t<option 
\t\t\t\t\tvalue=\"{{ country.code }}\" 
\t\t\t\t\t{% if shipping_country == country.code %}
\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t{% endif %}>
\t\t\t\t\t{{ country.name }} ({{ country.code }})
\t\t\t\t</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.country\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-4\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.state'|trans }}</label>
\t\t\t<div class=\"shippingStateContainer\">
\t\t\t\t{% partial '@shipping_states' %}
            </div>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.state\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-shipping col-md-3\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.city'|trans }}</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"shipping_address[city]\" value=\"{{ user.shipping_address.city ?: cart.shipping_address.city }}\" minlength=\"2\" maxlength=\"90\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.city\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-shipping-zip col-md-2\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.zip'|trans }}</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"shipping_address[zip]\" value=\"{{ user.shipping_address.zip ?: cart.shipping_address.zip }}\" minlength=\"5\" maxlength=\"12\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"shipping_address.zip\"></div>
\t\t</div>
\t</div>
    <input type=\"hidden\" name=\"shipping_zip_required\">
</div>
<div class=\"row small-gutter\">
\t<div class=\"col-md-12\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.note'|trans }}</label>
\t\t\t<textarea name=\"notes\" class=\"form-control\" maxlength=\"200\" rows=\"2\">{{ cart.notes }}</textarea>
\t\t</div>
\t</div>
</div>

{% if __SELF__.prepareFields('shipping') %}
    <div class=\"row small-gutter\">
    {% for field in __SELF__.prepareFields('shipping') %}
    {% partial '@custom_fields' field=field group=\"shipping\" %}
    {% endfor %}
    </div>
{% endif %}
", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/shipping_address.htm", "");
    }
}
