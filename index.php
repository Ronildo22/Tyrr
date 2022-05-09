<html>

   <head>
  
  
  
   <title> Tyrr Games </title>

   <style type="text/CSS">
   
    *{
      margin:0;
	  padding:0;
	  background-color:#333;
	  }
	  
	.menu{
	   width:100%;
	   height:130px;
	   background-color:#222;
	   font-family:'Arial';
	}
	
     .menu ul{
	    list-style:none;
		position:relative;
	 }
	 
	 .menu ul li{
        width:200px;
        float:left;		
	 }
	 
	 .menu a{
	    padding:20px;
		display:block;
		text-decoration:none;
		text-align:center;
		background-color:#222;
		color:#fff;
		
	 }
	 
	 .menu ul ul{
	    position:absolute;
		visibility:hidden;
	 }
	 
	 .menu ul li:hover ul{
	 visibility:visible;
	 }
  
    .imgjogo a:hover{
	 background-color:#555;
	 }
	   
   .menu2{
	   width:100%;
	   height:140px;
	   background-color:#222;
	   font-family:'Arial';
	}
	
     .menu2 ul{
	    list-style:none;
		position:relative;
	 }
	 
	 .menu2 ul li{
        width:150px;
        float:left;
	 }
	 
	 .menu2 a{
	    padding:15px;
		display:block;
		text-decoration:none;
		text-align:center;
		background-color:#222;
		color:#fff;
	 }
	 
	 .menu2  ul ul{
	    position:absolute;
		visibility:hidden;
	 }
	 
	 .menu2 ul li:hover ul{
	 visibility:visible;
	 }
  
     .menu2 a:hover{
	 background-color:#555;
	 }

	 .menu2  ul ul li{
	 float:none;
	 border-bottom:solid 0px #ccc;
	 }
	 
	.btn{
		width:30px;
		height:30px;
		
	}
	
	.pesquisa{
		aling:right;
	}
	 
	h3{
		font-size:40px;
		color:#ffffff;
	}
	
	.clique{
	text-decoration:none;
	color:#ffffff;
	
	 
					    
	}
    
	.img1{
		position:absotute;
		margin-left:10%;
		
	}
	
	.img2{
		position:absolute;
		margin-left:15%;
		
	}
	
	   .img2{
		   margin-left:60%;
		  
	   }
	   
	  {
		   margin-left:60%;
		   opacity: 0.8;
		   
	   }
	
			
	   .imgjogo2{
		   
		   margin-left:18%;
	   }
	    .imgjogo3{
		   
		   margin-left:58%;
	   }
       
       .imgjogo{
		   
		   margin-left:10%;  
		   
		    }
	   
	   #main{
		   
		   width: 200px;
		   margin; 100px auto 0 auto;
	   }
	   
	   .box {
		
		position:relative;
           margin-left:80%; 
		  cursor: pointer;
		   
	   } 
	   .box2 {
		
		position:relative;
		   margin-left:450%; 
		  cursor: pointer;
		   
		   margin-top:-250%; 
	   }
	   
	     .box3 {
		
		position:relative;
		   margin-left:450%; 
		  cursor: pointer;
		   
		   margin-top:-250%; 
	   }
	  
	   .box img,div{
		   border-radius: 10px;
		   
	   }
	   
	   .box2 img,div{
		   border-radius: 10px;
		   
	   }
	   
	   .box3 img,div{
		   border-radius: 10px;
		   
	   }
	   
	   .box div{
		   background-color: #000;
		   width: 500px;
		   height:100px;
		   padding-top: 400px; 
		   border-radius: 10px;
		   text-align: center;
		   margin-left: 4px;
		   
	   } 
	   .box2 div{
		   background-color: #000;
		   width: 500px;
		   height:100px;
		   padding-top: 400px; 
		   border-radius: 10px;
		   text-align: center;
		   margin-left: 0px;
		   
	   }
	   .box3 div{
		   background-color: #000;
		   width: 500px;
		   height:100px;
		   padding-top: 400px; 
		   border-radius: 10px;
		   text-align: center;
		   margin-left: 0px;
		   
	   }
	   
	   .efect1 div{
		   position: absolute;
		   opacity: 0;
		   top: 0;
		   left: 0;
		   transition: opacity 0.5s;
	   }
	   
	   .efect1:hover div{
		   opacity: 0.8;
	   }
	   
	   
	  
	 
	   .nome{
		   color:white;
	   }
	   .txtmenu{
		 background-color: #222;
		   margin-top: 20px;
		   font-size: 20px;
	   }
	   
	   h1{
		   color: white;
	   }

	 .clique2:hover{color:#2789D0;}
					 
     
   </style>
   
   </head>

   
   
   <body> 
	   
   <nav class="menu">
   
   
     <ul>
	 
	  <li><a href="index.php" height="200" class="clique2"><img src="logo.png" width="150" height="80" class="logo"></a></li>
	  
	    
	  <li><a href="Formulario.php" class="clique2"><p class=txtmenu>Cadastro</p></a></li>
   
      <li><a href="SistemaQuiz.php" class="clique2"><p class=txtmenu>Sugestões</p></a></li>

	 	 
		  </ul>
   </nav>
   
   <br>
   <br>
   
	<h3><p align="center" > Jogos em Destaque <p> </h3> <Br><br>
	   <div id="main">
	<div class="box efect1">
       <a href="boderlandspag.php"> <img src="boderlands.jpg" width="500" height="500" class="imgjogo" </a>
		<div><h1> Boderlands 3</h1> </div>
		</div>
	   <div class="box2 efect1">
	   <a href="dautless.php"><img src="dautless.jpg" width="500" height="500" class="imgjogo3"</a>
		   <div><h1>Dautless </h1> </div>
		</div>
	   <br>
	   <br>
	   <br>
	   <br>
	   <br>
	      <div class="box efect1">
	   <a href="cyberpunk.php"><img src="cyberpunk.jpg" width="500" height="500" class="imgjogo"</a>
		   <div> <h1>Cyberpunk 2077</h1></div>
		
		   </div>
	   <div class="box3 efect1">
	   <a href="journey.php"><img src="journey.jpg" width="500" height="500" class="imgjogo2"</a>
		    <div> <h1>Jorney </h1></div>
		</div>
   </div>
       <br>
	   <br>
	   <br>
	   <br>
	   <br><br>
		   
		 <br>
	   <br>
	   <br>
	   <br>
	   <br><br>
	
	
	 
  <nav class="menu2">
	 
	      
	  </nav>

</body>

 
</html>