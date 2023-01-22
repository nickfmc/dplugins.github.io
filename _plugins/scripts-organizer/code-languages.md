---
id: 10400
title: 'Code Languages'
date: '2021-04-19T15:56:09+00:00'
author: devusrmk
layout: scripts-organizer
guid: 'http://dplugins.local/?post_type=docs&#038;p=10400'
permalink: /scripts-organizer/code-languages/
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

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Languages.png)</figure>With Scripts Organizer you can write CSS, SCSS, JavaScript, HTML, and PHP.

The Header and the Footer blocks are HTML-based and wrap scripts and styles in closing tags.

In PHP you can write whatever you need (CSS, JavaScript, HTML, and PHP.)

## PHP

Use PHP same as you would write it inside functions.php. Wrap code with &lt;?php // Code // ?&gt;

```
<pre class="wp-block-code">```
<?php

$ulr = get_site_url();

?>
```
```

## HTML

If you need to write JavaScript or CSS wrap it with closing tags (style, script).

```
<pre class="wp-block-code">```
<style>
    .body{
        background: red;
    }
</style>

<h1>This is HTML Language Example</h1>

<script>
    $("h1").click(function(){
        alert("The Headline was clicked.");
    });
</script>
```
```

## CSS

If you select CSS you don't need to wrap it in a style tag same as you would not put it when you are writing code inside style.css

```
<pre class="wp-block-code">```
.body{
    background: red;
}
```
```

## SCSS

Same as for CSS you don't need to write a style tag.

```
<pre class="wp-block-code">```
h1{
    font-size: 3em;

    .page-title{
        font-size: 5em;
    }
}
```
```

## JavaScript

Same as for CSS you don't need to write style or in this case script tag.

```
<pre class="wp-block-code">```
$("h1").click(function(){
    alert("The Headline was clicked.");
});
```
```