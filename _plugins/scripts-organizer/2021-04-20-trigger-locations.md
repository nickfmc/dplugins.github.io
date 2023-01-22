---
id: 10852
title: 'Trigger Locations'
date: '2021-04-20T20:10:13+00:00'
author: devusrmk
layout: scripts-organizer
guid: 'http://dplugins.local/?post_type=docs&#038;p=10852'
permalink: /scripts-organizer/trigger-locations/
inline_featured_image:
    - '0'
algolia_searchable_posts_records_count:
    - '1'
algolia_posts_scripts-organizer_records_count:
    - '1'
hide_title:
    - '0'
updated:
    - '0'
---

## Everywhere (Unconditional)

<figure class="wp-block-image size-large">![screenshot 2021 11 09 at 12.32.39](https://docs.dplugins.com/wp-content/uploads/2021/11/Screenshot-2021-11-09-at-12.32.39-800x200.png)</figure>This option is a replacement for the famous plugin CodeSnippet, Theme, or Custom Plugins functions.php.

**With this script location setting you can:**

- Use WordPress hooks. For example, with the excerpt\_length filter, you can change your post excerpt length (from the default of 55 words).
- Enable WordPress features with [add\_theme\_support()](https://developer.wordpress.org/reference/functions/add_theme_support/). For example, turn on post thumbnails, post formats, and navigation menus.
- Define functions you wish to reuse in multiple theme template files.

**Note: This should be used only with SCRIPT LOCATION &gt; PHP.  
Header, Footer, and Shortcodes do not apply to this.**

## Admin Only

<figure class="wp-block-image size-large">![screenshot 2021 11 09 at 12.31.55](https://docs.dplugins.com/wp-content/uploads/2021/11/Screenshot-2021-11-09-at-12.31.55-800x207.png)</figure>This condition is taking effect only for scenarios when "admin" is logged in. Below are some WordPress references to give you some examples of when and how to use them:

<figure class="wp-block-embed is-type-wp-embed is-provider-wordpress-developer-resources wp-block-embed-wordpress-developer-resources"><div class="wp-block-embed__wrapper">> [is\_admin()](https://developer.wordpress.org/reference/functions/is_admin/)

<iframe class="wp-embedded-content" data-secret="NtY9kHXj4M" frameborder="0" height="282" marginheight="0" marginwidth="0" sandbox="allow-scripts" scrolling="no" security="restricted" src="https://developer.wordpress.org/reference/functions/is_admin/embed/#?secret=NtY9kHXj4M" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" title="“is_admin()” — WordPress Developer Resources" width="500"></iframe></div></figure><figure class="wp-block-embed is-type-wp-embed is-provider-wordpress-developer-resources wp-block-embed-wordpress-developer-resources"><div class="wp-block-embed__wrapper">> [admin\_init](https://developer.wordpress.org/reference/hooks/admin_init/)

<iframe class="wp-embedded-content" data-secret="iEikqeMO3t" frameborder="0" height="282" marginheight="0" marginwidth="0" sandbox="allow-scripts" scrolling="no" security="restricted" src="https://developer.wordpress.org/reference/hooks/admin_init/embed/#?secret=iEikqeMO3t" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" title="“admin_init” — WordPress Developer Resources" width="500"></iframe></div></figure><figure class="wp-block-embed is-type-wp-embed is-provider-wordpress-developer-resources wp-block-embed-wordpress-developer-resources"><div class="wp-block-embed__wrapper">> [admin\_head](https://developer.wordpress.org/reference/hooks/admin_head/)

<iframe class="wp-embedded-content" data-secret="KfH7eHNuYj" frameborder="0" height="282" marginheight="0" marginwidth="0" sandbox="allow-scripts" scrolling="no" security="restricted" src="https://developer.wordpress.org/reference/hooks/admin_head/embed/#?secret=KfH7eHNuYj" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" title="“admin_head” — WordPress Developer Resources" width="500"></iframe></div></figure><figure class="wp-block-embed is-type-wp-embed is-provider-wordpress-developer-resources wp-block-embed-wordpress-developer-resources"><div class="wp-block-embed__wrapper">> [admin\_footer](https://developer.wordpress.org/reference/hooks/admin_footer/)

<iframe class="wp-embedded-content" data-secret="ejkrQ0W61C" frameborder="0" height="282" marginheight="0" marginwidth="0" sandbox="allow-scripts" scrolling="no" security="restricted" src="https://developer.wordpress.org/reference/hooks/admin_footer/embed/#?secret=ejkrQ0W61C" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" title="“admin_footer” — WordPress Developer Resources" width="500"></iframe></div></figure><figure class="wp-block-embed is-type-wp-embed is-provider-wordpress-developer-resources wp-block-embed-wordpress-developer-resources"><div class="wp-block-embed__wrapper">> [admin\_menu](https://developer.wordpress.org/reference/hooks/admin_menu/)

<iframe class="wp-embedded-content" data-secret="W8c4Ve37mt" frameborder="0" height="282" marginheight="0" marginwidth="0" sandbox="allow-scripts" scrolling="no" security="restricted" src="https://developer.wordpress.org/reference/hooks/admin_menu/embed/#?secret=W8c4Ve37mt" style="position: absolute; clip: rect(1px, 1px, 1px, 1px);" title="“admin_menu” — WordPress Developer Resources" width="500"></iframe></div></figure>**Note: This should be used only with SCRIPT LOCATION &gt; PHP.  
Header, Footer, and Shortcodes do not apply to this.**

## Conditions

<figure class="wp-block-image size-large">![screenshot 2021 11 09 at 12.32.01](https://docs.dplugins.com/wp-content/uploads/2021/11/Screenshot-2021-11-09-at-12.32.01-800x200.png)</figure>With conditional PHP, by default will work the same as everywhere you can can narrow it by conditions. Example: To be triggered by a specific page, post, date or time.

Selection Conditions will unlock the option for targeting a specific page, post, date, or time and it will also give you the option to create shortcodes or write scripts and styles in the header and footer.