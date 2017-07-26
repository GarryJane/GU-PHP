<?php

/* single-img.tmpl */
class __TwigTemplate_a626a86852b7d4994eb747f268344cd7775af0cc49f06a0a651c469a93ef0afa extends Twig_Template
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
    <title>";
        // line 5
        echo twig_escape_filter($this->env, ($context["imgName"] ?? null), "html", null, true);
        echo " of Gallery(gu-php-hw3)</title>
    <style>
        div {
            float: left;
            padding: 100px;
            text-align: center;
        }
        img {
            display: block;
            width: 300px;
            height: 300px;
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
<h2> Gallery single image, simple template </h2>
    <div>
        <a href=\"gallery.php\">
            <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["imgURL"] ?? null), "html", null, true);
        echo "\" alt=\"O-o-o-ops... ((\">
            <p>";
        // line 39
        echo twig_escape_filter($this->env, ($context["imgName"] ?? null), "html", null, true);
        echo "</p>
        </a>
    </div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "single-img.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 39,  61 => 38,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "single-img.tmpl", "/home/ddl/Git/GU-PHP/proj/templates/single-img.tmpl");
    }
}
