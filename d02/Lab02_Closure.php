<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Closure</title>
    </head>
    <body>
        <h2>Closure Call PHP</h2>
        <hr>
        <?php

        class Greeting {
            private $word = "Hello, ";
        }
        
        class Farewell{
            private $word ="Goodbye, ";
            private $address = "California";
        }
        $c = function ($name) {
            echo "$this->word $name. <br>";
        };
        
        $o1 = new Greeting();
        $o2 = new Farewell;
        
        $c -> call($o1, "Huy");
        $c -> call($o2, "Thu");
        ?>
    </body>
</html>
