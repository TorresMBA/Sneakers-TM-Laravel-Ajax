<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionRol extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required | max:50 | unique:rol,nom_rol,'.$this->route('id')// uniquese porque en la tabla menu solo debe haber un solo ron rol con ese nombre
                                                                                    // pasamos el this->route(id) para que me diferencie cuando este editando osea que 
                                                                                    // permita editar el 
                                                                                    // rol sin ningun problema, que verique si el rol que estoy cambiando de nombre no lo tiene otro id diferente a lo que estoy editando
        ];
    }
}
