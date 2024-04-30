#!/usr/bin/env php
<?php
// See: https://symfony.com/doc/6.4/components/console.html
// See: https://dev.to/pretzelhands/building-an-easily-distributable-single-file-command-line-app-with-php-and-composer-2hfi
// Run this command:
// #./af_first_app.php --bar=elephant-tusk

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
        $bar = $input->getOption('bar');
        $output->writeln($bar);
        $output->writeln("Some text on screen!");
        $output->writeln("Some more output");
        return 4;
    })
    ->run();