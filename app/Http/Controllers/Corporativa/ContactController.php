<?php

namespace App\Http\Controllers\Corporativa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
class ContactController extends Controller
{
    public function create(){
        return view('Corporativa.Contacto');
    }
    public function store(Request $request){

       $this->validate($request,[
           'name' => 'required',
           'email' => 'required|email',
           'message' => 'required'
       ]);

       Mail::send('Corporativa.correos', [
           'msg' => $request->message
       ], function ($mail) use($request) {
            $mail->from($request->email, $request->name);
            $mail -> to('fer.peruyero@gmail.com')-> subject('Mensaje de Contacto');
       });
       return redirect()->back()->with('flash_message','Gracias por Contactarnos. Nos pondremos en contacto contigo lo más pronto posible.');
    }
}
