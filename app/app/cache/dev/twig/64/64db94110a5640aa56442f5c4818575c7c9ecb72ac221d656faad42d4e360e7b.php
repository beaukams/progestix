<?php

/* @SonataAdmin/CRUD/tree.html.twig */
class __TwigTemplate_8f999d723e355c0c0b8a8e1e02ea00ea0ca8afaa1f1f4d05bb364c849ef7efda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/tree.html.twig", 16);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5ad4f74cea25e92033cfb4115f3d9863d8f146fd2199631c0d38c0cd5ca68a0 = $this->env->getExtension("native_profiler");
        $__internal_f5ad4f74cea25e92033cfb4115f3d9863d8f146fd2199631c0d38c0cd5ca68a0->enter($__internal_f5ad4f74cea25e92033cfb4115f3d9863d8f146fd2199631c0d38c0cd5ca68a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/tree.html.twig"));

        // line 18
        $context["tree"] = $this;
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5ad4f74cea25e92033cfb4115f3d9863d8f146fd2199631c0d38c0cd5ca68a0->leave($__internal_f5ad4f74cea25e92033cfb4115f3d9863d8f146fd2199631c0d38c0cd5ca68a0_prof);

    }

    // line 40
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_8d7516b3366aa61d7730356b98f05e7e5f68bf8fcdf248da598bbf4bcfb36f4e = $this->env->getExtension("native_profiler");
        $__internal_8d7516b3366aa61d7730356b98f05e7e5f68bf8fcdf248da598bbf4bcfb36f4e->enter($__internal_8d7516b3366aa61d7730356b98f05e7e5f68bf8fcdf248da598bbf4bcfb36f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 41
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:list_tab_menu.html.twig", "@SonataAdmin/CRUD/tree.html.twig", 41)->display(array("mode" => "tree", "action" =>         // line 43
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" =>         // line 44
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
        
        $__internal_8d7516b3366aa61d7730356b98f05e7e5f68bf8fcdf248da598bbf4bcfb36f4e->leave($__internal_8d7516b3366aa61d7730356b98f05e7e5f68bf8fcdf248da598bbf4bcfb36f4e_prof);

    }

    // line 48
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_764f0ed5d321195380b4d0ef3d105061d6574b653a39177d4aebc2d2b752e896 = $this->env->getExtension("native_profiler");
        $__internal_764f0ed5d321195380b4d0ef3d105061d6574b653a39177d4aebc2d2b752e896->enter($__internal_764f0ed5d321195380b4d0ef3d105061d6574b653a39177d4aebc2d2b752e896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 49
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => "element.tree_site_label"), "method"), "html", null, true);
        echo "
                    <div class=\"btn-group\">
                        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                            <strong class=\"text-info\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSite"]) ? $context["currentSite"] : $this->getContext($context, "currentSite")), "name", array()), "html", null, true);
        echo "</strong> <span class=\"caret\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" role=\"menu\">
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contexts"]) ? $context["contexts"] : $this->getContext($context, "contexts")));
        foreach ($context['_seq'] as $context["_key"] => $context["context"]) {
            // line 60
            echo "                                <li>
                                    <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "tree", 1 => array("context" => $this->getAttribute($context["context"], "id", array()))), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 62
            if (((isset($context["currentContext"]) ? $context["currentContext"] : $this->getContext($context, "currentContext")) && ($this->getAttribute($context["context"], "id", array()) == $this->getAttribute((isset($context["currentContext"]) ? $context["currentContext"] : $this->getContext($context, "currentContext")), "id", array())))) {
                // line 63
                echo "                                            <span class=\"pull-right\">
                                                <i class=\"fa fa-check\"></i>
                                            </span>
                                        ";
            }
            // line 67
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "name", array()), "html", null, true);
            echo "
                                    </a>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                        </ul>
                    </div>
                </h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 76
        echo $context["tree"]->getnavigate_child((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), true);
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_764f0ed5d321195380b4d0ef3d105061d6574b653a39177d4aebc2d2b752e896->leave($__internal_764f0ed5d321195380b4d0ef3d105061d6574b653a39177d4aebc2d2b752e896_prof);

    }

    // line 19
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4bbae614ec1522b61d78fc875a4ced154201a81fd7c8f1e6ee9783eda3018330 = $this->env->getExtension("native_profiler");
            $__internal_4bbae614ec1522b61d78fc875a4ced154201a81fd7c8f1e6ee9783eda3018330->enter($__internal_4bbae614ec1522b61d78fc875a4ced154201a81fd7c8f1e6ee9783eda3018330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigate_child"));

            // line 20
            echo "    <ul";
            if ((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root"))) {
                echo " class=\"sonata-tree\"";
            }
            echo ">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                if ( !(isset($context["root"]) ? $context["root"] : $this->getContext($context, "root"))) {
                    // line 22
                    echo "            <li>
                <div class=\"sonata-tree__item\">
                    ";
                    // line 24
                    if ($this->getAttribute($context["element"], "parent", array())) {
                        echo "<i class=\"fa fa-caret-right\"></i>";
                    }
                    // line 25
                    echo "                    <i class=\"fa fa-code\"></i>
                    <a class=\"sonata-tree__item__edit\" href=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                    echo "</a>
                    <i class=\"text-muted\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "description", array()), "html", null, true);
                    echo "</i>
                    <a class=\"label label-default pull-right\" href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                    echo "\">edit <i class=\"fa fa-magic\"></i></a>
                    ";
                    // line 29
                    if (true) {
                        echo "<span class=\"label label-warning pull-right\">true</span>";
                    }
                    // line 30
                    echo "                </div>

                ";
                    // line 32
                    if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                        // line 33
                        echo "                    ";
                        echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute($context["element"], "children", array()), 1 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 2 => false), "method");
                        echo "
                ";
                    }
                    // line 35
                    echo "            </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
            
            $__internal_4bbae614ec1522b61d78fc875a4ced154201a81fd7c8f1e6ee9783eda3018330->leave($__internal_4bbae614ec1522b61d78fc875a4ced154201a81fd7c8f1e6ee9783eda3018330_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 37,  197 => 35,  191 => 33,  189 => 32,  185 => 30,  181 => 29,  177 => 28,  173 => 27,  167 => 26,  164 => 25,  160 => 24,  156 => 22,  151 => 21,  144 => 20,  127 => 19,  115 => 76,  108 => 71,  97 => 67,  91 => 63,  89 => 62,  85 => 61,  82 => 60,  78 => 59,  72 => 56,  66 => 53,  60 => 49,  54 => 48,  47 => 44,  46 => 43,  44 => 41,  38 => 40,  31 => 16,  29 => 18,  11 => 16,);
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
/* {#*/
/*     This template is not used at all, it is just a template that you can use to create*/
/*     your own custom tree view.*/
/* #}*/
/* {% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}*/
/* */
/* {% import _self as tree %}*/
/* {% macro navigate_child(collection, admin, root) %}*/
/*     <ul{% if root %} class="sonata-tree"{% endif %}>*/
/*         {% for element in collection if not root %}*/
/*             <li>*/
/*                 <div class="sonata-tree__item">*/
/*                     {% if element.parent %}<i class="fa fa-caret-right"></i>{% endif %}*/
/*                     <i class="fa fa-code"></i>*/
/*                     <a class="sonata-tree__item__edit" href="{{ admin.generateObjectUrl('edit', element) }}">{{ element.name }}</a>*/
/*                     <i class="text-muted">{{ element.description }}</i>*/
/*                     <a class="label label-default pull-right" href="{{ admin.generateObjectUrl('edit', element) }}">edit <i class="fa fa-magic"></i></a>*/
/*                     {% if true %}<span class="label label-warning pull-right">true</span>{% endif %}*/
/*                 </div>*/
/* */
/*                 {% if element.children|length %}*/
/*                     {{ _self.navigate_child(element.children, admin, false) }}*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endmacro %}*/
/* */
/* {% block tab_menu %}*/
/*     {% include 'SonataAdminBundle:CRUD:list_tab_menu.html.twig' with {*/
/*         'mode':   'tree',*/
/*         'action': action,*/
/*         'admin':  admin,*/
/*     } only %}*/
/* {% endblock %}*/
/* */
/* {% block list_table %}*/
/*     <div class="col-xs-12 col-md-12">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header">*/
/*                 <h1 class="box-title">*/
/*                     {{ admin.trans('element.tree_site_label') }}*/
/*                     <div class="btn-group">*/
/*                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">*/
/*                             <strong class="text-info">{{ currentSite.name }}</strong> <span class="caret"></span>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu" role="menu">*/
/*                             {% for context in contexts %}*/
/*                                 <li>*/
/*                                     <a href="{{ admin.generateUrl('tree', { 'context': context.id }) }}">*/
/*                                         {% if currentContext and context.id == currentContext.id %}*/
/*                                             <span class="pull-right">*/
/*                                                 <i class="fa fa-check"></i>*/
/*                                             </span>*/
/*                                         {% endif %}*/
/*                                         {{ site.name }}*/
/*                                     </a>*/
/*                                 </li>*/
/*                             {% endfor%}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                 {{ tree.navigate_child(collection, admin, true) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
