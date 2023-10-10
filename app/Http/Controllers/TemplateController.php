<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\First_template;
use App\Models\Block;

class TemplateController extends Controller
{

    public function index()
    {
        return view('templates.index');
    }

    public function template1()
    {
        $first_temp = First_template::all();
        $blocks = Block::all();
        return view('templates.template1', compact('first_temp', 'blocks'));

    }


    public function updateText(Request $request)
    {
        $newText = $request->input('text');
        $selected_blocks = $request->input('selected_blocks');

        foreach ($selected_blocks as $id) {
            $template = First_template::find($id);

            if ($template) {
                $template->content = $newText;
                $template->save();
            }
        }
        return redirect()->back();
    }


    public function updateContent(Request $request)
    {
        $first_temp = First_template::all();

        $selectedBlockId = $request->input('selected_block');
        $blocks = Block::all();
        $selectedBlock = Block::find($selectedBlockId);
        $template1 = new First_template;
        $template1->content = $selectedBlock->content;
        $template1->save();



        return redirect()->route('content1.update')->with([
            'first_temp' => $first_temp,
            'blocks' => $blocks,
        ]);
    }


}
