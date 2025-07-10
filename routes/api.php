use App\Http\Controllers\ServiceOrderController;

Route::post('/service-orders', [ServiceOrderController::class, 'store']);
Route::get('/service-orders', [ServiceOrderController::class, 'index']);