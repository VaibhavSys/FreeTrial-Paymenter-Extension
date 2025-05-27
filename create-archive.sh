#!/bin/bash

FORCE=false
if [ "$1" == "--force" ]; then
  FORCE=true
fi

if [ -d "FreeTrial" ]; then
  if [ "$FORCE" == true ]; then
    rm -r FreeTrial
  else
    echo "Directory FreeTrial already exists. Use --force to overwrite."
    exit 1
  fi
fi

if [ -f "FreeTrial.zip" ]; then
  if [ "$FORCE" == true ]; then
    rm FreeTrial.zip
  else
    echo "File FreeTrial.zip already exists. Use --force to overwrite."
    exit 1
  fi
fi

mkdir FreeTrial
cp FreeTrial.php FreeTrial
cp README.md FreeTrial
cp Settings.png FreeTrial
cp LICENSE FreeTrial
cp logo.png FreeTrial
cp cover.png FreeTrial
zip -r FreeTrial.zip FreeTrial
rm -r FreeTrial
echo "Archive created successfully."
