# NetMattes Homepage Recreation

This project is a front-end recreation of the [NetMattes](https://www.netmattes.co.uk/) old homepage, built from scratch using SCSS and semantic HTML, aiming to closely match the original design and behaviour.

## Purpose

The goal is to reproduce the homepage markup and styling as closely as possible to the live site, including layout, spacing, responsive behaviour, and interactive components — without copying source code directly, but rebuilding it based on visual and functional inspection.

## Structure

- **SCSS** — organised using the 7-1 pattern (abstracts, base, components, etc.), with variables and mixins for breakpoints, colors, and shared patterns.
- **HTML** — semantic markup for sections such as the banner slider, services grid, navigation, and footer.

## Key components recreated

- **Banner slider** — full-width hero slider with background images, animated dots navigation, and per-slide accent colors via `data-key` attributes.
- **Services grid** — responsive card grid with hover states and accent colors mapped through Sass `@each` loops over color maps.
- Responsive breakpoints matching the original (`sm`, `md`, `lg`).

## Notes

- Background images are applied via CSS `background-image` (not `<img>`/`<picture>`) to simplify styling while preserving `cover`/`center` behaviour.
