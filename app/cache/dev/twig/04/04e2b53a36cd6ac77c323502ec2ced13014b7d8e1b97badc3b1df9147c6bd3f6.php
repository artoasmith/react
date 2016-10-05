<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_56f64fe9e13d9ba96d34ab30c5829759264a4d041ef93111ba0c15652eb105a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_592de2eeb2c10610776e6f6ed715580422dbbbb8a4a8598fce2a0090c1978e54 = $this->env->getExtension("native_profiler");
        $__internal_592de2eeb2c10610776e6f6ed715580422dbbbb8a4a8598fce2a0090c1978e54->enter($__internal_592de2eeb2c10610776e6f6ed715580422dbbbb8a4a8598fce2a0090c1978e54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_592de2eeb2c10610776e6f6ed715580422dbbbb8a4a8598fce2a0090c1978e54->leave($__internal_592de2eeb2c10610776e6f6ed715580422dbbbb8a4a8598fce2a0090c1978e54_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
