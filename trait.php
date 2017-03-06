<?php
class Hewan
{
    private $hwn;

    public function __set($nama, $jenis)
    {
        $this->hwn[$nama] = $jenis;
    }

    public function __get($nama)
    {
        echo "Nama Property = " . $this->hwn[$nama] . "<br/>";
    }

    public function __isset($nama)
    {
        if(isset($this->hwn[$nama])){
            echo "Property \$$nama telah diset.<br/>";
        } else {
            echo "Property \$$nama tidak terset.<br/>";
        }
    }

    public function __unset($nama)
    {
        unset($this->hwn[$nama]);
        echo "\$$nama diunset <br/>";
    }
}

$objToys = new Hewan;

$objToys->overloaded_property = "Gajah";
echo $objToys->overloaded_property . "\n\n";
isset($objToys->overloaded_property);
unset($objToys->overloaded_property);
isset($objToys->overloaded_property);

?>
