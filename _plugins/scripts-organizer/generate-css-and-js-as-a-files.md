---
title: 'Create a file'
---

## Generate CSS and JS as a files

By default when you create Code Block and you choose JS, CSS, or SCSS, code will be generated as an inline Script or Style. And that is great if you are inserting critical and small code.

If you want to create an entire website theme or have an entire JavaScript in 1 file that you will be using across the entire website (all the pages) you will benefit if you create it as a file and cache it.

We made that easy for you. Whenever you choose JS, CSS, or SCSS from the dropdown in the header or the footer on the right side you will get an option with a checkbox to generate a file instead of creating it as an inline script or style.

If the checkbox is enabled file will be created. If the checkbox is disabled code will be injected as inline.

![](https://docs.dplugins.com/wp-content/uploads/2021/11/Screenshot-2021-11-09-at-12.01.32.png)

## Inline style or Script

```
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Inline Style */
        .body{ background: red; }
    </style>
</head>
<body>
    <h1>This is inline example</h1>
    <script>
        // Inline script
        $("h1").click(function(){ alert("The Headline was clicked.");});
    </script>    
</body>
</html>
```

## Create a file checked option

![](https://docs.dplugins.com/wp-content/uploads/2021/11/Screenshot-2021-11-09-at-12.01.52.png)

```
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    /* Link to the file */
    <link rel='stylesheet' id='scorg-style-29037-css'  href='#' type='text/css' media='all' />

</head>
<body>
    <h1>This is inline example</h1>
    
    /* Link to the file */
    <script src='#' id='scorg-script-13-js'></script>

</body>
</html>
```