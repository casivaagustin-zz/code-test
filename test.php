<?php

include 'processor.php';

$inputs = [
    [
        'data' => '610-248-4389 415 Street, Leigh, NE 68643 DANIEL MCGIVNEY daniel.MCGIVNEY@ryan.com',
        'out' => [
            'full_name' => 'DANIEL MCGIVNEY',
            'phone_number' => '610-248-4389',
            'address' => '415 Street, Leigh, NE 68643',
            'email' => 'daniel.MCGIVNEY@ryan.com',
        ]
    ],
    [
        'data' => '(312) 252-8915 Ranch to Market 2034, Robert Lee, TX 76945 leslie.jones@transform.net Leslie Jones',
        'out' => [
            'full_name' => 'Leslie Jones',
            'phone_number' => '(312) 252-8915',
            'address' => 'Ranch to Market 2034, Robert Lee, TX 76945',
            'email' => 'leslie.jones@transform.net',
        ]
    ],
    [
        'data' => 'Road 208, Miles City, MT 59301 Robert Skillman john_lego@bigo.co.uk 2817994800',
        'out' => [
            'full_name' => 'Robert Skillman',
            'phone_number' => '2817994800',
            'address' => 'Road 208, Miles City, MT 59301',
            'email' => 'john_lego@bigo.co.uk',
        ]
    ],
    [
        'data' => '770 559 2785-32740-32898 Johnson Canyon Road, Gonzales, CA 93926 anna.obrien@gmail.com Anna O\'Brien',
        'out' => [
            'full_name' => 'Anna O\'Brien',
            'phone_number' => '770 559 2785-32740',
            'address' => '32898 Johnson Canyon Road, Gonzales, CA 93926',
            'email' => 'anna.obrien@gmail.com',
        ]
    ],
    [
        'data' => 'John Van Dixon 19010 Cour Estates, Lutz, FL 33558 (750)899-8496 jonvandixon@semot.median',
        'out' => [
            'full_name' => 'John Van Dixon',
            'phone_number' => '(750)899-8496',
            'address' => '19010 Cour Estates, Lutz, FL 33558',
            'email' => 'jonvandixon@semot.median',
        ]
    ],
    [
        'data' => '56 Leonard Street, New York, NY 10013 703.549.0977 michaelho-lung@fortuneintlgroup.com Michael Ho-Lung',
        'out' => [
            'full_name' => 'Michael Ho-Lung',
            'phone_number' => '703.549.0977',
            'address' => '56 Leonard Street, New York, NY 10013',
            'email' => 'michaelho-lung@fortuneintlgroup.com',
        ]
    ],
];

foreach ($inputs as $key => $input) {
    $process = new Process($input['data']);
    $process->parseInput();
    if ($process->full_name != $input['out']['full_name']) {
        echo "Failed $key at test Full Name - Expected : {$input['out']['full_name']} Given: {$process->full_name}" . PHP_EOL;
    }
    if ($process->phone_number != $input['out']['phone_number']) {
        echo "Failed $key at test Phone Number - Expected : {$input['out']['phone_number']} Given: {$process->phone_number}" . PHP_EOL;
    }
    if ($process->address != $input['out']['address']) {
        echo "Failed $key at test Address - Expected : {$input['out']['address']} Given: {$process->address}" . PHP_EOL;
    }
    if ($process->email != $input['out']['email']) {
        echo "Failed $key at test Email - Expected : {$input['out']['email']} Given: {$process->email}" . PHP_EOL;
    }
}

echo "Tests Done";