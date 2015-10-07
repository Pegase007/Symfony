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
            'form_errors' => array($this, 'block_form_errors'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TroisWABackBundle::layoutBo2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea9d9e0887fccaa6c35fd1dc7b538d18fbb0303d85f733e1a235f9463c74b980 = $this->env->getExtension("native_profiler");
        $__internal_ea9d9e0887fccaa6c35fd1dc7b538d18fbb0303d85f733e1a235f9463c74b980->enter($__internal_ea9d9e0887fccaa6c35fd1dc7b538d18fbb0303d85f733e1a235f9463c74b980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TroisWABackBundle:Main:contact.html.twig"));

        // line 7
        $this->env->getExtension('form')->renderer->setTheme((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea9d9e0887fccaa6c35fd1dc7b538d18fbb0303d85f733e1a235f9463c74b980->leave($__internal_ea9d9e0887fccaa6c35fd1dc7b538d18fbb0303d85f733e1a235f9463c74b980_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_784bbfef28d671b1f473958e34df6f2c83e4921a14b2f2a2f4bf39518343a811 = $this->env->getExtension("native_profiler");
        $__internal_784bbfef28d671b1f473958e34df6f2c83e4921a14b2f2a2f4bf39518343a811->enter($__internal_784bbfef28d671b1f473958e34df6f2c83e4921a14b2f2a2f4bf39518343a811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        echo " Contact ";
        
        $__internal_784bbfef28d671b1f473958e34df6f2c83e4921a14b2f2a2f4bf39518343a811->leave($__internal_784bbfef28d671b1f473958e34df6f2c83e4921a14b2f2a2f4bf39518343a811_prof);

    }

    // line 10
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d48fa1be63553cb0f69d1b3f28ebe87d293114345a4bda19e9e542fb26f64b65 = $this->env->getExtension("native_profiler");
        $__internal_d48fa1be63553cb0f69d1b3f28ebe87d293114345a4bda19e9e542fb26f64b65->enter($__internal_d48fa1be63553cb0f69d1b3f28ebe87d293114345a4bda19e9e542fb26f64b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 11
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "<div class=\"alert alert-danger alert-dismissable alert-condensed\">
                    <i class=\"fa fa-exclamation-triangle append-icon\"></i>
                    <strong>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</strong>

                </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_d48fa1be63553cb0f69d1b3f28ebe87d293114345a4bda19e9e542fb26f64b65->leave($__internal_d48fa1be63553cb0f69d1b3f28ebe87d293114345a4bda19e9e542fb26f64b65_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_1beba56322270716c28a9d02cd390f6ada95462fd82b43dde441858ad1faa900 = $this->env->getExtension("native_profiler");
        $__internal_1beba56322270716c28a9d02cd390f6ada95462fd82b43dde441858ad1faa900->enter($__internal_1beba56322270716c28a9d02cd390f6ada95462fd82b43dde441858ad1faa900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "    ";
        // line 32
        echo "
    ";
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success_contact"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            echo "
        <div class=\"alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
            <h4>\t<i class=\"icon fa fa-check\"></i> Yay!</h4>
            ";
            // line 42
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    <div class=\"tab-content col-md-offset-1 col-sm-10\">
        <div class=\"tab-pane active\" id=\"tab1\">
            ";
        // line 51
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo " ";
        // line 52
        echo "
            ";
        // line 54
        echo "            ";
        // line 55
        echo "

            ";
        // line 58
        echo "            ";
        // line 59
        echo "            ";
        // line 60
        echo "


            <div class=\"row \">
                <div class=\"col-sm-6 \">

                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "First Name"));
        echo "
                    <div class=\"form-group ";
        // line 67
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'errors')) {
            echo " has-error ";
        }
        echo "\">
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " First Name")));
        echo "
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "lastname", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Last Name"));
        echo "
                    <div class=\"form-group ";
        // line 74
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'errors')) {
            echo " has-error ";
        }
        echo "\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "lastname", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Last Name")));
        echo "
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "lastname", array()), 'errors');
        echo "
                        </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-5\">
                    ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "username", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Username"));
        echo "
                    <div class=\"form-group ";
        // line 83
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'errors')) {
            echo " has-error ";
        }
        echo "\">
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Username")));
        echo "
                    ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "username", array()), 'errors');
        echo "
                        </div>
                </div>
                <div class=\"col-sm-7\">
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "email", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Email"));
        echo "
                    <div class=\"form-group ";
        // line 90
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'errors')) {
            echo " has-error ";
        }
        echo "\">
                    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => " Email")));
        echo "
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "email", array()), 'errors');
        echo "
                        </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    <div class=\"label-wrapper\">
                        ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "content", array()), 'label', array("label_attr" => array("class" => "form-label"), "label" => "Content"));
        echo "
                    </div>
                    <div class=\"form-group ";
        // line 101
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "firstname", array()), 'errors')) {
            echo " has-error ";
        }
        echo "\">
                    ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "content", array()), 'widget', array("attr" => array("class" => "form-control noresize", "placeholder" => " Content")));
        echo "
                    ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), "content", array()), 'errors');
        echo "
                        </div>
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
        // line 119
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'form_end');
        echo "
    </div>






";
        
        $__internal_1beba56322270716c28a9d02cd390f6ada95462fd82b43dde441858ad1faa900->leave($__internal_1beba56322270716c28a9d02cd390f6ada95462fd82b43dde441858ad1faa900_prof);

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
        return array (  268 => 119,  249 => 103,  245 => 102,  239 => 101,  234 => 99,  224 => 92,  220 => 91,  214 => 90,  210 => 89,  203 => 85,  199 => 84,  193 => 83,  189 => 82,  180 => 76,  176 => 75,  170 => 74,  166 => 73,  159 => 69,  155 => 68,  149 => 67,  145 => 66,  137 => 60,  135 => 59,  133 => 58,  129 => 55,  127 => 54,  124 => 52,  120 => 51,  115 => 47,  104 => 42,  98 => 38,  93 => 37,  90 => 32,  88 => 25,  82 => 24,  67 => 16,  63 => 14,  59 => 13,  57 => 11,  51 => 10,  39 => 3,  32 => 1,  30 => 7,  11 => 1,);
    }
}
/* {% extends "TroisWABackBundle::layoutBo2.html.twig" %}*/
/* */
/* {% block page %} Contact {% endblock %}*/
/* */
/* {# Effectuer la modif des errors#}*/
/* */
/* {% form_theme formContact _self  %}*/
/* */
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/* */
/*             {%- for error in errors -%}*/
/*                 <div class="alert alert-danger alert-dismissable alert-condensed">*/
/*                     <i class="fa fa-exclamation-triangle append-icon"></i>*/
/*                     <strong>{{ error.message }}</strong>*/
/* */
/*                 </div>*/
/*             {%- endfor -%}*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
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
/* */
/*                     {{ form_label(formContact.firstname,"First Name",{ label_attr:{ class:"form-label"}}) }}*/
/*                     <div class="form-group {% if form_errors(formContact.firstname) %} has-error {% endif %}">*/
/*                     {{ form_widget(formContact.firstname,{ attr:{ class:"form-control", placeholder:" First Name" } }) }}*/
/*                     {{ form_errors(formContact.firstname) }}*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-sm-6">*/
/*                     {{ form_label(formContact.lastname,"Last Name",{ label_attr:{ class:"form-label"}}) }}*/
/*                     <div class="form-group {% if form_errors(formContact.firstname) %} has-error {% endif %}">*/
/*                     {{ form_widget(formContact.lastname,{ attr:{ class:"form-control", placeholder:" Last Name" } }) }}*/
/*                     {{ form_errors(formContact.lastname) }}*/
/*                         </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-5">*/
/*                     {{ form_label(formContact.username,"Username",{ label_attr:{ class:"form-label"}}) }}*/
/*                     <div class="form-group {% if form_errors(formContact.firstname) %} has-error {% endif %}">*/
/*                     {{ form_widget(formContact.username,{ attr:{ class:"form-control", placeholder:" Username" } }) }}*/
/*                     {{ form_errors(formContact.username) }}*/
/*                         </div>*/
/*                 </div>*/
/*                 <div class="col-sm-7">*/
/*                     {{ form_label(formContact.email,"Email",{ label_attr:{ class:"form-label"}}) }}*/
/*                     <div class="form-group {% if form_errors(formContact.firstname) %} has-error {% endif %}">*/
/*                     {{ form_widget(formContact.email,{ attr:{ class:"form-control", placeholder:" Email" } }) }}*/
/*                     {{ form_errors(formContact.email) }}*/
/*                         </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                     <div class="label-wrapper">*/
/*                         {{ form_label(formContact.content,"Content",{ label_attr:{ class:"form-label"}}) }}*/
/*                     </div>*/
/*                     <div class="form-group {% if form_errors(formContact.firstname) %} has-error {% endif %}">*/
/*                     {{ form_widget(formContact.content,{ attr:{ class:"form-control noresize", placeholder:" Content" } }) }}*/
/*                     {{ form_errors(formContact.content) }}*/
/*                         </div>*/
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
