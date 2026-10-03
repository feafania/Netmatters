<?php

const CONTACT_LIMITS = [
    'name'      => 100,
    'company'   => 100,
    'email'     => 255,
    'telephone' => 30,
    'message'   => 1000,
];

function validateContactForm(array $data): array
{
    $errors = [];

    if ($data['name'] === '') {
        $errors['name'] = 'Please enter your name.';
    }

    if ($data['email'] === '') {
        $errors['email'] = 'Please enter your email address.';
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Please enter a valid email address.';
    }

    if ($data['telephone'] === '') {
        $errors['telephone'] = 'Please enter your telephone number.';
    } elseif (!preg_match('/^(?:\+44\s?|0044\s?|0)\d(?:[\s-]?\d){8,9}$/', $data['telephone'])) {
        $errors['telephone'] = 'Please enter a valid phone number (01603 515007, +44 1603 515007).';
    }

    if ($data['message'] === '') {
        $errors['message'] = 'Please enter your message.';
    } elseif (mb_strlen($data['message']) < 5) {
        $errors['message'] = 'Message must be at least 5 characters long.';
    }

    foreach (CONTACT_LIMITS as $field => $max) {
        if (!isset($errors[$field]) && mb_strlen($data[$field]) > $max) {
            $errors[$field] = ucfirst($field) . " must be no more than $max characters long.";
        }
    }

    return $errors;
}