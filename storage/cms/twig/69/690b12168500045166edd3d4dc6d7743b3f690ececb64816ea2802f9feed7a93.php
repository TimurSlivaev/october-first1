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

/* C:\laragon\www\october-first/themes/block/partials/footer.htm */
class __TwigTemplate_e211eb7e7363bb4ade1228cf878b483b6a54be26fa6ae918b15b2cfc97db5179 extends \Twig\Template
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
        $tags = array("component" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
        echo "<!-- Footer -->
    <footer class=\"footer\" id=\"footer\">
        <div class=\"container\">

            <div class=\"footer__inner\">
                <div class=\"footer__col  footer__col--first\">
                    <div class=\"footer__logo\">MoGo</div>
                    <div class=\"footer__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

                    <div class=\"footer__social\">
                        <div class=\"footer__social-header\">
                            <b>15k</b> followers
                        </div>
                        <div class=\"footer__social-content\">
                            Follow Us:
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </div>
                    </div>

                   
                    
                    ";
        // line 30
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("formSubscribe"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 31
        echo "                </div><!-- /.footer__col -->

                <div class=\"footer__col  footer__col--second\">
                    <div class=\"footer__title\">Blogs</div>

                    <div class=\"blogs\">
                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"assets/images/blog/1.jpg\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"assets/images/blog/2.jpg\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"assets/images/blog/3.jpg\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>
                    </div><!-- /.blogs -->
                </div>

                <div class=\"footer__col  footer__col--third\">
                    <div class=\"footer__title\">Instagram</div>

                    <div class=\"instagram\">
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/1.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/2.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/3.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/4.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/5.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/6.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/7.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/8.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/9.jpg\" alt=\"\">
                        </a>
                    </div>
                </div>

            </div><!-- /.footer__inner -->

            <div class=\"copyright\">
                © 2016 MoGo free PSD template by <span>Laaqiq</span>
            </div>

        </div><!-- /.container -->
    </footer>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\october-first/themes/block/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 31,  93 => 30,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Footer -->
    <footer class=\"footer\" id=\"footer\">
        <div class=\"container\">

            <div class=\"footer__inner\">
                <div class=\"footer__col  footer__col--first\">
                    <div class=\"footer__logo\">MoGo</div>
                    <div class=\"footer__text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>

                    <div class=\"footer__social\">
                        <div class=\"footer__social-header\">
                            <b>15k</b> followers
                        </div>
                        <div class=\"footer__social-content\">
                            Follow Us:
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-facebook\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-twitter\"></i>
                            </a>
                            <a href=\"#\" target=\"_blank\">
                                <i class=\"fab fa-instagram\"></i>
                            </a>
                        </div>
                    </div>

                   
                    
                    {% component 'formSubscribe' %}
                </div><!-- /.footer__col -->

                <div class=\"footer__col  footer__col--second\">
                    <div class=\"footer__title\">Blogs</div>

                    <div class=\"blogs\">
                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"assets/images/blog/1.jpg\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"assets/images/blog/2.jpg\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>

                        <div class=\"blogs__item\">
                            <img class=\"blogs__img\" src=\"assets/images/blog/3.jpg\" alt=\"\">
                            <div class=\"blogs__content\">
                                <a class=\"blogs__title\" href=\"#\">Lorem ipsum dolor sit amet, consectetur adipiscing</a>
                                <div class=\"blogs__date\">Jan 9, 2016</div>
                            </div>
                        </div>
                    </div><!-- /.blogs -->
                </div>

                <div class=\"footer__col  footer__col--third\">
                    <div class=\"footer__title\">Instagram</div>

                    <div class=\"instagram\">
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/1.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/2.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/3.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/4.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/5.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/6.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/7.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/8.jpg\" alt=\"\">
                        </a>
                        <a class=\"instagram__item\" href=\"#\" target=\"_blank\">
                            <img src=\"assets/images/instagram/9.jpg\" alt=\"\">
                        </a>
                    </div>
                </div>

            </div><!-- /.footer__inner -->

            <div class=\"copyright\">
                © 2016 MoGo free PSD template by <span>Laaqiq</span>
            </div>

        </div><!-- /.container -->
    </footer>", "C:\\laragon\\www\\october-first/themes/block/partials/footer.htm", "");
    }
}
