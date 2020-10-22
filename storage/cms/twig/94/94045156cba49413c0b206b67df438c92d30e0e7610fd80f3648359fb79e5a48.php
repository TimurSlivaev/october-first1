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

/* C:\laragon\www\october-first/themes/block/layouts/default.htm */
class __TwigTemplate_f6159162700224db13023caf5fd787fd4c7a9717228d0442a1e530202a1107e9 extends \Twig\Template
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
        $tags = array("component" => 8, "styles" => 9, "partial" => 12, "page" => 18, "framework" => 27, "scripts" => 28);
        $filters = array("theme" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component', 'styles', 'partial', 'page', 'framework', 'scripts'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\">
    ";
        // line 8
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("SeoCmsPage"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 9
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 10
        echo "</head>
<body>
    ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "

    
<div class=\"page\">

    ";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 19
        echo "
    ";
        // line 20
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "</div>


<script type=\"text/javascript\" src=\"jquery.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>

";
        // line 27
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 29
        echo "    
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\october-first/themes/block/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 29,  128 => 28,  117 => 27,  112 => 25,  106 => 21,  102 => 20,  99 => 19,  97 => 18,  90 => 13,  86 => 12,  82 => 10,  78 => 9,  74 => 8,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/style.css'|theme   }}\">
    {% component 'SeoCmsPage' %}
    {% styles %}
</head>
<body>
    {% partial 'header' %}


    
<div class=\"page\">

    {% page %}

    {% partial 'footer' %}
</div>


<script type=\"text/javascript\" src=\"jquery.js\"></script>
<script type=\"text/javascript\" src=\"{{ 'assets/js/app.js'|theme   }}\"></script>

{% framework extras %}
{% scripts %}
    
</body>
</html>", "C:\\laragon\\www\\october-first/themes/block/layouts/default.htm", "");
    }
}
