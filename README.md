# Ashraya Foundation — Plain PHP Website

## Pages
- Home: `index.php`
- About Us: `about.php`
- Our Care: `care.php`
- Gallery: `gallery.php`
- Donation: `donation.php`
- Contact: `contact.php`

## Image replacement

All photo paths are fixed. Replace the sample JPG files with your real Ashraya photos using the SAME filenames.

Example:
`assets/images/home/hero.jpg`

The website already contains sample placeholder JPGs so you can open the site before adding your photos.

## Main image names

### Home
- `home/hero.jpg`
- `home/senior citizens.jpg`
- `home/elders.jpg`
- `home/community.jpg`
- `home/activity.jpg`

### About
- `about/our-story.jpg`
- `about/mission.jpg`
- `about/vision.jpg`

### Care
- `care/senior citizens-care.jpg`
- `care/elder-care.jpg`

### Donation
- `donation/food-support.jpg`
- `donation/health-support.jpg`
- `donation/healthcare-support.jpg`

### Gallery
- `gallery/gallery-01.jpg` through `gallery/gallery-12.jpg`

## Important configuration

Edit `config.php` and update:
- phone
- email
- WhatsApp
- bank name
- account name
- account number
- IFSC
- branch

## Run locally

```bash
php -S localhost:8000
```

Then open:
`http://localhost:8000`

## Live hosting

Upload all files to `public_html`.

Apache `mod_rewrite` should be enabled for clean URLs.

## Payment

The Donation page contains the UI for donation amounts and direct bank transfer. Connect Razorpay or another payment gateway in `donation.php` when you are ready.


## Supplied Ashraya Photos
The real photos supplied in `Ashraya.zip` have been placed into the website automatically.
Main assignments:
- `4.jpg` → Home hero
- `5.jpg` → Elder care / home elders
- `6.jpg` → Community/activity
- `3.jpg` → Home activity
- `2.jpg` → Food support / gallery
- `7.jpg` → Elder care
- `1.jpg` → Gallery

You can replace any image later while keeping the same filename.


## Visual Update
This version keeps the current new design but enhances every page with:
- Ashraya logo colors: blue, orange and green
- Highlighted heading/emphasis text
- Animated section underlines and accent bars
- Animated cards, buttons, icons and hero imagery
- Improved hover states and donation emphasis
- Responsive mobile styling
- Reduced-motion support for accessibility


## Final Reference-Website Theme
The final build follows the visual colour identity of the supplied Ashraya reference website:
- Deep green
- Secondary green
- Warm orange
- Soft cream
- White

The newer responsive layout, highlighted headings, hover effects and animations are retained.


## Content Focus
The website content is intentionally focused only on:
1. Orphan senior citizens care
2. Senior citizen / old-age care

General charity/service wording has been removed so the site's purpose is immediately clear.


## Final Content Focus
This final version is exclusively for **senior citizens / old-age care**.
All child, orphan, education and school-focused website messaging has been removed from the visible content.
