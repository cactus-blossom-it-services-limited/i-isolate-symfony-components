#!/usr/bin/env php
<?php
// https://symfony.com/doc/6.4/components/console.html
require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\SingleCommandApplication;

(new SingleCommandApplication())
    ->setName('My Super Command') // Optional
    ->setVersion('1.0.0') // Optional
    ->addArgument('foo', InputArgument::OPTIONAL, 'The directory')
    ->addOption('bar', null, InputOption::VALUE_REQUIRED)
    ->setCode(function (InputInterface $input, OutputInterface $output): int {
        // output arguments and options
        $output->writeln("Some text on screen!");
        $output->writeln("Some more output");
        return 4;

    })
    ->run();