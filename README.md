# Portafolio Personal: Jose Materano

Este proyecto es un portafolio personal diseñado para mostrar mis habilidades y proyectos como Administrador de Sistemas Informáticos en Red. La página está desarrollada utilizando únicamente **Bootstrap** y **jQuery**, sin la adición de CSS personalizado. Todo el estilo y la interactividad se basa en las tecnologías mencionadas.

## Estructura del Proyecto

El portafolio se compone de varias secciones clave que representan diferentes aspectos de mi perfil profesional. Todo el contenido es **responsive**, lo que significa que se adapta a diferentes dispositivos, desde móviles hasta escritorios.

### 1. Inicio
- Introducción breve sobre mi perfil profesional.
- Incluye una imagen personal y un saludo de bienvenida.

### 2. Sobre Mí
- Información detallada sobre mi formación académica y mis intereses profesionales.
- Sección con un video incrustado de YouTube que es completamente **responsive** gracias a Bootstrap.

### 3. Portafolio de Proyectos
- Muestra una serie de proyectos mediante **tarjetas**. Cada tarjeta cuenta con una imagen y un pequeño resumen del proyecto.
- Al hacer clic en una tarjeta, se abre un **modal** que incluye un carrusel de imágenes del proyecto y una descripción más detallada.

### 4. Contacto
- Formulario de contacto que valida la dirección de correo electrónico antes de enviar.
- Utiliza Bootstrap para la estructura del formulario y jQuery para la validación y comportamiento del mismo.
- **Integración con PHP**: El formulario ahora está conectado a un script PHP («contact.php») que guarda los datos del formulario (nombre, correo, mensaje) en una base de datos MySQL. Esto permite recopilar mensajes de los usuarios para futuras consultas.

### 5. Pie de Página Personalizado
- Incluye mi logo, información de contacto y enlaces a mis redes sociales con íconos de **FontAwesome**.

## Tecnologías Utilizadas

Este proyecto se basa en tecnologías ampliamente usadas para el desarrollo web sin necesidad de un backend complejo o frameworks pesados. A continuación, se listan las principales herramientas utilizadas:

- **Bootstrap 5**: Biblioteca de diseño de interfaz de usuario que permite crear una estructura consistente, fácil y responsiva sin necesidad de escribir CSS personalizado.

- **jQuery 3.6.0**: Se utiliza para manejar la lógica de interacción con el usuario, como animaciones, validación del formulario y la funcionalidad de la página de una manera sencilla y directa.

- **FontAwesome**: Utilizada para los íconos de redes sociales en el footer de la página, aportando un toque profesional.

- **HTML5**: Utilizado para estructurar el contenido de la página.

- **PHP**: Script utilizado para conectar el formulario de contacto a una base de datos MySQL y almacenar los mensajes enviados por los usuarios.

- **MySQL**: Base de datos utilizada para almacenar los mensajes de contacto de los usuarios, creada y gestionada mediante phpMyAdmin en XAMPP.

## Funcionalidades Principales

- **Página Web Responsive**: Gracias a Bootstrap, todo el contenido de la página se adapta automáticamente a diferentes tamaños de pantalla, desde móviles hasta escritorios.

- **Validación de Formulario de Contacto**: Utiliza jQuery para validar el campo de correo electrónico antes de enviar el formulario, asegurando que se introduce una dirección válida antes de que el usuario pueda enviar un mensaje.

- **Integración con Base de Datos**: El formulario de contacto está vinculado a un script PHP que guarda los datos en una base de datos MySQL. Esto permite almacenar mensajes para futuras consultas.

- **Carrusel de Imágenes en Proyectos**: Cada proyecto destacado cuenta con un modal que incluye un carrusel de imágenes de Bootstrap para proporcionar una descripción visual del proyecto.

- **Scrolling Suave**: Cuando se hace clic en un enlace de la barra de navegación, la página se desplaza suavemente a la sección correspondiente utilizando jQuery.

## Requisitos para Configuración del Proyecto

Para ejecutar este proyecto en un entorno local, necesitas lo siguiente:

1. **XAMPP o WAMP**: Para configurar un servidor web local con soporte para PHP y MySQL.
2. **phpMyAdmin**: Para crear la base de datos llamada **contacto** con una tabla **mensajes** que contenga los campos `id`, `nombre`, `correo` y `mensaje`.
3. **Archivos del Proyecto**: Incluyen `index.html`, `contact.php`, y el archivo `.sql` para crear la base de datos.

### Pasos para Configurar la Base de Datos

1. Acceder a **phpMyAdmin** desde [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Crear una nueva base de datos llamada **`contacto`**.
3. Importar el archivo **`contacto.sql`** incluido en el proyecto para crear la tabla **`mensajes`**.
4. Asegurarse de que **Apache** y **MySQL** estén corriendo en XAMPP o WAMP.
5. Colocar los archivos del proyecto en la carpeta **`htdocs`** (por ejemplo, **`C:\xampp\htdocs\portafolio`**).
6. Acceder a la página mediante [http://localhost/portafolio/index.html](http://localhost/portafolio/index.html).

## Instrucciones Adicionales

- Si deseas alojar este proyecto en un servidor en línea, debes utilizar un hosting que soporte PHP, ya que GitHub Pages solo soporta archivos estáticos (HTML, CSS, JS).
- Puedes utilizar servicios como **Hostinger**, **Heroku**, o **InfinityFree** para alojamiento gratuito o pago.

## Créditos
- **Autor**: Jose Materano
- **Contacto**: [mate.estudios@gmail.com](mailto:mate.estudios@gmail.com)
- **Redes Sociales**: Puedes encontrar más información en mis redes sociales enlazadas en el pie de página del portafolio.



