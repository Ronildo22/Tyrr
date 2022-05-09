  <Html>
  <head>
  
  
  
   <title> Sistema Quiz </title>
      
      
   <style type="text/CSS">
   
   

       label{
           color: black;
        
       }
       
	p{
		font-size:40px;
		color:#000000;
        align: center;
        
    }
        
    .img3{
        
         margin-left: 42%;
        
        
    }  
       
       .2{
           
           background-color: white;
           
       }
       
	*{
      margin:0;
	  padding:0;
	  background-color:#fff;
	  }
	  
	.menu{
	   width:100%;
	   height:130px;
	   background-color:#000;
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
		background-color:#000;
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
		 background-color: #000;
			 color:white ;
			margin-top: 20px;
		   font-size: 20px;
	   }
	
	.pesquisa{
		aling:right;
	}
	 
	h3{
		font-size:40px;
		color:#000000;
		text-align: center;
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
       .img3{
		position:absolute;
		margin-left:39%;
		
	}
       
       option{
           background-color: white;
		   font-size:15px; 
           
       }
	
	select{
           background-color: white;
           font-size:15px;
       }
	   
	   label{
		   font-size:18px;
	   }
			
	   .btn{
		   height: 35px;
		   width: 60px;
	   }

	 .clique2:hover{color:#2789D0;}
					 
     
   </style>
					 
     <nav class="menu">
   
   
     <ul>
	 
	  
	  
	   <li><a href="index.php" height="200" class="clique2"><img src="logo2.png" width="150" height="80" class="logo"></a></li>
	  
	  <li><a href="Formulario.php" class="clique2"><p class=txtmenu>Cadastro</p></a></li>
   
      <li><a href="SistemaQuiz.php" class="clique2"><p class=txtmenu>Sugestões</p></a></li>

	 	 

	 	 
		  </ul>
   </nav>
   
   <br>
   <br>
   
   
        <h3>Sistema Quiz</h3><br>
 <form name="Cadastro" action="Inserir.php" method="POST" align="center" >
 <label>Nome</label>
 <input type="text" name="NomeCliente" size="45" class="fundotxt" required><br>
 
 <label>Email</label>
 <input type="text" name="EmailCliente" size="45" required><br><br>

       <br>
       <br>
       <br>
       <h3>Jogos</h3><br>
       <br>
       <br> 
       <label>Qual estilo de jogos você ? </label>
     <select name="Qualestilodejogosvoce">
 <option class=2 value="RPG">RPG</option>
 <option value="FPS">FPS</option>
 <option value="Aventura">Aventura</option>
<option value="Arcade">Arcade</option>
 </select>
     <br>
     <br>
     <label>Qual plataforma você prefere ?</label>
     <select name="Qualplataformavocêprefere">
 <option value="Computador">Computador</option>
 <option value="Xbox">Xbox</option>
 <option value="Ps4">Ps4</option>
<option value="Nitendo">Nitendo</option>
 </select>
     <br>
     <br>
     <label>O que você acha do nosso site ? </label>
     <select name="Oquevocêachadonossosite">
 <option value="Muito Bom">Muito Bom</option>
 <option value="Bom">Bom</option>
 <option value="Regular">Regular</option>
<option value="Ruim">Ruim</option>
 </select>
     <br>
     <br>
     <label>Quais destes jogos você joga no momento ? </label>
     <select name="Quaisdestesjogosvocêjoganomomento">
 <option value="Minecraft">Minecraft</option>
 <option value="GTAV">GTAV</option>
 <option value="Fifa">Fifa</option>
<option value="Forza">Forza</option>
 </select>
     <br>
     <br>
     <label>Em um jogo você prefere :</label>
     <select name="Emumjogovocêprefere">
 <option value="Graficos">Graficos</option>
 <option value="Jogabilidade">Jogabilidade</option>
 <option value="Historia">Historia</option>
<option value="Desempenho">Desempenho</option>
 </select>
     <br>
     <br>
     <label>Você prefere jogos novos ou antigos ? </label>
     <select name="Vocêpreferejogosnovosouantigos">
 <option value="Novos">Novos</option>
 <option value="Antigos">Antigos</option>
 <option value="Osdois">Os dois</option>
<option value="Tantofaz">Tanto faz</option>
 </select>
     <br>
     <br>
     <label>Você prefere jogos online ou offline ?</label>
     <select name="Vocêpreferejogosonlineouoffline">
 <option value="online">online</option>
 <option value="offline">Offline</option>
 <option value="os dois">Os dois</option>
<option value="Tanto faz">Tanto faz</option>
 </select>
     <br>
     <br>
      <input type="submit" name="enviar" value="Enviar" class="btn">
 </form>
       <br>
       <br>
	  
	  <h3>Visite Nosso Site Também Pelo Celular</h3><br>
       <img src="frame1.png" width="350" height="350" class=img3></li> 
     
	</Body>
 
  </Html>