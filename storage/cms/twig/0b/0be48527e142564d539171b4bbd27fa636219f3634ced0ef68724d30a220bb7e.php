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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productdetails/product.htm */
class __TwigTemplate_7a508578db5cbe37d3b22dd83e4fda43ab8bfa2b9829b67e305f672d3ddf79dc extends \Twig\Template
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
        $tags = array("if" => 2, "partial" => 14);
        $filters = array("trans" => 6);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'partial'],
                ['trans'],
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
        echo "<div class=\"product-detail\">
\t";
        // line 2
        if ( !($context["product"] ?? null)) {
            // line 3
            echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2>";
            // line 6
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::lang.frontend.product_not_found"]);
            echo "</h2>
\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 11
            echo "
\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
            // line 14
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['product'] = ($context["product"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@gallery"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "\t\t\t</div>

\t\t\t<div class=\"col-sm-6\">
\t\t\t\t";
            // line 18
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['product'] = ($context["product"] ?? null)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@details"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 19
            echo "\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t\t";
            // line 24
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@related"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 25
            echo "
\t";
        }
        // line 27
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  111 => 25,  107 => 24,  100 => 19,  95 => 18,  90 => 15,  85 => 14,  80 => 11,  72 => 6,  67 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-detail\">
\t{% if not product %}

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-12\">
\t\t\t\t<h2>{{ 'pixel.shop::lang.frontend.product_not_found'|trans }}</h2>
\t\t\t</div>
\t\t</div>

\t{% else %}

\t\t<div class=\"row\">
\t\t\t<div class=\"col-sm-6\">
\t\t\t\t{% partial '@gallery' product=product %}
\t\t\t</div>

\t\t\t<div class=\"col-sm-6\">
\t\t\t\t{% partial '@details' product=product %}
\t\t\t</div>

\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t\t{% partial '@related' %}

\t{% endif %}
</div>", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/product.htm", "");
    }
}
