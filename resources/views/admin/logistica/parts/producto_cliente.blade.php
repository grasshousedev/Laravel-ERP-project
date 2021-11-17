<div class="productos">
    <table class="table table-sm bg-dark" id="table_t">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Observaciones</th>
            </tr>
        </thead>
        <tbody id="table_data">

            @foreach ($producto as $item)
            <tr>
                <th scope="row">
                    {{ $item->producto }}
                </th>
                <th scope="row">
                    {{ $item->cantidad_prod }}
                </th>
                <th scope="row">
                    {{ $item->notas }}
                </th>
            </tr>            
            @endforeach
        
        </tbody>
    </table>
</div>