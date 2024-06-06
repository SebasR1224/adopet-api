<?php

namespace App\Helpers;

class ValidationHelper
{
    public const REGEX_ONLY_WORDS = '/^[a-zA-Z\s]+$/';

    public const TITLE_VALIDATION = [
        'required',
        'string',
        'min:5',
        'max:100'
    ];

    public const TEXT_VALIDATION = [
        'required',
        'string',
        'min:10',
        'max:1000'
    ];

    public const IMAGE_VALIDATION = [
        'required',
        'url',
        'regex:/\.(jpeg|jpg|png|gif)(\?.*)?$/i'
    ];

    public const STATUS_VALIDATION = [
        'required',
        'string',
        'min:5',
        'max:100',
        'regex:/^[A-Z_-]+$/u'
    ];

    public const DATETIME_VALIDATION = [
        'required',
        'date_format:Y-m-d H:i:s'
    ];

    public const NAME_VALIDATION = [
        'required',
        'string',
        'max:100',
        'regex:' . self::REGEX_ONLY_WORDS
    ];

    public const WORD_VALIDATION = [
        'required',
        'string',
        'max:100',
        'regex:' . self::REGEX_ONLY_WORDS
    ];

    public const EMAIL_VALIDATION = [
        'required',
        'email',
        'max:100'
    ];

    public const PHONE_VALIDATION = [
        'required',
        'string',
        'max:20'
    ];

    public static function getTextValidation(bool $isRequired = true): array
    {
        $validationRules = self::TEXT_VALIDATION;
        if (!$isRequired) $validationRules[0] = 'nullable';
        return $validationRules;
    }

    public static function getDateTimeValidation(bool $isRequired = true): array
    {
        $validationRules = self::DATETIME_VALIDATION;
        if (!$isRequired) $validationRules[0] = 'nullable';
        return $validationRules;
    }

    public static function getNameValidation(bool $isRequired = true, int $max = 100): array
    {
        $validationRules = self::NAME_VALIDATION;
        if (!$isRequired) $validationRules[0] = 'nullable';
        $validationRules[2] = "max:$max";
        return $validationRules;
    }

    public static function getWordValidation(bool $isRequired = true): array
    {
        $validationRules = self::WORD_VALIDATION;
        if (!$isRequired) $validationRules[0] = 'nullable';
        return $validationRules;
    }
}
