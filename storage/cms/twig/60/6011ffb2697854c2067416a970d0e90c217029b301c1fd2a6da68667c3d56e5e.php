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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productlist/favorite.htm */
class __TwigTemplate_fcb90747aaf8f8644902857e34978ac0cf82081569e6d670d2cfdb7a5cd770df extends \Twig\Template
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
        $tags = array("if" => 3);
        $filters = array("escape" => 1);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<input type=\"hidden\" name=\"id\" value=\"";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, true, 1), 1, $this->source), "html", null, true);
        echo "\">
<button type=\"submit\" class=\"shop__favorite-button\">
\t";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "isFavorite", [], "method", false, false, true, 3)) {
            // line 4
            echo "\t\t<span class=\"fas fa-star\" aria-hidden=\"true\"></span>
\t";
        } else {
            // line 6
            echo "\t\t<span class=\"fas fa-star fas-disabled\" aria-hidden=\"true\"></span>
\t";
        }
        // line 7
        echo " 
</button>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productlist/favorite.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 7,  74 => 6,  70 => 4,  68 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\">
<button type=\"submit\" class=\"shop__favorite-button\">
\t{% if product.isFavorite() %}
\t\t<span class=\"fas fa-star\" aria-hidden=\"true\"></span>
\t{% else %}
\t\t<span class=\"fas fa-star fas-disabled\" aria-hidden=\"true\"></span>
\t{% endif %} 
</button>", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productlist/favorite.htm", "");
    }
}
