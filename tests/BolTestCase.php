<?php
namespace Jasperverbeet\Tests;

use PHPUnit\Framework\TestCase;
use Dotenv\Dotenv;

class BolTestCase extends TestCase
{
    function __construct()
    {
        $dotenv = Dotenv::create(__DIR__);
        $dotenv->load();
    }
}