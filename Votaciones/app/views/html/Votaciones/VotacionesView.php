<!DOCTYPE html>
<html lang="es">
      <head> 
            <meta charset="utf-8">
            <meta name="author" content="Juan Guerra y Kevin Arcila">
            <meta name="description" content="Sitio web para la gestion y conteo de votos">
            <meta name="keywords" content="votaciones">
            <title>Votaciones Bachillerato</title>
            <link rel="icon" href="app/views/img/100 100.png">
			<link rel="stylesheet" href="app/views/css/Estilos.css">
            
            

           
        </head>



        <body>

         

        	
        	 <div id="container">

                <div class="imagen"><img src="app/views/img/ISAILO.png"></div>

                <header>
                    
                    <h1><i>Bienvenido a la Eleccion de Personero</i></h1>
                    
                    
                    
                
                </header>

                <form name="form" action="eleccion_personero" method="post">

                
    
                    <section id="content">
    
                     
    
                        <article class="article"></article>
                            <h1>Candidatos a personeria 2022</h1>
                        <article class="article"></article>                      
                            <h1>Candidato 1:</h1><h2>Oscar Becerra</h2>
                            <img src="app/views/img/CANDIDATO 1.jpg">
                            <br>
                            <input type="radio" name="Candidato" value="oscar_becerra">
                           
                        <article class="article"></article>
                            <h1>Candidato 2:</h1><h2>Ariana Quevedo</h2>
                            <img src="app/views/img/CANDIDATO 2.jpg">
                            <br>
                            <input type="radio" name="Candidato" value="ariana_quevedo">
                            
                        <article class="article"></article>                  
                            <h1>Candidato 2:</h1><h2>Ximena Cardozo</h2>
                            <img src="app/views/img/CANDIDATO 3.jpg">
                            <br>
                            <input type="radio" name="Candidato" value="ximena_cardozo"> 
                        <article class="article"></article>

                        <article class="article"></article>                  
                            <h1>Voto en Blanco</h1>
                            <img src="app/views/img/VOTOBLANCO.jpg">
                            <br>
                            <input type="radio" name="Candidato" value="voto_blanco"> 
                        <article class="article"></article>
                        
                        
                        
    
    
                    <button><a href="Finalizacion">VOTAR</a></button>


                    

                    
                </form>
                
                
                
                <footer>
                    Juan Guerrra y Kevin Arcila Eleccion de personero 2022
                </footer>
            
            </div>

            
        
        </body>
 

</html>