<div class="form-group">
    <label>Nombres</label>
    <input type="text" class="form-control" name="nombre" <?php $validador->mostrar_nombre() ?>>
    <?php
    $validador->mostrar_error_nombre();
    ?>
</div>
<div class="form-group">
    <label>Apellidos</label>
    <input type="text" class="form-control" name="apellido" <?php $validador->mostrar_apellido() ?>>
    <?php
    $validador->mostrar_error_apellido();
    ?>
</div>
<div class="form-group">
    <label>Cedula de ciudadania</label>
    <input type="number" class="form-control" name="cedula"<?php $validador->mostrar_cedula() ?>>
    <?php
    $validador->mostrar_error_cedula();
    ?>
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" <?php $validador->mostrar_email() ?>>
    <?php
    $validador->mostrar_error_email();
    ?>
</div>
<div class="form-group">
    <label>Contraseña</label>
    <input type="password" class="form-control" name="clave1">
    <?php
    $validador->mostrar_error_clave1();
    ?>
</div>
<div class="form-group">
    <label>Repite la contraseña</label>
    <input type="password" class="form-control"name="clave2">
    <?php
    $validador->mostrar_error_clave2();
    ?>
    <br>
    <button type='reset' class="btn btn-default btn-primary" name="reinicio">Limpiar formulario</button>
    <button type='submit' class="btn btn-default btn-primary" name="enviar">Registrarse</button>

    <!--
    <div class="form-group"> 
        <label>Nombres</label>
        <input type='text' class="form-control" name="nombre" placeholder="Nombre completo" <?php /* $validador -> mostrar_nombre () ?>>
      <?php
      $validador -> mostrar_error_nombre ();
      ?>
      </div>
      <div class="form-group">
      <label>Apellidos</label>
      <input type='text' class="form-control" name="apellido" placeholder="Apellidos completos"<?php $validador -> mostrar_apellido () ?>>
      <?php
      $validador -> mostrar_error_apellido ();
      ?>
      </div>
      <div class="form-group">
      <label>Numero de documento</label>
      <input type='number' class="form-control" name="cedula" placeholder="Ingrese su cedula de ciudadania " <?php $validador -> mostrar_cedula () ?>>
      <?php
      $validador -> mostrar_error_cedula ();
      ?>
      </div>
      <div class="form-group">
      <label>Email</label>
      <input type='email' class="form-control" name="email" placeholder="ejemplo@ejemplo.com" <?php $validador -> mostrar_email () ?>>
      <?php
      $validador -> mostrar_error_email ();
      ?>
      </div>
      <div class="form-group">
      <label>Contraseña</label>
      <input type='password' class="form-control" name="clave1" placeholder="Digite una contraseña con numeros y letras">
      <?php
      $validador -> mostrar_error_clave1 ();
      ?>
      </div>
      <div class="form-group">
      <label>Confirme contraseña</label>
      <input type='password' class="form-control" name="clave2" placeholder="Confirme su contraseña ">
      <?php
      $validador -> mostrar_error_clave2 ();
     * 
     */
    ?>
    </div>
    <br>
    <button type='reset' class="btn btn-default btn-primary" name="reinicio" >Limpiar formulario</button>
    <button type='submit' class="btn btn-default btn-primary" name="enviar">Registrarse</button>
    -->