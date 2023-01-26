---
title: 'SCSS Partials'
---

CSS files can be long and important parts can not be reused. The solution to this is to split your CSS into parts and merge them with Scripts Organizer. If you know the power of SCSS with variables and mixins even better. You can write variables and mixins into separate partials and include them in the code block when you need them.

SCSS Partials are separated from Code Blocks for a reason. To make UI less cluttered and easily accessible.

## Intro Video

<iframe width="560" height="315" src="https://www.youtube.com/embed/ngx0QAAaJDM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

## Create SCSS Partial

On the left side, you can find the SCSS Partials menu. When you open it hit the **"+ Add new"** button and create it as any other Custom Post Type.

## Include / Merge SCSS Partials

When partials are created you need to merge them.

Open Code Block and add a new one that will be used for the merger.

Scroll down to SCSS PARTIALS MANAGER and enable it by clicking the "Show" button.

![](../../img/advanced/Screenshot-2021-05-21-at-17.37.06.png)

Click into the Select partials field and a dropdown with autocomplete will come up with all the created partials to choose from.

## SCSS Partials order

The order of SCSS files is important same as in PHP. We made that easy. When you import all needed SCSS Partials you can just drag and drop them in the order you need.

![](../../img/advanced/Screenshot-2021-05-21-at-17.40.58.png)

## SCSS Safe mode AKA Error handling

Same as PHP, SCSS can fail as well. To be sure that everything works as intended we are checking for errors and notifying you when and why that has happened.

<iframe width="560" height="315" src="https://www.youtube.com/embed/LAfQJ8oMnG8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>