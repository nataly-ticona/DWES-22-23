DROP TABLE publicacion CASCADE;
DROP TABLE usuarios CASCADE;
DROP TABLE token CASCADE;

CREATE TABLE usuarios (
  id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name        varchar(30) NOT NULL UNIQUE,
  email       varchar(255) NOT NULL UNIQUE,
  password    varchar(255) NOT NULL
);

CREATE TABLE publicacion (
  name  varchar(30) NOT NULL UNIQUE,
  titulo varchar(255) NOT NULL,
  contenido varchar(255) NOT NULL,
  fecha DATE,
  CONSTRAINT pk_publicacion PRIMARY KEY (name),
  CONSTRAINT fk_publicacion_name FOREIGN KEY (name ) REFERENCES usuarios(name )
);


CREATE TABLE token (
  id_token INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id INTEGER NOT NULL,
  valor varchar(255) NOT NULL,
  expiracion DATE,
  CONSTRAINT pk_token FOREIGN KEY (id) REFERENCES usuarios (id)
);

INSERT INTO usuarios (name, email, password) VALUES('ntxf','nat@gmail.com','1234');
INSERT INTO usuarios (name, email, password) VALUES('sdasd','sdasd@gmail.com','1234');

INSERT INTO publicacion (name,titulo, contenido, fecha) VALUES ('ntxf','titulo 1','contenido del tocho', NOW());
INSERT INTO publicacion (name,titulo, contenido, fecha) VALUES ('sdasd','titulo 2','sdasdasdasd', NOW());

