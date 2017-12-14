<?php

/* /Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm */
class __TwigTemplate_d532199ba0b56d03fd625ec1321ecc874ca88ae3c0a61116170fd569c0bfee35 extends Twig_Template
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
        echo "<h1>Contact Us</h1>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Contact Us</h1>
{% component 'contactForm' %}", "/Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/themes/hambern-hambern-blank-bootstrap-4/pages/contact.htm", "");
    }
}
