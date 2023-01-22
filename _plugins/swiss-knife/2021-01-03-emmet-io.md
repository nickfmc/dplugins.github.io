---
id: 1476
title: 'Emmet.io — the Essential Toolkit for Web-Developers'
date: '2021-01-03T18:28:55+00:00'
author: devusrmk
layout: swiss-knife
guid: 'http://dplugins.local/?post_type=docs&#038;p=1476'
permalink: /swiss-knife/emmet-io/
inline_featured_image:
    - '0'
algolia_searchable_posts_records_count:
    - '3'
soon:
    - ''
rank_math_analytic_object_id:
    - '10'
rank_math_internal_links_processed:
    - '1'
algolia_posts_swiss-knife_records_count:
    - '3'
hide_title:
    - '0'
---

Emmet is a plugin for many popular text editors which greatly improves HTML &amp; CSS workflow. It's now integrated with Oxygen Builder as a Swiss Knifes feature **Code Hint**. It's packaged under the Code Hint feature as it is hard to draw the line when one starts and another ends. Those two features do not overlap they extents one another.

With Emmet enabled you will wrote code faster as you will have visual autocomplete.

## HTML Abbreviations

Emmet extension can track abbreviations that the user enters in some known syntaxes like HTML and CSS. When a user enters something that looks like an Emmet abbreviation, the extension starts abbreviation tracking (adds emmet-abbreviation class to a text fragment). When abbreviation becomes complex (expands to more than one element), it displays abbreviation preview:

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/emmet-capture.gif)</figure>Here’s an example: this abbreviation:

```
<pre class="wp-block-code">```
#page>div.logo+ul#navigation>li*5>a{Item $}
```
```

To complete function press "**TAB"** key.

# CSS Abbreviations

While Emmet abbreviations are good for generating HTML, XML or any other structured markup, it may look useless for CSS. You don’t want to write CSS selectors and transform them to CSS selectors, right? The only thing Emmet can do for you is to provide shorthands for CSS properties, but editors with native snippets and autocomplete can help you way better.

Actually, Emmet has something to offer.

For CSS syntax, Emmet has a lot of predefined snippets for properties. For example, you can expand `m` abbreviation to get `margin: ;` snippet. But you don’t want just `margin` property, you want to *specify a value* for this property. So you have to manually type, let’s say, `10px`.

Emmet can greatly optimize your workflow here: you can *inject value directly into abbreviation*. To get `margin: 10px;` you can simply expand the `m10` abbreviation. Want multiple values? Use a hypen to separate them: `m10-20` expands to `margin: 10px 20px;`. Negative values? No problem: precede the first value with hyphen and all the rest with double hyphens: `m-10--20` expands to `margin: -10px -20px;`

## How it works?

Emmet has a special CSS resolver that expands such abbreviations into a complete CSS property.

Here’s what happens when you expand `m10` abbreviation.

First, it looks for a `m10` snippet definition in `snippets.json`. If it’s found, it simply outputs it as a regular snippet. Otherwise, it *extracts value* from abbreviation.

To provide best user experience, resolver doesn’t introduce any special value separator: it’s much faster to type `m5` rather than `m:5`. So it needs to find a value bound: *a first occurrence of digit or hyphen is treated as a value bound*. In `m10` example, `m` is *property part* and `10` is *value part*.

When property part is found, resolver searches for the snippet definition in `snippets.json`. For an `m` part, it will find `"m": "margin:|;"` definition (`|` character is used as a caret position reference when the snippet is expanded).

The snippet definition looks like a CSS property (this is very important!) so Emmet is able to split it to a CSS property and value and place transformed value part at caret position (the `|` character).

## Supplying values with units

By default, when you expand an abbreviation with integer value, Emmet outputs it with a `px` unit: `m10` → `margin: 10px;`. If you’re expanding an abbreviation with a float value, it is outputted with an `em` unit: `m1.5` → `margin: 1.5em;`. But you can explicitly provide the unit name, just by putting any alpha characters right after value: `m1.5ex` → `margin: 1.5ex;`, `m10foo` → `margin: 10foo;`.

If you’re explicitly defining units, you don’t need to use hyphens to separate values anymore: `m10ex20em` → `margin: 10ex 20em;`, `m10ex-5` → `margin: 10ex -5px;`.

## Value aliases

Emmet has a few aliases for commonly used values:

- `p` → `%`
- `e` → `em`
- `x` → `ex`

You can use aliases instead of full units:

- `w100p` → `width: 100%`
- `m10p30e5x` → `margin: 10% 30em 5ex`

## Color values

Emmet supports hex color values, like this: `c#3` → `color: #333;`. The `#` sign is a *value separator* so you don’t need to use hyphen to separate it. For example, `bd5#0s` expands to `border: 5px #000 solid`: the `#` sign separates color from `5` and since `s` (alias to `solid`) is not a hexadecimal character, it can be used without `-` value separator.

You can write one, two, three or six characters as color value:

- `#1` → `#111111`
- `#e0` → `#e0e0e0`
- `#fc0` → `#ffcc00`

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/EmmetColors-Autocomplete.gif)</figure>## Unit-less properties

Some CSS properties are defined as *unit-less*, e.g. no unit suffix will be outputted: `lh2` → `line-height: 2;`, `fw400` → `font-weight: 400;`.

These values are: `'z-index`, `line-height`, `opacity` and `font-weight` but you can override them with `css.unitlessProperties` preferences.

## !important modifier

You can add `!` suffix at the end of any CSS abbreviation to get `!important` value:

```
<pre class="wp-block-code">```
p!+m10e!
```
```

...will produce

```
<pre class="wp-block-code">```
padding:  !important;
margin: 10em !important;
```
```