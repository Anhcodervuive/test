<?php

namespace App\Models;

use Illuminate\Foundation\Mix;

class ChirpGuest 
{
    public $id;
    public $message;

    public function __construct($id, String $message)
    {
        $this->id = $id;
        $this->message = $message;
    }
}