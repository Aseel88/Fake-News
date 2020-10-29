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
    main{
        display: flex;
        flex-direction: column;
        align-items: center;

    }
    nav {
        max-width:300px;
        height: 30px;
        background: rgba(0,0,0, .8);
        top: 0;
        margin-bottom: 70px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start; 
      }
      
      nav ul {
        display: flex;
        flex-direction: row;
        margin: 0;
        padding: 0 px;
        justify-content: flex-start;
        max-width:250px;
        padding-left: 5px;
      }
      
      nav ul li {
        list-style: none;
      }
      
      nav ul li a {
        display: block;
        color: #fff;
        padding: 0 10px;
        text-decoration: none;
        text-transform: uppercase;
        font-weight: normal;
        line-height: 50px; 
        font-size: 10px;
        padding-left: 15px;
      }
      
      nav ul li a:hover,
      nav ul li a.active {
        background: #f00;
        
      } 
   
    nav img{
        width: 70px;
        height: 50px;
        margin-bottom: 10px;
    }
    h1{
        text-align:center;
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
            height:100vh;
            

        }
        p{
            font-size: 18px;
            padding-left: 100px;
            padding-right: 100px;
        }
        nav {
        min-width: 100%;
        height: 70px;
        background-color:black;
        border-top: 1px solid rgba(255,255,255, .2);
        border-bottom: 1px solid rgba(255,255,255, .2);
        position: fixed;
        top: 0;
        margin-bottom: 20px;     
        display: flex;
        flex-direction: row;
        justify-content: flex-start; 
        z-index: 1;
       }
      nav ul {
        width: 100%;
        height: 50px;
        background: rgba(0,0,0, .8);
        display: flex;
        margin: 0px;
        padding: 0 100px;
        justify-content: flex-end;
        margin-left: 250px;
      }
      
      nav ul li {
        list-style: none;
      }
      
      nav ul li a {
        display: block;
        color: #fff;
        font-size: 18px;
        padding: 0 10px;
        text-decoration: none;
        text-transform: uppercase;
        font-weight: bold;
        line-height: 50px; 
      }
      
      nav ul li a:hover,
      nav ul li a.active {
        background: #f00;
        
      }  

     nav img{
        width: 100px;
        height: 50px;
        margin-bottom: 10px;
    }
    img{
        width:  25%;
        height: 300px;
    }
    }
   
        
    
    </style>
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