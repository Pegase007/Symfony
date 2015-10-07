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
        $__internal_a6357c71a5c30fde0f968230108661abb96d889c5c1fb033a7af770255a75942 = $this->env->getExtension("native_profiler");
        $__internal_a6357c71a5c30fde0f968230108661abb96d889c5c1fb033a7af770255a75942->enter($__internal_a6357c71a5c30fde0f968230108661abb96d889c5c1fb033a7af770255a75942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6357c71a5c30fde0f968230108661abb96d889c5c1fb033a7af770255a75942->leave($__internal_a6357c71a5c30fde0f968230108661abb96d889c5c1fb033a7af770255a75942_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e76b63dd0ee7a53c9eaad21be26f67f1412e821a8e804dc7c707ccf8db55e3f = $this->env->getExtension("native_profiler");
        $__internal_6e76b63dd0ee7a53c9eaad21be26f67f1412e821a8e804dc7c707ccf8db55e3f->enter($__internal_6e76b63dd0ee7a53c9eaad21be26f67f1412e821a8e804dc7c707ccf8db55e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e76b63dd0ee7a53c9eaad21be26f67f1412e821a8e804dc7c707ccf8db55e3f->leave($__internal_6e76b63dd0ee7a53c9eaad21be26f67f1412e821a8e804dc7c707ccf8db55e3f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_07871a5874bd771069beea110af1aa8b6c3559ade8be2dafef258d013acbd10b = $this->env->getExtension("native_profiler");
        $__internal_07871a5874bd771069beea110af1aa8b6c3559ade8be2dafef258d013acbd10b->enter($__internal_07871a5874bd771069beea110af1aa8b6c3559ade8be2dafef258d013acbd10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_07871a5874bd771069beea110af1aa8b6c3559ade8be2dafef258d013acbd10b->leave($__internal_07871a5874bd771069beea110af1aa8b6c3559ade8be2dafef258d013acbd10b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_818b9b60645e60a7f3d2474eca15305f0d929651cb11da0dd8046c686e9cd122 = $this->env->getExtension("native_profiler");
        $__internal_818b9b60645e60a7f3d2474eca15305f0d929651cb11da0dd8046c686e9cd122->enter($__internal_818b9b60645e60a7f3d2474eca15305f0d929651cb11da0dd8046c686e9cd122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_818b9b60645e60a7f3d2474eca15305f0d929651cb11da0dd8046c686e9cd122->leave($__internal_818b9b60645e60a7f3d2474eca15305f0d929651cb11da0dd8046c686e9cd122_prof);

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
