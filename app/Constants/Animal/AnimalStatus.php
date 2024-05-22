<?php

namespace App\Constants\Animal;

final class AnimalStatus
{
    public const CODE_ABANDONED = 'ABANDONED';
    public const CODE_DEAD = 'DEAD';
    public const CODE_RESCUED = 'RESCUED';
    public const CODE_IN_MEDICAL_PROCEDURE = 'IN_MEDICAL_PROCEDURE';
    public const CODE_READY_FOR_ADOPTION = 'READY_FOR_ADOPTION';
    public const CODE_ADOPTED = 'ADOPTED';

    private const STATUS_TEXTS = [
        self::CODE_ABANDONED => 'Abandoned',
        self::CODE_DEAD => 'Dead',
        self::CODE_RESCUED => 'Rescued',
        self::CODE_IN_MEDICAL_PROCEDURE => 'In Medical Procedure',
        self::CODE_READY_FOR_ADOPTION => 'Ready for Adoption',
        self::CODE_ADOPTED => 'Adopted',
    ];

    public static function getTextByCode(string $code): string
    {
        return self::STATUS_TEXTS[$code] ?? 'Unknown status';
    }
}
