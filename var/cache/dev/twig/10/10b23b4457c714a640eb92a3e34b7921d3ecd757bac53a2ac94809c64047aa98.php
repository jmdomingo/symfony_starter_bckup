<?php

/* base.html.twig */
class __TwigTemplate_820014a7d11e5630f7b8f96636ab25f9df9e043eb564847d32007105b80be4d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b93fa309134e0aa72defb6923499da847fef8838235acee8d485ccf1c1e38ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b93fa309134e0aa72defb6923499da847fef8838235acee8d485ccf1c1e38ea->enter($__internal_3b93fa309134e0aa72defb6923499da847fef8838235acee8d485ccf1c1e38ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_db4f7844a84f2f49ba93f4f3e48026d5b7bfaadc57defe5412e5dc7078aa7408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db4f7844a84f2f49ba93f4f3e48026d5b7bfaadc57defe5412e5dc7078aa7408->enter($__internal_db4f7844a84f2f49ba93f4f3e48026d5b7bfaadc57defe5412e5dc7078aa7408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
  
  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Todo List</a>
        </div>
        <div id=\"navbar\" class=\" navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"/todo\">Home</a></li>
            <li><a href=\"/todo/create\">Add Todo</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"row\">
                <div class=\"col-md-12\">
                  ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 49
            echo "                  <div class=\"alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
                  ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 53
            echo "                  <div class=\"alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                  ";
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "
                </div>
        </div>


    </div><!-- /.container -->

     ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
  </body>
</html>
";
        
        $__internal_3b93fa309134e0aa72defb6923499da847fef8838235acee8d485ccf1c1e38ea->leave($__internal_3b93fa309134e0aa72defb6923499da847fef8838235acee8d485ccf1c1e38ea_prof);

        
        $__internal_db4f7844a84f2f49ba93f4f3e48026d5b7bfaadc57defe5412e5dc7078aa7408->leave($__internal_db4f7844a84f2f49ba93f4f3e48026d5b7bfaadc57defe5412e5dc7078aa7408_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_a897eb6833fbb48dc19eb2a5141f621ceaeea4b7f3d5513fc43b943e1407e665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a897eb6833fbb48dc19eb2a5141f621ceaeea4b7f3d5513fc43b943e1407e665->enter($__internal_a897eb6833fbb48dc19eb2a5141f621ceaeea4b7f3d5513fc43b943e1407e665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_549e206868b26fcb111223d8551e9e6fcf5360823de8600f66e7f0c19426db3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549e206868b26fcb111223d8551e9e6fcf5360823de8600f66e7f0c19426db3f->enter($__internal_549e206868b26fcb111223d8551e9e6fcf5360823de8600f66e7f0c19426db3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_549e206868b26fcb111223d8551e9e6fcf5360823de8600f66e7f0c19426db3f->leave($__internal_549e206868b26fcb111223d8551e9e6fcf5360823de8600f66e7f0c19426db3f_prof);

        
        $__internal_a897eb6833fbb48dc19eb2a5141f621ceaeea4b7f3d5513fc43b943e1407e665->leave($__internal_a897eb6833fbb48dc19eb2a5141f621ceaeea4b7f3d5513fc43b943e1407e665_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6155a5543288296083797b67cc72fbf10000259eb271d883a0c1c86fee5a440f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6155a5543288296083797b67cc72fbf10000259eb271d883a0c1c86fee5a440f->enter($__internal_6155a5543288296083797b67cc72fbf10000259eb271d883a0c1c86fee5a440f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2c29f820c725e45e4c78283e9f8ca1af5471932480a9f4aafaad05463cfe1a27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c29f820c725e45e4c78283e9f8ca1af5471932480a9f4aafaad05463cfe1a27->enter($__internal_2c29f820c725e45e4c78283e9f8ca1af5471932480a9f4aafaad05463cfe1a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2c29f820c725e45e4c78283e9f8ca1af5471932480a9f4aafaad05463cfe1a27->leave($__internal_2c29f820c725e45e4c78283e9f8ca1af5471932480a9f4aafaad05463cfe1a27_prof);

        
        $__internal_6155a5543288296083797b67cc72fbf10000259eb271d883a0c1c86fee5a440f->leave($__internal_6155a5543288296083797b67cc72fbf10000259eb271d883a0c1c86fee5a440f_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_59fe69c6156e03985227f7640309521a3ae95e3940b96bba7353327aee633505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fe69c6156e03985227f7640309521a3ae95e3940b96bba7353327aee633505->enter($__internal_59fe69c6156e03985227f7640309521a3ae95e3940b96bba7353327aee633505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e30f0351642c65dcdb17750dae95574d3a3b365978782a254020cd10d85dbc6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30f0351642c65dcdb17750dae95574d3a3b365978782a254020cd10d85dbc6f->enter($__internal_e30f0351642c65dcdb17750dae95574d3a3b365978782a254020cd10d85dbc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e30f0351642c65dcdb17750dae95574d3a3b365978782a254020cd10d85dbc6f->leave($__internal_e30f0351642c65dcdb17750dae95574d3a3b365978782a254020cd10d85dbc6f_prof);

        
        $__internal_59fe69c6156e03985227f7640309521a3ae95e3940b96bba7353327aee633505->leave($__internal_59fe69c6156e03985227f7640309521a3ae95e3940b96bba7353327aee633505_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8a10ebdd985ed9f68942423a27f6b980159c18eeef9ccc4f2a9557d19307f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a10ebdd985ed9f68942423a27f6b980159c18eeef9ccc4f2a9557d19307f73->enter($__internal_b8a10ebdd985ed9f68942423a27f6b980159c18eeef9ccc4f2a9557d19307f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_34c3c00f92abb0a9b438d555e7eea8de6535e3557eb9efa3063c8dd4ef4978e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c3c00f92abb0a9b438d555e7eea8de6535e3557eb9efa3063c8dd4ef4978e7->enter($__internal_34c3c00f92abb0a9b438d555e7eea8de6535e3557eb9efa3063c8dd4ef4978e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_34c3c00f92abb0a9b438d555e7eea8de6535e3557eb9efa3063c8dd4ef4978e7->leave($__internal_34c3c00f92abb0a9b438d555e7eea8de6535e3557eb9efa3063c8dd4ef4978e7_prof);

        
        $__internal_b8a10ebdd985ed9f68942423a27f6b980159c18eeef9ccc4f2a9557d19307f73->leave($__internal_b8a10ebdd985ed9f68942423a27f6b980159c18eeef9ccc4f2a9557d19307f73_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 63,  175 => 55,  158 => 17,  140 => 13,  127 => 64,  125 => 63,  116 => 56,  113 => 55,  104 => 53,  100 => 52,  97 => 51,  88 => 49,  84 => 48,  52 => 18,  50 => 17,  43 => 13,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" rel=\"stylesheet\">
    {% block stylesheets %}{% endblock %}

  
  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\">Todo List</a>
        </div>
        <div id=\"navbar\" class=\" navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"/todo\">Home</a></li>
            <li><a href=\"/todo/create\">Add Todo</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

      <div class=\"row\">
                <div class=\"col-md-12\">
                  {% for flash_message in app.session.flashbag.get('notice') %}
                  <div class=\"alert-success\">{{flash_message}}</div>div>
                  {% endfor %}

                  {% for flash_message in app.session.flashbag.get('error') %}
                  <div class=\"alert-danger\">{{flash_message}}</div>div>
                  {% endfor %}
                  {% block body %}{% endblock %}

                </div>
        </div>


    </div><!-- /.container -->

     {% block javascripts %}{% endblock %}

  </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\gh\\app\\Resources\\views\\base.html.twig");
    }
}
