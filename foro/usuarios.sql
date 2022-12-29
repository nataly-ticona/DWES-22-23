
CREATE TABLE 'usuarios' (
  'id' MEDIUMINT NOT NULL AUTO_INCREMENT,
  'email' varchar(255) NOT NULL ,
  'pass' varchar(255) NOT NULL ,
  PRIMARY KEY ('id')
) ENGINE=InnoDB;

CREATE TABLE 'publicacion' (
  'id' MEDIUMINT NOT NULL,
  'titulo' varchar(255) NOT NULL,
  'contenido' varchar(255) NOT NULL,
  'fecha' DATETIME(YYYY-MM-DD HH:MI) NOT NULL,
  PRIMARY KEY ('id'),
  FOREIGN KEY ('id') REFERENCES 'usuarios'('id')
) ENGINE=InnoDB;
