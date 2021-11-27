<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\LogisticaController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\ServicioController;
use App\Http\Controllers\Admin\VentaController;
use App\Http\Controllers\Admin\VentaIndexController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\ProveedoresController;
use App\Http\Controllers\Admin\Cliente_productos;
use App\Http\Controllers\Admin\EvaluacionesController;
use App\Http\Controllers\Admin\OrdenesTrabajoController;
use App\Http\Controllers\Admin\occClientes;
use App\Http\Controllers\Admin\Estado_entregaController;
use App\Http\Controllers\Admin\Forma_pagoController;
use App\Http\Controllers\Admin\Tipo_monedaController;
use App\Http\Controllers\Admin\Tiempo_entregaController;
use App\Http\Controllers\Admin\Tiempo_expiracionController;
use App\Http\Controllers\Admin\Estado_provee_clientesController;
use App\Http\Controllers\Admin\Lista_ProductosController;
use App\Http\Controllers\Admin\CondicionesController;
use App\Http\Controllers\Admin\Pie_PaginaController;
use App\Http\Controllers\Admin\Area_ContactoController;
use App\Http\Controllers\Admin\OccProveedoresController;
use App\Http\Controllers\Admin\Proveedores_productos;
use App\Http\Controllers\Admin\ComprasAlmacenController;
use App\Http\Controllers\Admin\IngresosAlmacenController;
use App\Http\Controllers\Admin\RegistroAlmacenController;
use App\Http\Controllers\Admin\ModeloProductosController;
use App\Http\Controllers\Admin\FabricanteController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\LoteController;
use App\Http\Controllers\Admin\AlmacenController;
use App\Http\Controllers\Admin\UnidadesMedidaController;
use App\Http\Controllers\Admin\OrdenesTrabajoListadoController;
use App\Http\Controllers\Admin\OccClientesListadoController;
use App\Http\Controllers\Admin\OccProveedoresControllerListado;
use App\Http\Controllers\Admin\SalidaController;
use App\Http\Controllers\Admin\StockAlmacenController;
use App\Http\Controllers\Admin\RegistroGuiaController;
use App\Http\Controllers\Admin\PDFOPController;

// Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('admin.home');

Route::resource('pdf_op', UserController::class)->names('admin.pdf_op');

Route::resource('users', UserController::class)->middleware('can:Ver listado de usuarios')->names('admin.users');

Route::resource('roles', RoleController::class)->middleware('can:Ver listado de roles')->names('admin.roles');

Route::resource('logistica', LogisticaController::class)->middleware('can:Ver Logistica')->names('admin.logistica');

Route::resource('productos', ProductoController::class)->middleware('can:Ver listado de productos')->names('admin.productos');

Route::resource('servicios', ServicioController::class)->names('admin.servicios');

Route::resource('ventas', VentaController::class)->names('admin.ventas');

Route::resource('ventas-index', VentaIndexController::class)->names('admin.ventas-index');

Route::resource('clientes', ClienteController::class)->middleware('can:Ver listado de clientes')->names('admin.clientes');

Route::resource('proveedores', ProveedoresController::class)->middleware('can:Ver listado de proveedores')->names('admin.proveedores');

Route::resource('productos_cli', Cliente_productos::class)->names('admin.productos_cli');

Route::resource('productos_provee', Proveedores_productos::class)->names('admin.productos_provee');

Route::resource('evaluaciones', EvaluacionesController::class)->names('admin.evaluaciones');

Route::resource('ordenestrabajo', OrdenesTrabajoController::class)->names('admin.ordenestrabajo');

Route::resource('occClientes', OccClientes::class)->names('admin.occClientes');

Route::resource('estadoentrega', Estado_entregaController::class)->names('admin.estadoentrega');

Route::resource('formapago', Forma_pagoController::class)->names('admin.formapago');

Route::resource('tipomoneda', Tipo_monedaController::class)->names('admin.tipomoneda');

Route::resource('tiempoentrega', Tiempo_entregaController::class)->names('admin.tiempoentrega');

Route::resource('tiempoexpiracion', Tiempo_expiracionController::class)->names('admin.tiempoexpiracion');

Route::resource('estadocliente', Estado_provee_clientesController::class)->names('admin.estadocliente');

Route::resource('condiciones', CondicionesController::class)->names('admin.condiciones');

Route::resource('piedepagina', Pie_PaginaController::class)->names('admin.piedepagina');

Route::resource('areacontacto', Area_ContactoController::class)->names('admin.areacontacto');

Route::resource('listaproductos', Lista_ProductosController::class)->names('admin.listaproductos');

Route::resource('occProveedores', OccProveedoresController::class)->names('admin.occProveedores');

Route::resource('ordenestrabajoListado', OrdenesTrabajoListadoController::class)->names('admin.ordenestrabajoListado');
Route::resource('occClientesListado', OccClientesListadoController::class)->names('admin.occClientesListado');
Route::resource('occProveedoresListado', OccProveedoresControllerListado::class)->names('admin.occProveedoresListado');

Route::resource('comprasAlmacen', ComprasAlmacenController::class)->names('admin.comprasAlmacen');

Route::resource('ingresosAlmacen', IngresosAlmacenController::class)->names('admin.ingresosAlmacen');

Route::resource('registroAlmacen', RegistroAlmacenController::class)->names('admin.registroAlmacen');

Route::resource('stockAlmacen', StockAlmacenController::class)->names('admin.stockAlmacen');

Route::resource('modeloProducto', ModeloProductosController::class)->names('admin.modeloProducto');

Route::resource('rutaFabricante', FabricanteController::class)->names('admin.rutaFabricante');

Route::resource('rutaCategoria', CategoriaController::class)->names('admin.rutaCategoria');

Route::resource('rutaLote', LoteController::class)->names('admin.rutaLote');

Route::resource('rutaAlmacen', AlmacenController::class)->names('admin.rutaAlmacen');

Route::resource('rutaUnidadesMedida', UnidadesMedidaController::class)->names('admin.rutaUnidadesMedida');

Route::resource('rutaSalidas', SalidaController::class)->names('admin.rutaSalidas');

Route::resource('rutaStock', StockAlmacenController::class)->names('admin.rutaStock');

Route::resource('rutaGuia', RegistroGuiaController::class)->names('admin.rutaGuia');

