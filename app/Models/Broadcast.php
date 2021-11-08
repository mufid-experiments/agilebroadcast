<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    use HasFactory;
    
    protected $fillable = ['content', 'destination'];
    
    public function process() {
        if ($this->channel == 'sms') {
            AgileSMSSender::send($this->destination, $this->message);
        }
    }
}
