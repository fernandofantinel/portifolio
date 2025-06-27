<?php
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__));
foreach ($it as $file) {
  if ($file->isFile() && $file->getExtension() === 'php') {
    require_once $file->getRealPath();
  }
}
