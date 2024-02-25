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

/* extension/module/remove_demo_data.twig */
class __TwigTemplate_8be5dd2a0a0984d2a079974eaed0cee6eac6b82fc2d3001d9caa0a2a160c4dd8 extends \Twig\Template
{
    private $source;
    private $macros = [];

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
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\" class=\"container\">
  <div class=\"row\" style=\"margin-top:3em;margin-left:3em;\">
    <div class=\"col-lg-12\">
      <h3 style=\"margin-bottom:0;padding-bottom:0;color:#7e7e7e;\">Remove demo data</h3>
      <hr style=\"padding-top:0;margin-top:5px;border-top: 1px solid #c8c8c8;\"/>
    </div>
    <div class=\"col-lg-6 col-md-offset-3 text-center\">
          <p class=\"text-center text-success\">";
        // line 9
        echo ($context["statusMessage"] ?? null);
        echo "</p>
    </div>
  </div>
  <div class=\"container\" style=\"margin-left:3em;\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <h4 style=\"margin-bottom:0.5em;padding-bottom:0;color:#7e7e7e;\">Database data</h4>
      </div>
      <div class=\"col-lg-3\">
        <h4 style=\"margin-bottom:0.5em;padding-bottom:0;color:#7e7e7e;\">Files</h4>
      </div>
    </div>
    <form action=\"";
        // line 21
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" class=\"form-horizontal\">

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"categories\" value=\"categories\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Categories\" value=\"Categories\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"products\" value=\"products\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Products\" value=\"Products\" disabled>
          </div>
        </div>
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"productimages\" value=\"productimages\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Products Images\" value=\"Products images\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"recurringprofiles\" value=\"recurringprofiles\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Recurring Profiles\" value=\"Recurring Profiles\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"filters\" value=\"filters\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Filters\" value=\"Filters\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"attributes\" value=\"attributes\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Attributes\" value=\"Attributes\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"attributegroups\" value=\"attributegroups\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Attribute Groups\" value=\"Attribute Groups\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"options\" value=\"options\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Options\" value=\"Options\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"manufacturers\" value=\"manufacturers\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Manufacturers\" value=\"Manufacturers\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"coupons\" value=\"coupons\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"Coupons\" value=\"Coupons\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <span class=\"input-group-addon\">
              <input type=\"checkbox\" name=\"blogs\" value=\"blogs\">
            </span>
            <input type=\"text\" class=\"form-control\" aria-label=\"TT Blogs (TT Blog module)\" value=\"TT Blogs (TT Blog module)\" disabled>
          </div>
        </div>
      </div>

      <div class=\"row\" style=\"margin-top:1em;\">
        <div class=\"col-lg-3\">
          <div class=\"input-group\">
            <input type=\"submit\" class=\"btn btn-primary\" value=\"Remove data\">
          </div>
        </div>
      </div>

    </form>
  </div>
</div>
";
        // line 152
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/remove_demo_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 152,  64 => 21,  49 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/remove_demo_data.twig", "");
    }
}
