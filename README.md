# A simple Browser Console Logger for PHP

## How it started ?

We all have been in situations where we wanted to step through the code by logging the variable. Most of the time we simple do.

    print_r($array);die();

And I find this process tedious, stopping for a simple variable log. I wanted a simple console log just like Javascript which is my inspiration behind creating console logger.

It is similar console log, it follows [PSR-3: Logger Interface](https://www.php-fig.org/psr/psr-3/) standards so you don't have to learn anything new.

## How to user it ?


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

- Creating a composer Package.
- Adding Test cases.