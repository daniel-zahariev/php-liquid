<?php

/**
 * This file is part of the Liquid package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Liquid
 */

$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->addPsr4('Liquid\\', __DIR__ . '/../src/Liquid');

use Liquid\Liquid;
use Liquid\Template;

Liquid::set('INCLUDE_SUFFIX', 'tpl');
Liquid::set('INCLUDE_PREFIX', '');

$liquid = new Template();
$liquid->parse('{{ hello }} {{ goback }}');

echo $liquid->render(array('hello' => 'hello world', 'goback' => '<a href=".">index</a>'));
