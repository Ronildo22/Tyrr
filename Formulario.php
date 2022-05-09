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
		width:60px;
		height:30px;
        background-color:#ffffff;
        color: black;
		
	}
	
	.pesquisa{
		aling:right;
	}
	 
	h3{
		font-size:40px;
		color:#000000;
        margin-left:30%; 
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
		margin-left:45%;
		
	}
	   
       
	input{
         color:#ffffff;
       }
       
       label{
         color:#000000;
       }
	   
	   .caixa{
		   width:320px;
		   height:420px;
		   border: 2px solid #000;
		   border-radius:  80px 0px 80px 0px;
		   color: #fff;
		   background-color: rgba(0,0,5,0.8);
		   top: 50%;
		   left:50%;
		position:absolute;
		   transform: translate(-50%, -50%);
		   box-sizing: border-box;
		   padding: 68px 28px;
			   
		 
	   }
	   .titulo{
		   margin:0;
		   padding: 0;
		   font-weight: bold;
		   color:white;
		   background-color:#1011;
		   font-size:20px; 
	   }
	   .tutulo1{
		   margin:0;
		   padding: 0;
		   font-weight: bold;
		   color:white;
		   background-color:#1011;
		   font-size:23px; 
		   
	   }
	   .fundotxt{
		   background-color:white;
		   color: black;
		   
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
   <br>
   
 
	
 <form name="Cadastro" action="verifica.php" method="POST" align="center" class="caixa">
 <label class="tutulo1"> Cadastro de Clientes</label><br><br>
	 <label class="titulo">Nome</label><br><br>
 <input type="text" name="NomeCliente" size="35" class="fundotxt" required><br>
 <label class="titulo">Sobrenome</label><br><br>
 <input type="text" name="SobrenomeCliente" size="35" class="fundotxt"required><br>
 <label class="titulo">Idade</label><br><br>
 <input type="text" name="IdadeCliente" size="35" class="fundotxt" required><br>
 <label class="titulo">Email</label><br><br>
 <input type="text" name="EmailCliente" size="35" class="fundotxt" required><br><br>
 <input type="submit" name="enviar" value="Enviar" class="btn">
 </form>
     
  

</body>

 
</html>