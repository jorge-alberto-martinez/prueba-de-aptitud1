<div class="campos">
     <div class="campo">
          <label for="nombre">Nombre:</label>
          <input 
               type="text" 
               placeholder="Nombre Contacto" 
               id="nombre"
               
          >
     </div>
     <div class="campo">
          <label for="empresa">Empresa:</label>
          <input 
               type="text" 
               placeholder="Nombre Empresa" 
               id="empresa"
               
          >
     </div>
     <div class="campo">
          <label for="telefono">Teléfono:</label>
          <input 
               type="tel" 
               placeholder="Teléfono Contacto" 
               id="telefono"
               
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