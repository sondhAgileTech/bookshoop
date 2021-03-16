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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productdetails/default.htm */
class __TwigTemplate_110ba542511015ebd3bb675b4d5762807fe18899d458af56fc172be8f83527e3 extends \Twig\Template
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
        $tags = array("put" => 1, "partial" => 11);
        $filters = array("escape" => 2, "url_encode" => 6, "app" => 8);
        $functions = array("url_current" => 6);

        try {
            $this->sandbox->checkSecurity(
                ['put', 'partial'],
                ['escape', 'url_encode', 'app'],
                ['url_current']
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('meta'        );
        // line 2
        echo "\t<title>";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "</title>
\t<meta name=\"description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "seo_summary", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "\">
\t<meta name=\"keywords\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "keywords", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
\t<meta property=\"og:title\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\" />
\t<meta property=\"og:url\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_urlencode_filter(call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"])), "html", null, true);
        echo "\" />
\t<meta property=\"og:description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "seo_summary", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\" />
\t<meta property=\"og:image\" content=\"";
        // line 8
        echo $this->extensions['System\Twig\Extension']->appFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "getMainImage", [], "method", false, false, true, 8), "thumb", [0 => 600, 1 => 315, 2 => "crop"], "method", false, false, true, 8), 8, $this->source));
        echo "\" />
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 10
        echo "
";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("@product"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 11,  95 => 10,  93 => 1,  89 => 8,  85 => 7,  81 => 6,  77 => 5,  73 => 4,  69 => 3,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put meta %}
\t<title>{{ product.title }}</title>
\t<meta name=\"description\" content=\"{{ product.seo_summary }}\">
\t<meta name=\"keywords\" content=\"{{ product.keywords }}\">
\t<meta property=\"og:title\" content=\"{{ product.title }}\" />
\t<meta property=\"og:url\" content=\"{{ url_current()|url_encode }}\" />
\t<meta property=\"og:description\" content=\"{{ product.seo_summary }}\" />
\t<meta property=\"og:image\" content=\"{{ product.getMainImage().thumb(600, 315, 'crop')|app }}\" />
{% endput %}

{% partial '@product' %}
", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/default.htm", "");
    }
}
