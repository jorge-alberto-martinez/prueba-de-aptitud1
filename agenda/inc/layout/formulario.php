<div class="campos">
     <div class="campo">
          <label for="nombre">Nombre:</label>
          <input 
               type="text" 
               placeholder="Nombre Contacto" 
               id="nombre"
               value="<?= ($contacto['nombre']) ? $contacto['nombre'] : '' ?>"
          >
     </div>
     <div class="campo">
          <label for="empresa">Empresa:</label>
          <input 
               type="text" 
               placeholder="Nombre Empresa" 
               id="empresa"
               value="<?= ($contacto['empresa']) ? $contacto['empresa'] : '' ?>"    
          >
     </div>
     <div class="campo">
          <label for="telefono">Teléfono:</label>
          <input 
               type="tel" 
               placeholder="Teléfono Contacto" 
               id="telefono"
               value="<?= ($contacto['telefono']) ? $contacto['telefono'] : '' ?>"
          >
     </div>
     <div class="campo">
          <label for="direccion">Direccion:</label>
          <input 
               type="text" 
               placeholder="Direccion Contacto" 
               id="direccion"
               value="<?= ($contacto['direccion']) ? $contacto['direccion'] : '' ?>"
          >
     </div>

     <div class="campo">
          <label for="edad">Edad:</label>
          <input 
               type="text" 
               placeholder="edad Contacto" 
               id="edad"
               value="<?= ($contacto['edad']) ? $contacto['edad'] : '' ?>"
          >
     </div>

          <div class="campo">
          <label for="cargo">Cargo:</label>
          <input 
               type="text" 
               placeholder="cargo Contacto" 
               id="cargo"
               value="<?= ($contacto['cargo']) ? $contacto['cargo'] : '' ?>"
          >
     </div>

</div>
<div class="campo enviar">
     <?php
          $textoBtn = ($contacto['telefono']) ? 'Guardar' : 'Añadir';
          $accion = ($contacto['telefono']) ? 'editar' : 'crear';
     ?>
     <input type="hidden" id="accion" value="<?php echo $accion; ?>">
     <?php if( isset( $contacto['id'] )) { ?>
          <input type="hidden" id="id" value="<?php echo $contacto['id']; ?>">
     <?php } ?>
     <input type="submit" value="<?php echo $textoBtn; ?>">
</div>