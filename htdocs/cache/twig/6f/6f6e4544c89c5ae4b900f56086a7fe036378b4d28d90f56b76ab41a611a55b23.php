<?php

/* partials/login-form.html.twig */
class __TwigTemplate_84924d27fc1f76f37ba9fdaff080097c7c4d0936fea0314ed46361df58806fe6 extends Twig_Template
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
        echo "<section class=\"section-text\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-md-8 col-xl-4 col-xl-offset-4\">
                ";
        // line 5
        echo ($context["content"] ?? null);
        echo "

                ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array())) {
            // line 8
            echo "                    <h3 class=\"p-y text-center\">Welcome <strong>";
            echo $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array());
            echo "</strong> !</h3>
                    <a class=\"btn btn-primary btn-block\" href=\"";
            // line 9
            echo $this->getAttribute(($context["uri"] ?? null), "url", array());
            echo "/task:login.logout\">Logout</a>
                ";
        } else {
            // line 11
            echo "                <h3 class=\"p-y text-center\">Welcome <strong>guest</strong> !</h3>
                <form method=\"post\" action=\"";
            // line 12
            echo ($this->getAttribute(($context["uri"] ?? null), "url", array()) . $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "form", array()), "action", array()));
            echo "\">
                    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "form", array()), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 14
                echo "                        ";
                if ($this->getAttribute($context["field"], "type", array())) {
                    // line 15
                    echo "                            <div class=\"form-group has-icon-left form-control-";
                    if (($this->getAttribute($context["field"], "name", array()) == "username")) {
                        echo "name";
                    }
                    if (($this->getAttribute($context["field"], "name", array()) == "password")) {
                        echo "password";
                    }
                    echo "\">
                                ";
                    // line 16
                    $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/login-form.html.twig", 16)->display($context);
                    // line 17
                    echo "                            </div>
                        ";
                }
                // line 19
                echo "                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                    <div class=\"form-actions secondary-accent\">
                        ";
            // line 22
            echo "                        <button type=\"submit\" class=\"btn btn-primary btn-block\" name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\"></i> ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGIN");
            echo "</button>
                    </div>
                </form>
                ";
        }
        // line 26
        echo "                <p>
                ";
        // line 27
        $this->loadTemplate("partials/messages.html.twig", "partials/login-form.html.twig", 27)->display($context);
        // line 28
        echo "                </p>

            </div>
        </div>
    </div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 28,  113 => 27,  110 => 26,  102 => 22,  99 => 20,  85 => 19,  81 => 17,  79 => 16,  69 => 15,  66 => 14,  49 => 13,  45 => 12,  42 => 11,  37 => 9,  32 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"section-text\">
    <div class=\"container\">
        <div class=\"row text-center\">
            <div class=\"col-md-8 col-xl-4 col-xl-offset-4\">
                {{ content }}

                {% if grav.user.username %}
                    <h3 class=\"p-y text-center\">Welcome <strong>{{ grav.user.username }}</strong> !</h3>
                    <a class=\"btn btn-primary btn-block\" href=\"{{ uri.url }}/task:login.logout\">Logout</a>
                {% else %}
                <h3 class=\"p-y text-center\">Welcome <strong>guest</strong> !</h3>
                <form method=\"post\" action=\"{{ uri.url ~ page.header.form.action}}\">
                    {% for field in page.header.form.fields %}
                        {% if field.type %}
                            <div class=\"form-group has-icon-left form-control-{% if field.name == 'username' %}name{% endif %}{% if field.name == 'password' %}password{% endif %}\">
                                {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                            </div>
                        {% endif %}
                    {% endfor %}
                    <div class=\"form-actions secondary-accent\">
                        {#<a class=\"button secondary\" href=\"{{ base_url_relative }}/forgot\"><i class=\"fa fa-exclamation-circle\"></i> {{ 'PLUGIN_LOGIN.BTN_FORGOT'|t }}</a>#}
                        <button type=\"submit\" class=\"btn btn-primary btn-block\" name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\"></i> {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}</button>
                    </div>
                </form>
                {% endif %}
                <p>
                {% include 'partials/messages.html.twig' %}
                </p>

            </div>
        </div>
    </div>
</div>
</section>
", "partials/login-form.html.twig", "/Applications/MAMP/htdocs/user/themes/landio/templates/partials/login-form.html.twig");
    }
}
