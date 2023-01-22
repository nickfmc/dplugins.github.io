---
id: 15471
title: 'SCSS Partials'
date: '2021-05-21T16:19:50+00:00'
author: devusrmk
layout: scripts-organizer
guid: 'http://dplugins.local/?post_type=docs&#038;p=15471'
permalink: /scripts-organizer/scss-partials/
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

CSS files can be long and important parts can not be reused. The solution to this is to split your CSS into parts and merge them with Scripts Organizer. If you know the power of SCSS with variables and mixins even better. You can write variables and mixins into separate partials and include them in the code block when you need them.

SCSS Partials are separated from Code Blocks for a reason. To make UI less cluttered and easily accessible.

## Intro Video

\[yt id=ngx0QAAaJDM\]

## Create SCSS Partial

On the left side, you can find the SCSS Partials menu. When you open it hit the **"+ Add new"** button and create it as any other Custom Post Type.

## Include / Merge SCSS Partials

When partials are created you need to merge them.

Open Code Block and add a new one that will be used for the merger.

Scroll down to SCSS PARTIALS MANAGER and enable it by clicking the "Show" button.

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-05-21-at-17.37.06.png)</figure>Click into the Select partials field and a dropdown with autocomplete will come up with all the created partials to choose from.

## SCSS Partials order

The order of SCSS files is important same as in PHP. We made that easy. When you import all needed SCSS Partials you can just drag and drop them in the order you need.

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-05-21-at-17.40.58.png)</figure>## SCSS Safe mode AKA Error handling

Same as PHP, SCSS can fail as well. To be sure that everything works as intended we are checking for errors and notifying you when and why that has happened.

\[yt id=LAfQJ8oMnG8\]