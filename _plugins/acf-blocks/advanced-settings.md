---
title: Advanced Settings
---

**This is available in version 1.1.0 and above**

Those options are disabled by default as they may overwhelm beginners. Scroll to the bottom of the settings and enable it by switching the toggle.

<div class="is-layout-flex wp-container-60 wp-block-columns">
<div class="is-layout-flow wp-block-column">

<figure class="wp-block-image size-large">![screenshot 2022 05 25 at 21.46.48](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-25-at-21.46.48-800x1217.png)</figure></div><div class="is-layout-flow wp-block-column"><figure class="wp-block-image size-large">![screenshot 2022 05 26 at 13.37.07](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-13.37.07-800x1796.png)</figure></div></div>

## JSX (for inner blocks)

To enable adding blocks inside your block you need to:

1. Enable it under **Advanced Mode &gt; JSX (for inner blocks)**
2. Add `<InnerBlocks/>` inside your code

```
<pre class="wp-block-code">```php
<div class="container">
    <InnerBlocks/>
</div>
```
```

## Insert multiple times on same post or page

If this one is disabled you can add block only once per post or page.

## Visible in \[+\] Add Block panel

If this option is disable user will not be able to add block by using those tree options. Block will then needs to be added programmatically.

<figure class="wp-block-image size-large">![screenshot 2022 05 25 at 21.59.35](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-25-at-21.59.35-800x355.png)</figure>Read more about "Inserter" on [WordPress Reference Guide.](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/#inserter)

## Define Horizontal Align Options

This will allow you to add horizontal align classes from the toolbar. You can choose witch options you want to add to the toolbar.

<div class="is-layout-flex wp-container-65 wp-block-columns"><div class="is-layout-flow wp-block-column"><figure class="is-layout-flex wp-block-gallery-61 wp-block-gallery has-nested-images columns-default is-cropped"><figure class="wp-block-image size-large">![screenshot 2022 05 25 at 22.07.24](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-25-at-22.07.24.png)</figure></figure></div><div class="is-layout-flow wp-block-column"><figure class="wp-block-image size-large">![screenshot 2022 05 25 at 22.08.58](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-25-at-22.08.58.png)</figure></div></div><div class="is-layout-flex wp-container-70 wp-block-columns"><div class="is-layout-flow wp-block-column"><figure class="is-layout-flex wp-block-gallery-66 wp-block-gallery has-nested-images columns-default is-cropped"><figure class="wp-block-image size-large">![screenshot 2022 05 25 at 22.10.15](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-25-at-22.10.15.png)</figure></figure></div><div class="is-layout-flow wp-block-column"><figure class="wp-block-image size-large">![screenshot 2022 05 25 at 22.10.08](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-25-at-22.10.08.png)</figure></div></div>```
<pre class="wp-block-code">```php
// This needs review
<?php

    $className = 'block-example';

    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }
    if( !empty($block['align']) ) {
        $className .= ' align' . $block['align'];
    }


?>


<div class="<?php echo esc_attr( $classname ) ; ?>">
    <h1>This is Code Example Block</h1>
</div>
```
```

## Vertical Align

Will allow you to set Align top, Align middle and Align bottom

<figure class="wp-block-image size-full is-resized">![screenshot 2022 05 26 at 10.29.33](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-10.29.33.png)</figure>## Text Align

Will allow you to set Align text left, Align text center, Align text right

<figure class="wp-block-image size-large is-resized">![screenshot 2022 05 26 at 13.35.44](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-13.35.44-800x383.png)</figure><div class="is-layout-flow wp-block-group"><div class="wp-block-group__inner-container">### Horizontal, Vertical and Text Align Default

You can predefine selected option in the toolbar and the front end, when you are adding block to the page.

</div></div>## Full Height

This option is toggle state and not dropdown select. It will toggle full-height class.

<figure class="wp-block-image size-large is-resized">![screenshot 2022 05 26 at 13.33.44](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-13.33.44-800x109.png)</figure>## Edit Mode inside block

If this option is not enabled you will get ACF fields in sidebar. If this option is enabled you can edit ACF fields directly inside block area. If edit mode inside block is active you will not see ACF fields in the sidebar at the same time.

<figure class="wp-block-image size-large">![screenshot 2022 05 26 at 12.15.01](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-12.15.01-800x370.png)</figure><figure class="wp-block-image size-large">![screenshot 2022 05 26 at 12.15.14](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-12.15.14-800x194.png)</figure>## Reusable

Enables option to save it as Reusable block

<figure class="wp-block-image size-large is-resized">![screenshot 2022 05 26 at 13.38.21](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-13.38.21-800x640.png)</figure>## Lock

After enabling this options you can find it under toolbar &gt; advanced options (tree dots).

<figure class="wp-block-image size-large">![screenshot 2022 05 26 at 13.36.24](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-13.36.24-800x644.png)</figure>Locking block will give you several options where you can apply lock state.

<figure class="wp-block-image size-large">![screenshot 2022 05 26 at 12.06.10](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-12.06.10-800x556.png)</figure>## Dimensions (Margin, Padding)

Will unlock options in sidebar to add Margin and Padding

<figure class="wp-block-image size-large">![screenshot 2022 05 26 at 12.03.24](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-12.03.24-800x298.png)</figure>## HTML anchor

Will replace automatic generated ID values to help you link easier to the current block

<figure class="wp-block-image size-large">![screenshot 2022 05 26 at 12.00.01](https://docs.dplugins.com/wp-content/uploads/2022/05/Screenshot-2022-05-26-at-12.00.01-800x338.png)</figure>## Code Boilerplate

```
<pre class="wp-block-code">```php
<?php


    if(isset($_GET['print_block_args'])){
        echo ""; print_r($block); "";
    }
    // Get ID
    $id = 'block-example-' . $block['id'];

    // Get HTML anchor
    if( !empty($block['supports']['anchor']) ) {
        $id = $block['supports']['anchor'];
    }

    // Set Default Class 
    $className = 'block-example';

    if( !empty($block['className']) ) {
        $className .= ' ' . $block['className'];
    }

    // Get Horizontal Class
    if( !empty($block['align']) ) {
        $className .= ' align-' . $block['align'];
    }

    // Get Vertical Class (Inner Content Align)
    if( !empty($block['align_content']) ) {
        $className .= ' vertical-align-' . $block['align_content'];
    }

    // Get Text Align Class
    if( !empty($block['align_text']) ) {
        $className .= ' text-align-' . $block['align_text'];
    }

    // Get Full Height Class
    if( !empty($block['full_height']) ) {
        $className .= ' full-height';
    }

    // echo '';
    // print_r($block);


?>

<div    

    id="<?php echo esc_attr( $id ); ?>"
    class="<?php echo esc_attr( $className ) ; ?>">
    
    <h1>This is Code Example Block</h1>
    
</div>    
```
```