<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_bf6d11a13564ba841c8e617396a1e85efe4c5c8566e8b6f17d61c468f73e275b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba1e4d152cabf87e50609b29c84f7ca1855324b7ea488c0827fb822d48dbd800 = $this->env->getExtension("native_profiler");
        $__internal_ba1e4d152cabf87e50609b29c84f7ca1855324b7ea488c0827fb822d48dbd800->enter($__internal_ba1e4d152cabf87e50609b29c84f7ca1855324b7ea488c0827fb822d48dbd800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba1e4d152cabf87e50609b29c84f7ca1855324b7ea488c0827fb822d48dbd800->leave($__internal_ba1e4d152cabf87e50609b29c84f7ca1855324b7ea488c0827fb822d48dbd800_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a823936c813a26bdb864b6a9a7d459037e8cf9ffca0f5d8cbaeccb19757741f1 = $this->env->getExtension("native_profiler");
        $__internal_a823936c813a26bdb864b6a9a7d459037e8cf9ffca0f5d8cbaeccb19757741f1->enter($__internal_a823936c813a26bdb864b6a9a7d459037e8cf9ffca0f5d8cbaeccb19757741f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_a823936c813a26bdb864b6a9a7d459037e8cf9ffca0f5d8cbaeccb19757741f1->leave($__internal_a823936c813a26bdb864b6a9a7d459037e8cf9ffca0f5d8cbaeccb19757741f1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}*/
/* */
/* {% block field %}*/
/*     {% if value is not null %}*/
/*         {{ field_description.options.currency }} {{ value }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
