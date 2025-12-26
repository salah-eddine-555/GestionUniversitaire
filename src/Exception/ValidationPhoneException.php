<?php

class ValidationPhoneException extends Exception
{
    public function getMessageVlidatePhoneNumber(){
        return "Exception phone number : " . $this->getMessage();
    }
}