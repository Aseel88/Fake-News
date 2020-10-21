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
    <link href="https://fonts.googleapis.com/css2?family=Vast+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
    <div class="list">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTs0WbR1a0ETshuDqauez59x6W5Y7BykBI5vA&usqp=CAU"> 
    <nav>
        <div class="links"><a href="">Services</a></div>
        <div class="links"><a href="">About</a></div>
        <div class="links"><a href="">Work</a></div>
        <div class="links"><a href="">Contact</a></div>
    </nav>
    </div>
      
    <h1> The News Feed </h1>
    <?php foreach ($articles as $article):?> 
    <div class ="container">        
            <main>
                      
        <header>  
                   <!--<div class= "article"> -->               
                
                   <img src="<?php echo getImg($article); ?>" >                           
         </header> 
         <section>  
             <div class ="description"> 
            <div class="like" >
                <i class="far fa-thumbs-up"></i>
                 <?php echo getLikeCounter($article); ?>
           </div>
                 <h1 ><a href="#"> <?php echo getTitle($article) ; ?> </a> </h1>
                 
                 <a href="article.php?id=<?php echo $article['id']; ?>">Read here </a>
                
            </div>
        </section> 
                   
        
        <footer>
               
               <div class="author"> <p> Written by: <?php echo getAuthor( $article); ?> </p> </div>
                
               <div class="date"> <p><?php echo getPublishedDate($article); ?> </p> </div>
                
                          
            

        </footer>           
                        
            <?php endforeach; ?>
            <br>
    </main>
    </div>
           
        

   

</body> 
</html>

