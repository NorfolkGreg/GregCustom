# GregCustom
A responsive Wcms theme with resources to aid customisation.

## Preview - Fresh Install
After activation on a fresh installation of WonderCMS screens wider than 600px will look like this:

![Fresh install preview](/preview.png)

## Preview - Example Wide Screen
Here one sees an example site (screen wider than 600px) with its click action multi-level drop-down menu open while an option is selected.

![Wide screen preview](/previewwide.png)

The body of any page is limited to a maximum 900px wide.

All text above the menu bar is taken from fields on the "Settings > Menu" and "Settings > Current Page" screens of the Admin modal. (See "Theme Limitations" below on the implications of this.)

## Preview - Example Narrow Screen
![Narrow screen preview](/previewnarrow.png)

On narrow screens the Site and Page titles switch to left alignment and the menu opens on clicking the animated [&equiv;] button.

## Upgrade Notes
Due to the revised click action of the navigation menu in v2.0.0 you will find the pages associated with menu options that have sub-pages become inaccessible. You will need to create new pages at an appropriate point in your menu structure and copy their content to them.

Depending on the arrangement of sub-pages on your site further movement of page content may be necessary to take full advantage of the new menu system.

The menu code no longer requires the "menu.png" file found in the "images" folder. The menu image and its folder, if left empty, may be safely deleted.

## Other Features
### Theme Limitations:
Due to the way fields from the Settings pages are used for the site header, the "Simple Blog" plugin is incompatible with the theme.

### Customisation Resources
Before activating the theme it is recommended that the "resources" folder is downloaded and deleted from the server as it performs no function there. It contains a number of images and other files that should help explain how to make best use of the theme.
#### ReadMe.txt
Within the "resources" folder will be fund a "ReadMe.txt" file. This covers the following topics:
##### Colour Schemes
How to use the list of variables setting the colour definitions for the theme. A number of sample colour scheme declarations are provided together with preview images of them.
##### Header Area
Notes concerning the "Page Contents" part of the header area and a description of how to add images in the header area that replace the default plain colour background. The resources include sample images to show how this feature can be used.
##### Image Display
A description of the effects of the styling code for images.
##### Video and Audio
Notes on the code required to take advantage of the features of the theme when including video and audio files.
##### Displaying "Cards"
Notes on the use of the included styling code to display areas where the contents is shown in rounded corner boxes.
##### Suggested Tweaks
A note on a potential improvement for search engine results and how to adapt the stylesheet to cope with different numbers and width of menu options.

## Future Development
Contributions of additional colour schemes and header backgrounds that can be included in the "resources" folder in future versions of the theme are welcome together with any suggestions for tweaks to the theme.php or style.css file that you think may be useful to others.

## How to install
1. Login to your WonderCMS website.
2. Click "Settings", then "Themes" and then on the INSTALL button under the GregCustom theme.
3. (Recommended) Download the "resources" folder (found in the "theme" folder) then delete it, as it performs no function on the server.
4. Once installed, click the ACTIVATE button
