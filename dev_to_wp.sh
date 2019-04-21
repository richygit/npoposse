#!/bin/bash

# refresh images
rm -rf wp-content/themes/npoposse/images/
cp -r dev/images wp-content/themes/npoposse/

# set the css
rm wp-content/themes/npoposse/main.css
cp dev/css/main.css wp-content/themes/npoposse/

# update links in css to paths in wp
sed -i.bak -E 's/\/images/\/wp-content\/themes\/npoposse\/images/' wp-content/themes/npoposse/main.css
rm wp-content/themes/npoposse/main.css.bak
