@if(count($lista) == 0)
    <p>Não existe dados na lista</p>
@elseif(count($lista) == 1)
    <p>Visualize o registro na lista abaixo</p>
@else
    <p>Visualize os dados da lista abaixo</p>
@endif