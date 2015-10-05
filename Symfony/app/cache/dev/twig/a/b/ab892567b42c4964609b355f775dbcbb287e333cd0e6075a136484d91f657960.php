<?php

/* base.html.twig */
class __TwigTemplate_823c6f592261e56ba9b07e6ef06711358ecccb7217ea59fa5368bd418451bfe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1831d27bcb28d43b87bf75c27cb2b6d5755f343e3b2186e4cca29c64cf2d4fa2 = $this->env->getExtension("native_profiler");
        $__internal_1831d27bcb28d43b87bf75c27cb2b6d5755f343e3b2186e4cca29c64cf2d4fa2->enter($__internal_1831d27bcb28d43b87bf75c27cb2b6d5755f343e3b2186e4cca29c64cf2d4fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_1831d27bcb28d43b87bf75c27cb2b6d5755f343e3b2186e4cca29c64cf2d4fa2->leave($__internal_1831d27bcb28d43b87bf75c27cb2b6d5755f343e3b2186e4cca29c64cf2d4fa2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5913c083e5c816e28d1ec1a8f39a2197389fe45d02bf8b5efddbaff7473c7e6 = $this->env->getExtension("native_profiler");
        $__internal_c5913c083e5c816e28d1ec1a8f39a2197389fe45d02bf8b5efddbaff7473c7e6->enter($__internal_c5913c083e5c816e28d1ec1a8f39a2197389fe45d02bf8b5efddbaff7473c7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c5913c083e5c816e28d1ec1a8f39a2197389fe45d02bf8b5efddbaff7473c7e6->leave($__internal_c5913c083e5c816e28d1ec1a8f39a2197389fe45d02bf8b5efddbaff7473c7e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c5d7e8bb1074c001911d028158d563556973a328de3e8a56d0f445236c8a679b = $this->env->getExtension("native_profiler");
        $__internal_c5d7e8bb1074c001911d028158d563556973a328de3e8a56d0f445236c8a679b->enter($__internal_c5d7e8bb1074c001911d028158d563556973a328de3e8a56d0f445236c8a679b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c5d7e8bb1074c001911d028158d563556973a328de3e8a56d0f445236c8a679b->leave($__internal_c5d7e8bb1074c001911d028158d563556973a328de3e8a56d0f445236c8a679b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_86f3c819c8ae9432c800ef53dec2df3e366843facbd2cd2906b02fe43de11d64 = $this->env->getExtension("native_profiler");
        $__internal_86f3c819c8ae9432c800ef53dec2df3e366843facbd2cd2906b02fe43de11d64->enter($__internal_86f3c819c8ae9432c800ef53dec2df3e366843facbd2cd2906b02fe43de11d64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86f3c819c8ae9432c800ef53dec2df3e366843facbd2cd2906b02fe43de11d64->leave($__internal_86f3c819c8ae9432c800ef53dec2df3e366843facbd2cd2906b02fe43de11d64_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a5025be625d614b0b4fa86ad3447447c9fa840f55d53d449b0cf4b46dafe34b = $this->env->getExtension("native_profiler");
        $__internal_3a5025be625d614b0b4fa86ad3447447c9fa840f55d53d449b0cf4b46dafe34b->enter($__internal_3a5025be625d614b0b4fa86ad3447447c9fa840f55d53d449b0cf4b46dafe34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3a5025be625d614b0b4fa86ad3447447c9fa840f55d53d449b0cf4b46dafe34b->leave($__internal_3a5025be625d614b0b4fa86ad3447447c9fa840f55d53d449b0cf4b46dafe34b_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
