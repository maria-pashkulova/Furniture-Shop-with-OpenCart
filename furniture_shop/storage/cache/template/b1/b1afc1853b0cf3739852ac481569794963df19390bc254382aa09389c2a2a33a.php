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

/* extension/payment/pp_express_transaction.twig */
class __TwigTemplate_f3050fc0a53567b161c8762c5577d333740b21155499ddfd633e4aca46ac2b3b extends \Twig\Template
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
        echo "<table class=\"table table-striped table-bordered\">
  <thead>
    <tr>
      <td class=\"text-left\">";
        // line 4
        echo ($context["column_transaction"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 5
        echo ($context["column_amount"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 6
        echo ($context["column_type"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 7
        echo ($context["column_status"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 8
        echo ($context["column_pending_reason"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 9
        echo ($context["column_date_added"] ?? null);
        echo "</td>
      <td class=\"text-left\">";
        // line 10
        echo ($context["column_action"] ?? null);
        echo "</td>
    </tr>
  </thead>
  <tbody>
  
  ";
        // line 15
        if (($context["transactions"] ?? null)) {
            // line 16
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transactions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["transaction"]) {
                // line 17
                echo "  <tr>
    <td class=\"text-left\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "transaction_id", [], "any", false, false, false, 18);
                echo "</td>
    <td class=\"text-left\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "amount", [], "any", false, false, false, 19);
                echo "</td>
    <td class=\"text-left\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "payment_type", [], "any", false, false, false, 20);
                echo "</td>
    <td class=\"text-left\">";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "payment_status", [], "any", false, false, false, 21);
                echo "</td>
    <td class=\"text-left\">";
                // line 22
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "pending_reason", [], "any", false, false, false, 22);
                echo "</td>
    <td class=\"text-left\">";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["transaction"], "date_added", [], "any", false, false, false, 23);
                echo "</td>
    <td class=\"text-left\"> ";
                // line 24
                if (twig_get_attribute($this->env, $this->source, $context["transaction"], "transaction_id", [], "any", false, false, false, 24)) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["transaction"], "view", [], "any", false, false, false, 24);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_view"] ?? null);
                    echo "\" class=\"btn btn-info\"><i class=\"fa fa-eye\"></i></a>
      ";
                    // line 25
                    if (((twig_get_attribute($this->env, $this->source, $context["transaction"], "payment_type", [], "any", false, false, false, 25) == "instant") && ((twig_get_attribute($this->env, $this->source, $context["transaction"], "payment_status", [], "any", false, false, false, 25) == "Completed") || (twig_get_attribute($this->env, $this->source, $context["transaction"], "payment_status", [], "any", false, false, false, 25) == "Partially-Refunded")))) {
                        // line 26
                        echo "      <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["transaction"], "refund", [], "any", false, false, false, 26);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_refund"] ?? null);
                        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-reply\"></i></a>&nbsp;
      ";
                    } else {
                        // line 28
                        echo "      <button type=\"button\" value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["transaction"], "resend", [], "any", false, false, false, 28);
                        echo "\" data-toggle=\"tooltip\" title=\"";
                        echo ($context["button_resend"] ?? null);
                        echo "\" class=\"btn btn-info\"><i class=\"fa fa-refresh\"></i></button>
      ";
                    }
                }
                // line 29
                echo " </td>
  </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "  ";
        } else {
            // line 33
            echo "  <tr>
    <td class=\"text-center\" colspan=\"7\">";
            // line 34
            echo ($context["text_no_results"] ?? null);
            echo "</td>
  </tr>
  ";
        }
        // line 37
        echo "  </tbody>
  
</table>
";
    }

    public function getTemplateName()
    {
        return "extension/payment/pp_express_transaction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 37,  149 => 34,  146 => 33,  143 => 32,  135 => 29,  126 => 28,  118 => 26,  116 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  84 => 18,  81 => 17,  76 => 16,  74 => 15,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/payment/pp_express_transaction.twig", "");
    }
}
