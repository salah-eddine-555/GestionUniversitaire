<?php

class ValidationEmailException extends Exception
{
    public function getMessageVlidationEmail(){
        return "Exception email : " . $this->getMessage();
    }
}