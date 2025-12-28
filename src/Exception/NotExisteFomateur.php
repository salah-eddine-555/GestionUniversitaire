<?php

class NotExisteFomateur extends Exception
{
    public function getMessageExecptionNotExisteFormateur(){
        return "Execption Not existe formateur : " . $this->getMessage();
    }
}