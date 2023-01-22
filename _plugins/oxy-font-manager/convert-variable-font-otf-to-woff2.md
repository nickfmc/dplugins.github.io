---
id: 29264
title: 'Convert Variable Font OTF to WOFF2'
date: '2022-03-10T19:11:01+00:00'
author: devusrmk
layout: oxy_font_manager
guid: 'https://docs.dplugins.com/?post_type=oxy_font_manager&#038;p=29264'
permalink: /oxy_font_manager/convert-variable-font-otf-to-woff2/
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

**If you are using online font generators they will break variable fonts as they are designed for static font faces. They will remove all except the default font face.**

<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="281" loading="lazy" src="https://www.youtube.com/embed/2BxdUmEvqFA?feature=oembed" title="Convert Variable Font" width="500"></iframe></div></figure>Create a folder on your desktop. Open your terminal.

Type CD and drag your folder. That way you don't need to type your path.

## Build

```
<pre class="wp-block-preformatted">```
git <strong>clone</strong> --recursive https://github.com/google/woff2.git
cd woff2
make clean all
```
```

## Run

```
<pre class="wp-block-code">```
./woff2_compress path_to_font/myfont.ttf;
```
```

You will get a converted .woff2 file next to your file.

## GitHub Code

<figure class="wp-block-embed"><div class="wp-block-embed__wrapper">https://github.com/google/woff2 </div></figure>