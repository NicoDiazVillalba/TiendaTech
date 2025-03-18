# TiendaTech

Primera versión de un proyecto web de una tienda en línea de tecnología y accesorios gamer

Este es un sitio web construido con **HTML, CSS, JavaScript y PHP**, corriendo en un servidor local con **XAMPP** y usando **MySQL** para la base de datos. La administración de la base de datos se realiza con **phpMyAdmin**.


## Tecnologías usadas
- **Frontend:** HTML5, CSS3, JavaScript (jQuery)
- **Backend:** PHP 8.0+
- **Base de datos:** MySQL, administrado con phpMyAdmin
- **Servidor Local:** XAMPP (Apache + MySQL)



## Instalación y configuración
1. **Descargar e instalar XAMPP**
   - Puedes descargarlo desde: [https://www.apachefriends.org/es/index.html](https://www.apachefriends.org/es/index.html)
   
2. **Clonar este repositorio**
   ```sh
   git clone https://github.com/TU_USUARIO/TU_REPO.git
   ```
   
3. **Mover el proyecto a la carpeta `htdocs` de XAMPP**
   ```sh
   mv TiendaTech/ /c/xampp/htdocs/
   ```
   
4. **Importar la base de datos**
   - Abre phpMyAdmin en `http://localhost/phpmyadmin/`
   - Crea una base de datos llamada `tienda_tech`
   - Importa el archivo `database/tienda_tech.sql`
   
5. **Iniciar el servidor local**
   - Abre XAMPP y ejecuta `Apache` y `MySQL`.
   - Accede a `http://localhost/TiendaTech/`


