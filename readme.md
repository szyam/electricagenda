# General Guidlines for updating 3A

## Articles

Article data is passed to the data/articles/articles-array file, which is used for site linking, pagination, and the article single file.

The article single file calls that data into it. There are a few variables to set in the actual article single file, which dictate things like quotes, featured tracks, gallery etc.

For an image gallery, a folder with function artlcle name (lower and hyphenated -> linky() ) needs to be created in the img/articles/ directory. Then the gallery() function will scan the folder and glob all the img.

For individual artist photos, a folder with the linky() artist name will be used. Then called into template as needed.

The featured image relies on 3 copies of the same image:

1. artistname.jpg 1600px wide
2. artistname-th.jpg 450px wide
3. artistname-blur.jpg 50px wide and a blur of 1.0

These will reside in the img/articles directory.