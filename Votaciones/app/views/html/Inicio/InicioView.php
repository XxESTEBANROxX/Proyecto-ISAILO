<!DOCTYPE html>
<html lang="es">
      <head> 

        
            <meta charset="utf-8">
            <meta name="author" content="Juan Guerra y Kevin Arcila">
            <meta name="description" content="Sitio web para la gestion y conteo de votos">
            <meta name="keywords" content="votaciones">
            <title>Votaciones Bachillerato</title>
            <link rel="icon" href="../img/100 100.png">
            <link rel="stylesheet" href="../css/Estilos.css">
        
        </head>



        <body>

         

        	
        	 <div id="container">

                <div class="imagen"><img src="../VISUAL/Imagenes/ISAILP.png"></div>

                <header>
                    
                    <h1><i>Bienvenido a la Eleccion de Personero</i></h1>
                    
                </header>

                <form action="CONEXION BD PHP.php" method="post">


                    <section id="opciones"> 

                        <label><h1>Nombre y Apellido:</h1></label>
                        <input type="text"; name="nombre_apellido" required>
                        
                      <label for= "curso"><h2>Curso:</h2></label>

                      <select name="curso"required>
    
                        <option disabled selected>Seleccione un Curso</option>
                        <option value="6A">6A</option>
                        <option value="6B">6B</option>
                        <option value="7A">7A</option>
                        <option value="7B">7B</option>
                        <option value="7C">7C</option>
                        <option value="8A">8A</option>
                        <option value="8B">8B</option>
                        <option value="8C">8C</option>
                        <option value="9A">9A</option>
                        <option value="9B">9B</option>
                        <option value="10A">10A</option>
                        <option value="10B">10B</option>
                        <option value="11A">11A</option>
                        <option value="11B">11B</option>
              
                       </select required>
                       <br>
                       <label><h1>Rol</h1></label>
                       <select name="rol">
                        <br>
                        <option disabled selected>Seleccione Rol</option>
                         <option value ="Administrador">Administrador</option>
                         <option value="Estudiante">Estudiante</option>
                       </select required>
                       <br>
                     
    
                        <label><h1>Codigo Institucional:</h1></label>
                        <input type="text"; name="codigo_institucional" required>
                        <br>
                        <button type="submit" name="INGRESAR"> INGRESAR </button>
                    
    
                    </section>
    
                    
                </form>
                
                
                
                <footer>
                    Numero de contacto Instituto San Igancio De Loyola 
                    <br>
                    13661947
                </footer>
            
            </div>

            
        
        </body>
 

</html>
