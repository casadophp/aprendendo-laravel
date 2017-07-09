<?php

namespace App\Http\Controllers;

class EmailAnexoController extends Controller
{

    public function email()
    {
        if (\Request::isMethod('post')) {
            $assunto = \Request::input('assunto');
            $mensagem = \Request::input('mensagem');

            \Mail::raw($mensagem, function($swiftMessage) use ($assunto) {
                $swiftMessage->subject($assunto);
                $swiftMessage->to('matheus.marabesi@gmail.com');
                $swiftMessage->attach(app_path('Http/Controllers/EmailAnexoController.php'));
            });

            return 'E-mail enviado com sucesso!';
        }

        return view('email_simples');
    }
}