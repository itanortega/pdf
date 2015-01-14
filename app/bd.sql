DROP DATABASE IF EXISTS pdf; 
CREATE DATABASE pdf;
use pdf;

CREATE TABLE usuarios(
       id INT(10) NOT NULL AUTO_INCREMENT,       
       nombres VARCHAR(255) NOT NULL,            
       apellidos VARCHAR(255) NOT NULL,       
       email VARCHAR(255) NOT NULL,       
       pass VARCHAR(255) NOT NULL,
       activo BOOL NOT NULL,
       created DATETIME NOT NULL,       
       modified DATETIME NOT NULL,
       PRIMARY KEY(id)
)ENGINE = InnoDB;

INSERT INTO usuarios(nombres,apellidos,email,pass,activo,created,modified) VALUES
('Modo','Dios','dios@sistema.com','0f70251b4559c9ff6b0f1aeb23e073ad5a497388',true,'2014-01-01 01:02:03','2014-01-01 01:02:04'),
('Administrador',' de Sistema','admin@sistema.com','0f70251b4559c9ff6b0f1aeb23e073ad5a497388',true,'2014-01-01 01:02:03','2014-01-01 01:02:04'),
('Natalia',' Quiroz','naty@sistema.com','0f70251b4559c9ff6b0f1aeb23e073ad5a497388',true,'2014-01-01 01:02:03','2014-01-01 01:02:04'),
('Christian',' Ortega','itan@sistema.com','0f70251b4559c9ff6b0f1aeb23e073ad5a497388',true,'2014-01-01 01:02:03','2014-01-01 01:02:04');

CREATE TABLE menus(
       id INT(10) NOT NULL AUTO_INCREMENT,       
       nombre VARCHAR(255) NOT NULL, 
       icono VARCHAR(255) NOT NULL,       
       orden INT(10) NOT NULL,
       PRIMARY KEY(id)
)ENGINE = InnoDB;

INSERT INTO menus(nombre,icono,orden) VALUES
('Usuarios','usuariosm.png',3),
('Reportes','reportesm.png',2);

CREATE TABLE opcions(
       id INT(10) NOT NULL AUTO_INCREMENT,       
       nombre VARCHAR(255) NOT NULL,
       descripcion TEXT NOT NULL,       
       controlador VARCHAR(255) NOT NULL,         
       vista VARCHAR(255) NOT NULL,  
       menu_id INT(10) NOT NULL,       
       icono VARCHAR(255) NOT NULL,
       PRIMARY KEY(id)
)ENGINE = InnoDB;

INSERT INTO opcions(nombre,descripcion,controlador,vista,menu_id,icono) VALUES
('Cambiar pasword','Permite cambiar la contraseña del usuario actual','usuarios','editpass',1,'setpass.png'),
('Nuevo usuario','Nuevo usuario','usuarios','add',1,'nuevo.png'),
('Cambiar pass default','Permite cambiar la contraseña por defecto','configs','cambiar/1',1,'setpass.png'),
('Cambiar pass maestra','Permite cambiar la contraseña maestra','configs','cambiar/2',1,'setpass.png'),
('Listar usuarios','Lista de usuarios','usuarios','index',1,'lista.png'),
('Listar mis archivos','Lista de pdf','pdfs','viewpdf',2,'lista.png');
--  ('R1','reportes','Reporte 1','#',2,'reporte.png'),
-- ('R2','reportes','Reporte 2','#',2,'reporte.png');

CREATE TABLE usuarios_menus(
       id INT(100) NOT NULL AUTO_INCREMENT,       
       usuario_id  INT(10) NOT NULL,       
       opcion_id INT(10) NOT NULL,
       created DATETIME NOT NULL,       
       modified DATETIME NOT NULL,
       PRIMARY KEY(id)
)ENGINE = InnoDB;

INSERT INTO usuarios_menus(usuario_id,opcion_id,created,modified) 
(SELECT '1',op.id,'2014-01-01 01:02:04','2014-01-01 01:02:04' FROM opcions op);
INSERT INTO usuarios_menus(usuario_id,opcion_id,created,modified) 
(SELECT '2',op.id,'2014-01-01 01:02:04','2014-01-01 01:02:04' FROM opcions op);
INSERT INTO usuarios_menus(usuario_id,opcion_id,created,modified)  values
(4,1,'2014-01-01 01:02:04','2014-01-01 01:02:04'),
(4,6,'2014-01-01 01:02:04','2014-01-01 01:02:04'),
(3,1,'2014-01-01 01:02:04','2014-01-01 01:02:04'),
(3,6,'2014-01-01 01:02:04','2014-01-01 01:02:04');


CREATE TABLE configs(
       id INT(100) NOT NULL AUTO_INCREMENT,       
       nombre VARCHAR(255) NOT NULL,       
       valor TEXT NOT NULL,       
       descripcion TEXT NOT NULL,
       created DATETIME NOT NULL,       
       modified DATETIME NOT NULL,
       PRIMARY KEY(id)
);

INSERT INTO configs(nombre,valor,descripcion,created,modified) VALUES
('Password Default','123456','Contraseña por defecto','2014-01-01 01:02:04','2014-01-01 01:02:04'),
('Password Maestra','123456','Contraseña maestra','2014-01-01 01:02:04','2014-01-01 01:02:04');

CREATE TABLE pdfs(
       id INT(100) NOT NULL AUTO_INCREMENT,       
       usuario_id  INT(10) NOT NULL,
       descripcion TEXT NOT NULL,     
       ubicacion TEXT NOT NULL,
       created DATETIME NOT NULL,       
       modified DATETIME NOT NULL,
       PRIMARY KEY(id)
)ENGINE = InnoDB;
