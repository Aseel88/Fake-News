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
    return $articles['Published date'];
}
function getContent(array $articles): string
{
    return $articles['content'];
}

