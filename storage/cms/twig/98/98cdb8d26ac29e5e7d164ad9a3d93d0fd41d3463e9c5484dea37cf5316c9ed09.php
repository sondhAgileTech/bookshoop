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

/* D:\xampp\htdocs\bookshop/themes/bookshop/partials/site/header.htm */
class __TwigTemplate_cbf5a75d0fa62db8781599d95ea756c5ded923f495745b811bc660d5070be862 extends \Twig\Template
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
        $tags = array("component" => 9);
        $filters = array("theme" => 5, "page" => 12, "escape" => 13);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                ['theme', 'page', 'escape'],
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
        echo "<header class=\"ss-header\">
    <div class=\"container-master\">
        <div class=\"box-header\">
            <div class=\"header-logo\">
                <a href=\"\" title=\"\"><img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-header.png");
        echo "\" alt=\"\"></a>
            </div>
            <div class=\"header-right\">
                <nav class=\"ss-menu\">
                    ";
        // line 9
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("menu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 10
        echo "                </nav>
                <div class=\"ss-cart\">
                    <a href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["cart_page"] ?? null), 12, $this->source));
        echo "\" title=\"\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/Buy.png");
        echo "\" alt=\"\">
                        <span class=\"shop__items-count shop__cart-button-text-accent shop__cart-button-border\" id=\"cart_count\"> ";
        // line 13
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_count"] ?? null), 13, $this->source), "html", null, true);
        echo "</span>
                    </a>
                </div>
                <div id=\"toggleMenu\">
                    <div class=\"one\"></div>
                    <div class=\"two\"></div>
                    <div class=\"three\"></div>
                </div>
            </div>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/themes/bookshop/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  83 => 12,  79 => 10,  75 => 9,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"ss-header\">
    <div class=\"container-master\">
        <div class=\"box-header\">
            <div class=\"header-logo\">
                <a href=\"\" title=\"\"><img src=\"{{ 'assets/images/logo-header.png'|theme }}\" alt=\"\"></a>
            </div>
            <div class=\"header-right\">
                <nav class=\"ss-menu\">
                    {% component 'menu' %}
                </nav>
                <div class=\"ss-cart\">
                    <a href=\"{{ cart_page|page }}\" title=\"\"><img src=\"{{ 'assets/images/icons/Buy.png'|theme }}\" alt=\"\">
                        <span class=\"shop__items-count shop__cart-button-text-accent shop__cart-button-border\" id=\"cart_count\"> {{ cart_count }}</span>
                    </a>
                </div>
                <div id=\"toggleMenu\">
                    <div class=\"one\"></div>
                    <div class=\"two\"></div>
                    <div class=\"three\"></div>
                </div>
            </div>
        </div>
    </div>
</header>", "D:\\xampp\\htdocs\\bookshop/themes/bookshop/partials/site/header.htm", "");
    }
}
