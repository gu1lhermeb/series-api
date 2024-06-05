<?php

namespace App\Http\Requests\Serie;

use Illuminate\Foundation\Http\FormRequest;

class PutUpdateSerieRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'quantity_of_seasons' => ['required'],
            'qty_episodes_per_season' => ['required']
        ];
    }
}
