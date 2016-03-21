<?php

/* topic.html.twig */
class __TwigTemplate_43464bf5546449b3b7b85475e675cf6cd6859e5344c6b2710248b4a7e8a11fd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'subject_label' => array($this, 'block_subject_label'),
            'topic_label' => array($this, 'block_topic_label'),
            'overview_text' => array($this, 'block_overview_text'),
            'content_filter_buttons' => array($this, 'block_content_filter_buttons'),
            'content' => array($this, 'block_content'),
            'author_block' => array($this, 'block_author_block'),
            'content_column' => array($this, 'block_content_column'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d074e9e820597077966249380e72b41c02f3d9f9c49b555b8a09c40c705a7e8 = $this->env->getExtension("native_profiler");
        $__internal_9d074e9e820597077966249380e72b41c02f3d9f9c49b555b8a09c40c705a7e8->enter($__internal_9d074e9e820597077966249380e72b41c02f3d9f9c49b555b8a09c40c705a7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topic.html.twig"));

        // line 1
        echo "﻿<!DOCTYPE html>

<html style=\"height:100%; width:100%;\">

    <head>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta charset=\"utf-8\" />

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        ";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "
    </head>

    <body style=\"width:100%; height:100%; max-height:10000000px;\">

        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/init_fastclicks.js"), "html", null, true);
        echo "\"></script>

        <header>
            <h1 style=\"color:white\"> <center>Cognized <i class=\"fa fa-leaf\"></i></center> </h1>
        </header>

        <div id=\"overview\">
            <div id=\"overview_label\">
                <h3 id=\"subject_label\">";
        // line 40
        $this->displayBlock('subject_label', $context, $blocks);
        echo "</h3>
                <br/>
                <h1 id=\"topic_label\">";
        // line 42
        $this->displayBlock('topic_label', $context, $blocks);
        echo "</h1>
            </div>
            <div id=\"overview_text\" class=\"jumbotron\">
                ";
        // line 45
        $this->displayBlock('overview_text', $context, $blocks);
        // line 46
        echo "            </div>
        </div>

        <main id=\"body\">
            <nav id=\"content_filter_navbar\" class=\"navbar navbar-full navbar-dark bg-inverse\" role=\"navigation\">
                <p class=\"filter_bar_label\">Content Length</p>
                <div class=\"filter_bar_button_group btn-group\" role=\"group\" aria-label=\"...\">
                    <button type=\"button\" class=\"btn btn-primary\">Quick</button>
                    <button type=\"button\" class=\"btn btn-primary\">In Depth</button>
                </div>
                <p class=\"filter_bar_label\">Sort By</p>
                <div class=\"filter_bar_button_group btn-group\" role=\"group\" aria-label=\"...\">
                    <button type=\"button\" class=\"btn btn-primary\">Highest</button>
                    <button type=\"button\" class=\"btn btn-primary\">Recent</button>
                </div>
                <div class=\"navbar_right_element btn-group pull-right\"  data-toggle=\"buttons\" role=\"group\" aria-label=\"Basic example\" data-toggle=\"buttons\">
                    ";
        // line 62
        $this->displayBlock('content_filter_buttons', $context, $blocks);
        // line 63
        echo "                </div>
                <p class=\"filter_bar_label pull-xs-right\">Content Types</p>
            </nav>

            <div id=\"content_row\" class=\"row\">
                <div id=\"content_column\" class=\"col-md-8\"align=\"center\">
                    <div id=\"content\" style=\"display:block;flex-grow:0;align-self:center;\">
                        ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "                    </div>
                    ";
        // line 72
        $this->displayBlock('author_block', $context, $blocks);
        // line 73
        echo "                </div>
                <div id=\"content_viewer_column\" class=\"col-md-4\" >
                    <div class=\"card-columns\" style=\"-webkit-column-count: 2;\">
                        ";
        // line 76
        $this->displayBlock('content_column', $context, $blocks);
        // line 77
        echo "                    </div>
                </div>
            </div>
        </main>

        <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/resize_overview.js"), "html", null, true);
        echo "\"></script>

        <footer>
            <p><center>Copyright 2016</center></p>
        </footer>
        <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/init_perfect_scrollbar.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>
";
        
        $__internal_9d074e9e820597077966249380e72b41c02f3d9f9c49b555b8a09c40c705a7e8->leave($__internal_9d074e9e820597077966249380e72b41c02f3d9f9c49b555b8a09c40c705a7e8_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c07e926efd73427124f64671bb409ad0d15a472ef63a279bd404e27cb35cf9a8 = $this->env->getExtension("native_profiler");
        $__internal_c07e926efd73427124f64671bb409ad0d15a472ef63a279bd404e27cb35cf9a8->enter($__internal_c07e926efd73427124f64671bb409ad0d15a472ef63a279bd404e27cb35cf9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/css.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/perfect_scrollbar/css/perfect-scrollbar.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_c07e926efd73427124f64671bb409ad0d15a472ef63a279bd404e27cb35cf9a8->leave($__internal_c07e926efd73427124f64671bb409ad0d15a472ef63a279bd404e27cb35cf9a8_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_7148a39cb6db6d2dc857026e981a63ea063af581a57a20a1c7485dfd646618cc = $this->env->getExtension("native_profiler");
        $__internal_7148a39cb6db6d2dc857026e981a63ea063af581a57a20a1c7485dfd646618cc->enter($__internal_7148a39cb6db6d2dc857026e981a63ea063af581a57a20a1c7485dfd646618cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7148a39cb6db6d2dc857026e981a63ea063af581a57a20a1c7485dfd646618cc->leave($__internal_7148a39cb6db6d2dc857026e981a63ea063af581a57a20a1c7485dfd646618cc_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b7d15588bad18b0f44c724ce624c48cb677f9513092aa130fa40d7a329f8a965 = $this->env->getExtension("native_profiler");
        $__internal_b7d15588bad18b0f44c724ce624c48cb677f9513092aa130fa40d7a329f8a965->enter($__internal_b7d15588bad18b0f44c724ce624c48cb677f9513092aa130fa40d7a329f8a965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "            <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>
            <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/inobounce.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/fastclick.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/perfect_scrollbar/js/perfect-scrollbar.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b7d15588bad18b0f44c724ce624c48cb677f9513092aa130fa40d7a329f8a965->leave($__internal_b7d15588bad18b0f44c724ce624c48cb677f9513092aa130fa40d7a329f8a965_prof);

    }

    // line 40
    public function block_subject_label($context, array $blocks = array())
    {
        $__internal_3adefc58b58cb9018e297e043552d927da46e831e2cf2aa0e6ca512ab801dcd3 = $this->env->getExtension("native_profiler");
        $__internal_3adefc58b58cb9018e297e043552d927da46e831e2cf2aa0e6ca512ab801dcd3->enter($__internal_3adefc58b58cb9018e297e043552d927da46e831e2cf2aa0e6ca512ab801dcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject_label"));

        
        $__internal_3adefc58b58cb9018e297e043552d927da46e831e2cf2aa0e6ca512ab801dcd3->leave($__internal_3adefc58b58cb9018e297e043552d927da46e831e2cf2aa0e6ca512ab801dcd3_prof);

    }

    // line 42
    public function block_topic_label($context, array $blocks = array())
    {
        $__internal_224ea194c47874860e5fd38e0405e97a5a329cb4a97e77b6b3202e26d99edcb0 = $this->env->getExtension("native_profiler");
        $__internal_224ea194c47874860e5fd38e0405e97a5a329cb4a97e77b6b3202e26d99edcb0->enter($__internal_224ea194c47874860e5fd38e0405e97a5a329cb4a97e77b6b3202e26d99edcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topic_label"));

        
        $__internal_224ea194c47874860e5fd38e0405e97a5a329cb4a97e77b6b3202e26d99edcb0->leave($__internal_224ea194c47874860e5fd38e0405e97a5a329cb4a97e77b6b3202e26d99edcb0_prof);

    }

    // line 45
    public function block_overview_text($context, array $blocks = array())
    {
        $__internal_5aeb991aef096319a16972e32f18d9137b67cd2ade78812244592778c5f6504e = $this->env->getExtension("native_profiler");
        $__internal_5aeb991aef096319a16972e32f18d9137b67cd2ade78812244592778c5f6504e->enter($__internal_5aeb991aef096319a16972e32f18d9137b67cd2ade78812244592778c5f6504e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "overview_text"));

        echo " ";
        
        $__internal_5aeb991aef096319a16972e32f18d9137b67cd2ade78812244592778c5f6504e->leave($__internal_5aeb991aef096319a16972e32f18d9137b67cd2ade78812244592778c5f6504e_prof);

    }

    // line 62
    public function block_content_filter_buttons($context, array $blocks = array())
    {
        $__internal_cd863d689b2dc1b421c48d74e124a3ad8120989b2a2102061a69d8167f29023e = $this->env->getExtension("native_profiler");
        $__internal_cd863d689b2dc1b421c48d74e124a3ad8120989b2a2102061a69d8167f29023e->enter($__internal_cd863d689b2dc1b421c48d74e124a3ad8120989b2a2102061a69d8167f29023e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_filter_buttons"));

        
        $__internal_cd863d689b2dc1b421c48d74e124a3ad8120989b2a2102061a69d8167f29023e->leave($__internal_cd863d689b2dc1b421c48d74e124a3ad8120989b2a2102061a69d8167f29023e_prof);

    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        $__internal_ef0d6ab10f0a527193268200c9b86b64f29cc071efe245fe950f5090e6b39fd3 = $this->env->getExtension("native_profiler");
        $__internal_ef0d6ab10f0a527193268200c9b86b64f29cc071efe245fe950f5090e6b39fd3->enter($__internal_ef0d6ab10f0a527193268200c9b86b64f29cc071efe245fe950f5090e6b39fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ef0d6ab10f0a527193268200c9b86b64f29cc071efe245fe950f5090e6b39fd3->leave($__internal_ef0d6ab10f0a527193268200c9b86b64f29cc071efe245fe950f5090e6b39fd3_prof);

    }

    // line 72
    public function block_author_block($context, array $blocks = array())
    {
        $__internal_2b67bceea58a633a495dc8a45cca345d231ecd37a5e884c851fe9748d91451f8 = $this->env->getExtension("native_profiler");
        $__internal_2b67bceea58a633a495dc8a45cca345d231ecd37a5e884c851fe9748d91451f8->enter($__internal_2b67bceea58a633a495dc8a45cca345d231ecd37a5e884c851fe9748d91451f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "author_block"));

        
        $__internal_2b67bceea58a633a495dc8a45cca345d231ecd37a5e884c851fe9748d91451f8->leave($__internal_2b67bceea58a633a495dc8a45cca345d231ecd37a5e884c851fe9748d91451f8_prof);

    }

    // line 76
    public function block_content_column($context, array $blocks = array())
    {
        $__internal_d8eaae1759f216c60bc9773bd1e85466b6d41c1da22b0425494e30ac2e14c9c8 = $this->env->getExtension("native_profiler");
        $__internal_d8eaae1759f216c60bc9773bd1e85466b6d41c1da22b0425494e30ac2e14c9c8->enter($__internal_d8eaae1759f216c60bc9773bd1e85466b6d41c1da22b0425494e30ac2e14c9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_column"));

        
        $__internal_d8eaae1759f216c60bc9773bd1e85466b6d41c1da22b0425494e30ac2e14c9c8->leave($__internal_d8eaae1759f216c60bc9773bd1e85466b6d41c1da22b0425494e30ac2e14c9c8_prof);

    }

    public function getTemplateName()
    {
        return "topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 76,  286 => 72,  275 => 70,  264 => 62,  252 => 45,  241 => 42,  230 => 40,  221 => 25,  217 => 24,  213 => 23,  209 => 22,  206 => 21,  200 => 20,  189 => 18,  180 => 13,  176 => 12,  172 => 11,  167 => 10,  161 => 9,  148 => 87,  140 => 82,  133 => 77,  131 => 76,  126 => 73,  124 => 72,  121 => 71,  119 => 70,  110 => 63,  108 => 62,  90 => 46,  88 => 45,  82 => 42,  77 => 40,  66 => 32,  59 => 27,  57 => 20,  54 => 19,  52 => 18,  47 => 16,  44 => 15,  42 => 9,  32 => 1,);
    }
}
/* ﻿<!DOCTYPE html>*/
/* */
/* <html style="height:100%; width:100%;">*/
/* */
/*     <head>*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta charset="utf-8" />*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('css/css.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*             <link rel="stylesheet" href="{{ asset('vendor/perfect_scrollbar/css/perfect-scrollbar.css') }}">*/
/*         {% endblock %}*/
/* */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*         {% block title %}{% endblock %}*/
/* */
/*         {% block javascripts %}*/
/*             <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/*             <script src="{{ asset('js/main.js') }}"></script>*/
/*             <script src="{{ asset('js/inobounce.js') }}"></script>*/
/*             <script src="{{ asset('js/fastclick.js') }}"></script>*/
/*             <script src="{{ asset('vendor/perfect_scrollbar/js/perfect-scrollbar.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*     </head>*/
/* */
/*     <body style="width:100%; height:100%; max-height:10000000px;">*/
/* */
/*         <script src="{{ asset('js/init_fastclicks.js') }}"></script>*/
/* */
/*         <header>*/
/*             <h1 style="color:white"> <center>Cognized <i class="fa fa-leaf"></i></center> </h1>*/
/*         </header>*/
/* */
/*         <div id="overview">*/
/*             <div id="overview_label">*/
/*                 <h3 id="subject_label">{% block subject_label %}{% endblock %}</h3>*/
/*                 <br/>*/
/*                 <h1 id="topic_label">{% block topic_label %}{% endblock %}</h1>*/
/*             </div>*/
/*             <div id="overview_text" class="jumbotron">*/
/*                 {% block overview_text %} {% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <main id="body">*/
/*             <nav id="content_filter_navbar" class="navbar navbar-full navbar-dark bg-inverse" role="navigation">*/
/*                 <p class="filter_bar_label">Content Length</p>*/
/*                 <div class="filter_bar_button_group btn-group" role="group" aria-label="...">*/
/*                     <button type="button" class="btn btn-primary">Quick</button>*/
/*                     <button type="button" class="btn btn-primary">In Depth</button>*/
/*                 </div>*/
/*                 <p class="filter_bar_label">Sort By</p>*/
/*                 <div class="filter_bar_button_group btn-group" role="group" aria-label="...">*/
/*                     <button type="button" class="btn btn-primary">Highest</button>*/
/*                     <button type="button" class="btn btn-primary">Recent</button>*/
/*                 </div>*/
/*                 <div class="navbar_right_element btn-group pull-right"  data-toggle="buttons" role="group" aria-label="Basic example" data-toggle="buttons">*/
/*                     {% block content_filter_buttons %}{% endblock %}*/
/*                 </div>*/
/*                 <p class="filter_bar_label pull-xs-right">Content Types</p>*/
/*             </nav>*/
/* */
/*             <div id="content_row" class="row">*/
/*                 <div id="content_column" class="col-md-8"align="center">*/
/*                     <div id="content" style="display:block;flex-grow:0;align-self:center;">*/
/*                         {% block content %}{% endblock %}*/
/*                     </div>*/
/*                     {% block author_block %}{% endblock %}*/
/*                 </div>*/
/*                 <div id="content_viewer_column" class="col-md-4" >*/
/*                     <div class="card-columns" style="-webkit-column-count: 2;">*/
/*                         {% block content_column %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </main>*/
/* */
/*         <script src="{{ asset('js/resize_overview.js') }}"></script>*/
/* */
/*         <footer>*/
/*             <p><center>Copyright 2016</center></p>*/
/*         </footer>*/
/*         <script src="{{ asset('js/init_perfect_scrollbar.js') }}"></script>*/
/* */
/*     </body>*/
/* */
/* </html>*/
/* */
