<?php 

namespace Semed\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Semed\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller {
   
     public function __invoke(Request $request)
     {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        $user = User::where('USU_EMAIL_PRINCIPAL', $request->email)->first();
    
        if (!$user || !Hash::check($request->password, $user->USU_PASSWORD)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
        
        $token = $user->createToken("token")->plainTextToken;             
    
        $user->update([
            'USU_TOKEN' => $token
        ]);
         
        response()->json(["token"=>$token],200);
    
     }
     
}