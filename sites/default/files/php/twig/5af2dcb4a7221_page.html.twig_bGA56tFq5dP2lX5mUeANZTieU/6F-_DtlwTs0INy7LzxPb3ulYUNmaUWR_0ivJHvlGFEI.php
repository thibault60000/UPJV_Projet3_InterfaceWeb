<?php

/* themes/upjv/templates/system/page.html.twig */
class __TwigTemplate_4c148534cd20f56c48404675ea5a572d84ed6fd40e360aa113a3dce647d5cdc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 58, "block" => 59);
        $filters = array("clean_class" => 64, "t" => 110);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 55
        echo "

";
        // line 58
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 59
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 132
        echo "
";
        // line 134
        $this->displayBlock('main', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 201
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 59
    public function block_navbar($context, array $blocks = array())
    {
        // line 60
        echo "    ";
        // line 61
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 63
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 64
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 67
        echo "    <nav class=\"navbar navbar-default container\" id=\"navbar-full-top\" >
      <div class=\"container-fluid\">
      <div class=\"navbar-header\"><button aria-expanded=\"false\" class=\"navbar-toggle collapsed\" data-target=\"#bs-example-navbar-collapse-1\" data-toggle=\"collapse\" type=\"button\"><span class=\"sr-only\">Toggle navigation </span></button></div>

      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"dropdown\"><a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">UFR - Instituts - École<i class=\"fas fa-arrow-down\"></i> </a>

        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Arts</a></li>
          <li><a href=\"#\">Lettre, Physco</a></li>
          <li><a href=\"#\">Droit </a></li>
          <li><a href=\"#\">Sciences / Médecine</a></li>
        </ul>
        </li>
        <li class=\"dropdown\"><a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Recherche<i class=\"fas fa-arrow-down\"></i> </a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">Sciences</a></li>
          <li><a href=\"#\">Santé</a></li>
          <li><a href=\"#\">Ecoles doctorales</a></li>
        </ul>
        </li>
                <li class=\"dropdown\"><a aria-expanded=\"false\" aria-haspopup=\"true\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\">Accès Direct<i class=\"fas fa-arrow-down\"></i> </a>
        <ul class=\"dropdown-menu\">
          <li><a href=\"#\">ENT</a></li>
          <li><a href=\"#\">Bibliothèque</a></li>
          <li><a href=\"#\">Handicap</a></li>
        </ul>
        </li>
      </ul>
      </div>
      <!-- /.navbar-collapse --></div>
      <!-- /.container-fluid --></nav>

    <header";
        // line 101
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 102
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 103
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 105
        echo "      <div class=\"navbar-header\">
        ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 108
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 109
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 110
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 116
        echo "      </div>

      ";
        // line 119
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 120
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 121
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 124
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 125
            echo "        </div>
      ";
        }
        // line 127
        echo "    </header>


  ";
    }

    // line 134
    public function block_main($context, array $blocks = array())
    {
        // line 135
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 139
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 140
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 145
            echo "      ";
        }
        // line 146
        echo "
      ";
        // line 148
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 149
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 154
            echo "      ";
        }
        // line 155
        echo "
      ";
        // line 157
        echo "      ";
        // line 158
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 159
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 160
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 161
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 162
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 165
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 168
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 169
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 172
            echo "        ";
        }
        // line 173
        echo "
        ";
        // line 175
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 176
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 179
            echo "        ";
        }
        // line 180
        echo "
        ";
        // line 182
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 186
        echo "      </section>

      ";
        // line 189
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 190
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 195
            echo "      ";
        }
        // line 196
        echo "    </div>
  </div>
";
    }

    // line 140
    public function block_header($context, array $blocks = array())
    {
        // line 141
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 149
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 150
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 151
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 169
    public function block_highlighted($context, array $blocks = array())
    {
        // line 170
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 176
    public function block_help($context, array $blocks = array())
    {
        // line 177
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 182
    public function block_content($context, array $blocks = array())
    {
        // line 183
        echo "          <a id=\"main-content\"></a>
          ";
        // line 184
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 190
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 191
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 201
    public function block_footer($context, array $blocks = array())
    {
        // line 202
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 203
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/upjv/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 203,  357 => 202,  354 => 201,  347 => 192,  344 => 191,  341 => 190,  335 => 184,  332 => 183,  329 => 182,  322 => 177,  319 => 176,  312 => 170,  309 => 169,  302 => 151,  299 => 150,  296 => 149,  289 => 142,  286 => 141,  283 => 140,  277 => 196,  274 => 195,  271 => 190,  268 => 189,  264 => 186,  261 => 182,  258 => 180,  255 => 179,  252 => 176,  249 => 175,  246 => 173,  243 => 172,  240 => 169,  237 => 168,  231 => 165,  229 => 162,  228 => 161,  227 => 160,  226 => 159,  225 => 158,  223 => 157,  220 => 155,  217 => 154,  214 => 149,  211 => 148,  208 => 146,  205 => 145,  202 => 140,  199 => 139,  192 => 135,  189 => 134,  182 => 127,  178 => 125,  175 => 124,  169 => 121,  166 => 120,  163 => 119,  159 => 116,  150 => 110,  147 => 109,  144 => 108,  140 => 106,  137 => 105,  131 => 103,  129 => 102,  125 => 101,  89 => 67,  87 => 64,  86 => 63,  85 => 61,  83 => 60,  80 => 59,  74 => 201,  72 => 200,  69 => 199,  67 => 134,  64 => 132,  60 => 59,  58 => 58,  54 => 55,  52 => 54,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/upjv/templates/system/page.html.twig", "C:\\wamp64\\www\\drupal-8.5.3\\themes\\upjv\\templates\\system\\page.html.twig");
    }
}
