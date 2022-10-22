<?php

namespace App\Http\Requests\Event;

use App\Models\MasterData\Event;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreEventRequest extends FormRequest
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
            'request_event_id' => [
                'required', 'integer', 
            ],
            'user_id' => [
                'required', 'integer',
            ],
            'name' => [
                'required', 'string', 'max:255','unique:event',
            ],
            'poster' => [
                'nullable', 'mimes:jpeg,svg,png', 'max:10000',
            ]
        ];
    }
}
