<?php

class InputEmptyException extends Exception
{
    public function GetMessagePersonnalise(){
        return "Empty exception : " . $this->getMessage();
    }
}