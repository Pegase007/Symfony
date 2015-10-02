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
        $__internal_c45e259f2f36fdcffd39a119f0d6feb76bebe47b3f7716ac6b9436f0d86a1a73 = $this->env->getExtension("native_profiler");
        $__internal_c45e259f2f36fdcffd39a119f0d6feb76bebe47b3f7716ac6b9436f0d86a1a73->enter($__internal_c45e259f2f36fdcffd39a119f0d6feb76bebe47b3f7716ac6b9436f0d86a1a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c45e259f2f36fdcffd39a119f0d6feb76bebe47b3f7716ac6b9436f0d86a1a73->leave($__internal_c45e259f2f36fdcffd39a119f0d6feb76bebe47b3f7716ac6b9436f0d86a1a73_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f44a1c2e8364877e227630991e4d1f978999b690201166e4aeed81efd2a5767 = $this->env->getExtension("native_profiler");
        $__internal_6f44a1c2e8364877e227630991e4d1f978999b690201166e4aeed81efd2a5767->enter($__internal_6f44a1c2e8364877e227630991e4d1f978999b690201166e4aeed81efd2a5767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f44a1c2e8364877e227630991e4d1f978999b690201166e4aeed81efd2a5767->leave($__internal_6f44a1c2e8364877e227630991e4d1f978999b690201166e4aeed81efd2a5767_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfefe12765a839add435eeb3b870356fcc93f0eec68cc37ef3b43ab012591c23 = $this->env->getExtension("native_profiler");
        $__internal_bfefe12765a839add435eeb3b870356fcc93f0eec68cc37ef3b43ab012591c23->enter($__internal_bfefe12765a839add435eeb3b870356fcc93f0eec68cc37ef3b43ab012591c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bfefe12765a839add435eeb3b870356fcc93f0eec68cc37ef3b43ab012591c23->leave($__internal_bfefe12765a839add435eeb3b870356fcc93f0eec68cc37ef3b43ab012591c23_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e4916bb9d081202b33ec52f21f93e7d4796c6d4a181e63207fdd7c5f49cf19c = $this->env->getExtension("native_profiler");
        $__internal_2e4916bb9d081202b33ec52f21f93e7d4796c6d4a181e63207fdd7c5f49cf19c->enter($__internal_2e4916bb9d081202b33ec52f21f93e7d4796c6d4a181e63207fdd7c5f49cf19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2e4916bb9d081202b33ec52f21f93e7d4796c6d4a181e63207fdd7c5f49cf19c->leave($__internal_2e4916bb9d081202b33ec52f21f93e7d4796c6d4a181e63207fdd7c5f49cf19c_prof);

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
