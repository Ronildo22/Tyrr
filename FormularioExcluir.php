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
	   height:100px;
	   background-color:#222;
	   font-family:'Arial';
	}
	
     .menu ul{
	    list-style:none;
		position:relative;
	 }
	 
	 .menu ul li{
        width:150px;
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
  
     .menu a:hover{
	 background-color:#555;
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
	

	 .clique2:hover{color:#2789D0;}
					 
       form{
           margin-left:30%; 
           
       }
       
       .btn{
		width:60px;
		height:30px;
        background-color:#ffffff;
        color: black;
           margin-left:25%; 
		
	}
       
       
   </style>
   
   </head>

   
   
   <body> 
	   
   <nav class="menu">
   
   
     <ul>
	 
	  <li><img src="logo.png" width="150" height="80" class="logo"></li>
	  
	  <li><a href="index.php" height="200" class="clique2">Página Inicial</a></li>
	    
	  <li><a href="Formulario.php" class="clique2">Cadastro</a></li>
         
      <li><a href="FormularioExcluir.php" class="clique2">Excluir Cadastro</a></li>
	  
	  <li><a href="SistemaQuiz.php" class="clique2">Sugestões</a></li>

	 	 
		  </ul>
   </nav>
   
   <br>
   <br>
   <br>
   
  <h3>Formulário de Exclução de Clientes</h3><br>
 <form name="Cadastro" action="Excluir.php" method="POST">
 <label>Nome</label>
 <input type="text" name="NomeCliente" size="45" required><br>
 <label>Sobrenome</label>
 <input type="text" name="SobrenomeCliente" size="45" required><br>
 <label>Idade</label>
 <input type="text" name="IdadeCliente" size="45" required><br>
 <label>Email</label>
 <input type="text" name="EmailCliente" size="45" required><br>
 <input type="submit" name="enviar" value="Enviar" class=btn>
 </form>
     
  

</body>

 
</html>