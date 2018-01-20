<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bfbd10b3e687de38dbada56a6bee287b42af00ae891cf8cf120586a60cce5d8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_019cf5182e4f55455261eb5d6a75fa2d4b7901b68038f04d2e330673306d5e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_019cf5182e4f55455261eb5d6a75fa2d4b7901b68038f04d2e330673306d5e04->enter($__internal_019cf5182e4f55455261eb5d6a75fa2d4b7901b68038f04d2e330673306d5e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9b8e3121a240da64c581907c91fbd76b889434eed6b534d191adf8b06630beac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8e3121a240da64c581907c91fbd76b889434eed6b534d191adf8b06630beac->enter($__internal_9b8e3121a240da64c581907c91fbd76b889434eed6b534d191adf8b06630beac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_019cf5182e4f55455261eb5d6a75fa2d4b7901b68038f04d2e330673306d5e04->leave($__internal_019cf5182e4f55455261eb5d6a75fa2d4b7901b68038f04d2e330673306d5e04_prof);

        
        $__internal_9b8e3121a240da64c581907c91fbd76b889434eed6b534d191adf8b06630beac->leave($__internal_9b8e3121a240da64c581907c91fbd76b889434eed6b534d191adf8b06630beac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac725c7845c7be93f7875ef0ef2e98f0ee0183f997458f29135169ff1d499bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac725c7845c7be93f7875ef0ef2e98f0ee0183f997458f29135169ff1d499bae->enter($__internal_ac725c7845c7be93f7875ef0ef2e98f0ee0183f997458f29135169ff1d499bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f6c004bb8efeb8ad9a3e4d6c62240d1475e13d678479f6975a87a95468003e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c004bb8efeb8ad9a3e4d6c62240d1475e13d678479f6975a87a95468003e30->enter($__internal_f6c004bb8efeb8ad9a3e4d6c62240d1475e13d678479f6975a87a95468003e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_f6c004bb8efeb8ad9a3e4d6c62240d1475e13d678479f6975a87a95468003e30->leave($__internal_f6c004bb8efeb8ad9a3e4d6c62240d1475e13d678479f6975a87a95468003e30_prof);

        
        $__internal_ac725c7845c7be93f7875ef0ef2e98f0ee0183f997458f29135169ff1d499bae->leave($__internal_ac725c7845c7be93f7875ef0ef2e98f0ee0183f997458f29135169ff1d499bae_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e5df1f8ece332ea74f06f177685b41a13cdbb85a6c30519d40b8df676ecdaa85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5df1f8ece332ea74f06f177685b41a13cdbb85a6c30519d40b8df676ecdaa85->enter($__internal_e5df1f8ece332ea74f06f177685b41a13cdbb85a6c30519d40b8df676ecdaa85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_82aebaade15c407c352c9d6db6d2152f97181985122234439e6450cbb831805d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aebaade15c407c352c9d6db6d2152f97181985122234439e6450cbb831805d->enter($__internal_82aebaade15c407c352c9d6db6d2152f97181985122234439e6450cbb831805d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_82aebaade15c407c352c9d6db6d2152f97181985122234439e6450cbb831805d->leave($__internal_82aebaade15c407c352c9d6db6d2152f97181985122234439e6450cbb831805d_prof);

        
        $__internal_e5df1f8ece332ea74f06f177685b41a13cdbb85a6c30519d40b8df676ecdaa85->leave($__internal_e5df1f8ece332ea74f06f177685b41a13cdbb85a6c30519d40b8df676ecdaa85_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_17aa5c2d10e9d65fd26401c9c652de0ccbb0e17a6fd9fb53c8e3935447d76885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17aa5c2d10e9d65fd26401c9c652de0ccbb0e17a6fd9fb53c8e3935447d76885->enter($__internal_17aa5c2d10e9d65fd26401c9c652de0ccbb0e17a6fd9fb53c8e3935447d76885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3ab5231348aae41fe435f6c0d02c0a3c155bece38f68e0f4b688b432126666a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ab5231348aae41fe435f6c0d02c0a3c155bece38f68e0f4b688b432126666a->enter($__internal_c3ab5231348aae41fe435f6c0d02c0a3c155bece38f68e0f4b688b432126666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c3ab5231348aae41fe435f6c0d02c0a3c155bece38f68e0f4b688b432126666a->leave($__internal_c3ab5231348aae41fe435f6c0d02c0a3c155bece38f68e0f4b688b432126666a_prof);

        
        $__internal_17aa5c2d10e9d65fd26401c9c652de0ccbb0e17a6fd9fb53c8e3935447d76885->leave($__internal_17aa5c2d10e9d65fd26401c9c652de0ccbb0e17a6fd9fb53c8e3935447d76885_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\gh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
