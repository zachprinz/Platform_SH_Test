<?php

/* topic.html.twig */
class __TwigTemplate_c0d423bb8727b4c151f97ef081bed9fd5469d50ac8b0e6c4945e3f11e29ef484 extends Twig_Template
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
            'phone_topic_label' => array($this, 'block_phone_topic_label'),
            'overview_text' => array($this, 'block_overview_text'),
            'content_filter_buttons' => array($this, 'block_content_filter_buttons'),
            'content' => array($this, 'block_content'),
            'author_block' => array($this, 'block_author_block'),
            'content_column' => array($this, 'block_content_column'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ed2fbc8b4834a2308587a2a0c51556b360c6e0f00e658011b642c9841960e17 = $this->env->getExtension("native_profiler");
        $__internal_0ed2fbc8b4834a2308587a2a0c51556b360c6e0f00e658011b642c9841960e17->enter($__internal_0ed2fbc8b4834a2308587a2a0c51556b360c6e0f00e658011b642c9841960e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "topic.html.twig"));

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


        <header id=\"cognized_header\">
            <h1 style=\"color:white\"> <center>Cognized <i class=\"fa fa-leaf\"></i></center> </h1>
        </header>

        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/init_fastclicks.js"), "html", null, true);
        echo "\"></script>

        <div id=\"overview\">
            <div id=\"overview_label\">
                <h3 id=\"subject_label\">";
        // line 41
        $this->displayBlock('subject_label', $context, $blocks);
        echo "</h3>
                <h1 id=\"topic_label\">";
        // line 42
        $this->displayBlock('topic_label', $context, $blocks);
        echo "</h1>
            </div>
            <div id=\"overview_text\" class=\"jumbotron\">
                ";
        // line 45
        $this->displayBlock('phone_topic_label', $context, $blocks);
        // line 46
        echo "                ";
        $this->displayBlock('overview_text', $context, $blocks);
        // line 47
        echo "            </div>
        </div>

        <main id=\"body\">
            <nav id=\"content_filter_navbar\" class=\"navbar navbar-full navbar-dark bg-inverse\" role=\"navigation\">
                <button class=\"navbar-toggler hidden-lg-up\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-header\" aria-controls=\"navbar-header\">
                    <i class=\"fa fa-filter\"></i>
                </button>
                <div class=\"collapse navbar-toggleable-md\" id=\"navbar-header\">
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
        // line 67
        $this->displayBlock('content_filter_buttons', $context, $blocks);
        // line 68
        echo "                    </div>
                    <p class=\"filter_bar_label pull-xs-right\">Content Types</p>
                </div>
            </nav>

            <div id=\"content_row\" class=\"row\">
                <div id=\"content_column\" class=\"col-md-8\"align=\"center\">
                    <div id=\"content\" style=\"display:block;flex-grow:0;align-self:center;\">
                        ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "                    </div>
                    ";
        // line 78
        $this->displayBlock('author_block', $context, $blocks);
        // line 79
        echo "                </div>
                <div id=\"content_viewer_column\" class=\"col-md-4\" >
                    <div id=\"content_cards\" class=\"card-columns\">
                        ";
        // line 82
        $this->displayBlock('content_column', $context, $blocks);
        // line 83
        echo "                    </div>
                </div>
            </div>
        </main>

        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/resize_overview.js"), "html", null, true);
        echo "\"></script>

        <footer>
            <p><center>Copyright 2016</center></p>
        </footer>
        <script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/init_perfect_scrollbar.js"), "html", null, true);
        echo "\"></script>

    </body>

</html>
";
        
        $__internal_0ed2fbc8b4834a2308587a2a0c51556b360c6e0f00e658011b642c9841960e17->leave($__internal_0ed2fbc8b4834a2308587a2a0c51556b360c6e0f00e658011b642c9841960e17_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6210d89be2c7b819d033eb3b55879e37e06cbb74f552a19fcf51f1f637d6fed = $this->env->getExtension("native_profiler");
        $__internal_b6210d89be2c7b819d033eb3b55879e37e06cbb74f552a19fcf51f1f637d6fed->enter($__internal_b6210d89be2c7b819d033eb3b55879e37e06cbb74f552a19fcf51f1f637d6fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b6210d89be2c7b819d033eb3b55879e37e06cbb74f552a19fcf51f1f637d6fed->leave($__internal_b6210d89be2c7b819d033eb3b55879e37e06cbb74f552a19fcf51f1f637d6fed_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_19b9e0493e30336af8c18bbafed36662337332b40d18ae83d2f6cf2e4ae498bc = $this->env->getExtension("native_profiler");
        $__internal_19b9e0493e30336af8c18bbafed36662337332b40d18ae83d2f6cf2e4ae498bc->enter($__internal_19b9e0493e30336af8c18bbafed36662337332b40d18ae83d2f6cf2e4ae498bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_19b9e0493e30336af8c18bbafed36662337332b40d18ae83d2f6cf2e4ae498bc->leave($__internal_19b9e0493e30336af8c18bbafed36662337332b40d18ae83d2f6cf2e4ae498bc_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b66108865cb7335e14ecfe34b795feab2d435d22f39f003df96d815eefb102d = $this->env->getExtension("native_profiler");
        $__internal_7b66108865cb7335e14ecfe34b795feab2d435d22f39f003df96d815eefb102d->enter($__internal_7b66108865cb7335e14ecfe34b795feab2d435d22f39f003df96d815eefb102d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_7b66108865cb7335e14ecfe34b795feab2d435d22f39f003df96d815eefb102d->leave($__internal_7b66108865cb7335e14ecfe34b795feab2d435d22f39f003df96d815eefb102d_prof);

    }

    // line 41
    public function block_subject_label($context, array $blocks = array())
    {
        $__internal_50140ce4d965949bb8ef9d14fb74625bb874fd85ac90ff82a4e7baafd0e4f1d5 = $this->env->getExtension("native_profiler");
        $__internal_50140ce4d965949bb8ef9d14fb74625bb874fd85ac90ff82a4e7baafd0e4f1d5->enter($__internal_50140ce4d965949bb8ef9d14fb74625bb874fd85ac90ff82a4e7baafd0e4f1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject_label"));

        
        $__internal_50140ce4d965949bb8ef9d14fb74625bb874fd85ac90ff82a4e7baafd0e4f1d5->leave($__internal_50140ce4d965949bb8ef9d14fb74625bb874fd85ac90ff82a4e7baafd0e4f1d5_prof);

    }

    // line 42
    public function block_topic_label($context, array $blocks = array())
    {
        $__internal_9feff16f6336a9ff0fb32b6aa41366863fd5068e943b2dd28489f923f96d4dd3 = $this->env->getExtension("native_profiler");
        $__internal_9feff16f6336a9ff0fb32b6aa41366863fd5068e943b2dd28489f923f96d4dd3->enter($__internal_9feff16f6336a9ff0fb32b6aa41366863fd5068e943b2dd28489f923f96d4dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "topic_label"));

        
        $__internal_9feff16f6336a9ff0fb32b6aa41366863fd5068e943b2dd28489f923f96d4dd3->leave($__internal_9feff16f6336a9ff0fb32b6aa41366863fd5068e943b2dd28489f923f96d4dd3_prof);

    }

    // line 45
    public function block_phone_topic_label($context, array $blocks = array())
    {
        $__internal_48df5e2a3efc94983a8e87c63604f4eaa8344a8577cbc47f339b4b4efa85ecdb = $this->env->getExtension("native_profiler");
        $__internal_48df5e2a3efc94983a8e87c63604f4eaa8344a8577cbc47f339b4b4efa85ecdb->enter($__internal_48df5e2a3efc94983a8e87c63604f4eaa8344a8577cbc47f339b4b4efa85ecdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "phone_topic_label"));

        
        $__internal_48df5e2a3efc94983a8e87c63604f4eaa8344a8577cbc47f339b4b4efa85ecdb->leave($__internal_48df5e2a3efc94983a8e87c63604f4eaa8344a8577cbc47f339b4b4efa85ecdb_prof);

    }

    // line 46
    public function block_overview_text($context, array $blocks = array())
    {
        $__internal_264a4dcd00b35b46492b54a4899f61c6c1c1367c175542e8ffc8dc5566777c08 = $this->env->getExtension("native_profiler");
        $__internal_264a4dcd00b35b46492b54a4899f61c6c1c1367c175542e8ffc8dc5566777c08->enter($__internal_264a4dcd00b35b46492b54a4899f61c6c1c1367c175542e8ffc8dc5566777c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "overview_text"));

        echo " ";
        
        $__internal_264a4dcd00b35b46492b54a4899f61c6c1c1367c175542e8ffc8dc5566777c08->leave($__internal_264a4dcd00b35b46492b54a4899f61c6c1c1367c175542e8ffc8dc5566777c08_prof);

    }

    // line 67
    public function block_content_filter_buttons($context, array $blocks = array())
    {
        $__internal_c8fd934c5c555182d00a2e47120a4a89bd000e5eebdddf8715081b67b2a3d577 = $this->env->getExtension("native_profiler");
        $__internal_c8fd934c5c555182d00a2e47120a4a89bd000e5eebdddf8715081b67b2a3d577->enter($__internal_c8fd934c5c555182d00a2e47120a4a89bd000e5eebdddf8715081b67b2a3d577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_filter_buttons"));

        
        $__internal_c8fd934c5c555182d00a2e47120a4a89bd000e5eebdddf8715081b67b2a3d577->leave($__internal_c8fd934c5c555182d00a2e47120a4a89bd000e5eebdddf8715081b67b2a3d577_prof);

    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
        $__internal_e4d8349bf2a9f6a394de82a126098916723f5f82709f90624ba20ae1e1e3dadc = $this->env->getExtension("native_profiler");
        $__internal_e4d8349bf2a9f6a394de82a126098916723f5f82709f90624ba20ae1e1e3dadc->enter($__internal_e4d8349bf2a9f6a394de82a126098916723f5f82709f90624ba20ae1e1e3dadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e4d8349bf2a9f6a394de82a126098916723f5f82709f90624ba20ae1e1e3dadc->leave($__internal_e4d8349bf2a9f6a394de82a126098916723f5f82709f90624ba20ae1e1e3dadc_prof);

    }

    // line 78
    public function block_author_block($context, array $blocks = array())
    {
        $__internal_a3fabf0326fbcf0fe88863962176801eba559736df5a9f5affd0eb00ec2d89f8 = $this->env->getExtension("native_profiler");
        $__internal_a3fabf0326fbcf0fe88863962176801eba559736df5a9f5affd0eb00ec2d89f8->enter($__internal_a3fabf0326fbcf0fe88863962176801eba559736df5a9f5affd0eb00ec2d89f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "author_block"));

        
        $__internal_a3fabf0326fbcf0fe88863962176801eba559736df5a9f5affd0eb00ec2d89f8->leave($__internal_a3fabf0326fbcf0fe88863962176801eba559736df5a9f5affd0eb00ec2d89f8_prof);

    }

    // line 82
    public function block_content_column($context, array $blocks = array())
    {
        $__internal_902cec29ada9bd1c7e05121f64c8b69bc84e6232647f87076b16e2ec6e916594 = $this->env->getExtension("native_profiler");
        $__internal_902cec29ada9bd1c7e05121f64c8b69bc84e6232647f87076b16e2ec6e916594->enter($__internal_902cec29ada9bd1c7e05121f64c8b69bc84e6232647f87076b16e2ec6e916594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_column"));

        
        $__internal_902cec29ada9bd1c7e05121f64c8b69bc84e6232647f87076b16e2ec6e916594->leave($__internal_902cec29ada9bd1c7e05121f64c8b69bc84e6232647f87076b16e2ec6e916594_prof);

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
        return array (  317 => 82,  306 => 78,  295 => 76,  284 => 67,  272 => 46,  261 => 45,  250 => 42,  239 => 41,  230 => 25,  226 => 24,  222 => 23,  218 => 22,  215 => 21,  209 => 20,  198 => 18,  189 => 13,  185 => 12,  181 => 11,  176 => 10,  170 => 9,  157 => 93,  149 => 88,  142 => 83,  140 => 82,  135 => 79,  133 => 78,  130 => 77,  128 => 76,  118 => 68,  116 => 67,  94 => 47,  91 => 46,  89 => 45,  83 => 42,  79 => 41,  72 => 37,  60 => 27,  58 => 20,  55 => 19,  53 => 18,  48 => 16,  45 => 15,  43 => 9,  33 => 1,);
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
/* */
/*         <header id="cognized_header">*/
/*             <h1 style="color:white"> <center>Cognized <i class="fa fa-leaf"></i></center> </h1>*/
/*         </header>*/
/* */
/*         <script src="{{ asset('js/init_fastclicks.js') }}"></script>*/
/* */
/*         <div id="overview">*/
/*             <div id="overview_label">*/
/*                 <h3 id="subject_label">{% block subject_label %}{% endblock %}</h3>*/
/*                 <h1 id="topic_label">{% block topic_label %}{% endblock %}</h1>*/
/*             </div>*/
/*             <div id="overview_text" class="jumbotron">*/
/*                 {% block phone_topic_label %}{% endblock %}*/
/*                 {% block overview_text %} {% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <main id="body">*/
/*             <nav id="content_filter_navbar" class="navbar navbar-full navbar-dark bg-inverse" role="navigation">*/
/*                 <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">*/
/*                     <i class="fa fa-filter"></i>*/
/*                 </button>*/
/*                 <div class="collapse navbar-toggleable-md" id="navbar-header">*/
/*                     <p class="filter_bar_label">Content Length</p>*/
/*                     <div class="filter_bar_button_group btn-group" role="group" aria-label="...">*/
/*                         <button type="button" class="btn btn-primary">Quick</button>*/
/*                         <button type="button" class="btn btn-primary">In Depth</button>*/
/*                     </div>*/
/*                     <p class="filter_bar_label">Sort By</p>*/
/*                     <div class="filter_bar_button_group btn-group" role="group" aria-label="...">*/
/*                         <button type="button" class="btn btn-primary">Highest</button>*/
/*                         <button type="button" class="btn btn-primary">Recent</button>*/
/*                     </div>*/
/*                     <div class="navbar_right_element btn-group pull-right"  data-toggle="buttons" role="group" aria-label="Basic example" data-toggle="buttons">*/
/*                         {% block content_filter_buttons %}{% endblock %}*/
/*                     </div>*/
/*                     <p class="filter_bar_label pull-xs-right">Content Types</p>*/
/*                 </div>*/
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
/*                     <div id="content_cards" class="card-columns">*/
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
