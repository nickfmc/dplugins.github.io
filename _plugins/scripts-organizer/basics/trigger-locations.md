---
title: 'Trigger Locations'
---

## Everywhere (Unconditional)

![](../../img/trigger-locations/Screenshot-2021-11-09-at-12.32.39.png)
This option is a replacement for the famous plugin CodeSnippet, Theme, or Custom Plugins functions.php.

**With this script location setting you can:**

- Use WordPress hooks. For example, with the excerpt _length filter, you can change your post excerpt length (from the default of 55 words).
- Enable WordPress features with [add_theme_support()](https://developer.wordpress.org/reference/functions/add_theme_support/). For example, turn on post thumbnails, post formats, and navigation menus.
- Define functions you wish to reuse in multiple theme template files.

**Note: This should be used only with SCRIPT LOCATION &gt; PHP.  
Header, Footer, and Shortcodes do not apply to this.**

## Admin Only

![](../../img/trigger-locations/Screenshot-2021-11-09-at-12.31.55.png)
This condition is taking effect only for scenarios when "admin" is logged in. Below are some WordPress references to give you some examples of when and how to use them:

- [is_admin()](https://developer.wordpress.org/reference/functions/is_admin/)
- [admin_init](https://developer.wordpress.org/reference/hooks/admin_init/)
- [admin_head](https://developer.wordpress.org/reference/hooks/admin_head/)
- [admin_footer](https://developer.wordpress.org/reference/hooks/admin_footer/)
- [admin_menu](https://developer.wordpress.org/reference/hooks/admin_menu/)


**Note: This should be used only with SCRIPT LOCATION &gt; PHP.  
Header, Footer, and Shortcodes do not apply to this.**

## Conditions

![](../../img/trigger-locations/Screenshot-2021-11-09-at-12.32.01.png)
With conditional PHP, by default will work the same as everywhere you can can narrow it by conditions. Example: To be triggered by a specific page, post, date or time.

Selection Conditions will unlock the option for targeting a specific page, post, date, or time and it will also give you the option to create shortcodes or write scripts and styles in the header and footer.