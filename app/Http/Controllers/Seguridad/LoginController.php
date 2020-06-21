<?php

namespace App\Http\Controllers\Seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');//Negara el aceeso excepto que sea logout
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');//Metodo para redigir a la vista donde esta el formulario para ingresar al sistema
    }

    protected function authenticated(Request $request, $user){ // Reemplaza(una forma de decir) al metodo del padre que viene de use AuthenticatesUsers;
        $roles = $user->roles()->where('estado', 1)->get();//Llama al metodo roles() que proviene de la clase Usuario donde hacen una relacion mucho a muchos
        if($roles->isNotEmpty()){//Despues de realizada la consulta con la relacion si son de estado 1(activo) pregunta si no esta vacio
            $user->setSession($roles->toArray());//Llama al metodo setSession del clase Usuario que manda como parametro un array con los datos obtenidos
        }else{
            $this->guard()->logout();//En caso sea negativa es decir el usuario que se logeo es 0 (inactivo) elimina la sesion
            $request->session()->invalidate();//Rompe e invalida la sesion que se hizo
            return redirect('auth/login')->withErrors(['error' => 'Este usuario no tiene un rol Activo']);//y redirige a la pantalla de login con un mensaje 
        }
    }

    public function username(){//Reemplaza(una forma de decir) al metodo del padre que viene de  use AuthenticatesUsers;
        return 'usuario';//Ya que por default viene con un email, estamos usando el login nativo de laravel y queremos cambiar por usuario
    }
}
