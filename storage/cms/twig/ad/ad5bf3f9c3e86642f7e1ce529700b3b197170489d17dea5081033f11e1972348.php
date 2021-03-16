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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productlist/default.htm */
class __TwigTemplate_a49c04c983700673d9156c7f1749b8a8cd260f983ee5201a227dbc38397b9ff3 extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 12, "partial" => 59);
        $filters = array("trans" => 9, "escape" => 14, "length" => 16, "raw" => 78);
        $functions = array("input" => 42);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'partial'],
                ['trans', 'escape', 'length', 'raw'],
                ['input']
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
        if (($context["categoryList"] ?? null)) {
            // line 2
            echo "<section class=\"products-navigation\">
\t<div class=\"container\">
\t\t";
            // line 4
            if (($context["showCategoriesFilter"] ?? null)) {
                // line 5
                echo "\t\t
\t\t";
                // line 6
                if ((($context["typeCategoriesFilter"] ?? null) == "dropdown")) {
                    // line 7
                    echo "\t\t<div class=\"dropdown\">
\t\t\t<button id=\"btnGroupCategories\" type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<i class=\"fas fa-filter\"></i> ";
                    // line 9
                    echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.filter_by_category"]);
                    echo "
\t\t\t</button>
\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupCategories\">
\t\t\t\t";
                    // line 12
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categoryList"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        if ((twig_get_attribute($this->env, $this->source, $context["category"], "nest_depth", [], "any", false, false, true, 12) == 0)) {
                            // line 13
                            echo "\t\t\t\t\t<li class=\"";
                            if ((twig_get_attribute($this->env, $this->source, ($context["activeCategory"] ?? null), "slug", [], "any", false, false, true, 13) == twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 13))) {
                                echo "active";
                            }
                            echo "\">
\t\t\t\t\t\t<a href=\"";
                            // line 14
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                            echo "\" class=\"dropdown-item\">";
                            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                            echo "</a>

\t\t\t\t\t\t";
                            // line 16
                            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, true, 16)) > 0)) {
                                // line 17
                                echo "\t\t\t\t\t\t<ul class=\"sub-category\">
\t\t\t\t\t\t\t";
                                // line 18
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(($context["categoryList"] ?? null));
                                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "parent", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18) == twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, true, 18))) {
                                        // line 19
                                        echo "\t\t\t\t\t\t\t<li class=\"";
                                        if ((twig_get_attribute($this->env, $this->source, ($context["activeCategory"] ?? null), "slug", [], "any", false, false, true, 19) == twig_get_attribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, true, 19))) {
                                            echo "active";
                                        }
                                        echo "\">
\t\t\t\t\t\t\t\t<a href=\"";
                                        // line 20
                                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                                        echo "\">";
                                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                                        echo "</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                                    }
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 23
                                echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t\t";
                            }
                            // line 25
                            echo "\t\t\t\t\t</li>
\t\t\t\t";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "\t\t\t</ul>
\t\t</div>
\t\t";
                } else {
                    // line 30
                    echo "\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["categoryList"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                        // line 32
                        echo "\t\t\t\t<a href=\"";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "url", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                        echo "\" class=\"btn btn-default ";
                        if ((twig_get_attribute($this->env, $this->source, ($context["activeCategory"] ?? null), "slug", [], "any", false, false, true, 32) == twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, true, 32))) {
                            echo "active";
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                        echo "</a>
\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "\t\t</div>
\t\t";
                }
                // line 36
                echo "
\t\t";
            }
            // line 38
            echo "
\t\t";
            // line 39
            if (($context["showSearchBar"] ?? null)) {
                // line 40
                echo "\t\t<form method=\"get\" class=\"products-search\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input name=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Search ...\" aria-label=\"Search\" value=\"";
                // line 42
                echo input("search");
                echo "\">
\t\t\t\t<div class=\"input-group-append input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t";
            }
            // line 49
            echo "\t</div>
</section>
";
        }
        // line 52
        echo "
<section class=\"products-container\">
\t<div class=\"container\">

\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "products", [], "any", false, false, true, 56), "chunk", [0 => 4], "method", false, false, true, 56));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["productGroup"]) {
            // line 57
            echo "\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["productGroup"]);
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 59
                echo "\t\t\t\t\t";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['product'] = $context["product"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@product"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 60
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t\t</div>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 63
            echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<i class=\"fas fa-search fa-6x\"></i>
\t\t\t\t\t\t<h1>";
            // line 67
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.no_results"]);
            echo "</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productGroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t
\t</div>
</section>

<section class=\"products-pagination\">
\t<div class=\"container\">
\t\t";
        // line 78
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["products"] ?? null), "render", [], "any", false, false, true, 78), 78, $this->source);
        echo "
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productlist/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 78,  257 => 72,  246 => 67,  240 => 63,  234 => 61,  228 => 60,  222 => 59,  218 => 58,  215 => 57,  210 => 56,  204 => 52,  199 => 49,  189 => 42,  185 => 40,  183 => 39,  180 => 38,  176 => 36,  172 => 34,  157 => 32,  153 => 31,  150 => 30,  145 => 27,  137 => 25,  133 => 23,  121 => 20,  114 => 19,  109 => 18,  106 => 17,  104 => 16,  97 => 14,  90 => 13,  85 => 12,  79 => 9,  75 => 7,  73 => 6,  70 => 5,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if categoryList %}
<section class=\"products-navigation\">
\t<div class=\"container\">
\t\t{% if showCategoriesFilter %}
\t\t
\t\t{% if typeCategoriesFilter == 'dropdown' %}
\t\t<div class=\"dropdown\">
\t\t\t<button id=\"btnGroupCategories\" type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<i class=\"fas fa-filter\"></i> {{ 'pixel.shop::component.cart.filter_by_category'|trans }}
\t\t\t</button>
\t\t\t<ul class=\"dropdown-menu\" aria-labelledby=\"btnGroupCategories\">
\t\t\t\t{% for category in categoryList if category.nest_depth == 0 %}
\t\t\t\t\t<li class=\"{% if activeCategory.slug == category.slug %}active{% endif %}\">
\t\t\t\t\t\t<a href=\"{{ category.url }}\" class=\"dropdown-item\">{{ category.name }}</a>

\t\t\t\t\t\t{% if category.children|length > 0 %}
\t\t\t\t\t\t<ul class=\"sub-category\">
\t\t\t\t\t\t\t{% for item in categoryList if item.parent.id == category.id %}
\t\t\t\t\t\t\t<li class=\"{% if activeCategory.slug == item.slug %}active{% endif %}\">
\t\t\t\t\t\t\t\t<a href=\"{{ item.url }}\">{{ item.name }}</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</li>
\t\t\t\t{% endfor %}
\t\t\t</ul>
\t\t</div>
\t\t{% else %}
\t\t<div class=\"btn-group\" role=\"group\">
\t\t\t{% for category in categoryList %}
\t\t\t\t<a href=\"{{ category.url }}\" class=\"btn btn-default {% if activeCategory.slug == category.slug %}active{% endif %}\">{{ category.name }}</a>
\t\t\t{% endfor %}
\t\t</div>
\t\t{% endif %}

\t\t{% endif %}

\t\t{% if showSearchBar %}
\t\t<form method=\"get\" class=\"products-search\">
\t\t\t<div class=\"input-group\">
\t\t\t\t<input name=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Search ...\" aria-label=\"Search\" value=\"{{ input('search') }}\">
\t\t\t\t<div class=\"input-group-append input-group-btn\">
\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t{% endif %}
\t</div>
</section>
{% endif %}

<section class=\"products-container\">
\t<div class=\"container\">

\t\t{% for productGroup in __SELF__.products.chunk(4) %}
\t\t\t<div class=\"row\">
\t\t\t\t{% for product in productGroup %}
\t\t\t\t\t{% partial '@product' product=product %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<i class=\"fas fa-search fa-6x\"></i>
\t\t\t\t\t\t<h1>{{ 'pixel.shop::component.cart.no_results'|trans }}</h1>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t\t
\t</div>
</section>

<section class=\"products-pagination\">
\t<div class=\"container\">
\t\t{{ products.render|raw }}
\t</div>
</section>
", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productlist/default.htm", "");
    }
}
