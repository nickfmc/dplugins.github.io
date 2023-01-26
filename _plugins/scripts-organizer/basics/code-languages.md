---
title: 'Code Languages'
---

![](../../img/code-languages/Languages.png)

With Scripts Organizer you can write CSS, SCSS, JavaScript, HTML, and PHP.

The Header and the Footer blocks are HTML-based and wrap scripts and styles in closing tags.

In PHP you can write whatever you need (CSS, JavaScript, HTML, and PHP.)

## PHP

Use PHP same as you would write it inside functions.php. Wrap code with &lt;?php // Code // ?&gt;

```php
<?php

$ulr = get_site_url();

?>

```

## HTML

If you need to write JavaScript or CSS wrap it with closing tags (style, script).

```html
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

## CSS

If you select CSS you don't need to wrap it in a style tag same as you would not put it when you are writing code inside style.css

```css
.body{
    background: red;
}
```

## SCSS

Same as for CSS you don't need to write a style tag.

```scss
h1{
    font-size: 3em;

    .page-title{
        font-size: 5em;
    }
}
```

## JavaScript

Same as for CSS you don't need to write style or in this case script tag.

```js
$("h1").click(function(){
    alert("The Headline was clicked.");
});
```