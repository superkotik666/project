<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Text;
use Illuminate\Support\Facades\Schema;

class TextController extends Controller
{
    public function getText()
    {
        $text = Text::select('text')->first();

        return view('templates.template1', compact('text'));
    }

}
