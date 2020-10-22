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

/* C:\laragon\www\october-first/themes/block/partials/formsubscribe/default.htm */
class __TwigTemplate_9d800c5d2f81389de76683d561fdd3f642ac16e1ab216e3e6da1525dd699f566 extends \Twig\Template
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
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
        echo "<div class=\"card\">
    <div class=\"card-titlet\">
        <h2>SUSCRIBETE 2</h2>
    </div>

    <div class=\"card-content author\">
        <form name=\"form-subscribe-andradedev\" id=\"form-subscribe-andradedev\" data-request=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 7, $this->source), "html", null, true);
        echo "::onAddSubscriber\" data-request-update=\"'";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["__SELF__"] ?? null), 7, $this->source), "html", null, true);
        echo "::alert': '#result'\">
            <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"* Email\" required>
            <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
            <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
        </form>
    </div>

    <div class=\"card-action\">
        <button class=\"btn btn-primary btn-block\" form=\"form-subscribe-andradedev\">Subscribirse</button>
    </div>
    
    <div id=\"result\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\october-first/themes/block/partials/formsubscribe/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\">
    <div class=\"card-titlet\">
        <h2>SUSCRIBETE 2</h2>
    </div>

    <div class=\"card-content author\">
        <form name=\"form-subscribe-andradedev\" id=\"form-subscribe-andradedev\" data-request=\"{{ __SELF__ }}::onAddSubscriber\" data-request-update=\"'{{__SELF__}}::alert': '#result'\">
            <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"* Email\" required>
            <input type=\"hidden\" name=\"latitude\" id=\"latitude\">
            <input type=\"hidden\" name=\"longitude\" id=\"longitude\">
        </form>
    </div>

    <div class=\"card-action\">
        <button class=\"btn btn-primary btn-block\" form=\"form-subscribe-andradedev\">Subscribirse</button>
    </div>
    
    <div id=\"result\"></div>
</div>", "C:\\laragon\\www\\october-first/themes/block/partials/formsubscribe/default.htm", "");
    }
}
