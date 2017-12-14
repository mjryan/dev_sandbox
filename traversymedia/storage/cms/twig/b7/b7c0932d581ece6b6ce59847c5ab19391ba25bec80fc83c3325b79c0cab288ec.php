<?php

/* /Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm */
class __TwigTemplate_0ba299d6aad7bd3ce377894489e830945064967b0f4bef1a212a131c1425f3ae extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("blogPosts"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm";
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
        return new Twig_Source("{% component 'blogPosts' %}", "/Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/blog.htm", "");
    }
}
