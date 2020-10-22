<?php
declare(strict_types=1);?>
<?php require __DIR__.'/functions.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fake News!</title>
    <link rel="stylesheet" href="mobile.css" />
    <!--<link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="list">
        <img src=""> 
    
        <nav>
           <a href ="#"> International </a>
           <a href ="#"> Local </a>
           <a href ="#"> Business </a>
           <a href ="#"> Science </a>

        </nav>
    </div>
    <main>
        <h1> News Feed </h1>
        <section>            
            <div class ="various_news">
                <a href =""> Coronavirus pandemic</a>
                <a href =""> iPhone 12 review: Upgrade for the camera, not 5G</a>
                <a href =""> Teabags: Which brands contain plastic?</a>
                <a href =""> Norway funds satellite map of world's tropical forests</a>
            </div>

            <div class ="articles">  
                <?php foreach ($articles as $article):?>           
                <header>                             
                   <img src="<?php echo getImg($article); ?>" >                           
               </header> 
               <div class ="description"> 
                  <div class="like" >
                    <i class="far fa-thumbs-up"></i>
                   <?php echo getLikeCounter($article); ?>
                  </div>
                 <h1 ><a href="#"> <?php echo getTitle($article) ; ?> </a> </h1>                 
                 <a class ="read" href="article.php?id=<?php echo $article['id']; ?>">Read here </a>
                
                 </div>
              
               
              <footer>               
               <div class="author"> <p> Written by: <?php echo getAuthor( $article); ?> </p> </div>                
               <div class="date"> <p><?php echo getPublishedDate($article); ?> </p> </div>          
              </footer>           
              <?php endforeach; ?>
                <br>       
            
           </div>  

            <div class ="authors">
                <h3> About authors! </h3>
                <?php foreach ($articles as $article):?>  
                <div class="about_author">                     
                    <a  href= "authors.php?id=<?php echo $article['author']; ?>"><?php echo getAuthor( $article); ?>  </a> 
                </div>
                <?php endforeach; ?>
                <br>  
                </div> 
            </div>
        </section>    
    </main>
</body>
</html>