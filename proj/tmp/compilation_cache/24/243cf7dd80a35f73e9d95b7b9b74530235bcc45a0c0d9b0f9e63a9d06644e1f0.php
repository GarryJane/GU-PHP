<?php

/* gallery.tmpl */
class __TwigTemplate_4e04fdea2f702bac95a3893257521eb90e94b9c23ed677b0e637beae7d2ef954 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Gallery(gu-php-hw3)</title>
    <style>
        div {
            float: left;
            padding: 20px;
            text-align: center;
        }
        img {
            display: block;
            width: 150px;
            height: 150px;
        }
        p {
            text-align: center;
        }
        a[href] {
            color: #c6c6c6;
            text-decoration: none;
        }
        a[href]:visited {
            color: #c6c6c6;
        }
        a[href]:hover {
            color: black;
            font-weight: 600;
        }

    </style>
</head>
<body>
<h2> Gallery, simple template </h2>
";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["imgs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
            // line 37
            echo "    <div>
        <a href=\"gallery.php?action=showImg&name=";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["img"], "name", array()), "html", null, true);
            echo "&url=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["img"], "url", array()), "html", null, true);
            echo "\">
            <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["img"], "url", array()), "html", null, true);
            echo "\" alt=\"O-o-o-ops... ((\">
            <p>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["img"], "name", array()), "html", null, true);
            echo "</p>
        </a>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "gallery.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 44,  73 => 40,  69 => 39,  63 => 38,  60 => 37,  56 => 36,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gallery.tmpl", "/home/ddl/Git/GU-PHP/proj/templates/gallery.tmpl");
    }
}
