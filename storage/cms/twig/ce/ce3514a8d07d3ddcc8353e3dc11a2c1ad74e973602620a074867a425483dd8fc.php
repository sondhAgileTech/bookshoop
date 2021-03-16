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

/* D:\xampp\htdocs\bookshop/plugins/benfreke/menumanager/components/menu/default.htm */
class __TwigTemplate_ded0ad721198d65a105da5494b0b31167cbabd36c945cde83f86aafc02467131 extends \Twig\Template
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
        $tags = array("if" => 2, "for" => 4);
        $filters = array("escape" => 3);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape'],
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
        echo "
";
        // line 2
        if ((($context["parentNode"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["parentNode"] ?? null), "getChildCount", [], "any", false, false, true, 2))) {
            // line 3
            echo "<ul class=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["primaryClasses"] ?? null), 3, $this->source), "html", null, true);
            echo "\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["parentNode"] ?? null), "getChildren", [], "any", false, false, true, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["primaryNav"]) {
                // line 5
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["primaryNav"], "enabled", [], "any", false, false, true, 5)) {
                    // line 6
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getChildCount", [], "any", false, false, true, 6) && (($context["numberOfLevels"] ?? null) > 1))) {
                        // line 7
                        echo "                <li class=\"dropdown ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["listItemClasses"] ?? null), 7, $this->source), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getListItemClasses", [0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
                        echo "\">
                    <a href=\"";
                        // line 8
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getLinkHref", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getLinkTarget", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
                        // line 9
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                        echo " <span class=\"caret\"></span>
                    </a>
            ";
                    } else {
                        // line 12
                        echo "                <li class=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["listItemClasses"] ?? null), 12, $this->source), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getListItemClasses", [0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)], "method", false, false, true, 12), 12, $this->source), "html", null, true);
                        echo "\">
                    <a href=\"";
                        // line 13
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getLinkHref", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getLinkTarget", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                        echo "\">
                        ";
                        // line 14
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                        echo "
                    </a>
            ";
                    }
                    // line 17
                    echo "            ";
                    if ((twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getChildCount", [], "any", false, false, true, 17) && (($context["numberOfLevels"] ?? null) > 1))) {
                        // line 18
                        echo "                <ul class=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondaryClasses"] ?? null), 18, $this->source), "html", null, true);
                        echo "\">
                    ";
                        // line 19
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["primaryNav"], "getChildren", [], "any", false, false, true, 19));
                        foreach ($context['_seq'] as $context["_key"] => $context["secondaryNav"]) {
                            // line 20
                            echo "                        ";
                            if (twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "enabled", [], "any", false, false, true, 20)) {
                                // line 21
                                echo "                            <li class=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["listItemClasses"] ?? null), 21, $this->source), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getListItemClasses", [0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
                                echo "\">
                                <a href=\"";
                                // line 22
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getLinkHref", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                                echo "\" target=\"";
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getLinkTarget", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                                echo "\">
                                    ";
                                // line 23
                                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "title", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                                echo "
                                </a>
                                ";
                                // line 25
                                if ((twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getChildCount", [], "any", false, false, true, 25) && (($context["numberOfLevels"] ?? null) > 2))) {
                                    // line 26
                                    echo "                                    <ul class=\"";
                                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["tertiaryClasses"] ?? null), 26, $this->source), "html", null, true);
                                    echo "\">
                                        ";
                                    // line 27
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["secondaryNav"], "getChildren", [], "any", false, false, true, 27));
                                    foreach ($context['_seq'] as $context["_key"] => $context["tertiaryNav"]) {
                                        // line 28
                                        echo "                                            ";
                                        if (twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "enabled", [], "any", false, false, true, 28)) {
                                            // line 29
                                            echo "                                                <li class=\"";
                                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["listItemClasses"] ?? null), 29, $this->source), "html", null, true);
                                            echo " ";
                                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "getListItemClasses", [0 => ($context["activeLeft"] ?? null), 1 => ($context["activeRight"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
                                            echo "\">
                                                    <a href=\"";
                                            // line 30
                                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "getLinkHref", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                                            echo "\" target=\"";
                                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "getLinkTarget", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                                            echo "\">
                                                        ";
                                            // line 31
                                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tertiaryNav"], "title", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                                            echo "
                                                    </a>
                                                </li>
                                            ";
                                        }
                                        // line 35
                                        echo "                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tertiaryNav'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 36
                                    echo "                                    </ul>
                                ";
                                }
                                // line 38
                                echo "                            </li>
                        ";
                            }
                            // line 40
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secondaryNav'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        echo "                </ul>
            ";
                    }
                    // line 43
                    echo "                </li>
        ";
                }
                // line 45
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['primaryNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "</ul>

";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/benfreke/menumanager/components/menu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 46,  215 => 45,  211 => 43,  207 => 41,  201 => 40,  197 => 38,  193 => 36,  187 => 35,  180 => 31,  174 => 30,  167 => 29,  164 => 28,  160 => 27,  155 => 26,  153 => 25,  148 => 23,  142 => 22,  135 => 21,  132 => 20,  128 => 19,  123 => 18,  120 => 17,  114 => 14,  108 => 13,  101 => 12,  95 => 9,  89 => 8,  82 => 7,  79 => 6,  76 => 5,  72 => 4,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if parentNode and parentNode.getChildCount %}
<ul class=\"{{ primaryClasses }}\">
    {% for primaryNav in parentNode.getChildren %}
        {% if primaryNav.enabled %}
            {% if primaryNav.getChildCount and numberOfLevels > 1 %}
                <li class=\"dropdown {{ listItemClasses }} {{ primaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                    <a href=\"{{ primaryNav.getLinkHref }}\" target=\"{{ primaryNav.getLinkTarget }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        {{ primaryNav.title }} <span class=\"caret\"></span>
                    </a>
            {% else %}
                <li class=\"{{ listItemClasses }} {{ primaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                    <a href=\"{{ primaryNav.getLinkHref }}\" target=\"{{ primaryNav.getLinkTarget }}\">
                        {{ primaryNav.title }}
                    </a>
            {% endif %}
            {% if primaryNav.getChildCount and numberOfLevels > 1 %}
                <ul class=\"{{ secondaryClasses }}\">
                    {% for secondaryNav in primaryNav.getChildren %}
                        {% if secondaryNav.enabled %}
                            <li class=\"{{ listItemClasses }} {{ secondaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                                <a href=\"{{ secondaryNav.getLinkHref }}\" target=\"{{ secondaryNav.getLinkTarget }}\">
                                    {{ secondaryNav.title }}
                                </a>
                                {% if secondaryNav.getChildCount and numberOfLevels > 2 %}
                                    <ul class=\"{{ tertiaryClasses }}\">
                                        {% for tertiaryNav in secondaryNav.getChildren %}
                                            {% if tertiaryNav.enabled %}
                                                <li class=\"{{ listItemClasses }} {{ tertiaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                                                    <a href=\"{{ tertiaryNav.getLinkHref }}\" target=\"{{ tertiaryNav.getLinkTarget }}\">
                                                        {{ tertiaryNav.title }}
                                                    </a>
                                                </li>
                                            {% endif %}
                                        {% endfor %}
                                    </ul>
                                {% endif %}
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
                </li>
        {% endif %}
    {% endfor %}
</ul>

{% endif %}
", "D:\\xampp\\htdocs\\bookshop/plugins/benfreke/menumanager/components/menu/default.htm", "");
    }
}
