---
id: 1474
title: 'Font Manager with Font preload'
date: '2021-01-03T18:31:24+00:00'
author: devusrmk
excerpt: 'Custom fonts are now available inside Oxygen Builder. Our solution is perfectly integrated inside Oxygen and all registered custom fonts will be visible in the dropdown list with the rest of the fonts. With our solution, you will be provided with an admin panel to upload and organize custom fonts.'
layout: swiss-knife
guid: 'http://dplugins.local/?post_type=docs&#038;p=1474'
permalink: /swiss-knife/font-manager/
inline_featured_image:
    - '0'
algolia_searchable_posts_records_count:
    - '4'
soon:
    - ''
rank_math_analytic_object_id:
    - '8'
rank_math_internal_links_processed:
    - '1'
algolia_posts_swiss-knife_records_count:
    - '4'
hide_title:
    - '0'
---

<figure class="wp-block-image">![](blob:https://docs.dplugins.com/0f37ac05-397a-43a6-8490-0fc6989d834e)</figure>Custom fonts are now available inside Oxygen Builder. Our solution is perfectly integrated inside Oxygen and all registered custom fonts will be visible in the dropdown list with the rest of the fonts. With our solution, you will be provided with an admin panel to upload and organize custom fonts.

## Font Manager

Is disabled by default as all Swiss Knife features. To Enable Font Manager open the Swiss Knife Features page under Swiss Knife &gt; Features. Activate **Enable Font Manager** feature, Hit Save. After you saved preferences you need to refresh the page to see **Font Managers Page**.

## What is Font Family

**If you have Elegant Custom Fonts plugin disable it first. For Oxygen to get custom font needs to use the Elegant Custom Fonts class in PHP.**

To use fonts in Oxygen you need to do two things. The first one is to register a font group know as "Font Family". Every font family can consist of several font faces. Font face defines font-weight and that weight is italic or not.

**Example:** Helvetica (*Font family*)  
\- Regular ( Font face with the weight of 400)  
\- Italic ( Font face with the weight of 400, italic)  
\- Bold ( Font face with the weight of 700)  
\- Bold Italic ( Font face with the weight of 700, italic)

## Add Font Family

Open **Swiss Knife &gt; Font Manager &gt; Add Font Family**

Hit **Add Font Family** button

<figure class="wp-block-image size-full is-resized">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-17-at-19.43.37.png)</figure>Type Font Family name that you want to see later in Oxygens font selection and hit Save Font Family

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/save-font-family.png)</figure><figure class="wp-block-image size-full is-resized">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-17-at-19.54.39.png)</figure>## Register Font Face.

For a font to work we need to have a registered font family and font face inside each font family. **Every font family can have multiple font faces**

The font face consists from:

- Font Weight ( 100 &gt; 800 )
- Link to .WOFF or .WOFF2 file
- Font Display is optional but gives the option to fine-tune your performance
- Font style ( Regular or *Italic*. Regular is by default )
- Preload font

To get desirable results please match Font Weight with the uploaded font file.

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/font-face-settings-768x588-1.png)</figure><figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-17-at-20.36.34-1024x507-1.png)</figure>## Uploading Font Files

.WOFF and .WOFF2 files are not allowed for upload for WordPress by defaults. You can unlock font files upload by going to the Swiss Knife features page and activate **Allow upload Woff and Woff2**. After you have done uploading the files, the best practice for security reasons is to disable that features.

## Font Display

Font display is a rule to explain to the browser should he wait with displaying content or waiting for the font file to be loaded before the content is shown.

You can set it for each font face separately.

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-17-at-21.20.42-1.png)</figure>### Font display rules explained:

- **Auto (default):** This allows the browser to use its default method for loading, which is most often similar to the block value.
- **Block:** Instructs the browser to briefly hide the text until the font has fully downloaded. More accurately, the browser draws the text with an invisible placeholder then swaps it with the custom font face as soon as it loads. This is also known as a “flash of invisible text” or FOIT.
- **Swap:** Instructs the browser to use the fallback font to display the text until the custom font has fully downloaded. This is also known as a “flash of unstyled text” or FOUT.
- **Fallback:** Acts as a compromise between the auto and swap values. The browser will hide the text for about 100ms and, if the font has not yet been downloaded, will use the fallback text. It will swap to the new font after it is downloaded, but only during a short swap period (probably 3 seconds).
- **Optional:** Like fallback, this value tells the browser to initially hide the text, then transition to a fallback font until the custom font is available to use. However, this value also allows the browser to determine whether the custom font is even used at all, using the user’s connection speed as a determining factor where slower connections are less likely to receive the custom font.

[Read more on CSS Tricks](https://css-tricks.com/almanac/properties/f/font-display/)

## Preload font

The latest version of Swiss Knife will allow you to preload fonts. Preloaded font means that font will be loaded before CSS file. With that technique, you will not be blinking the page and you will not see font swap when the font file is loaded as it will be loaded before CSS.

**Important to note:** Preloading font is render-blocking and the website will wait for the font to load before the website starts loading the content. Preload only visually most important font files. Such as H1 headlines. You will not notice too much swap for body font, so it's not worth reducing website performance.

**Preload optimisations under the hood.**

We did smart font preloading in terms if you uploaded both .WOFF and .WOFF2 files, it's unnecessary to load both files. We will preload only .WOFF2 file. If you uploaded only 1 file. That file will be preloaded.

## Font Resources

If you need google fonts, by going to the https://fonts.google.com/ and downloading it from there you will only get .TTF file formats. .TTF file formats are files that you install on your local machine and not upload for your website.

**To get google .WOFF or WOFF2 files you need to go to:**

- [**Web Font Loader ( by Matt Hias )**](https://webfontloader.altmann.de/)
- **[Google Webfonts Help](https://google-webfonts-helper.herokuapp.com/fonts)**er

## Font generators

If you only have .TTF or .OTF file formats you need to convert those fonts with online font generators:

- **[Trans Fonter](https://transfonter.org/)**
- **[Font Squirrel](https://www.fontsquirrel.com/tools/webfont-generator)**

## Disable Oxygens Google Fonts

If you are self-hosting google fonts **for better performance** disable Oxygens Google Fonts.

Go to Oxygen &gt; Settings &gt; Bloat Eliminator ( Tab ) &gt; **Disable Google Fonts**

<figure class="wp-block-image size-large">![](https://docs.dplugins.com/wp-content/uploads/2021/10/disable-fonts-1024x568.png)</figure>## System fonts

Now with the **font manager feature enabled you will get a** local font family. System font family will not load any font file. It will pick up your system fonts.

**This font family is the best option you can get in terms of website performance.**

**System fonts rule:** -apple-system, “.SFNSText-Regular”, “San Francisco”, “Roboto”, “Segoe UI”, “Helvetica Neue”, “Lucida Grande”, sans-serif;

It will be listed with the rest of the fonts inside fonts list

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-17-at-21.56.02.png)</figure>**More about system**<https://medium.design/system-shock-6b1dc6d6596f#.iw7sldtd6> **fonts**

## Transferring the website to the new domain

For better performance, we are generating a CSS file. The file is static and it's much better than pulling out from the database on every page load.

That also means that when you transfer the website to another domain CSS file will still pointing to the old location.

**Solution: go to Font Manager and press save. CSS will be regenerated all paths will be correct.**

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-12-at-21.13.17.png)</figure>