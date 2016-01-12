<?php

// Membuat kelas validation yang berguna untuk memvalidasi input.

$input = [
    'name' => 'John Doe',
    'email' => 'dilbadil@local.com',
    'is_admin' => 1,
    'age' => 20,
    'blog' => 'www.myblogdilbadil.com'
];

$rules = [
    'name' => ['required', 'max:20'],
    'email' => ['required', 'email'],
    'is_admin' => ['required', 'boolean'],
    'age' => ['required', 'number'],
    'blog' => ['site']
];

// Instance validation
$validation = new Validation($input, $rules);

// validate it
$validation->validate();

// Get message
$messages = $validation->messages();



// Silahkan di test pake phpunit ya
