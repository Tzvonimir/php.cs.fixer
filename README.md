# TZvonimir PHP - Laravel php-cs checker
Laravel php-cs style checker for laravel applications.

## Install
Package is not on composer, but it can be added to project using repository section
in composer.json

```
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/tzvonimir/php.cs.fixer"
  }
]
```

then run composer

`composer require tzvonimir/phpcsfixer --dev`

## Usage
Copy default php cs configuration
`cp ./vendor/ztomesic/phpcsfixer/.php_cs.dist.example .php_cs.dist`

Run fixer
`./vendor/bin/php-cs-fixer fix --dry-run`