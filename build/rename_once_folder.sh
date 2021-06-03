#!/bin/sh

# A handy bash script to be executed only once on the extension-specific directories

EXTENSION_NAME="XiroWeb - Tin tieu diem"
EXTENSION_ALIAS="xiroweb_tintieudiem"
EXTENSION_CLASS_NAME="XirowebTintieudiem"
EXTENSION_DESC="Xiroweb Tintieudiem"
EXTENSION_NAMESPACE="Xiroweb"
TRANSLATION_KEY="XIROWEB_TINTIEUDIEM"

find $1 -name "*foo*" -type d -exec rename "s/foo/$EXTENSION_ALIAS/" {} \;
find $1 -name "*foo*" -type f -exec rename "s/foo/$EXTENSION_ALIAS/" {} \;
