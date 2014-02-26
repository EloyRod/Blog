<?php

/* error/error.twig */
class __TwigTemplate_d94a6242de36bca6c5c5e4dc085190d2 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <title>Zend Framework Default Application</title>
</head>
<body>
  <h1>An error occurred</h1>
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context['message']) ? $context['message'] : null), "html");
        echo "</h2>

  ";
        // line 11
        if ((isset($context['exception']) ? $context['exception'] : null)) {
            // line 12
            echo "
  <h3>Exception information:</h3>
  <p>
      <b>Message:</b> ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['exception']) ? $context['exception'] : null), "getMessage", array(), "any", false, 15), "html");
            echo "
  </p>

  <h3>Stack trace:</h3>
  <pre>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context['exception']) ? $context['exception'] : null), "getTraceAsString", array(), "any", false, 19), "html");
            echo "
  </pre>

  <h3>Request Parameters:</h3>
  ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context['request']) ? $context['request'] : null), "getParams", array(), "any", false, 23));
            foreach ($context['_seq'] as $context['paramName'] => $context['param']) {
                // line 24
                echo "  ";
                echo twig_escape_filter($this->env, (isset($context['paramName']) ? $context['paramName'] : null), "html");
                echo ": ";
                echo twig_escape_filter($this->env, (isset($context['param']) ? $context['param'] : null), "html");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramName'], $context['param'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 26
            echo "  ";
        }
        // line 27
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "error/error.twig";
    }
}
