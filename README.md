# Aplicacion Requeridas
Java
MySQL
Tomcat8
Apache
Jenkins

## Instalación de Java
Ejecutaremos los siguientes comandos:
	sudo apt-get update
	sudo apt-get install default-jdk
	
## Instalación de MySQL y carga de datos
Ejecutaremos los siguientes comandos:
	wget https://dev.mysql.com/get/mysql-apt-config_0.8.6-1_all.deb
	apt install gdebi-core
	apt update
	apt install mysql-server
	mysql -p (Aquí ya entrariamos a la consola de MySQL)
	create database skills2018
	create user skillsuser;
	GRANT ALL ON skills2018.* TO 'skillsuser'@'localhost' identified by 'patata2944';
	CREATE TABLE IF NOT EXISTS MOVIE(
		movie_id INT AUTO_INCREMENT PRIMARY KEY,
		image VARCHAR(300),
		link VARCHAR(300) NOT NULL,
		title VARCHAR(150) NOT NULL,
		place INT NOT NULL,
		rating DECIMAL(18,16) NOT NULL,
		star_cast VARCHAR(400) NOT NULL,
		vote INT NOT NULL,
		year INT NOT NULL
		);
	INSERT INTO MOVIE(image,link,title,place,rating,star_cast,vote,year) VALUES("https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg","/title/tt0111161/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=e31d89dd-322d-4646-8962-327b42fe94b1&pf_rd_r=DX6EBQY7EP99YF0K7X08&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_1","Cadena perpetua",1,9.216799472209534,"Frank Darabont (dir.), Tim Robbins, Morgan Freeman",1940722,1994)
	(+249 Inserts de peliculas encontrados en Database.SQL)
Control + C Para salir.

## Instalación de Tomcat
Ejecutamos los siguientes comandos:
	sudo apt-get update
	sudo apt-get install tomcat8
Añadir a /etc/tomcat8/web.xml
     <filter>
       <filter-name>CorsFilter</filter-name>
       <filter-class>org.apache.catalina.filters.CorsFilter</filter-class>
     </filter>
     <filter-mapping>
       <filter-name>CorsFilter</filter-name>
       <url-pattern>/*</url-pattern>
     </filter-mapping>

sudo service tomcat8 restart

## Instalación de Apache
sudo apt-get update && sudo apt-get upgrade
sudo apt-get install apache2 apache2-doc apache2-utils
sudo apt-get install libapache2-mod-php
Mover web a /var/www/html/i
sudo systemctl restart apache2

## Instalación de Jenkins
Ejecutamos los siguientes comandos:
	wget -q -O - http://pkg.jenkins-ci.org/debian-stable/jenkins-ci.org.key | apt-key add 
	echo "deb http://pkg.jenkins-ci.org/debian-stable binary/" > /etc/apt/sources.list.d/jenkins.list
	echo "deb http://pkg.jenkins-ci.org/debian binary/" > /etc/apt/sources.list.d/jenkins.list
	apt update
	apt install jenkins
	sudo apt-get install git-core
	sudo apt-get install maven
Cambiamos en /etc/default/jenkins Http_port = 8888

Entramos a la <ip>:8888 y seguimos las instrucciones de configuración.

Instalamos los plugins de Maven Integration y Deploy War File to Server.
Creamos un nuevo proyecto de maven con origen de datos de git
En "acciones a ejecutar despues" seleccionamos "Deploy War to Server" y rellenamos los datos de login para el servidor de tomcat.

	

