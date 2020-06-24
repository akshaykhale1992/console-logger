# A simple Browser Console Logger for PHP

[![scrutinizer build status](https://scrutinizer-ci.com/g/akshaykhale1992/console-logger/badges/build.png?b=master)](https://scrutinizer-ci.com/g/akshaykhale1992/console-logger/?branch=master)
[![scrutinizer version code](https://scrutinizer-ci.com/g/akshaykhale1992/console-logger/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/akshaykhale1992/console-logger/?branch=master)

## How it started ?

We all have been in situations where we wanted to step through the code by logging the variable details. Most of the time we simply do.

    print_r($variable);die();

And I find this process tedious, stopping for a simple variable log. I wanted a simple console log just like Javascript which is my inspiration behind creating console logger.

It is similar console log, it follows [PSR-3: Logger Interface](https://www.php-fig.org/psr/psr-3/) standards so you don't have to learn anything new.

## How to use it ?
1. Install the Package using composer
    
    composer require akshaykhale1992/console-logger
    
2. User the Logger

Sample Code:


    <?php
    include './vendor/autoload.php';
    use consoleLogger\Logger;
    (new Logger())->emergency("This is from Server Side");
    (new Logger())->alert("This is from Server Side");
    (new Logger())->critical("This is from Server Side");
    (new Logger())->error("This is from Server Side");
    (new Logger())->warning("This is from Server Side");
    (new Logger())->notice("This is from Server Side");
    (new Logger())->info("This is from Server Side");
    (new Logger())->debug("This is from Server Side");
    (new Logger())->group("'Group 1'");
    (new Logger())->info("This is from a Group 1");
    (new Logger())->info("This is from a Group 2");
    (new Logger())->info("This is from a Group 3");
    (new Logger())->groupEnd();
    (new Logger())->info("This is from Server Side", ['this' => 'is', 'an' => 'Array']);
    (new Logger())->info("This is from Server Side", ['this', 'is', 'a', 'simple', 'Array']);

## To-DO

- Adding Test cases.
