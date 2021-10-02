<?php

namespace App\Http\Requests\Provider;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:255',
            //Comprobar que el email sea diferente en todos los registros menos en este
            'email'=>'required|email|string|unique:providers,email'.
            $this->route('provider')->id.'|max:255',

            //Comprobar que el rfc sea diferente en todos los registros menos en este
            'rfc'=>'required|string|min:11|unique:providers,rfc'.
            $this->route('provider')->id.'|max:11',

            'address'=>'nullable|string|max:255',

            //Comprobar que el teléfono sea diferente en todos los registros menos en este
            'phone'=>'required|string|min:9|unique:providers,phone'.
            $this->route('provider')->id.'|max:9',
        ];
    }

    public function messages(){
        return[
            'name.requiered'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permiten 255 caracteres',

            'email.requiered'=>'Este campo es requerido.',
            'email.email'=>'No es un correo electrónico',
            'email.string'=>'El valor no es correcto',
            'email.max'=>'Solo se permiten 255 caracteres.',
            'email.unique'=>'El valor no es correcto',

            'rfc.requiered'=>'Este campo es requerido.',
            'rfc.email'=>'El valor no es correcto',
            'rfc.string'=>'Solo se permiten 11 caracteres',
            'rfc.max'=>'Se requiere de 11 caracteres.',
            'rfc.unique'=>'Ya se encuentra registrado',

            'address.string'=>'El valor no es correcto',
            'address.max'=>'Solo se permiten 255 caracteres.',

            'name.requiered'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permiten 9 caracteres',
            'name.min'=>'Se requiere de 9 caracteres',
            'name.string'=>'Ya se encuentra registrado',
        ];
    }
}