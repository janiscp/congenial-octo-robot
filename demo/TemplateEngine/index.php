<?php
namespace LABCore\TemplateEngine;

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * TemplateEngine Usage
 *
 */

use LABCore\TemplateEngine as LABTemplating;
use LABCore\TemplateEngine\TwigCustom as LABTwig;

$twig = new LABTwig('./tests/unit/TemplateEngine/twig_path','./tests/unit/TemplateEngine/cache_path/');

$templating = new LABTemplating();
$templating->_init($twig);
echo $templating->hello();
echo "<br>";

$data['BASE_PAGE'] = [
  'page_title' => 'TESTTESTSETS',
  'BODY_CONTENT' => [
    'content' => 'yeaahbaaaah'
  ]
];
echo $templating->view('base_all.twig', $data);