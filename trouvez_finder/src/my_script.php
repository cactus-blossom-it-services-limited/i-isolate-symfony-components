<?php
// See: https://symfony.com/doc/current/components/using_components.html
// File example: src/my_script.php
// Autoloader relative path to this PHP file
require_once __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Finder\Finder;

//$finder = new Finder();
//$finder->in('../data/');

$finder = new Finder();
// find all files in the current directory
$finder->files()->in(__DIR__);

// check if there are any search results
if ($finder->hasResults()) {
  echo "Tu gagnes! Bonne chance mon ami! Il y a plus d'un fichier dans ce dossier<br><br>";
}

foreach ($finder as $file) {
  echo $absoluteFilePath = $file->getRealPath()."<br><br>";
  print $fileNameWithExtension = $file->getRelativePathname()."<br><br>";
}
