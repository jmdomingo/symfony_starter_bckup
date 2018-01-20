<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_8a50db4faa94afcefdcf679c994a52cfdbbe9d2ca5d8d038143bd71b48c9aece extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_528728d2a5559e09a3d1d33cf376d91b3950ad222400a42fe4b35743ad1029df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528728d2a5559e09a3d1d33cf376d91b3950ad222400a42fe4b35743ad1029df->enter($__internal_528728d2a5559e09a3d1d33cf376d91b3950ad222400a42fe4b35743ad1029df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6b075a61c1fa3ace9b05363cadafedb62fa31b045f22979ae6bae5f62858736f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b075a61c1fa3ace9b05363cadafedb62fa31b045f22979ae6bae5f62858736f->enter($__internal_6b075a61c1fa3ace9b05363cadafedb62fa31b045f22979ae6bae5f62858736f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_528728d2a5559e09a3d1d33cf376d91b3950ad222400a42fe4b35743ad1029df->leave($__internal_528728d2a5559e09a3d1d33cf376d91b3950ad222400a42fe4b35743ad1029df_prof);

        
        $__internal_6b075a61c1fa3ace9b05363cadafedb62fa31b045f22979ae6bae5f62858736f->leave($__internal_6b075a61c1fa3ace9b05363cadafedb62fa31b045f22979ae6bae5f62858736f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24eb14070c967082bceabc1b1c64e3d2dbe125c802596036cad6688cdc1114f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24eb14070c967082bceabc1b1c64e3d2dbe125c802596036cad6688cdc1114f4->enter($__internal_24eb14070c967082bceabc1b1c64e3d2dbe125c802596036cad6688cdc1114f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b2a88fad000304dc4ee1ad3c05b1e148a926740b34ce87964a7827fcaa9532c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a88fad000304dc4ee1ad3c05b1e148a926740b34ce87964a7827fcaa9532c7->enter($__internal_b2a88fad000304dc4ee1ad3c05b1e148a926740b34ce87964a7827fcaa9532c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b2a88fad000304dc4ee1ad3c05b1e148a926740b34ce87964a7827fcaa9532c7->leave($__internal_b2a88fad000304dc4ee1ad3c05b1e148a926740b34ce87964a7827fcaa9532c7_prof);

        
        $__internal_24eb14070c967082bceabc1b1c64e3d2dbe125c802596036cad6688cdc1114f4->leave($__internal_24eb14070c967082bceabc1b1c64e3d2dbe125c802596036cad6688cdc1114f4_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_94e77fbf44bc4d037d096d8a2aa48c09d7eb77a75f4fa32d2aec363cd8caadfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e77fbf44bc4d037d096d8a2aa48c09d7eb77a75f4fa32d2aec363cd8caadfe->enter($__internal_94e77fbf44bc4d037d096d8a2aa48c09d7eb77a75f4fa32d2aec363cd8caadfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_497e676075c9b4e9b9f456c5722d8f070829c6797646c9993df176e6e3e637ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_497e676075c9b4e9b9f456c5722d8f070829c6797646c9993df176e6e3e637ab->enter($__internal_497e676075c9b4e9b9f456c5722d8f070829c6797646c9993df176e6e3e637ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_497e676075c9b4e9b9f456c5722d8f070829c6797646c9993df176e6e3e637ab->leave($__internal_497e676075c9b4e9b9f456c5722d8f070829c6797646c9993df176e6e3e637ab_prof);

        
        $__internal_94e77fbf44bc4d037d096d8a2aa48c09d7eb77a75f4fa32d2aec363cd8caadfe->leave($__internal_94e77fbf44bc4d037d096d8a2aa48c09d7eb77a75f4fa32d2aec363cd8caadfe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_424431e78534995407249f1c01456739412414e79d1b081bbdc18d6572260570 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424431e78534995407249f1c01456739412414e79d1b081bbdc18d6572260570->enter($__internal_424431e78534995407249f1c01456739412414e79d1b081bbdc18d6572260570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3126999b12efe81342e83185b7c8ea8a1ceb3d832f5ce1eb55974099704b1172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3126999b12efe81342e83185b7c8ea8a1ceb3d832f5ce1eb55974099704b1172->enter($__internal_3126999b12efe81342e83185b7c8ea8a1ceb3d832f5ce1eb55974099704b1172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3126999b12efe81342e83185b7c8ea8a1ceb3d832f5ce1eb55974099704b1172->leave($__internal_3126999b12efe81342e83185b7c8ea8a1ceb3d832f5ce1eb55974099704b1172_prof);

        
        $__internal_424431e78534995407249f1c01456739412414e79d1b081bbdc18d6572260570->leave($__internal_424431e78534995407249f1c01456739412414e79d1b081bbdc18d6572260570_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\gh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
