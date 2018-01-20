<?php

/* todo/details.html.twig */
class __TwigTemplate_c977e8c5902ae0283547817a778ca92fb27725f4be49dafe17f4340fa15e8c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/details.html.twig", 1);
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
        $__internal_ecf883ae13c53689268a3cc202c413c983bf61a66ba50513576b71dbeb4f23d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecf883ae13c53689268a3cc202c413c983bf61a66ba50513576b71dbeb4f23d4->enter($__internal_ecf883ae13c53689268a3cc202c413c983bf61a66ba50513576b71dbeb4f23d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $__internal_cf79ce44683d7ccddbb0dc69336665ac304f40566bce8ec7c5284d77fe196902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf79ce44683d7ccddbb0dc69336665ac304f40566bce8ec7c5284d77fe196902->enter($__internal_cf79ce44683d7ccddbb0dc69336665ac304f40566bce8ec7c5284d77fe196902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecf883ae13c53689268a3cc202c413c983bf61a66ba50513576b71dbeb4f23d4->leave($__internal_ecf883ae13c53689268a3cc202c413c983bf61a66ba50513576b71dbeb4f23d4_prof);

        
        $__internal_cf79ce44683d7ccddbb0dc69336665ac304f40566bce8ec7c5284d77fe196902->leave($__internal_cf79ce44683d7ccddbb0dc69336665ac304f40566bce8ec7c5284d77fe196902_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a8e544644a2570c075850607c0e67768b9f55ed9d6708a9791cba800ba13252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a8e544644a2570c075850607c0e67768b9f55ed9d6708a9791cba800ba13252->enter($__internal_6a8e544644a2570c075850607c0e67768b9f55ed9d6708a9791cba800ba13252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_22708602ab2329422bb91c459fde412ba0b8f20d6f12299e6f69905c240c6e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22708602ab2329422bb91c459fde412ba0b8f20d6f12299e6f69905c240c6e4c->enter($__internal_22708602ab2329422bb91c459fde412ba0b8f20d6f12299e6f69905c240c6e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo " \t<a class = \"btn btn-default\" href=\"/todo\">Back To Todos </a>
 \t<h2 class=\"page-header\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
 \t<ul class=\"list-group\">
 \t\t<li class=\"list-group-item\">Category: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
 \t\t<li class=\"list-group-item\">Priority: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
 \t\t<li class=\"list-group-item\">Due: ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "duedate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</li>
 \t</ul>
 \t<p>
 \t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["todo"] ?? $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "
 \t</p>


 ";
        
        $__internal_22708602ab2329422bb91c459fde412ba0b8f20d6f12299e6f69905c240c6e4c->leave($__internal_22708602ab2329422bb91c459fde412ba0b8f20d6f12299e6f69905c240c6e4c_prof);

        
        $__internal_6a8e544644a2570c075850607c0e67768b9f55ed9d6708a9791cba800ba13252->leave($__internal_6a8e544644a2570c075850607c0e67768b9f55ed9d6708a9791cba800ba13252_prof);

    }

    public function getTemplateName()
    {
        return "todo/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 9,  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
 \t<a class = \"btn btn-default\" href=\"/todo\">Back To Todos </a>
 \t<h2 class=\"page-header\">{{todo.name}}</h2>
 \t<ul class=\"list-group\">
 \t\t<li class=\"list-group-item\">Category: {{todo.category}}</li>
 \t\t<li class=\"list-group-item\">Priority: {{todo.priority}}</li>
 \t\t<li class=\"list-group-item\">Due: {{todo.duedate|date('F j, Y, g:i a')}}</li>
 \t</ul>
 \t<p>
 \t\t{{todo.description}}
 \t</p>


 {% endblock %}", "todo/details.html.twig", "C:\\xampp\\htdocs\\gh\\app\\Resources\\views\\todo\\details.html.twig");
    }
}
