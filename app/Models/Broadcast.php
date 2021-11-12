<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Lib\AgileEmail\AgileEmailSender;
use App\Lib\AgileEmail\AgileSMSSender;

class Broadcast extends Model
{
    use HasFactory;
    
    protected $fillable = ['content', 'destination', 'channel'];
    
    public function process() {
        $channel = $this->channel;
        $message = $this->content;
        
        $processor = new MessageProcessor;
        send($channel, $destination, $message);
    }
}
