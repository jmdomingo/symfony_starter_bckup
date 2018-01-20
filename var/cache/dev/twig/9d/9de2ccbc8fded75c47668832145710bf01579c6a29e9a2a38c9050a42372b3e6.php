<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_79679ad6c3dd2a55ae6d34e4ec2393f5eb46513f7d85244bac745220d300d58a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_300993cfb1df45e96f51fe0c8d7068088d44ea342ed147cb6a983b10e27a14f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_300993cfb1df45e96f51fe0c8d7068088d44ea342ed147cb6a983b10e27a14f8->enter($__internal_300993cfb1df45e96f51fe0c8d7068088d44ea342ed147cb6a983b10e27a14f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f5bf540fca20103458438f08469679a8f00aeaa38edf1db1e36b20f8252e3193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bf540fca20103458438f08469679a8f00aeaa38edf1db1e36b20f8252e3193->enter($__internal_f5bf540fca20103458438f08469679a8f00aeaa38edf1db1e36b20f8252e3193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_300993cfb1df45e96f51fe0c8d7068088d44ea342ed147cb6a983b10e27a14f8->leave($__internal_300993cfb1df45e96f51fe0c8d7068088d44ea342ed147cb6a983b10e27a14f8_prof);

        
        $__internal_f5bf540fca20103458438f08469679a8f00aeaa38edf1db1e36b20f8252e3193->leave($__internal_f5bf540fca20103458438f08469679a8f00aeaa38edf1db1e36b20f8252e3193_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1632ef04572ff0456799f5c4f65ac86e6e17803f4369b58f5ccf44bb999ac476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1632ef04572ff0456799f5c4f65ac86e6e17803f4369b58f5ccf44bb999ac476->enter($__internal_1632ef04572ff0456799f5c4f65ac86e6e17803f4369b58f5ccf44bb999ac476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46fa1c80cda1dce61aa947752ffb7725aad916c9e9415669186ef8aff65281e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46fa1c80cda1dce61aa947752ffb7725aad916c9e9415669186ef8aff65281e5->enter($__internal_46fa1c80cda1dce61aa947752ffb7725aad916c9e9415669186ef8aff65281e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_46fa1c80cda1dce61aa947752ffb7725aad916c9e9415669186ef8aff65281e5->leave($__internal_46fa1c80cda1dce61aa947752ffb7725aad916c9e9415669186ef8aff65281e5_prof);

        
        $__internal_1632ef04572ff0456799f5c4f65ac86e6e17803f4369b58f5ccf44bb999ac476->leave($__internal_1632ef04572ff0456799f5c4f65ac86e6e17803f4369b58f5ccf44bb999ac476_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61831e020efac46afd34af6161ed2f5e73864696d5d5bd0d357a51defcfa2d8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61831e020efac46afd34af6161ed2f5e73864696d5d5bd0d357a51defcfa2d8a->enter($__internal_61831e020efac46afd34af6161ed2f5e73864696d5d5bd0d357a51defcfa2d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8313db78b675f0e6b88afcbd8e42580d86ae5e8ef5986a481bc76ab51a971a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8313db78b675f0e6b88afcbd8e42580d86ae5e8ef5986a481bc76ab51a971a17->enter($__internal_8313db78b675f0e6b88afcbd8e42580d86ae5e8ef5986a481bc76ab51a971a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_8313db78b675f0e6b88afcbd8e42580d86ae5e8ef5986a481bc76ab51a971a17->leave($__internal_8313db78b675f0e6b88afcbd8e42580d86ae5e8ef5986a481bc76ab51a971a17_prof);

        
        $__internal_61831e020efac46afd34af6161ed2f5e73864696d5d5bd0d357a51defcfa2d8a->leave($__internal_61831e020efac46afd34af6161ed2f5e73864696d5d5bd0d357a51defcfa2d8a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_de9c78187a8e7cd6cb446aeae08b91326c591ef25e2538981c7602c4bce80741 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9c78187a8e7cd6cb446aeae08b91326c591ef25e2538981c7602c4bce80741->enter($__internal_de9c78187a8e7cd6cb446aeae08b91326c591ef25e2538981c7602c4bce80741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_83e6bf15d3ea17ad988d6a5e15dc4a6678d50a56078661d2aaeff409357f2fb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e6bf15d3ea17ad988d6a5e15dc4a6678d50a56078661d2aaeff409357f2fb3->enter($__internal_83e6bf15d3ea17ad988d6a5e15dc4a6678d50a56078661d2aaeff409357f2fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_83e6bf15d3ea17ad988d6a5e15dc4a6678d50a56078661d2aaeff409357f2fb3->leave($__internal_83e6bf15d3ea17ad988d6a5e15dc4a6678d50a56078661d2aaeff409357f2fb3_prof);

        
        $__internal_de9c78187a8e7cd6cb446aeae08b91326c591ef25e2538981c7602c4bce80741->leave($__internal_de9c78187a8e7cd6cb446aeae08b91326c591ef25e2538981c7602c4bce80741_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\gh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
