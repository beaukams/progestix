<?php

/* SonataAdminBundle:CRUD:list__select.html.twig */
class __TwigTemplate_420cf053b2296942b18557bb53f94fdb41954bce557c597281790ca3dfdb009f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df529008476833ce8a67fe8850d7e8f54a08a24ca19e128a8d281385c8718ac3 = $this->env->getExtension("native_profiler");
        $__internal_df529008476833ce8a67fe8850d7e8f54a08a24ca19e128a8d281385c8718ac3->enter($__internal_df529008476833ce8a67fe8850d7e8f54a08a24ca19e128a8d281385c8718ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df529008476833ce8a67fe8850d7e8f54a08a24ca19e128a8d281385c8718ac3->leave($__internal_df529008476833ce8a67fe8850d7e8f54a08a24ca19e128a8d281385c8718ac3_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ebccf229e8b2e12b96d629b90747bc1a7ebbb3f42ba7c72925e7b09f4d0f91ec = $this->env->getExtension("native_profiler");
        $__internal_ebccf229e8b2e12b96d629b90747bc1a7ebbb3f42ba7c72925e7b09f4d0f91ec->enter($__internal_ebccf229e8b2e12b96d629b90747bc1a7ebbb3f42ba7c72925e7b09f4d0f91ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_ebccf229e8b2e12b96d629b90747bc1a7ebbb3f42ba7c72925e7b09f4d0f91ec->leave($__internal_ebccf229e8b2e12b96d629b90747bc1a7ebbb3f42ba7c72925e7b09f4d0f91ec_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 17,  39 => 15,  33 => 14,  18 => 12,);
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
/* {% extends admin.getTemplate('base_list_field') %}*/
/* */
/* {% block field %}*/
/*     <a class="btn btn-primary" href="{{ admin.generateUrl('list') }}">*/
/*         <i class="fa fa-check"></i>*/
/*         {{ 'list_select'|trans({}, 'SonataAdminBundle') }}*/
/*     </a>*/
/* {% endblock %}*/
/* */
