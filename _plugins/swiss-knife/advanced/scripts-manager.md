---
title: 'Scripts Manager'
---

Include Scripts and Styles in Oxygen websites with Swiss Knife. Crafted for Oxygen Builder with security in mind. Upload scripts and styles are enabled only when you need them.

Is disabled by default as all Swiss Knife features. To Enable Font Manager open the Swiss Knife Features page under Swiss Knife &gt; Features. Activate **Enable Scripts Manager** feature, Hit Save. After you saved preferences you need to refresh the page to see **Scripts Managers Page**.

## Add Script or Style

Open **Swiss Knife &gt; Scripts Manager &gt; + Add New Script**

Hit **+ **Add New Script**** button

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-17.55.50-2.png)</figure><figure class="wp-block-image size-large">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-18.04.06-1024x985.png)<figcaption>Example of Script/Style card with all available settings</figcaption></figure>## Script name

This field is used for two reasons. One is to help you find script in scripts list. Second is to generate enqueue code.

## Script Type

Choose option is between JavaScript or CSS.

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-18.31.45.png)</figure>If your file have extension .js select JavaScript and if your file have extension .css use CSS from drop down

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-18.27.17.png)</figure>## Script Location

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-18.31.36.png)</figure>Best practice is to register .CSS in header (before body) and .JavaScript in the footer (after body).

Reason behind it is that you want you elements inside body to be styled with CSS as soon as possible. JavaScript you want in footer as you probably want that page is rendered first before user start interacting what page.

## Include Type

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-18.42.17.png)</figure>### Enqueue

With this option, the script will be included on every page of your website. This is useful if you are including CSS such as framework or main theme JavaScript and there you have a toggle for navigation and you will definitely need that your navigation to work on every page.

### Register

When you register a script, it will be ready for the website but it will not be triggered and displayed on the website until you tell your script on the page or the template.

To do that you can copy the trigger code in two locations. You can find the copy option close to the edit button when the card is in the collapsed state. When the card is in the expanded state, you will find “Click to copy” text in a grey block.

<figure class="wp-block-image size-large">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-19.01.10-1024x327.png)</figure>The copied code can now be pasted inside a code block on the Pages or Template Pages where you want that script to be triggered.

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-19.05.19.png)</figure>Note: you can paste it even in reusable element. If you have the same wp\_enqueue\_script('script\_name'); several times on the page, it will still call that script only once without any errors.

## Frontend Only

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-19.07.19.png)</figure>This option is for scripts that you don't need inside Oxygen Builder and only on frond-end. A typical use case is when you don't want animation scripts inside oxygen, but you need your Frameworks CSS to be rendered everywhere.

## Upload file

<figure class="wp-block-image size-large">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-19.09.09-1024x78.png)</figure>In this field, it’s possible to paste scripts and styles that are either self-hosted or from a CDN. Paste CDN script inside input field or use WordPress media uploader by selection arrow up.

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Uplaod-Scipt.gif)</figure>## Allow Scripts and Styles upload

By default, uploading of Scripts and Styles in WordPress is not allowed and you will get an error if you try to do so.

<figure class="wp-block-image size-full">![](https://docs.dplugins.com/wp-content/uploads/2021/10/Screenshot-2021-03-19-at-19.25.46.png)</figure>You need to go to Swiss Knife features and **Allow CSS/JS Uploads**. For best practices and security reason use this option only in local setup or enable it only during scripts upload. Disable it after you finished process.