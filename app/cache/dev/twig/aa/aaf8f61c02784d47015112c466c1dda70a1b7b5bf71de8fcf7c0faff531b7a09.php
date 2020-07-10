<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_0d589df2824a514cacb3068f951d979be71b0d060aaf4604915c01da395b575b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        <a href=\"https://symfony.com/\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg>
            <span>
                ";
        // line 9
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", [])) {
            // line 10
            echo "                    ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", []), "html", null, true);
            echo "
                ";
        } elseif ($this->getAttribute(        // line 11
($context["collector"] ?? null), "symfonyState", [], "any", true, true)) {
            // line 12
            echo "                    ";
            if (("unknown" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", []))) {
                // line 13
                echo "<span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\" title=\"Unable to retrieve information about the Symfony version.\">";
            } elseif (("eol" == $this->getAttribute(            // line 14
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", []))) {
                // line 15
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-red\" title=\"This Symfony version will no longer receive security fixes.\">";
            } elseif (("eom" == $this->getAttribute(            // line 16
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", []))) {
                // line 17
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-yellow\" title=\"This Symfony version will only receive security fixes.\">";
            } elseif (("dev" == $this->getAttribute(            // line 18
($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", []))) {
                // line 19
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-yellow\" title=\"This Symfony version is still in the development phase.\">";
            } else {
                // line 21
                echo "<span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            }
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", []), "html", null, true);
            echo "</span>
                ";
        }
        // line 25
        echo "            </span>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        ob_start();
        // line 29
        echo "        ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", [])) {
            // line 30
            echo "            <div class=\"sf-toolbar-info-piece\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", []), "html", null, true);
            echo " <b>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", []), "html", null, true);
            echo "</b>
            </div>
        ";
        }
        // line 34
        echo "        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", []), "html", null, true);
        echo "</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"https://symfony.com/doc/";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", []), "html", null, true);
        echo "/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 41)->display(twig_array_merge($context, ["link" => false]));
        // line 42
        echo "
    ";
        // line 44
        echo "    ";
        ob_start();
        // line 45
        echo "        <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><g><path fill=\"#010202\" d=\"M8 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 c0 0-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C8.3 11.7 8.1 11.6 8 11.5z\"/><path fill=\"#010202\" d=\"M21.3 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 s-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C21.6 11.7 21.5 11.6 21.3 11.5z\"/><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M9.8 12.9 c0 0.2-0.1 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.3 0.5S8.8 14.9 8.7 15c-0.2 0.2-0.4 0.3-0.6 0.5 c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1c-0.2 0-0.4 0-0.7 0H4.8L4.2 18H2.7l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2 c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9C10 12.1 9.9 12.4 9.8 12.9z M13.7 15.9l0.9-3.5c0.1-0.2 0.1-0.3 0.1-0.5 c0-0.1 0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1 0-0.3-0.1-0.5-0.1l-1.2 0l-1.2 4.5H10L12.1 8h1.5l-0.6 2.1h1.4 c0.4 0 0.7 0 1 0.1s0.5 0.2 0.7 0.3c0.2 0.1 0.3 0.4 0.3 0.6c0 0.3 0 0.6-0.1 1l-1 3.7H13.7z M23 13.4c-0.1 0.2-0.2 0.4-0.2 0.6 c-0.1 0.2-0.2 0.4-0.3 0.5S22.2 14.9 22 15c-0.2 0.2-0.4 0.3-0.6 0.5c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1 c-0.2 0-0.4 0-0.7 0h-1.3L17.6 18h-1.5l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9 c0 0.3 0 0.7-0.1 1.1C23.1 13.1 23.1 13.3 23 13.4z\"/></g></svg>
        </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 49
        echo "    ";
        ob_start();
        // line 50
        echo "        ";
        ob_start();
        // line 51
        echo "            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", []), "html", null, true);
        echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 57
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", [])) ? ("green") : ("red"));
        echo "\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 58
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasaccelerator", [])) ? ("green") : ("red"));
        echo "\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sapiName", []), "html", null, true);
        echo "</span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 65
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 66
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 66)->display(twig_array_merge($context, ["link" => false]));
        // line 67
        echo "
    ";
        // line 69
        echo "    ";
        ob_start();
        echo "sf-toolbar-status sf-toolbar-status-";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", [])) ? ("green") : ("red"));
        $context["debug_status_class"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 70
        echo "    ";
        ob_start();
        // line 71
        echo "        <svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg>
        <span class=\"sf-toolbar-info-piece-additional-detail ";
        // line 72
        echo twig_escape_filter($this->env, ($context["debug_status_class"] ?? $this->getContext($context, "debug_status_class")), "html", null, true);
        echo "\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 73
        echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "html", null, true);
        echo "</span>
        ";
        // line 74
        if ((("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", [])) || ("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", [])))) {
            // line 75
            echo "            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", []), "html", null, true);
            echo "</span>
                <span>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", []), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 80
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 81
        echo "    ";
        ob_start();
        // line 82
        echo "        ";
        ob_start();
        // line 83
        echo "            ";
        if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", []))) {
            // line 84
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", []), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 89
        echo "            ";
        if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", []))) {
            // line 90
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", []), "html", null, true);
            echo "</span>
                </div>
            ";
        }
        // line 95
        echo "            ";
        if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", []))) {
            // line 96
            echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"";
            // line 98
            echo twig_escape_filter($this->env, ($context["debug_status_class"] ?? $this->getContext($context, "debug_status_class")), "html", null, true);
            echo "\">";
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", [])) ? ("en") : ("dis"));
            echo "abled</span>
                </div>
            ";
        }
        // line 101
        echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    ";
        // line 104
        if (($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))) {
            // line 105
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", []), "html", null, true);
            echo "</a>
                    ";
        } else {
            // line 107
            echo "                        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", []), "html", null, true);
            echo "
                    ";
        }
        // line 109
        echo "                </span>
            </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 112
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 113
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/config.html.twig", 113)->display(twig_array_merge($context, ["link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 116
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 117
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg></span>
    <strong>Config</strong>
</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_panel($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 124
        echo "    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            ";
        // line 131
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", [])) {
            // line 132
            echo "                <th>Application</th>
                <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", []), "html", null, true);
            echo " (on Symfony ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", []), "html", null, true);
            echo ")</td>
            ";
        } else {
            // line 135
            echo "                <th>Symfony version</th>
                <td>";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", []), "html", null, true);
            echo "</td>
            ";
        }
        // line 138
        echo "        </tr>
        ";
        // line 139
        if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", []))) {
            // line 140
            echo "            <tr>
                <th>Application name</th>
                <td>";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "appname", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 145
        echo "        ";
        if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", []))) {
            // line 146
            echo "            <tr>
                <th>Environment</th>
                <td>";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "env", []), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        // line 151
        echo "        ";
        if (("n/a" != $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", []))) {
            // line 152
            echo "            <tr>
                <th>Debug</th>
                <td>";
            // line 154
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "debug", [])) ? ("enabled") : ("disabled"));
            echo "</td>
            </tr>
        ";
        }
        // line 157
        echo "    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>";
        // line 167
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", []), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>";
        // line 171
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", [])) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>";
        // line 175
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasaccelerator", [])) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>";
        // line 179
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxcache", [])) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>";
        // line 183
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasapc", [])) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>";
        // line 187
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "haszendopcache", [])) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>";
        // line 191
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "haseaccelerator", [])) ? ("enabled") : ("disabled"));
        echo "</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    ";
        // line 199
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", [])) {
            // line 200
            echo "        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            ";
            // line 206
            $context["bundles"] = $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "bundles", []);
            // line 207
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter(($context["bundles"] ?? $this->getContext($context, "bundles")))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 208
                echo "            <tr>
                <th>";
                // line 209
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</th>
                <td>";
                // line 210
                echo twig_escape_filter($this->env, $this->getAttribute(($context["bundles"] ?? $this->getContext($context, "bundles")), $context["name"], [], "array"), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "        </table>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  515 => 213,  506 => 210,  502 => 209,  499 => 208,  494 => 207,  492 => 206,  484 => 200,  482 => 199,  475 => 195,  468 => 191,  461 => 187,  454 => 183,  447 => 179,  440 => 175,  433 => 171,  426 => 167,  414 => 157,  408 => 154,  404 => 152,  401 => 151,  395 => 148,  391 => 146,  388 => 145,  382 => 142,  378 => 140,  376 => 139,  373 => 138,  368 => 136,  365 => 135,  356 => 133,  353 => 132,  351 => 131,  342 => 124,  336 => 123,  325 => 117,  319 => 116,  311 => 113,  308 => 112,  303 => 109,  297 => 107,  289 => 105,  287 => 104,  282 => 101,  274 => 98,  270 => 96,  267 => 95,  261 => 92,  257 => 90,  254 => 89,  248 => 86,  244 => 84,  241 => 83,  238 => 82,  235 => 81,  232 => 80,  226 => 77,  222 => 76,  219 => 75,  217 => 74,  213 => 73,  209 => 72,  206 => 71,  203 => 70,  197 => 69,  194 => 67,  191 => 66,  188 => 65,  182 => 62,  175 => 58,  171 => 57,  164 => 53,  160 => 51,  157 => 50,  154 => 49,  146 => 45,  143 => 44,  140 => 42,  137 => 41,  131 => 38,  125 => 35,  122 => 34,  114 => 31,  111 => 30,  108 => 29,  105 => 28,  100 => 25,  95 => 23,  92 => 21,  89 => 19,  87 => 18,  85 => 17,  83 => 16,  81 => 15,  79 => 14,  77 => 13,  74 => 12,  72 => 11,  65 => 10,  63 => 9,  58 => 6,  55 => 5,  53 => 4,  47 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {# Symfony Logo #}
    {% set icon %}
        <a href=\"https://symfony.com/\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg>
            <span>
                {% if collector.applicationname %}
                    {{ collector.applicationname }} {{ collector.applicationversion }}
                {% elseif collector.symfonyState is defined %}
                    {% if 'unknown' == collector.symfonyState -%}
                    <span class=\"sf-toolbar-status sf-toolbar-info-piece-additional\" title=\"Unable to retrieve information about the Symfony version.\">
                    {%- elseif 'eol' == collector.symfonyState -%}
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\" title=\"This Symfony version will no longer receive security fixes.\">
                    {%- elseif 'eom' == collector.symfonyState -%}
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\" title=\"This Symfony version will only receive security fixes.\">
                    {%- elseif 'dev' == collector.symfonyState -%}
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\" title=\"This Symfony version is still in the development phase.\">
                    {%- else -%}
                    <span class=\"sf-toolbar-status sf-toolbar-status-green\">
                    {%- endif -%}
                    {{ collector.symfonyversion }}</span>
                {% endif %}
            </span>
        </a>
    {% endset %}
    {% set text %}
        {% if collector.applicationname %}
            <div class=\"sf-toolbar-info-piece\">
                {{ collector.applicationname }} <b>{{ collector.applicationversion }}</b>
            </div>
        {% endif %}
        <div class=\"sf-toolbar-info-piece\">
            Symfony <b>{{ collector.symfonyversion }}</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">Symfony Documentation</a>
        </div>
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}

    {# PHP Information #}
    {% set icon %}
        <a href=\"{{ path('_profiler_phpinfo') }}\">
            <svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><g><path fill=\"#010202\" d=\"M8 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 c0 0-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C8.3 11.7 8.1 11.6 8 11.5z\"/><path fill=\"#010202\" d=\"M21.3 11.5c-0.2-0.1-0.4-0.1-0.7-0.1s-0.5 0-0.8 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0c0 0-0.1 0-0.1 0 s-0.1 0-0.1 0v0l-0.9 3.3c0 0 0 0 0 0c0 0 0 0 0 0c0 0 0 0 0 0s0 0 0 0c0 0 0 0 0.1 0c0 0 0.1 0 0.1 0c0.3 0 0.7 0 1 0 c0.3 0 0.6-0.1 0.8-0.2c0.2-0.1 0.4-0.3 0.6-0.5c0.2-0.3 0.3-0.6 0.4-1.1c0.1-0.4 0.1-0.7 0.1-0.9C21.6 11.7 21.5 11.6 21.3 11.5z\"/><path fill=\"#010202\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M9.8 12.9 c0 0.2-0.1 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.2 0.6c-0.1 0.2-0.2 0.4-0.3 0.5S8.8 14.9 8.7 15c-0.2 0.2-0.4 0.3-0.6 0.5 c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1c-0.2 0-0.4 0-0.7 0H4.8L4.2 18H2.7l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2 c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9C10 12.1 9.9 12.4 9.8 12.9z M13.7 15.9l0.9-3.5c0.1-0.2 0.1-0.3 0.1-0.5 c0-0.1 0-0.2-0.1-0.3c-0.1-0.1-0.2-0.1-0.3-0.2c-0.1 0-0.3-0.1-0.5-0.1l-1.2 0l-1.2 4.5H10L12.1 8h1.5l-0.6 2.1h1.4 c0.4 0 0.7 0 1 0.1s0.5 0.2 0.7 0.3c0.2 0.1 0.3 0.4 0.3 0.6c0 0.3 0 0.6-0.1 1l-1 3.7H13.7z M23 13.4c-0.1 0.2-0.2 0.4-0.2 0.6 c-0.1 0.2-0.2 0.4-0.3 0.5S22.2 14.9 22 15c-0.2 0.2-0.4 0.3-0.6 0.5c-0.2 0.1-0.4 0.2-0.6 0.3c-0.2 0.1-0.4 0.1-0.6 0.1 c-0.2 0-0.4 0-0.7 0h-1.3L17.6 18h-1.5l2.1-7.9h2.9c0.4 0 0.8 0.1 1.1 0.2c0.3 0.1 0.5 0.3 0.7 0.6c0.2 0.2 0.3 0.5 0.3 0.9 c0 0.3 0 0.7-0.1 1.1C23.1 13.1 23.1 13.3 23 13.4z\"/></g></svg>
        </a>
    {% endset %}
    {% set text %}
        {% spaceless %}
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP</b>
                <span>{{ collector.phpversion }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}\">accel</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        {% endspaceless %}
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': false } %}

    {# Environment #}
    {% set debug_status_class %}sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}{% endset %}
    {% set icon %}
        <svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg>
        <span class=\"sf-toolbar-info-piece-additional-detail {{ debug_status_class }}\"> </span>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">{{ token }}</span>
        {% if 'n/a' != collector.appname or 'n/a' != collector.env %}
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-info-with-delimiter\">{{ collector.appname }}</span>
                <span>{{ collector.env }}</span>
            </span>
        {% endif %}
    {% endset %}
    {% set text %}
        {% spaceless %}
            {% if 'n/a' != collector.appname %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Name</b>
                    <span>{{ collector.appname }}</span>
                </div>
            {% endif %}
            {% if 'n/a' != collector.env %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>{{ collector.env }}</span>
                </div>
            {% endif %}
            {% if 'n/a' != collector.debug %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"{{ debug_status_class }}\">{{ collector.debug ? 'en' : 'dis' }}abled</span>
                </div>
            {% endif %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>
        {% endspaceless %}
    {% endset %}
    {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><svg width=\"21\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 21 28\" enable-background=\"new 0 0 21 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M5 17H1c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C6 16.6 5.6 17 5 17z\"/><path fill=\"#3F3F3F\" d=\"M19 17h-4c-0.5 0-1-0.4-1-1V9c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C20 16.6 19.6 17 19 17z\"/><path fill=\"#3F3F3F\" d=\"M12.1 20h-4c-0.5 0-1-0.4-1-1v-7c0-0.5 0.4-1 1-1h4c0.5 0 1 0.4 1 1v7C13.1 19.5 12.6 20 12.1 20z\"/><rect x=\"9.1\" y=\"5.8\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"16\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"2.1\" y=\"17.7\" fill=\"#3F3F3F\" width=\"2\" height=\"4.5\"/><rect x=\"9.1\" y=\"20.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"2.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/><rect x=\"16.1\" y=\"5.7\" fill=\"#3F3F3F\" width=\"2\" height=\"1.5\"/></g></svg></span>
    <strong>Config</strong>
</span>
{% endblock %}

{% block panel %}
    <h2>Project Configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            {% if collector.applicationname %}
                <th>Application</th>
                <td>{{ collector.applicationname }} {{ collector.applicationversion }} (on Symfony {{ collector.symfonyversion }})</td>
            {% else %}
                <th>Symfony version</th>
                <td>{{ collector.symfonyversion }}</td>
            {% endif %}
        </tr>
        {% if 'n/a' != collector.appname %}
            <tr>
                <th>Application name</th>
                <td>{{ collector.appname }}</td>
            </tr>
        {% endif %}
        {% if 'n/a' != collector.env %}
            <tr>
                <th>Environment</th>
                <td>{{ collector.env }}</td>
            </tr>
        {% endif %}
        {% if 'n/a' != collector.debug %}
            <tr>
                <th>Debug</th>
                <td>{{ collector.debug ? 'enabled' : 'disabled' }}</td>
            </tr>
        {% endif %}
    </table>

    <h2>PHP configuration</h2>
    <table>
        <tr>
            <th>Key</th>
            <th>Value</th>
        </tr>
        <tr>
            <th>PHP version</th>
            <td>{{ collector.phpversion }}</td>
        </tr>
        <tr>
            <th>Xdebug</th>
            <td>{{ collector.hasxdebug ? 'enabled' : 'disabled' }}</td>
        </tr>
        <tr>
            <th>PHP acceleration</th>
            <td>{{ collector.hasaccelerator ? 'enabled' : 'disabled' }}</td>
        </tr>
        <tr>
            <th>XCache</th>
            <td>{{ collector.hasxcache ? 'enabled' : 'disabled' }}</td>
        </tr>
        <tr>
            <th>APC</th>
            <td>{{ collector.hasapc ? 'enabled' : 'disabled' }}</td>
        </tr>
        <tr>
            <th>Zend OPcache</th>
            <td>{{ collector.haszendopcache ? 'enabled' : 'disabled' }}</td>
        </tr>
        <tr>
            <th>EAccelerator</th>
            <td>{{ collector.haseaccelerator ? 'enabled' : 'disabled' }}</td>
        </tr>
        <tr>
            <th>Full PHP configuration</th>
            <td><a href=\"{{ path('_profiler_phpinfo') }}\"><code>phpinfo</code></a></td>
        </tr>
    </table>

    {% if collector.bundles %}
        <h2>Active bundles</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Path</th>
            </tr>
            {% set bundles = collector.bundles %}
            {% for name in bundles|keys|sort %}
            <tr>
                <th>{{ name }}</th>
                <td>{{ bundles[name] }}</td>
            </tr>
            {% endfor %}
        </table>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/config.html.twig", "/Users/vladanjovic/restish/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/config.html.twig");
    }
}
