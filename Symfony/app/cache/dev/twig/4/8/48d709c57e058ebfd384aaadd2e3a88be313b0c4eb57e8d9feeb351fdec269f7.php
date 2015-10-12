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
        $__internal_51046742e1c4cfdf9230b6a90a6fe0621ba395e1976ce9c0d191380b7c9e8ea7 = $this->env->getExtension("native_profiler");
        $__internal_51046742e1c4cfdf9230b6a90a6fe0621ba395e1976ce9c0d191380b7c9e8ea7->enter($__internal_51046742e1c4cfdf9230b6a90a6fe0621ba395e1976ce9c0d191380b7c9e8ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51046742e1c4cfdf9230b6a90a6fe0621ba395e1976ce9c0d191380b7c9e8ea7->leave($__internal_51046742e1c4cfdf9230b6a90a6fe0621ba395e1976ce9c0d191380b7c9e8ea7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ce8a2321b07308d08f55be9798755a4e1040e6ee7132114025accc1de5dfa13e = $this->env->getExtension("native_profiler");
        $__internal_ce8a2321b07308d08f55be9798755a4e1040e6ee7132114025accc1de5dfa13e->enter($__internal_ce8a2321b07308d08f55be9798755a4e1040e6ee7132114025accc1de5dfa13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ce8a2321b07308d08f55be9798755a4e1040e6ee7132114025accc1de5dfa13e->leave($__internal_ce8a2321b07308d08f55be9798755a4e1040e6ee7132114025accc1de5dfa13e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5941771dbf31a01804fbdeedbea7e37488629f105ae65b1b363cf376543feb65 = $this->env->getExtension("native_profiler");
        $__internal_5941771dbf31a01804fbdeedbea7e37488629f105ae65b1b363cf376543feb65->enter($__internal_5941771dbf31a01804fbdeedbea7e37488629f105ae65b1b363cf376543feb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5941771dbf31a01804fbdeedbea7e37488629f105ae65b1b363cf376543feb65->leave($__internal_5941771dbf31a01804fbdeedbea7e37488629f105ae65b1b363cf376543feb65_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5beaaa196040edd63f1d94184fa2734e398bda8ee8164a4a61eeb92c43c2cd9 = $this->env->getExtension("native_profiler");
        $__internal_c5beaaa196040edd63f1d94184fa2734e398bda8ee8164a4a61eeb92c43c2cd9->enter($__internal_c5beaaa196040edd63f1d94184fa2734e398bda8ee8164a4a61eeb92c43c2cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c5beaaa196040edd63f1d94184fa2734e398bda8ee8164a4a61eeb92c43c2cd9->leave($__internal_c5beaaa196040edd63f1d94184fa2734e398bda8ee8164a4a61eeb92c43c2cd9_prof);

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
