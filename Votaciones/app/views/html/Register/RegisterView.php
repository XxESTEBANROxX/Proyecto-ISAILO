<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro Estudiantes</title>
    <link rel="icon" href="app\views\img\Logo_Colegio.png">
    <link rel="stylesheet" href="app\views\css\Register.css">
  </head>
  <body>

    <div class="login-box">
      <img src="app\views\img\Logo_Colegio.png" class="avatar" alt="Avatar Image">
      <h1>REGISTRO</h1>
      <form>
        <!-- CODIGO INSTITUCIONAL-->
        <label for="codigo_intitucional">CODIGO INSTITUCIONAL</label>
        <input type="text" placeholder="Codigo">
        <!-- ESTUDIANTE INPUT -->
        <label for="username">ESTUDIANTE</label>
        <input type="text" placeholder="Nombre Apellido">
        <!-- CURSO INPUT -->
        <section id="opciones"> 
                    
            <label for= "curso">CURSO</label>

           <select Name="curso">

            <option value="curso">6A</option>
            <option value="curso">6B</option>
            <option value="curso">6C</option>
            <option value="curso">7A</option>
            <option value="curso">7B</option>
            <option value="curso">7C</option>
            <option value="curso">8A</option>
            <option value="curso">8B</option>
            <option value="curso">8C</option>
            <option value="curso">9A</option>
            <option value="curso">9B</option>
            <option value="curso">9C</option>
            <option value="curso">10A</option>
            <option value="curso">10B</option>
            <option value="curso">10C</option>
            <option value="curso">11A</option>
            <option value="curso">11B</option>
            <option value="curso">11C</option>
  
           </select required>

        </section>

        <br>

      <!-- ROL INPUT -->

        <label for= "Rol">ROL</label>
        
        <select name="Rol">
        
            <option value="administrador">Administrador</option>
            <option value="estudiante">Estudiante</option>
        
        </select>

        <br>
        <br>
      
        
        <input type="submit" value="Registrar">
        
        <br>
        <a href="Login">¿Ya tienes una cuenta?</a><br>
        
        
      </form>
    </div>
  </body>
</html>