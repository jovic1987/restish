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

/* @WebProfiler/Collector/logger.html.twig */
class __TwigTemplate_6a337f844f07b1af24fab6a9d559b4ff3f81c3ad2780e23794ad919b5d6df45f extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/logger.html.twig"));

        // line 3
        $context["logger"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/logger.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", [])) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countscreams", []))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            <svg width=\"16\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 16 28\" enable-background=\"new 0 0 16 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 6h-1V5c0-0.5-0.5-1-1-1H2C1.4 4 1 4.4 1 5v2v13c0 1.6 1.3 3 3 3h11c0.5 0 1-0.5 1-1V7 C16 6.5 15.5 6 15 6z M6 15h3v3H6V15z M6 13V7h3v6H6z M15 21c0 0.6-0.4 1-1 1H5c-0.9 0-1.7-0.4-2.2-1H13c0.6 0 1-0.4 1-1V7 c0.5 0 1 0.5 1 1V21z\"/></g></svg>
            ";
            // line 9
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", [])) {
                // line 10
                echo "                ";
                $context["status_color"] = "red";
                // line 11
                echo "            ";
            } elseif ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", [])) {
                // line 12
                echo "                ";
                $context["status_color"] = "yellow";
                // line 13
                echo "            ";
            }
            // line 14
            echo "            ";
            $context["error_count"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", [])) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countscreams", []));
            // line 15
            echo "            <span class=\"sf-toolbar-status";
            if ((isset($context["status_color"]) || array_key_exists("status_color", $context))) {
                echo " sf-toolbar-status-";
                echo twig_escape_filter($this->env, ($context["status_color"] ?? $this->getContext($context, "status_color")), "html", null, true);
            }
            echo "\">";
            echo twig_escape_filter($this->env, ($context["error_count"] ?? $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", [])) {
                // line 19
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 24
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", [])) {
                // line 25
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", []), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "            ";
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countscreams", [])) {
                // line 31
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countscreams", []), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 37
            echo "        ";
            $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@WebProfiler/Collector/logger.html.twig", 37)->display(twig_array_merge($context, ["link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))]));
            // line 38
            echo "    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"26\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 32\" enable-background=\"new 0 0 26 32\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M23.6 3.4h-1.7V1.7c0-0.9-0.8-1.7-1.7-1.7H1.7C0.8 0 0 0.8 0 1.7v3.4v21.9C0 29.7 2.3 32 5.1 32h18.5 c0.9 0 1.7-0.8 1.7-1.7V5.1C25.3 4.1 24.5 3.4 23.6 3.4z M8.4 18.5h5.1v5.1H8.4V18.5z M8.4 15.2V5.1h5.1v10.1H8.4z M23.6 28.6 c0 0.9-0.8 1.7-1.7 1.7H6.7c-1.5 0-2.8-0.7-3.7-1.7h17.2c0.9 0 1.7-0.8 1.7-1.7V5.1c0.9 0 1.7 0.8 1.7 1.7V28.6z\"/></svg></span>
    <strong>Logs</strong>
    ";
        // line 45
        if ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", [])) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countscreams", []))) {
            // line 46
            echo "        ";
            $context["error_count"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "counterrors", []) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", [])) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countscreams", []));
            // line 47
            echo "        <span class=\"count\">
            <span>";
            // line 48
            echo twig_escape_filter($this->env, ($context["error_count"] ?? $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
        </span>
    ";
        }
        // line 51
        echo "</span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 54
    public function block_panel($context, array $blocks = [])
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 55
        echo "    <h2>Logs</h2>

    ";
        // line 57
        $context["priority"] = $this->getAttribute($this->getAttribute(($context["request"] ?? $this->getContext($context, "request")), "query", []), "get", [0 => "priority", 1 => 0], "method");
        // line 58
        echo "
    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        ";
        // line 68
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "priorities", []));
        foreach ($context['_seq'] as $context["value"] => $context["level"]) {
            // line 69
            echo "                            ";
            if (( !($context["priority"] ?? $this->getContext($context, "priority")) && ($context["value"] > 100))) {
                // line 70
                echo "                                ";
                $context["priority"] = $context["value"];
                // line 71
                echo "                            ";
            }
            // line 72
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
            echo ((($context["value"] == ($context["priority"] ?? $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", []), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "count", []), "html", null, true);
            echo ")</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", [])) {
            // line 75
            echo "                            ";
            if ( !($context["priority"] ?? $this->getContext($context, "priority"))) {
                // line 76
                echo "                                ";
                $context["priority"] = "-100";
                // line 77
                echo "                            ";
            }
            // line 78
            echo "                            <option value=\"-100\"";
            echo ((("-100" == ($context["priority"] ?? $this->getContext($context, "priority")))) ? (" selected") : (""));
            echo ">DEPRECATION only (";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countdeprecations", []), "html", null, true);
            echo ")</option>
                        ";
        }
        // line 80
        echo "                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    ";
        // line 89
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", [])) {
            // line 90
            echo "        <ul class=\"alt\">
            ";
            // line 91
            $context["log_loop_index"] = 0;
            // line 92
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", []));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
                // line 93
                echo "                ";
                $context["is_deprecation"] = (($this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "level", [], "any", true, true) && $this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "type", [], "any", true, true)) && ((twig_constant("E_DEPRECATED") == $this->getAttribute($this->getAttribute($context["log"], "context", []), "type", [])) || (twig_constant("E_USER_DEPRECATED") == $this->getAttribute($this->getAttribute($context["log"], "context", []), "type", []))));
                // line 94
                echo "                ";
                if ((((($context["priority"] ?? $this->getContext($context, "priority")) == "-100")) ? (($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) : (($this->getAttribute($context["log"], "priority", []) >= ($context["priority"] ?? $this->getContext($context, "priority")))))) {
                    // line 95
                    echo "                    ";
                    $context["log_loop_index"] = (($context["log_loop_index"] ?? $this->getContext($context, "log_loop_index")) + 1);
                    // line 96
                    echo "                    <li class=\"";
                    echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], ($context["log_loop_index"] ?? $this->getContext($context, "log_loop_index"))), "html", null, true);
                    if ($this->getAttribute($this->getAttribute($context["log"], "context", [], "any", false, true), "scream", [], "any", true, true)) {
                        echo " scream";
                    } elseif (($this->getAttribute($context["log"], "priority", []) >= 400)) {
                        echo " error";
                    } elseif ((($this->getAttribute($context["log"], "priority", []) >= 300) || ($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation")))) {
                        echo " warning";
                    }
                    echo "\">
                        ";
                    // line 97
                    echo $context["logger"]->getdisplay_message($this->getAttribute($context["loop"], "index", []), $context["log"], ($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation")));
                    echo "
                    </li>
                ";
                }
                // line 100
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 101
                echo "                <li><em>No logs available for this priority.</em></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        </ul>
    ";
        } else {
            // line 105
            echo "        <p>
            <em>No logs available.</em>
        </p>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 112
    public function getdisplay_message($__log_index__ = null, $__log__ = null, $__is_deprecation__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "log_index" => $__log_index__,
            "log" => $__log__,
            "is_deprecation" => $__is_deprecation__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_message"));

            // line 113
            echo "    ";
            ((($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) ? (print ("DEPRECATED")) : (print (twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "priorityName", []), "html", null, true))));
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "message", []), "html", null, true);
            echo "

    ";
            // line 115
            if (($context["is_deprecation"] ?? $this->getContext($context, "is_deprecation"))) {
                // line 116
                echo "        ";
                $context["stack"] = (($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", [], "any", false, true), "stack", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", [], "any", false, true), "stack", []), [])) : ([]));
                // line 117
                echo "        ";
                $context["id"] = ("sf-call-stack-" . ($context["log_index"] ?? $this->getContext($context, "log_index")));
                // line 118
                echo "
        ";
                // line 119
                if ($this->getAttribute($this->getAttribute(($context["log"] ?? null), "context", [], "any", false, true), "errorCount", [], "any", true, true)) {
                    // line 120
                    echo "        (";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", []), "errorCount", []), "html", null, true);
                    echo "x)
        ";
                }
                // line 122
                echo "
        ";
                // line 123
                if (($context["stack"] ?? $this->getContext($context, "stack"))) {
                    // line 124
                    echo "            <a href=\"#\" onclick=\"Sfjs.toggle('";
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "', document.getElementById('";
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "-on'), document.getElementById('";
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "-off')); return false;\">
                <img class=\"toggle\" id=\"";
                    // line 125
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
                <img class=\"toggle\" id=\"";
                    // line 126
                    echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                    echo "-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
            </a>
        ";
                }
                // line 129
                echo "
        ";
                // line 130
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stack"] ?? $this->getContext($context, "stack")));
                foreach ($context['_seq'] as $context["index"] => $context["call"]) {
                    if (($context["index"] > 1)) {
                        // line 131
                        echo "            ";
                        if (($context["index"] == 2)) {
                            // line 132
                            echo "                <ul class=\"sf-call-stack\" id=\"";
                            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
                            echo "\" style=\"display: none\">
            ";
                        }
                        // line 134
                        echo "            ";
                        if ($this->getAttribute($context["call"], "class", [], "any", true, true)) {
                            // line 135
                            echo "                ";
                            $context["from"] = (($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrClass($this->getAttribute($context["call"], "class", [])) . "::") . $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrMethod($this->getAttribute($context["call"], "function", [])));
                            // line 136
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "function", [], "any", true, true)) {
                            // line 137
                            echo "                ";
                            $context["from"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->abbrMethod($this->getAttribute($context["call"], "function", []));
                            // line 138
                            echo "            ";
                        } elseif ($this->getAttribute($context["call"], "file", [], "any", true, true)) {
                            // line 139
                            echo "                ";
                            $context["from"] = $this->getAttribute($context["call"], "file", []);
                            // line 140
                            echo "            ";
                        } else {
                            // line 141
                            echo "                ";
                            $context["from"] = "-";
                            // line 142
                            echo "            ";
                        }
                        // line 143
                        echo "
            <li>Called from ";
                        // line 144
                        echo ((($this->getAttribute($context["call"], "file", [], "any", true, true) && $this->getAttribute($context["call"], "line", [], "any", true, true))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute($context["call"], "file", []), $this->getAttribute($context["call"], "line", []), ($context["from"] ?? $this->getContext($context, "from")))) : (($context["from"] ?? $this->getContext($context, "from"))));
                        echo "</li>

            ";
                        // line 146
                        if (($context["index"] == (twig_length_filter($this->env, ($context["stack"] ?? $this->getContext($context, "stack"))) - 1))) {
                            // line 147
                            echo "                </ul>
            ";
                        }
                        // line 149
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "    ";
            } else {
                // line 151
                echo "        ";
                if (($this->getAttribute(($context["log"] ?? null), "context", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", [])))) {
                    // line 152
                    echo "            <br />
            <small>
                <strong>Context</strong>: ";
                    // line 154
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["log"] ?? $this->getContext($context, "log")), "context", []), (64 | 256)), "html", null, true);
                    echo "
            </small>
        ";
                }
                // line 157
                echo "    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/logger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 157,  496 => 154,  492 => 152,  489 => 151,  486 => 150,  479 => 149,  475 => 147,  473 => 146,  468 => 144,  465 => 143,  462 => 142,  459 => 141,  456 => 140,  453 => 139,  450 => 138,  447 => 137,  444 => 136,  441 => 135,  438 => 134,  432 => 132,  429 => 131,  424 => 130,  421 => 129,  415 => 126,  411 => 125,  402 => 124,  400 => 123,  397 => 122,  391 => 120,  389 => 119,  386 => 118,  383 => 117,  380 => 116,  378 => 115,  370 => 113,  353 => 112,  342 => 105,  338 => 103,  331 => 101,  318 => 100,  312 => 97,  300 => 96,  297 => 95,  294 => 94,  291 => 93,  272 => 92,  270 => 91,  267 => 90,  265 => 89,  254 => 80,  246 => 78,  243 => 77,  240 => 76,  237 => 75,  234 => 74,  219 => 72,  216 => 71,  213 => 70,  210 => 69,  205 => 68,  194 => 58,  192 => 57,  188 => 55,  182 => 54,  174 => 51,  168 => 48,  165 => 47,  162 => 46,  160 => 45,  155 => 42,  149 => 41,  141 => 38,  138 => 37,  135 => 36,  129 => 33,  125 => 31,  122 => 30,  116 => 27,  112 => 25,  109 => 24,  103 => 21,  99 => 19,  96 => 18,  93 => 17,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  62 => 8,  59 => 7,  56 => 6,  50 => 5,  42 => 1,  40 => 3,  31 => 1,);
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

{% import _self as logger %}

{% block toolbar %}
    {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}
        {% set icon %}
            <svg width=\"16\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 16 28\" enable-background=\"new 0 0 16 28\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 6h-1V5c0-0.5-0.5-1-1-1H2C1.4 4 1 4.4 1 5v2v13c0 1.6 1.3 3 3 3h11c0.5 0 1-0.5 1-1V7 C16 6.5 15.5 6 15 6z M6 15h3v3H6V15z M6 13V7h3v6H6z M15 21c0 0.6-0.4 1-1 1H5c-0.9 0-1.7-0.4-2.2-1H13c0.6 0 1-0.4 1-1V7 c0.5 0 1 0.5 1 1V21z\"/></g></svg>
            {% if collector.counterrors %}
                {% set status_color = \"red\" %}
            {% elseif collector.countdeprecations %}
                {% set status_color = \"yellow\" %}
            {% endif %}
            {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}
            <span class=\"sf-toolbar-status{% if status_color is defined %} sf-toolbar-status-{{ status_color }}{% endif %}\">{{ error_count }}</span>
        {% endset %}
        {% set text %}
            {% if collector.counterrors %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-red\">{{ collector.counterrors }}</span>
                </div>
            {% endif %}
            {% if collector.countdeprecations %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Deprecated Calls</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-yellow\">{{ collector.countdeprecations }}</span>
                </div>
            {% endif %}
            {% if collector.countscreams %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Silenced Errors</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status\">{{ collector.countscreams }}</span>
                </div>
            {% endif %}
        {% endset %}
        {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}
    {% endif %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><svg width=\"26\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 32\" enable-background=\"new 0 0 26 32\" xml:space=\"preserve\"><path fill=\"#3F3F3F\" d=\"M23.6 3.4h-1.7V1.7c0-0.9-0.8-1.7-1.7-1.7H1.7C0.8 0 0 0.8 0 1.7v3.4v21.9C0 29.7 2.3 32 5.1 32h18.5 c0.9 0 1.7-0.8 1.7-1.7V5.1C25.3 4.1 24.5 3.4 23.6 3.4z M8.4 18.5h5.1v5.1H8.4V18.5z M8.4 15.2V5.1h5.1v10.1H8.4z M23.6 28.6 c0 0.9-0.8 1.7-1.7 1.7H6.7c-1.5 0-2.8-0.7-3.7-1.7h17.2c0.9 0 1.7-0.8 1.7-1.7V5.1c0.9 0 1.7 0.8 1.7 1.7V28.6z\"/></svg></span>
    <strong>Logs</strong>
    {% if collector.counterrors or collector.countdeprecations or collector.countscreams %}
        {% set error_count = collector.counterrors + collector.countdeprecations + collector.countscreams %}
        <span class=\"count\">
            <span>{{ error_count }}</span>
        </span>
    {% endif %}
</span>
{% endblock %}

{% block panel %}
    <h2>Logs</h2>

    {% set priority = request.query.get('priority', 0) %}

    <table>
        <tr>
            <th>Filter</th>
            <td>
                <form id=\"priority-form\" action=\"\" method=\"get\" style=\"display: inline\">
                    <input type=\"hidden\" name=\"panel\" value=\"logger\">
                    <label for=\"priority\">Min. Priority</label>
                    <select id=\"priority\" name=\"priority\" onchange=\"document.getElementById('priority-form').submit(); \">
                        {# values < 0 are custom levels #}
                        {% for value, level in collector.priorities %}
                            {% if not priority and value > 100 %}
                                {% set priority = value %}
                            {% endif %}
                            <option value=\"{{ value }}\"{{ value == priority ? ' selected' : '' }}>{{ level.name }} ({{ level.count }})</option>
                        {% endfor %}
                        {% if collector.countdeprecations %}
                            {% if not priority %}
                                {% set priority = \"-100\" %}
                            {% endif %}
                            <option value=\"-100\"{{ \"-100\" == priority ? ' selected' : '' }}>DEPRECATION only ({{ collector.countdeprecations }})</option>
                        {% endif %}
                    </select>
                    <noscript>
                        <input type=\"submit\" value=\"refresh\">
                    </noscript>
                </form>
            </td>
        </tr>
    </table>

    {% if collector.logs %}
        <ul class=\"alt\">
            {% set log_loop_index = 0 %}
            {% for log in collector.logs %}
                {% set is_deprecation = log.context.level is defined and log.context.type is defined and (constant('E_DEPRECATED') == log.context.type or constant('E_USER_DEPRECATED') == log.context.type) %}
                {% if priority == '-100' ? is_deprecation : log.priority >= priority %}
                    {% set log_loop_index = log_loop_index + 1 %}
                    <li class=\"{{ cycle(['odd', 'even'], log_loop_index) }}{% if log.context.scream is defined %} scream{% elseif log.priority >= 400 %} error{% elseif log.priority >= 300 or is_deprecation %} warning{% endif %}\">
                        {{ logger.display_message(loop.index, log, is_deprecation) }}
                    </li>
                {% endif %}
            {% else %}
                <li><em>No logs available for this priority.</em></li>
            {% endfor %}
        </ul>
    {% else %}
        <p>
            <em>No logs available.</em>
        </p>
    {% endif %}
{% endblock %}


{% macro display_message(log_index, log, is_deprecation) %}
    {{ is_deprecation ? 'DEPRECATED' : log.priorityName }} - {{ log.message }}

    {% if is_deprecation %}
        {% set stack = log.context.stack|default([]) %}
        {% set id = 'sf-call-stack-' ~ log_index %}

        {% if log.context.errorCount is defined %}
        ({{ log.context.errorCount }}x)
        {% endif %}

        {% if stack %}
            <a href=\"#\" onclick=\"Sfjs.toggle('{{ id }}', document.getElementById('{{ id }}-on'), document.getElementById('{{ id }}-off')); return false;\">
                <img class=\"toggle\" id=\"{{ id }}-off\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display:none\">
                <img class=\"toggle\" id=\"{{ id }}-on\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display:inline\">
            </a>
        {% endif %}

        {% for index, call in stack if index > 1 %}
            {% if index == 2 %}
                <ul class=\"sf-call-stack\" id=\"{{ id }}\" style=\"display: none\">
            {% endif %}
            {% if call.class is defined %}
                {% set from = call.class|abbr_class ~ '::' ~ call.function|abbr_method() %}
            {% elseif call.function is defined %}
                {% set from = call.function|abbr_method %}
            {% elseif call.file is defined %}
                {% set from = call.file %}
            {% else %}
                {% set from = '-' %}
            {% endif %}

            <li>Called from {{ call.file is defined and call.line is defined ? call.file|format_file(call.line, from) : from|raw }}</li>

            {% if index == stack|length - 1 %}
                </ul>
            {% endif %}
        {% endfor %}
    {% else %}
        {% if log.context is defined and log.context is not empty %}
            <br />
            <small>
                <strong>Context</strong>: {{ log.context|json_encode(64 b-or 256) }}
            </small>
        {% endif %}
    {% endif %}
{% endmacro %}
", "@WebProfiler/Collector/logger.html.twig", "/Users/vladanjovic/restish/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/logger.html.twig");
    }
}
