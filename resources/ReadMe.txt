============================================================
GregCustom
A WonderCMS Theme
============================================================
Contents

+ Colour Settings
+ Sample Colour Schemes
+ Sample Header Images
+ Other Suggested Tweaks

============================================================
Colour Settings

The following notes describe all the variables used to set 
the colours used in the theme's stylesheet, the file 
"style.css". 

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

--menutxthvr: Menu Bar Txt on Hover
The colour of the text when the pointer hovers over a menu 
option.

--menubtn: Menu Button Background
The menu button is only seen on narrow screens. The three 
bars are black and part of the menu.png image. The 
background of the button can be changed with this setting.

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
Be aware that if there is little content in the footer 
section, then the colour set by --mainbkgnd will appear 
below.

--section: Line Colour
When section tags are used and a class "overline" applied
this is the colour applied to the line of the border added
above the section.

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
--ftrbdr: #000000;
--ftrtext: #ffffff;
--ftrbkgnd: #999999;
--section: #000000;

____________________________________________________________
Original Dark - See schemeoriginaldark.png

--scrnbkgnd: #999999;
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
--caption: #000000;
--captionbkgnd: #999999;
--ftrbdr: #ffffff;
--ftrtext: #ffffff;
--ftrbkgnd: #333333;
--section: #ffffff;

____________________________________________________________
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
--menutext: #336608;
--menutxthvr: #99ff11;
--menubtn: #909090;
--maintop: #333333;
--maintext: #3C6C08;
--mainbkgnd: #c0e09d;
--link: #0000ff;
--linkhvr: #d030d0;
--imagebdr: #999999;
--caption: #99ff11;
--captionbkgnd: #609020;
--ftrbdr: #36383f;
--ftrtext: #99ff11;
--ftrbkgnd: #609020;
--section: #36383f;

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
--link: #000030;
--linkhvr: #ff0000;
--imagebdr: #000000;
--caption: #ffffff;
--captionbkgnd: #0099ff;
--ftrbdr: #0000dd;
--ftrtext: #ffffff;
--ftrbkgnd: #0099ff;
--section: #0000dd;

============================================================
Sample Header Images

Code is in place in the theme to allow images to be 
displayed in the area of the header above the Page
Description. Such images should be a minimum of 900px by
160px for wide screens and 600px by 150px for narrow
screens. 

These need to be placed in the themes "images" folder to 
be displayed and named "headerwide.jpg" and 
"headernarrow.jpg" for each size of screen. The wide 
images are set to the left so any prominent feature in 
them will stay fixed to the left of the window as it is 
reduced in size. Likewise the narrow images are set to 
the right.

The "resources" folder holds some sample images that can 
be displayed as backgrounds to test the feature. These are:

The "originaldark" images are intended to show how a 
organisations logo could be added to that scheme.

The "mintgreen" images are intended to be used in 
conjunction with the sample "Mint Green" colourscheme 
whose variable definitions are listed above.

============================================================
Other Suggested Tweaks to "style.css"
____________________________________________________________
Page Contents:
In the header area the default stylesheet include a bar 
displaying the page contents. The text displayed here is 
also placed in the code that search engines use to 
determine how to rank the page against any search 
criteria. It is, therefore, probably not best practice to 
keep it as short as might be desired to describe the page 
contents appropriately for search engines.

To stop the display of this bar open the style.css file 
and search for: 

header h2

It appears in two places (for wide and narrow screens). 
Remove all the content that appears in braces {} 
following it and insert instead:

display: none;

You may prefer to use CSS comment marks around the 
original code so it is easy to restore should you change 
your mind. Do this:

/*
code to be ignored
*/
____________________________________________________________
EoF Updated 1 March 2024