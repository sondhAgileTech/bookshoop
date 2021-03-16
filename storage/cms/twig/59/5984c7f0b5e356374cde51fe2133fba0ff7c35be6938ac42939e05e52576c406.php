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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productdetails/related.htm */
class __TwigTemplate_63f7760b05fe7083c3e72a97ac6d0eb45439928343e6d8eaaf9ecf62fc8858f8 extends \Twig\Template
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
        $tags = array("if" => 1, "for" => 7);
        $filters = array("length" => 1, "trans" => 4, "escape" => 13, "upper" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['length', 'trans', 'escape', 'upper'],
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
        if ((twig_length_filter($this->env, ($context["relatedProducts"] ?? null)) > 1)) {
            // line 2
            echo "<div class=\"container\">
\t<legend class=\"related-header\">
\t\t<i class=\"fas fa-tags\"></i> ";
            // line 4
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.related_products"]);
            echo "
\t</legend>

\t";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["relatedProducts"] ?? null), "chunk", [0 => 4], "method", false, false, true, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["productGroup"]) {
                // line 8
                echo "\t<div class=\"row\">
\t\t";
                // line 9
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["productGroup"]);
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 10
                    echo "\t\t<div class=\"col-md-3\">

\t\t\t<div class=\"media related-item\">
\t\t\t\t<a class=\"pull-left\" href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
                    echo "\">
\t\t\t\t\t<img class=\"media-object related-image\" src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, true, 14), "thumb", [0 => 80, 1 => 80, 2 => "crop"], "method", false, false, true, 14), 14, $this->source), "html", null, true);
                    echo "\" alt=\"Image\" width=\"40\">
\t\t\t\t</a>
\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t";
                    // line 17
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, true, 17)) {
                        // line 18
                        echo "\t\t\t\t\t\t<span class=\"label label-default\">";
                        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "brand", [], "any", false, false, true, 18), "name", [], "any", false, false, true, 18), 18, $this->source)), "html", null, true);
                        echo "</span>
\t\t\t\t\t\t<h5 class=\"related-category to-right\">";
                        // line 19
                        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "getCategoriesNames", [], "method", false, false, true, 19), 19, $this->source), "html", null, true);
                        echo "</h5>
\t\t\t\t\t";
                    }
                    // line 21
                    echo "\t\t\t\t\t<p class=\"related-description\"><strong>";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "</strong></p>
\t\t\t\t\t<a href=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["product"], "url", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                    echo "\">
\t\t\t\t\t\t<i class=\"fas fa-plus\"></i> ";
                    // line 23
                    echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.moreinfo"]);
                    echo "
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/related.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 32,  134 => 30,  121 => 23,  117 => 22,  112 => 21,  107 => 19,  102 => 18,  100 => 17,  94 => 14,  90 => 13,  85 => 10,  81 => 9,  78 => 8,  74 => 7,  68 => 4,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if relatedProducts|length > 1 %}
<div class=\"container\">
\t<legend class=\"related-header\">
\t\t<i class=\"fas fa-tags\"></i> {{ 'pixel.shop::lang.frontend.related_products'|trans }}
\t</legend>

\t{% for productGroup in relatedProducts.chunk(4) %}
\t<div class=\"row\">
\t\t{% for product in productGroup %}
\t\t<div class=\"col-md-3\">

\t\t\t<div class=\"media related-item\">
\t\t\t\t<a class=\"pull-left\" href=\"{{ product.url }}\">
\t\t\t\t\t<img class=\"media-object related-image\" src=\"{{ product.image.thumb(80,80,'crop') }}\" alt=\"Image\" width=\"40\">
\t\t\t\t</a>
\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t{% if product.brand %}
\t\t\t\t\t\t<span class=\"label label-default\">{{ product.brand.name|upper }}</span>
\t\t\t\t\t\t<h5 class=\"related-category to-right\">{{ product.getCategoriesNames() }}</h5>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<p class=\"related-description\"><strong>{{ product.name }}</strong></p>
\t\t\t\t\t<a href=\"{{ product.url }}\">
\t\t\t\t\t\t<i class=\"fas fa-plus\"></i> {{ 'pixel.shop::lang.frontend.moreinfo'|trans }}
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t{% endfor %}
\t</div>
\t{% endfor %}
</div>
{% endif %}", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/related.htm", "");
    }
}
