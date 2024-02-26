# GregCustom
A responsive Wcms theme with resources to aid customisation.

## Preview - Wide Screens
On installation screens wider than 600px will look like this:

![Wide screen preview](/previewwide.jpg)

The body of any page is limited to a maximum 900px wide.

All text above the menu bar is taken from fields on the "Settings > Menu" and "Settings > Current Page" screens. When sub-pages are added, on hover, the menu shows these on drop-downs beneath the top level item

## Preview - Narrow Screens
![Narrow screen preview](/previewnarrow.jpg)
On narrow screens the Site and Page titles switch to left alignment. and the menu always shows the HOME page. Further menu options are revealed by clicking the [&equiv;] button. Sub-pages appear on a hover action.

## Other Features
Currently, the stylesheet only supports one level of sub-pages.

A 1px border is applied to all images. Images will occupy with full width of the window and will shrink as the window is narrowed.

A class "left" or "right" can be applied to an "img" tag. On wide screens the image will be placed on that side and not exceed 50% of the window width. On narrow screens all images will occuply the full width of the window.

Similarly, classes "caption", "captionleft" and "captionright" can be applied to "p" tags. Such paragraphs should hold an image followed by the caption for that image.

## Customisation Resources
A "resources" folder is included in the theme when it is installed. It is recommended that this is downloaded and deleted from the server as it performs no function there. In the folder will be found a "ReadMe.txt" file that covers the following topics:
#### Colour Schemes
How to use the list of variables setting the colour definitions for the theme. A number of sample colour scheme declarations are provied together with preview images of them.
#### Header Area
Notes concerning the "Page Contents" part of the header area and a description of how to add images in the header area that replace the default plain colour background. The resources include sample images to show how this feature can be used.

## Future Development
Contributions of additional colour schemes and header backgrounds that can be included in the "resources" folder in future versions of the theme are welcome together with any suggestions for tweaks to the theme.php or style.css file that you think may be useful to others.

## How to install
1. Copy this URL:
https://raw.githubusercontent.com/NorfolkGreg/GregCustom/master/wcms-modules.json
2. Login to your WonderCMS website.
3. Click "Settings" and then click "Themes".
4. Scroll to the bottom of the screen
5. Paste the copied URL into the CUSTOM MODULE field and click the ADD button.
6. Once uploaded, select the theme and click the  ACTIVATE button.
