# Teach with Wikipedia landing page — implementation notes

Implemented the v2 "conversion" mockup
(`design_drafts/teach-with-wikipedia-v2-conversion.html`) as a real
WordPress page. First commit: `310d1df`.

## Where things live
- **Page-body markup:** `design_drafts/teach-with-wikipedia.html`
  - `twp-` prefixed classes; theme header/footer NOT included (the site
    chrome wraps it).
  - Repeating grids kept on single lines to defeat `wpautop`.
  - Pasted into the page editor as THREE blocks: Custom HTML (Block A) →
    Shortcode (the `[contact-form]`) → Custom HTML (Block C). Block A
    leaves the `.twp-formcard` div open; Block C closes it. Markers are
    in the file.
- **Styles:** `src/sass/theme/_child_theme.scss`, in a single
  `@mixin twp-landing { … }` at the very bottom of the file.
  - Applied via `.page-id-100798 { @include twp-landing; }`
  - Compile with `npm run css` (outputs css/child-theme.css + .min.css).

## Page IDs
- `page-id-100798` → /teach-with-wikipedia-testing/ (active)
- `page-id-11145`  → /teach-with-wikipedia/ (LIVE — rollout target)

## To roll out to the live page
1. Uncomment `// .page-id-11145 { @include twp-landing; }` at the bottom
   of `_child_theme.scss`.
2. `npm run css`.
3. Put the same 3-block content on page 11145, set its template to
   **Full Width Page**.
The form's full-width "How did you hear" row is already wired for both
IDs (`:has(#g100798-…)` and `:has(#g11145-…)` in the mixin).

## Key decisions (from the user)
- Keep the WordPress theme header/footer (not the mockup's topbar/footer).
- Use theme fonts: Source Sans Pro (body/sans), Crimson Text *italic*
  for the `.twp-serif` accents (added italic faces to the @import).
- Contact form stays the Jetpack/Grunion shortcode; styled in place by
  targeting its rendered classes (`.contact-form`, `.grunion-field-wrap`,
  `button.pushbutton-wide`, etc.).
- Page template must be **Full Width Page** (`#full-width-page-wrapper`),
  same as the for-instructors page. User switches the layout themselves.

## Not yet verified
- Actual WordPress render (no local WP here).
- That Gutenberg keeps the `.twp-formcard` div open across the 3 blocks.
