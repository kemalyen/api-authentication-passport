<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Http\Requests\CreateUserRequest;


class ApiAuthController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request)
    {
        $credentials = $request->only('email', 'password');


        try {
            // attempt to verify the credentials and create a token for the user
            if (!Auth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (Exception $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        $user = User::where('email', $credentials['email'])->first();
        $token = $user->createToken('Token Name')->accessToken;

        return response()->json(compact('token'));
    }

    public function create(CreateUserRequest $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        $user = User::create(['name' => $data['name'], 'email' => bcrypt($data['password']), 'password' => $data['password'] ]);
        return response()->json(compact('token'));
    }
}
