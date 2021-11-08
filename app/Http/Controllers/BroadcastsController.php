<?php

namespace App\Http\Controllers;

use App\Models\Broadcast;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class BroadcastsController extends BaseController
{
    public function index() {
        return view('broadcasts.index');
    }
    
    public function create() {
        return view('broadcasts.create');
    }
    
    public function store(Request $request) {
        $fields = $request->validate([
            'content' => 'required',
            'destination' => 'required',
            'channel' => 'required',
        ]);
        
        $broadcast = Broadcast::create($fields);
        
        return redirect()->route('broadcasts.show', [$broadcast->id]);
    }

}
