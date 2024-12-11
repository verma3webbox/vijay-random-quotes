# vijay-random-quotes

A library that generates random quotes with auther name

## INSTALLATION

The recommended way to install this library [Composer](http://getcomposer.org):

```sh
composer require vijayverma/random-quote

```
## EXAMPLE USE

```php
<?php
  require_once './vendor/autoload.php';
  use VijayVerma\RandomQuote\RandomQuote;
  $randomQuote = new RandomQuote ;
  print_r($randomQuote->get());
  echo "\n";
?>