=== WP fancybox ===
Contributors: naa986
Donate link: https://noorsplugin.com/
Tags: fancybox, gallery, image, photo, lightbox
Requires at least: 4.7
Tested up to: 6.8
Stable tag: 1.0.4
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

View image, YouTube video, Vimeo video, inline HTML in lightbox. Add fancybox lightbox effect to your WordPress site.

== Description ==

[WP fancybox](https://noorsplugin.com/wordpress-fancybox-plugin/) plugin adds fancybox lightbox effect to your WordPress website. The lightbox looks great on desktop as well as mobile devices.

=== WP fancybox Features ===

* Responsive lightbox popup using fancybox
* Designed with a mobile first approach so it looks great on desktop, mobile and tablet devices
* Quick and easy setup
* Open lightbox popup from either a text link or a thumbnail image link
* YouTube video popup
* Vimeo video popup
* Use a simple shortcode to pop up content in lightbox

=== How to Use WP fancybox ===

**Image in lightbox**

Create a new post/page and use the following shortcode to create a text/image link which will open lightbox once clicked:

`[wp_fancybox_media url="https://example.com/wp-content/uploads/images/overlay.jpg" hyperlink="click here to pop up image"]`

here, url is the link to the media file that you wish to open in lightbox and hyperlink is the anchor text/image.

`[wp_fancybox_media url="https://example.com/wp-content/uploads/images/overlay.jpg" hyperlink="https://example.com/wp-content/uploads/images/thumb.jpg"]`

**YouTube video in lightbox**

`[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g" hyperlink="click here to pop up youtube video"]`

**Vimeo video in lightbox**

`[wp_fancybox_media url="https://vimeo.com/1084537" hyperlink="click here to pop up vimeo video"]`

**Alternate Text for an Image**

`[wp_fancybox_media url="https://example.com/wp-content/uploads/images/overlay.jpg" hyperlink="https://example.com/wp-content/uploads/images/thumb.jpg" alt="Thumbnail image description"]`

**Custom CSS**

You can specify your own CSS class in the shortcode to customize a text/image link.

`[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g" hyperlink="click here to pop up youtube video" class="custom_class"]`

Multiple CSS classes can be separated with a space. For example:

`[wp_fancybox_media url="https://www.youtube.com/watch?v=Vpg9yizPP_g" hyperlink="click here to pop up youtube video" class="custom_class custom_class2"]`

For detailed documentation please visit the [WordPress fancybox](https://noorsplugin.com/wordpress-fancybox-plugin/) plugin page

== Installation ==

1. Go to the Add New plugins screen in your WordPress Dashboard
1. Click the upload tab
1. Browse for the plugin file (wp-fancybox.zip) on your computer
1. Click "Install Now" and then hit the activate button

== Frequently Asked Questions ==

= Can this plugin be used to open an image in lightbox? =

Yes.

= Can I use this plugin to open a YouTube video in lightbox? =

Yes.

= Can I use this plugin to open a Vimeo video in lightbox? =

Yes.

== Screenshots ==

1. Image popup in lightbox
2. YouTube video Demo in lightbox
3. Vimeo video Demo in lightbox

== Upgrade Notice ==
none

== Changelog ==

= 1.0.4 =
* Updated to fancybox 5.0.36.

= 1.0.3 =
* Updated to fancybox 4.

= 1.0.2 =
* Made some security related improvements in the plugin
* Updated fancybox to 3.5.7

= 1.0.1 =
* First commit
