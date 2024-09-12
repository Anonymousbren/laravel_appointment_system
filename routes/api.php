use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;

Route::post('/Signup', [AuthController::class, 'Signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/appointments', [AppointmentController::class, 'index']);
    Route::post('/appointments', [AppointmentController::class, 'store']);
    Route::put('/appointments/{id}', [AppointmentController::class, 'update']);
    Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy']);
});










use App\Http\Controllers\AppointmentController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'index']);
    Route::post('/appointments', [AppointmentController::class, 'store']);
    Route::put('/appointments/{id}', [AppointmentController::class, 'update']);
    Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy']);


    use Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful;

    Route::middleware([EnsureFrontendRequestsAreStateful::class, 'auth:sanctum'])->group(function () {
    // Your protected routes


});
