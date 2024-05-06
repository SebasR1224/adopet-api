<?php

use App\Models\Animal;
use App\Models\Foundation;

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
];
