---
title: 'Add Font Face'
---

<figure class="wp-block-image size-large">![screenshot 2022 03 10 at 20.25.55](https://docs.dplugins.com/wp-content/uploads/2022/03/Screenshot-2022-03-10-at-20.25.55-800x386.png)</figure><figure class="wp-block-image size-large">![screenshot 2022 03 10 at 20.31.55](https://docs.dplugins.com/wp-content/uploads/2022/03/Screenshot-2022-03-10-at-20.31.55-800x730.png)</figure>## Font Weight

Available options 100 to 900

## Upload Woff and Woff2

1. You can paste CDN
2. You can paste the local path
3. You can press the upload icon and the media library will pop up. After that, you can upload font files same as any other media

## Font Display

`auto` - The font-display strategy is defined by the user agent.

`block` - Gives the font face a short block period and an infinite swap period.

`swap` - Gives the font face an extremely small block period and an infinite swap period.

`fallback` - Gives the font face an extremely small block period and a short swap period.

`optional` - Gives the font face an extremely small block period and no swap period.

## Font Italic

If activated defines that font face is italic

## Preload

It will preload web fonts using `rel="preload"` to remove any flash of unstyled text.

**Note:** Don't use it for all font faces as this font face will be loaded before content. More font faces you add users will wait for more to load content. use it for Titles as their flash is most visible