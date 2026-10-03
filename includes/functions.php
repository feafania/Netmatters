<?php

function truncateText(string $text, int $length): string
{
    if (mb_strlen($text) <= $length) {
        return $text;
    }

    return mb_substr($text, 0, $length) . '...';
}

function getNews(PDO $pdo): array
{
    $stmt = $pdo->query('
        SELECT
            news.*,
            categories.name AS category,
            services.name AS service,
            types.name AS type,
            authors.name AS author,
            authors.image AS author_image
        FROM news
        JOIN categories ON news.category_id = categories.id
        JOIN services ON news.service_id = services.id
        JOIN types ON services.type_id = types.id
        JOIN authors ON news.author_id = authors.id
        ORDER BY news.published_at DESC
    ');

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function saveEnquiry(PDO $pdo, array $data): void
{
    $stmt = $pdo->prepare('
        INSERT INTO enquiries
            (name, company, email, telephone, message, marketing_preference)
        VALUES
            (:name, :company, :email, :telephone, :message, :marketing_preference)
    ');

    $stmt->execute([
        ':name' => $data['name'],
        ':company' => $data['company'] !== '' ? $data['company'] : null,
        ':email' => $data['email'],
        ':telephone' => $data['telephone'],
        ':message' => $data['message'],
        ':marketing_preference' => $data['marketing_preference'],
    ]);
}

function fieldError(array $errors, string $field): string
{
    if (!isset($errors[$field])) {
        return '';
    }

    return sprintf(
        '<span id="%s-error" class="form__error" role="alert">%s</span>',
        $field,
        htmlspecialchars($errors[$field])
    );
}

function fieldClass(array $errors, string $field): string
{
    return isset($errors[$field]) ? ' is-invalid' : '';
}

function postString(string $key): string
{
    $value = $_POST[$key] ?? '';
    return is_string($value) ? trim($value) : '';
}