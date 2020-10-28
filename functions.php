<?php

declare(strict_types=1);

require __DIR__.'/data.php';

function getImg(array $articles): string
{
   return $articles['img'];        
 }

function getTitle(array $articles): string
{
    return $articles['title'];
}
function getAuthor(array $articles): string
{
    return $articles['Author'];
}
function getPublishedDate(array $articles): string
{
    return $articles['Published_date'];
}
function getContent(array $articles): string
{
    return $articles['content'];
}
function getTitleById(array $articles, int $id): string
{
    foreach ( $articles as $article){
        if ($article['id'] === $id){
            return $article['title'];
        }
    }
    
}
function getImgById(array $articles, int $id): string
{
    foreach ( $articles as $article){
        if ($article['id'] === $id){
            return $article['img'];
        }
    }
    
}
function getArticleById(array $articles, int $id): string
{
    foreach ( $articles as $article){
        if ($article['id'] === $id){
            return $article['content'];
        }
    }
    
}
function getLikeCounter(array $articles): int
{
    return $articles['like_counter'];
}




function getAuthorsName( array $authors): string
{
    return $authors['full_name'];
}


function getAuthorById(array $authors, int $id): string
{
    foreach ( $authors as $author){
        if ($author['id'] === $id){
            return $author['full_name'];
        }
    }
    
}
function getAuthorsImgById(array $authors, int $id): string
{
    foreach ( $authors as $author){
        if ($author['id'] === $id){
            return $author['img'];
        }
    }
    
}
function getAboutById(array $authors, int $id): string
{
    foreach ( $authors as $author){
        if ($author['id'] === $id){
            return $author['about'];
        }
    }
    
}


