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
