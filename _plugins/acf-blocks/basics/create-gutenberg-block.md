---
title: Create Gutenberg Block
order: 1
---

1. **Title**
2. **Quick Toggle**
3. **Icon**
4. **Category**
5. **Keywords**
6. **Include CSS and JS**
7. **Description**
8. **Code Block**

![](../../img/create-block--ui.png)

## Block Title 
will define block name be displayed when you try to add Gutenberg block. You can add Gutenberg block in several ways. Most common is to type slash "/" and then start typing block name or to press plus "+".

{: .col-2}
![](../../img/create-block--block-title.png)
![](../../img/create-block--block-title-2.png)


## Quick Toggle
This switch can help you quickly disable blocks without need to delete them.

## Icon

is visual representation when you try to add block same as title. For icons we are using WordPress [dashicons](https://developer.wordpress.org/resource/dashicons/#image-rotate-left) and entire list can be found inside the link bellow icon name field.

When you are adding icon name do not include <mark class="has-inline-color has-vivid-red-color" style="background-color:rgba(0, 0, 0, 0)">**"dashicons-"**</mark>. 
In example bellow pasted name should be: **"**admin-comments**"**.

{: .col-2}
![](../../img/create-block--icon.png)

## Category
Is the location where your code block will be placed. If try to add block and you press **Browse all** you will get a list of all blocks grouped in categories.

In our example you can find it under **TEXT** category.

{: .col-2}
![](../../img/create-block--category.png)
![](../../img/create-block--category-2.png)


**Available categories are:**

- Text
- Media
- Design
- Widgets
- Theme
- Embed

![](../../img/create-block--category-3.png)

## Keywords

Will are additional tags to help you find and you blocks easier.

Sometimes is hard to define blocks in just one phrase.

Examples for this is:

- Row, Column, Layout, Grid
- Button, BTN, Primary-button, Pri-btn

You can name your block "column" but still find it by typing grid, row or layout. Also you can share those keywords and several buttons (primary, secondary, outline ) can share keywords such as (btn, button)

## Scripts &amp; Styles

This is a place where you call your CSS or JS files for your block. We decided not to have CSS and JS tabs like you have in Code Block to be able to reuse them.

Example for that is if you have two user cards and one is vertical and another is horizontal. They look almost the same but orientation of elements and some of the elements are different. You can get a way with reusing css and add another class on main wrap of the block.

![](../../img/create-block--scripts-styles.png)

### For explaining Styling in details please check our Styling instructions

[Style Block Guide](https://docs.dplugins.com/acf_blocks/style-blocks/)

## Descriptions
will help you better document what this the function of this block you if you are working in teams this is perfect place to leave notes for your colleagues without rendering comments in websites HTML.

![](../../img/create-block--descriptions.png)

## Code Block

Place where you will be placing your code. This is PHP code block, but to write PHP you need to wrap it in &lt;?php ?&gt; tag. If you need static elements you can write HTML as well.

Same as any other PHP you can include inline scripts and styles by wrapping it in:  
`<script></script>` and `<style></style>.`
