<?php

namespace App\Http\Requests\Client;

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
            'name'=>'string|required|max:255', 
            'address'=>'string|required|max:255',
            'phone'=>'string|required|unique:clients,phone'.$this->route('client')->id.'|min:9|max:9', 
            'email'=>'string|required|unique:clients,email,'.$this->route('client')->id.'|max:255|email:rfc,dns', 
        ];
    }

    public function messages(){
        return[
            'name.requiered'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto',
            'name.max'=>'Solo se permiten 255 caracteres',

            'address.string'=>'El valor no es correcto',
            'address.max'=>'Solo se permiten 255 caracteres',

            'phone.string'=>'El valor no es correcto',
            'phone.unique'=>'El número de teléfono ya se encuentra registrado',
            'phone.min'=>'Se requiere de 9 caracteres',
            'phone.max'=>'Solo se permiten 9 caracteres',

            'email.string'=>'El valor no es correcto',
            'email.unique'=>'Este correo ya se encuentra registrado',
            'email.max'=>'Solo se permiten 255 caracteres',
            'email.email'=>'No es un correo electrónico',
        ];
    }
}
