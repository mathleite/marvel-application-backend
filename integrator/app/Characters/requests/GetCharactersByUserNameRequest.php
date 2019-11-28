<?php


namespace App\Characters\requests;


use Illuminate\Foundation\Http\FormRequest;

class GetCharactersByUserNameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'user_name' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
          'user_name.required' => 'The User Name is required!',
        ];
    }
}
