# Atmani Theme Development Rules

You are building a premium WordPress theme called **Atmani Theme**.

## General

- Follow WordPress Coding Standards.
- Support PHP 8.1+.
- Mobile-first.
- Performance first.
- Accessibility (WCAG AA).
- SEO-friendly.
- Use semantic HTML5.

## Architecture

- Use reusable template parts.
- Keep functions small and modular.
- Put setup code in `/inc/setup.php`.
- Put enqueue code in `/inc/enqueue.php`.
- Put widgets in `/inc/widgets.php`.
- Put Customizer code in `/inc/customizer.php`.

## CSS

Use separate files:

- main.css
- navigation.css
- hero.css
- cards.css
- footer.css
- responsive.css

Never put everything into one stylesheet.

## JavaScript

- Vanilla JavaScript only.
- No jQuery.
- One feature per file.

## Design

Theme style:

- Dark cinematic
- Warm gold accents
- Large photography
- Minimal interface
- Smooth animations
- Apple / National Geographic inspired

## Homepage

Sections:

1. Hero
2. Featured Story
3. Latest Stories
4. Music
5. Travel
6. Photography
7. Quote
8. Newsletter
9. Footer

Always create reusable WordPress template parts.