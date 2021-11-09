<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Lib\AgileEmail\AgileEmailSender;

class Broadcast extends Model
{
    use HasFactory;
    
    protected $fillable = ['content', 'destination', 'channel'];
    
    public function process() {
        if ($this->channel == 'email') {
            AgileEmailSender::send($this->destination, $this->content);
        } else {
            exit("Error: unknown channel");
        }
    }
}
