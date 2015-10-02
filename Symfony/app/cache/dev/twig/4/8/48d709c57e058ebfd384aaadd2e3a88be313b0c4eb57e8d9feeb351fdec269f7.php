<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_72074cb5ae66c7fdd746ec5ff5d0e484252e0ddc6ce64baab85f1cbf2739d525 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57b4a31f4ad65cf915ff843d712e1dbea7065c16aafe8001ea42a7adea99d274 = $this->env->getExtension("native_profiler");
        $__internal_57b4a31f4ad65cf915ff843d712e1dbea7065c16aafe8001ea42a7adea99d274->enter($__internal_57b4a31f4ad65cf915ff843d712e1dbea7065c16aafe8001ea42a7adea99d274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57b4a31f4ad65cf915ff843d712e1dbea7065c16aafe8001ea42a7adea99d274->leave($__internal_57b4a31f4ad65cf915ff843d712e1dbea7065c16aafe8001ea42a7adea99d274_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2f92de943e40b1cb520fe3dab3507f9b0495ba4bfeb52688943a07d178b2918 = $this->env->getExtension("native_profiler");
        $__internal_f2f92de943e40b1cb520fe3dab3507f9b0495ba4bfeb52688943a07d178b2918->enter($__internal_f2f92de943e40b1cb520fe3dab3507f9b0495ba4bfeb52688943a07d178b2918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2f92de943e40b1cb520fe3dab3507f9b0495ba4bfeb52688943a07d178b2918->leave($__internal_f2f92de943e40b1cb520fe3dab3507f9b0495ba4bfeb52688943a07d178b2918_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_496e7d97d1db9204d08aaac2f1b0e92779e44f821eb6ebbf18a4f290208c00b1 = $this->env->getExtension("native_profiler");
        $__internal_496e7d97d1db9204d08aaac2f1b0e92779e44f821eb6ebbf18a4f290208c00b1->enter($__internal_496e7d97d1db9204d08aaac2f1b0e92779e44f821eb6ebbf18a4f290208c00b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_496e7d97d1db9204d08aaac2f1b0e92779e44f821eb6ebbf18a4f290208c00b1->leave($__internal_496e7d97d1db9204d08aaac2f1b0e92779e44f821eb6ebbf18a4f290208c00b1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_176b443b1af23aae07582e9e60567cd518a2b08b18fe9f53a39728323dc99b89 = $this->env->getExtension("native_profiler");
        $__internal_176b443b1af23aae07582e9e60567cd518a2b08b18fe9f53a39728323dc99b89->enter($__internal_176b443b1af23aae07582e9e60567cd518a2b08b18fe9f53a39728323dc99b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_176b443b1af23aae07582e9e60567cd518a2b08b18fe9f53a39728323dc99b89->leave($__internal_176b443b1af23aae07582e9e60567cd518a2b08b18fe9f53a39728323dc99b89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
