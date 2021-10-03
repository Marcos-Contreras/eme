<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'string|required|unique:products|max:255',
            'image'=>'required|dimensions:min_width=100,height=200|string|max:255',
            'sell_price'=>'required|',
            'category_id'=>'integer|required|exists:App\Category,id',
            'provider_id'=>'integer|required|exists:App\Provider,id'
        ];
    }

    public function messages(){
        return[
            'name.string'=>'El valor es incorrecto.',
            'name.requiered'=>'Este campo es requerido.',
            'name.unique'=>'El producto ya está registrado',
            'name.max'=>'Solo se permiten 255 caracteres',

            'image.requiered'=>'Este campo es requerido',
            'image.dimensions'=>'Solo se permiten imagenes de 100x200px',

            'sell_price.required'=>'Este campo es requerido',

            'category_id.integer'=>'El valor tiene que ser entero',
            'category_id.requiered'=>'Este campo es requerido.',
            'category_id.exists'=>'La categoría no existe',

            'provider_id.integer'=>'El valor tiene que ser entero',
            'provider_id.requiered'=>'Este campo es requerido.',
            'provider_id.exists'=>'El proveedor no existe',

        ];
    }
}