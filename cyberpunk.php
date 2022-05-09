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
	   
	     .txtmenu{
		 background-color: #222;
		   margin-top: 20px;
		   font-size: 20px;
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
	
       .categoria{
           margin-left:40%;
           color: white;
           font-family:serif;
           font-size:27px; 
           
       }
       
        hr{
	 height:3px;
	 background-color:#fff;
	 }
			
       .compra{
           margin-left:61%;
		   color:#00BFFF;
           font-family:serif;
           font-size:20px; 
       }
	   
	  .btn{
		   width: 80px;
		   height: 50px;
		   color:white;
		   margin-left:30%;
		   font-size:20px; 
	   }

	 .clique2:hover{color:#2789D0;}
					 
     
   </style>
   
   </head>

   
   
   <body> 
	   
   <nav class="menu">
   
   
     <ul>
	 
	  <li><a href="index.php" height="200" class="clique2"><img src="logo.png" width="150" height="80" class="logo"></a></li>
	    
	  <li><a href="Formulario.php" class="clique2"><p class=txtmenu>Cadastro</p></a></li>
   
      <li><a href="SistemaQuiz.php" class="clique2"><p class=txtmenu>Sugestões</p></a></li

	 	 
		  </ul>
   </nav>
   
   <br>
   <br>
   
	<h3><p align="center" >Pré-Venda Cyberpunk 2077 <p> </h3> <Br><br><br>
	
       <hr>
       <br>
       <br>

       <img src="cyberpunk.jpg" width="270" height="300" class="img2"> <br>  <p class="categoria">Cyberpunk 2077 é uma história de ação e aventura de mundo aberto<br> ambientada em Night City, uma megalópole obcecada por poder, glamour e biomodificações.<br> Você joga como V, um mercenário fora da lei atrás de um implante único que carrega a chave <br> da imortalidade.</p>
       <br>
	   <p class="compra">R$ 200,00 </p> <br>
       <form name="Cadastro" action="fomapagamento.php" method="POST" align="center" >
       <input type="submit" name="Comprar" value="Comprar" class="btn">
		  
       
   <br>
   <br>
	
   
     
  

</body>

 
</html>