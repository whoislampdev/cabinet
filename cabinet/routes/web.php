<?php
  use App\Models\{TypeTicket,Ticket,TypeMedicament,Medicament, Personnals,VenteMedicament,};
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
    TicketController,
    AdminCaisseController,
    AdminJsController,
    adminDetailsController,
    RapportPersoController};

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
    $count_ticket=Ticket::all()->count();
    $count_personnals=Personnals::all()->count();
    $count_medocs=Medicament::all()->count();
    $count_typemedocs=TypeMedicament::all()->count();
    
    return view('admin.index',[
        'count_ticket'=>$count_ticket,
        'count_medocs'=>$count_medocs,
        'count_typemedocs'=>$count_typemedocs,
        'count_personnals'=>$count_personnals
    ]);

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
    $count_medoc=Medicament::all()->count();
    $count_Tymedocs=TypeMedicament::all()->count();
    $count_Ventmedocs=VenteMedicament::all()->count();
    return view('pharmacie.index',[
        'count_medoc'=>$count_medoc,
        'count_Tymedocs'=>$count_Tymedocs,
        'count_Ventmedocs'=>$count_Ventmedocs,
    ]);
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
    $count_ticket=Ticket::all()->count();
    $count_personnals=Personnals::all()->count();
    $count_medocs=Medicament::all()->count();
    $count_typemedocs=TypeMedicament::all()->count();
    Route::post('ventemed',[VenteMedicamentController::class,'vente']);
    return view('admin.index',[
        'count_ticket'=>$count_ticket,
        'count_medocs'=>$count_medocs,
        'count_typemedocs'=>$count_typemedocs,
        'count_personnals'=>$count_personnals
    ]);
    
    });
    Route::middleware(['admin'])->group( function ()
    {
        // Route::resource('admincaisse', AdminCaisseController::class);
        Route::post('admincaisse',[AdminJsController::class,'data_by_mois']);
        Route::get('admincaisse',[AdminJsController::class,'index']);
        Route::get('admincaisse-rapport',[adminDetailsController::class,'index']);
        Route::post('admincaisse-rapport',[adminDetailsController::class,'data_by_mois']);
        route::get('admin-user',[RapportPersoController::class,'index']);
        route::Post('admin-user',[RapportPersoController::class,'data_by_mois']);
        Route::resource('personnals', PersonnalController::class);
    });
 
#registration and login

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
?>