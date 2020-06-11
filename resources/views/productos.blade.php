<div>
    <h2>Lista de productos</h2>
    @foreach ($productosLista as $productos)
    {{$productos->id }}  {{$productos->Nombre }} {{$productos->precioP}}  <br/>
        @endforeach
</div>
