<?php

namespace LABCore;

use LABCore\TemplateEngine\TemplateEngineInterface;

/**
 * TemplateEngine Class
 *
 */
class TemplateEngine
{

    protected $app;

    public function _init(TemplateEngineInterface $app)
    {
        $this->app = $app;
    }

    public function hello()
    {
        return $this->app->hello();
    }

    public function view($_twig_file, $_view_data = [])
    {
        return $this->app->view($_twig_file, $_view_data);
    }
}
