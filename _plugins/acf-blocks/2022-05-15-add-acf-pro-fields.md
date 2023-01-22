---
id: 29350
title: 'Add ACF Pro fields'
date: '2022-05-15T15:06:43+00:00'
author: devusrmk
layout: acf_blocks
guid: 'https://docs.dplugins.com/?post_type=acf_blocks&#038;p=29350'
permalink: /acf_blocks/add-acf-pro-fields/
algolia_searchable_posts_records_count:
    - '1'
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

## Create Block

**The first step is to create Gutenberg block**, so you have where to assign ACF fields to it. If Block is not created you will not be able to target fields location.

## Create and Assign field to block

You need to have **ACF Pro** to be able to assign fields to the blocks.

Navigate to **Custom Fields** &gt; **Fields Groups** and hit **"**Add new**"** button.

My best practice is to add same title as Block title and add prefix "Block -" Hello World.

Bellow you can create needed fields

Under location be sure to chose:  
**"Block" - "is equal to" - "Block name"** in this case "Hello World".

<figure class="wp-block-image size-large">![screenshot 2022 05 15 at 20.35.41](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-20.35.41-800x255.png)</figure>## Add ACF php code to render the fields.

<figure class="wp-block-image size-large">![screenshot 2022 05 15 at 20.47.03](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-20.47.03-800x378.png)</figure>## Edit ACF Values inside Gutenberg

There is two ways to edit it.

### In sidebar

<figure class="wp-block-image size-large">![screenshot 2022 05 15 at 20.49.10](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-20.49.10-800x244.png)</figure>### Switch to edit mode

<figure class="wp-block-image size-large is-resized">![screenshot 2022 05 15 at 20.49.23](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-20.49.23-800x224.png)</figure><figure class="wp-block-image size-large">![screenshot 2022 05 15 at 20.49.30](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-15-at-20.49.30-800x239.png)</figure>