<?php

/* partials/navigation.html.twig */
class __TwigTemplate_8161e0bbac3865e2c6f024a1a24847628cb888cf4f37984c940a53173c1e814b extends Twig_Template
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
        echo "<nav class=\"navbar ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "navbar_class", array())) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "navbar_class", array());
        } else {
            echo "navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top";
        }
        echo "\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        if ( !$this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "url", array())) {
            echo ($context["base_url_absolute"] ?? null);
        } else {
            echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "url", array());
        }
        echo "\">
            <img src=\"";
        // line 4
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://img/responsive_logo_reverse.svg");
        echo "\" width=300 height=116 />
        </a>
        <a class=\"navbar-toggler hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
            &#9776;
        </a>
        <a class=\"navbar-toggler navbar-toggler-custom hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingMobileUser\" aria-expanded=\"false\" aria-controls=\"collapsingMobileUser\">
            <span class=\"icon-user\"></span>
        </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
            <ul class=\"nav navbar-nav pull-right\">
                ";
        // line 14
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 15
        echo "                ";
        // line 16
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 18
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("active") : (""));
                // line 19
                echo "                <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_page"] ?? null);
                echo "\">
                    <a class=\"nav-link\" href=\"";
                // line 20
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                        ";
                // line 21
                echo $this->getAttribute($context["page"], "menu", array());
                echo "<span class=\"sr-only\">(current)</span>
                    </a>
                </li>
                ";
            }
            // line 25
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 27
            echo "                <li class=\"nav-item nav-item-toggable\">
                    <a class=\"nav-link\" href=\"";
            // line 28
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
        // line 31
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 32
            echo "                ";
            if ( !$this->getAttribute($this->getAttribute($context["module"], "header", array()), "hidemenu", array())) {
                // line 33
                echo "                ";
                $context["current_page"] = ((($this->getAttribute($context["module"], "active", array()) || $this->getAttribute($context["module"], "activeChild", array()))) ? ("current") : (""));
                // line 34
                echo "                <li class=\"nav-item nav-item-toggable ";
                echo ($context["current_module"] ?? null);
                echo "\">
                    <a class=\"nav-link\" href=\"#";
                // line 35
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
                echo "\">";
                echo $this->getAttribute($context["module"], "menu", array());
                echo "</a>
                </li>
                ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                ";
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 41
            echo "                <li class=\"nav-item nav-item-toggable hidden-sm-up\">
                    <form class=\"navbar-form\">
                        ";
            // line 43
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navigation.html.twig", 43)->display($context);
            // line 44
            echo "                    </form>
                </li>
                <li class=\"navbar-divider hidden-sm-down\"></li>
                <li class=\"nav-item dropdown nav-dropdown-search hidden-sm-down\">
                    <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"icon-search\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-search\" aria-labelledby=\"dropdownMenu1\">
                        <form class=\"navbar-form\">
                            ";
            // line 53
            $context["form2"] = true;
            // line 54
            echo "                            ";
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/navigation.html.twig", 54)->display($context);
            // line 55
            echo "                        </form>
                    </div>
                </li>
                ";
        }
        // line 59
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array())) {
            // line 60
            echo "                ";
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())) {
                // line 61
                echo "                <li class=\"nav-item dropdown hidden-sm-down textselect-off\">
                    ";
                // line 62
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                    // line 63
                    echo "                        <a class=\"nav-link dropdown-toggle nav-dropdown-user\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"http://www.gravatar.com/avatar/";
                    // line 64
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()));
                    echo "?s=40\" class=\"img-circle\" alt=\"Gravatar\"/><span class=\"icon-caret-down\"></span>
                        </a>
                    ";
                }
                // line 67
                echo "                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated\" aria-labelledby=\"dropdownMenu2\">
                        <div class=\"media\">
                        ";
                // line 69
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                    // line 70
                    echo "                        <div class=\"media-left\">
                            <img src=\"http://www.gravatar.com/avatar/";
                    // line 71
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()));
                    echo "?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                        </div>
                        ";
                }
                // line 74
                echo "                            ";
                if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array()) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()))) {
                    // line 75
                    echo "                            <div class=\"media-body media-middle\">
                                ";
                    // line 76
                    if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) {
                        // line 77
                        echo "                                <h5 class=\"media-heading\">";
                        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array());
                        echo "</h5>
                                ";
                    }
                    // line 79
                    echo "                                ";
                    if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                        // line 80
                        echo "                                <h6>";
                        echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array());
                        echo "</h6>
                                ";
                    }
                    // line 82
                    echo "                            </div>
                            ";
                }
                // line 84
                echo "                        </div>
                        <a href=\"";
                // line 85
                echo ($context["base_url_absolute"] ?? null);
                echo "/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
                        <a href=\"";
                // line 86
                echo ($context["base_url_absolute"] ?? null);
                echo "/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
                        <a href=\"";
                // line 87
                echo ($context["base_url_absolute"] ?? null);
                echo "/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
                        ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "userlinks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 89
                    echo "                            <a href=\"";
                    echo $this->getAttribute($context["item"], "url", array());
                    echo "\" class=\"dropdown-item text-uppercase\">";
                    echo $this->getAttribute($context["item"], "text", array());
                    echo "</a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                        <a href=\"";
                echo $this->getAttribute(($context["uri"] ?? null), "url", array());
                echo "/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
                        <a href=\"";
                // line 92
                echo ($context["base_url_absolute"] ?? null);
                echo "/admin/users/";
                echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array());
                echo "\" class=\"btn-circle has-gradient pull-right\">
                            <span class=\"sr-only\">Edit</span>
                            <span class=\"icon-edit\"></span>
                        </a>
                    </div>
                </li>
                ";
            } else {
                // line 99
                echo "                <li class=\"nav-item nav-item-toggable \">
                    <a class=\"nav-link\" href=\"login\">
                        ";
                // line 101
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGIN");
                echo "
                    </a>
                </li>
                ";
            }
            // line 105
            echo "                ";
        }
        // line 106
        echo "            </ul>
        </div>
        ";
        // line 108
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))) {
            // line 109
            echo "        <div id=\"collapsingMobileUser\" class=\"collapse navbar-toggleable-custom dropdown-menu-custom p-x hidden-md-up\" role=\"tabpanel\" aria-labelledby=\"collapsingMobileUser\">
            <div class=\"media m-t\">
                ";
            // line 111
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                // line 112
                echo "                <div class=\"media-left\">
                    <img src=\"http://www.gravatar.com/avatar/";
                // line 113
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()));
                echo "?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                </div>
                ";
            }
            // line 116
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array()) || $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array()))) {
                // line 117
                echo "                <div class=\"media-body media-middle\">
                    ";
                // line 118
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) {
                    // line 119
                    echo "                    <h5 class=\"media-heading\">";
                    echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array());
                    echo "</h5>
                    ";
                }
                // line 121
                echo "                    ";
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array())) {
                    // line 122
                    echo "                    <h6>";
                    echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "email", array());
                    echo "</h6>
                    ";
                }
                // line 124
                echo "                </div>
                ";
            }
            // line 126
            echo "            </div>
            <a href=\"";
            // line 127
            echo ($context["base_url_absolute"] ?? null);
            echo "/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
            <a href=\"";
            // line 128
            echo ($context["base_url_absolute"] ?? null);
            echo "/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
            <a href=\"";
            // line 129
            echo ($context["base_url_absolute"] ?? null);
            echo "/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
            ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "userlinks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 131
                echo "                <a href=\"";
                echo $this->getAttribute($context["item"], "url", array());
                echo "\" class=\"dropdown-item text-uppercase\">";
                echo $this->getAttribute($context["item"], "text", array());
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            echo "            <a href=\"";
            echo $this->getAttribute(($context["uri"] ?? null), "url", array());
            echo "/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
            <a href=\"";
            // line 134
            echo ($context["base_url_absolute"] ?? null);
            echo "/admin/users/";
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array());
            echo "\" class=\"btn-circle has-gradient pull-right\">
                <span class=\"sr-only\">Edit</span>
                <span class=\"icon-edit\"></span>
            </a>
        </div>
        ";
        }
        // line 140
        echo "    </div>
</nav>
";
    }

    // line 15
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
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 15,  386 => 140,  375 => 134,  370 => 133,  359 => 131,  355 => 130,  351 => 129,  347 => 128,  343 => 127,  340 => 126,  336 => 124,  330 => 122,  327 => 121,  321 => 119,  319 => 118,  316 => 117,  313 => 116,  307 => 113,  304 => 112,  302 => 111,  298 => 109,  296 => 108,  292 => 106,  289 => 105,  282 => 101,  278 => 99,  266 => 92,  261 => 91,  250 => 89,  246 => 88,  242 => 87,  238 => 86,  234 => 85,  231 => 84,  227 => 82,  221 => 80,  218 => 79,  212 => 77,  210 => 76,  207 => 75,  204 => 74,  198 => 71,  195 => 70,  193 => 69,  189 => 67,  183 => 64,  180 => 63,  178 => 62,  175 => 61,  172 => 60,  169 => 59,  163 => 55,  160 => 54,  158 => 53,  147 => 44,  145 => 43,  141 => 41,  139 => 40,  136 => 39,  130 => 38,  122 => 35,  117 => 34,  114 => 33,  111 => 32,  106 => 31,  95 => 28,  92 => 27,  87 => 26,  81 => 25,  74 => 21,  70 => 20,  65 => 19,  62 => 18,  59 => 17,  54 => 16,  52 => 15,  50 => 14,  37 => 4,  29 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar {% if page.header.navbar_class %}{{ page.header.navbar_class }}{% else %}navbar-dark bg-inverse bg-inverse-custom navbar-fixed-top{% endif %}\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"{% if not site.logo.url %}{{ base_url_absolute }}{% else %}{{ site.logo.url }}{% endif %}\">
            <img src=\"{{ url('theme://img/responsive_logo_reverse.svg') }}\" width=300 height=116 />
        </a>
        <a class=\"navbar-toggler hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingNavbar\" aria-expanded=\"false\" aria-controls=\"collapsingNavbar\">
            &#9776;
        </a>
        <a class=\"navbar-toggler navbar-toggler-custom hidden-md-up pull-right\" data-toggle=\"collapse\" href=\"#collapsingMobileUser\" aria-expanded=\"false\" aria-controls=\"collapsingMobileUser\">
            <span class=\"icon-user\"></span>
        </a>
        <div id=\"collapsingNavbar\" class=\"collapse navbar-toggleable-custom\" role=\"tabpanel\" aria-labelledby=\"collapsingNavbar\">
            <ul class=\"nav navbar-nav pull-right\">
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

                {% if config.plugins.simplesearch.enabled %}
                <li class=\"nav-item nav-item-toggable hidden-sm-up\">
                    <form class=\"navbar-form\">
                        {% include 'partials/simplesearch_searchbox.html.twig' %}
                    </form>
                </li>
                <li class=\"navbar-divider hidden-sm-down\"></li>
                <li class=\"nav-item dropdown nav-dropdown-search hidden-sm-down\">
                    <a class=\"nav-link dropdown-toggle\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span class=\"icon-search\"></span>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-search\" aria-labelledby=\"dropdownMenu1\">
                        <form class=\"navbar-form\">
                            {% set form2 = true %}
                            {% include 'partials/simplesearch_searchbox.html.twig' %}
                        </form>
                    </div>
                </li>
                {% endif %}
                {% if config.plugins.login.enabled %}
                {% if grav.user.username %}
                <li class=\"nav-item dropdown hidden-sm-down textselect-off\">
                    {% if grav.user.email %}
                        <a class=\"nav-link dropdown-toggle nav-dropdown-user\" id=\"dropdownMenu2\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=40\" class=\"img-circle\" alt=\"Gravatar\"/><span class=\"icon-caret-down\"></span>
                        </a>
                    {% endif %}
                    <div class=\"dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated\" aria-labelledby=\"dropdownMenu2\">
                        <div class=\"media\">
                        {% if grav.user.email %}
                        <div class=\"media-left\">
                            <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                        </div>
                        {% endif %}
                            {% if grav.user.fullname or grav.user.email %}
                            <div class=\"media-body media-middle\">
                                {% if grav.user.fullname %}
                                <h5 class=\"media-heading\">{{ grav.user.fullname }}</h5>
                                {% endif %}
                                {% if grav.user.email %}
                                <h6>{{ grav.user.email }}</h6>
                                {% endif %}
                            </div>
                            {% endif %}
                        </div>
                        <a href=\"{{ base_url_absolute }}/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
                        <a href=\"{{ base_url_absolute }}/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
                        <a href=\"{{ base_url_absolute }}/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
                        {% for item in site.userlinks %}
                            <a href=\"{{ item.url }}\" class=\"dropdown-item text-uppercase\">{{ item.text }}</a>
                        {% endfor %}
                        <a href=\"{{ uri.url }}/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
                        <a href=\"{{ base_url_absolute }}/admin/users/{{ grav.user.username }}\" class=\"btn-circle has-gradient pull-right\">
                            <span class=\"sr-only\">Edit</span>
                            <span class=\"icon-edit\"></span>
                        </a>
                    </div>
                </li>
                {% else %}
                <li class=\"nav-item nav-item-toggable \">
                    <a class=\"nav-link\" href=\"login\">
                        {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}
                    </a>
                </li>
                {% endif %}
                {% endif %}
            </ul>
        </div>
        {% if config.plugins.login.enabled and grav.user.username %}
        <div id=\"collapsingMobileUser\" class=\"collapse navbar-toggleable-custom dropdown-menu-custom p-x hidden-md-up\" role=\"tabpanel\" aria-labelledby=\"collapsingMobileUser\">
            <div class=\"media m-t\">
                {% if grav.user.email %}
                <div class=\"media-left\">
                    <img src=\"http://www.gravatar.com/avatar/{{ grav.user.email|md5 }}?s=60\" class=\"img-circle\" alt=\"Gravatar\"/>
                </div>
                {% endif %}
                {% if grav.user.fullname or grav.user.email %}
                <div class=\"media-body media-middle\">
                    {% if grav.user.fullname %}
                    <h5 class=\"media-heading\">{{ grav.user.fullname }}</h5>
                    {% endif %}
                    {% if grav.user.email %}
                    <h6>{{ grav.user.email }}</h6>
                    {% endif %}
                </div>
                {% endif %}
            </div>
            <a href=\"{{ base_url_absolute }}/admin/pages\" class=\"dropdown-item text-uppercase\">Manage pages</a>
            <a href=\"{{ base_url_absolute }}/admin/system\" class=\"dropdown-item text-uppercase\">Configuration</a>
            <a href=\"{{ base_url_absolute }}/admin/themes\" class=\"dropdown-item text-uppercase\">Installed themes</a>
            {% for item in site.userlinks %}
                <a href=\"{{ item.url }}\" class=\"dropdown-item text-uppercase\">{{ item.text }}</a>
            {% endfor %}
            <a href=\"{{ uri.url }}/task:login.logout\" class=\"dropdown-item text-uppercase text-muted\">Log out</a>
            <a href=\"{{ base_url_absolute }}/admin/users/{{ grav.user.username }}\" class=\"btn-circle has-gradient pull-right\">
                <span class=\"sr-only\">Edit</span>
                <span class=\"icon-edit\"></span>
            </a>
        </div>
        {% endif %}
    </div>
</nav>
", "partials/navigation.html.twig", "/shared/httpd/gravcms/htdocs/user/themes/landio/templates/partials/navigation.html.twig");
    }
}
