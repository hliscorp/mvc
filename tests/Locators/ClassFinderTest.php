<?php
namespace Test\Lucinda\MVC\Locators;

use Lucinda\MVC\Locators\ClassFinder;
use Lucinda\UnitTest\Result;

class ClassFinderTest
{
    public function find()
    {
        $finder = new ClassFinder(dirname(__DIR__)."/mocks");
        return new Result($finder->find("JsonResolver")=="JsonResolver");
    }
}
