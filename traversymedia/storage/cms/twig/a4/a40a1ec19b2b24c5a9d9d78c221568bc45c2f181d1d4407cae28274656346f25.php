<?php

/* /Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/plugins/devinx/contactus/components/contactform/default.htm */
class __TwigTemplate_1f559c5814b3d3c7c05b49a2620cfbae401709d01563c095efcc7e00af9d24a1 extends Twig_Template
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
        echo "<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"ContactUsForm\" role=\"form\"
      data-request=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onMailSent\"
      data-request-update=\"'";
        // line 6
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["name_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["email_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["subject_input"] ?? null), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["message_input"] ?? null), "html", null, true);
        echo "\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        ";
        // line 21
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "enableCaptcha", array())) {
            // line 22
            echo "            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["__SELF__"] ?? null), "siteKey", array()), "html", null, true);
            echo "\"></div>
            </div>
        ";
        }
        // line 26
        echo "        <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">";
        echo twig_escape_filter($this->env, ($context["send_button"] ?? null), "html", null, true);
        echo "</button>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "/Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/plugins/devinx/contactus/components/contactform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  64 => 23,  61 => 22,  59 => 21,  54 => 19,  48 => 16,  42 => 13,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"confirm-container\">
    <!--This will contain the confirmation when the email is successfully sent-->
</div>
<form class=\"ContactUsForm\" role=\"form\"
      data-request=\"{{ __SELF__ }}::onMailSent\"
      data-request-update=\"'{{ __SELF__ }}::confirm': '.confirm-container'\">

    <div class=\"form-groups\">
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\"  name=\"name\" placeholder=\"{{name_input}}\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"email\" placeholder=\"{{email_input}}\">
        </div>
        <div class=\"form-group\">
            <input type=\"text\" class=\"form-control\" value=\"\" name=\"subject\" placeholder=\"{{subject_input}}\">
        </div>
        <div class=\"form-group\">
            <textarea class=\"form-control\" value=\"\" name=\"body\" placeholder=\"{{message_input}}\" cols=\"30\" rows=\"10\"></textarea>
        </div>
        {% if __SELF__.enableCaptcha %}
            <div class=\"form-group\">
                <div class=\"g-recaptcha\" data-sitekey=\"{{ __SELF__.siteKey }}\"></div>
            </div>
        {% endif %}
        <button type=\"submit\" class=\"btn btn-primary btn-lg pull-right\">{{send_button}}</button>
    </div>
</form>
", "/Applications/XAMPP/xamppfiles/htdocs/dev_sandbox/traversymedia/plugins/devinx/contactus/components/contactform/default.htm", "");
    }
}
