<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/slumberland/templates/nodes/node--landing_page.html.twig */
class __TwigTemplate_c4ddef76db25f66aff67e141644f0a14058f7197c63cf77ed72d7c9c4248304b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 73];
        $filters = ["clean_class" => 76, "escape" => 82];
        $functions = ["attach_library" => 82];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 73
        $context["classes"] = [0 => "article", 1 => "article--teaser", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 76
($context["node"] ?? null), "bundle", [])))), 3 => (($this->getAttribute(        // line 77
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 78
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 79
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 6 => ((        // line 80
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "
<section>
\t\t<div class=\"main_container\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 px-0\">
\t\t\t\t\t\t<div class=\"page_banner px-5 \">
\t\t\t\t\t\t\t<div class=\"banner_overlay\"></div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-5 banner_title py-5\">
\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\">A natural <br>nights sleep</h1>
\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-white\">the Ethical Matresses</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7 banner_video\">
\t\t\t\t\t\t\t\t\t<img src=";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img"] ?? null)), "html", null, true);
        echo " class=\"w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 display_item mt-5\">
\t\t\t\t\t\t\t\t\t<div class=\"best_buy\">
\t\t\t\t\t\t\t\t\t\t<div class=\"best_product row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5 pl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/best-buy.png\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-7 px-0 details_part\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-blue\">Best Buy</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-subhead\">Millenium</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">Intibus sapicaeperum faccaec epudae ius, ut evelit eum hario.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"all_product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product_list pl-0 pr-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/signature.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-subhead\">Signiture</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_list px-1\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/signature2.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-subhead\">Dunlopillo Go</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_list pr-0 pl-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/signature3.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-subhead\">Divas Bases</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"our_mission pl-5 my-5\">
\t\t\t\t\t\t\t<div class=\"row mx-0\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"comfort_text pt-5\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-grey\">Our Mission</h6>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-subhead pb-4\">Sustainable comfort</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">Sleep easy with our environmentally friendly mattresses, made from natural latex rubber. All our latex is harvested from sustainably managed plantations, which purify over 90 million tons of carbon dioxide a year.</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"mt-4 pl-4\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-blue text-uppercase\">7 comfort zones</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-blue text-uppercase\">Pressure Relieving</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-blue text-uppercase\">Breathable</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-blue text-uppercase\">Progressive comfort</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-uppercase shop_bttn\">Shop mattresses</a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mission_img pr-0\">
\t\t\t\t\t\t\t\t\t<img src=\"images/mission-right.png\" class=\"w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"green_night_section px-5 py-5\">
\t\t\t\t\t\t\t<div class=\"greennight_overlay\">
\t\t\t\t\t\t\t\t<img src=\"images/green-right.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"text-uppercase\">Our Values</p>
\t\t\t\t\t\t\t\t<h1 class=\"mb-5\">A green nights sleep</h1>
\t\t\t\t\t\t\t\t<div class=\"row sleep_section py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_parts\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ethical.png\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"description_sec\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase pb-2 text-subhead\">Ethical Practice</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">We're committed to providing you with the best service.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_parts\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ethical.png\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"description_sec\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase pb-2 text-subhead\">Natural Resources</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">We're committed to providing you with the best service.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_parts\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ethical.png\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"description_sec\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase pb-2 text-subhead\">Enviromental</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">We're committed to providing you with the best service.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"our_promise col-sm-12\">
\t\t\t\t\t\t\t<div class=\"promise_section row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 promise_img px-0\">
\t\t\t\t\t\t\t\t\t<img src=\"images/promise1.png\" class=\"w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 promise_text\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-grey\">our Promise</p>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"pb-2 text-subhead\">Transform your night</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">We take sleep seriously, crafting contemporary designs that blend style with comfort. Enjoy the ultimate sleep experience with our durable mattresses, made from sustainably sourced latex and perfectly engineered for natural resistance and hold. </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"promise_section row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 promise_img order2 px-0\">
\t\t\t\t\t\t\t\t\t<img src=\"images/promise2.png\" class=\"w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 promise_text\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-grey\">our Promise</p>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"pb-2 text-subhead\">The science of sleep</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">Wake up feeling fresh, clean and healthy, with the help of our Actipro™ technology. Used in the fabric of our mattresses, it provides natural protection against allergens, dust mites, and odours, ensuring you get the best night’s sleep, every night. </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"shownow_section col-sm-12 py-5 \">
\t\t\t\t\t\t\t<div class=\"shopnow_overlay\"></div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"shopow_banner py-5 text-center \">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\">Ready for a natural nights sleep?</br>Head to our shop –</h1>
\t\t\t\t\t\t\t\t\t\t<div class=\"shopnow_bttns mt-5\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-uppercase now_bttn\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-uppercase learn_bttn\">Learn More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
<footer>
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"footer_main px-5 pt-5 pb-3\">
\t\t\t\t\t\t<div class=\"footer_menu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"pl-0\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Mattresses</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"  class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Divan bases</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"  class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Headboards</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>The review</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"float-right\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Delivery</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Stockists</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"pr-0\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>FAQ</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer_details\">
\t\t\t\t\t\t\t<div class=\"listing_section pr-5\">
\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-grey mb-3\">Steinhoff UK Beds Ltd.</h6>
\t\t\t\t\t\t\t\t<p class=\"text-grey\">Registered no. 08431253</br>VAT No. GB 506 3312 84</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"listing_section pr-5\">
\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-grey mb-3\">Address</h6>
\t\t\t\t\t\t\t\t<p class=\"text-grey\">5th Floor, Festival House, Jessop </br>Avenue, Cheltenham, </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"listing_section\">
\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-grey mb-3\">Contact</h6>
\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<a href=\"tel:+0800 158 4842\" class=\"text-grey\">0800 158 4842</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@slumberland.co.uk\" target=\"_top\"  class=\"text-blue\">info@slumberland.co.uk</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
";
    }

    public function getTemplateName()
    {
        return "themes/slumberland/templates/nodes/node--landing_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 96,  62 => 82,  60 => 80,  59 => 79,  58 => 78,  57 => 77,  56 => 76,  55 => 73,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{% set classes = [
  'article',
  'article--teaser',
  'node--type-' ~ node.bundle|clean_class,
  node.isPromoted() ? 'node--promoted',
  node.isSticky() ? 'node--sticky',
  not node.isPublished() ? 'node--unpublished',
  view_mode ? 'node--view-mode-' ~ view_mode|clean_class,
] %}
{{ attach_library('classy/node') }}
<section>
\t\t<div class=\"main_container\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-12 px-0\">
\t\t\t\t\t\t<div class=\"page_banner px-5 \">
\t\t\t\t\t\t\t<div class=\"banner_overlay\"></div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-5 banner_title py-5\">
\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\">A natural <br>nights sleep</h1>
\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-white\">the Ethical Matresses</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7 banner_video\">
\t\t\t\t\t\t\t\t\t<img src={{img}} class=\"w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 display_item mt-5\">
\t\t\t\t\t\t\t\t\t<div class=\"best_buy\">
\t\t\t\t\t\t\t\t\t\t<div class=\"best_product row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-5 pl-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/best-buy.png\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-7 px-0 details_part\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-blue\">Best Buy</p>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-subhead\">Millenium</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">Intibus sapicaeperum faccaec epudae ius, ut evelit eum hario.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"all_product\">
\t\t\t\t\t\t\t\t\t\t<div class=\"product_list pl-0 pr-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/signature.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-subhead\">Signiture</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_list px-1\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/signature2.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-subhead\">Dunlopillo Go</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"product_list pr-0 pl-2\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/signature3.png\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-subhead\">Divas Bases</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"our_mission pl-5 my-5\">
\t\t\t\t\t\t\t<div class=\"row mx-0\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"comfort_text pt-5\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-grey\">Our Mission</h6>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-subhead pb-4\">Sustainable comfort</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">Sleep easy with our environmentally friendly mattresses, made from natural latex rubber. All our latex is harvested from sustainably managed plantations, which purify over 90 million tons of carbon dioxide a year.</p>
\t\t\t\t\t\t\t\t\t\t<ul class=\"mt-4 pl-4\">
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-blue text-uppercase\">7 comfort zones</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-blue text-uppercase\">Pressure Relieving</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-blue text-uppercase\">Breathable</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-blue text-uppercase\">Progressive comfort</span>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-uppercase shop_bttn\">Shop mattresses</a>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 mission_img pr-0\">
\t\t\t\t\t\t\t\t\t<img src=\"images/mission-right.png\" class=\"w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"green_night_section px-5 py-5\">
\t\t\t\t\t\t\t<div class=\"greennight_overlay\">
\t\t\t\t\t\t\t\t<img src=\"images/green-right.png\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t\t\t<p class=\"text-uppercase\">Our Values</p>
\t\t\t\t\t\t\t\t<h1 class=\"mb-5\">A green nights sleep</h1>
\t\t\t\t\t\t\t\t<div class=\"row sleep_section py-4\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_parts\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ethical.png\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"description_sec\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase pb-2 text-subhead\">Ethical Practice</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">We're committed to providing you with the best service.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_parts\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ethical.png\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"description_sec\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase pb-2 text-subhead\">Natural Resources</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">We're committed to providing you with the best service.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"blog_parts\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"blog_img\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/ethical.png\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"description_sec\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase pb-2 text-subhead\">Enviromental</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">We're committed to providing you with the best service.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"our_promise col-sm-12\">
\t\t\t\t\t\t\t<div class=\"promise_section row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 promise_img px-0\">
\t\t\t\t\t\t\t\t\t<img src=\"images/promise1.png\" class=\"w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 promise_text\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-grey\">our Promise</p>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"pb-2 text-subhead\">Transform your night</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">We take sleep seriously, crafting contemporary designs that blend style with comfort. Enjoy the ultimate sleep experience with our durable mattresses, made from sustainably sourced latex and perfectly engineered for natural resistance and hold. </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"promise_section row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 promise_img order2 px-0\">
\t\t\t\t\t\t\t\t\t<img src=\"images/promise2.png\" class=\"w-100\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 promise_text\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-uppercase text-grey\">our Promise</p>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"pb-2 text-subhead\">The science of sleep</h1>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-grey\">Wake up feeling fresh, clean and healthy, with the help of our Actipro™ technology. Used in the fabric of our mattresses, it provides natural protection against allergens, dust mites, and odours, ensuring you get the best night’s sleep, every night. </p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"shownow_section col-sm-12 py-5 \">
\t\t\t\t\t\t\t<div class=\"shopnow_overlay\"></div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"shopow_banner py-5 text-center \">
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\">Ready for a natural nights sleep?</br>Head to our shop –</h1>
\t\t\t\t\t\t\t\t\t\t<div class=\"shopnow_bttns mt-5\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-uppercase now_bttn\">Shop Now</a>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-uppercase learn_bttn\">Learn More</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
<footer>
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<div class=\"footer_main px-5 pt-5 pb-3\">
\t\t\t\t\t\t<div class=\"footer_menu\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li class=\"pl-0\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Mattresses</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"  class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Divan bases</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\"  class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Headboards</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>The review</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"float-right\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Delivery</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>Stockists</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"pr-0\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"text-grey\">
\t\t\t\t\t\t\t\t\t\t<span>FAQ</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"footer_details\">
\t\t\t\t\t\t\t<div class=\"listing_section pr-5\">
\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-grey mb-3\">Steinhoff UK Beds Ltd.</h6>
\t\t\t\t\t\t\t\t<p class=\"text-grey\">Registered no. 08431253</br>VAT No. GB 506 3312 84</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"listing_section pr-5\">
\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-grey mb-3\">Address</h6>
\t\t\t\t\t\t\t\t<p class=\"text-grey\">5th Floor, Festival House, Jessop </br>Avenue, Cheltenham, </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"listing_section\">
\t\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-grey mb-3\">Contact</h6>
\t\t\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t\t\t<a href=\"tel:+0800 158 4842\" class=\"text-grey\">0800 158 4842</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@slumberland.co.uk\" target=\"_top\"  class=\"text-blue\">info@slumberland.co.uk</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>
", "themes/slumberland/templates/nodes/node--landing_page.html.twig", "/var/www/html/dunlopillo_work/web/themes/slumberland/templates/nodes/node--landing_page.html.twig");
    }
}
