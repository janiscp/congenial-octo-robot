<?php
namespace LABCore\TemplateEngine;

/**
 * PHP TemplateEngine - outputs PHP to HTML
 *
 */
interface TemplateEngineInterface
{
    public function hello();
    public function view($_twig_file, $_view_data = []);
}
