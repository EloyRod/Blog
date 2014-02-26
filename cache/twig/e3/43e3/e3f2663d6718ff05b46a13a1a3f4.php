<?php

/* layout.phtml */
class __TwigTemplate_e343e3f2663d6718ff05b46a13a1a3f4 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!doctype html>
<html lang=\"es\">
<head>
    <meta charset=\"UTF-8\">
    <title>Aplicación</title>
</head>
<body>
    <?php echo \$this->layout()->content; ?>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "layout.phtml";
    }
}
