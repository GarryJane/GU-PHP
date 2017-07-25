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
    <title>Photo Gallery</title>
    <style>
        div {
            float: left;
            padding: 20px;
        }
    </style>
</head>
<body>

<div>
    ";
        // line 16
        echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
        echo "
</div>

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
        return array (  36 => 16,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "gallery.tmpl", "/home/ddl/Git/GU-PHP/proj/templates/gallery.tmpl");
    }
}
