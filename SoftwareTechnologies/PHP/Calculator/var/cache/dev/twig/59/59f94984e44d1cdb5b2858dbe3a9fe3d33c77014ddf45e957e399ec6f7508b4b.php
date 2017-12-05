<?php

/* base.html.twig */
class __TwigTemplate_73c8356928764bb09af3bdb04638857d43d2424ef9653eb28aadf94c0e444341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_210cc675ec6d4fc67c8acca51b8c0f74bb2130d296218934fe2a81f524c91404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_210cc675ec6d4fc67c8acca51b8c0f74bb2130d296218934fe2a81f524c91404->enter($__internal_210cc675ec6d4fc67c8acca51b8c0f74bb2130d296218934fe2a81f524c91404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_210cc675ec6d4fc67c8acca51b8c0f74bb2130d296218934fe2a81f524c91404->leave($__internal_210cc675ec6d4fc67c8acca51b8c0f74bb2130d296218934fe2a81f524c91404_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_10a8be9c75caf8a8d487c03422837222b7a9de5ba3f16434fa39618d3edca423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10a8be9c75caf8a8d487c03422837222b7a9de5ba3f16434fa39618d3edca423->enter($__internal_10a8be9c75caf8a8d487c03422837222b7a9de5ba3f16434fa39618d3edca423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_10a8be9c75caf8a8d487c03422837222b7a9de5ba3f16434fa39618d3edca423->leave($__internal_10a8be9c75caf8a8d487c03422837222b7a9de5ba3f16434fa39618d3edca423_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1eeff115533be736f04c5f0ad2f1862dc82ed796c1fb6143f5584e2ba06b42a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eeff115533be736f04c5f0ad2f1862dc82ed796c1fb6143f5584e2ba06b42a1->enter($__internal_1eeff115533be736f04c5f0ad2f1862dc82ed796c1fb6143f5584e2ba06b42a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_1eeff115533be736f04c5f0ad2f1862dc82ed796c1fb6143f5584e2ba06b42a1->leave($__internal_1eeff115533be736f04c5f0ad2f1862dc82ed796c1fb6143f5584e2ba06b42a1_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_53839769cb33d1fbf8d2f5fcb6c23d430fa8fc38711ad2b6c6943518150f5fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53839769cb33d1fbf8d2f5fcb6c23d430fa8fc38711ad2b6c6943518150f5fe0->enter($__internal_53839769cb33d1fbf8d2f5fcb6c23d430fa8fc38711ad2b6c6943518150f5fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_53839769cb33d1fbf8d2f5fcb6c23d430fa8fc38711ad2b6c6943518150f5fe0->leave($__internal_53839769cb33d1fbf8d2f5fcb6c23d430fa8fc38711ad2b6c6943518150f5fe0_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_87d969ebe8c2114d5598e3ae9eaebec412bef74be32759c3b01a910c8f890c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87d969ebe8c2114d5598e3ae9eaebec412bef74be32759c3b01a910c8f890c0b->enter($__internal_87d969ebe8c2114d5598e3ae9eaebec412bef74be32759c3b01a910c8f890c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_87d969ebe8c2114d5598e3ae9eaebec412bef74be32759c3b01a910c8f890c0b->leave($__internal_87d969ebe8c2114d5598e3ae9eaebec412bef74be32759c3b01a910c8f890c0b_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0d1b4ba95eb85e57e821b3723cfb5939ffbd49b047b61cba9a670e25a645b9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d1b4ba95eb85e57e821b3723cfb5939ffbd49b047b61cba9a670e25a645b9b->enter($__internal_f0d1b4ba95eb85e57e821b3723cfb5939ffbd49b047b61cba9a670e25a645b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_f0d1b4ba95eb85e57e821b3723cfb5939ffbd49b047b61cba9a670e25a645b9b->leave($__internal_f0d1b4ba95eb85e57e821b3723cfb5939ffbd49b047b61cba9a670e25a645b9b_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_e7b8e774adb103a77c7f51932b6478a1c288a4ddb81666f0f2e06d7d9a62057a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b8e774adb103a77c7f51932b6478a1c288a4ddb81666f0f2e06d7d9a62057a->enter($__internal_e7b8e774adb103a77c7f51932b6478a1c288a4ddb81666f0f2e06d7d9a62057a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_e7b8e774adb103a77c7f51932b6478a1c288a4ddb81666f0f2e06d7d9a62057a->leave($__internal_e7b8e774adb103a77c7f51932b6478a1c288a4ddb81666f0f2e06d7d9a62057a_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dfa5fe2d948dae833991b63e0e054f477a31f86685732eb75424b995e186cb0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa5fe2d948dae833991b63e0e054f477a31f86685732eb75424b995e186cb0d->enter($__internal_dfa5fe2d948dae833991b63e0e054f477a31f86685732eb75424b995e186cb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dfa5fe2d948dae833991b63e0e054f477a31f86685732eb75424b995e186cb0d->leave($__internal_dfa5fe2d948dae833991b63e0e054f477a31f86685732eb75424b995e186cb0d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
