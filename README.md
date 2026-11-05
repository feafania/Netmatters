# NetMatters Homepage Recreation

This project is a front-end recreation of the [NetMatters](https://www.netmatters.co.uk/) old homepage and contact page, built from scratch using SCSS, semantic HTML, JavaScript and PHP, aiming to closely match the original design and behaviour.

## Purpose

The goal is to reproduce the homepage and contact page markup and styling as closely as possible to the live site, including layout, spacing, responsive behaviour, and interactive components, without copying source code directly, but rebuilding it based on visual and functional inspection.

## Structure

- **SCSS**: organised using the 7-1 pattern (abstracts, base, layout, modules, states, etc.), with variables, functions and mixins for breakpoints, colours and shared patterns. Components follow the BEM naming convention.
- **HTML / PHP**: semantic markup split into reusable partials (`header`, `navigation`, `footer`) and rendered with PHP. Repeating blocks (news cards, office cards) are generated from data.
- **JavaScript**: ES modules plus jQuery, used for interactive components and behaviour that cannot be achieved reliably with CSS alone, including sliders, navigation, tooltips, the accordion and form validation.
- **PHP + MySQL**: server-side logic for the news feed and the contact form, using PDO with prepared statements. Database credentials are kept in a `.env` file loaded with `vlucas/phpdotenv`.

## Pages

- **Homepage** (`index.php`)
- **Contact Us** (`contact-us.php`)

## Key components recreated

- **Banner slider**: full-width hero slider with background images, animated dots navigation, and per-slide accent colours via `data-key` attributes.
- **Services grid**: responsive card grid with hover states and accent colours mapped through Sass `@each` loops over colour maps.
- **Latest news**: responsive news card grid with hover effects and responsive column behaviour. News is loaded from the database.
- **Client logos**: interactive logo cards with colour/greyscale states and tooltips.
- **Responsive navigation**: mobile slide-out menu and related interactive behaviour.
- **Our Offices**: office cards generated from a config file (`config/offices.php`), with image, address, phone number and a map container (`data-*` attributes for future map integration).
- **Contact info and accordion**: contact details and a collapsible "Out of Hours IT Support" block with a smooth height transition.
- **Custom checkbox**: accessible checkbox styled with CSS only (`:has()` and `:checked`), with keyboard focus support.

## Contact form

The contact form includes:

- **Client-side validation (JavaScript)**: field rules and messages in a separate config, validation on blur and with debounce on input, error messages with `aria-invalid` / `aria-describedby`, and focus on the first invalid field.
- **Server-side validation (PHP)**: required fields, email and UK phone number format, length limits matching the database columns, and error messages displayed under the relevant fields with entered values preserved.
- **CSRF protection**: a session-based token is checked on every submission.
- **Success message**: shown after a successful submission using the Post/Redirect/Get pattern, so refreshing the page does not create duplicate enquiries.
- **Database storage**: successful enquiries are saved to the `enquiries` table with prepared statements. Optional fields are stored as `NULL`.

## Setup

1. Install PHP dependencies: `composer install`
2. Install Node dependencies: `npm install`
3. Create a `.env` file in the project root:
   ```
   DB_NAME=
   DB_USER=
   DB_PASSWORD=
   ```
4. Create the database and import the tables (`news`, `categories`, `services`, `types`, `authors`, `enquiries`).
5. Compile SCSS to `css/main.css`.
6. Run the project on a PHP server, for example: `php -S localhost:8000`

## Responsive Design

The layout uses responsive breakpoints matching the original site (sm, md, lg) to reproduce its behaviour across different screen sizes.

## Notes

- Background images are applied via CSS `background-image` (not `<img>`/`<picture>`) to simplify styling while preserving `cover`/`center` behaviour.
- Interactive behaviour is recreated using JavaScript where CSS alone cannot accurately reproduce the original site's behaviour.
- The map containers on the contact page contain only the markup and `data-*` attributes. Map integration is not part of the current task.
- Because the project uses PHP and MySQL, it cannot be deployed on GitHub Pages and needs a PHP hosting environment.
- The `.env` file must not be committed to the repository.