<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Exemplo formulário contato</title>
</head>
<body>
<form method="post" action="enviar-contato">
    {{ csrf_field() }}
    <p> Nome: <input type="text" name="nome"/></p>
    <p> Telefone: <input type="text" name="telefone"/></p>
    <p><input type="submit" value=":: ENVIAR ::"/></p>
</form>
</body>
</html>
