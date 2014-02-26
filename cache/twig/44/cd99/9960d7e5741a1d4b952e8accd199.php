<?php

/* index/index.twig */
class __TwigTemplate_44cd9960d7e5741a1d4b952e8accd199 extends Twig_Template
{
    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<h1>List of available sections</h1>
<ul>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context['sections']) ? $context['sections'] : null));
        foreach ($context['_seq'] as $context['_key'] => $context['section']) {
            // line 4
            echo "    <li>";
            echo twig_escape_filter($this->env, (isset($context['section']) ? $context['section'] : null), "html");
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 6
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "index/index.twig";
    }
}
