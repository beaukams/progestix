<?php

/* SonataAdminBundle:CRUD:show_time.html.twig */
class __TwigTemplate_1eaea6201114dc97b8536b05085f79863b3a22e345926f3956dca96a74da4152 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_time.html.twig", 12);
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
        $__internal_c5f34913c43d65a2fa6af30566fb0552d49acff271b5a099582b79da6b3612c5 = $this->env->getExtension("native_profiler");
        $__internal_c5f34913c43d65a2fa6af30566fb0552d49acff271b5a099582b79da6b3612c5->enter($__internal_c5f34913c43d65a2fa6af30566fb0552d49acff271b5a099582b79da6b3612c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5f34913c43d65a2fa6af30566fb0552d49acff271b5a099582b79da6b3612c5->leave($__internal_c5f34913c43d65a2fa6af30566fb0552d49acff271b5a099582b79da6b3612c5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c0f92d1929e39d898e2e1d533d8177bdefee8cbe09a739151452b58c7f942948 = $this->env->getExtension("native_profiler");
        $__internal_c0f92d1929e39d898e2e1d533d8177bdefee8cbe09a739151452b58c7f942948->enter($__internal_c0f92d1929e39d898e2e1d533d8177bdefee8cbe09a739151452b58c7f942948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_c0f92d1929e39d898e2e1d533d8177bdefee8cbe09a739151452b58c7f942948->leave($__internal_c0f92d1929e39d898e2e1d533d8177bdefee8cbe09a739151452b58c7f942948_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
/*     {%- if value is empty -%}*/
/*         &nbsp;*/
/*     {%- else -%}*/
/*         {{ value|date('H:i:s') }}*/
/*     {%- endif -%}*/
/* {% endblock %}*/
/* */
