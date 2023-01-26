---
title: Add ACF Pro fields
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

![](../../img/add-acf-pro-fields-field-group.png)

## Add ACF php code to render the fields.

![](../../img/add-acf-pro-fields-code.png)

## Edit ACF Values inside Gutenberg

There is two ways to edit it.

### In sidebar

![](../../img/add-acf-pro-fields-field.png)

### Switch to edit mode

![](../../img/add-acf-pro-fields-edit.png)
![](../../img/add-acf-pro-fields-preview.png)
