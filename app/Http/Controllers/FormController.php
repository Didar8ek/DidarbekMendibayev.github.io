<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function index(){
        return view('form');
    }
    public function store(Request $request){
        $form = new Form();
        $form-> name = $request-> input('name');
        $form-> surname = $request-> input('surname');
        $form-> email = $request-> input('email');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/form/', $filename);
            $form->image = $filename;
        } else{
            return $request;
            $form->image = '';
        }
        $form->save();
        return view('form')->with('form',$form);
    }
}
