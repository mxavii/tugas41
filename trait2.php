<?php
class ABC {

    public function __call($method_name,$arguments) {

        $methodArray = array('displayMessage1','displayMessage2');
        if (in_array($method_name,$methodArray) === false) {
            die("\n Method does not exist");
        }

        if (count($arguments) === 2) {
            $this->displayMessage2($arguments[0],$arguments[1]);
        }

        elseif (count($arguments) === 1) {
            $this->displayMessage1($arguments[0]);
        }

        else {
            echo "\n unknown method";
            return false;
        }
    }

  function displayMessage1($var1) {
        echo "\n from func1($var1)";
    }

  function displayMessage2($var1,$var2) {
        echo "\n from func2($var1,$var2)";
    }

}

$obj1 = new ABC;
$obj1->displayMessage('hello');
$obj1->displayMessage('hello','hello2');
$obj1->displayMessage('Hello');
 ?>
