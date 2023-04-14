<?php
  use App\Models\TypeTicket;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProfileController,
    TypeTicketController,
    PersonnalController,
    MedicamentController,
    TypeMedicamentController,
    VenteMedicamentController,
    DetailsController,
    VenteTicketController,
    ChargeController,
    RapportCaisseController,
    TicketController};

// >>>>>>> e72887a9479e501bd9961c4cf1905b768cab3f04

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/caisse', function () {
    $id=-1;
    $all_acte=TypeTicket::all();
    // $connector = null;
    // $connector = new WindowsPrintConnector("Generic  Text Only");

    // /* Print a "Hello world" receipt" */
    // $printer = new Printer($connector);
    // $printer -> text("Hello World!\n");
    // $printer -> cut();
    return view('caisse.index',[
        'all_acte'=>$all_acte,
        'id'=>$id       
    ]);
})->middleware(['auth', 'verified'])->name('caisse');
Route::get('/pharmacie', function () {
    return view('pharmacie.index');
})->middleware(['auth', 'verified'])->name('pharmacie');


#caissiere Route
Route::middleware(['caisse']    )->group(function () {
    Route::resource('acte', TypeTicketController::class);
    Route::resource('ticket', TicketController::class);
    Route::resource('Vente', VenteTicketController::class);
    Route::resource('charges',ChargeController::class);
    Route::resource('Details',DetailsController::class);
    Route::resource('rapport', RapportCaisseController::class);
});
#pharmacie route

Route::middleware(['pharmacie'])->group(function(){
    Route::resource('categorie',TypeMedicamentController::class);
    Route::resource('medicament',MedicamentController::class);
    Route::resource('vente',VenteMedicamentController::class);
    
    });
#registration and login

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('personnals', PersonnalController::class);


require __DIR__.'/auth.php';
?>