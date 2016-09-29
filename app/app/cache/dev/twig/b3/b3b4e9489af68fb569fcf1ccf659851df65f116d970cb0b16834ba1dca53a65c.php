<?php

/* @SonataUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_c38ed73c16173942435498a77643350dccc8787cdf9bfaf8560abc138221c30e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataUserBundle:Profile:action.html.twig", "@SonataUser/ChangePassword/changePassword.html.twig", 1);
        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b45396ad1da1a061fa01ef32599a70eea34373e9d62f5c28358ac50c58a7111 = $this->env->getExtension("native_profiler");
        $__internal_0b45396ad1da1a061fa01ef32599a70eea34373e9d62f5c28358ac50c58a7111->enter($__internal_0b45396ad1da1a061fa01ef32599a70eea34373e9d62f5c28358ac50c58a7111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b45396ad1da1a061fa01ef32599a70eea34373e9d62f5c28358ac50c58a7111->leave($__internal_0b45396ad1da1a061fa01ef32599a70eea34373e9d62f5c28358ac50c58a7111_prof);

    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        $__internal_30a6cc842f9b41e3c50bda5566be0e6948427f6ad4fb00a6117b2606e7021907 = $this->env->getExtension("native_profiler");
        $__internal_30a6cc842f9b41e3c50bda5566be0e6948427f6ad4fb00a6117b2606e7021907->enter($__internal_30a6cc842f9b41e3c50bda5566be0e6948427f6ad4fb00a6117b2606e7021907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_profile_content"));

        // line 4
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        </div>
    </div>
";
        
        $__internal_30a6cc842f9b41e3c50bda5566be0e6948427f6ad4fb00a6117b2606e7021907->leave($__internal_30a6cc842f9b41e3c50bda5566be0e6948427f6ad4fb00a6117b2606e7021907_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_26ff414bf000f5c294b3c8e81415125d0536c48d439feca308a89457994a8173 = $this->env->getExtension("native_profiler");
        $__internal_26ff414bf000f5c294b3c8e81415125d0536c48d439feca308a89457994a8173->enter($__internal_26ff414bf000f5c294b3c8e81415125d0536c48d439feca308a89457994a8173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "                ";
        $this->loadTemplate("SonataUserBundle:ChangePassword:changePassword_content.html.twig", "@SonataUser/ChangePassword/changePassword.html.twig", 12)->display($context);
        // line 13
        echo "            ";
        
        $__internal_26ff414bf000f5c294b3c8e81415125d0536c48d439feca308a89457994a8173->leave($__internal_26ff414bf000f5c294b3c8e81415125d0536c48d439feca308a89457994a8173_prof);

    }

    public function getTemplateName()
    {
        return "@SonataUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  72 => 12,  66 => 11,  57 => 14,  55 => 11,  49 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SonataUserBundle:Profile:action.html.twig" %}*/
/* */
/* {% block sonata_profile_content %}*/
/*     {{ form_errors(form) }}*/
/* */
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title">{{ "title_user_edit_password" | trans({}, 'SonataUserBundle') }}</h3>*/
/*         </div>*/
/*         <div class="panel-body">*/
/*             {% block fos_user_content %}*/
/*                 {% include "SonataUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*     </div>*/
/* {% endblock sonata_profile_content %}*/
/* */
