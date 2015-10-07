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
        $__internal_76ab38c456ccf85d7d8174922a4e042c858c8648aa9f2cc8c0424dfaa5cbb334 = $this->env->getExtension("native_profiler");
        $__internal_76ab38c456ccf85d7d8174922a4e042c858c8648aa9f2cc8c0424dfaa5cbb334->enter($__internal_76ab38c456ccf85d7d8174922a4e042c858c8648aa9f2cc8c0424dfaa5cbb334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76ab38c456ccf85d7d8174922a4e042c858c8648aa9f2cc8c0424dfaa5cbb334->leave($__internal_76ab38c456ccf85d7d8174922a4e042c858c8648aa9f2cc8c0424dfaa5cbb334_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a1e0f0b54f6af744b7bad2c45b2e5a5562c191f15d3aabf41e65f4cffaa37fd = $this->env->getExtension("native_profiler");
        $__internal_9a1e0f0b54f6af744b7bad2c45b2e5a5562c191f15d3aabf41e65f4cffaa37fd->enter($__internal_9a1e0f0b54f6af744b7bad2c45b2e5a5562c191f15d3aabf41e65f4cffaa37fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9a1e0f0b54f6af744b7bad2c45b2e5a5562c191f15d3aabf41e65f4cffaa37fd->leave($__internal_9a1e0f0b54f6af744b7bad2c45b2e5a5562c191f15d3aabf41e65f4cffaa37fd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4052b43cef2faaacf3df03d647555a5aecfd0adde2bac078fb2b8e7c4f10b60 = $this->env->getExtension("native_profiler");
        $__internal_a4052b43cef2faaacf3df03d647555a5aecfd0adde2bac078fb2b8e7c4f10b60->enter($__internal_a4052b43cef2faaacf3df03d647555a5aecfd0adde2bac078fb2b8e7c4f10b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a4052b43cef2faaacf3df03d647555a5aecfd0adde2bac078fb2b8e7c4f10b60->leave($__internal_a4052b43cef2faaacf3df03d647555a5aecfd0adde2bac078fb2b8e7c4f10b60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b59cda45a5ff34cdec4a86e2d560f1a3ef6c04823dfee3b71dae40829fd9c2ab = $this->env->getExtension("native_profiler");
        $__internal_b59cda45a5ff34cdec4a86e2d560f1a3ef6c04823dfee3b71dae40829fd9c2ab->enter($__internal_b59cda45a5ff34cdec4a86e2d560f1a3ef6c04823dfee3b71dae40829fd9c2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b59cda45a5ff34cdec4a86e2d560f1a3ef6c04823dfee3b71dae40829fd9c2ab->leave($__internal_b59cda45a5ff34cdec4a86e2d560f1a3ef6c04823dfee3b71dae40829fd9c2ab_prof);

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
