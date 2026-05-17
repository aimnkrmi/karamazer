<?php
return [

    [
        'header' => 'Main Navigation',
        'can' => 'view navigation'
    ],
    [
        'text' => 'Dashboard',
        'route' => 'dashboard',
        'icon' => 'bi bi-house',
        'can' => 'view dashboard'
    ],
    [
        'text' => 'Profile',
        'route' => 'profile',
        'icon' => 'bi bi-person-circle',
    ],
    [
        'text' => 'Settings',
        'icon' => 'bi bi-gear',
        'submenu' => [
            [
                'text' => 'Security',
                'route' => 'settings.security',
            ]
        ]
    ],
    [
        'text' => 'Participant',
        'route' => 'participants',
        'icon' => 'bi bi-person',
        'submenu' => [
            [
                'text' => 'View Participants',
                'route' => 'participants.index',
                'can' => 'view participants'
            ],
            [
                'text' => 'Create Participant',
                'route' => 'participants.create',
                'can' => 'create participants'
            ]
        ]
    ]

];
