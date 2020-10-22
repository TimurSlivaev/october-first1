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

/* C:\laragon\www\october-first/themes/block/partials/blog.htm */
class __TwigTemplate_51f1cb445e12445a834aa6e19cc0ff36e05742ceeda15cc7f741447adf243ee0 extends \Twig\Template
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
        $tags = array("set" => 1, "for" => 5);
        $filters = array("escape" => 8, "slice" => 9, "date" => 15);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape', 'slice', 'date'],
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 1);
        // line 2
        echo "
<div class=\"blog\">

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "    <div class=\"blog__item\">
        <div class=\"blog__header\">
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
            echo "\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 9), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 10
                echo "               
                <img class=\"blog__photo\" src=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\" alt=\"\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </a>
            <div class=\"blog__date\">
                <div class=\"blog__date-day\">";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 15), 15, $this->source), "d"), "html", null, true);
            echo "</div>
                ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, true, 16), 16, $this->source), "M"), "html", null, true);
            echo "
            </div>
        </div>
        <div class=\"blog__content\">
            <div class=\"blog__title\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</a>
            </div>
            <div class=\"blog__text\">";
            // line 23
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</div>
        </div>
        <div class=\"blog__footer\">
            <div class=\"blog-stat\">
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-eye\"></i> ";
            // line 28
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "views", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "
                </span>
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-comment-dots\"></i> 17
                </span>
            </div>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
    
</div><!-- /.blog -->";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\october-first/themes/block/partials/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 37,  127 => 28,  119 => 23,  112 => 21,  104 => 16,  100 => 15,  96 => 13,  88 => 11,  85 => 10,  81 => 9,  77 => 8,  73 => 6,  69 => 5,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set posts = blogPosts.posts %}

<div class=\"blog\">

    {% for post in posts %}
    <div class=\"blog__item\">
        <div class=\"blog__header\">
            <a href=\"{{ post.url }}\">
                {% for image in post.featured_images|slice(0,1) %}
               
                <img class=\"blog__photo\" src=\"{{ image.path }}\" alt=\"\">
                {% endfor %}
            </a>
            <div class=\"blog__date\">
                <div class=\"blog__date-day\">{{ post.published_at|date('d') }}</div>
                {{ post.published_at|date('M') }}
            </div>
        </div>
        <div class=\"blog__content\">
            <div class=\"blog__title\">
                <a href=\"{{ post.url }}\">{{ post.title }}</a>
            </div>
            <div class=\"blog__text\">{{ post.excerpt }}</div>
        </div>
        <div class=\"blog__footer\">
            <div class=\"blog-stat\">
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-eye\"></i> {{ post.views }}
                </span>
                <span class=\"blog-stat__item\">
                    <i class=\"far fa-comment-dots\"></i> 17
                </span>
            </div>
        </div>
    </div>
    {% endfor %}

    
</div><!-- /.blog -->", "C:\\laragon\\www\\october-first/themes/block/partials/blog.htm", "");
    }
}
