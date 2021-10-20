<a class="btn btn-primary" href="#" role="button" onclick="add_row()">Agregar Producto</a>

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
            <th scope="row"><input type="number" id="precio_venta"></th>
            <th scope="row"><input type="number" id="total"></th>
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
            <th scope="row">3333</th>
        </tr>
    </tbody>
</table>

<script>
    function add_row() {
        const item = document.getElementById("item");
        const cant = document.getElementById("cantidad");
        const pventa = document.getElementById("precio_venta");
        const total = document.getElementById("total");
        const pneto = document.getElementById("precio_neto");

        console.log(item);

        const table = document.getElementsByTagName("table")[0];
        const new_row = table.insertRow(1);
        new_row.insertCell(0).innerHTML = item.value;
        new_row.insertCell(1).innerHTML = cant.value;
        new_row.insertCell(2).innerHTML = pventa.value;
        new_row.insertCell(3).innerHTML = total.value;
        new_row.insertCell(4).innerHTML = pneto.value;
    }

    function igv() {
        const table = document.getElementsByTagName("table")[0];

        const column_length = table.rows.length;
        return column_length;
    }
</script>