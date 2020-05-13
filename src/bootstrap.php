<?php

namespace ZTomesic;

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

function bootstrap(Finder $finder, array $rules = []) {

  $rules = array_merge(require __DIR__.'/rules.php', $rules);

  return Config::create()
    ->setFinder($finder)
    ->setRules($rules)
    ->setRiskyAllowed(true)
    ->setUsingCache(true);
}
