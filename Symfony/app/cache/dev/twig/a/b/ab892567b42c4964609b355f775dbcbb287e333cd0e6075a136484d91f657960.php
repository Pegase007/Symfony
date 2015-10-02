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
        $__internal_095c11e1004d222ed25bee35986b44521970a2e37788860b02ef16fadc7de151 = $this->env->getExtension("native_profiler");
        $__internal_095c11e1004d222ed25bee35986b44521970a2e37788860b02ef16fadc7de151->enter($__internal_095c11e1004d222ed25bee35986b44521970a2e37788860b02ef16fadc7de151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_095c11e1004d222ed25bee35986b44521970a2e37788860b02ef16fadc7de151->leave($__internal_095c11e1004d222ed25bee35986b44521970a2e37788860b02ef16fadc7de151_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d45f9b0c648dd262b1bf95e5fb5766e2eed2ccae769f523628af725f0b29b2c1 = $this->env->getExtension("native_profiler");
        $__internal_d45f9b0c648dd262b1bf95e5fb5766e2eed2ccae769f523628af725f0b29b2c1->enter($__internal_d45f9b0c648dd262b1bf95e5fb5766e2eed2ccae769f523628af725f0b29b2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d45f9b0c648dd262b1bf95e5fb5766e2eed2ccae769f523628af725f0b29b2c1->leave($__internal_d45f9b0c648dd262b1bf95e5fb5766e2eed2ccae769f523628af725f0b29b2c1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_74e72b050917a2739ad81e18394b93f99bef8e312df095d6a57883ed283843ef = $this->env->getExtension("native_profiler");
        $__internal_74e72b050917a2739ad81e18394b93f99bef8e312df095d6a57883ed283843ef->enter($__internal_74e72b050917a2739ad81e18394b93f99bef8e312df095d6a57883ed283843ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_74e72b050917a2739ad81e18394b93f99bef8e312df095d6a57883ed283843ef->leave($__internal_74e72b050917a2739ad81e18394b93f99bef8e312df095d6a57883ed283843ef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb1ce2db6113469d0f3c770f0bd7892c8c7d73a4a660c03b7615fa2eb7ffd288 = $this->env->getExtension("native_profiler");
        $__internal_fb1ce2db6113469d0f3c770f0bd7892c8c7d73a4a660c03b7615fa2eb7ffd288->enter($__internal_fb1ce2db6113469d0f3c770f0bd7892c8c7d73a4a660c03b7615fa2eb7ffd288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb1ce2db6113469d0f3c770f0bd7892c8c7d73a4a660c03b7615fa2eb7ffd288->leave($__internal_fb1ce2db6113469d0f3c770f0bd7892c8c7d73a4a660c03b7615fa2eb7ffd288_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b398e963a804d65d881b2d6c18725e527cd5bb480c7a99af8e67723f1859b78c = $this->env->getExtension("native_profiler");
        $__internal_b398e963a804d65d881b2d6c18725e527cd5bb480c7a99af8e67723f1859b78c->enter($__internal_b398e963a804d65d881b2d6c18725e527cd5bb480c7a99af8e67723f1859b78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b398e963a804d65d881b2d6c18725e527cd5bb480c7a99af8e67723f1859b78c->leave($__internal_b398e963a804d65d881b2d6c18725e527cd5bb480c7a99af8e67723f1859b78c_prof);

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
