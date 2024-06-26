<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/',         [App\Http\Controllers\MainController::class, 'index'    ])->name('index');
Route::get('/home',     [App\Http\Controllers\MainController::class, 'index2'   ])->name('home');

// Productos
Route::get('/Categoria/{superCategory}',                                            [App\Http\Controllers\MainController::class, 'getProductos1'    ]);
Route::get('/Categoria/{superCategory}/{category}',                                 [App\Http\Controllers\MainController::class, 'getProductos2'    ]);
Route::get('/Categoria/{superCategory}/{category}/{subCategory}',                   [App\Http\Controllers\MainController::class, 'getProductos3'    ]);
Route::get('/Categoria/{superCategory}/{category}/{subCategory}/{other}',           [App\Http\Controllers\MainController::class, 'getProductos4'    ]);
Route::get('/Product/{sku}',                                                        [App\Http\Controllers\MainController::class, 'getProduct'       ]);
Route::get('/Categoria/{superCategory}/{category}/{subCategory}/{other}/{name}',    [App\Http\Controllers\MainController::class, 'getProductOther'  ]);
Route::get('/Search',                                                               [App\Http\Controllers\MainController::class, 'search'           ])->name('search');
Route::get('/Search/{search}',                                                      [App\Http\Controllers\MainController::class, 'search2'          ]);

// Carrito
Route::get('/addCarrito',               [App\Http\Controllers\CarritoController::class, 'addCarrito'        ])->name('carrito.add');
Route::get('/deleteCarrito',            [App\Http\Controllers\CarritoController::class, 'removeCarrito'     ])->name('carrito.delete');
Route::any('/addDireccion',             [App\Http\Controllers\CarritoController::class, 'addDireccion'      ])->name('direccion.add');
Route::any('/updteDireccion',           [App\Http\Controllers\CarritoController::class, 'cmbr_dir'          ])->name('direccion.updte');
Route::get('/Carrito',                  [App\Http\Controllers\CarritoController::class, 'getCarrito'        ])->name('carrito');
Route::get('/Stepper',                  [App\Http\Controllers\CarritoController::class, 'getCarritoStepper' ])->name('stepper');
Route::any('/CambiarTienda',            [App\Http\Controllers\CarritoController::class, 'cmbr_tienda'       ])->name('tienda.update');
Route::any('/crearUsr',                 [App\Http\Controllers\UsuarioController::class, 'crte_usr'          ])->name('usr.create');
Route::any('/logon',                    [App\Http\Controllers\CarritoController::class, 'login_usr'         ])->name('lgn.usr');
// Route::POST('/comuna', [App\Http\Controllers\CarrtioController::class, 'mantener_comuna'])->name('comuna');

// Transbank
Route::get('/initTransaction',              [App\Http\Controllers\MainController::class, 'getInitPago'          ])->name('checkout.init');
Route::get('/checkout',                     [App\Http\Controllers\TransbankController::class, 'initTransaction' ])->name('checkout');  
Route::post('/checkout/webpay/response',    [App\Http\Controllers\TransbankController::class, 'response'        ])->name('checkout.webpay.response');  
Route::post('/checkout/webpay/finish',      [App\Http\Controllers\TransbankController::class, 'finish'          ])->name('checkout.webpay.finish');

Route::get('/perfiles',             [App\Http\Controllers\UsuarioController::class, 'perfil'        ])->name('perfiles');
Route::post('/perfileditar',        [App\Http\Controllers\UsuarioController::class, 'update_perfil' ])->name('perfil.update');
Route::get('/Paguina-Mantencion',   [App\Http\Controllers\ApiController::class, 'Mantencion'        ])->name('Mantencion');


// Seguimiento
Route::get('/Seguimiento',  [App\Http\Controllers\MainController::class, 'getSeguimiento'   ])->name('seguimiento');
Route::POST('/orden',       [App\Http\Controllers\MainController::class, 'seguimiento'      ])->name('orden.seguimiento');


Route::get('/ej', function () {
    return view('welcome');
});
Route::get('/pro', function () {
    return view('Components.producto-card');
});
Route::get('/nav', function () {
    return view('Components.navBar');
});
Route::get('/fil', function () {
    return view('Components.filtros');
});
Route::get('/bread', function () {
    return view('Components.breadcrumbs');
});
Route::get('/producto', function () {
    return view('Vistas.producto');
});
Route::get('/carrito', function () {
    return view('Vistas.carrito');
});
Route::get('/carritov2', function () {
    return view('Vistas.carritov2');
});
Route::get('/step', function () {
    return view('Vistas.carritoStepper');
});
Route::get('/tests', function () {
    return view('prueba');
});
Route::get('/categoria', function () {
    return view('Vistas.categoria');
});

Route::get('/busqueda', function () {
    return view('Vistas.busqueda');
});
Route::get('/loMvendido', function () {
    return view('Components.loMvendido');
});
Route::get('/loMvisto', function () {
    return view('Components.loMvisto');
});
Route::get('/carousel', function () {
    return view('Components.carousel');
});
Route::get('/destacados', function () {
    return view('Components.destacados');
});

//ADMIN
Route::get('/adminPanel',           [App\Http\Controllers\AdminController::class, 'index'           ])->name('admin.index');
Route::get('/listaProductos',       [App\Http\Controllers\AdminController::class, 'listProduct'     ])->name('product.list');
Route::get('/editarSlider',         [App\Http\Controllers\AdminController::class, 'edit_slider'     ])->name('admin.slider');
Route::POST('/slider_editado',      [App\Http\Controllers\AdminController::class, 'upload_slider'   ])->name('slider.upload');
Route::get('/editarImagenes',       [App\Http\Controllers\AdminController::class, 'edit'            ])->name('edit.image');
Route::POST('/Imanes_editadas',     [App\Http\Controllers\AdminController::class, 'upload_images'   ])->name('image.edit');
Route::get('/agregarPrecio',        [App\Http\Controllers\AdminController::class, 'price'           ])->name('add.price');
Route::get('/editarPrecio',         [App\Http\Controllers\AdminController::class, 'price'           ])->name('edit.price');
Route::post('/precioAgregado',      [App\Http\Controllers\AdminController::class, 'upload_price'    ])->name('upload.price');
Route::get('/listarPrecios',        [App\Http\Controllers\AdminController::class, 'list_price'      ])->name('list.price');
Route::get('/listaUsuarios',        [App\Http\Controllers\AdminController::class, 'list_user'       ])->name('list.user');
Route::get('/crearUsuario',         [App\Http\Controllers\AdminController::class, 'user'            ])->name('create.user');
Route::get('/editarUsuario',        [App\Http\Controllers\AdminController::class, 'user'            ])->name('edit.user');
Route::Post('/usuarioCreado',       [App\Http\Controllers\AdminController::class, 'upload_user'     ])->name('upload.user');
Route::get('/eliminarUsuario',      [App\Http\Controllers\AdminController::class, 'delete_user'     ])->name('delete.user');
Route::get('/editarEstado',         [App\Http\Controllers\AdminController::class, 'edit_estado'     ])->name('edit.estado');
Route::POST('/estadoEditado',       [App\Http\Controllers\AdminController::class, 'update_estado'   ])->name('update.estado');
Route::get('/listaEstado',          [App\Http\Controllers\AdminController::class, 'list_estado'     ])->name('list.estado');
Route::get('/cuentaDepositar',      [App\Http\Controllers\AdminController::class, 'cuenta_depositar'])->name('cuenta.depositar');
Route::POST('/deposito',             [App\Http\Controllers\AdminController::class, 'editCuenta'])->name('add.deposito');