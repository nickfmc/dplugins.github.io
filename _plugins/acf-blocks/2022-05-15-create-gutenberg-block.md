---
id: 29348
title: 'Create Gutenberg Block'
date: '2022-05-15T15:06:03+00:00'
author: devusrmk
layout: acf_blocks
guid: 'https://docs.dplugins.com/?post_type=acf_blocks&#038;p=29348'
permalink: /acf_blocks/create-gutenberg-block/
algolia_searchable_posts_records_count:
    - '2'
hide_title:
    - '0'
updated:
    - '0'
ct_other_template:
    - '0'
ct_template_archive_post_types_all:
    - ''
ct_template_categories:
    - 'a:0:{}'
ct_template_categories_all:
    - ''
ct_template_tags:
    - 'a:0:{}'
ct_template_tags_all:
    - ''
ct_template_custom_taxonomies:
    - 'a:0:{}'
ct_template_custom_taxonomies_all:
    - ''
ct_template_authors_archives_all:
    - ''
ct_template_index:
    - ''
ct_template_front_page:
    - ''
ct_template_blog_posts:
    - ''
ct_template_date_archive:
    - ''
ct_template_search_page:
    - ''
ct_template_inner_content:
    - ''
ct_template_404_page:
    - ''
ct_template_all_archives:
    - ''
ct_template_archive_among_taxonomies:
    - 'a:0:{}'
ct_template_apply_if_archive_among_taxonomies:
    - ''
ct_template_archive_post_types:
    - 'a:0:{}'
ct_template_apply_if_archive_among_cpt:
    - ''
ct_template_authors_archives:
    - 'a:0:{}'
ct_template_apply_if_archive_among_authors:
    - ''
ct_template_single_all:
    - ''
ct_template_post_types:
    - 'a:0:{}'
ct_template_exclude_ids:
    - ''
ct_template_include_ids:
    - ''
ct_template_taxonomies:
    - 'a:2:{s:5:"names";a:0:{}s:6:"values";a:0:{}}'
ct_use_template_taxonomies:
    - ''
ct_template_post_of_parents:
    - 'a:0:{}'
ct_template_apply_if_post_of_parents:
    - ''
ct_template_order:
    - '0'
ct_builder_shortcodes:
    - ''
oxygen_lock_post_edit_mode:
    - null
---

1. **Title**
2. **Quick Toggle**
3. **Icon**
4. **Category**
5. **Keywords**
6. **Include CSS and JS**
7. **Description**
8. **Code Block**

<figure class="wp-block-image size-large">![block preview 1](https://docs.dplugins.com/wp-content/uploads/2022/05/block-preview-1-800x540.png)</figure>## Block Title 

will define block name be displayed when you try to add Gutenberg block. You can add Gutenberg block in several ways. Most common is to type slash "/" and then start typing block name or to press plus "+".

<div class="is-layout-flex wp-container-49 wp-block-columns"><div class="is-layout-flow wp-block-column"><figure class="wp-block-image size-full">![screenshot 2022 05 15 at 19.24.16](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-19.24.16.png)</figure></div><div class="is-layout-flow wp-block-column"><figure class="wp-block-image size-large">![screenshot 2022 05 15 at 19.24.34](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-19.24.34-800x1140.png)</figure></div></div>## Quick Toggle

This switch can help you quickly disable blocks without need to delete them.

## Icon

is visual representation when you try to add block same as title. For icons we are using WordPress [dashicons](https://developer.wordpress.org/resource/dashicons/#image-rotate-left) and entire list can be found inside the link bellow icon name field.

When you are adding icon name do not include <mark class="has-inline-color has-vivid-red-color" style="background-color:rgba(0, 0, 0, 0)">**"dashicons-"**</mark>. In example bellow pasted name should be: **"**admin-comments**"**.

<figure class="wp-block-image size-large">![screenshot 2022 05 15 at 19.42.00](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-19.42.00-800x636.png)</figure>## Category

Is the location where your code block will be placed. If try to add block and you press **Browse all** you will get a list of all blocks grouped in categories.

In our example you can find it under **TEXT** category.

<div class="is-layout-flex wp-container-52 wp-block-columns"><div class="is-layout-flow wp-block-column"><figure class="wp-block-image size-large">![screenshot 2022 05 15 at 19.24.34](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-19.24.34-800x1140.png)</figure></div><div class="is-layout-flow wp-block-column"><figure class="wp-block-image size-full">![screenshot 2022 05 15 at 19.46.50](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-19.46.50.png)</figure></div></div><div class="is-layout-flex wp-container-55 wp-block-columns"><div class="is-layout-flow wp-block-column">**Available categories are:**

- Text
- Media
- Design
- Widgets
- Theme
- Embed

</div><div class="is-layout-flow wp-block-column"><figure class="wp-block-image size-full">![screenshot 2022 05 15 at 19.50.35](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-19.50.35.png)</figure></div></div>## **Keywords**

Will are additional tags to help you find and you blocks easier.

Sometimes is hard to define blocks in just one phrase.

Examples for this is:

- Row, Column, Layout, Grid
- Button, BTN, Primary-button, Pri-btn

You can name your block "column" but still find it by typing grid, row or layout. Also you can share those keywords and several buttons (primary, secondary, outline ) can share keywords such as (btn, button)

## Scripts &amp; Styles

This is a place where you call your CSS or JS files for your block. We decided not to have CSS and JS tabs like you have in Code Block to be able to reuse them.

Example for that is if you have two user cards and one is vertical and another is horizontal. They look almost the same but orientation of elements and some of the elements are different. You can get a way with reusing css and add another class on main wrap of the block.

<figure class="wp-block-image size-full">![screenshot 2022 05 15 at 20.10.30](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-20.10.30.png)</figure><div class="is-layout-flow wp-block-group"><div class="wp-block-group__inner-container">### For explaining Styling in details please check our Styling instructions

<div class="is-content-justification-center is-layout-flex wp-container-56 wp-block-buttons"><div class="wp-block-button">[Style Block Guide](https://docs.dplugins.com/acf_blocks/style-blocks/)</div></div></div></div>## Descriptions

will help you better document what this the function of this block you if you are working in teams this is perfect place to leave notes for your colleagues without rendering comments in websites HTML.

<figure class="wp-block-image size-large">![image](https://docs.dplugins.com/wp-content/uploads/2022/05/image-800x245.png)</figure>## Code Block

Place where you will be placing your code. This is PHP code block, but to write PHP you need to wrap it in &lt;?php ?&gt; tag. If you need static elements you can write HTML as well.

Same as any other PHP you can include inline scripts and styles by wrapping it in:  
`<script></script>` and `<style></style>.`