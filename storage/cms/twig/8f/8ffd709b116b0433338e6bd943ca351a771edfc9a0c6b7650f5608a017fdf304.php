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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartcontainer/billing_address.htm */
class __TwigTemplate_4b20329e7dd8495b8e8c52e94100b19bf3796d063f5a6c39358ce0847885ce95 extends \Twig\Template
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
        echo "<legend class=\"shop__billing-elements\">";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.billing_address"]);
        echo "</legend>
<div class=\"row small-gutter shop__billing-elements\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.address"]);
        echo "</label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.billing_address_ex1"]);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "billing_address", [], "any", false, false, true, 6), "first_line", [], "any", false, false, true, 6)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "billing_address", [], "any", false, false, true, 6), "first_line", [], "any", false, false, true, 6)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "billing_address", [], "any", false, false, true, 6), "first_line", [], "any", false, false, true, 6))), "html", null, true);
        echo "\" name=\"billing_address[first_line]\" minlength=\"3\" maxlength=\"190\">
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.first_line\"></div>
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
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.billing_address_ex2"]);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "billing_address", [], "any", false, false, true, 13), "second_line", [], "any", false, false, true, 13)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "billing_address", [], "any", false, false, true, 13), "second_line", [], "any", false, false, true, 13)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "billing_address", [], "any", false, false, true, 13), "second_line", [], "any", false, false, true, 13))), "html", null, true);
        echo "\" name=\"billing_address[second_line]\" minlength=\"3\" maxlength=\"190\">
\t\t</div>
\t</div>
</div>
<div class=\"row small-gutter shop__billing-elements\">
\t<div class=\"col-billing col-md-3\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 20
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.country"]);
        echo "</label>
\t\t\t<select 
\t\t\t\tclass=\"form-control\" 
\t\t\t\tname=\"billing_address[country]\" 
\t\t\t\tdata-request=\"onBillingCountrySelect\"
\t\t\t\tdata-request-success=\"Cart.setBillingCountryOnSelect(data)\">
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
            if ((($context["billing_country"] ?? null) == twig_get_attribute($this->env, $this->source, $context["country"], "code", [], "any", false, false, true, 30))) {
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
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.country\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-4\">
\t\t<div class=\"form-group\">
            <label>";
        // line 42
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.state"]);
        echo "</label>
            <div class=\"billingStateContainer\">
                ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@billing_states"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "            </div>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.state\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-billing col-md-3\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 51
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.city"]);
        echo "</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"billing_address[city]\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "billing_address", [], "any", false, false, true, 52), "city", [], "any", false, false, true, 52)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "billing_address", [], "any", false, false, true, 52), "city", [], "any", false, false, true, 52)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "billing_address", [], "any", false, false, true, 52), "city", [], "any", false, false, true, 52))), "html", null, true);
        echo "\" minlength=\"2\" maxlength=\"90\">
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.city\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-billing-zip col-md-2\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 58
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.zip"]);
        echo "</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"billing_address[zip]\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "billing_address", [], "any", false, false, true, 59), "zip", [], "any", false, false, true, 59)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "billing_address", [], "any", false, false, true, 59), "zip", [], "any", false, false, true, 59)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "billing_address", [], "any", false, false, true, 59), "zip", [], "any", false, false, true, 59))), "html", null, true);
        echo "\" minlength=\"5\" maxlength=\"12\">
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.zip\"></div>
\t\t</div>
    </div>
    <input type=\"hidden\" name=\"billing_zip_required\">
    
</div>

";
        // line 67
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "prepareFields", [0 => "billing"], "method", false, false, true, 67)) {
            // line 68
            echo "    <div class=\"row small-gutter\">
    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "prepareFields", [0 => "billing"], "method", false, false, true, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 70
                echo "    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                $context['__cms_partial_params']['group'] = "billing"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@custom_fields"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 71
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/billing_address.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 72,  216 => 71,  209 => 70,  205 => 69,  202 => 68,  200 => 67,  189 => 59,  185 => 58,  176 => 52,  172 => 51,  164 => 45,  160 => 44,  155 => 42,  147 => 36,  136 => 33,  133 => 32,  129 => 31,  127 => 30,  123 => 29,  120 => 28,  116 => 27,  112 => 26,  103 => 20,  91 => 13,  85 => 12,  74 => 6,  70 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<legend class=\"shop__billing-elements\">{{ 'pixel.shop::component.cart.billing_address'|trans }}</legend>
<div class=\"row small-gutter shop__billing-elements\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.address'|trans }}</label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ 'pixel.shop::lang.fields.billing_address_ex1'|trans }}\" value=\"{{ user.billing_address.first_line ?: cart.billing_address.first_line }}\" name=\"billing_address[first_line]\" minlength=\"3\" maxlength=\"190\">
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.first_line\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.address_alt'|trans }} <span class=\"text-muted\">({{ 'pixel.shop::component.cart.optional'|trans }})</span></label>
\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"{{ 'pixel.shop::lang.fields.billing_address_ex2'|trans }}\" value=\"{{ user.billing_address.second_line ?: cart.billing_address.second_line }}\" name=\"billing_address[second_line]\" minlength=\"3\" maxlength=\"190\">
\t\t</div>
\t</div>
</div>
<div class=\"row small-gutter shop__billing-elements\">
\t<div class=\"col-billing col-md-3\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.country'|trans }}</label>
\t\t\t<select 
\t\t\t\tclass=\"form-control\" 
\t\t\t\tname=\"billing_address[country]\" 
\t\t\t\tdata-request=\"onBillingCountrySelect\"
\t\t\t\tdata-request-success=\"Cart.setBillingCountryOnSelect(data)\">
\t\t\t\t<option value=\"\">{{ 'pixel.shop::component.cart.choose'|trans }}</option>
\t\t\t\t{% for country in countries %}
\t\t\t\t<option 
\t\t\t\t\tvalue=\"{{ country.code }}\" 
\t\t\t\t\t{% if billing_country == country.code %}
\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t{% endif %}>
\t\t\t\t\t{{ country.name }} ({{ country.code }})
\t\t\t\t</option>
\t\t\t\t{% endfor %}
\t\t\t</select>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.country\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-4\">
\t\t<div class=\"form-group\">
            <label>{{ 'pixel.shop::lang.fields.state'|trans }}</label>
            <div class=\"billingStateContainer\">
                {% partial '@billing_states' %}
            </div>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.state\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-billing col-md-3\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.city'|trans }}</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"billing_address[city]\" value=\"{{ user.billing_address.city ?: cart.billing_address.city }}\" minlength=\"2\" maxlength=\"90\">
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.city\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-billing-zip col-md-2\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.zip'|trans }}</label>
\t\t\t<input type=\"text\" class=\"form-control\" name=\"billing_address[zip]\" value=\"{{ user.billing_address.zip ?: cart.billing_address.zip }}\" minlength=\"5\" maxlength=\"12\">
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"billing_address.zip\"></div>
\t\t</div>
    </div>
    <input type=\"hidden\" name=\"billing_zip_required\">
    
</div>

{% if __SELF__.prepareFields('billing') %}
    <div class=\"row small-gutter\">
    {% for field in __SELF__.prepareFields('billing') %}
    {% partial '@custom_fields' field=field group=\"billing\" %}
    {% endfor %}
    </div>
{% endif %}
", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/billing_address.htm", "");
    }
}
