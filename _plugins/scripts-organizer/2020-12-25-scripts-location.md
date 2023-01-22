---
id: 1178
title: 'Scripts Location'
date: '2020-12-25T18:57:40+00:00'
author: devusrmk
layout: scripts-organizer
guid: 'http://dplugins.local/?post_type=docs&#038;p=1178'
permalink: /scripts-organizer/scripts-location/
inline_featured_image:
    - '0'
algolia_searchable_posts_records_count:
    - '1'
soon:
    - ''
rank_math_analytic_object_id:
    - '14'
rank_math_internal_links_processed:
    - '1'
algolia_posts_scripts-organizer_records_count:
    - '1'
hide_title:
    - '0'
updated:
    - '0'
---

### What distinguishes Scripts Organizer from others is that you can write Scripts and Styles inside Header and Footer, and on top of that you can write PHP Action, or Hook, or you can create a Shortcode at the same time. 

<figure class="wp-block-image size-large">![screenshot 2021 11 09 at 12.35.27](https://docs.dplugins.com/wp-content/uploads/2021/11/Screenshot-2021-11-09-at-12.35.27-800x376.png)<figcaption>Multiple scripts location active at the same time</figcaption></figure>Header, Footer, and PHP code will be running across the entire website unless it is not narrowed down with the conditions below.

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

<figure class="wp-block-image size-large">![screenshot 2021 11 09 at 12.59.31](https://docs.dplugins.com/wp-content/uploads/2021/11/Screenshot-2021-11-09-at-12.59.31-800x400.png)<figcaption>Shortcode Active</figcaption></figure>Read more about the **[shortcode](https://docs.dplugins.com/docs/scripts-organizer/shortcode/).**