<?php 
require __DIR__.'/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fake News!</title>
    <link rel="stylesheet" href="mobile.css" />
    <link rel="stylesheet" href="desktop.css" />    
    <!--<link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>

    <nav>
        <img src="https://viittomakielinenkirjasto.fi/wp-content/uploads/sites/2/2019/11/fakenews-1280x720.png">  
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#">International</a></li>
            <li><a href="#">Local</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    
    <main>
          <h1 class='news'> News Feed </h1>
          <section >  
                <div class ="container">
      
                    <div class ="various_news">
                        <a href =""> Coronavirus pandemic</a>
                        <a href =""> iPhone 12 review: Upgrade for the camera, not 5G</a>
                        <a href =""> Teabags: Which brands contain plastic?</a>
                        <a href =""> Norway funds satellite map of world's tropical forests</a>
                    </div>

                    <div class ="various_new">
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

                            <h1 ><a href="article.php?id=<?php echo $article['id']; ?>"> <?php echo getTitle($article) ; ?> </a> </h1>                 
                 
                        </div>
              
               
                <footer>               
                    <div class="author"> <p> Written by: <?php echo getAuthor( $article); ?> </p> </div>                
                    <div class="date"> <p><?php echo getPublishedDate($article); ?> </p> </div>          
                </footer>           
                    <?php endforeach; ?>
                    <br>       
                    </div>
            
                    </div>  
          </section> 
          <!-- <div class ="footer"> -->
            
                <div class ="authors">
                    <h3> About authors! </h3>
                    <?php foreach ($authors as $author):?>  
                    <div class="about_author">                     
                    <a  href= "authors.php?id=<?php echo $author['id']; ?>"><?php echo getAuthorsName($author); ?> </a>                             
                      
                    </div>
                     <?php endforeach; ?>
                    <br>  
                </div> 
            
       
                <div class ="terms"> 
                    <a href =""> Terms of use</a>
                    <a href =""> Cookies</a>
                    <a href =""> Privacy Policy  </a>
               
                </div>
            </div>
           
    </main>
</body>
</html>