<?php

/*
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/SeleniumTestSuite.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/Command.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/CommandsHolder.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/Driver.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/URL.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/Response.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/SessionStrategy.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/SessionStrategy/Isolated.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/SessionCommand/GenericAccessor.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/SessionCommand/Url.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/Session.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase/Session/Timeouts.php';
require_once 'vendor/phpunit/phpunit-selenium/PHPUnit/Extensions/Selenium2TestCase.php';
*/

class CalculatorTestSelenium extends PHPUnit_Extensions_Selenium2TestCase
{
	protected function setUp() {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://www.google.com/');
    }
 
    public function testTitle() {
        $this->url('http://www.google.com/');
        $this->assertEquals('Google', $this->title());
    }
}

?>