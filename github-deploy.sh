#!/bin/bash

cp -r dev/* .
sed -i.bak "s/\/images/\/npoposse\/images/" css/main.css
