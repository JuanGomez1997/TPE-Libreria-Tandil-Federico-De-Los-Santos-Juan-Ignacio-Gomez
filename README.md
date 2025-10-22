# TPE-Libreria-Tandil-Federico-De-Los-Santos-Juan-Ignacio-Gomez
Libreria Tandil,la mejor tienda para comprar libros

TPE WEB 2

Federico De Los Santos: fededls04@gmail.com
Juan Ignacio Gomez: chijuan.1997@gmail.com

Una librería web donde las personas pueden comprar los libros de distintos géneros, desde novelas y cuentos hasta manuales escolares y técnicos.

El diagrama de entidad relacion,se encuentra en el pdf. 

Tabla de Libro esta tabla contiene la informacion basica sobre los libros que venda la libreria.Sus columnas son:

id_libro:Clave primaria que identifica de forma única a cada libro.

titulo:Nombre del libro.

genero_id:Clave foránea que relaciona el libro con la tabla de generos.

autor:Creador del libro.

anio:Año de publicacion del libro.

descripcion:Contenido/Tematica del libro.

disponibilidad:El numero de ejemplares disponibles.

Tabla Generos esta tabla contiene la informacion sobre los generos de los libros.Sus columnas son:

id_genero:Clave primaria que identifica de forma unica cada genero.

nombre:Nombre del genero.


Instrucciones para importar la base de datos y ver la página

1.Inicia Apache y MySQL desde el panel de control de XAMPP.

2.Abre phpMyAdmin en tu navegador.

3.Crea una nueva base de datos llamada libreria tandil.

4.Selecciona la base de datos libreria tandil.

5.Haz clic en la pestaña Importar.

6.Haz clic en Seleccionar archivo y elige el archivo database/libreria_tandil.sql de este proyecto.

7.Presiona Continuar para importar las tablas y datos.

8.Copia o clona el repositorio en la carpeta htdocs de XAMPP .

9.Abre tu navegador y accede a la pagina(como por ejemplo en: http://localhost/TPE-Libreria-Tandil/).

10.Si todo está configurado correctamente, podrás ver la página principal de la librería.

Usuario Administrador

Usuario:webadmin

contraseña:admin

Un usuario normal,podra ver el listado de libros y generos como tambien los libro diponibles. En cambio el usuario administrador tambien podra tener la posibilidad de agregar,editar e eliminar libros y generos.

NOTA:
A la hora de importar la base de datos en la tabla usuarios