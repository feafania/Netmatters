CREATE TABLE IF NOT EXISTS `authors` (
                                         `id`    INT UNSIGNED NOT NULL AUTO_INCREMENT,
                                         `name`  VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `categories` (
                                            `id`   INT UNSIGNED NOT NULL AUTO_INCREMENT,
                                            `name` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `name` (`name`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `types` (
                                       `id`   INT UNSIGNED NOT NULL AUTO_INCREMENT,
                                       `name` VARCHAR(50) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `name` (`name`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `services` (
                                          `id`      INT UNSIGNED NOT NULL AUTO_INCREMENT,
                                          `name`    VARCHAR(100) NOT NULL,
    `type_id` INT UNSIGNED NOT NULL,
    PRIMARY KEY (`id`),
    KEY `type_id` (`type_id`),
    CONSTRAINT `services_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `news` (
                                      `id`           INT UNSIGNED NOT NULL AUTO_INCREMENT,
                                      `title`        VARCHAR(255) NOT NULL,
    `category_id`  INT UNSIGNED DEFAULT NULL,
    `service_id`   INT UNSIGNED DEFAULT NULL,
    `image`        VARCHAR(255) NOT NULL,
    `content`      TEXT NOT NULL,
    `author_id`    INT UNSIGNED DEFAULT NULL,
    `published_at` DATE NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE IF NOT EXISTS `enquiries` (
                                           `id`                   INT UNSIGNED NOT NULL AUTO_INCREMENT,
                                           `name`                 VARCHAR(100) NOT NULL,
    `company`              VARCHAR(100) DEFAULT NULL,
    `email`                VARCHAR(255) NOT NULL,
    `telephone`            VARCHAR(30) NOT NULL,
    `message`              TEXT NOT NULL,
    `marketing_preference` TINYINT(1) NOT NULL DEFAULT 0,
    `created_at`           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Sample data

INSERT INTO `authors` (`id`, `name`, `image`) VALUES
                                                  (1, 'Netmatters', 'assets/images/netmatters-ltd-VXAv.webp'),
                                                  (2, 'Bethany Shakespeare', 'assets/images/bethany-shakespeare-F6Iu.webp');

INSERT INTO `categories` (`id`, `name`) VALUES
                                            (1, 'Insights'),
                                            (2, 'Careers');

INSERT INTO `types` (`id`, `name`) VALUES
                                       (1, 'software'),
                                       (2, 'it');

INSERT INTO `services` (`id`, `name`, `type_id`) VALUES
                                                     (1, 'Bespoke Software', 1),
                                                     (2, 'IT Support', 2);

INSERT INTO `news` (`id`, `title`, `category_id`, `service_id`, `image`, `content`, `author_id`, `published_at`) VALUES
                                                                                                                     (1, 'How Much Could Bespoke Software Add to Your Exit Value?', 1, 1, 'assets/images/how-much-could-vKZG.webp', 'If you’re a Managing Director or Senior Manager preparing your business for exit, you know that increase', 1, '2025-06-27'),
                                                                                                                     (2, 'How Can AI Benefit My Business?', 1, 1, 'assets/images/how-can-ai-L9M0.webp', 'The idea of integrating AI into your business operations may seem daunting, but there are undeniabled', 1, '2025-06-26'),
                                                                                                                     (3, '1st Line Technician', 2, 2, 'assets/images/1st-line-technician-1QNr.png', 'Salary Range £25,000 -£29,000 + Pension Hours 40 hours per week, Monday - Friday Location Wymondham, Norfolk, NR18 0WZ', 2, '2025-06-20');