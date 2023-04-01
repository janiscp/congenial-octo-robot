<?php
namespace LABCore\TemplateEngine;

// use Twig;
use Twig\Loader\FilesystemLoader as TwigFilesystemLoader;
use Twig\Environment as TwigEnvironment;

/**
 * Twig is a modern template engine for PHP
 *
 * @see https://twig.symfony.com/
 *
 */
class TwigCustom implements TemplateEngineInterface
{
    protected $loader;
    protected $engine;

    public function __construct($_twig_path = 'twig_path', $_cache_path = 'cache_path')
    {
        $this->loader = new TwigFilesystemLoader($_twig_path);

        $this->engine = new TwigEnvironment($this->loader, [
            'cache' => $_cache_path.'cache/twig/',
            'auto_reload' => true,
        ]);

    }


    public function hello()
    {
        return 'HELLO: This is Twig;';
    }


    public function view($_twig_file, $_view_data = [])
    {
        echo $this->engine->render($_twig_file, $_view_data);
        return;
    }
}
