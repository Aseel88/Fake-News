# Fake News

<img src="https://media0.giphy.com/media/jRZUziKCd95W1ba4NB/giphy.gif?cid=ecf05e47a3d3b673f0acace81d7e3028bb77a79e0877132f&rid=giphy.gif" width= "100%">

## Table of contents

-   [General info](#general-info)
-   [Technologies](#technologies)
-   [Installation](#installation)
-   [Comments](#comments)
-   [Testers](#testers)
-   [License](#license)

## General info

This project is to create a news feed in PHP, which consists many items created by different authors.
The content of project isn't logical data. It consists many articles which published in The Guardian and Aftonbladet.

## Technologies

Project is created with:

-   PHP 7.4
-   HTML
-   CSS

## Installation

In the terminal, use the command git clone, then paste the link from your clipboard, or copy the command and link from below:

```
$ git clone https://github.com/Aseel88/Fake-News.git
```

Change directories to the new directory:

```
$ cd ~/Fake-News/
```

Run a local server using the command line:

```
$ php -S localhost:8000

```

## Comments

### Martin Hansson

1.  Overall design looks ok on mobile, the pictures might be to large, also the Author and date might have a bit to much margin and to close to the next article img.
2.  Navigating to the actual article was a bit unintuitive,
3.  No way of going back to homepage after clicking on an article
4.  In functions.php the getTitleById, getImgById, getArticleById, getAuthorById, getAuthorsImgById, getAboutById doesn't need a foreach loop rather you could pass the index of the author as a parameter, and go return $authors[$index][$x]
5.  Otherwise the functions.php looks good in terms of actual code, all functions follow the single responsibility principle well. although a bit of uneven spacing in terms of newlines to the next function.
6.  the index.php looks clean thanks to the construction of your functions, however there's some uneven indention such as start of forEach on line 51, and ending of for each at line 71, something you could configure prettier to manage for you.
7.  articles.php -> The php part seems very nicely written, could maybe break out all the inline styling to a separate stylesheet for consistency.

## Testers

The project was tested by:

-   Simon Lindstedt
-   Moa Berg
-   Agnes Binett

## License

MIT License. For more details https://github.com/Aseel88/Fake-News/blob/main/LICENSE
