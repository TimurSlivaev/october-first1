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

/* C:\laragon\www\october-first/themes/block/pages/home.htm */
class __TwigTemplate_c8bc026b88459843713f549402146233a5c9998424940fca26fad55e226ef399 extends \Twig\Template
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
        $tags = array("set" => 3, "for" => 12, "component" => 61, "partial" => 628);
        $filters = array("escape" => 14, "theme" => 20);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'component', 'partial'],
                ['escape', 'theme'],
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
        echo "<!--
<h1>hi</h1>
";
        // line 3
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 3);
        // line 4
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 4);
        // line 5
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 5);
        // line 6
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 6);
        // line 7
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 7);
        // line 8
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 8);
        // line 9
        echo "

<div class=\"row\">
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 13
            echo "    <div class=\"card\">
        <p class=\"nazvanie\">";
            // line 14
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "</p>
        <p class=\"god\">год издания:";
            // line 15
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "year", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "</p>
        <p class=\"author\">";
            // line 16
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "author_id", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</p>
        <p class=\"desck\">";
            // line 17
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "</p>
        <p class=\"vozrast\">возрастное ограничение:";
            // line 18
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "age_rating", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "</p>
        <p class=\"ganr\">";
            // line 19
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "genre_id", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</p>
        <img class='oblogka' src=\"";
            // line 20
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/imges/download.jpg");
            echo "\" alt=\"\">
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "    <p>";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 23, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    ojowjojofojwjo
</div>
-->

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
    <title>Mogo</title>
</head>
<body>


<h6>qwerty</h6>
accac
accac
<h6>qwerty</h6>
accac
accac
<h6>qwerty</h6>
accac
accac



    <!-- Intro -->
    <div class=\"intro\" id=\"intro\">
        <div class=\"container\">
            <div class=\"intro__inner\">
                
              
                    ";
        // line 61
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/title.htm"        ;
        $context['__cms_component_params']['fixture'] = "h1"        ;
        $context['__cms_component_params']['class'] = "intro__title"        ;
        $context['__cms_component_params']['tools'] = "bold,italic"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 62
        echo "                    ";
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['file'] = "intro/suptitle.htm"        ;
        $context['__cms_component_params']['fixture'] = "h2"        ;
        $context['__cms_component_params']['class'] = "intro__suptitle"        ;
        $context['__cms_component_params']['tools'] = " align-left "        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contenteditor"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 63
        echo "              

                <a class=\"btn\" href=\"#\">Learn More</a>
            </div>
        </div>

        <div class=\"slider\">
            <div class=\"container\">
                <div class=\"slider__inner\">
                    <div class=\"slider__item active\">
                        <span class=\"slider__num\">01</span>
                        <span class=\"slider__text\">Intro</span>
                    </div>
                    <div class=\"slider__item\">
                        <span class=\"slider__num\">02</span>
                        <span class=\"slider__text\">Work</span>
                    </div>
                    <div class=\"slider__item\">
                        <span class=\"slider__num\">03</span>
                        <span class=\"slider__text\">About</span>
                    </div>
                    <div class=\"slider__item\">
                        <span class=\"slider__num\">04</span>
                        <span class=\"slider__text\">Contacts</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.intro -->


    <!-- About -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">Story about us</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/about/1.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/about/2.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/about/3.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <!-- Statistics -->
    <div class=\"statistics\">
        <div class=\"container\">

            <div class=\"stat\">
                <div class=\"stat__item\">
                    <div class=\"stat__count\">42</div>
                    <div class=\"stat__text\">Web Design Projects</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">123</div>
                    <div class=\"stat__text\">happy client</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">15</div>
                    <div class=\"stat__text\">award winner</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">99</div>
                    <div class=\"stat__text\">cup of coffee</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">24</div>
                    <div class=\"stat__text\">members</div>
                </div>
            </div>

        </div>
    </div>


    <!-- Services -->
    <section class=\"section\" id=\"services\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">We work with</h3>
                <h2 class=\"section__title\">Amazing Services</h2>
            </div>

            <div class=\"services\">
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"assets/images/services/photography.png\" alt=\"\">

                    <div class=\"services__title\">Photography</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"assets/images/services/webdesign.png\" alt=\"\">

                    <div class=\"services__title\">Web Design</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"assets/images/services/creativity.png\" alt=\"\">

                    <div class=\"services__title\">Creativity</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"assets/images/services/seo.png\" alt=\"\">

                    <div class=\"services__title\">seo</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"assets/images/services/css-html.png\" alt=\"\">

                    <div class=\"services__title\">Css/Html</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"assets/images/services/digital.png\" alt=\"\">

                    <div class=\"services__title\">digital</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <!-- Devices -->
    <section class=\"section  section--devices\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">For all devices</h3>
                <h2 class=\"section__title\">Unique design</h2>
            </div>

            <div class=\"devices\">
                <img class=\"devices__item\" src=\"assets/images/ipad.png\" alt=\"\">
                <img class=\"devices__item  devices__item--iphone\" src=\"assets/images/iphone.png\" alt=\"\">
            </div>

        </div>
    </section>


    <!-- Wedo -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Service</h3>
                <h2 class=\"section__title\">what we do</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"wedo\">
                <div class=\"wedo__item\">
                    <img class=\"wedo__img\" src=\"assets/images/wedo.jpg\" alt=\"\">
                </div>

                <div class=\"wedo__item\">

                    <div class=\"accordion\">
                        <div class=\"accordion__item\" data-collapse=\"#wedo_1\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"assets/images/services/photography.png\" alt=\"\">
                                <div class=\"accordion__title\">Photography</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_1\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item active\" data-collapse=\"#wedo_2\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"assets/images/services/creativity.png\" alt=\"\">
                                <div class=\"accordion__title\">Creativity</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_2\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item\" data-collapse=\"#wedo_3\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"assets/images/services/webdesign.png\" alt=\"\">
                                <div class=\"accordion__title\">web design</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_3\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div><!-- /.accordion -->

                </div><!-- /.wedo__item -->
            </div><!-- /.wedo -->

        </div>
    </section>


    <!-- Reviews 1 -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"reviews\">
                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"assets/images/avatar.png\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"assets/images/avatar.png\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Team -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Who we are</h3>
                <h2 class=\"section__title\">Meet our team</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/team/1.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Matthew Dix</div>
                        <div class=\"card__prof\">Graphic Design</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/team/2.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Christopher Campbell</div>
                        <div class=\"card__prof\">Branding/UX design</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/team/3.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Michael Fertig </div>
                        <div class=\"card__prof\">Developer</div>
                    </div>
                </div><!-- /.card__item -->

            </div><!-- /.card -->

        </div><!-- /.container -->
    </section>


    <!-- Logos -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"logos\">
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/1.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/2.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/3.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/4.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/5.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/6.png\" alt=\"\">
                </div>
            </div>

        </div>
    </div>


    <!-- Works -->
    <section class=\"section\" id=\"works\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">some of our work</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

        <div class=\"works\">
            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/1.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/2.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/3.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/4.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/5.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/6.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/7.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->
    </section>


    <!-- Reviews 2 -->
    <div class=\"section\">
        <div class=\"container\">

            <div class=\"reviews\">

                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"assets/images/avatar.png\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"assets/images/avatar.png\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Clients -->
    <section class=\"section  section--clients\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Happy Clients</h3>
                <h2 class=\"section__title\">What people say</h2>
            </div>

            <div class=\"clients\">
                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"assets/images/clients/1.png\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Matthew Dix</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"assets/images/clients/2.png\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Nick Karvounis</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"assets/images/clients/3.png\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Jaelynn Castillo </div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"assets/images/clients/4.png\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Mike Petrucci</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>
            </div><!-- /.clients -->

        </div><!-- /.container -->
    </section>


    <!-- Blog -->
    <section class=\"section\" id=\"blog\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Our stories</h3>
                <h2 class=\"section__title\">Latest blog</h2>
            </div>

          <!--
              blog
          -->
          ";
        // line 628
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 629
        echo "
        </div><!-- /.container -->
    </section>


    <!-- Map -->
    <section class=\"section  section--map\">
        <div class=\"container\">
            <div class=\"map\">
                <h2 class=\"map__title\">
                    <div><i class=\"fas fa-map-marker-alt\"></i></div>
                    <a href=\"https://goo.gl/maps/F8YpeCGqwrG2\" target=\"_blank\">Open Map</a>
                </h2>
            </div>
        </div>
    </section>







<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
<script src=\"assets/js/app.js\"></script>


</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\october-first/themes/block/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  758 => 629,  754 => 628,  187 => 63,  178 => 62,  170 => 61,  132 => 25,  123 => 23,  115 => 20,  111 => 19,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  88 => 13,  83 => 12,  78 => 9,  76 => 8,  74 => 7,  72 => 6,  70 => 5,  68 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
<h1>hi</h1>
{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}


<div class=\"row\">
{% for record in records %}
    <div class=\"card\">
        <p class=\"nazvanie\">{{ record.title }}</p>
        <p class=\"god\">год издания:{{ record.year }}</p>
        <p class=\"author\">{{ record.author_id }}</p>
        <p class=\"desck\">{{ record.description }}</p>
        <p class=\"vozrast\">возрастное ограничение:{{ record.age_rating }}</p>
        <p class=\"ganr\">{{ record.genre_id }}</p>
        <img class='oblogka' src=\"{{ 'assets/imges/download.jpg'|theme   }}\" alt=\"\">
    </div>
    {% else %}
    <p>{{ noRecordsMessage }}</p>
    {% endfor %}
    ojowjojofojwjo
</div>
-->

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"assets/css/style.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:300i,400,700&amp;subset=cyrillic-ext\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css\"/>
    <title>Mogo</title>
</head>
<body>


<h6>qwerty</h6>
accac
accac
<h6>qwerty</h6>
accac
accac
<h6>qwerty</h6>
accac
accac



    <!-- Intro -->
    <div class=\"intro\" id=\"intro\">
        <div class=\"container\">
            <div class=\"intro__inner\">
                
              
                    {% component 'contenteditor' file=\"intro/title.htm\" fixture=\"h1\" class=\"intro__title\" tools=\"bold,italic\" %}
                    {% component 'contenteditor' file=\"intro/suptitle.htm\" fixture=\"h2\" class=\"intro__suptitle\" tools=' align-left ' %}
              

                <a class=\"btn\" href=\"#\">Learn More</a>
            </div>
        </div>

        <div class=\"slider\">
            <div class=\"container\">
                <div class=\"slider__inner\">
                    <div class=\"slider__item active\">
                        <span class=\"slider__num\">01</span>
                        <span class=\"slider__text\">Intro</span>
                    </div>
                    <div class=\"slider__item\">
                        <span class=\"slider__num\">02</span>
                        <span class=\"slider__text\">Work</span>
                    </div>
                    <div class=\"slider__item\">
                        <span class=\"slider__num\">03</span>
                        <span class=\"slider__text\">About</span>
                    </div>
                    <div class=\"slider__item\">
                        <span class=\"slider__num\">04</span>
                        <span class=\"slider__text\">Contacts</span>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.intro -->


    <!-- About -->
    <section class=\"section\" id=\"about\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">Story about us</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/about/1.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/about/2.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/about/3.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">super team</div>
                    </div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <!-- Statistics -->
    <div class=\"statistics\">
        <div class=\"container\">

            <div class=\"stat\">
                <div class=\"stat__item\">
                    <div class=\"stat__count\">42</div>
                    <div class=\"stat__text\">Web Design Projects</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">123</div>
                    <div class=\"stat__text\">happy client</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">15</div>
                    <div class=\"stat__text\">award winner</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">99</div>
                    <div class=\"stat__text\">cup of coffee</div>
                </div>
                <div class=\"stat__item\">
                    <div class=\"stat__count\">24</div>
                    <div class=\"stat__text\">members</div>
                </div>
            </div>

        </div>
    </div>


    <!-- Services -->
    <section class=\"section\" id=\"services\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">We work with</h3>
                <h2 class=\"section__title\">Amazing Services</h2>
            </div>

            <div class=\"services\">
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"assets/images/services/photography.png\" alt=\"\">

                    <div class=\"services__title\">Photography</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"assets/images/services/webdesign.png\" alt=\"\">

                    <div class=\"services__title\">Web Design</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item  services__item--border\">
                    <img class=\"services__icon\" src=\"assets/images/services/creativity.png\" alt=\"\">

                    <div class=\"services__title\">Creativity</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"assets/images/services/seo.png\" alt=\"\">

                    <div class=\"services__title\">seo</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"assets/images/services/css-html.png\" alt=\"\">

                    <div class=\"services__title\">Css/Html</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
                <div class=\"services__item\">
                    <img class=\"services__icon\" src=\"assets/images/services/digital.png\" alt=\"\">

                    <div class=\"services__title\">digital</div>
                    <div class=\"services__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                </div>
            </div>

        </div><!-- /.container -->
    </section>


    <!-- Devices -->
    <section class=\"section  section--devices\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">For all devices</h3>
                <h2 class=\"section__title\">Unique design</h2>
            </div>

            <div class=\"devices\">
                <img class=\"devices__item\" src=\"assets/images/ipad.png\" alt=\"\">
                <img class=\"devices__item  devices__item--iphone\" src=\"assets/images/iphone.png\" alt=\"\">
            </div>

        </div>
    </section>


    <!-- Wedo -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Service</h3>
                <h2 class=\"section__title\">what we do</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"wedo\">
                <div class=\"wedo__item\">
                    <img class=\"wedo__img\" src=\"assets/images/wedo.jpg\" alt=\"\">
                </div>

                <div class=\"wedo__item\">

                    <div class=\"accordion\">
                        <div class=\"accordion__item\" data-collapse=\"#wedo_1\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"assets/images/services/photography.png\" alt=\"\">
                                <div class=\"accordion__title\">Photography</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_1\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item active\" data-collapse=\"#wedo_2\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"assets/images/services/creativity.png\" alt=\"\">
                                <div class=\"accordion__title\">Creativity</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_2\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>

                        <div class=\"accordion__item\" data-collapse=\"#wedo_3\">
                            <div class=\"accordion__header\">
                                <img class=\"accordion__icon\" src=\"assets/images/services/webdesign.png\" alt=\"\">
                                <div class=\"accordion__title\">web design</div>
                            </div>
                            <div class=\"accordion__content\" id=\"wedo_3\">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                    </div><!-- /.accordion -->

                </div><!-- /.wedo__item -->
            </div><!-- /.wedo -->

        </div>
    </section>


    <!-- Reviews 1 -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"reviews\">
                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"assets/images/avatar.png\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"assets/images/avatar.png\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Team -->
    <section class=\"section\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Who we are</h3>
                <h2 class=\"section__title\">Meet our team</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <div class=\"card\">
                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/team/1.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Matthew Dix</div>
                        <div class=\"card__prof\">Graphic Design</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/team/2.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Christopher Campbell</div>
                        <div class=\"card__prof\">Branding/UX design</div>
                    </div>
                </div><!-- /.card__item -->

                <div class=\"card__item\">
                    <div class=\"card__inner\">
                        <div class=\"card__img\">
                            <img src=\"assets/images/team/3.jpg\" alt=\"\">
                        </div>
                        <div class=\"card__text\">
                            <div class=\"social\">
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-facebook-f\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-twitter\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-pinterest-p\"></i>
                                </a>
                                <a class=\"social__item\" href=\"#\" target=\"_blank\">
                                    <i class=\"fab fa-instagram\"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"card__info\">
                        <div class=\"card__name\">Michael Fertig </div>
                        <div class=\"card__prof\">Developer</div>
                    </div>
                </div><!-- /.card__item -->

            </div><!-- /.card -->

        </div><!-- /.container -->
    </section>


    <!-- Logos -->
    <div class=\"section  section--gray\">
        <div class=\"container\">

            <div class=\"logos\">
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/1.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/2.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/3.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/4.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/5.png\" alt=\"\">
                </div>
                <div class=\"logos__item\">
                    <img class=\"logos__img\" src=\"assets/images/logos/6.png\" alt=\"\">
                </div>
            </div>

        </div>
    </div>


    <!-- Works -->
    <section class=\"section\" id=\"works\">
        <div class=\"container\">
            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">What we do</h3>
                <h2 class=\"section__title\">some of our work</h2>
                <div class=\"section__text\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>

        <div class=\"works\">
            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/1.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/2.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/3.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/4.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/5.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>

            <div class=\"works__col\">
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/6.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
                <div class=\"works__item\">
                    <img class=\"works__image\" src=\"assets/images/works/7.jpg\" alt=\"\">
                    <div class=\"works__info\">
                        <div class=\"works__title\">creatively designed</div>
                        <div class=\"works__text\">Lorem ipsum dolor sit</div>
                    </div>
                </div>
            </div>
        </div><!-- /.works -->
    </section>


    <!-- Reviews 2 -->
    <div class=\"section\">
        <div class=\"container\">

            <div class=\"reviews\">

                <div data-slider>
                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"assets/images/avatar.png\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>

                    <div>
                        <div class=\"reviews__item\">
                            <img class=\"reviews__photo\" src=\"assets/images/avatar.png\" alt=\"\">
                            <div class=\"reviews__text\">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.”</div>
                            <div class=\"reviews__author\">Jon Doe</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Clients -->
    <section class=\"section  section--clients\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Happy Clients</h3>
                <h2 class=\"section__title\">What people say</h2>
            </div>

            <div class=\"clients\">
                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"assets/images/clients/1.png\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Matthew Dix</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"assets/images/clients/2.png\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Nick Karvounis</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"assets/images/clients/3.png\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Jaelynn Castillo </div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>

                <div class=\"clients__item\">
                    <img class=\"clients__photo\" src=\"assets/images/clients/4.png\" alt=\"\">
                    <div class=\"clients__content\">
                        <div class=\"clients__name\">Mike Petrucci</div>
                        <div class=\"clients__prof\">Graphic Design</div>
                        <div class=\"clients__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</div>
                    </div>
                </div>
            </div><!-- /.clients -->

        </div><!-- /.container -->
    </section>


    <!-- Blog -->
    <section class=\"section\" id=\"blog\">
        <div class=\"container\">

            <div class=\"section__header\">
                <h3 class=\"section__suptitle\">Our stories</h3>
                <h2 class=\"section__title\">Latest blog</h2>
            </div>

          <!--
              blog
          -->
          {% partial 'blog' %}

        </div><!-- /.container -->
    </section>


    <!-- Map -->
    <section class=\"section  section--map\">
        <div class=\"container\">
            <div class=\"map\">
                <h2 class=\"map__title\">
                    <div><i class=\"fas fa-map-marker-alt\"></i></div>
                    <a href=\"https://goo.gl/maps/F8YpeCGqwrG2\" target=\"_blank\">Open Map</a>
                </h2>
            </div>
        </div>
    </section>







<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js\"></script>
<script src=\"assets/js/app.js\"></script>


</body>
</html>", "C:\\laragon\\www\\october-first/themes/block/pages/home.htm", "");
    }
}
