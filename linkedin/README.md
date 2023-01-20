CREATE DATABASE linkedin; 

CREATE USER 'linkedin'@'localhost' IDENTIFIED BY '1234';  

GRANT ALL PRIVILEGES ON linkedin. * TO 'linkedin'@'localhost' WITH GRANT OPTION; 


Comenzar aplicación en limpio

mysql -u linkenin -p linkenin < scripts/db.create.sql

Cargar ejemplos

mysql -u linkenin -p linkenin < scripts/db.ejemplos.sql

echo "vendor/*" >> .gitignore añadir un archivo a que ignore ese archivo


Script que ejecuta el servidor de desarrollo 
./rundevserver.sh