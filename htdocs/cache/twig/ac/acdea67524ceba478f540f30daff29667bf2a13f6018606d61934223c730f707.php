<?php

/* default.html.twig */
class __TwigTemplate_af14bfac55f7b5f613a841b4f4b03943362640e8c63d20c78e7759bf08766151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = array())
    {
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"section-text\">
  <div class=\"container\">
    <div class=\"row text-center\">
      <div class=\"col-md-8 col-xl-4 col-xl-offset-4\">
        <h1 class=\"arrow\">";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1>
        ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
      </div>
    </div>
  </div>
</section>
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  48 => 9,  44 => 8,  38 => 4,  35 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% block header %}{% endblock %}
{% block content %}
<section class=\"section-text\">
  <div class=\"container\">
    <div class=\"row text-center\">
      <div class=\"col-md-8 col-xl-4 col-xl-offset-4\">
        <h1 class=\"arrow\">{{ page.header.title }}</h1>
        {{ page.content }}
      </div>
    </div>
  </div>
</section>
{% endblock %}
{% block footer %}{% endblock %}
", "default.html.twig", "/Applications/MAMP/htdocs/user/themes/landio/templates/default.html.twig");
    }
}
