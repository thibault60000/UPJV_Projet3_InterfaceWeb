<?php

/* themes/upjv/templates/menu/menu--main.html.twig */
class __TwigTemplate_9f28ae1d26cb68c02bf2a4f1a617e4e781f96ece23bb59bfaeeccc6aff33fcb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        $this->parent = $this->loadTemplate("menu.html.twig", "themes/upjv/templates/menu/menu--main.html.twig", 18);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 20);
        $filters = array("clean_class" => 22);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 20
        $context["classes"] = array(0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(        // line 22
($context["menu_name"] ?? null))), 2 => "nav", 3 => "navbar-nav");
        // line 18
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "themes/upjv/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  49 => 22,  48 => 20,  11 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/upjv/templates/menu/menu--main.html.twig", "C:\\wamp64\\www\\drupal-8.5.3\\themes\\upjv\\templates\\menu\\menu--main.html.twig");
    }
}
