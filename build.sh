#!/bin/bash

# Get the current directory name and store it in a variable
dirname=$(basename $(pwd))

# Get the current version from the style.css file
# current_version=$(awk '/Version:/ { print $2 }' style.css)

# Increment the version by 0.1
# new_version=$(awk '/Version:/ { $2 = $2 + 0.01; print $2 }' style.css)

# Replace the old version with the new version in style.css
# sed -i "s/$current_version/$new_version/g" style.css

# Create a zip file with all the files in the current directory except build.sh, node_modules, package.json, package-lock.json, yarn.lock and .gitignore
zip -r "$dirname.zip" . -x "build.sh" "node_modules/*" "package.json" "package-lock.json" ".gitignore" "yarn.lock" "assets/sass/*" ".git/*" "README.md" "LICENSE" ".DS_Store"
