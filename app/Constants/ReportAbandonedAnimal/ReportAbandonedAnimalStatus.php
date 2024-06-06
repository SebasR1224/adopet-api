<?php

namespace App\Constants\ReportAbandonedAnimal;

final class ReportAbandonedAnimalStatus
{
    public const CODE_INITIAL_REPORT = 'INITIAL_REPORT';
    public const CODE_CASE_ANALYSIS = 'CASE_ANALYSIS';
    public const CODE_REJECT_REPORT = 'REJECT_REPORT';
    public const CODE_TO_THE_RESCUE = 'TO_THE_RESCUE';
    public const CODE_CASE_ATTENDED = 'CASE_ATTENDED';

    private const STATUS_TEXTS = [
        self::CODE_INITIAL_REPORT => 'Initial Report',
        self::CODE_CASE_ANALYSIS => 'Case Analysis',
        self::CODE_REJECT_REPORT => 'Reject Report',
        self::CODE_TO_THE_RESCUE => 'To the Rescue',
        self::CODE_CASE_ATTENDED => 'Case Attended',
    ];

    public static function getTextByCode(string $code): string
    {
        return self::STATUS_TEXTS[$code] ?? 'Unknown status';
    }
}

final class AbandonmentStatus {
    public const VERY_CRITICAL = "VERY_CRITICAL";
    public const CRITICAL = "CRITICAL";
    public const MILD = "MILD";

    private const STATUS_TEXTS = [
        self::VERY_CRITICAL => 'Very Critical',
        self::CRITICAL => 'Critical',
        self::MILD => 'Mild',

    ];

    public static function getTextByCode(string $code): string
    {
        return self::STATUS_TEXTS[$code] ?? 'Unknown status';
    }

}
