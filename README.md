
# cactuscode.org website

This is the source repository for the new
[www.cactuscode.org](https://www.cactuscode.org) website. The website
is automatically updated when changes are made to the master branch of
this repository.

The website is built using the static site generator "Jekyll", and the
content is primarily in markdown files.

To preview the content from a local clone of the repository, use

```
jekyll serve
```
if you have jekyll installed on your machine, or

```
docker run --rm -p 4000:4000 --volume="$PWD:/srv/jekyll" -it jekyll/jekyll jekyll serve
```

if you have Docker available.

The website will then be served from http://0.0.0.0:4000.
