<?php

/*
 * IMPORTANT: This file is generated by cucumber-rails - edit at your own peril.
 * It is recommended to regenerate this file in the future when you upgrade to a 
 * newer version of cucumber-rails. Consider adding your own code to a new file 
 * instead of editing this one. Cucumber will automatically load all features/steps/???.php files.
 */

/*
 * This file is part of the sfBehatPlugin package.
 * (c) 2010 Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$steps->Given('/^I am on(?: the)? (.*)$/', function($world, $page) {
    $world->browser->get($world->guessPath($page));
});

$steps->Given('/^I go to(?: the)? (.*)$/', function($world, $page) {
    $world->browser->get($world->guessPath($page));
});

$steps->Given('/I (?:follow|click)(?: the)? "([^"]*)"(?: link)*/', function($world, $link) {
    $world->browser->click($link);
});

$steps->When('/^I follow redirect$/', function($world) {
    $world->browser->followRedirect();
});

$steps->When('/^I fill in "([^"]*)" with "([^"]*)"$/', function($world, $field, $value) {
    $world->form[$field] = $value;
});

$steps->When('/^I select "([^"]*)" from "([^"]*)"$/', function($world, $value, $field) {
    $world->form[$field] = $value;
});

$steps->When('/^I check "([^"]*)"$/', function($world, $field) {
    $world->form[$field] = true;
});

$steps->When('/^I uncheck "([^"]*)"$/', function($world, $field) {
    $world->form[$field] = false;
});

$steps->When('/^I attach the file at "([^"]*)" to "([^"]*)"$/', function($world, $path, $field) {
    $world->form[$field] = $path;
});

$steps->When('/^I press "([^"]*)"$/', function($world, $button) {
    $world->browser->click($button, $world->form);
    $world->form = array();
});

$steps->Then('/^Cookie "([^"]*)" was set to "([^"]*)"$/', function($world, $name, $value) {
    $isSet = false;

    foreach ($world->getResponse()->getCookies() as $cookie) {
        if ($name == $cookie['name'] && $value == $cookie['value']) {
            $isSet = true;
        }
    }

    assertTrue($isSet);
});

$steps->Then('/^Cookie "([^"]*)" was not set to "([^"]*)"$/', function($world, $name, $value) {
    $isSet = false;

    foreach ($world->getResponse()->getCookies() as $cookie) {
        if ($name == $cookie['name'] && $value == $cookie['value']) {
            $isSet = true;
        }
    }

    assertFalse($isSet);
});

$steps->Then('/^Header "([^"]*)" is set to "([^"]*)"$/', function($world, $key, $value) {
    assertEquals($value, $world->getResponse()->getHttpHeader($key));
});

$steps->Then('/^Header "([^"]*)" is not set to "([^"]*)"$/', function($world, $key, $value) {
    assertNotEquals($value, $world->getResponse()->getHttpHeader($key));
});

$steps->Then('/^Response status code is (\d+)$/', function($world, $code) {
    assertEquals($code, $world->getResponse()->getStatuscode());
});

$steps->Then('/^Response status code is not (\d+)$/', function($world, $code) {
    assertNotEquals($code, $world->getResponse()->getStatuscode());
});

$steps->Then('/^I was redirected$/', function($world, $key, $value) {
    assertNotNull($world->getResponse()->getHttpHeader('location'));
});

$steps->Then('/^I was not redirected$/', function($world, $key, $value) {
    assertNull($world->getResponse()->getHttpHeader('location'));
});

$steps->Then('/^I should see "([^"]*)"$/', function($world, $text) {
    assertRegExp("/$text/", $world->getResponse()->getContent());
});

$steps->Then('/^I should not see "([^"]*)"$/', function($world, $text) {
    assertNotRegExp("/$text/", $world->getResponse()->getContent());
});