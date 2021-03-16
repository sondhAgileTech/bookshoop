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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartcontainer/customer_information.htm */
class __TwigTemplate_280e93570f0732aae31a9081c1ab3dd8c48118089bc7ea6b914182f77a6bc1dc extends \Twig\Template
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
        $tags = array("if" => 35, "for" => 37, "partial" => 38);
        $filters = array("trans" => 1, "escape" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
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
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.customer_information"]);
        echo "</legend>
<div class=\"row small-gutter\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.first_name"]);
        echo "</label>
\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 6)) ? (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, true, 6)) : (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "customer_first_name", [], "any", false, false, true, 6))), "html", null, true);
        echo "\" name=\"customer_first_name\" minlength=\"3\" maxlength=\"60\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"customer_first_name\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 12
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.last_name"]);
        echo "</label>
\t\t\t<input type=\"text\" class=\"form-control\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, true, 13)) ? (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "surname", [], "any", false, false, true, 13)) : (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "customer_last_name", [], "any", false, false, true, 13))), "html", null, true);
        echo "\" name=\"customer_last_name\" minlength=\"3\" maxlength=\"60\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"customer_last_name\"></div>
\t\t</div>
\t</div>
</div>
<div class=\"row small-gutter\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 21
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.email"]);
        echo "</label>
\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"";
        // line 22
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.components.cart_emailexample"]);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 22)) ? (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, true, 22)) : (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "customer_email", [], "any", false, false, true, 22))), "html", null, true);
        echo "\" name=\"customer_email\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"customer_email\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>";
        // line 28
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.fields.phone"]);
        echo "</label>
\t\t\t<input type=\"telephone\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, true, 29)) ? (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "phone", [], "any", false, false, true, 29)) : (twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "customer_phone", [], "any", false, false, true, 29))), "html", null, true);
        echo "\" name=\"customer_phone\" minlength=\"8\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"customer_phone\"></div>
\t\t</div>
\t</div>
</div>

";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "prepareFields", [0 => "customer"], "method", false, false, true, 35)) {
            // line 36
            echo "<div class=\"row small-gutter\">
    ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "prepareFields", [0 => "customer"], "method", false, false, true, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 38
                echo "    ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['field'] = $context["field"]                ;
                $context['__cms_partial_params']['group'] = "customer"                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@custom_fields"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 39
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "</div>
";
        }
        // line 42
        echo "
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/customer_information.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 42,  148 => 40,  142 => 39,  135 => 38,  131 => 37,  128 => 36,  126 => 35,  117 => 29,  113 => 28,  102 => 22,  98 => 21,  87 => 13,  83 => 12,  74 => 6,  70 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<legend>{{ 'pixel.shop::component.cart.customer_information'|trans }}</legend>
<div class=\"row small-gutter\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.first_name'|trans }}</label>
\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{ user.name ?: cart.customer_first_name }}\" name=\"customer_first_name\" minlength=\"3\" maxlength=\"60\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"customer_first_name\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.last_name'|trans }}</label>
\t\t\t<input type=\"text\" class=\"form-control\" value=\"{{ user.surname ?: cart.customer_last_name }}\" name=\"customer_last_name\" minlength=\"3\" maxlength=\"60\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"customer_last_name\"></div>
\t\t</div>
\t</div>
</div>
<div class=\"row small-gutter\">
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.email'|trans }}</label>
\t\t\t<input type=\"email\" class=\"form-control\" placeholder=\"{{ 'pixel.shop::lang.components.cart_emailexample'|trans }}\" value=\"{{ user.email ?: cart.customer_email }}\" name=\"customer_email\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"customer_email\"></div>
\t\t</div>
\t</div>
\t<div class=\"col-md-6\">
\t\t<div class=\"form-group\">
\t\t\t<label>{{ 'pixel.shop::lang.fields.phone'|trans }}</label>
\t\t\t<input type=\"telephone\" class=\"form-control\" value=\"{{ user.phone ?: cart.customer_phone }}\" name=\"customer_phone\" minlength=\"8\" required>
\t\t\t<div class=\"invalid-feedback\" data-validate-for=\"customer_phone\"></div>
\t\t</div>
\t</div>
</div>

{% if __SELF__.prepareFields('customer') %}
<div class=\"row small-gutter\">
    {% for field in __SELF__.prepareFields('customer') %}
    {% partial '@custom_fields' field=field group=\"customer\" %}
    {% endfor %}
</div>
{% endif %}

", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/customer_information.htm", "");
    }
}
