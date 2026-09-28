# GregCustom
A responsive Wcms theme with search facility and resources to aid customisation.

## Preview - Fresh Install
After activation on a fresh installation of WonderCMS screens wider than 600px will look like this:

![Fresh install preview](/preview.jpg)

## Preview - Example Wide Screen
Here one sees an example site (screen wider than 600px) with its click action multi-level drop-down menu open while an option is selected.

![Wide screen preview](/previewwide.png)

The body of any page is limited to a maximum 900px wide.

The text above the menu bar is taken from fields on the "Settings > Menu" and "Settings > Current Page" screens of the Admin modal.

## Preview - Example Narrow Screen
![Narrow screen preview](/previewnarrow.png)

On narrow screens the Site and Page titles switch to left alignment and the menu opens on clicking the animated [&equiv;] button.

## Theme Author's Web Site
Find this at: [https://gregchapman.uk](https://gregchapman.uk).

It is likely to hold more up to date and detailed information than the ReadMe.txt file (found in the Resources folder) on how to get the best out of the theme.

## How to install
1. Login to your WonderCMS website.
2. Click "Settings", then "Themes" and then on the INSTALL button under the GregCustom theme.
3. (Recommended) Download the "resources" folder (found in the "theme" folder) then delete it, as it performs no function on the server.
4. Once installed, click the ACTIVATE button

## What's New
### v2.6.0
A site search facility has been added. This offers similar facilities to the code built-in to WonderCMS 3.5.0 but with the added benefit that all pages in the site's database are now crawled, not just those on the menu's top level. Results are displayed clustered by menu option. Specific pages can be excluded - useful if you have draft content prepared not ready for publication.

Styling code has been added that allows the display of programming code.

### v2.5.0
The main change has been the removal of the strap line, sited above the menu bar. Because it used the Page Description variable to provide its content it was always recognised that this prevented proper use of the Contents meta tag. Removing the strap line has led to the deletion of the two variables in the style.css file controlling its colour and a revised colour scheme for the menu bar and the addition of another controlling the colour of the border between the header and menu.

### v2.0.0
This version introduces a click-action menu that allows a multi-level menu system to be developed. Now all fonts used are web based for a more consistent appearance of text on all platforms.

Due to the revised click action of the navigation menu those upgrading from v1.0.1 will find the pages associated with menu options that have sub-pages become inaccessible and will need to create new pages at an appropriate point in your menu structure with content copied from the original page. Depending on the arrangement of sub-pages on your site further movement of menu options may be necessary to take best advantage of the menu system.

The menu code no longer requires the "menu.png" file found in the "images" folder. The menu image and its folder, if left empty, may be safely deleted.

## Other Features
### Theme Limitations:
Due to the click-action menu the "Simple Blog" plugin is incompatible with the theme. (But you may find the styling code for displaying "cards" provides you with a feature you can use instead, documented in the ReadMe.txt file.)

### Customisation Resources
Before activating the theme it is recommended that the "resources" folder is downloaded and deleted from the server as it performs no function there. It contains a number of images and other files that should help explain how to make best use of the theme.

#### ReadMe.txt
Within the "resources" folder will be fund a "ReadMe.txt" file. This covers the following topics:

##### Colour Schemes
How to use the list of variables setting the colour definitions for the theme. A number of sample colour scheme declarations are provided together with preview images of them.

##### Header Area
How to add images in the header area that replace the default plain colour background. The resources include sample images to show how this feature can be used.

##### Image Display
A description of the effects of the styling code for images.

##### Video and Audio
Notes on the code required to take advantage of the features of the theme when including video and audio files.

##### Displaying "Cards"
Notes on the use of the included styling code to display areas where the contents is shown in rounded corner boxes.

##### Displaying Programming Code
How to take advantage of the styling code to display programming code.

##### Site Search Documentation
Information on how the site search feature works, how to implement the facility included in the theme and how to exclude specific pages from the results.

##### Suggested Tweaks
A note on how to adapt the stylesheet to cope with different numbers and width of menu options.

## Future Development
Contributions of additional colour schemes and header backgrounds that can be included in the "resources" folder in future versions of the theme are welcome together with any suggestions for tweaks to the theme.php or style.css file that you think may be useful to others.
