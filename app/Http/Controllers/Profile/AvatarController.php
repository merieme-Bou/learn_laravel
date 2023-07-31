<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AvatarController extends Controller
{
    public function update()  {

        return back()->with('message' , 'avatar has changed');

        
    }
}
