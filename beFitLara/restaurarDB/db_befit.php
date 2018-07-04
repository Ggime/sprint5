<?php
#conexion a base de dato
     $db_host="mysql:host=localhost";
     $usuario = "root";//post usuario
     $pass = "root";// post pass

     try {
       $db = new PDO($db_host, $usuario, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
     } catch (Exception $e) {
       echo "Hubo un error: " . $e->getMessage();
       exit;
     }

$db->beginTransaction();
try{
  #creamos la base de dato
  $sql = "drop DATABASE IF EXISTS db_befit";
  $stmt = $db->exec($sql);

  #creamos la base de dato
  $sql = "CREATE DATABASE  db_befit";
  $stmt = $db->exec($sql);

  $sql = "use db_befit;";
  $stmt = $db->exec($sql);
  #seleccionamos la base de datos
  //USE db_befit;

  #creamos tablas

   $createBarrios = "CREATE TABLE IF NOT EXISTS barrios(
    id int AUTO_INCREMENT not null primary key,
    barrio varchar(50) not null)";
    $stmtBarrios = $db->exec($createBarrios);

  $createBarrios = "INSERT INTO barrios (barrio)
      VALUES ('Agronomia'), ('Almagro'), ('Balvanera'), ('Barracas'), ('Belgrano'),
      ('Boedo'), ('Caballito'), ('Coghlan'), ('Colegiales'), ('Constitución'),
      ('Chacarita'), ('Flores'), ('Floresta'), ('La Boca'), ('Paternal'),
      ('Liniers'), ('Mataderos'), ('Montserrat'), ('Monte Castro'), ('Pompeya'),
      ('Nunez'), ('Palermo'), ('Montserrat'), ('Monte Castro'), ('Pompeya'),
      ('Liniers'), ('Mataderos'), ('Parque Avellaneda'), ('Parque Chacabuco'), ('Parque Chas'),
      ('Parque Patricios'), ('Puerto Madero'), ('Recoleta'), ('Retiro'), ('Saavedra'),
      ('San Cristobal'), ('San Nicolas'), ('San Telmo'), ('Velez Sarsfield'), ('Versalles'),
      ('Villa Crespo'), ('Villa del Parque'), ('Villa Devoto'), ('Villa Gral Mitre'), ('Villa Lugano'),
      ('Villa Luro'), ('Villa Soldati'), ('Villa Urquiza'), ('Villa Real'), ('Villa Riachuelo'),
      ('Villa Santa Rita') ;";
      $stmtBarrios = $db->exec($createBarrios);

  $createFormatos = "CREATE TABLE IF NOT EXISTS formatos(
    id int AUTO_INCREMENT not null primary key,
    formato varchar(50) not null)";
    $stmtFormatos = $db->exec($createFormatos);

  $createFormatos = "INSERT INTO formatos (formato)
      VALUES ('Indoor'), ('Outdoor');";
      $stmtFormatos = $db->exec($createFormatos);

  $createCategorias = "CREATE TABLE IF NOT EXISTS categorias(
    id int AUTO_INCREMENT not null primary key,
    categoria varchar(50) not null);";
    $stmtCategorias = $db->exec($createCategorias);

  $createCategorias = "INSERT INTO categorias (categoria)
      VALUES ('Infantil'), ('Equipo'), ('Mayores'), ('Individual'), ('Jovenes');";
      $stmtCategorias = $db->exec($createCategorias);


  $createUsuarios = "CREATE TABLE IF NOT EXISTS usuarios
    (id int AUTO_INCREMENT not null primary key,
    creado timestamp,
    nombre varchar(100) not null,
    apellido varchar(100) not null,
    telefono int(15) not null,
    email varchar(50) unique not null,
    edad varchar(50) not null,
    id_barrios varchar(20) not null,
    pass varchar(100) not null,
    foto varchar(100)
    )";
    $stmtUsuarios = $db->exec($createUsuarios);


  $createActividades = "CREATE TABLE IF NOT EXISTS actividades
      (id int AUTO_INCREMENT not null primary key,
      actividad varchar(100) not null,
      id_categorias int,
      id_barrios int not null,
      direccion varchar(80) not null,
      responsable varchar(80) not null,
      dia varchar(80) not null,
      horario_desde int not null,
      horario_hasta int not null,
      id_formatos int,
      descripcion text not null,
      precio varchar(50) not null
    )";
      $stmtActividades = $db->exec($createActividades);

  $createUsuarios_actividades = "CREATE TABLE IF NOT EXISTS usuarios_actividades(
    id int AUTO_INCREMENT not null primary key,
    id_usuarios int ,
    id_actividades int );";
    $stmtUsuariosActividades = $db->exec($createUsuarios_actividades);




    /*$altUsuAct = "ALTER TABLE `db_befit`.`usuarios_actividades`
    ADD INDEX `fk_usuarios_actividades_1_idx` (`id_usuarios` ASC),
    ADD INDEX `fk_usuarios_actividades_2_idx` (`id_actividades` ASC);
    ALTER TABLE `db_befit`.`usuarios_actividades`
    ADD CONSTRAINT `fk_usuarios_actividades_1`
    FOREIGN KEY (`id_usuarios`)
    REFERENCES `db_befit`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    ADD CONSTRAINT `fk_usuarios_actividades_2`
    FOREIGN KEY (`id_actividades`)
    REFERENCES `db_befit`.`actividades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION;";
    $altUA = $db->exec($altUsuAct);

    $altUsuarios = "
      ALTER TABLE `db_befit`.`usuarios`
      ADD CONSTRAINT `fk_usuarios_1`
      FOREIGN KEY (`id_barrios`)
      REFERENCES `db_befit`.`barrios` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;";
    $altAct = $db->exec($altUsuarios);

    $altActividad = "
      ALTER TABLE `db_befit`.`actividades`
      ADD CONSTRAINT `fk_actividades_1`
      FOREIGN KEY (`id_categorias`)
      REFERENCES `db_befit`.`categorias` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
      ADD CONSTRAINT `fk_actividades_2`
      FOREIGN KEY (`id_barrios`)
      REFERENCES `db_befit`.`barrios` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
      ADD CONSTRAINT `fk_actividades_3`
      FOREIGN KEY (`id_formatos`)
      REFERENCES `db_befit`.`formatos` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION;";
    $altAct = $db->exec($altActividad);*/


    $db->commit();
    }catch(PDOException $e){
      echo 'error BD '.$e->getMessage();
      $db->rollback();
    }



  echo 'se creo la base de datos'; die;
