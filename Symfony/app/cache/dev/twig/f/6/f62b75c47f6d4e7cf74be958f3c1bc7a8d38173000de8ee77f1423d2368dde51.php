<?php

/* TroisWABackBundle:Main:contact.html.twig */
class __TwigTemplate_45a5bdc6e5108998c6640d26cba4cba5ef6ccc2b25f237c4ca3200f244751698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TroisWABackBundle::layout.html.twig", "TroisWABackBundle:Main:contact.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TroisWABackBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a38ed5b132b40c3596937615a449e3d6938eed0fd641a6043ebc2d028c400fc3 = $this->env->getExtension("native_profiler");
        $__internal_a38ed5b132b40c3596937615a449e3d6938eed0fd641a6043ebc2d028c400fc3->enter($__internal_a38ed5b132b40c3596937615a449e3d6938eed0fd641a6043ebc2d028c400fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TroisWABackBundle:Main:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a38ed5b132b40c3596937615a449e3d6938eed0fd641a6043ebc2d028c400fc3->leave($__internal_a38ed5b132b40c3596937615a449e3d6938eed0fd641a6043ebc2d028c400fc3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_33d0c55062590672b149b620ea2b15eb555a8c55a011fabad1833c57fdd228f7 = $this->env->getExtension("native_profiler");
        $__internal_33d0c55062590672b149b620ea2b15eb555a8c55a011fabad1833c57fdd228f7->enter($__internal_33d0c55062590672b149b620ea2b15eb555a8c55a011fabad1833c57fdd228f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_33d0c55062590672b149b620ea2b15eb555a8c55a011fabad1833c57fdd228f7->leave($__internal_33d0c55062590672b149b620ea2b15eb555a8c55a011fabad1833c57fdd228f7_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_c208710d4b43baf9d696b03cbb97ec94d5c7c970b14a432712b45f90e3800635 = $this->env->getExtension("native_profiler");
        $__internal_c208710d4b43baf9d696b03cbb97ec94d5c7c970b14a432712b45f90e3800635->enter($__internal_c208710d4b43baf9d696b03cbb97ec94d5c7c970b14a432712b45f90e3800635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        echo " Contact";
        
        $__internal_c208710d4b43baf9d696b03cbb97ec94d5c7c970b14a432712b45f90e3800635->leave($__internal_c208710d4b43baf9d696b03cbb97ec94d5c7c970b14a432712b45f90e3800635_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_53ca602cd11e503cd8e1a1b8b0fe4fda1986c85b753f1497e9c213b2599939b7 = $this->env->getExtension("native_profiler");
        $__internal_53ca602cd11e503cd8e1a1b8b0fe4fda1986c85b753f1497e9c213b2599939b7->enter($__internal_53ca602cd11e503cd8e1a1b8b0fe4fda1986c85b753f1497e9c213b2599939b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
    <p>Nouveau contenu</p>

";
        
        $__internal_53ca602cd11e503cd8e1a1b8b0fe4fda1986c85b753f1497e9c213b2599939b7->leave($__internal_53ca602cd11e503cd8e1a1b8b0fe4fda1986c85b753f1497e9c213b2599939b7_prof);

    }

    public function getTemplateName()
    {
        return "TroisWABackBundle:Main:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  60 => 10,  48 => 7,  36 => 4,  11 => 1,);
    }
}
/* {% extends "TroisWABackBundle::layout.html.twig" %}*/
/* */
/* */
/* {% block title %}Contact{% endblock %}*/
/* */
/* */
/* {% block breadcrumb %} Contact{% endblock %}*/
/* */
/* */
/* {% block content %}*/
/*     {{ parent() }}*/
/*     <p>Nouveau contenu</p>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
