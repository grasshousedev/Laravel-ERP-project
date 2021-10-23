<table class="table table-sm bg-dark" id="table_t">
    <thead>
        <tr>
            <th scope="col">Item</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Total</th>
            <th scope="col" colspan="2">Precio Neto</th>
        </tr>
    </thead>
    <tbody id="table_data">
        <tr>
            <th scope="row"><input class="bg-dark text-white border-0" type="text" id="item"></th>
            <th scope="row"><input class="bg-dark text-white border-0" type="number" id="cantidad"></th>
            <th scope="row"><input class="bg-dark text-white border-0" type="number" id="precio_venta"></th>
            <th scope="row"><input class="bg-dark text-white border-0" type="number" id="total"></th>
            <th scope="row">
                <input class="bg-dark text-white border-0" type="number" id="precio_neto">
                <a class="btn btn-primary" href="#" role="button" onclick="add_row()">Item <i class="far fa-plus-square"></i> </a>
            </th>
        </tr>
    </tbody>
</table>

<div class="d-flex flex-row bg-dark text-white">
    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    <div class="p-2">
        <label for="sub_total">Sub Total</label>
        <input class="bg-dark text-white border-0" type="text" id="sub_total" readonly>
    </div>
    <div class="p-2">
        <label for="igv">IGV</label>
        <input class="bg-dark text-white border-0" type="text" id="igv" readonly>
    </div>
    <div class="p-2">
        <label for="neto">Total</label>
        <input class="bg-dark text-white border-0" type="text" id="neto" readonly>
    </div>
</div>


<script>
    function add_row() {
        const item = document.getElementById("item");
        const cant = document.getElementById("cantidad");
        const pventa = document.getElementById("precio_venta");
        const total = document.getElementById("total");
        const pneto = document.getElementById("precio_neto");

        if (item.value != "") {
            const table = document.getElementsByTagName("table")[0];
            const new_row = table.insertRow(table.rows.length); // AL FINAL
            // const new_row = table.insertRow(1);  // AL INICIO 
            new_row.insertCell(0).innerHTML = item.value;
            new_row.insertCell(1).innerHTML = cant.value;
            new_row.insertCell(2).innerHTML = pventa.value;
            new_row.insertCell(3).innerHTML = total.value;
            new_row.insertCell(4).innerHTML = pneto.value;

            // TOTALES
            let sub_total = parseFloat(total.value);
            let igv = calc_igv(total.value, 10);
            let neto = sub_total - igv;

            if (document.getElementById("sub_total").value != "") {

                sub_total = parseFloat(document.getElementById("sub_total").value) + parseFloat(total.value);
                igv = parseFloat(document.getElementById("igv").value) + calc_igv(total.value, 10);
                neto = parseFloat(document.getElementById("neto").value) + (sub_total - igv);

            }

            document.getElementById("sub_total").value = sub_total;
            document.getElementById("igv").value = igv;
            document.getElementById("neto").value = neto;

            // RESET INPUTS
            item.value = "";
            cant.value = "";
            pventa.value = "";
            total.value = "";
            pneto.value = "";
        }
    }

    function calc_igv(total, porcentaje) {
        return total * porcentaje / 100
    }
</script>