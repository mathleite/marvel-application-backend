<?php


namespace App\Characters\requests;


use Illuminate\Foundation\Http\FormRequest;

class SaveCharactersRequest extends FormRequest
{
    private const REQUIRED_WITH_CHARACTERS_STRING_RULE = 'required|string';

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
            'characters'             => 'required|array',
            'characters.*.name'      => self::REQUIRED_WITH_CHARACTERS_STRING_RULE,
            'characters.*.image_src' => self::REQUIRED_WITH_CHARACTERS_STRING_RULE,
            'characters.*.user_name' => self::REQUIRED_WITH_CHARACTERS_STRING_RULE,
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public final function messages(): array
    {
        return [
            'characters.required'           => 'The Characters is required!',
            'characters.name.required'      => 'The Name is required!',
            'characters.image_src.required' => 'The Image Src is required!',
            'characters.user_name.required' => 'The User Name is required!',
        ];
    }
}
