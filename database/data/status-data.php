<?php

use App\Models\Animal;
use App\Models\Foundation;
use App\Models\ReportAbandonedAnimal;

return [
    [
        'type' => Animal::class,
        'code' => 'ABANDONED',
        'value' => 'Abandoned'
    ],
    [
        'type' => Animal::class,
        'code' => 'DEAD',
        'value' => 'Dead'
    ],
    [
        'type' => Animal::class,
        'code' => 'RESCUED',
        'value' => 'Rescued'
    ],
    [
        'type' => Animal::class,
        'code' => 'IN_MEDICAL_PROCEDURE',
        'value' => 'In Medical Procedure'
    ],
    [
        'type' => Animal::class,
        'code' => 'READY_FOR_ADOPTION',
        'value' => 'Ready For Adoption'
    ],
    [
        'type' => Animal::class,
        'code' => 'ADOPTED',
        'value' => 'Adopted'
    ],
    [
        'type' => Foundation::class,
        'code' => 'APPROVED',
        'value' => 'Approved'
    ],
    [
        'type' => Foundation::class,
        'code' => 'PENDING_APPROVAL',
        'value' => 'Pending Approval'
    ],
    [
        'type' => ReportAbandonedAnimal::class,
        'code' => 'INITIAL_REPORT',
        'value' => 'Initial Report'
    ],
    [
        'type' => ReportAbandonedAnimal::class,
        'code' => 'CASE_ANALYSIS',
        'value' => 'Case Analysis'
    ],
    [
        'type' => ReportAbandonedAnimal::class,
        'code' => 'REJECT_REPORT',
        'value' => 'Reject Report'
    ],
    [
        'type' => ReportAbandonedAnimal::class,
        'code' => 'TO_THE_RESCUE',
        'value' => 'To The Rescue'
    ],
    [
        'type' => ReportAbandonedAnimal::class,
        'code' => 'CASE_ATTENDED',
        'value' => 'Case Attended'
    ],
    [
        'type' => 'App\Constants\AbandonmentStatus',
        'code' => 'VERY_CRITICAL',
        'value' => 'Very Critical'
    ],
    [
        'type' => 'App\Constants\AbandonmentStatus',
        'code' => 'CRITICAL',
        'value' => 'Critical'
    ],
    [
        'type' => 'App\Constants\AbandonmentStatus',
        'code' => 'MILD',
        'value' => 'Mild'
    ],
];
