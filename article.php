<?php
 require __DIR__.'/functions.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article </title>
    <style> 
    body{
     color: white;
     max-width: 500px;
     background-color: black;
     display: flex;
     flex-direction: column;
     justify-content: center;
     align-content: center; 
     padding: 0px;
     margin: 0px;
     border: 0px;
    }
    nav{
        display: flex;
        flex-direction: row;
        justify-content: flex-start;       
        max-width: 300px;
    }
    nav a{
        color:white;
        font-size: 14px;
        font-family: Arial, Helvetica, sans-serif;
        text-decoration: none;
        font-weight: 400;
        margin-left: 10px;
    }
    nav a:hover{
        text-decoration: underline;
    }
    .list img{
        width: 40px;
        height: 40px;
        margin-bottom: 10px;
    }
    main{
        display: flex;
        flex-direction :column;
        justify-content: center;
        align-items: center; 
    }
    h1{
       
        font-weight: bolder;
        color: wheat;
        font-family: 'Vast Shadow', cursive;
        text-align: center;
    }
    
    img{
        width:  50%;
        height: 300px;
    }
    p{
        padding-left: 20px;
        padding-right: 20px;

    }
    @media screen and  (min-width: 760px){
        body{
            max-width: 100%;
            

        }
        p{
            font-size: 24px;
            padding-left: 100px;
            padding-right: 100px;
        }
        nav{
        max-width: 90%;
        display: flex;
        flex-direction: row;
        justify-content: center; 
        align-items: center; 
        justify-content: space-between;
        margin-bottom: 50px;
        }
        .list img{
        width: 70px;
        height: 70px;
        margin-bottom: 10px;
    }
        
    }

    </style>
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
        <?php $id = $_GET['id'];?>
        <h1>  <?php $article = getTitleById($articles, $id);?>
         <?php echo $article ;?>
         </h1> 
   
         <img src="
         <?php $article = getImgById($articles, $id);?>
         <?php echo $article ;?> " alt="" />      
         
         <p>       
         <?php $article = getArticleById($articles, $id);?>
        <?php echo $article ;?>    
        </p>
            
    </main>
                     
</body>
</html>