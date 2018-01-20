<?php

/* todo/create.html.twig */
class __TwigTemplate_cde06dbfdc826ab24d4c1a7e2d71fd23a4f7386149659a358ece36b671d3e2e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/create.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bafa912df04d45525f49628695d97f60832b7827512a5a561f62d248033bf8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bafa912df04d45525f49628695d97f60832b7827512a5a561f62d248033bf8d0->enter($__internal_bafa912df04d45525f49628695d97f60832b7827512a5a561f62d248033bf8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $__internal_2ccc48ddc2a97c66f0a8601b3644d457e488fb62c5bb533b7309e90c699efe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ccc48ddc2a97c66f0a8601b3644d457e488fb62c5bb533b7309e90c699efe45->enter($__internal_2ccc48ddc2a97c66f0a8601b3644d457e488fb62c5bb533b7309e90c699efe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bafa912df04d45525f49628695d97f60832b7827512a5a561f62d248033bf8d0->leave($__internal_bafa912df04d45525f49628695d97f60832b7827512a5a561f62d248033bf8d0_prof);

        
        $__internal_2ccc48ddc2a97c66f0a8601b3644d457e488fb62c5bb533b7309e90c699efe45->leave($__internal_2ccc48ddc2a97c66f0a8601b3644d457e488fb62c5bb533b7309e90c699efe45_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce82c1b1dd14733e93ad96940571cda61efe793da79e24e2241c017286c4df15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce82c1b1dd14733e93ad96940571cda61efe793da79e24e2241c017286c4df15->enter($__internal_ce82c1b1dd14733e93ad96940571cda61efe793da79e24e2241c017286c4df15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c58b88470422a755ed9f752fd7627d029c2506534c649e7ef287f161eadaec8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58b88470422a755ed9f752fd7627d029c2506534c649e7ef287f161eadaec8a->enter($__internal_c58b88470422a755ed9f752fd7627d029c2506534c649e7ef287f161eadaec8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " \t<h2 class=\"page-header\">Add Todo</h2>
 \t";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
 \t";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
 \t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
 ";
        
        $__internal_c58b88470422a755ed9f752fd7627d029c2506534c649e7ef287f161eadaec8a->leave($__internal_c58b88470422a755ed9f752fd7627d029c2506534c649e7ef287f161eadaec8a_prof);

        
        $__internal_ce82c1b1dd14733e93ad96940571cda61efe793da79e24e2241c017286c4df15->leave($__internal_ce82c1b1dd14733e93ad96940571cda61efe793da79e24e2241c017286c4df15_prof);

    }

    public function getTemplateName()
    {
        return "todo/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  56 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
 \t<h2 class=\"page-header\">Add Todo</h2>
 \t{{form_start(form)}}
 \t{{form_widget(form)}}
 \t{{form_end(form)}}
 {% endblock %}", "todo/create.html.twig", "C:\\xampp\\htdocs\\gh\\app\\Resources\\views\\todo\\create.html.twig");
    }
}
