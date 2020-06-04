<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function mainpage(){
        return view('mainpage');
    }
    public function asiaoptom(){
        return view('inc.directions.asiaoptom');
    }
    public function g2rexport(){
        return view('inc.directions.g2rexport');
    }
    public function g2rmachine(){
        return view('inc.directions.g2rmachine');
    }
    public function g2rlogistics(){
        return view('inc.directions.g2rlogistics');
    }
    public function printural(){
        return view('inc.directions.printural');
    }
    public function SendForm(Request $request)
    {
        // Выполнится после отправки формы:
        if ($request->isMethod('post')) {

            $name = $request->input('name');
            $surname = $request->input('surname');
            $phone = $request->input('phone');
            $email = $request->input('email');
            $questions = $request->input('questions');
            $for_company = $request->input('for_company');

            \Illuminate\Support\Facades\Mail::to('nikitos.0@list.ru')->send(new \App\Mail\WelcomeMail($name, $surname, $phone, $email, $questions, $for_company));
            return new \App\Mail\WelcomeMail($name, $surname, $phone, $email, $questions, $for_company);
        }

    }
}
