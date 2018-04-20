<?php

/* partials/footer.html.twig */
class __TwigTemplate_c40439ca9f40e9595d5f301f596ef766a6cd2a0ed723fd5ce2008ee158914636 extends Twig_Template
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
        echo "<footer class=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "navbarfooter_class", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "navbarfooter_class", array());
        } else {
            echo "section-footer bg-inverse";
        }
        echo "\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-5\">
        <div class=\"media\">
          <div class=\"media-left\">
            <img src=\"";
        // line 7
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/responsive_logo_reverse.svg");
        echo "\" width=300 height=116 />
            <small class=\"media-body media-bottom\">
            &copy; ";
        // line 9
        echo $this->getAttribute(($context["site"] ?? null), "copyright", array());
        echo "
              </small>
          </div>

        </div>
      </div>
      <div class=\"col-md-6 col-lg-7\">
        <ul class=\"list-inline m-b-0\">
          ";
        // line 17
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 18
        echo "          ";
        // line 19
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 20
            echo "          ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 21
                echo "          ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 22
                echo "          <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_page"] ?? null);
                echo "\">
              <a class=\"nav-link\" href=\"";
                // line 23
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                  ";
                // line 24
                echo $this->getAttribute($context["page"], "menu", array());
                echo "<span class=\"sr-only\">(current)</span>
              </a>
          </li>
          ";
            }
            // line 28
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 30
            echo "          <li class=\"nav-item nav-item-toggable\">
              <a class=\"nav-link\" href=\"";
            // line 31
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
          </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 35
            echo "          ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 36
                echo "          ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                // line 37
                echo "          <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_module"] ?? null);
                echo "\">
              <a class=\"nav-link\" href=\"#";
                // line 38
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
          </li>
          ";
            }
            // line 41
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "          <li><a class=\"scroll-top\" href=\"#totop\">Back to top <span class=\"icon-caret-up\"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
";
    }

    // line 18
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 18,  135 => 42,  129 => 41,  121 => 38,  116 => 37,  113 => 36,  110 => 35,  105 => 34,  94 => 31,  91 => 30,  86 => 29,  80 => 28,  73 => 24,  69 => 23,  64 => 22,  61 => 21,  58 => 20,  53 => 19,  51 => 18,  49 => 17,  38 => 9,  33 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer class=\"{% if page.header.navbarfooter_class %}{{ page.header.navbarfooter_class }}{% else %}section-footer bg-inverse{% endif %}\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-6 col-lg-5\">
        <div class=\"media\">
          <div class=\"media-left\">
            <img src=\"{{ url('theme://img/responsive_logo_reverse.svg') }}\" width=300 height=116 />
            <small class=\"media-body media-bottom\">
            &copy; {{ site.copyright }}
              </small>
          </div>

        </div>
      </div>
      <div class=\"col-md-6 col-lg-7\">
        <ul class=\"list-inline m-b-0\">
          {% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
          {% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}
          {% for page in pages.children %}
          {% if page.visible %}
          {% set current_page = (page.active or page.activeChild) ? 'active' : '' %}
          <li class=\"nav-item nav-item-toggable {{ current_page }}\">
              <a class=\"nav-link\" href=\"{{ page.url }}\">
                  {{ page.menu }}<span class=\"sr-only\">(current)</span>
              </a>
          </li>
          {% endif %}
          {% endfor %}
          {% for mitem in site.menu %}
          <li class=\"nav-item nav-item-toggable\">
              <a class=\"nav-link\" href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
          </li>
          {% endfor %}
          {% for module in page.collection() %}
          {% if not module.header.hidemenu %}
          {% set current_page = (module.active or module.activeChild) ? 'current' : '' %}
          <li class=\"nav-item nav-item-toggable {{ current_module }}\">
              <a class=\"nav-link\" href=\"#{{ _self.pageLinkName(module.menu) }}\">{{ module.menu }}</a>
          </li>
          {% endif %}
          {% endfor %}
          <li><a class=\"scroll-top\" href=\"#totop\">Back to top <span class=\"icon-caret-up\"></span></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
", "partials/footer.html.twig", "/Applications/MAMP/htdocs/user/themes/landio/templates/partials/footer.html.twig");
    }
}
