---
title: 'Scripts Location'
---

### What distinguishes Scripts Organizer from others is that you can write Scripts and Styles inside Header and Footer, and on top of that you can write PHP Action, or Hook, or you can create a Shortcode at the same time. 

![](../../img/scripts-location/Screenshot-2021-11-09-at-12.35.27-800x376.png)

Multiple scripts location active at the same time</figcaption></figure>Header, Footer, and PHP code will be running across the entire website unless it is not narrowed down with the conditions below.

## Header

This Code block will be injected inside the page under the header section.

You can choose between:

- HTML ( by default )
- CSS
- SCSS
- JavaScript

**Example:**

For best performance, we suggest that you insert styles in the header.

Written code will be inserted as an inline style and not as a link to the external CSS file.

About code languages and creating a file [**read more here.**](https://docs.dplugins.com/scripts-organizer/generate-css-and-js-as-a-files/)

## Footer

This Code block will be injected inside the page just before closing the body tag.

**Example:**

For the best performance, we suggest that you insert scripts in the footer.

About code languages and creating a file [**read more here.**](https://docs.dplugins.com/scripts-organizer/generate-css-and-js-as-a-files/)

## PHP

This code block will be executed on all pages/posts, or only on selected pages/posts based on the conditions below.

For the best performance we do not store PHP code in a database. We create .php file inside:  
wp-content/uploads/scripts-organizer/{code snippet ID}

About code languages and creating a file [**read more here.**](https://docs.dplugins.com/scripts-organizer/generate-css-and-js-as-a-files/)

## Shortcode

Shortcodes are perfect as reusable elements or flexible elements. You can copy created shortcode and paste it on needed pages wherever you need it inside the WordPress content block.

![](../../img/scripts-location/Screenshot-2021-11-09-at-12.59.31-800x400.png)
Shortcode Active

Read more about the **[shortcode](https://docs.dplugins.com/docs/scripts-organizer/shortcode/).**