# FancyBox Lightbox Plugin for WordPress

## Description

[fancyBox](https://noorsplugin.com/wordpress-fancybox-plugin/) plugin is a fancy responsive lightbox tool for WordPress. It allows you to pop up content in lightbox using the popular jQuery fancyBox library. The lightbox looks great on desktop as well as mobile devices. It was developed by [noorsplugin](https://noorsplugin.com/) and is currently being used on hundreds of websites.

## WordPress FancyBox Plugin Features

* Responsive lightbox popup.
* Designed with a mobile first approach so it looks great on desktop, mobile and tablet devices.
* Support for common touch gestures such as double-tap, pinch-in and pinch-out (for image viewing), horizontal swipe for navigation etc.
* Open lightbox popup from either a text link or a thumbnal image link.
* Compatible with WordPress multisite
* Automatically recognize popular video sites such as YouTube, Vimeo for easy viewing in lightbox
* Support hardware accelerated animations for better performance.
* Use a simple shortcode anywhere on your site (Post, Page, Homepage etc.)to pop up content in lightbox
* Graphics, including loading icons, are created with CSS to keep it lightweight. 
* Open external page in lightbox using iframe.
* Customize the visuals and layout using CSS.

## WordPress FancyBox Plugin Usage

### Image in lightbox

Create a new post/page and use the following shortcode to create a text/image link which will open lightbox once clicked:
```
[wp_fancybox_media url="http://example.com/wp-content/uploads/images/overlay.jpg" type="image" hyperlink="click here to pop up image"]
```
here, url is the link to the media file that you wish to open in lightbox and hyperlink is the anchor text/image.
```
[wp_fancybox_media url="http://example.com/wp-content/uploads/images/overlay.jpg" type="image" hyperlink="http://example.com/wp-content/uploads/images/thumb.jpg"]
```
### YouTube video in lightbox
```
[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g&autoplay=0" type="youtube" wiidth="640" height="360" hyperlink="click here to pop up youtube video"]
```
### Vimeo video in lightbox
```
[wp_fancybox_media url="https://vimeo.com/1084537" type="vimeo" width="640" height="360" hyperlink="click here to pop up vimeo video"]
```
### Caption in lightbox
```
[wp_fancybox_media url="http://example.com/wp-content/uploads/images/overlay.jpg" caption="overlay image" type="image" hyperlink="click here to pop up image"]
```
### Alternate Text for an Image
```
[wp_fancybox_media url="http://example.com/wp-content/uploads/images/overlay.jpg" caption="overlay image" type="image" hyperlink="http://example.com/wp-content/uploads/images/thumb.jpg" alt="Thumbnail image description"]
```
### Custom CSS

You can specify your own CSS class in the shortcode to customize a text/image link.
```
[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g&autoplay=0" type="youtube" wiidth="640" height="360" hyperlink="click here to pop up youtube video" class="custom_class"]
```
Multiple CSS classes can be separated with a space. For example:
```
[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g&autoplay=0" type="youtube" wiidth="640" height="360" hyperlink="click here to pop up youtube video" class="custom_class custom_class2"]
```
## Documentation

For detailed documentation please visit the [WordPress fancyBox Plugin](https://noorsplugin.com/wordpress-fancybox-plugin/) page.
