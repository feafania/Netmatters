# NetMattes Homepage Recreation

This project is a front-end recreation of the [NetMattes](https://www.netmattes.co.uk/) old homepage, built from scratch using SCSS and semantic HTML, aiming to closely match the original design and behaviour.

## Purpose

The goal is to reproduce the homepage markup and styling as closely as possible to the live site, including layout, spacing, responsive behaviour, and interactive components — without copying source code directly, but rebuilding it based on visual and functional inspection.

## Structure

- **SCSS** — organised using the 7-1 pattern (abstracts, base, components, etc.), with variables and mixins for breakpoints, colors, and shared patterns.
- **HTML** — semantic markup for sections such as the banner slider, services grid, navigation, and footer. 
- **JavaScript** — used for interactive components and behaviour that cannot be achieved reliably with CSS alone, including sliders, navigation, tooltips, and other UI interactions.

## Key components recreated

- **Banner slider** — full-width hero slider with background images, animated dots navigation, and per-slide accent colors via `data-key` attributes.
- **Services grid** — responsive card grid with hover states and accent colors mapped through Sass `@each` loops over color maps.
- **Latest news** — responsive news card grid with hover effects and responsive column behaviour.
- **Client logos** — interactive logo cards with colour/greyscale states and tooltips.
- **Responsive navigation** — mobile slide-out menu and related interactive behaviour.
- **Interactive UI components** — JavaScript is used where required to reproduce the original site’s interactive behaviour.

## Responsive Design

The layout uses responsive breakpoints matching the original site (sm, md, lg) to reproduce its behaviour across different screen sizes.

## Notes

- Background images are applied via CSS `background-image` (not `<img>`/`<picture>`) to simplify styling while preserving `cover`/`center` behaviour. 
- Interactive behaviour is recreated using JavaScript where CSS alone cannot accurately reproduce the original site’s behaviour.
