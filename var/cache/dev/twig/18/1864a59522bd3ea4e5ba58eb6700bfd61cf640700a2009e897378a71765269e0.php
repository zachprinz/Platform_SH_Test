<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a07a58580a6a4c35dd9d460bed61abe2ae64e79593313231181467925c88ce54 extends Twig_Template
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
        $__internal_07e63d495bc1ed0cc4d53419a092b1409e78f09c976dd59bdff184e806ed36a0 = $this->env->getExtension("native_profiler");
        $__internal_07e63d495bc1ed0cc4d53419a092b1409e78f09c976dd59bdff184e806ed36a0->enter($__internal_07e63d495bc1ed0cc4d53419a092b1409e78f09c976dd59bdff184e806ed36a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07e63d495bc1ed0cc4d53419a092b1409e78f09c976dd59bdff184e806ed36a0->leave($__internal_07e63d495bc1ed0cc4d53419a092b1409e78f09c976dd59bdff184e806ed36a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d2f6467d7aa8c1ee46ff490842bf900d8535af4dbcabb0b92b052d470a9266dc = $this->env->getExtension("native_profiler");
        $__internal_d2f6467d7aa8c1ee46ff490842bf900d8535af4dbcabb0b92b052d470a9266dc->enter($__internal_d2f6467d7aa8c1ee46ff490842bf900d8535af4dbcabb0b92b052d470a9266dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d2f6467d7aa8c1ee46ff490842bf900d8535af4dbcabb0b92b052d470a9266dc->leave($__internal_d2f6467d7aa8c1ee46ff490842bf900d8535af4dbcabb0b92b052d470a9266dc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c7dbab39faa3b91a064bfdb8161eb55f5cc76bbac19917f5a1d8e0f8eba0e63 = $this->env->getExtension("native_profiler");
        $__internal_1c7dbab39faa3b91a064bfdb8161eb55f5cc76bbac19917f5a1d8e0f8eba0e63->enter($__internal_1c7dbab39faa3b91a064bfdb8161eb55f5cc76bbac19917f5a1d8e0f8eba0e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1c7dbab39faa3b91a064bfdb8161eb55f5cc76bbac19917f5a1d8e0f8eba0e63->leave($__internal_1c7dbab39faa3b91a064bfdb8161eb55f5cc76bbac19917f5a1d8e0f8eba0e63_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40bc4d907f0d8ee7a424de969efbbef053b0933c6ec03fc327f26a77220e532b = $this->env->getExtension("native_profiler");
        $__internal_40bc4d907f0d8ee7a424de969efbbef053b0933c6ec03fc327f26a77220e532b->enter($__internal_40bc4d907f0d8ee7a424de969efbbef053b0933c6ec03fc327f26a77220e532b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_40bc4d907f0d8ee7a424de969efbbef053b0933c6ec03fc327f26a77220e532b->leave($__internal_40bc4d907f0d8ee7a424de969efbbef053b0933c6ec03fc327f26a77220e532b_prof);

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
