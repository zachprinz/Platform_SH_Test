<?php

/* topic/show.html.twig */
class __TwigTemplate_6e78925b5b5edad33868c75e285f4eb09f6c8f77b6ce2abb33370cdefee495e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("topic.html.twig", "topic/show.html.twig", 1);
        $this->blocks = array(
            'phone_topic_label' => array($this, 'block_phone_topic_label'),
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
        $__internal_63c48e7c141e1bece312425342cea89ccffd5bf8d6670304208e78e44bc7ba7a = $this->env->getExtension("native_profiler");
        $__internal_63c48e7c141e1bece312425342cea89ccffd5bf8d6670304208e78e44bc7ba7a->enter($__internal_63c48e7c141e1bece312425342cea89ccffd5bf8d6670304208e78e44bc7ba7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topic/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c48e7c141e1bece312425342cea89ccffd5bf8d6670304208e78e44bc7ba7a->leave($__internal_63c48e7c141e1bece312425342cea89ccffd5bf8d6670304208e78e44bc7ba7a_prof);

    }

    // line 3
    public function block_phone_topic_label($context, array $blocks = array())
    {
        $__internal_ef8183e550f7985f2533b507f7f80f6622b56bd109436c1aacb8a3f7e9a680dd = $this->env->getExtension("native_profiler");
        $__internal_ef8183e550f7985f2533b507f7f80f6622b56bd109436c1aacb8a3f7e9a680dd->enter($__internal_ef8183e550f7985f2533b507f7f80f6622b56bd109436c1aacb8a3f7e9a680dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "phone_topic_label"));

        // line 4
        echo "    <h3 id=\"mobile_topic_label\">";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["topicName"]) ? $context["topicName"] : $this->getContext($context, "topicName"))), "html", null, true);
        echo ":</h3>
";
        
        $__internal_ef8183e550f7985f2533b507f7f80f6622b56bd109436c1aacb8a3f7e9a680dd->leave($__internal_ef8183e550f7985f2533b507f7f80f6622b56bd109436c1aacb8a3f7e9a680dd_prof);

    }

    // line 7
    public function block_overview_text($context, array $blocks = array())
    {
        $__internal_dd33fdc6a1a5c8eb8a23968334425300b7292a79e7476991f47d3ae319633f4e = $this->env->getExtension("native_profiler");
        $__internal_dd33fdc6a1a5c8eb8a23968334425300b7292a79e7476991f47d3ae319633f4e->enter($__internal_dd33fdc6a1a5c8eb8a23968334425300b7292a79e7476991f47d3ae319633f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "overview_text"));

        // line 8
        echo "    <p style=\"margin-bottom:0px;display:inline;\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 10
            echo "            This is where all of the overview for ";
            echo twig_escape_filter($this->env, (isset($context["topicName"]) ? $context["topicName"] : $this->getContext($context, "topicName")), "html", null, true);
            echo " will go.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </p>
";
        
        $__internal_dd33fdc6a1a5c8eb8a23968334425300b7292a79e7476991f47d3ae319633f4e->leave($__internal_dd33fdc6a1a5c8eb8a23968334425300b7292a79e7476991f47d3ae319633f4e_prof);

    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        $__internal_b83329121a3f4ab053e74ffb906e017dcf37ee0d636593d464cf03187d6e6459 = $this->env->getExtension("native_profiler");
        $__internal_b83329121a3f4ab053e74ffb906e017dcf37ee0d636593d464cf03187d6e6459->enter($__internal_b83329121a3f4ab053e74ffb906e017dcf37ee0d636593d464cf03187d6e6459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 16
        echo "    <title> Cognized | ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["topicName"]) ? $context["topicName"] : $this->getContext($context, "topicName"))), "html", null, true);
        echo "</title>
";
        
        $__internal_b83329121a3f4ab053e74ffb906e017dcf37ee0d636593d464cf03187d6e6459->leave($__internal_b83329121a3f4ab053e74ffb906e017dcf37ee0d636593d464cf03187d6e6459_prof);

    }

    // line 19
    public function block_topic_label($context, array $blocks = array())
    {
        $__internal_216adaa5cb8ea87b712a0f212ca85cc0e2ef79ce9b983e7b890af2f5a7f79dcb = $this->env->getExtension("native_profiler");
        $__internal_216adaa5cb8ea87b712a0f212ca85cc0e2ef79ce9b983e7b890af2f5a7f79dcb->enter($__internal_216adaa5cb8ea87b712a0f212ca85cc0e2ef79ce9b983e7b890af2f5a7f79dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topic_label"));

        // line 20
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["topicName"]) ? $context["topicName"] : $this->getContext($context, "topicName"))), "html", null, true);
        echo "
";
        
        $__internal_216adaa5cb8ea87b712a0f212ca85cc0e2ef79ce9b983e7b890af2f5a7f79dcb->leave($__internal_216adaa5cb8ea87b712a0f212ca85cc0e2ef79ce9b983e7b890af2f5a7f79dcb_prof);

    }

    // line 23
    public function block_subject_label($context, array $blocks = array())
    {
        $__internal_89102163ed18c9adb02460816b27c14e60df419cc0a32ec18437c22e949dbc6d = $this->env->getExtension("native_profiler");
        $__internal_89102163ed18c9adb02460816b27c14e60df419cc0a32ec18437c22e949dbc6d->enter($__internal_89102163ed18c9adb02460816b27c14e60df419cc0a32ec18437c22e949dbc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject_label"));

        // line 24
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["subjectName"]) ? $context["subjectName"] : $this->getContext($context, "subjectName"))), "html", null, true);
        echo "
";
        
        $__internal_89102163ed18c9adb02460816b27c14e60df419cc0a32ec18437c22e949dbc6d->leave($__internal_89102163ed18c9adb02460816b27c14e60df419cc0a32ec18437c22e949dbc6d_prof);

    }

    // line 27
    public function block_content_filter_buttons($context, array $blocks = array())
    {
        $__internal_f5af1142e3caf242f41bb4e0189383cc9b4d87233759bab33cf9fb71852ed6ab = $this->env->getExtension("native_profiler");
        $__internal_f5af1142e3caf242f41bb4e0189383cc9b4d87233759bab33cf9fb71852ed6ab->enter($__internal_f5af1142e3caf242f41bb4e0189383cc9b4d87233759bab33cf9fb71852ed6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_filter_buttons"));

        // line 28
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content_types"]) ? $context["content_types"] : $this->getContext($context, "content_types")));
        foreach ($context['_seq'] as $context["_key"] => $context["content_type"]) {
            // line 29
            echo "        <button type=\"button\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["content_type"]), "html", null, true);
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f5af1142e3caf242f41bb4e0189383cc9b4d87233759bab33cf9fb71852ed6ab->leave($__internal_f5af1142e3caf242f41bb4e0189383cc9b4d87233759bab33cf9fb71852ed6ab_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_e49e3b81ef6e6f81928741c67e665cc10f33c50f992fa32ac3fa708fce752ea4 = $this->env->getExtension("native_profiler");
        $__internal_e49e3b81ef6e6f81928741c67e665cc10f33c50f992fa32ac3fa708fce752ea4->enter($__internal_e49e3b81ef6e6f81928741c67e665cc10f33c50f992fa32ac3fa708fce752ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 34
        echo "    <blockquote class=\"embedly-card\" data-card-key=\"d1a1c1af52fd48a59c8da3ee0e7fe2d4\" data-card-align=\"right\">
        <h4><a href=\"https://www.youtube.com/watch?v=p_o4aY7xkXg\">Minute Physics: What is Gravity?</a></h4>
        <p>One Minute Physics provides an energetic and entertaining view of old and new problems in physics -- all in one minute! In this episode, we discuss the basic nature of gravity, one of the four fundamental forces in our universe. Come back for a new video every week!</p>
    </blockquote>
    <script async src=\"//cdn.embedly.com/widgets/platform.js\" charset=\"UTF-8\"></script>
";
        
        $__internal_e49e3b81ef6e6f81928741c67e665cc10f33c50f992fa32ac3fa708fce752ea4->leave($__internal_e49e3b81ef6e6f81928741c67e665cc10f33c50f992fa32ac3fa708fce752ea4_prof);

    }

    // line 41
    public function block_author_block($context, array $blocks = array())
    {
        $__internal_b5c195ba984aea35f34b9981295fccfd8cdb7b6ff04649f5d190a76ea63c7bad = $this->env->getExtension("native_profiler");
        $__internal_b5c195ba984aea35f34b9981295fccfd8cdb7b6ff04649f5d190a76ea63c7bad->enter($__internal_b5c195ba984aea35f34b9981295fccfd8cdb7b6ff04649f5d190a76ea63c7bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "author_block"));

        // line 42
        echo "    <div id=\"about_the_author_panel\" class=\"panel panel-default card\" align=\"center\">
        <div class=\"panel-heading\" style=\"padding-top:5px;padding-left:5px;padding-right:5px;padding-bottom:0px;background-color: #DEDEDE;border-width: 1px;border-bottom-style: solid;\">
            <h3 class=\"panel-title\" style=\"margin-bottom:2px;\" align=\"left\">About the Author</h3>
        </div>
        <div class=\"panel-body\" align=\"left\" style=\"margin-left: 5px; margin-top: 5px;\">
            This is where users will be able to support the author of the content.
        </div>
    </div>
";
        
        $__internal_b5c195ba984aea35f34b9981295fccfd8cdb7b6ff04649f5d190a76ea63c7bad->leave($__internal_b5c195ba984aea35f34b9981295fccfd8cdb7b6ff04649f5d190a76ea63c7bad_prof);

    }

    // line 52
    public function block_content_column($context, array $blocks = array())
    {
        $__internal_3b5aec7d2d4d97f7be02dc18b5e0fb324701a2343569cc85ac7f4d3c2cb8c9ab = $this->env->getExtension("native_profiler");
        $__internal_3b5aec7d2d4d97f7be02dc18b5e0fb324701a2343569cc85ac7f4d3c2cb8c9ab->enter($__internal_3b5aec7d2d4d97f7be02dc18b5e0fb324701a2343569cc85ac7f4d3c2cb8c9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_column"));

        // line 53
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 54
            echo "        <div class=\"card\">
            <div class=\"card-block\">
                <h4 class=\"card-title\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materials"]) ? $context["materials"] : $this->getContext($context, "materials")), ($context["i"] % 3), array(), "array"), "html", null, true);
            echo "</h4>
                <h6 class=\"card-subtitle text-muted\">Support card subtitle</h6>
            </div>
            <i class=\"fa fa-leaf fa-5x\"></i>
            <div class=\"card-block\">
                <p class=\"card-text\">
                    ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_random($this->env, 4)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 63
                echo "                        This is some text that will make up the body of the card.
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
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
        
        $__internal_3b5aec7d2d4d97f7be02dc18b5e0fb324701a2343569cc85ac7f4d3c2cb8c9ab->leave($__internal_3b5aec7d2d4d97f7be02dc18b5e0fb324701a2343569cc85ac7f4d3c2cb8c9ab_prof);

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
        return array (  233 => 65,  226 => 63,  222 => 62,  213 => 56,  209 => 54,  204 => 53,  198 => 52,  183 => 42,  177 => 41,  165 => 34,  159 => 33,  145 => 29,  140 => 28,  134 => 27,  125 => 24,  119 => 23,  110 => 20,  104 => 19,  94 => 16,  88 => 15,  80 => 12,  71 => 10,  67 => 9,  64 => 8,  58 => 7,  48 => 4,  42 => 3,  11 => 1,);
    }
}
/* {% extends 'topic.html.twig' %}*/
/* */
/* {% block phone_topic_label %}*/
/*     <h3 id="mobile_topic_label">{{ topicName|capitalize }}:</h3>*/
/* {% endblock %}*/
/* */
/* {% block overview_text %}*/
/*     <p style="margin-bottom:0px;display:inline;">*/
/*         {% for i in 0..10 %}*/
/*             This is where all of the overview for {{ topicName }} will go.*/
/*         {% endfor %}*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     <title> Cognized | {{ topicName|capitalize }}</title>*/
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
