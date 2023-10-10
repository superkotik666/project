<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Second_template;
use App\Models\Block;


class TemplateSecController extends Controller
{

    public function template2()
    {
        $second_temp = Second_template::all();
        $blocks = Block::all();

        return view('templates.template2', compact('second_temp', 'blocks'));

    }


    public function updateText(Request $request)
    {
        $newText = $request->input('text');
        $selected_blocks = $request->input('selected_blocks');

        foreach ($selected_blocks as $id) {
            $template = Second_template::find($id);

            if ($template) {
                $template->content = $newText;
                $template->save();
            }
        }
        return redirect()->back();
    }


    public function updateContent(Request $request)
    {

        $second_temp = Second_template::all();
        $blocks = Block::all();
        $selectedBlockId = $request->input('selected_block');
        $selectedBlock = Block::find($selectedBlockId);
        $template2 = new Second_template();
        $template2->content = $selectedBlock->content;
        $template2->save();


        return redirect()->route('content2.update')->with([
            'second_temp' => $second_temp,
            'blocks' => $blocks,
        ]);

    }
}
