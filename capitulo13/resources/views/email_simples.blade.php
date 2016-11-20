<form method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    <label>Assunto</label>
    <input type="text" name="assunto"/>

    <label>Mensage</label>
    <textarea name="mensagem"></textarea>

    <button type="submit">Enviar</button>
</form>