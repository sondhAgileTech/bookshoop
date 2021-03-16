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

/* D:\xampp\htdocs\bookshop/themes/bookshop/partials/site/footer.htm */
class __TwigTemplate_86370e4221550eb54e066b0c94c648de8ec592b5369ea79655c24cec064fd291 extends \Twig\Template
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
        $filters = array("theme" => 5);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
        echo "<footer class=\"ss-footer\">
    <div class=\"container-master\">
        <div class=\"box-footer\">
            <div class=\"f-contact\">
                <div class=\"f-logo\"><img src=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-header.png");
        echo "\" alt=\"\"></div>
                <div class=\"f-title\">Contact</div>
                <ul>
                    <li><a href=\"\" title=\"\"><img src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/email.png");
        echo "\" alt=\"\"><span>Email: education@edu.com</span></a></li>
                    <li><a href=\"\" title=\"\"><img src=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/phone.png");
        echo "\" alt=\"\"><span>Phone: +1 (234) 567-89-00</span></a></li>
                </ul>
            </div>
            <div class=\"f-link\">
                <ul>
                    <li><a href=\"\" title=\"\">Home</a></li>
                    <li><a href=\"\" title=\"\">Book</a></li>
                    <li><a href=\"\" title=\"\">Merchandise</a></li>
                    <li><a href=\"\" title=\"\">Game</a></li>
                    <li><a href=\"\" title=\"\">Blog</a></li>
                </ul>
            </div>
            <div class=\"f-subscribe\">
                <div class=\"f-title\">Subscribe</div>
                <form action=\"\">
                    <div class=\"box-input\">
                        <input type=\"text\" placeholder=\"Your Email here...\">
                        <button type=\"submit\"><img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/email1.png");
        echo "\" alt=\"\"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class=\"f-background\">
        <img src=\"images/background/bg2.svg\" alt=\"\">
    </div> -->
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/themes/bookshop/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  78 => 9,  74 => 8,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"ss-footer\">
    <div class=\"container-master\">
        <div class=\"box-footer\">
            <div class=\"f-contact\">
                <div class=\"f-logo\"><img src=\"{{ 'assets/images/logo-header.png'|theme }}\" alt=\"\"></div>
                <div class=\"f-title\">Contact</div>
                <ul>
                    <li><a href=\"\" title=\"\"><img src=\"{{ 'assets/images/icons/email.png'|theme }}\" alt=\"\"><span>Email: education@edu.com</span></a></li>
                    <li><a href=\"\" title=\"\"><img src=\"{{ 'assets/images/icons/phone.png'|theme }}\" alt=\"\"><span>Phone: +1 (234) 567-89-00</span></a></li>
                </ul>
            </div>
            <div class=\"f-link\">
                <ul>
                    <li><a href=\"\" title=\"\">Home</a></li>
                    <li><a href=\"\" title=\"\">Book</a></li>
                    <li><a href=\"\" title=\"\">Merchandise</a></li>
                    <li><a href=\"\" title=\"\">Game</a></li>
                    <li><a href=\"\" title=\"\">Blog</a></li>
                </ul>
            </div>
            <div class=\"f-subscribe\">
                <div class=\"f-title\">Subscribe</div>
                <form action=\"\">
                    <div class=\"box-input\">
                        <input type=\"text\" placeholder=\"Your Email here...\">
                        <button type=\"submit\"><img src=\"{{ 'assets/images/icons/email1.png'|theme }}\" alt=\"\"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class=\"f-background\">
        <img src=\"images/background/bg2.svg\" alt=\"\">
    </div> -->
</footer>", "D:\\xampp\\htdocs\\bookshop/themes/bookshop/partials/site/footer.htm", "");
    }
}
