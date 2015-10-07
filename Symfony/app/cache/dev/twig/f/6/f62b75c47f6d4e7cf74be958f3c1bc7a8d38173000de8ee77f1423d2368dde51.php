<?php

/* TroisWABackBundle:Main:contact.html.twig */
class __TwigTemplate_45a5bdc6e5108998c6640d26cba4cba5ef6ccc2b25f237c4ca3200f244751698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TroisWABackBundle::layoutBo.html.twig", "TroisWABackBundle:Main:contact.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TroisWABackBundle::layoutBo.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1c811e2673be8d47cbeb08332543823cb768a34643c1f5ce84c6f151e04bb98 = $this->env->getExtension("native_profiler");
        $__internal_f1c811e2673be8d47cbeb08332543823cb768a34643c1f5ce84c6f151e04bb98->enter($__internal_f1c811e2673be8d47cbeb08332543823cb768a34643c1f5ce84c6f151e04bb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TroisWABackBundle:Main:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1c811e2673be8d47cbeb08332543823cb768a34643c1f5ce84c6f151e04bb98->leave($__internal_f1c811e2673be8d47cbeb08332543823cb768a34643c1f5ce84c6f151e04bb98_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_da94e2ee7d97cc0cc119f09d56b20299037e245cb4e676dde155d39ed4615da0 = $this->env->getExtension("native_profiler");
        $__internal_da94e2ee7d97cc0cc119f09d56b20299037e245cb4e676dde155d39ed4615da0->enter($__internal_da94e2ee7d97cc0cc119f09d56b20299037e245cb4e676dde155d39ed4615da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        // line 11
        echo "
    ";
        // line 16
        echo "<div class=\"tab-content col-md-offset-1 col-sm-10\">
    <div class=\"tab-pane active\" id=\"tab1\">
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'form_start');
        echo "

    ";
        // line 21
        echo "    ";
        // line 22
        echo "

   ";
        // line 25
        echo "   ";
        // line 26
        echo "    ";
        // line 27
        echo "


        <div class=\"row \">
            <div class=\"col-sm-6 \">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "First Name"));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " First Name")));
        echo "

            </div>
            <div class=\"col-sm-6\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "lastname", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Last Name"));
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Last Name")));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "username", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Username"));
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Username")));
        echo "
            </div>
            <div class=\"col-sm-8\">
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "email", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Email"));
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Email")));
        echo "
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"label-wrapper\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "content", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Content"));
        echo "
                    </div>
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Content")));
        echo "
            </div>

        </div>
        <br>
        <div class=\"row\">
        <button class=\"btn vd_btn col-md-6 col-md-offset-3 \">Submit
            <span class=\"menu-icon\">
                <i class=\"fa fa-fw fa-chevron-circle-right\"></i></span
                    ></button>
        </div>


</div>





    ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'form_end');
        echo "
    </div>


    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success_contact"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 80
            echo "
        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <h4>\t<i class=\"icon fa fa-check\"></i> Yay!</h4>
            ";
            // line 84
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "


";
        
        $__internal_da94e2ee7d97cc0cc119f09d56b20299037e245cb4e676dde155d39ed4615da0->leave($__internal_da94e2ee7d97cc0cc119f09d56b20299037e245cb4e676dde155d39ed4615da0_prof);

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
        return array (  172 => 89,  161 => 84,  155 => 80,  151 => 79,  144 => 75,  122 => 56,  117 => 54,  108 => 48,  104 => 47,  98 => 44,  94 => 43,  86 => 38,  82 => 37,  75 => 33,  71 => 32,  64 => 27,  62 => 26,  60 => 25,  56 => 22,  54 => 21,  49 => 18,  45 => 16,  42 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "TroisWABackBundle::layoutBo.html.twig" %}*/
/* */
/* {% block content %}*/
/*     {#*/
/* */
/* Permet d'afficher directement le formulaire*/
/* */
/*     {{ form(formContact) }}*/
/* */
/*     #}*/
/* */
/*     {#*/
/*     Permet de creer la balise form ouvrante/fermante. Si l'interieur est vide, il va génerer*/
/*     l'intégralité des inputs. Y inclus le TOKEN*/
/*     #}*/
/* <div class="tab-content col-md-offset-1 col-sm-10">*/
/*     <div class="tab-pane active" id="tab1">*/
/*     {{ form_start(formContact) }}*/
/* */
/*     {#ceci permet d'afficher le label,widget(input) et errors#}*/
/*     {#{{ form_row(formContact.email) }}#}*/
/* */
/* */
/*    {#&#123;&#35;<label>&#35;&#125; {{ form_label(formContact.email,null,{ label_attr:{ class:"form-label"}}) }}#}*/
/*    {#&#123;&#35;<input>&#35;&#125;{{ form_errors(formContact.email) }}#}*/
/*     {#&#123;&#35;<ul/li>&#35;&#125; {{ form_widget(formContact.email,{ attr:{ class:"form-control", placeholder:"bob" }, id:"bob" }) }}#}*/
/* */
/* */
/* */
/*         <div class="row ">*/
/*             <div class="col-sm-6 ">*/
/*                 {{ form_label(formContact.firstname,"First Name",{ label_attr:{ class:"form-label"}}) }}*/
/*                 {{ form_widget(formContact.firstname,{ attr:{ class:"form-control", placeholder:" First Name" } }) }}*/
/* */
/*             </div>*/
/*             <div class="col-sm-6">*/
/*                 {{ form_label(formContact.lastname,"Last Name",{ label_attr:{ class:"form-label"}}) }}*/
/*                 {{ form_widget(formContact.lastname,{ attr:{ class:"form-control", placeholder:" Last Name" } }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-4">*/
/*                 {{ form_label(formContact.username,"Username",{ label_attr:{ class:"form-label"}}) }}*/
/*                 {{ form_widget(formContact.username,{ attr:{ class:"form-control", placeholder:" Username" } }) }}*/
/*             </div>*/
/*             <div class="col-sm-8">*/
/*                 {{ form_label(formContact.email,"Email",{ label_attr:{ class:"form-label"}}) }}*/
/*                 {{ form_widget(formContact.email,{ attr:{ class:"form-control", placeholder:" Email" } }) }}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="label-wrapper">*/
/*                 {{ form_label(formContact.content,"Content",{ label_attr:{ class:"form-label"}}) }}*/
/*                     </div>*/
/*                 {{ form_widget(formContact.content,{ attr:{ class:"form-control", placeholder:" Content" } }) }}*/
/*             </div>*/
/* */
/*         </div>*/
/*         <br>*/
/*         <div class="row">*/
/*         <button class="btn vd_btn col-md-6 col-md-offset-3 ">Submit*/
/*             <span class="menu-icon">*/
/*                 <i class="fa fa-fw fa-chevron-circle-right"></i></span*/
/*                     ></button>*/
/*         </div>*/
/* */
/* */
/* </div>*/
/* */
/* */
/* */
/* */
/* */
/*     {{ form_end(formContact) }}*/
/*     </div>*/
/* */
/* */
/*     {% for message in app.session.flashbag.get("success_contact") %}*/
/* */
/*         <div class="alert alert-success alert-dismissable">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*             <h4>	<i class="icon fa fa-check"></i> Yay!</h4>*/
/*             {{ message }}*/
/*         </div>*/
/* */
/* */
/*     {% endfor %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
