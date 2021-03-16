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

/* D:\xampp\htdocs\bookshop/themes/bookshop/pages/home.htm */
class __TwigTemplate_9469d97589d78f518b350f1ac860c1d22b0e6443f62e3e8d2520d8f65467f520 extends \Twig\Template
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
        $filters = array("theme" => 29);
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
        echo "<section class=\"ss-banner\">
    <div class=\"swiper-banner\">
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
                <img src=\"https://images.pexels.com/photos/819372/pexels-photo-819372.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" alt=\"\">
                <div class=\"container-master\">
                    <div class=\"banner-text\">
                        <h1 class=\"banner-text-title\">Hello summer</h1>
                        <div class=\"banner-text-description\">
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        </div>
                        <div class=\"btn-more pink\">
                            <a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
    </div>
</section>
<section class=\"ss-intro\">
    <div class=\"container-master\">
        <div class=\"intro-box\">
            <div class=\"intro-left\">
                <div class=\"intro-left-img\">
                    <div class=\"imgc\">
                        <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img1.png");
        echo "\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"intro-right\">
                <h2 class=\"intro-title\">\"The Adventures of <span style=\"color: #3388FF;\">Oliver</span> and <span style=\"color: #FF0ECA;\">Madeline</span>\" Book</h2>
                <div class=\"intro-text\">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since. <br> <br>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop.
                </div>
                <div class=\"btn-more blu\">
                    <a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"ss-post-list\">
    <div class=\"container-master\">
        <h2 class=\"ss-list-title style-1\">New Books</h2>
        <div class=\"ss-list-body\">
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\"><img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/p1.png");
        echo "\" alt=\"\"></a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Book #1: The Secret of the Squirrels</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting dummy text of the printing</div>
                        <div class=\"btn-more pink\"><a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\"><img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/p2.png");
        echo "\" alt=\"\"></a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Book #1: The Secret of the Squirrels</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting dummy text of the printing</div>
                        <div class=\"btn-more pink\"><a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\"><img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/p3.png");
        echo "\" alt=\"\"></a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Book #1: The Secret of the Squirrels</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting dummy text of the printing</div>
                        <div class=\"btn-more pink\"><a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"ss-shop-list\">
    <div class=\"container-master\">
        <h2 class=\"ss-list-title style-2\">Merchandise</h2>
        <ul class=\"ss-list-filter\">
            <li><a href=\"\" title=\"\">Filter - All</a></li>
            <li><a href=\"\" title=\"\">Best Sellers</a></li>
            <li><a href=\"\" title=\"\">On Sale</a></li>
        </ul>
        <div class=\"ss-list-body\">
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\">
                            <img src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/p4.png");
        echo "\" alt=\"\">
                            <span>\$9.99</span>
                        </a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Squirrels T - Shirt</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                        <div class=\"btn-more blu\"><a href=\"\" title=\"\">By now</a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\">
                            <img src=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/p5.png");
        echo "\" alt=\"\">
                            <span>\$9.99</span>
                        </a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Squirrels T - Shirt</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                        <div class=\"btn-more blu\"><a href=\"\" title=\"\">By now</a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\">
                            <img src=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/p6.png");
        echo "\" alt=\"\">
                            <span>\$9.99</span>
                        </a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Squirrels T - Shirt</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                        <div class=\"btn-more blu\"><a href=\"\" title=\"\">By now</a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\">
                            <img src=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/p7.png");
        echo "\" alt=\"\">
                            <span>\$9.99</span>
                        </a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Squirrels T - Shirt</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                        <div class=\"btn-more blu\"><a href=\"\" title=\"\">By now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"ss-blog\">
    <div class=\"container-master\">
        <div class=\"ss-box-blog\">
            <div class=\"ss-blog-text\">
                <h3 class=\"ss-list-title style-3\"><a href=\"\" title=\"\">Our Blog</a></h3>
                <div class=\"ss-txt\">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> <br>
                    Itaque earum rerum hic tenetur a sapiente ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                </div>
                <div class=\"btn-more pink\"><a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
            </div>
            <div class=\"ss-blog-slide\">
                <div class=\"swiper-blog\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\">
                            <div class=\"ss-item\">
                                <div class=\"item-img\">
                                    <a href=\"\" title=\"\" class=\"imgc\">
                                        <img src=\"";
        // line 179
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b1.png");
        echo "\" alt=\"\">
                                        <span>New</span>
                                    </a>
                                </div>
                                <div class=\"item-body\">
                                    <h3 class=\"item-title\"><a href=\"\" title=\"\">Essential Strategies Management</a></h3>
                                    <div class=\"item-text\">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class=\"item-date\">
                                        <img src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/date.png");
        echo "\" alt=\"\"><span>29 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"ss-item\">
                                <div class=\"item-img\">
                                    <a href=\"\" title=\"\" class=\"imgc\">
                                        <img src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b2.png");
        echo "\" alt=\"\">
                                        <span>New</span>
                                    </a>
                                </div>
                                <div class=\"item-body\">
                                    <h3 class=\"item-title\"><a href=\"\" title=\"\">Essential Strategies Management</a></h3>
                                    <div class=\"item-text\">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class=\"item-date\">
                                        <img src=\"";
        // line 208
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/date.png");
        echo "\" alt=\"\"><span>29 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"ss-item\">
                                <div class=\"item-img\">
                                    <a href=\"\" title=\"\" class=\"imgc\">
                                        <img src=\"";
        // line 217
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/b1.png");
        echo "\" alt=\"\">
                                        <span>New</span>
                                    </a>
                                </div>
                                <div class=\"item-body\">
                                    <h3 class=\"item-title\"><a href=\"\" title=\"\">Essential Strategies Management</a></h3>
                                    <div class=\"item-text\">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class=\"item-date\">
                                        <img src=\"";
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/date.png");
        echo "\" alt=\"\"><span>29 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-pagination\"></div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\bookshop/themes/bookshop/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 227,  316 => 217,  304 => 208,  291 => 198,  279 => 189,  266 => 179,  231 => 147,  213 => 132,  195 => 117,  177 => 102,  149 => 77,  134 => 65,  119 => 53,  92 => 29,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ss-banner\">
    <div class=\"swiper-banner\">
        <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
                <img src=\"https://images.pexels.com/photos/819372/pexels-photo-819372.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260\" alt=\"\">
                <div class=\"container-master\">
                    <div class=\"banner-text\">
                        <h1 class=\"banner-text-title\">Hello summer</h1>
                        <div class=\"banner-text-description\">
                            When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, 
                        </div>
                        <div class=\"btn-more pink\">
                            <a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"swiper-button-next\"></div>
        <div class=\"swiper-button-prev\"></div>
    </div>
</section>
<section class=\"ss-intro\">
    <div class=\"container-master\">
        <div class=\"intro-box\">
            <div class=\"intro-left\">
                <div class=\"intro-left-img\">
                    <div class=\"imgc\">
                        <img src=\"{{ 'assets/images/img1.png'|theme }}\" alt=\"\">
                    </div>
                </div>
            </div>
            <div class=\"intro-right\">
                <h2 class=\"intro-title\">\"The Adventures of <span style=\"color: #3388FF;\">Oliver</span> and <span style=\"color: #FF0ECA;\">Madeline</span>\" Book</h2>
                <div class=\"intro-text\">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry's standard dummy text ever since. <br> <br>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop.
                </div>
                <div class=\"btn-more blu\">
                    <a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"ss-post-list\">
    <div class=\"container-master\">
        <h2 class=\"ss-list-title style-1\">New Books</h2>
        <div class=\"ss-list-body\">
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\"><img src=\"{{ 'assets/images/p1.png'|theme }}\" alt=\"\"></a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Book #1: The Secret of the Squirrels</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting dummy text of the printing</div>
                        <div class=\"btn-more pink\"><a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\"><img src=\"{{ 'assets/images/p2.png'|theme }}\" alt=\"\"></a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Book #1: The Secret of the Squirrels</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting dummy text of the printing</div>
                        <div class=\"btn-more pink\"><a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\"><img src=\"{{ 'assets/images/p3.png'|theme }}\" alt=\"\"></a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Book #1: The Secret of the Squirrels</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting dummy text of the printing</div>
                        <div class=\"btn-more pink\"><a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"ss-shop-list\">
    <div class=\"container-master\">
        <h2 class=\"ss-list-title style-2\">Merchandise</h2>
        <ul class=\"ss-list-filter\">
            <li><a href=\"\" title=\"\">Filter - All</a></li>
            <li><a href=\"\" title=\"\">Best Sellers</a></li>
            <li><a href=\"\" title=\"\">On Sale</a></li>
        </ul>
        <div class=\"ss-list-body\">
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\">
                            <img src=\"{{ 'assets/images/p4.png'|theme }}\" alt=\"\">
                            <span>\$9.99</span>
                        </a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Squirrels T - Shirt</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                        <div class=\"btn-more blu\"><a href=\"\" title=\"\">By now</a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\">
                            <img src=\"{{ 'assets/images/p5.png'|theme }}\" alt=\"\">
                            <span>\$9.99</span>
                        </a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Squirrels T - Shirt</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                        <div class=\"btn-more blu\"><a href=\"\" title=\"\">By now</a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\">
                            <img src=\"{{ 'assets/images/p6.png'|theme }}\" alt=\"\">
                            <span>\$9.99</span>
                        </a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Squirrels T - Shirt</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                        <div class=\"btn-more blu\"><a href=\"\" title=\"\">By now</a></div>
                    </div>
                </div>
            </div>
            <div class=\"ss-box-item\">
                <div class=\"ss-item\">
                    <div class=\"item-img\">
                        <a href=\"\" class=\"imgc\" title=\"\">
                            <img src=\"{{ 'assets/images/p7.png'|theme }}\" alt=\"\">
                            <span>\$9.99</span>
                        </a>
                    </div>
                    <div class=\"item-body\">
                        <h3 class=\"item-title\"><a href=\"\" title=\"\">Squirrels T - Shirt</a></h3>
                        <div class=\"item-text\">Lorem Ipsum is simply dummy text of the printing and typesetting</div>
                        <div class=\"btn-more blu\"><a href=\"\" title=\"\">By now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=\"ss-blog\">
    <div class=\"container-master\">
        <div class=\"ss-box-blog\">
            <div class=\"ss-blog-text\">
                <h3 class=\"ss-list-title style-3\"><a href=\"\" title=\"\">Our Blog</a></h3>
                <div class=\"ss-txt\">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br> <br>
                    Itaque earum rerum hic tenetur a sapiente ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores
                </div>
                <div class=\"btn-more pink\"><a href=\"\" title=\"\">Read more <i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i></a></div>
            </div>
            <div class=\"ss-blog-slide\">
                <div class=\"swiper-blog\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\">
                            <div class=\"ss-item\">
                                <div class=\"item-img\">
                                    <a href=\"\" title=\"\" class=\"imgc\">
                                        <img src=\"{{ 'assets/images/b1.png'|theme }}\" alt=\"\">
                                        <span>New</span>
                                    </a>
                                </div>
                                <div class=\"item-body\">
                                    <h3 class=\"item-title\"><a href=\"\" title=\"\">Essential Strategies Management</a></h3>
                                    <div class=\"item-text\">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class=\"item-date\">
                                        <img src=\"{{ 'assets/images/icons/date.png'|theme }}\" alt=\"\"><span>29 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"ss-item\">
                                <div class=\"item-img\">
                                    <a href=\"\" title=\"\" class=\"imgc\">
                                        <img src=\"{{ 'assets/images/b2.png'|theme }}\" alt=\"\">
                                        <span>New</span>
                                    </a>
                                </div>
                                <div class=\"item-body\">
                                    <h3 class=\"item-title\"><a href=\"\" title=\"\">Essential Strategies Management</a></h3>
                                    <div class=\"item-text\">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class=\"item-date\">
                                        <img src=\"{{ 'assets/images/icons/date.png'|theme }}\" alt=\"\"><span>29 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"swiper-slide\">
                            <div class=\"ss-item\">
                                <div class=\"item-img\">
                                    <a href=\"\" title=\"\" class=\"imgc\">
                                        <img src=\"{{ 'assets/images/b1.png'|theme }}\" alt=\"\">
                                        <span>New</span>
                                    </a>
                                </div>
                                <div class=\"item-body\">
                                    <h3 class=\"item-title\"><a href=\"\" title=\"\">Essential Strategies Management</a></h3>
                                    <div class=\"item-text\">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </div>
                                    <div class=\"item-date\">
                                        <img src=\"{{ 'assets/images/icons/date.png'|theme }}\" alt=\"\"><span>29 Dec 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"swiper-pagination\"></div>
                </div>
            </div>
        </div>
    </div>
</section>", "D:\\xampp\\htdocs\\bookshop/themes/bookshop/pages/home.htm", "");
    }
}
