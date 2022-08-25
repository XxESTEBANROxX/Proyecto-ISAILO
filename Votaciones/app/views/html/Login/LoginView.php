<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INICIO SESION</title>
    <link rel="icon" href="app\views\img\Logo_Colegio.png">
    <link rel="stylesheet" href="app\views\css\Register.css">
  </head>
  <body>

    <div class="login-box">
      <img src="app\views\img\Logo_Colegio.png" class="avatar" alt="Avatar Image">
      <h1>INICIAR SESION</h1>
      <form method = "POST" action = "Login/login">
        <!-- CODIGO INSTITUCIONAL-->
        <label for="codigo_intitucional">CODIGO INSTITUCIONAL</label>
        <input  name = "codigo_institucional" type="text" placeholder="Codigo">
        <!-- ESTUDIANTE INPUT -->
        <label for="username">USUARIO</label>
        <input type="text" name = "nombre" placeholder="Nombre Apellido">
        <!-- CURSO INPUT -->
        <section id="opciones"> 
                    
            <label for= "curso">CURSO</label>

           <select name="curso">


           <option value=""></option>
            <option value="6A">6A</option>
            <option value="6B">6B</option>
            <option value="6C">6C</option>
            <option value="7A">7A</option>
            <option value="7B">7B</option>
            <option value="7C">7C</option>
            <option value="8A">8A</option>
            <option value="8B">8B</option>
            <option value="8C">8C</option>
            <option value="9A">9A</option>
            <option value="9B">9B</option>
            <option value="9C">9C</option>
            <option value="10A">10A</option>
            <option value="10B">10B</option>
            <option value="10C">10C</option>
            <option value="11A">11A</option>
            <option value="11B">11B</option>
            <option value="11C">11C</option>
  
           </select required>

        </section>

        <br>

      <!-- ROL INPUT -->

        <label for= "Rol">ROL</label>
        
        <select name="rol">
        
            <option value="administrador">Administrador</option>
            <option value="estudiante">Estudiante</option>
        
        </select>

        <br>
        <br>
      
        
        <input type="submit" value="Iniciar Sesion">
        
        <br>
        <a href="Register">¿No tienes cuenta?</a><br>
        
        
      </form>
    </div>
  </body>
</html>