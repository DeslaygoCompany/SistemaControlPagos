<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


use App\User;

class UserController extends Controller
{
    //
    
    public function validarUser(){
        $username= Input::get('username');
        
        $consulta = User::where('username',$username)->first();
        
        return response()->json($consulta);
    }
	public function agregarUser(Request $request){
		$username = $request->input('username');
		$email = $request->input('email');
		$rol = $request->get('rol');
		$password= Hash::make($request->input('password'));
		
		try{
			$user= new User();
			$user->username = $username;
			$user->email=$email;
			$user->rol=$rol;
			$user->password=$password;
			$user->save();
			alert()->success('¡Operación exitosa!','El usuario se ha guardado correctamente.')->persistent('Cerrar');
            return back();
		 //return back()->with('success','El deudor se ha guardado correctamente.');
        }catch(QueryException $ex){
            dd($ex);
            DB::rollBack();
            alert()->error('¡Hubo un problema','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.')->persistent('Cerrar');
            return back();
            //return back()->with('status','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.');
        }
				
	}
	public function eliminar_user(Request $request){
		$id=$request->input('id');
		try{
			$user=User::where('id',$id)->first();
			$user->delete();
			alert()->success('¡Operación exitosa!','El usuario se ha eliminado correctamente.')->persistent('Cerrar');
            return back();
			
		}
		catch(QueryException $ex){
            alert()->error('¡Hubo un problema','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.')->persistent('Cerrar');
            return back();
            //return back()->with('status','Ocurrieron algunos problemas en el proceso, intentelo de nuevo.');
        }
	}
}

