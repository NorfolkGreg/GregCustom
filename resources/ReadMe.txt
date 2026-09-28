============================================================
GregCustom
A WonderCMS Theme
============================================================
Contents

+ Colour Settings
+ Sample Colour Schemes
+ Sample Header Images
+ Image Display
+ Image Captions and Credits
+ Inserting Videos
+ Inserting Audio
+ Displaying "Cards"
+ Displaying Programming Code
+ Site Search Documentation
+ Suggested Styling Tweaks

============================================================
Colour Settings

The following notes describe all the variables used to set
the colours used in the theme's stylesheet, the file
"style.css".

Note the three variables marked  ** NEW in v2.0.0 **


--scrnbkgnd: Screen Background
Page content is limited to 900px width. Where the window
is wider this colour appears on either side.

--pagebkgnd: Page Background
Unless over written by the header, menu, main or footer
areas of the page this colour will be used.

--headerbkgnd: Header Background
This colour is used as a background to the Site and Page
titles.

--sitetitle: Site Title Text
The colour of the site title text.

--pagetitle: Page Title Text
The colour of the page title text.

--pagedestop: Page Contents Border
There is a 1px border above the page description that
appears beneath the Page Title. It can be useful to define
the boundary between the Page Title and Page Sescription
when the background of both is the same or similar in tone.
Where the colours are in sharp contrast it is recommended
to set it to match the --pagetitle colour.

--pagedesc: Page Description Text
The "Page Description" reproduces the text normally only
seen by search engines. It is usually better to show the
text in a colur that contrasts with that of the Page
Title.

--pagedesbkgnd: Page Description Background
The background of the Page Description Text needs to
contrast with the setting above.

--menubkgnd: Menu Background
The Menu Bar and any drop-downs opened to manage Sub-Pages.

--menubghvr: Menu Background on Hover
The background colour when the pointer hovers over a menu
option.

--menutext: Menu Bar Text
The colour of the text in the menu bar.

--menutxthvr: Menu Bar Text on Hover
The colour of both the text when the pointer hovers over a
menu and the colour of the bars in the Hamburger button.

--menubtn: Menu Button Background
The menu button is only seen on narrow screens. This is the
colour of the background of the button.

--maintop: Main Section Border
There is a 1px border over the main content area of the
page. It is useful to define the boundary between the
this and the Menu bar when the background of both is the
same or similar in tone. Where the colours are in sharp
contrast it is recommended to set it to match the
--mainbkgnd colour. Check both appearance on both wide
and narrow screens.

--maintext: Main Content Area Text
The colour for all text on the page except where
over-ridden by settings for the header, menu or footer
areas.

--mainbkgnd: Main Content Area Background
This is the default colour for the background of all text
on the page, except where over-ridden by settings for the
header, menu or footer areas.

--link: Link Text Colour
The colour of the text in all links link in the main and
footer areas of the page.

--linkhvr: Link Text Colour on Hover
The colour of the text in all links in the main and footer
areas when the. pointer hovers over a menu option.

--imagebdr: Image Border
The colour of the border placed around all images.

--caption: Image Caption Text
If a paragraph is assigned one of the classes "caption",
"captionright" or "captionleft" this is the color of the
text.

--captionbkgnd: Image Caption Background
If a paragraph is assigned one of the classes "caption",
"captionright" or "captionleft" this is its background
color.

--creditlink: Copyright/Credit Link      ** NEW in v2.0.0 **
Where a paragraph is assigned one of the classes "caption",
"captionright" or "captionleft" and includes a link within
a <span class="credit"> this is the color of the text.

--creditlinkhvr: Copyright/Credit Hover  ** NEW in v2.0.0 **
Where a paragraph is assigned one of the classes "caption",
"captionright" or "captionleft" and includes a link within
a <span class="credit"> this is the hover color of the text.

--section: Line Colour
When section tags are used and a class "overline" applied
this is the colour applied to the line of the border added
above the section.

--cardbdr: Card Border Colour
If a Section element is assigned the class "cards" this is
the colour of the rounded border applied to Article
elements within the section.
(See the Section "Displaying Cards" below for details on
the use of the three cardxxxx variables.)

--cardtext: Card Text Colour
If a Section element is assigned the class "cards" this is
the forground colour applied to Article elements within the
section.

--cardbkgnd: Card Background Colour
If a Section element is assigned the class "cards" this is
the background colour applied to Article elements within
the section.

--blockquote: Background Colour
The contents of a blockquote element are given this
background colour which appears with rounded corners and a
small amount of padding.

--warning: Special Note                  ** NEW in v2.0.0 **
Any element given the class "warning" will be assigned this
forground colour. Unique in the theme it is intened for
rare important messages to visitors.

--ftrbdr: Footer Border
There is a 1px border over the footer area of the page. It
can be useful to define the boundary between this and the
Main Content Area when the background of both is the same
or similar in tone. Where the colours are in sharp
contrast it is recommended to set it to match the
--mainbkgnd colour.

--ftrtext: Footer Text
The colour of text in the footer area.

--ftrbkgnd: Footer Background
Be aware that if there is little content on the page then
the colour set by --mainbkgnd will appear below the footer.


============================================================
Sample Colour Schemes

Below are some sample colour schemes using the variables
described above.

To implement them open the "syle.css" file found in the
"css" folder and wrap the existing variable definitions
in comment tags like this:

/*
variables to be ignored
*/

and then paste in one of the following sets of colour
settings:
____________________________________________________________
LightMono - See schemelightmono.png

From v0.0.5 this is the default Scheme.

Paste these settings back into style.css to return your
site's appearance to the default.

--scrnbkgnd: #333333;
--pagebkgnd: #dddddd;
--headerbkgnd: #dddddd;
--sitetitle: #ff0000;
--pagetitle: #000000;
--pagedestop: #000000;
--pagedesc: #f9f9f9;
--pagedesbkgnd: #999999;
--menubkgnd: #dddddd;
--menubghvr: #999999;
--menutext: #36383F;
--menutxthvr: #f9f9f9;
--menubtn: #909090;
--maintop: #333333;
--maintext: #000000;
--mainbkgnd: #fdfdfd;
--link: #0000ff;
--linkhvr: #ff0000;
--imagebdr: #000000;
--caption: #ffffff;
--captionbkgnd: #666666;
--creditlink: #ffff00;
--creditlinkhvr: #d7e7e7;
--section: #000000;
--cardbdr: #000000;
--cardtext: #000000;
--cardbkgnd: #efefef;
--blockquote: #d7e7e7;
--warning: #ff000;
--ftrbdr: #000000;
--ftrtext: #ffffff;
--ftrbkgnd: #999999;

____________________________________________________________
Original Dark - See schemeoriginaldark.png

--scrnbkgnd: #666666;
--pagebkgnd: #333333;
--headerbkgnd: #000063;
--sitetitle: #ff0000;
--pagetitle: #ffffff;
--pagedestop: #36383f;
--pagedesc: #666666;
--pagedesbkgnd: #ffffff;
--menubkgnd: #ffffff;
--menubghvr: #dfdfdf;
--menutext: #36383F;
--menutxthvr: #333333;
--menubtn: #909090;
--maintop: #333333;
--maintext: #ffffff;
--mainbkgnd: #333333;
--link: #ffff00;
--linkhvr: #ff0000;
--imagebdr: #ffffff;
--caption: #ffffff;
--captionbkgnd: #999999;
--creditlink: ffff00;
--creditlinkhvr: ff0000;
--section: #ffffff;
--cardbdr: #ffffff;
--cardtext: #ffffff;
--cardbkgnd: #000063;
--blockquote: #000055;
--warning: #ff0000;
--ftrbdr: #ffffff;
--ftrtext: #ffffff;
--ftrbkgnd: #333333;

__________________________________________________________
MintGreen - See schememintgreen.png

--scrnbkgnd: #999999;
--pagebkgnd: #c0e09d;
--headerbkgnd: #c0e09d;
--sitetitle: #ffff00;
--pagetitle: #ffff00;
--pagedestop: #36383f;
--pagedesc: #99ff11;
--pagedesbkgnd: #609020;
--menubkgnd: #90D050;
--menubghvr: #609020;
--menutext: #005000;
--menutxthvr: #99ff11;
--menubtn: #909090;
--maintop: #333333;
--maintext: #005000;
--mainbkgnd: #c0e09d;
--link: #cc5500;
--linkhvr: #ffaa00;
--imagebdr: #005000;
--caption: #99ff11;
--captionbkgnd: #609020;
--creditlink: #ffff00;
--creditlinkhvr: #ffaa00;
--section: #36383f;
--cardbdr: #005000;
--cardtext: #005000;
--cardbkgnd: #c0ee90;
--blockquote: #e7e7d7;
--warning: #ff00ff;
--ftrbdr: #36383f;
--ftrtext: #99ff11;
--ftrbkgnd: #609020;

____________________________________________________________
Carribbean Blue - See schemecaribbeanblue.png

--scrnbkgnd: #000033;
--pagebkgnd: #000033;
--headerbkgnd: #0099ff;
--sitetitle: #ffff00;
--pagetitle: #ffff00;
--pagedestop: #0099ff;
--pagedesc: #0000dd;
--pagedesbkgnd: #0099ff;
--menubkgnd: #ddffff;
--menubghvr: #0099ff;
--menutext: #0000dd;
--menutxthvr: #ffff00;
--menubtn: #909090;
--maintop: #0000dd;
--maintext: #0000ff;
--mainbkgnd: #94D8F6;
--link: #000033;
--linkhvr: #ffff00;
--imagebdr: #0000ff;
--caption: #ffffff;
--captionbkgnd: #0099ff;
--creditlink: #ffff00;
--creditlinkhvr: #000033;
--section: #0000dd;
--cardbdr: #0000ff;
--cardtext: #94D8F6;
--cardbkgnd: #2222ff;
--blockquote: #d7d7e7;
--warning: #ff0000;
--ftrbdr: #0000dd;
--ftrtext: #ffffff;
--ftrbkgnd: #0099ff;

============================================================
Sample Header Images

Code is in place in the theme to allow images to be
displayed in the area of the header above the Page
Description. Such images should be a minimum of 900px by
160px for wide screens and 600px by 150px for narrow
screens.

These need to be placed in an "images" sub-folder within
the theme folder to be displayed and named "headerwide.jpg"
and "headernarrow.jpg" for each size of screen. The wide
images are set to the left so any prominent feature in
them will stay fixed to the left of the window as it is
reduced in size. Likewise the narrow images are set to
the right.

The "resources" folder holds some sample images that can
be displayed as backgrounds to test the feature. These are:

The "originaldark" images are intended to show how an
organisation's logo could be added to that scheme.

The "mintgreen" images are intended to be used in
conjunction with the sample "Mint Green" colourscheme
whose variable definitions are listed above.

============================================================
Image Display

A 1px border is applied to all images and videos which, on
large screens will occupy the full width of the window and
shrink as the window is narrowed.

A class "left" or "right" can be applied to "img" tags. On
wide screens the image will be placed on that side and not
exceed 50% of the window width. On narrow screens all
images will occuply the full width of the window.
Similarly, classes "caption", "captionleft"
and"captionright" can be applied to "p" tags. Such
paragraphs should hold an image followed by the caption for
that image.

============================================================
Image Captions and Credits

To display a caption and/or an accreditation under an image
use the following structure

<p class="caption">
	<img src="" alt="">
	<span class="credit">&copy;date attribution</span>
	Caption Text
</p>

The credit paragraph is right aligned and reduced in size.
Links within the credit text and will have a distinctive
colour that changes on hover.

============================================================
Inserting Videos

To take advantage of some of the code built into the
GregCustom Theme you need to wrap the video code within the
following tags:

<div class="video">
    Your code here
</div>
____________________________________________________________
YouTube and Vimeo

Simply place the embed code for the clip you wish to add to
your site between the tags shown above, not the URL of the
clip itself.

For YouTube you find the required code by selecting the
"Share" option on the desired video and then clicking on
the "Embed" option indicated with the "</>" icon.

For Vimeo it's much the same. The Share option is indicated
by a "Paper Dart" icon and the Embed code option by the
"</>" icon.

I haven't explored whether the code built into the
theme works with other video hosting services.
____________________________________________________________
Uploaded Video

First use the WonderCMS file upload facility to upload the
video and an image, known as the "poster", to be shown
while the video is downloading, or until the user hits the
play button. Then add the following code:

<div class="video">
    <video controls="" style="width:100%" poster="/data/files/myimage.jpg">
        <source src="/data/files/myvideo.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>

substituting the name of your image for "myimage.jpg"
and your video for "myvideo.mp4". For the theme code to
work as intended both image and video should be of 16:9
aspect ratio and the image should have a ".jpg" extension.

============================================================
Inserting Audio

First use the WonderCMS file upload facility to upload the
the MP3 file that you wish to appear in a player. Then
insert the following code into the page:

<audio controls="">
    <source src="/data/files/myaudio.mp3">
</audio>

sbstituting "myaudio.mp3" for the name of your file. The
them code is designed to ensure the player fills the entire
available width of the screen/window.

============================================================
Displaying Cards

There is CSS code in the stylesheet that allows the user to
create "cards", areas where the contents is shown in
rounded corner boxes. To implements this you need to add
HTML code in this format:

<section class="cards">
    <article>
        First card content here
    </article>
    <article>
        Second card content here
    </article>
</section>

There is further styling code intended for use within the
<article> tags that can be used to format the content of
any card:

<h3><a href=""><img src="">Heading</a></h3>
<p>Content</p>

The images inserted within the <h3> tags will be floated
left and displayed at 200px x 150px.

============================================================
Displaying Programming Code

Place any programming code in the following tags:

<textarea class="source" readonly="">
  code fragment here
</textarea>

============================================================
Site Search Documentation

To activate the site seach facility simply create a page
with the name "search". This page can be marked as hidden
so it doesn't display on the menu, when it could just be
used as a secret tool for the site admin. If hidden but to
be seen by site visitors then you would need need to
provide a link to it in the footer or somewhere else.

To prevent pages being included in the results use the
WonderCMS' file upload facility upload a file named
"searchexclude.txt". This file should list the pages to be excluded from the results, one page name per line.

Note: For this feature the page name means that which
appears in the address bar of your browser, i.e. the part
after the final slash in the page's address. It can differ
from what appears in the menu, if ther version in the menu
has spaces or uppercase letters.

============================================================
Other Suggested Tweaks to "style.css"
____________________________________________________________
Adjusting for Menu Width:

By default the styling switches between Wide screen and
Narrow screen mode when the screen/window width reaches
600px. Typically, this allows for four or five items to
appear horizontally on the menu bar in wide screen mode
before wrapping occurs and the menu becomes corrupted.

To allow for a menu bar wider than 600px the style.css file
will need to be edited in two places. Search the file for

@media

and change the figure as needed to accomodate the options
in your menu.

____________________________________________________________
EoF Updated 28 September 2026
