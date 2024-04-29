<?php
// See: https://symfony.com/doc/current/components/using_components.html
// File example: src/my_script.php
// Autoloader relative path to this PHP file
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Form\Forms;

$formFactory = Forms::createFormFactory();

