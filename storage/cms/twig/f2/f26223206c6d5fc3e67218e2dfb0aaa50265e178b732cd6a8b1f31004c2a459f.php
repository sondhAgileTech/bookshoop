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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartcontainer/custom_fields.htm */
class __TwigTemplate_3b06d014db6c1b1f42526fac4ce15f5de74a0fa344e3ca5105e24ba692d62174 extends \Twig\Template
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
        $tags = array("if" => 6, "for" => 14);
        $filters = array("trans" => 3, "escape" => 4, "raw" => 8, "split" => 14);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['trans', 'escape', 'raw', 'split'],
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
        echo "<div class=\"col-md-6\">
    <div class=\"form-group\">
        <label>";
        // line 3
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, true, 3), 3, $this->source)]);
        echo "</label>
        <input type=\"hidden\" name=\"custom_fields[";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["group"] ?? null), 4, $this->source), "html", null, true);
        echo "][";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "][label]\" value=\"";
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, true, 4), 4, $this->source)]);
        echo "\">

        ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field", [], "any", false, false, true, 6) == "text")) {
            // line 7
            echo "        <input type=\"";
            ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, true, 7)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "type", [], "any", false, false, true, 7), "html", null, true))) : (print ("text")));
            echo "\" class=\"form-control\" placeholder=\"";
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "placeholder", [], "any", false, false, true, 7), 7, $this->source)]);
            echo "\"
            name=\"custom_fields[";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["group"] ?? null), 8, $this->source), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "][value]\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, true, 8), 8, $this->source);
            echo ">
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field", [], "any", false, false, true, 11) == "select")) {
            // line 12
            echo "        <select name=\"custom_fields[";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["group"] ?? null), 12, $this->source), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "][value]\" class=\"form-control\"";
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, true, 12), 12, $this->source);
            echo ">
            <option value=\"\">";
            // line 13
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.choose"]);
            echo "</option>
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "values", [], "any", false, false, true, 14), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 15
                echo "            <option>";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 15, $this->source), "html", null, true);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </select>
        ";
        }
        // line 19
        echo "
        ";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field", [], "any", false, false, true, 20) == "radio")) {
            // line 21
            echo "        <div class=\"radio-group\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "values", [], "any", false, false, true, 22), ","));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 23
                echo "            <div class=\"radio-group-input\">
                <input type=\"radio\" name=\"custom_fields[";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["group"] ?? null), 24, $this->source), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "][value]\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 24, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 24, $this->source), "html", null, true);
                echo "\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, true, 24), 24, $this->source);
                echo ">
                <label for=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 25, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 25, $this->source), "html", null, true);
                echo "</label>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        </div>
        ";
        }
        // line 30
        echo "
        ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "field", [], "any", false, false, true, 31) == "checkbox")) {
            // line 32
            echo "        <div class=\"radio-group\">
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "values", [], "any", false, false, true, 33), ","));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 34
                echo "            <div class=\"radio-group-input\">
                <input type=\"checkbox\" name=\"custom_fields[";
                // line 35
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["group"] ?? null), 35, $this->source), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "][value][]\" id=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 35, $this->source), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 35, $this->source), "html", null, true);
                echo "\"";
                echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "attributes", [], "any", false, false, true, 35), 35, $this->source);
                echo ">
                <label for=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 36, $this->source), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["option"], 36, $this->source), "html", null, true);
                echo "</label>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
        ";
        }
        // line 41
        echo "
        <div class=\"invalid-feedback\" data-validate-for=\"custom_fields.";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["group"] ?? null), 42, $this->source), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo ".value\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/custom_fields.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 42,  224 => 41,  220 => 39,  207 => 36,  193 => 35,  190 => 34,  186 => 33,  183 => 32,  181 => 31,  178 => 30,  174 => 28,  161 => 25,  147 => 24,  144 => 23,  140 => 22,  137 => 21,  135 => 20,  132 => 19,  128 => 17,  119 => 15,  115 => 14,  111 => 13,  102 => 12,  100 => 11,  97 => 10,  88 => 8,  81 => 7,  79 => 6,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-6\">
    <div class=\"form-group\">
        <label>{{ field.label|trans }}</label>
        <input type=\"hidden\" name=\"custom_fields[{{ group }}][{{ field.name }}][label]\" value=\"{{ field.label|trans }}\">

        {% if field.field == 'text' %}
        <input type=\"{{ field.type ?: 'text' }}\" class=\"form-control\" placeholder=\"{{ field.placeholder|trans }}\"
            name=\"custom_fields[{{ group }}][{{ field.name }}][value]\"{{ field.attributes|raw }}>
        {% endif %}

        {% if field.field == 'select' %}
        <select name=\"custom_fields[{{ group }}][{{ field.name }}][value]\" class=\"form-control\"{{ field.attributes|raw }}>
            <option value=\"\">{{ 'pixel.shop::component.cart.choose'|trans }}</option>
            {% for option in field.values|split(',') %}
            <option>{{ option }}</option>
            {% endfor %}
        </select>
        {% endif %}

        {% if field.field == 'radio' %}
        <div class=\"radio-group\">
            {% for key, option in field.values|split(',') %}
            <div class=\"radio-group-input\">
                <input type=\"radio\" name=\"custom_fields[{{ group }}][{{ field.name }}][value]\" id=\"{{ field.name }}-{{ key }}\" value=\"{{ option }}\"{{ field.attributes|raw }}>
                <label for=\"{{ field.name }}-{{ key }}\">{{ option }}</label>
            </div>
            {% endfor %}
        </div>
        {% endif %}

        {% if field.field == 'checkbox' %}
        <div class=\"radio-group\">
            {% for key, option in field.values|split(',') %}
            <div class=\"radio-group-input\">
                <input type=\"checkbox\" name=\"custom_fields[{{ group }}][{{ field.name }}][value][]\" id=\"{{ field.name }}-{{ key }}\" value=\"{{ option }}\"{{ field.attributes|raw }}>
                <label for=\"{{ field.name }}-{{ key }}\">{{ option }}</label>
            </div>
            {% endfor %}
        </div>
        {% endif %}

        <div class=\"invalid-feedback\" data-validate-for=\"custom_fields.{{ group }}.{{ field.name }}.value\"></div>
    </div>
</div>", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartcontainer/custom_fields.htm", "");
    }
}
