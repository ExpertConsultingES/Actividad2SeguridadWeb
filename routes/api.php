use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/private-data', function (Request $request) {
    return response()->json(['message' => 'Bienvenido a la API protegida', 'user' => $request->user()]);
});
Route::post('/token', function (Request $request) {
    $user = \App\Models\User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Credenciales inválidas'], 401);
    }

    return ['token' => $user->createToken('auth_token')->plainTextToken];
});
