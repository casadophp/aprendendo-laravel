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
      <form method="POST" action="/put" accept-charset="UTF-8">
         <input name="_method" type="hidden" value="PUT">
         {{ csrf_field() }}
         <h1>Teste do put</h1>
         122 Aprendendo Laravel
         <p>Nome: <input required type="text" name="nome" /></p>
         <input type="submit" value="Enviar os dados" />
      </form>
   </body>
</html>