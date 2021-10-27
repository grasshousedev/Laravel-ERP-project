{{-- <form action="" method="post"> --}}
    <table class="table table-sm bg-dark" id="table_t">
        {{-- @csrf --}}
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio Venta</th>
                <th scope="col" colspan="2">Total</th>
            </tr>
        </thead>
        <tbody id="table_data">
            <tr>
                <th scope="row">
                    <div class="input-field">
                        <input name="producto" class="bg-dark text-white" type="text" id="item">
                    </div>
                </th>
                <th scope="row"><input name="cantidad_prod" class="bg-dark text-white" type="number" id="cantidad"></th>
                <th scope="row"><input name="precio_prod" class="bg-dark text-white" type="number" id="precio_venta"></th>
                <th scope="row">
                    <input name="" class="bg-dark text-white border-0" type="number" id="total" readonly>
                    <a class="btn btn-primary" href="#" value="Agregar item" role="button" onclick="add_row()">Agregar item</a>
                </th>
            </tr>
        </tbody>
    </table>
{{-- </form> --}}

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
        <input name="" class="bg-dark text-white border-0" type="text" id="sub_total" readonly>
    </div>
    <div class="p-2">
        <label for="igv">IGV</label>
        <input name="" class="bg-dark text-white border-0" type="text" id="igv" readonly>
    </div>
    <div class="p-2">
        <label for="neto">Total</label>
        <input name="" class="bg-dark text-white border-0" type="text" id="neto" readonly>
    </div>
</div>

<script>
    function add_row() {
        const item = document.getElementById("item");
        const cant = document.getElementById("cantidad");
        const pventa = document.getElementById("precio_venta");
        const total = parseFloat(document.getElementById("cantidad").value) * parseFloat(document.getElementById("precio_venta").value);

        if (item.value != "") {
            const table = document.getElementsByTagName("table")[0];
            const new_row = table.insertRow(table.rows.length); // AL FINAL
            // const new_row = table.insertRow(1);  // AL INICIO 

            // añadiendo celdas
            // new_row.insertCell(0).innerHTML = item.value;
            // new_row.insertCell(1).innerHTML = cant.value;
            // new_row.insertCell(2).innerHTML = pventa.value;
            // new_row.insertCell(3).innerHTML = total;

            var nueva_linea = "<tr><td><input readonly class='bg-dark text-white border-0' type='text' name='producto' value='" + item.value + "'></td><td><input readonly class='bg-dark text-white border-0' type='number' name='cantidad_prod' value='" + cant.value + "'></td><td><input readonly class='bg-dark text-white border-0' type='number' name='precio_prod' value='" + pventa.value + "'></td><td><input readonly class='bg-dark text-white border-0' type='number' name='total_prod' value='" + total + "'></td></tr>";

            $("table tbody").append(nueva_linea);

            // TOTALES
            let sub_total = total;
            let igv = 0;
            let neto = 0;

            if (document.getElementById("sub_total").value != "") {

                sub_total = parseFloat(document.getElementById("sub_total").value) + sub_total;
                neto = parseFloat(document.getElementById("neto").value) + (sub_total + igv);

            }

            igv = calc_igv(sub_total, 18);
            neto = sub_total + igv;

            document.getElementById("sub_total").value = sub_total;
            document.getElementById("igv").value = igv;
            document.getElementById("neto").value = neto;

            // RESET INPUTS
            item.value = "";
            cant.value = "";
            pventa.value = "";

        } else {
            alert("INGRESE NOMBRE DEL ITEM");
        }
    }

    function calc_igv(total, porcentaje) {
        return total * porcentaje / 100
    }
</script>