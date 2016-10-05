<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_909008bd787bb5560ebe780a218dbbfbd81adb6b3a38b08e3065f31059f52b10 extends Twig_Template
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
        $__internal_0a4a9167d2c2395029d758a84e0a35af00cf1d57de5063fa3d31a7f1bf564b3e = $this->env->getExtension("native_profiler");
        $__internal_0a4a9167d2c2395029d758a84e0a35af00cf1d57de5063fa3d31a7f1bf564b3e->enter($__internal_0a4a9167d2c2395029d758a84e0a35af00cf1d57de5063fa3d31a7f1bf564b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4a9167d2c2395029d758a84e0a35af00cf1d57de5063fa3d31a7f1bf564b3e->leave($__internal_0a4a9167d2c2395029d758a84e0a35af00cf1d57de5063fa3d31a7f1bf564b3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e7b4d6dd25c97a0c8d79f8ef07257b57414df4a77018c49326ddccd180f7d28 = $this->env->getExtension("native_profiler");
        $__internal_2e7b4d6dd25c97a0c8d79f8ef07257b57414df4a77018c49326ddccd180f7d28->enter($__internal_2e7b4d6dd25c97a0c8d79f8ef07257b57414df4a77018c49326ddccd180f7d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e7b4d6dd25c97a0c8d79f8ef07257b57414df4a77018c49326ddccd180f7d28->leave($__internal_2e7b4d6dd25c97a0c8d79f8ef07257b57414df4a77018c49326ddccd180f7d28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8117c5223c9d797ae1f842ab53a9680a58a1af302d4a879ae905c2679a3b9de = $this->env->getExtension("native_profiler");
        $__internal_c8117c5223c9d797ae1f842ab53a9680a58a1af302d4a879ae905c2679a3b9de->enter($__internal_c8117c5223c9d797ae1f842ab53a9680a58a1af302d4a879ae905c2679a3b9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c8117c5223c9d797ae1f842ab53a9680a58a1af302d4a879ae905c2679a3b9de->leave($__internal_c8117c5223c9d797ae1f842ab53a9680a58a1af302d4a879ae905c2679a3b9de_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1c086ed6639fe674f30a8c26e149a0aeb69014ef6afbd2e85dd94a8e0c8bed60 = $this->env->getExtension("native_profiler");
        $__internal_1c086ed6639fe674f30a8c26e149a0aeb69014ef6afbd2e85dd94a8e0c8bed60->enter($__internal_1c086ed6639fe674f30a8c26e149a0aeb69014ef6afbd2e85dd94a8e0c8bed60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c086ed6639fe674f30a8c26e149a0aeb69014ef6afbd2e85dd94a8e0c8bed60->leave($__internal_1c086ed6639fe674f30a8c26e149a0aeb69014ef6afbd2e85dd94a8e0c8bed60_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
