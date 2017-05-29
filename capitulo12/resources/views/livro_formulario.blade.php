@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post">
    {{ csrf_field() }}
    <label>Autor</label>
    <input type="text" name="autor"/>

    <label>Publicado em</label>
    <input type="text" name="publicado_em"/>

    <label>Título</label>
    <input type="text" name="titulo"/>
    <button type="submit">Salvar</button>
</form>