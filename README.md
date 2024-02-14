# GregCustom
A responsive Wcms theme with resources to aid customisation.

## Preview - Wide Screens
On installation screens wider than 600px will look like this:

![Wide screen preview](/previewwide.jpg)

The body of any page is limited to a maximum 900px wide.

The CSS file installed with the theme allows the plain dark blue header background to be replaced with an image. Sample images and guidance notes are provided in a "resources" folder that is installed with the theme.

All text above the menu bar is taken from fields on the "Settings > Menu" and "Settings > Current Page" screens. When sub-pages are added, on hover, the menu shows these on drop-downs beneath the top level item

## Preview - Narrow Screens

![Narrow screen preview](/previewnarrow.jpg)

On narrow screens the Site and Page titles switch to left alignment. An alternative background image can displayed.

The menu always shows the HOME page. Further options are revealed by clicking the [&equiv;] button. Sub-pages appear on a hover action.

Currently, the stylesheet only supports one level of sub-pages.

## Other Features of the Theme
### Colour Schemes
The "style.css" file starts with a set of variables that set all the colours used in the default theme. The "resources" folder installed with the theme contains a file "colourschemes.txt". It contains some hints and tips on how the variables are used. The file includes a number of sample colour scheme declarations. The folder also holds preview images of them.
### Header Area
The theme's "images" folder holds some sample images that can be displayed as backgrounds to the area of the header that, in the default installation, is dark blue. Rename any 900px image to "headerwide.jpg" or any 600px wide image to "headernarrow.jpg" and they will replace the dark blue area in the wide and narrow screens. The wide images are set to the left so any prominent feature in them will stay fixed to the left of the window as it is reduced in size. Likewise the narrow images are set to the right.
### Main Area
A 1px border is applied to all images. Images will occupy with full width of the window and will shrink as the window is narrowed. A class "left" or "right" can be applied to an "img" tag. On wide screens the image will be placed on that side and not exceed 50% of the window width. On narrow screens all images will occuply the full width of the window.

## Future Development
Contributions of additional colour schemes and header backgrounds that can be included in the "resources" folder in future versions of the theme are welcome.

## How to install
1. Copy this URL:
https://raw.githubusercontent.com/NorfolkGreg/GregCustom/master/wcms-modules.json
2. Login to your WonderCMS website.
3. Click "Settings" and then click "Themes".
4. Scroll to the bottom of the screen
5. Paste the copied URL into the CUSTOM MODULE field and click the ADD button.
6. Once uploaded, select the theme and click the  ACTIVATE button.
