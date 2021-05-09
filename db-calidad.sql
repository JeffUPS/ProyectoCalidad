
CREATE TABLE usuario (
                id_usuario INT AUTO_INCREMENT NOT NULL,
                nombres VARCHAR(50) NOT NULL,
                apellidos VARCHAR(50) NOT NULL,
                cedula VARCHAR(10) NOT NULL,
                fecha_nacimiento DATE NOT NULL,
                genero VARCHAR(10) NOT NULL,
                provincia VARCHAR(25) NOT NULL,
                ciudad VARCHAR(25) NOT NULL,
                direccion VARCHAR(50) NOT NULL,
                codigo_postal VARCHAR(6) NOT NULL,
                telefono_fijo VARCHAR(9) NOT NULL,
                telefono_movil VARCHAR(10) NOT NULL,
                profesion VARCHAR(25) NOT NULL,
                correo VARCHAR(25) NOT NULL,
                contrasenia VARCHAR(50) NOT NULL,
                PRIMARY KEY (id_usuario)
);


CREATE TABLE user_autenticacion (
                id_autenticacion INT AUTO_INCREMENT NOT NULL,
                id_usuario INT NOT NULL,
                letra_artista VARCHAR(1) NOT NULL,
                genero_artista VARCHAR(25) NOT NULL,
                PRIMARY KEY (id_autenticacion)
);


CREATE TABLE artistas (
                id_artista INT AUTO_INCREMENT NOT NULL,
                inicial_artista VARCHAR(1) NOT NULL,
                nombre_artista VARCHAR(50) NOT NULL,
                id_autenticacion INT NOT NULL,
                PRIMARY KEY (id_artista)
);


CREATE TABLE canciones (
                id_cancion INT AUTO_INCREMENT NOT NULL,
                genero VARCHAR(25) NOT NULL,
                cancion VARCHAR(100) NOT NULL,
                id_artista INT NOT NULL,
                PRIMARY KEY (id_cancion)
);


ALTER TABLE user_autenticacion ADD CONSTRAINT user_user_autenticacion_fk
FOREIGN KEY (id_usuario)
REFERENCES usuario (id_usuario)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE artistas ADD CONSTRAINT user_autenticacion_artistas_fk
FOREIGN KEY (id_autenticacion)
REFERENCES user_autenticacion (id_autenticacion)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE canciones ADD CONSTRAINT artistas_canciones_fk
FOREIGN KEY (id_artista)
REFERENCES artistas (id_artista)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
