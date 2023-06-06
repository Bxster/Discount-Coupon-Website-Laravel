<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

// Aggiunti per response JSON
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class NewAziendaRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nome' => 'required|string|max:25',
            'tipologia' => 'required|string|max:30|regex:/^[\p{L}\'\s\-\,]+$/u',
            'desc' => 'required|string|max:2500',
            'citta' => 'required|string|max:30|regex:/^[\p{L}\'\s]+$/u',
            'via' => 'required|string|max:30',
            'cap' => 'required|string|numeric|digits:5',
            'image' => 'file|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    /**
     * Override: response in formato JSON
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }

}
