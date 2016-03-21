<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_343bd845a72a460888f141aaabef8f3e56fa68cd1379cdd26ea7cb81492366d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ccaf207cf586692a32e94510a81525c3bb975289a05f277d2a1e696255cffa2 = $this->env->getExtension("native_profiler");
        $__internal_5ccaf207cf586692a32e94510a81525c3bb975289a05f277d2a1e696255cffa2->enter($__internal_5ccaf207cf586692a32e94510a81525c3bb975289a05f277d2a1e696255cffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ccaf207cf586692a32e94510a81525c3bb975289a05f277d2a1e696255cffa2->leave($__internal_5ccaf207cf586692a32e94510a81525c3bb975289a05f277d2a1e696255cffa2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7e4a580b73a0f1be5a071e9a3dff2bebf7123c6e1c27de8e85390eb772e1c2c6 = $this->env->getExtension("native_profiler");
        $__internal_7e4a580b73a0f1be5a071e9a3dff2bebf7123c6e1c27de8e85390eb772e1c2c6->enter($__internal_7e4a580b73a0f1be5a071e9a3dff2bebf7123c6e1c27de8e85390eb772e1c2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7e4a580b73a0f1be5a071e9a3dff2bebf7123c6e1c27de8e85390eb772e1c2c6->leave($__internal_7e4a580b73a0f1be5a071e9a3dff2bebf7123c6e1c27de8e85390eb772e1c2c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6342f883008929babbc43b38684901d7c5056f35eb1fc4365d936ea553ee0a24 = $this->env->getExtension("native_profiler");
        $__internal_6342f883008929babbc43b38684901d7c5056f35eb1fc4365d936ea553ee0a24->enter($__internal_6342f883008929babbc43b38684901d7c5056f35eb1fc4365d936ea553ee0a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6342f883008929babbc43b38684901d7c5056f35eb1fc4365d936ea553ee0a24->leave($__internal_6342f883008929babbc43b38684901d7c5056f35eb1fc4365d936ea553ee0a24_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_54068d0365474823dbb9f84c9c9f736631cc6ea299f9f2c9a44aa9e49917e448 = $this->env->getExtension("native_profiler");
        $__internal_54068d0365474823dbb9f84c9c9f736631cc6ea299f9f2c9a44aa9e49917e448->enter($__internal_54068d0365474823dbb9f84c9c9f736631cc6ea299f9f2c9a44aa9e49917e448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_54068d0365474823dbb9f84c9c9f736631cc6ea299f9f2c9a44aa9e49917e448->leave($__internal_54068d0365474823dbb9f84c9c9f736631cc6ea299f9f2c9a44aa9e49917e448_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
