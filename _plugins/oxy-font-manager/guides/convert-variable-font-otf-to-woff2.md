---
title: 'Convert Variable Font OTF to WOFF2'
---

**If you are using online font generators they will break variable fonts as they are designed for static font faces. They will remove all except the default font face.**

<figure class="wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper"><iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="281" loading="lazy" src="https://www.youtube.com/embed/2BxdUmEvqFA?feature=oembed" title="Convert Variable Font" width="500"></iframe></div></figure>Create a folder on your desktop. Open your terminal.

Type CD and drag your folder. That way you don't need to type your path.

## Build

```
<pre class="wp-block-preformatted">```
git <strong>clone</strong> --recursive https://github.com/google/woff2.git
cd woff2
make clean all
```
```

## Run

```
<pre class="wp-block-code">```
./woff2_compress path_to_font/myfont.ttf;
```
```

You will get a converted .woff2 file next to your file.

## GitHub Code

<figure class="wp-block-embed"><div class="wp-block-embed__wrapper">https://github.com/google/woff2 </div></figure>