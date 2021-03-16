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

/* D:\xampp\htdocs\bookshop/plugins/pixel/shop/components/productdetails/share-buttons.htm */
class __TwigTemplate_772db5dd62e2b822a390bd60ee469930ea4f574e38c31938b7cf33fdd6b0f00f extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 1, "url_encode" => 1, "app" => 1);
        $functions = array("url_current" => 2);

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<a href=\"https://www.facebook.com/sharer/sharer.php?u=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 1), 1, $this->source)), "html", null, true);
        echo "&t=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 1), "title", [], "any", false, false, true, 1), 1, $this->source)), "html", null, true);
        echo "\" title=\"Share on Facebook\" target=\"_blank\"><img src=\"";
        echo $this->extensions['System\Twig\Extension']->appFilter("/plugins/pixel/shop/assets/img/facebook.png");
        echo "\" alt=\"Facebook\"></a>
<a href=\"https://twitter.com/intent/tweet?source=";
        // line 2
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 2), 2, $this->source)), "html", null, true);
        echo "&text=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "title", [], "any", false, false, true, 2), 2, $this->source)), "html", null, true);
        echo ":%20";
        echo twig_escape_filter($this->env, twig_urlencode_filter(call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"])), "html", null, true);
        echo "\" target=\"_blank\" title=\"Tweet\"><img src=\"";
        echo $this->extensions['System\Twig\Extension']->appFilter("/plugins/pixel/shop/assets/img/twitter.png");
        echo "\" alt=\"Twitter\"></a>
<a href=\"http://pinterest.com/pin/create/button/?url=";
        // line 3
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 3), 3, $this->source)), "html", null, true);
        echo "&description=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "title", [], "any", false, false, true, 3), 3, $this->source)), "html", null, true);
        echo "\" target=\"_blank\" title=\"Pin it\"><img src=\"";
        echo $this->extensions['System\Twig\Extension']->appFilter("/plugins/pixel/shop/assets/img/pinterest.png");
        echo "\" alt=\"Pinterest\"></a>
<a href=\"http://www.linkedin.com/sharePost?mini=true&url=";
        // line 4
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 4), 4, $this->source)), "html", null, true);
        echo "&title=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "title", [], "any", false, false, true, 4), 4, $this->source)), "html", null, true);
        echo "&summary=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "title", [], "any", false, false, true, 4), 4, $this->source)), "html", null, true);
        echo "&source=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(call_user_func_array($this->env->getFunction('url_current')->getCallable(), ["current"])), "html", null, true);
        echo "\" target=\"_blank\" title=\"Share on LinkedIn\"><img src=\"";
        echo $this->extensions['System\Twig\Extension']->appFilter("/plugins/pixel/shop/assets/img/linkedin.png");
        echo "\" alt=\"LinkedIn\"></a>
<a href=\"mailto:?subject=";
        // line 5
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
        echo "&body=";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
        echo ":%20";
        echo twig_escape_filter($this->env, twig_urlencode_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
        echo "\" target=\"_blank\" title=\"Email\"><img src=\"";
        echo $this->extensions['System\Twig\Extension']->appFilter("/plugins/pixel/shop/assets/img/mail.png");
        echo "\" alt=\"Email\"></a>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/share-buttons.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 5,  89 => 4,  81 => 3,  71 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a href=\"https://www.facebook.com/sharer/sharer.php?u={{ product.url|url_encode }}&t={{ this.page.title|url_encode }}\" title=\"Share on Facebook\" target=\"_blank\"><img src=\"{{ '/plugins/pixel/shop/assets/img/facebook.png'|app }}\" alt=\"Facebook\"></a>
<a href=\"https://twitter.com/intent/tweet?source={{ product.url|url_encode }}&text={{ this.page.title|url_encode }}:%20{{ url_current()|url_encode }}\" target=\"_blank\" title=\"Tweet\"><img src=\"{{ '/plugins/pixel/shop/assets/img/twitter.png'|app }}\" alt=\"Twitter\"></a>
<a href=\"http://pinterest.com/pin/create/button/?url={{ product.url|url_encode }}&description={{ this.page.title|url_encode }}\" target=\"_blank\" title=\"Pin it\"><img src=\"{{ '/plugins/pixel/shop/assets/img/pinterest.png'|app }}\" alt=\"Pinterest\"></a>
<a href=\"http://www.linkedin.com/sharePost?mini=true&url={{ product.url|url_encode }}&title={{ this.page.title|url_encode }}&summary={{ this.page.title|url_encode }}&source={{ url_current()|url_encode }}\" target=\"_blank\" title=\"Share on LinkedIn\"><img src=\"{{ '/plugins/pixel/shop/assets/img/linkedin.png'|app }}\" alt=\"LinkedIn\"></a>
<a href=\"mailto:?subject={{ this.page.title|url_encode }}&body={{ this.page.title|url_encode }}:%20{{ product.url|url_encode }}\" target=\"_blank\" title=\"Email\"><img src=\"{{ '/plugins/pixel/shop/assets/img/mail.png'|app }}\" alt=\"Email\"></a>", "D:\\xampp\\htdocs\\bookshop/plugins/pixel/shop/components/productdetails/share-buttons.htm", "");
    }
}
