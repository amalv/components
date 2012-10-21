<?php
namespace Acme;

require_once '../../autoloader.php';

use Acme\Bar;

class Foo extends Bar
{
    // Implementation
}

$foo = new Foo();
$foo::helloWorld();
