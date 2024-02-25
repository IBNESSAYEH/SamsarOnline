<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use App\Models\Role;
use App\Models\User;
use App\Utils\AuthValidationInputs;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\NewAccessToken;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{

    public function register(Request $request){
        // create an instance from AuthValidationInputs
        $roleModel = new Role();
$validationErrors = new AuthValidationInputs($roleModel);
        // check if there are any validation errors 
        $validationErrorsObject = $validationErrors->register(
                                                    $request->first_name,
                                                    $request->last_name,
                                                    $request->phone,
                                                    $request->email,
                                                    $request->password);


        if($validationErrorsObject !== true){
                return response()->json(["errors" => $validationErrorsObject], 422) ;
            }

// try to create the user
            try {

                $user = User::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'role_id'=>2,
            ]);

            return response()->json(["message" => "created succefuly"]) ;
            }catch (\Exception $e) {
                // server exception
                return response()->json(["error" => "Failed to create user: " . $e->getMessage()], 500);
            }

    }
    public function login(Request $request)
    {
        try {
            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }



            return response()->json(['token' => $user->createToken('token')->plainTextToken]) ;

            // return response()->json(['api_token' => $user->createToken('api_token')->plainTextToken()]);
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->getMessage()], Response::HTTP_UNAUTHORIZED);
        }
    }
}
