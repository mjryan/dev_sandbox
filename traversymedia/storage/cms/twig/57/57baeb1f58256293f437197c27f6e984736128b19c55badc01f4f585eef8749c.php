<?php

/* /Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm */
class __TwigTemplate_686b93d34af3b9b782a43040b1f4b153bfd0c52388d4f57326d2dd39bc02a88e extends Twig_Template
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
        // line 1
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'blogPost' %}", "/Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/post.htm", "");
    }
}
