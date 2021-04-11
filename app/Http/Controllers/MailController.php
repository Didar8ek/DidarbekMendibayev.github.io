<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $data = array('name'=>"Didarbek Mendibayev", "body" => "Test mail");
     
        Mail::send('mails.demo', $data, function($message){
            $message->to('didar200224@gmail.com', 'Didarbek Mendibayev')
                    ->subject('Artisans Web Testing Mail');
            $message->from('190103293@stu.sdu.edu.kz','Didarbek Mendibayev');
        });
    }
}
