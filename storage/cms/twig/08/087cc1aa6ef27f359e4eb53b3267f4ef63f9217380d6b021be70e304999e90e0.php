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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartcontainer/methods.htm */
class __TwigTemplate_325ed30ddc87f9d75144864c6d2c2812b2fc3bf5fca116182b4fc4fdf47e42bf extends \Twig\Template
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
        $tags = array("for" => 3, "if" => 11);
        $filters = array("escape" => 8, "trans" => 10, "length" => 11, "raw" => 18, "app" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'trans', 'length', 'raw', 'app'],
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
        echo "<div class=\"text-danger\" data-validate-for=\"gateway\"></div>
<ul class=\"list-group\">
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["methods_list"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 4
            echo "\t<li class=\"list-group-item\">
\t\t<div class=\"list-radio\">
\t\t\t<input 
\t\t\t\ttype=\"radio\" 
\t\t\t\tvalue=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["method"], "gateway", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\" 
\t\t\t\tname=\"gateway\"
\t\t\t\tdata-msg-required=\"";
            // line 10
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::validation.gateway.required"]);
            echo "\" 
\t\t\t\t";
            // line 11
            if (((twig_get_attribute($this->env, $this->source, $context["method"], "gateway", [], "any", false, false, true, 11) == twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "gateway", [], "any", false, false, true, 11)) || (twig_length_filter($this->env, ($context["methods_list"] ?? null)) == 1))) {
                // line 12
                echo "\t\t\t\tchecked=\"checked\" 
\t\t\t\t";
            }
            // line 14
            echo "\t\t\t\tid=\"method-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["method"], "gateway", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\" required>
\t\t\t<label for=\"method-";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["method"], "gateway", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["method"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</label>
\t\t</div>
\t\t<div class=\"list-partial\">
\t\t\t";
            // line 18
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["method"], "partial", [], "any", false, false, true, 18), 18, $this->source);
            echo "
\t\t</div>
    </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "    <li class=\"list-group-item\">
        <input type=\"hidden\" name=\"gateway\" class=\"ignore-rule\" data-msg-required=\"";
            // line 23
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::validation.gateway.required"]);
            echo "\"  required>
        <img src=\"";
            // line 24
            echo $this->extensions['System\Twig\Extension']->appFilter("/plugins/pixel/shop/assets/img/icon-no-card.svg");
            echo "\" alt=\"\" width=\"32\" height=\"32\"
            style=\"float: left; margin-right: 8px\">
        <p style=\"line-height: 32px; margin-bottom: 0px\">
            ";
            // line 27
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.no_gateway_support", ["country" => ($context["method_country_code"] ?? null)]]);
            echo "
        </p>
    </li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/methods.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 31,  127 => 27,  121 => 24,  117 => 23,  114 => 22,  105 => 18,  97 => 15,  92 => 14,  88 => 12,  86 => 11,  82 => 10,  77 => 8,  71 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"text-danger\" data-validate-for=\"gateway\"></div>
<ul class=\"list-group\">
\t{% for method in methods_list %}
\t<li class=\"list-group-item\">
\t\t<div class=\"list-radio\">
\t\t\t<input 
\t\t\t\ttype=\"radio\" 
\t\t\t\tvalue=\"{{ method.gateway }}\" 
\t\t\t\tname=\"gateway\"
\t\t\t\tdata-msg-required=\"{{ 'pixel.shop::validation.gateway.required'|trans }}\" 
\t\t\t\t{% if method.gateway == cart.gateway or methods_list|length == 1 %}
\t\t\t\tchecked=\"checked\" 
\t\t\t\t{% endif %}
\t\t\t\tid=\"method-{{ method.gateway }}\" required>
\t\t\t<label for=\"method-{{ method.gateway }}\">{{ method.title }}</label>
\t\t</div>
\t\t<div class=\"list-partial\">
\t\t\t{{ method.partial|raw }}
\t\t</div>
    </li>
    {% else %}
    <li class=\"list-group-item\">
        <input type=\"hidden\" name=\"gateway\" class=\"ignore-rule\" data-msg-required=\"{{ 'pixel.shop::validation.gateway.required'|trans }}\"  required>
        <img src=\"{{ '/plugins/pixel/shop/assets/img/icon-no-card.svg'|app }}\" alt=\"\" width=\"32\" height=\"32\"
            style=\"float: left; margin-right: 8px\">
        <p style=\"line-height: 32px; margin-bottom: 0px\">
            {{ 'pixel.shop::component.cart.no_gateway_support'|trans({country: method_country_code}) }}
        </p>
    </li>
\t{% endfor %}
</ul>
", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/methods.htm", "");
    }
}
