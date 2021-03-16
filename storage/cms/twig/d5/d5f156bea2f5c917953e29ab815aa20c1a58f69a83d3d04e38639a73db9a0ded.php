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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/cartbutton/default.htm */
class __TwigTemplate_ceab95de89461e6b5b94c8542bf3952df5c0bbf274e1e90214b8396eaf7d5385 extends \Twig\Template
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
        $tags = array("if" => 8);
        $filters = array("escape" => 2, "page" => 10, "trans" => 26);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'page', 'trans'],
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
        echo "<style>
\t.shop__cart-button-accent{ background-color: ";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color_bg"] ?? null), 2, $this->source), "html", null, true);
        echo "; }
\t.shop__cart-button-border{ border-color: ";
        // line 3
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color_bg"] ?? null), 3, $this->source), "html", null, true);
        echo " !important; }
\t.shop__cart-button-text{ color: ";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color"] ?? null), 4, $this->source), "html", null, true);
        echo "; }
\t.shop__cart-button-text-accent{ color: ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color_bg"] ?? null), 5, $this->source), "html", null, true);
        echo "; }
</style>

";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 8), "id", [], "any", false, false, true, 8) != ($context["cart_page"] ?? null))) {
            // line 9
            echo "<div class=\"shop__cart-button shop__position-";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_position"] ?? null), 9, $this->source), "html", null, true);
            echo " ";
            if ((($context["cart_count"] ?? null) < 1)) {
                echo "empty";
            }
            echo " ";
            if (($context["hide_on_empty"] ?? null)) {
                echo "hide-on-empty";
            }
            echo "\">
\t<a href=\"";
            // line 10
            echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["cart_page"] ?? null), 10, $this->source));
            echo "\">
\t\t<span class=\"shop__items-count shop__cart-button-text-accent shop__cart-button-border\" id=\"cart_count\">";
            // line 11
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_count"] ?? null), 11, $this->source), "html", null, true);
            echo "</span>
\t\t<div class=\"shop__button-container shop__cart-button-accent\">
\t\t\t<svg viewBox=\"0 0 32 32\" fill=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color"] ?? null), 13, $this->source), "html", null, true);
            echo "\" class=\"shop__empty-cart-icon\">
\t\t\t\t<g fill=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color"] ?? null), 14, $this->source), "html", null, true);
            echo "\">
\t\t\t\t\t<path style=\" \" d=\"M 5 7 C 4.449219 7 4 7.449219 4 8 C 4 8.550781 4.449219 9 5 9 L 7.21875 9 L 9.84375 19.5 C 10.066406 20.390625 10.863281 21 11.78125 21 L 23.25 21 C 24.152344 21 24.917969 20.402344 25.15625 19.53125 L 27.75 10 L 11 10 L 11.5 12 L 25.15625 12 L 23.25 19 L 11.78125 19 L 9.15625 8.5 C 8.933594 7.609375 8.136719 7 7.21875 7 Z M 22 21 C 20.355469 21 19 22.355469 19 24 C 19 25.644531 20.355469 27 22 27 C 23.644531 27 25 25.644531 25 24 C 25 22.355469 23.644531 21 22 21 Z M 13 21 C 11.355469 21 10 22.355469 10 24 C 10 25.644531 11.355469 27 13 27 C 14.644531 27 16 25.644531 16 24 C 16 22.355469 14.644531 21 13 21 Z M 13 23 C 13.5625 23 14 23.4375 14 24 C 14 24.5625 13.5625 25 13 25 C 12.4375 25 12 24.5625 12 24 C 12 23.4375 12.4375 23 13 23 Z M 22 23 C 22.5625 23 23 23.4375 23 24 C 23 24.5625 22.5625 25 22 25 C 21.4375 25 21 24.5625 21 24 C 21 23.4375 21.4375 23 22 23 Z \" fill=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color"] ?? null), 15, $this->source), "html", null, true);
            echo "\" />
\t\t\t\t</g>
\t\t\t</svg>

\t\t\t<svg viewBox=\"0 0 32 32\" fill=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color"] ?? null), 19, $this->source), "html", null, true);
            echo "\" class=\"shop__full-cart-icon\">
\t\t\t\t<g fill=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color"] ?? null), 20, $this->source), "html", null, true);
            echo "\">
\t\t\t\t\t<path style=\" \" d=\"M 16 5 L 11.03125 9.96875 L 11.0625 10 L 11 10 L 11.5 12 L 25.15625 12 L 23.25 19 L 11.78125 19 L 9.15625 8.5 C 8.933594 7.609375 8.136719 7 7.21875 7 L 5 7 C 4.449219 7 4 7.449219 4 8 C 4 8.550781 4.449219 9 5 9 L 7.21875 9 L 9.84375 19.5 C 10.066406 20.390625 10.863281 21 11.78125 21 L 23.25 21 C 24.152344 21 24.917969 20.402344 25.15625 19.53125 L 27.75 10 L 26 10 L 21 5 L 18.5 7.5 Z M 22 21 C 20.355469 21 19 22.355469 19 24 C 19 25.644531 20.355469 27 22 27 C 23.644531 27 25 25.644531 25 24 C 25 22.355469 23.644531 21 22 21 Z M 13 21 C 11.355469 21 10 22.355469 10 24 C 10 25.644531 11.355469 27 13 27 C 14.644531 27 16 25.644531 16 24 C 16 22.355469 14.644531 21 13 21 Z M 16 7.84375 L 18.1875 10 L 13.84375 10 Z M 21 7.84375 L 23.15625 10 L 21 10 L 19.9375 8.9375 Z M 13 23 C 13.5625 23 14 23.4375 14 24 C 14 24.5625 13.5625 25 13 25 C 12.4375 25 12 24.5625 12 24 C 12 23.4375 12.4375 23 13 23 Z M 22 23 C 22.5625 23 23 23.4375 23 24 C 23 24.5625 22.5625 25 22 25 C 21.4375 25 21 24.5625 21 24 C 21 23.4375 21.4375 23 22 23 Z \" fill=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_color"] ?? null), 21, $this->source), "html", null, true);
            echo "\" />
\t\t\t\t</g>
\t\t\t</svg>

\t\t\t<span class=\"shop__button-info\">
\t\t\t\t<label>";
            // line 26
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.notify_title"]);
            echo "</label>
\t\t\t\t<span>";
            // line 27
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["pixel.shop::component.cart.notify_description"]);
            echo "</span>
\t\t\t</span>
\t\t</div>
\t</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartbutton/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 27,  138 => 26,  130 => 21,  126 => 20,  122 => 19,  115 => 15,  111 => 14,  107 => 13,  102 => 11,  98 => 10,  85 => 9,  83 => 8,  77 => 5,  73 => 4,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
\t.shop__cart-button-accent{ background-color: {{ cart_color_bg }}; }
\t.shop__cart-button-border{ border-color: {{ cart_color_bg }} !important; }
\t.shop__cart-button-text{ color: {{ cart_color }}; }
\t.shop__cart-button-text-accent{ color: {{ cart_color_bg }}; }
</style>

{% if this.page.id != cart_page %}
<div class=\"shop__cart-button shop__position-{{ cart_position }} {% if cart_count < 1 %}empty{% endif %} {% if hide_on_empty %}hide-on-empty{% endif %}\">
\t<a href=\"{{ cart_page|page }}\">
\t\t<span class=\"shop__items-count shop__cart-button-text-accent shop__cart-button-border\" id=\"cart_count\">{{ cart_count }}</span>
\t\t<div class=\"shop__button-container shop__cart-button-accent\">
\t\t\t<svg viewBox=\"0 0 32 32\" fill=\"{{ cart_color }}\" class=\"shop__empty-cart-icon\">
\t\t\t\t<g fill=\"{{ cart_color }}\">
\t\t\t\t\t<path style=\" \" d=\"M 5 7 C 4.449219 7 4 7.449219 4 8 C 4 8.550781 4.449219 9 5 9 L 7.21875 9 L 9.84375 19.5 C 10.066406 20.390625 10.863281 21 11.78125 21 L 23.25 21 C 24.152344 21 24.917969 20.402344 25.15625 19.53125 L 27.75 10 L 11 10 L 11.5 12 L 25.15625 12 L 23.25 19 L 11.78125 19 L 9.15625 8.5 C 8.933594 7.609375 8.136719 7 7.21875 7 Z M 22 21 C 20.355469 21 19 22.355469 19 24 C 19 25.644531 20.355469 27 22 27 C 23.644531 27 25 25.644531 25 24 C 25 22.355469 23.644531 21 22 21 Z M 13 21 C 11.355469 21 10 22.355469 10 24 C 10 25.644531 11.355469 27 13 27 C 14.644531 27 16 25.644531 16 24 C 16 22.355469 14.644531 21 13 21 Z M 13 23 C 13.5625 23 14 23.4375 14 24 C 14 24.5625 13.5625 25 13 25 C 12.4375 25 12 24.5625 12 24 C 12 23.4375 12.4375 23 13 23 Z M 22 23 C 22.5625 23 23 23.4375 23 24 C 23 24.5625 22.5625 25 22 25 C 21.4375 25 21 24.5625 21 24 C 21 23.4375 21.4375 23 22 23 Z \" fill=\"{{ cart_color }}\" />
\t\t\t\t</g>
\t\t\t</svg>

\t\t\t<svg viewBox=\"0 0 32 32\" fill=\"{{ cart_color }}\" class=\"shop__full-cart-icon\">
\t\t\t\t<g fill=\"{{ cart_color }}\">
\t\t\t\t\t<path style=\" \" d=\"M 16 5 L 11.03125 9.96875 L 11.0625 10 L 11 10 L 11.5 12 L 25.15625 12 L 23.25 19 L 11.78125 19 L 9.15625 8.5 C 8.933594 7.609375 8.136719 7 7.21875 7 L 5 7 C 4.449219 7 4 7.449219 4 8 C 4 8.550781 4.449219 9 5 9 L 7.21875 9 L 9.84375 19.5 C 10.066406 20.390625 10.863281 21 11.78125 21 L 23.25 21 C 24.152344 21 24.917969 20.402344 25.15625 19.53125 L 27.75 10 L 26 10 L 21 5 L 18.5 7.5 Z M 22 21 C 20.355469 21 19 22.355469 19 24 C 19 25.644531 20.355469 27 22 27 C 23.644531 27 25 25.644531 25 24 C 25 22.355469 23.644531 21 22 21 Z M 13 21 C 11.355469 21 10 22.355469 10 24 C 10 25.644531 11.355469 27 13 27 C 14.644531 27 16 25.644531 16 24 C 16 22.355469 14.644531 21 13 21 Z M 16 7.84375 L 18.1875 10 L 13.84375 10 Z M 21 7.84375 L 23.15625 10 L 21 10 L 19.9375 8.9375 Z M 13 23 C 13.5625 23 14 23.4375 14 24 C 14 24.5625 13.5625 25 13 25 C 12.4375 25 12 24.5625 12 24 C 12 23.4375 12.4375 23 13 23 Z M 22 23 C 22.5625 23 23 23.4375 23 24 C 23 24.5625 22.5625 25 22 25 C 21.4375 25 21 24.5625 21 24 C 21 23.4375 21.4375 23 22 23 Z \" fill=\"{{ cart_color }}\" />
\t\t\t\t</g>
\t\t\t</svg>

\t\t\t<span class=\"shop__button-info\">
\t\t\t\t<label>{{ 'pixel.shop::component.cart.notify_title'|trans }}</label>
\t\t\t\t<span>{{ 'pixel.shop::component.cart.notify_description'|trans }}</span>
\t\t\t</span>
\t\t</div>
\t</a>
</div>
{% endif %}", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/cartbutton/default.htm", "");
    }
}
