# GregCustom
A responsive Wcms theme with resources to aid customisation.

## Preview - Wide Screens
On installation screens wider than 600px will look like this:

![Wide screen preview](/previewwide.jpg)

The body of any page is limited to a maximum 900px wide.

The header showing the blue background and logo disc is an easily deleted or substituted background image. If deleted, by default the plain dark blue background colour is revealed. All text above the menu bar is taken from fields on the "Settings > Menu" and "Settings > Current Page" screens. When sub-pages are added, on hover, the menu shows these on drop-downs beneath the top level item

## Preview - Narrow Screens

![Narrow screen preview](/previewnarrow.jpg)

On narrow screens the Site and Page titles switch the left alignment and an alternative background image is displayed. The menu always shows the HOME page. Further options are revealed by clicking the [&equiv;] button.

The menu reveals sub-pages on a hover action, producing the usual problems on touchscreen devices. (I am not aware of a coding technique to avoid such touchscreen issues, without editing to the index.php file, which is not recommended by Wcms.)

Currently, the stylesheet dos not support multiple sub-page levels.

## Other Features of the Theme
When "section" tags are applied to the site a thin white line is added above the block.

When the class "caption" is added to an tag a thin white border is applied (intended for use on images!)

When a class "left" or "right" is applied to an <img> tag the image will have a thin white boarder addded. On wide screens the image will be placed to one side and not exceed 50% of the window width. On narrow screens the image will occuply the full width.

## How to install
1. Copy this URL:
https://raw.githubusercontent.com/NorfolkGreg/GregCustom/master/wcms-modules.json
2. Login to your WonderCMS website.
3. Click "Settings" and then click "Themes".
4. Scroll to the bottom of the screen
5. Paste the copied URL into the CUSTOM MODULE field and click the ADD button.
6. Once uploaded, select the theme and click the  ACTIVATE button.
