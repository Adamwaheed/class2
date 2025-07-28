<?php
//build football team array

$profile = [
    'name' => 'adam Waheed',
    'age'=>38,
    'experience' => [
        'years' => 20,
        'skills' => ['dribbling', 'passing', 'shooting'],
        'matches' => [
            'worldcup' => [
                2001 => ['best defebder','3 golad'],
                2002 => ['5 gold medal'],
                2003 => ['best player', '2 gold medal']
            ],
            'champions league' => [
                2004 => ['best player', '1 gold medal'],
                2005 => ['best midfielder', '2 gold medal']
            ],
            'euro cup' => [
                2008 => ['best player', '1 gold medal'],
                2012 => ['best midfielder', '2 gold medal']
            ]
        ]
    ],
];

echo $profile['experience']['matches']['champions league'][2005][1];

?>