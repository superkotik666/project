<?php

namespace App\Http\Controllers;

use App\Models\Block;


class BlockController extends Controller
{
    public function index()
    {
        $blocks = Block::all();

        return view('modal', ['blocks' => $blocks]);
    }


}
