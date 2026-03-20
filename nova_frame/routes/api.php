<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\UsuarioPerfilController;

use App\Http\Controllers\CiaController;
use Carbon\Carbon;

use Illuminate\Support\Facades\Hash;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::middleware('auth:sanctum')->group(function () {
    ///////////////////////////////////////////////////////
    // USER INFO
    ///////////////////////////////////////////////////////
    Route::get('/me', [UsuarioController::class, 'me']);

    ///////////////////////////////////////////////////////
    // USER Change Password
    ///////////////////////////////////////////////////////
    Route::post('usuarios/{id}/change-password', function (Request $request, $id) {
        $request->validate([
            'current_password' => 'required|string|max:255',
            'new_password' => 'required|string|max:255|confirmed',
            'nombre' => 'required|string|max:255'
        ]);

        $user = Auth::user();

        if ($user->id != $id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        if (!Hash::check($request->current_password, Auth::user()->getAuthPassword())) {
            return response()->json([
                'message' => 'La contraseña actual es incorrecta'
            ], 400);
        }

        $user->hash = Hash::make($request->new_password);
        $user->nombre = $request->nombre;
        $user->save();

        return response()->json(['message' => 'Password changed successfully']);
    });

    Route::apiResource('usuarios', UsuarioController::class);
});