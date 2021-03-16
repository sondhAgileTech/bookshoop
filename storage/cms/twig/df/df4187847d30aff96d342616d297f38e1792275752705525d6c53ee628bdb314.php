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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productdetails/gallery.htm */
class __TwigTemplate_a5e874392b59678cb6c894bb01f8d9cde1f338c0b2cc16a28668c5d8acb4fd6c extends \Twig\Template
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
        $tags = array("if" => 4, "for" => 6);
        $filters = array("escape" => 2);
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
        echo "<span class=\"xzoom-container\">
\t<img class=\"xzoom\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, true, 2), "getThumb", [0 => 450, 1 => "auto"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" xoriginal=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, true, 2), "getPath", [], "method", false, false, true, 2), 2, $this->source), "html", null, true);
        echo "\" width=\"450\" />

\t";
        // line 4
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "gallery", [], "any", false, false, true, 4), "count", [], "any", false, false, true, 4) > 0)) {
            // line 5
            echo "\t<div class=\"xzoom-thumbs\">
\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "gallery", [], "any", false, false, true, 6));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 7
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getPath", [], "method", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "\">
\t\t\t<img class=\"xzoom-gallery\" width=\"80\" src=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "getThumb", [0 => 450, 1 => "auto"], "method", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\">
\t\t</a>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t</div>
\t";
        }
        // line 13
        echo "</span>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  95 => 11,  86 => 8,  81 => 7,  77 => 6,  74 => 5,  72 => 4,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"xzoom-container\">
\t<img class=\"xzoom\" src=\"{{ product.image.getThumb(450, 'auto') }}\" xoriginal=\"{{ product.image.getPath() }}\" width=\"450\" />

\t{% if product.gallery.count > 0 %}
\t<div class=\"xzoom-thumbs\">
\t\t{% for image in product.gallery %}
\t\t<a href=\"{{ image.getPath() }}\">
\t\t\t<img class=\"xzoom-gallery\" width=\"80\" src=\"{{ image.getThumb(450, 'auto') }}\">
\t\t</a>
\t\t{% endfor %}
\t</div>
\t{% endif %}
</span>", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/gallery.htm", "");
    }
}
