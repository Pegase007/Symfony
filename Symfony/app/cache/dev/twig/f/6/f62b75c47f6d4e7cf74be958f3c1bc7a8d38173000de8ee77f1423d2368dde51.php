<?php

/* TroisWABackBundle:Main:contact.html.twig */
class __TwigTemplate_45a5bdc6e5108998c6640d26cba4cba5ef6ccc2b25f237c4ca3200f244751698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TroisWABackBundle::layoutBo2.html.twig", "TroisWABackBundle:Main:contact.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TroisWABackBundle::layoutBo2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd0854122351488d707764ed1039eda6245a6231c4f90eba0c29f749dddbf27a = $this->env->getExtension("native_profiler");
        $__internal_dd0854122351488d707764ed1039eda6245a6231c4f90eba0c29f749dddbf27a->enter($__internal_dd0854122351488d707764ed1039eda6245a6231c4f90eba0c29f749dddbf27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TroisWABackBundle:Main:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd0854122351488d707764ed1039eda6245a6231c4f90eba0c29f749dddbf27a->leave($__internal_dd0854122351488d707764ed1039eda6245a6231c4f90eba0c29f749dddbf27a_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_4fb51a1e8f8e5735928ae4773d40e5421e576240542641df831357fa89d638cb = $this->env->getExtension("native_profiler");
        $__internal_4fb51a1e8f8e5735928ae4773d40e5421e576240542641df831357fa89d638cb->enter($__internal_4fb51a1e8f8e5735928ae4773d40e5421e576240542641df831357fa89d638cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        echo " Contact ";
        
        $__internal_4fb51a1e8f8e5735928ae4773d40e5421e576240542641df831357fa89d638cb->leave($__internal_4fb51a1e8f8e5735928ae4773d40e5421e576240542641df831357fa89d638cb_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_886ad89bd4203e74b77a434a3a11611a30b65ae17a2e6151ba9aee956e10f5af = $this->env->getExtension("native_profiler");
        $__internal_886ad89bd4203e74b77a434a3a11611a30b65ae17a2e6151ba9aee956e10f5af->enter($__internal_886ad89bd4203e74b77a434a3a11611a30b65ae17a2e6151ba9aee956e10f5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        // line 13
        echo "
    ";
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success_contact"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "
        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <h4>\t<i class=\"icon fa fa-check\"></i> Yay!</h4>
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
    <div class=\"tab-content col-md-offset-1 col-sm-10\">
        <div class=\"tab-pane active\" id=\"tab1\">
            ";
        // line 32
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo " ";
        // line 33
        echo "
            ";
        // line 35
        echo "            ";
        // line 36
        echo "

            ";
        // line 39
        echo "            ";
        // line 40
        echo "            ";
        // line 41
        echo "


            <div class=\"row \">
                <div class=\"col-sm-6 \">
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "First Name"));
        echo "
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " First Name")));
        echo "
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'errors');
        echo "
                </div>
                <div class=\"col-sm-6\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "lastname", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Last Name"));
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Last Name")));
        echo "
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "lastname", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "username", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Username"));
        echo "
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Username")));
        echo "
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "username", array()), 'errors');
        echo "
                </div>
                <div class=\"col-sm-8\">
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "email", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Email"));
        echo "
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Email")));
        echo "
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "email", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"label-wrapper\">
                        ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "content", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Content"));
        echo "
                    </div>
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "content", array()), 'widget', array("attr" => array("class" => "form-control noresize", "placeholder" => " Content")));
        echo "
                    ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "content", array()), 'errors');
        echo "
                </div>

            </div>
            <br>
            <div class=\"row\">
                <button class=\"btn btn-warning  col-md-6 col-md-offset-3\" type=\"submit\">Submit
            <span class=\"menu-icon\">
                <i class=\"fa fa-fw fa-chevron-circle-right\"></i></span
                    ></button>
            </div>


        </div>

        ";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'form_end');
        echo "
    </div>






";
        
        $__internal_886ad89bd4203e74b77a434a3a11611a30b65ae17a2e6151ba9aee956e10f5af->leave($__internal_886ad89bd4203e74b77a434a3a11611a30b65ae17a2e6151ba9aee956e10f5af_prof);

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
        return array (  197 => 89,  179 => 74,  175 => 73,  170 => 71,  161 => 65,  157 => 64,  153 => 63,  147 => 60,  143 => 59,  139 => 58,  131 => 53,  127 => 52,  123 => 51,  117 => 48,  113 => 47,  109 => 46,  102 => 41,  100 => 40,  98 => 39,  94 => 36,  92 => 35,  89 => 33,  85 => 32,  80 => 28,  69 => 23,  63 => 19,  58 => 18,  55 => 13,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "TroisWABackBundle::layoutBo2.html.twig" %}*/
/* */
/* {% block page %} Contact {% endblock %}*/
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
/*     <div class="tab-content col-md-offset-1 col-sm-10">*/
/*         <div class="tab-pane active" id="tab1">*/
/*             {#{{ form_start(formContact) }}#}*/
/*             {{ form_start(formContact,{'attr':{novalidate:"novalidate"}}) }} {#Desactive le html5 pour tout le formulaire #}*/
/* */
/*             {#ceci permet d'afficher le label,widget(input) et errors#}*/
/*             {#{{ form_row(formContact.email) }}#}*/
/* */
/* */
/*             {#&#123;&#35;<label>&#35;&#125; {{ form_label(formContact.email,null,{ label_attr:{ class:"form-label"}}) }}#}*/
/*             {#&#123;&#35;<input>&#35;&#125;{{ form_errors(formContact.email) }}#}*/
/*             {#&#123;&#35;<ul/li>&#35;&#125; {{ form_widget(formContact.email,{ attr:{ class:"form-control", placeholder:"bob" }, id:"bob" }) }}#}*/
/* */
/* */
/* */
/*             <div class="row ">*/
/*                 <div class="col-sm-6 ">*/
/*                     {{ form_label(formContact.firstname,"First Name",{ label_attr:{ class:"form-label"}}) }}*/
/*                     {{ form_widget(formContact.firstname,{ attr:{ class:"form-control", placeholder:" First Name" } }) }}*/
/*                     {{ form_errors(formContact.firstname) }}*/
/*                 </div>*/
/*                 <div class="col-sm-6">*/
/*                     {{ form_label(formContact.lastname,"Last Name",{ label_attr:{ class:"form-label"}}) }}*/
/*                     {{ form_widget(formContact.lastname,{ attr:{ class:"form-control", placeholder:" Last Name" } }) }}*/
/*                     {{ form_errors(formContact.lastname) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-4">*/
/*                     {{ form_label(formContact.username,"Username",{ label_attr:{ class:"form-label"}}) }}*/
/*                     {{ form_widget(formContact.username,{ attr:{ class:"form-control", placeholder:" Username" } }) }}*/
/*                     {{ form_errors(formContact.username) }}*/
/*                 </div>*/
/*                 <div class="col-sm-8">*/
/*                     {{ form_label(formContact.email,"Email",{ label_attr:{ class:"form-label"}}) }}*/
/*                     {{ form_widget(formContact.email,{ attr:{ class:"form-control", placeholder:" Email" } }) }}*/
/*                     {{ form_errors(formContact.email) }}*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                     <div class="label-wrapper">*/
/*                         {{ form_label(formContact.content,"Content",{ label_attr:{ class:"form-label"}}) }}*/
/*                     </div>*/
/*                     {{ form_widget(formContact.content,{ attr:{ class:"form-control noresize", placeholder:" Content" } }) }}*/
/*                     {{ form_errors(formContact.content) }}*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <br>*/
/*             <div class="row">*/
/*                 <button class="btn btn-warning  col-md-6 col-md-offset-3" type="submit">Submit*/
/*             <span class="menu-icon">*/
/*                 <i class="fa fa-fw fa-chevron-circle-right"></i></span*/
/*                     ></button>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/*         {{ form_end(formContact) }}*/
/*     </div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
