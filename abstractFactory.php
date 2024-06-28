<?php

use Kulyaginv\Patterns\AbstractFactory\Page;
use Kulyaginv\Patterns\AbstractFactory\PhpTemplate\PHPTemplateFactory;
use Kulyaginv\Patterns\AbstractFactory\Twig\TwigTemplateFactory;

require 'vendor/autoload.php';

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());

echo "Testing rendering with the Twig factory:\n"; 
echo $page->render(new TwigTemplateFactory());