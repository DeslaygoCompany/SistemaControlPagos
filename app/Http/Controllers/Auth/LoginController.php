<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
     public function showLoginForm(){
         return view('login');
     }
    
    public function login(LoginRequest $request){
        
        $credentials = $request->validated();
        
        if(Auth::attempt($credentials)){
            $rol=Auth::user()->rol;
            if($rol == "Administrador"){
                return redirect('/pagos');
            }
            elseif($rol == "Deudor"){
                
                return redirect('/informacion');
            }
        }else{
            alert()->error('¡Hubo un problema','El usuario no se encontro en la base de datos')->persistent('OK');
            return back();
        }
    }
    
    //método que cierra la sesión del usuario y redirige a la página de login
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    //cambiar el parametro que va a recibir ya que trae el email como default
    public function username()
     {
        return 'username';
     }
}
