<?php

if($_POST['accion'] == 'crear'){
     // creará un nuevo registro en la base de datos

     require_once('../funciones/bd.php');

     // Validar las entradas
     $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
     $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);
     $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
     $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
     $edad = filter_var($_POST['edad'], FILTER_SANITIZE_STRING);
     $cargo = filter_var($_POST['cargo'], FILTER_SANITIZE_STRING);

     try {
          $stmt = $conn->prepare("INSERT INTO contactos (nombre, empresa, telefono, direccion, edad, cargo) VALUES (?, ?, ?, ?, ?, ?)");
          $stmt->bind_param("ssssss", $nombre, $empresa, $telefono, $direccion, $edad, $cargo);
          $stmt->execute();
          if($stmt->affected_rows == 1) {
               $respuesta = array(
                    'respuesta' => 'correcto',
                    'datos' => array(
                         'nombre' => $nombre,
                         'empresa' => $empresa,
                         'telefono' => $telefono,
                         'direccion' => $direccion,
                         'edad' => $edad,
                         'cargo' => $cargo,
                         'id_insertado' => $stmt->insert_id
                    )
               );
          }
          $stmt->close();
          $conn->close();
     } catch(Exception $e) {
          $respuesta = array(
               'error' => $e->getMessage()
          );
     }

     echo json_encode($respuesta);
}

if($_GET['accion'] == 'borrar') {
     require_once('../funciones/bd.php');

     $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

     try {
          $stmt = $conn->prepare("DELETE FROM contactos WHERE id = ? ");
          $stmt->bind_param("i", $id);
          $stmt->execute();
          if($stmt->affected_rows == 1) {
               $respuesta = array(
                    'respuesta' => 'correcto'
               );
          }
          $stmt->close();
          $conn->close();
     } catch(Exception $e){
          $respuesta = array(
               'error' => $e->getMessage()
          );
     }
     echo json_encode($respuesta);
}

if($_POST['accion'] == 'editar') {
     // echo json_encode($_POST);

     require_once('../funciones/bd.php');

     // Validar las entradas
     $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
     $empresa = filter_var($_POST['empresa'], FILTER_SANITIZE_STRING);
     $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
     $direccion = filter_var($_POST['direccion'], FILTER_SANITIZE_STRING);
     $edad = filter_var($_POST['edad'], FILTER_SANITIZE_STRING);
     $cargo = filter_var($_POST['cargo'], FILTER_SANITIZE_STRING);
     $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

     try{
          $stmt = $conn->prepare("UPDATE contactos SET nombre = ?, telefono = ?, empresa = ?, direccion = ?, edad = ?, cargo = ? WHERE id = ?");
          $stmt->bind_param("ssssssi", $nombre,  $telefono,  $empresa, $direccion, $edad, $cargo, $id);
          $stmt->execute();
          if($stmt->affected_rows == 1){
               $respuesta = array(
                    'respuesta' => 'correcto'
               );
          } else {
               $respuesta = array(
                    'respuesta' => 'error'
               );
          }
          $stmt->close();
          $conn->close();
     } catch(Exception $e){
          $respuesta = array(
               'error' => $e->getMessage()
          );
     }
     echo json_encode($respuesta);
}