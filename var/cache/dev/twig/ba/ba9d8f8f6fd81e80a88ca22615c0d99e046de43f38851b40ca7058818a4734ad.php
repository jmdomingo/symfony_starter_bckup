<?php

/* todo/edit.html.twig */
class __TwigTemplate_90435d95db1b3121548c6ccbb681a735c236dbaf994bb93d7ac3cf77c34171bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/edit.html.twig", 1);
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
        $__internal_a85dbe430b6d6705105391d4ca3dc79170f61f545262fd18451923f11dfc6c73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a85dbe430b6d6705105391d4ca3dc79170f61f545262fd18451923f11dfc6c73->enter($__internal_a85dbe430b6d6705105391d4ca3dc79170f61f545262fd18451923f11dfc6c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $__internal_145f10d7965bf836bb5a760bf810d785cbe7c3d762931c8c5f92e115cbeb98af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145f10d7965bf836bb5a760bf810d785cbe7c3d762931c8c5f92e115cbeb98af->enter($__internal_145f10d7965bf836bb5a760bf810d785cbe7c3d762931c8c5f92e115cbeb98af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a85dbe430b6d6705105391d4ca3dc79170f61f545262fd18451923f11dfc6c73->leave($__internal_a85dbe430b6d6705105391d4ca3dc79170f61f545262fd18451923f11dfc6c73_prof);

        
        $__internal_145f10d7965bf836bb5a760bf810d785cbe7c3d762931c8c5f92e115cbeb98af->leave($__internal_145f10d7965bf836bb5a760bf810d785cbe7c3d762931c8c5f92e115cbeb98af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_85adbd74e588d83b668a2e2eec74f1a63da07eda71c5eb6a39b4d32db2e94fc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85adbd74e588d83b668a2e2eec74f1a63da07eda71c5eb6a39b4d32db2e94fc4->enter($__internal_85adbd74e588d83b668a2e2eec74f1a63da07eda71c5eb6a39b4d32db2e94fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cad6bfe82572d820e4918043d8845c1c27f2530b6ba3ae2881a98bcab4560edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad6bfe82572d820e4918043d8845c1c27f2530b6ba3ae2881a98bcab4560edb->enter($__internal_cad6bfe82572d820e4918043d8845c1c27f2530b6ba3ae2881a98bcab4560edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " \t<h2 class=\"page-header\">Edit Todo</h2>
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
        
        $__internal_cad6bfe82572d820e4918043d8845c1c27f2530b6ba3ae2881a98bcab4560edb->leave($__internal_cad6bfe82572d820e4918043d8845c1c27f2530b6ba3ae2881a98bcab4560edb_prof);

        
        $__internal_85adbd74e588d83b668a2e2eec74f1a63da07eda71c5eb6a39b4d32db2e94fc4->leave($__internal_85adbd74e588d83b668a2e2eec74f1a63da07eda71c5eb6a39b4d32db2e94fc4_prof);

    }

    public function getTemplateName()
    {
        return "todo/edit.html.twig";
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
 \t<h2 class=\"page-header\">Edit Todo</h2>
 \t{{form_start(form)}}
 \t{{form_widget(form)}}
 \t{{form_end(form)}}
 {% endblock %}", "todo/edit.html.twig", "C:\\xampp\\htdocs\\gh\\app\\Resources\\views\\todo\\edit.html.twig");
    }
}
