<div align="center">

#  Sitio Web Multi-página en PHP + Bootstrap 5.3.8

**Creado por Agustín Díaz — Grupo XP10**

</div>
*Repositorio migrado de [github.com/AgustinDiaz20/Dise-o1]: https://github.com/AgustinDiaz20/Dise-o1


---
 Cambios — Semana 2

Navbar
- Se agregó la clase `fixed-top` para que el navbar cubra **todo el ancho superior** de la pantalla y permanezca visible al hacer scroll.
- Se ajustó el `padding-top` del `body` a `76px` para compensar el navbar fijo y evitar que tape el contenido.
- El botón **Login** se movió **dentro del navbar**, alineado al extremo derecho usando `ms-auto` de Bootstrap 5.

Páginas 2 a 5
- Se les dio la misma **estructura base** que la Página 1: fondo con degradado, navbar fijo con el menú y el botón de Login, y footer estilizado (`site-footer`).
- Se marcó la clase `active` en el enlace correspondiente del navbar en cada página, para indicar en qué sección está el usuario.
- Se corrigió un error de HTML mal formado en `Pagina2.php` (etiqueta `</html>` mal ubicada).

 Carousel en Página 4 
- Se agregó un **carousel de Bootstrap** (`#demo`) con 3 imágenes, indicadores, flechas de navegación y autoplay.
- Se agregó CSS personalizado para que combine con el resto del sitio: bordes redondeados, sombra, altura fija de `400px` y `object-fit: cover` para que las imágenes no se deformen.

---

 Cambios — Semana 3

- **En construcción:** En esta semana se estuvo trabajando en la reestructuración interna del proyecto.

---

 Cambios — Semana 4 (Actual)

Definición de Temática
- **E-Commerce de Juguetes Didácticos:** Se definió formalmente el enfoque del sitio web, orientado a la venta en línea de productos educativos y juegos didácticos.

Mockup y Diseño UI/UX
- **Subida del Mockup inicial:** Se integró la propuesta gráfica e interfaz de usuario estructurada a mano, definiendo la distribución principal de la tienda:
  - **Header & Navegación:** Menú principal con categorías clave (*Inicio, Categorías, Edades, Novedades, Ofertas*), barra de búsqueda, acceso a perfil y carrito de compras.
  - **Juguete Destacado:** Sección promocional diaria con precio, sistema de calificaciones por estrellas, control de cantidad y acceso rápido al carrito.
  - **Packs Destacados:** Módulo interactivo con carrusel de imágenes para visualizar la variedad de productos incluidos en cada paquete.
  - **Catálogo & Filtros:** Zona de filtrado y orden de búsqueda, junto con tarjetas de producto que incluyen previsualización dinámica al pasar el cursor (*hover effect*).

Paleta de Colores e Identidad Visual
- **Esquema de Colores:** Se definió una paleta basada en **degradados en tonalidades celestes y colores claros**, buscando transmitir una estética infantil, limpia, accesible y didáctica.
- Todo esto como obejtivos para el Frontend (La imagen de Mockup es netamente referancial)


