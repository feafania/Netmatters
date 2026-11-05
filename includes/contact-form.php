<?php
  /** @var PDO $pdo */

  $formData = [
      'name' => '',
      'company' => '',
      'email' => '',
      'telephone' => '',
      'message' => '',
      'marketing_preference' => 0,
  ];

  $errors = [];
  $success = false;

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formData['name'] = postString('name');
    $formData['company'] = postString('company');
    $formData['email'] = postString('email');
    $formData['telephone'] = postString('telephone');
    $formData['message'] = postString('message');
    $formData['marketing_preference'] = isset($_POST['marketing_preference']) ? 1 : 0;

    if (
        !isset($_POST['_token']) ||
        !is_string($_POST['_token']) ||
        !hash_equals($_SESSION['csrf'], $_POST['_token'])
    ) {
        $errors['_token'] = 'Invalid form submission.';
    }

    $errors = array_merge($errors, validateContactForm($formData));

    if (empty($errors)) {
        try {
            saveEnquiry($pdo, $formData);
        } catch (PDOException $e) {
            error_log($e->getMessage());
            $errors['form'] = 'Sorry, something went wrong. Please try again later.';
        }
    }

    if (empty($errors)) {
        $_SESSION['enquiry_sent'] = true;
        $_SESSION['csrf'] = bin2hex(random_bytes(32));
        header('Location: contact-us.php#contact-form');
        exit;
    }
  }

  $success = !empty($_SESSION['enquiry_sent']);
  unset($_SESSION['enquiry_sent']);
