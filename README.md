# Tent

> A camping-inspired WP theme and plugin collection

<img src="https://user-images.githubusercontent.com/38357771/63648215-39bade80-c6e1-11e9-9a08-599f754bcef9.gif" alt="Theme screengrab" width="720"/>

## Design

This project implements the following design mockups:

- [Homepage](https://user-images.githubusercontent.com/38357771/61754568-933d8f80-ad68-11e9-8e5f-82a269c2d1f9.png)
- [Journal Posts Page](https://user-images.githubusercontent.com/38357771/61754581-9b95ca80-ad68-11e9-99db-64bb0b6b5fc4.png)
- [Single Journal Post](https://user-images.githubusercontent.com/38357771/61754600-bbc58980-ad68-11e9-8293-dd311dee6e0b.png)
- [About Page Template](https://user-images.githubusercontent.com/38357771/61754620-cc75ff80-ad68-11e9-8a42-5dee4be3d253.png)
- [Contact Page](https://user-images.githubusercontent.com/38357771/61754636-de57a280-ad68-11e9-8c5f-b687bff9db09.png)
- [Search Results Page](https://user-images.githubusercontent.com/38357771/61754696-0fd06e00-ad69-11e9-8365-8ed256541cba.png)
- [Products Archive Page](https://user-images.githubusercontent.com/38357771/61754644-e6174700-ad68-11e9-8336-279428cf6cd2.png)
- [Product Type Archive Page](https://user-images.githubusercontent.com/38357771/61754647-e6afdd80-ad68-11e9-9eaa-f92b5513c930.png)
- [Single Product Post](https://user-images.githubusercontent.com/38357771/61754649-e879a100-ad68-11e9-99a5-8be98de05c97.png)
- [Adventures Archive Page](https://user-images.githubusercontent.com/38357771/61754700-1a8b0300-ad69-11e9-9afc-d0a88d3379a6.png)
- [Single Adventure Post](https://user-images.githubusercontent.com/38357771/61754703-1c54c680-ad69-11e9-860c-3d1587453e5a.png)
- [404 Page](https://user-images.githubusercontent.com/38357771/61754726-342c4a80-ad69-11e9-969f-675b84df2563.png)

## Features

- Custom Gutenberg block for fullscreen image
- Customizable business hours & contact info widget
- An alternative blog-style post type
- Post-type for products w/ a custom taxonomy
- Styled w/ SASS using the SCSS (Sassy CSS) syntax
- Easy-to-use contact form w/ Contact Form 7

## Development

### 1. Download

Then add to your `wp-content` directory

### 2. Install the dev dependencies

Run `npm i` inside the theme directory to install the node modules you'll need for development

### 3. Update the proxy in `gulpfile.js`

Lastly, be sure to update your `gulpfile.js` with the appropriate URL for the Browsersync proxy (so change `localhost[:port-here]/[your-dir-name-here]` to the appropriate localhost URL)

### 4. (Optional) Populate SQL DB with sample posts

To get an idea of the content that this theme/plugin collection supports, you may wish to import some sample posts. This can be done by [downloading `tent.sql`](https://gist.github.com/shwilliam/612f04ed3a897c38d24f146e7bba654e) and importing the SQL file from `phpmyadmin`. Note that this uses the URL `//localhost/inhabitent` and site path `Applications/htdocs/inhabitent` so you must either mimic these or run your own find & replace to match your appropriate system paths.
