# Tecnologias
## Aplicacion Requeridas
Java<br/>
MySQL<br/>
Tomcat8<br/>
Apache<br/>
Jenkins<br/>

## Librerias
Java Mail<br/>
MySQL Connector<br/>
HikariCP<br/>
Jersey<br/>
JQuery<br/>
Bootstrap<br/>


# Despliegue en Debian 9
## Instalación de Java
Ejecutaremos los siguientes comandos:<br/>
&lt;p&gt;sudo apt-get update<br/>
&lt;p&gt;sudo apt-get install default-jdk<br/>
	
## Instalación de MySQL y carga de datos
Ejecutaremos los siguientes comandos:<br/>
&lt;p&gt;wget https://dev.mysql.com/get/mysql-apt-config_0.8.6-1_all.deb<br/>
&lt;p&gt;apt install gdebi-core<br/>
&lt;p&gt;apt update<br/>
&lt;p&gt;apt install mysql-server<br/>
&lt;p&gt;mysql -p (Aquí ya entrariamos a la consola de MySQL)<br/>
&lt;p&gt;create database skills2018<br/>
&lt;p&gt;create user skillsuser;<br/>
&lt;p&gt;GRANT ALL ON skills2018.* TO 'skillsuser'@'localhost' identified by 'patata2944';<br/>
&lt;p&gt;CREATE TABLE IF NOT EXISTS MOVIE(<br/>
&lt;p&gt;&lt;p&gt;movie_id INT AUTO_INCREMENT PRIMARY KEY,<br/>
&lt;p&gt;&lt;p&gt;image VARCHAR(300),<br/>
&lt;p&gt;&lt;p&gt;link VARCHAR(300) NOT NULL,<br/>
&lt;p&gt;&lt;p&gt;title VARCHAR(150) NOT NULL,<br/>
&lt;p&gt;&lt;p&gt;place INT NOT NULL,<br/>
&lt;p&gt;&lt;p&gt;rating DECIMAL(18,16) NOT NULL,<br/>
&lt;p&gt;&lt;p&gt;star_cast VARCHAR(400) NOT NULL,<br/>
&lt;p&gt;&lt;p&gt;vote INT NOT NULL,<br/>
&lt;p&gt;&lt;p&gt;year INT NOT NULL<br/>
&lt;p&gt;);<br/>
&lt;p&gt;INSERT INTO MOVIE(image,link,title,place,rating,star_cast,vote,year) VALUES("https://ia.media-imdb.com/images/M/MV5BMDFkYTc0MGEtZmNhMC00ZDIzLWFmNTEtODM1ZmRlYWMwMWFmXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_UX182_CR0,0,182,268_AL_.jpg","/title/tt0111161/?pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=e31d89dd-322d-4646-8962-327b42fe94b1&pf_rd_r=DX6EBQY7EP99YF0K7X08&pf_rd_s=center-1&pf_rd_t=15506&pf_rd_i=top&ref_=chttp_tt_1","Cadena perpetua",1,9.216799472209534,"Frank Darabont (dir.), Tim Robbins, Morgan Freeman",1940722,1994)<br/>
&lt;p&gt;(+249 Inserts de peliculas encontrados en Database.SQL)<br/>
Control + C Para salir.<br/>
<br/>
## Instalación de Tomcat<br/>
Ejecutamos los siguientes comandos:<br/>
&lt;p&gt;sudo apt-get update<br/>
&lt;p&gt;sudo apt-get install tomcat8<br/>
Añadir a /etc/tomcat8/web.xml<br/>
&lt;p&gt;<filter><br/>
&lt;p&gt;&lt;p&gt;<filter-name>CorsFilter</filter-name><br/>
&lt;p&gt;&lt;p&gt;<filter-class>org.apache.catalina.filters.CorsFilter</filter-class><br/>
&lt;p&gt;</filter><br/>
&lt;p&gt;<filter-mapping><br/>
&lt;p&gt;&lt;p&gt;<filter-name>CorsFilter</filter-name><br/>
&lt;p&gt;&lt;p&gt;<url-pattern>/*</url-pattern><br/>
&lt;p&gt;</filter-mapping><br/>
<br/>
sudo service tomcat8 restart<br/>
<br/>
## Instalación de Apache<br/>
sudo apt-get update && sudo apt-get upgrade<br/>
sudo apt-get install apache2 apache2-doc apache2-utils<br/>
sudo apt-get install libapache2-mod-php<br/>
Mover web a /var/www/html/i<br/>
sudo systemctl restart apache2<br/>
<br/>
## Instalación de Jenkins<br/>
Ejecutamos los siguientes comandos:<br/>
&lt;p&gt;wget -q -O - http://pkg.jenkins-ci.org/debian-stable/jenkins-ci.org.key | apt-key add <br/>
&lt;p&gt;echo "deb http://pkg.jenkins-ci.org/debian-stable binary/" > /etc/apt/sources.list.d/jenkins.list<br/>
&lt;p&gt;echo "deb http://pkg.jenkins-ci.org/debian binary/" > /etc/apt/sources.list.d/jenkins.list<br/>
&lt;p&gt;apt update<br/>
&lt;p&gt;apt install jenkins<br/>
&lt;p&gt;sudo apt-get install git-core<br/>
&lt;p&gt;sudo apt-get install maven<br/>
Cambiamos en /etc/default/jenkins Http_port = 8888<br/>
<br/>
Entramos a la <ip>:8888 y seguimos las instrucciones de configuración.<br/>
<br/>
Instalamos los plugins de Maven Integration y Deploy War File to Server.<br/>
Creamos un nuevo proyecto de maven con origen de datos de git<br/>
En "acciones a ejecutar despues" seleccionamos "Deploy War to Server" y rellenamos los datos de login para el servidor de tomcat.<br/>

	

