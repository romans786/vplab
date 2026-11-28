# Deploying to Netlify

This site is written in PHP, which Netlify does not execute when serving a
deployed site. The configured build command renders the PHP pages to static
HTML and copies the CSS, JavaScript, and image assets into `dist/`.

1. Import this repository into Netlify.
2. Set the build command to `php scripts/build-static.php`.
3. Set the publish directory to `dist`.
4. Deploy the site.

These settings are also in `netlify.toml`, so Netlify can detect them
automatically. Clean extensionless page URLs are preserved by generated
redirect rules.

The login and signup pages are previews. Contact, course, and internship forms
currently show a client-side confirmation only; they do not send or store
submissions. Add a form service or backend separately if you need to receive
submissions.
