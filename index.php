<?php
declare(strict_types=1);?>


<?php require __DIR__.'/functions.php';?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fake News!</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class ="container">
        <h1> The News Feed </h1>
        <section>
            
            <?php foreach ($articles as $article):?>           
               
                   <div class= "article">                  
                
                   <img src="<?php echo getImg($article); ?>" >                           
                
            <header>
                 <h1> <a href="#"> <?php echo getTitle($article) ; ?> </a>  </h1>
                 <a  <?php echo getContent($article); ?> href="article.php"  > Read the article </a>
                 
            </header>
            <footer>
              <!-- Author's name -->
                <p> Written by: <?php echo getAuthor( $article); ?> </p> 
                 <!-- date-->
                <p><?php echo getPublishedDate($article); ?> </p>

            </footer> 
            
            
            
            <?php endforeach; ?>
            <br>
                   </div>
           
    




         </section>

    </div>



</body> 
</html>

