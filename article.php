<?php
 require __DIR__.'/functions.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article 1</title>
    <style> 
    *{
        box-sizing: border-box; 
    }
    body{
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
    .container{
        width: 50%;
        height: 85%;
        background-color: cornsilk;
        font-family: arial;
        font-size: 18px;
        color:darkblue;
        margin-top: 60px;
        display:flex;
        justify-items: center;
        align-items: center;
        border-radius: 25px;
        padding: 50px;
        border-style: inset; 

    }
    p{
        overflow: auto;
    }
    @media screen and ( max-width :500px ){
    p{
        overflow: scroll;
        font-size:16px
    
    }
    .container{
        height:200%;
        width:100%;
        overflow: scroll;

    }
    }
 @media screen and ( max-width :500px ){
    p{
        overflow: auto;
        font-size:16px
    
    }
    .container{
        height: auto;

    }
        }
    
 @media screen and ( min-width : 1024px){
        body{
        ;
        }
    }



    </style>
</head>
<body>
               
         <p> 
         
         <?php $id = $_GET['id'];?>
        <?php $article = getArticleById($articles, $id);?>
        <?php echo $article ;?>    
        </p>
            
   
            <br>
           
</body>
</html>