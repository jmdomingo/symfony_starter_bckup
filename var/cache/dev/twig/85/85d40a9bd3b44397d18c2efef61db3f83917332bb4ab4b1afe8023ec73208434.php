<?php

/* todo/index.html.twig */
class __TwigTemplate_c79b24b79a572055b5635bb554df0ba47f347bc26daeef11f16c23a1bd4526c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/index.html.twig", 1);
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
        $__internal_d1f893e47e5d1885e0be24eaf998919b209f509d9e93ab54705ab7dcf516734d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f893e47e5d1885e0be24eaf998919b209f509d9e93ab54705ab7dcf516734d->enter($__internal_d1f893e47e5d1885e0be24eaf998919b209f509d9e93ab54705ab7dcf516734d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $__internal_b4bf975a9fb3b420a109e4c85612dcfe9213c494289bc436d1566c7e70d5eb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4bf975a9fb3b420a109e4c85612dcfe9213c494289bc436d1566c7e70d5eb25->enter($__internal_b4bf975a9fb3b420a109e4c85612dcfe9213c494289bc436d1566c7e70d5eb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1f893e47e5d1885e0be24eaf998919b209f509d9e93ab54705ab7dcf516734d->leave($__internal_d1f893e47e5d1885e0be24eaf998919b209f509d9e93ab54705ab7dcf516734d_prof);

        
        $__internal_b4bf975a9fb3b420a109e4c85612dcfe9213c494289bc436d1566c7e70d5eb25->leave($__internal_b4bf975a9fb3b420a109e4c85612dcfe9213c494289bc436d1566c7e70d5eb25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_35b4afb455b2ab9ce194757e824d7ff8b93c227f750742ad8fc3e233f047aa47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b4afb455b2ab9ce194757e824d7ff8b93c227f750742ad8fc3e233f047aa47->enter($__internal_35b4afb455b2ab9ce194757e824d7ff8b93c227f750742ad8fc3e233f047aa47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a86926621e65948324e11364471228614cf2ad678bef90ec4bdf91d04757ba29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a86926621e65948324e11364471228614cf2ad678bef90ec4bdf91d04757ba29->enter($__internal_a86926621e65948324e11364471228614cf2ad678bef90ec4bdf91d04757ba29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class=\"page-header\">Lateset Todos</h2>

 \t<table class=\"table table-striped\">
 \t\t<thead>
 \t\t\t<tr>
 \t\t\t\t<th>#</th>
 \t\t\t\t<th>Todo</th>
 \t\t\t\t<th>Due Date</th>
 \t\t\t\t<th></th>
 \t\t\t</tr> \t\t\t
 \t\t</thead>
 \t\t<tbody>
 \t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["todos"] ?? $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 17
            echo " \t\t\t<tr>
 \t\t\t\t<th scope=\"row\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</th>
 \t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td>
 \t\t\t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "duedate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td>
 \t\t\t\t<td>
 \t\t\t\t
 \t\t\t\t<a href=\"/todo/details/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
 \t\t\t\t
 \t\t\t\t<a href=\"/todo/edit/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>

 \t\t\t\t<a href=\"/todo/delete/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
 \t\t\t\t</td>
 \t\t\t</tr>
 \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo " \t\t</tbody>
 \t</table>
 ";
        
        $__internal_a86926621e65948324e11364471228614cf2ad678bef90ec4bdf91d04757ba29->leave($__internal_a86926621e65948324e11364471228614cf2ad678bef90ec4bdf91d04757ba29_prof);

        
        $__internal_35b4afb455b2ab9ce194757e824d7ff8b93c227f750742ad8fc3e233f047aa47->leave($__internal_35b4afb455b2ab9ce194757e824d7ff8b93c227f750742ad8fc3e233f047aa47_prof);

    }

    public function getTemplateName()
    {
        return "todo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  94 => 27,  89 => 25,  84 => 23,  78 => 20,  74 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
\t<h2 class=\"page-header\">Lateset Todos</h2>

 \t<table class=\"table table-striped\">
 \t\t<thead>
 \t\t\t<tr>
 \t\t\t\t<th>#</th>
 \t\t\t\t<th>Todo</th>
 \t\t\t\t<th>Due Date</th>
 \t\t\t\t<th></th>
 \t\t\t</tr> \t\t\t
 \t\t</thead>
 \t\t<tbody>
 \t\t\t{% for todo in todos %}
 \t\t\t<tr>
 \t\t\t\t<th scope=\"row\">{{todo.id}}</th>
 \t\t\t\t<td>{{todo.name}}</td>
 \t\t\t\t<td>{{todo.duedate|date('F j, Y, g:i a')}}</td>
 \t\t\t\t<td>
 \t\t\t\t
 \t\t\t\t<a href=\"/todo/details/{{todo.id}}\" class=\"btn btn-success\">View</a>
 \t\t\t\t
 \t\t\t\t<a href=\"/todo/edit/{{todo.id}}\" class=\"btn btn-default\">Edit</a>

 \t\t\t\t<a href=\"/todo/delete/{{todo.id}}\" class=\"btn btn-danger\">Delete</a>
 \t\t\t\t</td>
 \t\t\t</tr>
 \t\t\t{% endfor %}
 \t\t</tbody>
 \t</table>
 {% endblock %}
", "todo/index.html.twig", "C:\\xampp\\htdocs\\gh\\app\\Resources\\views\\todo\\index.html.twig");
    }
}
