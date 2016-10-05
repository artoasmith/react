<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_92443af5d632092720568003f1110e5fd117d84a42ca9f9fa71d165df54c270c extends Twig_Template
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
        $__internal_ef27707e89ed2a1856a32e9342da8b99dd16f58855f53c873499345490529735 = $this->env->getExtension("native_profiler");
        $__internal_ef27707e89ed2a1856a32e9342da8b99dd16f58855f53c873499345490529735->enter($__internal_ef27707e89ed2a1856a32e9342da8b99dd16f58855f53c873499345490529735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef27707e89ed2a1856a32e9342da8b99dd16f58855f53c873499345490529735->leave($__internal_ef27707e89ed2a1856a32e9342da8b99dd16f58855f53c873499345490529735_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa732a86110b77f8c36477fe2672fa95c844d377cb85b84af2a8c6eb5deb5083 = $this->env->getExtension("native_profiler");
        $__internal_fa732a86110b77f8c36477fe2672fa95c844d377cb85b84af2a8c6eb5deb5083->enter($__internal_fa732a86110b77f8c36477fe2672fa95c844d377cb85b84af2a8c6eb5deb5083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fa732a86110b77f8c36477fe2672fa95c844d377cb85b84af2a8c6eb5deb5083->leave($__internal_fa732a86110b77f8c36477fe2672fa95c844d377cb85b84af2a8c6eb5deb5083_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ed6599be2991ae0d16e59f8a1c7d164080c92461c84e45babdcc61c8f97ff14 = $this->env->getExtension("native_profiler");
        $__internal_6ed6599be2991ae0d16e59f8a1c7d164080c92461c84e45babdcc61c8f97ff14->enter($__internal_6ed6599be2991ae0d16e59f8a1c7d164080c92461c84e45babdcc61c8f97ff14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ed6599be2991ae0d16e59f8a1c7d164080c92461c84e45babdcc61c8f97ff14->leave($__internal_6ed6599be2991ae0d16e59f8a1c7d164080c92461c84e45babdcc61c8f97ff14_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_90068a8057e75a7911586d4467d92618ed9569578d38f1922a7398ee9b6dc912 = $this->env->getExtension("native_profiler");
        $__internal_90068a8057e75a7911586d4467d92618ed9569578d38f1922a7398ee9b6dc912->enter($__internal_90068a8057e75a7911586d4467d92618ed9569578d38f1922a7398ee9b6dc912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_90068a8057e75a7911586d4467d92618ed9569578d38f1922a7398ee9b6dc912->leave($__internal_90068a8057e75a7911586d4467d92618ed9569578d38f1922a7398ee9b6dc912_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
