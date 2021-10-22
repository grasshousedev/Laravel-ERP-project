<a class="btn btn-primary" href="#" role="button" onclick="todos()">Agregar Producto</a>

<table class="table table-sm table-dark" id="table_t">
    <thead>
        <tr>
            <th scope="col">Item</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Total</th>
            <th scope="col">Precio Neto</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row"><input type="text" id="item"></th>
            <th scope="row"><input type="number" id="cantidad"></th>
            <th scope="row"><input type="number" id="precio_venta" value="res"></th>
            <th scope="row"><input type="number" id=""><label id="total"></label></th>
            <th scope="row"><input type="number" id="precio_neto"></th>
        </tr>

        <tr>
            <th scope="col">Sub Total</th>
            <th scope="row">123</th>
        </tr>
        <tr>
            <th scope="col">IGV</th>
            <th scope="row">12</th>
        </tr>
        <tr>
            <th scope="col">TOTAL</th>
            <label id="total"></label>
        </tr>
    </tbody>
</table>

