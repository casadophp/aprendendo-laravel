<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailSimplesController extends Controller
{
    public function email()
	{
		if (\Request::isMethod('post')) {
			$assunto = \Request::input('assunto');
			$mensagem = \Request::input('mensagem');	

			\Mail::raw($mensagem, function($swiftMessage) use ($assunto) {
				$swiftMessage->subject($assunto);
				$swiftMessage->to('matheus.marabesi@gmail.com');	
			});

			return 'E-mail enviado com sucesso!';
		}
		
		return view('email_simples');
	}	
}
