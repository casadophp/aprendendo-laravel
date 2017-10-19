<!doctype html>
<html lang="pt">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-
         scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Teste PUT</title>
   </head>
   <body>
      <form method="POST" action="/deletar" accept-charset="UTF-8">
         {{ method_field('DELETE') }}
         {{ csrf_field() }}
         <h1>Teste do put</h1>
         <ul>
            @foreach($dados as $pessoa)
            <li>
               <input type="checkbox" name="recurso[]"
                  value="{{$pessoa['id'] }}" /> {{ $pessoa['nome'] }}
            </li>
            @endforeach
         </ul>
         <input type="submit" value="Enviar os dados" />
      </form>
   </body>
</html>