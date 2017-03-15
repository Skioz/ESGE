<?php

/* PrestaShopBundle:Admin/Product:catalog_empty.html.twig */
class __TwigTemplate_d9f95b91423817694466109d76e78b90c58f153c8c62cdb710766507542b2ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin:layout.html.twig", "PrestaShopBundle:Admin/Product:catalog_empty.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "  <div class=\"col-md-12 text-md-center\">
    <div class=\"m-t-3 emptycatalog-icon\">
      <i class=\"material-icons\">add_shopping_cart</i>
    </div>

    ";
        // line 33
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]Add your first product[/1][2]or import a list of products (filetypes: .csv, .xls, .xlsx, .xlst, .ods, .ots).[/2]", array(), "Admin.Catalog.Feature"), array("[1]" => (("<div class=\"m-t-1\"><a class=\"btn btn-primary\" id=\"product_empty_list_add_btn\" href=\"" . $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new")) . "\">"), "[/1]" => "</a></div>", "[2]" => (("<div class=\"m-t-1\"><a href=\"" .         // line 37
(isset($context["import_url"]) ? $context["import_url"] : null)) . "\" class=\"external-link\" id=\"product_empty_list_go_to_import\">"), "[/2]" => "</a></div>"));
        // line 40
        echo "

  </div>
";
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product:catalog_empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 40,  39 => 37,  38 => 33,  31 => 28,  28 => 27,  11 => 25,);
    }

    public function getSource()
    {
        return "";
    }
}
