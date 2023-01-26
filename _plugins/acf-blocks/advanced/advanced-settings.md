---
title: Advanced Settings
---

**This is available in version 1.1.0 and above**

Those options are disabled by default as they may overwhelm beginners. Scroll to the bottom of the settings and enable it by switching the toggle.

{: .col-2}
![](../../img/advanced-scrog-1.png){: .half-img}
![](../../img/advanced-scrog-2.png){: .half-img}

## JSX (for inner blocks)
To enable adding blocks inside your block you need to:

1. Enable it under **Advanced Mode &gt; JSX (for inner blocks)**
2. Add `<InnerBlocks/>` inside your code

```
<div class="container">
    <InnerBlocks/>
</div>
```

## Insert multiple times on same post or page
If this one is disabled you can add block only once per post or page.

## Visible in \[+\] Add Block panel
If this option is disable user will not be able to add block by using those tree options. Block will then needs to be added programmatically.

![](../../img/advanced-add-new.png)

Read more about "Inserter" on [WordPress Reference Guide.](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-supports/)


#Inserter
## Define Horizontal Align Options

This will allow you to add horizontal align classes from the toolbar. You can choose witch options you want to add to the toolbar.

{: .col-2}
![](../../img/advanced-options.png)
![](../../img/advanced-max-w.png)

{: .col-2}
![](../../img/advanced-options-2.png)
![](../../img/advanced-max-w-2.png)

```php
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

## Vertical Align
Will allow you to set Align top, Align middle and Align bottom

![](../../img/advanced-align-vertical.png)

## Text Align
Will allow you to set Align text left, Align text center, Align text right

![](../../img/advanced-align-horizontal.png)

### Horizontal, Vertical and Text Align Default
You can predefine selected option in the toolbar and the front end, when you are adding block to the page.

## Full Height
This option is toggle state and not dropdown select. It will toggle full-height class.

![](../../img/advanced-full.png)

## Edit Mode inside block
If this option is not enabled you will get ACF fields in sidebar. If this option is enabled you can edit ACF fields directly inside block area. If edit mode inside block is active you will not see ACF fields in the sidebar at the same time.

--- 

![](../../img/advanced-edit.png)

--- 

![](../../img/advanced-edit-2.png)

--- 

## Reusable
Enables option to save it as Reusable block

![](../../img/advanced-reusable.png)

## Lock
After enabling this options you can find it under toolbar &gt; advanced options (tree dots).

![](../../img/advanced-lock.png)

Locking block will give you several options where you can apply lock state.

![](../../img/advanced-lock-2.png)

## Dimensions (Margin, Padding)

Will unlock options in sidebar to add Margin and Padding

![](../../img/advanced-dimensions.png)

## HTML anchor

Will replace automatic generated ID values to help you link easier to the current block

![](../../img/advanced-html-anchor.png)

## Code Boilerplate

```php
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