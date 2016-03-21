<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ebd4903d205b6c13e236e7cd32c5f34868280b6984d71997fff837ee267bc98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_382fe11d8907f899ef843fe0061f8a075d42ea1b50852e511682b34f990c8342 = $this->env->getExtension("native_profiler");
        $__internal_382fe11d8907f899ef843fe0061f8a075d42ea1b50852e511682b34f990c8342->enter($__internal_382fe11d8907f899ef843fe0061f8a075d42ea1b50852e511682b34f990c8342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382fe11d8907f899ef843fe0061f8a075d42ea1b50852e511682b34f990c8342->leave($__internal_382fe11d8907f899ef843fe0061f8a075d42ea1b50852e511682b34f990c8342_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1a108a88e8fead16a10508c7284104a72828c0280ec585af3c3ed070d03c09e = $this->env->getExtension("native_profiler");
        $__internal_a1a108a88e8fead16a10508c7284104a72828c0280ec585af3c3ed070d03c09e->enter($__internal_a1a108a88e8fead16a10508c7284104a72828c0280ec585af3c3ed070d03c09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a1a108a88e8fead16a10508c7284104a72828c0280ec585af3c3ed070d03c09e->leave($__internal_a1a108a88e8fead16a10508c7284104a72828c0280ec585af3c3ed070d03c09e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b986c5440ae57ef9132ee68cf15a077731260868bce05ff16eadefe0bd72a0a = $this->env->getExtension("native_profiler");
        $__internal_9b986c5440ae57ef9132ee68cf15a077731260868bce05ff16eadefe0bd72a0a->enter($__internal_9b986c5440ae57ef9132ee68cf15a077731260868bce05ff16eadefe0bd72a0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9b986c5440ae57ef9132ee68cf15a077731260868bce05ff16eadefe0bd72a0a->leave($__internal_9b986c5440ae57ef9132ee68cf15a077731260868bce05ff16eadefe0bd72a0a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d83cb47bd31bfe02f21fd1d7c71f10d2d11ff7d7264f0fa15d31b6c17651248 = $this->env->getExtension("native_profiler");
        $__internal_1d83cb47bd31bfe02f21fd1d7c71f10d2d11ff7d7264f0fa15d31b6c17651248->enter($__internal_1d83cb47bd31bfe02f21fd1d7c71f10d2d11ff7d7264f0fa15d31b6c17651248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1d83cb47bd31bfe02f21fd1d7c71f10d2d11ff7d7264f0fa15d31b6c17651248->leave($__internal_1d83cb47bd31bfe02f21fd1d7c71f10d2d11ff7d7264f0fa15d31b6c17651248_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
