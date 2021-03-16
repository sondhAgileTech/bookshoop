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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartcontainer/shipping_states.htm */
class __TwigTemplate_64a790834934154b5a214f683cbc53c2f01cbf4c3efb4ee06f1691db89963e34 extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 4);
        $filters = array("length" => 1, "trans" => 3, "escape" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 'trans', 'escape'],
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
        if ((twig_length_filter($this->env, ($context["shipping_states"] ?? null)) > 0)) {
            // line 2
            echo "    <select required class=\"form-control\" name=\"shipping_address[state]\" data-request=\"onShippingStateSelect\" required>
        <option value=\"\">";
            // line 3
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.choose"]);
            echo "</option>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_states"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["state"]) {
                // line 5
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["state"], "code", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
                echo "\"
            ";
                // line 6
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 6), "state", [], "any", false, false, true, 6) == twig_get_attribute($this->env, $this->source, $context["state"], "code", [], "any", false, false, true, 6)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipping_address", [], "any", false, false, true, 6), "state", [], "any", false, false, true, 6) == twig_get_attribute($this->env, $this->source, $context["state"], "code", [], "any", false, false, true, 6)))) {
                    // line 7
                    echo "            selected=\"selected\" ";
                }
                echo ">
            ";
                // line 8
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["state"], "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "
        </option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['state'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </select>
";
        } else {
            // line 13
            echo "    <input type=\"text\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 13), "state", [], "any", false, false, true, 13)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "shipping_address", [], "any", false, false, true, 13), "state", [], "any", false, false, true, 13)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "shipping_address", [], "any", false, false, true, 13), "state", [], "any", false, false, true, 13))), "html", null, true);
            echo "\" name=\"shipping_address[state]\" minlength=\"2\" maxlength=\"90\" required>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/shipping_states.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 13,  96 => 11,  87 => 8,  82 => 7,  80 => 6,  75 => 5,  71 => 4,  67 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if shipping_states|length > 0 %}
    <select required class=\"form-control\" name=\"shipping_address[state]\" data-request=\"onShippingStateSelect\" required>
        <option value=\"\">{{ 'pixel.shop::component.cart.choose'|trans }}</option>
        {% for state in shipping_states %}
        <option value=\"{{ state.code }}\"
            {% if user.shipping_address.state == state.code or cart.shipping_address.state == state.code %}
            selected=\"selected\" {% endif %}>
            {{ state.name }}
        </option>
        {% endfor %}
    </select>
{% else %}
    <input type=\"text\" class=\"form-control\" value=\"{{ user.shipping_address.state ?: cart.shipping_address.state }}\" name=\"shipping_address[state]\" minlength=\"2\" maxlength=\"90\" required>
{% endif %}", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/shipping_states.htm", "");
    }
}
