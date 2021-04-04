<?php
namespace Test\Lucinda\MVC\Locators;

use Lucinda\MVC\Locators\ViewResolverLocator;
use Lucinda\UnitTest\Result;

require_once(dirname(__DIR__)."/mocks/ApplicationMock.php");

class ViewResolverLocatorTest
{
    public function getClassName()
    {
        $application = new \ApplicationMock(dirname(__DIR__)."/configuration.xml");
        $locator = new ViewResolverLocator($application, $application->resolvers($application->getDefaultFormat()));
        return new Result($locator->getClassName()=="JsonResolver");
    }
}
