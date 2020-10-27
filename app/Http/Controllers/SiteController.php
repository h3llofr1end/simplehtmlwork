<?php

namespace App\Http\Controllers;

use App\Models\BoostForm;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function boost()
    {
        return response()->view('boost');
    }

    public function sendForm()
    {
        BoostForm::create([
            'name' => request('name'),
            'email' => request('email'),
            'category' => request('dept'),
            'message' => request('message')
        ]);
        return response()->redirectTo('/boost');
    }
}
