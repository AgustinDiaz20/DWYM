<div align="center">
Sitio Web Multi-página en PHP + Bootstrap 5.3.8

Creado por Agustín Díaz — Grupo XP10

</div>

Cambios — Semana 2
Navbar
Se agregó la clase fixed-top para que el navbar cubra todo el ancho superior de la pantalla y permanezca visible al hacer scroll.
Se ajustó el padding-top del body a 76px para compensar el navbar fijo y evitar que tape el contenido.
El botón Login se movió dentro del navbar, alineado al extremo derecho usando ms-auto de Bootstrap 5.
📄Páginas 2 a 5
Se les dio la misma estructura base que la Página 1: fondo con degradado, navbar fijo con el menú y el botón de Login, y footer estilizado (site-footer).
Se marcó la clase active en el enlace correspondiente del navbar en cada página, para indicar en qué sección está el usuario.
Se corrigió un error de HTML mal formado en Pagina2.php (etiqueta </html> mal ubicada).
 Carousel en Página 4
Se agregó un carousel de Bootstrap (#demo) con 3 imágenes (la.jpg, chicago.jpg, ny.jpg), indicadores, flechas de navegación y autoplay.
Se agregó CSS personalizado para que combine con el resto del sitio: bordes redondeados, sombra, altura fija de 400px y object-fit: cover para que las imágenes no se deformen.
