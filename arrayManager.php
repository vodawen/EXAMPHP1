<?php

class arrayManager
{

    private $CurrentArray;

    private $age;

    function __construct($newArray)
    {
        $this->CurrentArray = $newArray;
    }

    function __get()
    {
        return $this->CurrentArray;
    }

    function __set($ArrayIndex, $NewValue)
    {
        $this->CurrentArray[$ArrayIndex] = $NewValue;
    }

    function getSmaller()
    {
        $tailleTabl = count($this->CurrentArray);
        $CurrentSmaller = $this->CurrentArray[0];

        if ($tailleTabl == 0) {
            return false;
        }

        for ($index = 1; $index < $tailleTabl; $index ++) {
            if ($this->CurrentArray[$index] < $CurrentSmaller) {
                $CurrentSmaller = $this->CurrentArray[$index];
            }
        }
        return $CurrentSmaller;
    }
}
?>