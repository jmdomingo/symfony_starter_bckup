<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18f8151750d50ceb60120d6f7be7f00c81abe5375e387e910b1f2f20e5dcf74f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_2b03169eb44e5bb93ebd1a6dfa6ab82c2028d95ba550c6d1b4eaa4e9665a5450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b03169eb44e5bb93ebd1a6dfa6ab82c2028d95ba550c6d1b4eaa4e9665a5450->enter($__internal_2b03169eb44e5bb93ebd1a6dfa6ab82c2028d95ba550c6d1b4eaa4e9665a5450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b943382bbc23fd79d65840b75cd126cdf925af025140117ee0b3e1df4475c3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b943382bbc23fd79d65840b75cd126cdf925af025140117ee0b3e1df4475c3d2->enter($__internal_b943382bbc23fd79d65840b75cd126cdf925af025140117ee0b3e1df4475c3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b03169eb44e5bb93ebd1a6dfa6ab82c2028d95ba550c6d1b4eaa4e9665a5450->leave($__internal_2b03169eb44e5bb93ebd1a6dfa6ab82c2028d95ba550c6d1b4eaa4e9665a5450_prof);

        
        $__internal_b943382bbc23fd79d65840b75cd126cdf925af025140117ee0b3e1df4475c3d2->leave($__internal_b943382bbc23fd79d65840b75cd126cdf925af025140117ee0b3e1df4475c3d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_41f0d29b4df58e9c03822c5cedd5b2a0a3a45a57b675898997087347911cb84d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f0d29b4df58e9c03822c5cedd5b2a0a3a45a57b675898997087347911cb84d->enter($__internal_41f0d29b4df58e9c03822c5cedd5b2a0a3a45a57b675898997087347911cb84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_80b9fb8809685b22324187295993ecc744f3c51dd393bb141b15a0ef535597b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b9fb8809685b22324187295993ecc744f3c51dd393bb141b15a0ef535597b2->enter($__internal_80b9fb8809685b22324187295993ecc744f3c51dd393bb141b15a0ef535597b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80b9fb8809685b22324187295993ecc744f3c51dd393bb141b15a0ef535597b2->leave($__internal_80b9fb8809685b22324187295993ecc744f3c51dd393bb141b15a0ef535597b2_prof);

        
        $__internal_41f0d29b4df58e9c03822c5cedd5b2a0a3a45a57b675898997087347911cb84d->leave($__internal_41f0d29b4df58e9c03822c5cedd5b2a0a3a45a57b675898997087347911cb84d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e7219b2626810f4bddca75c8a4f88dd799c123016fd9ab849e02f45ab700d723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7219b2626810f4bddca75c8a4f88dd799c123016fd9ab849e02f45ab700d723->enter($__internal_e7219b2626810f4bddca75c8a4f88dd799c123016fd9ab849e02f45ab700d723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d6751d360a95b07d8d85b1f70452d0119941fbfa88db086534a38a2373261cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6751d360a95b07d8d85b1f70452d0119941fbfa88db086534a38a2373261cd6->enter($__internal_d6751d360a95b07d8d85b1f70452d0119941fbfa88db086534a38a2373261cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d6751d360a95b07d8d85b1f70452d0119941fbfa88db086534a38a2373261cd6->leave($__internal_d6751d360a95b07d8d85b1f70452d0119941fbfa88db086534a38a2373261cd6_prof);

        
        $__internal_e7219b2626810f4bddca75c8a4f88dd799c123016fd9ab849e02f45ab700d723->leave($__internal_e7219b2626810f4bddca75c8a4f88dd799c123016fd9ab849e02f45ab700d723_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13a72f9a2e2bbeced72c1d9a68fbd3b742f2158a0c3b656e0a81d28df48d30d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a72f9a2e2bbeced72c1d9a68fbd3b742f2158a0c3b656e0a81d28df48d30d0->enter($__internal_13a72f9a2e2bbeced72c1d9a68fbd3b742f2158a0c3b656e0a81d28df48d30d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_90c811e75c07c28704213e595fe928dbc1309f6b750d5cff95f8d7249efb394b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c811e75c07c28704213e595fe928dbc1309f6b750d5cff95f8d7249efb394b->enter($__internal_90c811e75c07c28704213e595fe928dbc1309f6b750d5cff95f8d7249efb394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_90c811e75c07c28704213e595fe928dbc1309f6b750d5cff95f8d7249efb394b->leave($__internal_90c811e75c07c28704213e595fe928dbc1309f6b750d5cff95f8d7249efb394b_prof);

        
        $__internal_13a72f9a2e2bbeced72c1d9a68fbd3b742f2158a0c3b656e0a81d28df48d30d0->leave($__internal_13a72f9a2e2bbeced72c1d9a68fbd3b742f2158a0c3b656e0a81d28df48d30d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\gh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
