# GregCustom
A responsive Wcms theme with resources to aid customisation.

## Preview
On installation will look like this
![Wide screen preview](/previewwide.jpg)
The banner showing the blue background and logo is an easily substituted background image. All text above the menu bar is taken from fields on the "Settings > Menu" and "Settings > Current Page" screens. 

![Narrow screen preview](/previewnarrow.jpg)
On narrow screens the Site and Page titles switch the left alignment and a different background image will be displayed.

Deletion of either of the background images reveals removes the dummy logo by reveling the background colour.

When sub-pages are added the menu reveals them on hover, producing the usual problems on touchscreen devices. (I am not aware of a coding technique to avoid the touchscreen issues, without editing to the index.php file, which is not recommended by Wcms.)

Currently, the stylesheet dos not support multiple sub-page levels.

## How to install
1. Copy this URL:
https://raw.githubusercontent.com/NorfolkGreg/GregCustom/master/wcms-modules.json
2. Login to your WonderCMS website.
3. Click "Settings" and then click "Themes".
4. Scroll to the bottom of the screen
5. Paste the copied URL into the CUSTOM MODULE field and click the ADD button.
6. Once uploaded, select the theme and click the  ACTIVATE button.
