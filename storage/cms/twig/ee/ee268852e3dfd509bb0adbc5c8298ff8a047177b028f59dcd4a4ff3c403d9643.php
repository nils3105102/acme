<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\acme/themes/responsiv-clean/pages/contact.htm */
class __TwigTemplate_00075e230e1565f45df7237b2bced25f658a0d98b3b06e4fae1ed3d42adab6f7 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h1>Contact us</h1>
<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Name</label>
    <input type=\"email\" class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Enter name\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Email</label>
    <input type=\"password\" class=\"form-control\" placeholder=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Message</label>
    <input type=\"password\" class=\"form-control\" placeholder=\"Message\">
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Contact us</h1>
<form>
  <div class=\"form-group\">
    <label for=\"exampleInputEmail1\">Name</label>
    <input type=\"email\" class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Enter name\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Email</label>
    <input type=\"password\" class=\"form-control\" placeholder=\"email\">
  </div>
  <div class=\"form-group\">
    <label for=\"exampleInputPassword1\">Message</label>
    <input type=\"password\" class=\"form-control\" placeholder=\"Message\">
  </div>
  <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
</form>", "C:\\xampp\\htdocs\\acme/themes/responsiv-clean/pages/contact.htm", "");
    }
}
