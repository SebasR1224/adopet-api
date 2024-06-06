<?php

namespace App\Http\Requests;

use App\Constants\Messages\Errors;
use App\Helpers\ValidationHelper;
use App\Http\Response\Response;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class AnimalReportRequest extends FormRequest
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
            'title' => ValidationHelper::TITLE_VALIDATION,
            'description' => ValidationHelper::TEXT_VALIDATION,
            'image' => ValidationHelper::IMAGE_VALIDATION,
            'abandonment_location' => 'required|string|min:10|max:255',
            'abandonment_status' => ValidationHelper::STATUS_VALIDATION,
            'abandonment_date' => ValidationHelper::getDateTimeValidation(false),
            'rescue_date' => ValidationHelper::getDateTimeValidation(false),
            'rescue_observations' => ValidationHelper::getTextValidation(false),
            'animals' => 'required|array',
            'animals.*.name' => ValidationHelper::getNameValidation(false),
            'animals.*.image' => ValidationHelper::IMAGE_VALIDATION,
            'animals.*.description' => ValidationHelper::TEXT_VALIDATION,
            'animals.*.age' => 'nullable|integer|between:1,30',
            'animals.*.coat_color' => ValidationHelper::getWordValidation(false),
            'animals.*.especie' => ValidationHelper::WORD_VALIDATION,
            'animals.*.race' => ValidationHelper::getWordValidation(false),
            'animals.*.weight' => 'nullable|numeric|between:0,1000',
            'animals.*.gender' => 'required|in:MALE,FEMALE',
            'reporting_user' => 'required|array',
            'reporting_user.name' => ValidationHelper::getNameValidation(true, 50),
            'reporting_user.surname' => ValidationHelper::getNameValidation(true, 50),
            'reporting_user.email' => ValidationHelper::EMAIL_VALIDATION,
            'reporting_user.phone' => ValidationHelper::PHONE_VALIDATION
        ];
    }

    public function failedValidation(Validator $validator)
    {
        Response::errorException(Errors::VALIDATION_ERROR, $validator->errors());
    }
}
