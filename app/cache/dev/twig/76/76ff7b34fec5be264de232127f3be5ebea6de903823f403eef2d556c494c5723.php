<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e0351ee40ac41e5c8e5cc0159336f306517096727697db90b4e0a710babf4d extends Twig_Template
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
        $__internal_a0de6017dd3886f1b50c22a386e81a9a55cec410b3c1acda91e091702249e28e = $this->env->getExtension("native_profiler");
        $__internal_a0de6017dd3886f1b50c22a386e81a9a55cec410b3c1acda91e091702249e28e->enter($__internal_a0de6017dd3886f1b50c22a386e81a9a55cec410b3c1acda91e091702249e28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0de6017dd3886f1b50c22a386e81a9a55cec410b3c1acda91e091702249e28e->leave($__internal_a0de6017dd3886f1b50c22a386e81a9a55cec410b3c1acda91e091702249e28e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65790ce9e5f6ecb247da69d12d1f617684365f824975705b58efaadbce53a4b2 = $this->env->getExtension("native_profiler");
        $__internal_65790ce9e5f6ecb247da69d12d1f617684365f824975705b58efaadbce53a4b2->enter($__internal_65790ce9e5f6ecb247da69d12d1f617684365f824975705b58efaadbce53a4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_65790ce9e5f6ecb247da69d12d1f617684365f824975705b58efaadbce53a4b2->leave($__internal_65790ce9e5f6ecb247da69d12d1f617684365f824975705b58efaadbce53a4b2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c0545b64825631c3cb578d9f25fc3e4f17d4da1adf1b27a9a90098f25787bad = $this->env->getExtension("native_profiler");
        $__internal_1c0545b64825631c3cb578d9f25fc3e4f17d4da1adf1b27a9a90098f25787bad->enter($__internal_1c0545b64825631c3cb578d9f25fc3e4f17d4da1adf1b27a9a90098f25787bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1c0545b64825631c3cb578d9f25fc3e4f17d4da1adf1b27a9a90098f25787bad->leave($__internal_1c0545b64825631c3cb578d9f25fc3e4f17d4da1adf1b27a9a90098f25787bad_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_74c310916ffbc6a2c872a6d78819c1b5355d0d22587ec9d19ca8468ba0f87ac8 = $this->env->getExtension("native_profiler");
        $__internal_74c310916ffbc6a2c872a6d78819c1b5355d0d22587ec9d19ca8468ba0f87ac8->enter($__internal_74c310916ffbc6a2c872a6d78819c1b5355d0d22587ec9d19ca8468ba0f87ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_74c310916ffbc6a2c872a6d78819c1b5355d0d22587ec9d19ca8468ba0f87ac8->leave($__internal_74c310916ffbc6a2c872a6d78819c1b5355d0d22587ec9d19ca8468ba0f87ac8_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
