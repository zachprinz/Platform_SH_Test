<?php

/* topic/show.html.twig */
class __TwigTemplate_2ca5ebd84b45597509ca782f389ee02055411d4e3a311ce1647bbe5e6ace7ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("topic.html.twig", "topic/show.html.twig", 1);
        $this->blocks = array(
            'overview_text' => array($this, 'block_overview_text'),
            'title' => array($this, 'block_title'),
            'topic_label' => array($this, 'block_topic_label'),
            'subject_label' => array($this, 'block_subject_label'),
            'content_filter_buttons' => array($this, 'block_content_filter_buttons'),
            'content' => array($this, 'block_content'),
            'author_block' => array($this, 'block_author_block'),
            'content_column' => array($this, 'block_content_column'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "topic.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6a0145c8896da586b4555adccd479e11a7f4dce447fa148e9da6359b3690d9e = $this->env->getExtension("native_profiler");
        $__internal_e6a0145c8896da586b4555adccd479e11a7f4dce447fa148e9da6359b3690d9e->enter($__internal_e6a0145c8896da586b4555adccd479e11a7f4dce447fa148e9da6359b3690d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topic/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6a0145c8896da586b4555adccd479e11a7f4dce447fa148e9da6359b3690d9e->leave($__internal_e6a0145c8896da586b4555adccd479e11a7f4dce447fa148e9da6359b3690d9e_prof);

    }

    // line 3
    public function block_overview_text($context, array $blocks = array())
    {
        $__internal_97b30e1761202caf5b94c5c532d0750cd3b02b51f481432299446f9e02fb6393 = $this->env->getExtension("native_profiler");
        $__internal_97b30e1761202caf5b94c5c532d0750cd3b02b51f481432299446f9e02fb6393->enter($__internal_97b30e1761202caf5b94c5c532d0750cd3b02b51f481432299446f9e02fb6393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "overview_text"));

        // line 4
        echo "    <p style=\"margin-bottom:0px;\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            echo "            This is where all of the overview for ";
            echo twig_escape_filter($this->env, (isset($context["topicName"]) ? $context["topicName"] : $this->getContext($context, "topicName")), "html", null, true);
            echo " will go.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </p>
";
        
        $__internal_97b30e1761202caf5b94c5c532d0750cd3b02b51f481432299446f9e02fb6393->leave($__internal_97b30e1761202caf5b94c5c532d0750cd3b02b51f481432299446f9e02fb6393_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d15e7d2ae2c66333674b1eabb7ddc46cc119c24e019309b20021ca81ebc8327 = $this->env->getExtension("native_profiler");
        $__internal_0d15e7d2ae2c66333674b1eabb7ddc46cc119c24e019309b20021ca81ebc8327->enter($__internal_0d15e7d2ae2c66333674b1eabb7ddc46cc119c24e019309b20021ca81ebc8327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 12
        echo "    <title> Cognized | ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["topicName"]) ? $context["topicName"] : $this->getContext($context, "topicName"))), "html", null, true);
        echo " </title>
";
        
        $__internal_0d15e7d2ae2c66333674b1eabb7ddc46cc119c24e019309b20021ca81ebc8327->leave($__internal_0d15e7d2ae2c66333674b1eabb7ddc46cc119c24e019309b20021ca81ebc8327_prof);

    }

    // line 15
    public function block_topic_label($context, array $blocks = array())
    {
        $__internal_0f3d3c58ad07bf4b71106653642bb8a7babd8f916cbd1436a67632fc44b7d2be = $this->env->getExtension("native_profiler");
        $__internal_0f3d3c58ad07bf4b71106653642bb8a7babd8f916cbd1436a67632fc44b7d2be->enter($__internal_0f3d3c58ad07bf4b71106653642bb8a7babd8f916cbd1436a67632fc44b7d2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topic_label"));

        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["topicName"]) ? $context["topicName"] : $this->getContext($context, "topicName"))), "html", null, true);
        echo "
";
        
        $__internal_0f3d3c58ad07bf4b71106653642bb8a7babd8f916cbd1436a67632fc44b7d2be->leave($__internal_0f3d3c58ad07bf4b71106653642bb8a7babd8f916cbd1436a67632fc44b7d2be_prof);

    }

    // line 19
    public function block_subject_label($context, array $blocks = array())
    {
        $__internal_f649fa4f30af197ad557a388d91b0a1307a63a6d6f6ae6e3a114d5530ef93a4c = $this->env->getExtension("native_profiler");
        $__internal_f649fa4f30af197ad557a388d91b0a1307a63a6d6f6ae6e3a114d5530ef93a4c->enter($__internal_f649fa4f30af197ad557a388d91b0a1307a63a6d6f6ae6e3a114d5530ef93a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject_label"));

        // line 20
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["subjectName"]) ? $context["subjectName"] : $this->getContext($context, "subjectName"))), "html", null, true);
        echo "
";
        
        $__internal_f649fa4f30af197ad557a388d91b0a1307a63a6d6f6ae6e3a114d5530ef93a4c->leave($__internal_f649fa4f30af197ad557a388d91b0a1307a63a6d6f6ae6e3a114d5530ef93a4c_prof);

    }

    // line 23
    public function block_content_filter_buttons($context, array $blocks = array())
    {
        $__internal_7537ca5edd0451d143738f800f1f4c628a7ea6ea80cb71ff8c6695c9547c8978 = $this->env->getExtension("native_profiler");
        $__internal_7537ca5edd0451d143738f800f1f4c628a7ea6ea80cb71ff8c6695c9547c8978->enter($__internal_7537ca5edd0451d143738f800f1f4c628a7ea6ea80cb71ff8c6695c9547c8978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_filter_buttons"));

        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content_types"]) ? $context["content_types"] : $this->getContext($context, "content_types")));
        foreach ($context['_seq'] as $context["_key"] => $context["content_type"]) {
            // line 25
            echo "        <button type=\"button\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["content_type"]), "html", null, true);
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_7537ca5edd0451d143738f800f1f4c628a7ea6ea80cb71ff8c6695c9547c8978->leave($__internal_7537ca5edd0451d143738f800f1f4c628a7ea6ea80cb71ff8c6695c9547c8978_prof);

    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        $__internal_c59a527ee3d3260a5b4dd53421c89e96fac9e50fc9b2b45c219d2cc10c5839b5 = $this->env->getExtension("native_profiler");
        $__internal_c59a527ee3d3260a5b4dd53421c89e96fac9e50fc9b2b45c219d2cc10c5839b5->enter($__internal_c59a527ee3d3260a5b4dd53421c89e96fac9e50fc9b2b45c219d2cc10c5839b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 30
        echo "    <blockquote class=\"embedly-card\" data-card-key=\"d1a1c1af52fd48a59c8da3ee0e7fe2d4\" data-card-align=\"right\">
        <h4><a href=\"https://www.youtube.com/watch?v=p_o4aY7xkXg\">Minute Physics: What is Gravity?</a></h4>
        <p>One Minute Physics provides an energetic and entertaining view of old and new problems in physics -- all in one minute! In this episode, we discuss the basic nature of gravity, one of the four fundamental forces in our universe. Come back for a new video every week!</p>
    </blockquote>
    <script async src=\"//cdn.embedly.com/widgets/platform.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_c59a527ee3d3260a5b4dd53421c89e96fac9e50fc9b2b45c219d2cc10c5839b5->leave($__internal_c59a527ee3d3260a5b4dd53421c89e96fac9e50fc9b2b45c219d2cc10c5839b5_prof);

    }

    // line 37
    public function block_author_block($context, array $blocks = array())
    {
        $__internal_d531d45589b9d08c44a1a645c06b49c479232da30c1f5ab3dd4759a3d04da950 = $this->env->getExtension("native_profiler");
        $__internal_d531d45589b9d08c44a1a645c06b49c479232da30c1f5ab3dd4759a3d04da950->enter($__internal_d531d45589b9d08c44a1a645c06b49c479232da30c1f5ab3dd4759a3d04da950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "author_block"));

        // line 38
        echo "    <div id=\"about_the_author_panel\" class=\"panel panel-default card\" align=\"center\">
        <div class=\"panel-heading\" style=\"padding-top:5px;padding-left:5px;padding-right:5px;padding-bottom:0px;background-color: #DEDEDE;border-width: 1px;border-bottom-style: solid;\">
            <h3 class=\"panel-title\" style=\"margin-bottom:2px;\" align=\"left\">About the Author</h3>
        </div>
        <div class=\"panel-body\" align=\"left\" style=\"margin-left: 5px; margin-top: 5px;\">
            This is where users will be able to support the author of the content.
        </div>
    </div>
";
        
        $__internal_d531d45589b9d08c44a1a645c06b49c479232da30c1f5ab3dd4759a3d04da950->leave($__internal_d531d45589b9d08c44a1a645c06b49c479232da30c1f5ab3dd4759a3d04da950_prof);

    }

    // line 48
    public function block_content_column($context, array $blocks = array())
    {
        $__internal_6b455752d8664abc952c83298204ce306d6e87c2c9aea9586da40a63fd87f5c8 = $this->env->getExtension("native_profiler");
        $__internal_6b455752d8664abc952c83298204ce306d6e87c2c9aea9586da40a63fd87f5c8->enter($__internal_6b455752d8664abc952c83298204ce306d6e87c2c9aea9586da40a63fd87f5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_column"));

        // line 49
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "        <div class=\"card\">
            <div class=\"card-block\">
                <h4 class=\"card-title\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materials"]) ? $context["materials"] : $this->getContext($context, "materials")), ($context["i"] % 3), array(), "array"), "html", null, true);
            echo "</h4>
                <h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
            </div>
            <i class=\"fa fa-leaf fa-5x\"></i>
            <div class=\"card-block\">
                <p class=\"card-text\">
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_random($this->env, 4)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 59
                echo "                        This is some text that will make up the body of the card.
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                </p>
                <a href=\"#\" class=\"card-link\">Card link</a>
                <a href=\"#\" class=\"card-link\">Another link</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6b455752d8664abc952c83298204ce306d6e87c2c9aea9586da40a63fd87f5c8->leave($__internal_6b455752d8664abc952c83298204ce306d6e87c2c9aea9586da40a63fd87f5c8_prof);

    }

    public function getTemplateName()
    {
        return "topic/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 61,  209 => 59,  205 => 58,  196 => 52,  192 => 50,  187 => 49,  181 => 48,  166 => 38,  160 => 37,  148 => 30,  142 => 29,  128 => 25,  123 => 24,  117 => 23,  108 => 20,  102 => 19,  93 => 16,  87 => 15,  77 => 12,  71 => 11,  63 => 8,  54 => 6,  50 => 5,  47 => 4,  41 => 3,  11 => 1,);
    }
}
/* {% extends 'topic.html.twig' %}*/
/* */
/* {% block overview_text %}*/
/*     <p style="margin-bottom:0px;">*/
/*         {% for i in 0..10 %}*/
/*             This is where all of the overview for {{ topicName }} will go.*/
/*         {% endfor %}*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     <title> Cognized | {{ topicName|capitalize }} </title>*/
/* {% endblock %}*/
/* */
/* {% block topic_label %}*/
/* {{ topicName|capitalize }}*/
/* {% endblock %}*/
/* */
/* {% block subject_label %}*/
/* {{ subjectName|capitalize }}*/
/* {% endblock %}*/
/* */
/* {% block content_filter_buttons %}*/
/*     {% for content_type in content_types %}*/
/*         <button type="button" class="btn btn-primary">{{ content_type|capitalize }}</button>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <blockquote class="embedly-card" data-card-key="d1a1c1af52fd48a59c8da3ee0e7fe2d4" data-card-align="right">*/
/*         <h4><a href="https://www.youtube.com/watch?v=p_o4aY7xkXg">Minute Physics: What is Gravity?</a></h4>*/
/*         <p>One Minute Physics provides an energetic and entertaining view of old and new problems in physics -- all in one minute! In this episode, we discuss the basic nature of gravity, one of the four fundamental forces in our universe. Come back for a new video every week!</p>*/
/*     </blockquote>*/
/*     <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>*/
/* {% endblock %}*/
/* */
/* {% block author_block %}*/
/*     <div id="about_the_author_panel" class="panel panel-default card" align="center">*/
/*         <div class="panel-heading" style="padding-top:5px;padding-left:5px;padding-right:5px;padding-bottom:0px;background-color: #DEDEDE;border-width: 1px;border-bottom-style: solid;">*/
/*             <h3 class="panel-title" style="margin-bottom:2px;" align="left">About the Author</h3>*/
/*         </div>*/
/*         <div class="panel-body" align="left" style="margin-left: 5px; margin-top: 5px;">*/
/*             This is where users will be able to support the author of the content.*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content_column %}*/
/*     {% for i in 0..7 %}*/
/*         <div class="card">*/
/*             <div class="card-block">*/
/*                 <h4 class="card-title">{{ materials[i%3] }}</h4>*/
/*                 <h6 class="card-subtitle text-muted">Support card subtitle</h6>*/
/*             </div>*/
/*             <i class="fa fa-leaf fa-5x"></i>*/
/*             <div class="card-block">*/
/*                 <p class="card-text">*/
/*                     {% for i in 0..random(4) %}*/
/*                         This is some text that will make up the body of the card.*/
/*                         {% endfor %}*/
/*                 </p>*/
/*                 <a href="#" class="card-link">Card link</a>*/
/*                 <a href="#" class="card-link">Another link</a>*/
/*             </div>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
