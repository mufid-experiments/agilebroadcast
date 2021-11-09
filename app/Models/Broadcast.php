<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Lib\AgileSMS\AgileSMSSender;

class Broadcast extends Model
{
    use HasFactory;
    
    protected $fillable = ['content', 'destination', 'channel'];
    
    public function process() {
        if ($this->channel == 'sms') {
            AgileSMSSender::send($this->destination, $this->content);
        } else if ($this->channel == 'email') {
            // AgileEmailSender::send($this->destination, $this->message);
        } else {
            exit("Error: unknown channel");
        }
    }
}
