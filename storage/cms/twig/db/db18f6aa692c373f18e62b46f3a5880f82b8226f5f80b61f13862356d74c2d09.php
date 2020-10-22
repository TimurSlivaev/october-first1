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

/* C:\laragon\www\october-first/themes/block/partials/header.htm */
class __TwigTemplate_6cf40915be83feff8bd94d8240efd42d7dbd617d0b6cc6da92e4feedf3f8a87a extends \Twig\Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        echo "<header class=\"header ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 1), "id", [], "any", false, false, true, 1) != "home")) {
            echo " active ";
        }
        echo "\" id=\"header\">
    <div class=\"container\">
        <div class=\"header__inner\">
            <div class=\"header__logo\" data-scroll=\"#intro\">MoGo</div>

            <nav class=\"nav\" id=\"nav\">
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#about\">About</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#services\">Service</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#blog\">Blog</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#works\">Work</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#footer\">Contact</a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-shopping-cart\"></i>
                </a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a>
            </nav>

            <button class=\"nav-toggle\" id=\"nav_toggle\" type=\"button\">
                <span class=\"nav-toggle__item\">Menu</span>
            </button>
        </div>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\october-first/themes/block/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header {% if this.page.id != 'home' %} active {% endif %}\" id=\"header\">
    <div class=\"container\">
        <div class=\"header__inner\">
            <div class=\"header__logo\" data-scroll=\"#intro\">MoGo</div>

            <nav class=\"nav\" id=\"nav\">
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#about\">About</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#services\">Service</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#blog\">Blog</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#works\">Work</a>
                <a class=\"nav__link\" href=\"#\" data-scroll=\"#footer\">Contact</a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-shopping-cart\"></i>
                </a>
                <a class=\"nav__link\" href=\"#\">
                    <i class=\"fas fa-search\"></i>
                </a>
            </nav>

            <button class=\"nav-toggle\" id=\"nav_toggle\" type=\"button\">
                <span class=\"nav-toggle__item\">Menu</span>
            </button>
        </div>
    </div>
</header>", "C:\\laragon\\www\\october-first/themes/block/partials/header.htm", "");
    }
}
