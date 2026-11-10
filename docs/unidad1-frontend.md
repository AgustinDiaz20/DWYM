# Unidad 1 — Front-end responsivo · Juguetería Ludiko

## Caso, actor, flujo y concerns

- **Actor principal:** cliente de la juguetería (también visitante y administración).
- **Objetivo:** encontrar juguetes, agregarlos al carrito y confirmar un pedido; o solicitar una orden especial.
- **Flujo principal:** inicio (carrusel + destacados) → catálogo con filtros → agregar → carrito → confirmar → pago → "Mis pedidos".
- **Concerns de front-end:** responsividad (el mockup es de escritorio; en móvil se reordena), rendimiento (dependencias autoalojadas, imágenes SVG livianas, carga diferida), accesibilidad (etiquetas, `aria-live`, foco visible, "Saltar al contenido"), comunicación con servicios (un único cliente `api.js` con plazo máximo e identificador de correlación) y resiliencia (estados de carga, vacío, error con "Reintentar").
- **Tensión resuelta:** el mockup pide menús desplegables "cuando pase el cursor"; en pantallas táctiles no existe *hover*. Decisión: hover solo con `@media (min-width: 992px) and (hover: hover)`; en móvil, clic dentro del menú colapsado.

## Diseño previo → implementación

El diseño previo es el boceto a mano [`docs/diseno/mockup-jugueteria.jpg`](diseno/mockup-jugueteria.jpg) (Semana 4).

| Elemento del mockup | Implementación | Estado | Archivo |
|---|---|---|---|
| Barra superior con logo, buscador, ícono de usuario y carrito | `.brand-logo`, `.header-search`, botón circular `.icon-btn` con menú de cuenta, carrito con `.cart-badge` (evento `ludiko:cart`) | Implementado | `includes/header.php`, `header.js` |
| Menú INICIO · Categorías ▾ | `navbar-expand-lg`; el desplegable de **Categorías** se carga desde `GET /categories`; hover solo en escritorio | Implementado | `header.php`, `header.js` |
| Menú Edades ▾ · Novedades · Ofertas | El sitio incluye Nosotros y Servicios; **no** hay filtro por edad, ni páginas de novedades u ofertas | **Pendiente** (requiere campo de edad en inventory) | — |
| "Juguete destacado" (imagen, nombre, precio, cantidad, carrito) | Carrusel de promociones con imagen, precio, `.price-tag` y botón "Agregar al carrito"; datos de `GET /promotions`. No cambia por día ni muestra estrellas/reseñas | Parcial | `index.php`, `home.js` |
| "Packs destacados" (carrusel con miniaturas) | Riel horizontal de **juguetes destacados** con scroll-snap y tarjeta final "Ver todo el catálogo". No hay miniaturas ni packs | Parcial | `home.js`, `ui.js` |
| Zona de filtros a la izquierda + tarjetas de producto | Catálogo con filtros por categoría y búsqueda a la izquierda (3/12) y grilla de tarjetas (nombre, precio, cantidad, botón) | Implementado | `catalogo.php`, `catalogo.js` |
| Tarjeta que cambia de imagen al pasar el cursor | No implementado (cada producto tiene una sola imagen) | **Pendiente** | — |
| Paleta de celestes y amarillo | Variables `--ludi-*` (celestes) y `--gold` (amarillo) en `styles.css` | Implementado | `styles.css` |
| Órdenes especiales con "¡Contáctanos!" | grid `col-lg-7 / col-lg-5`, `.special-box`, botón a `contacto.php?tipo=ORDEN_ESPECIAL` | Implementado | `index.php` |

Diferencias justificadas: en móvil las flechas del carrusel se ocultan (se desliza con el dedo y quedan los puntos); el riel muestra 1 tarjeta y fracción para sugerir desplazamiento; el carrito pasa junto al botón de menú para quedar siempre visible. Los elementos marcados como **Pendiente** o **Parcial** no se simularon: se declaran como brecha respecto del mockup.

## Reglas responsivas (grid, box model, flexbox)

| Región | < 576 | 576–767 | 768–991 | 992–1399 | ≥ 1400 |
|---|---|---|---|---|---|
| Header | logo 64 px, menú colapsado, carrito y usuario visibles | igual | logo col-2 | menú horizontal + buscador | igual |
| Carrusel | imagen arriba / texto abajo | igual | imagen 5/12 · texto 7/12, flechas | igual | igual |
| Destacados (riel) | 82 % por tarjeta | 50 % | 50 % | 28 % (3 + la 4ª asomando) | 25 % |
| Catálogo (grid) | 1 col | 2 col | 3 col | 3 col + filtros a la izquierda (3/12) | 4 col |
| Órdenes especiales | apilado | apilado | apilado | 7/12 + 5/12 | igual |

- **Grid:** Bootstrap 5.3.8 para la macroestructura (`row`, `col-*`, `row-cols-*`).
- **Box model:** `box-sizing: border-box` global; bordes de 2 px coherentes con el trazo del boceto; `padding` interno de tarjetas/paneles; `max-width` en logo y buscador; `min-width: 0` en el carrusel flexible; `aspect-ratio` en imágenes.
- **Flexbox:** header (título ↔ acciones), fila de compra de la tarjeta, títulos de sección con línea, riel de destacados, carrusel con flechas, líneas del carrito, tarjetas de pedido, estados operacionales.

## DOM y servicios

Todo el contenido de negocio se genera en tiempo de ejecución con `createElement`/`textContent` (sin `innerHTML` con datos): carrusel, destacados, catálogo, categorías del menú, carrito, pedidos, perfil y administración. Eventos con `addEventListener`, cambios de clases/atributos (`is-invalid`, `active`, `aria-pressed`, `data-state`). En la U1 los datos eran objetos `resAPI` simulados; desde la U2/U3 provienen del **API Gateway real** (`assets/js/core/api.js`). Contenido puramente informativo (equipo, canales, servicios) se lee de `assets/data/*.json` por HTTP.

Estados: `showLoading` (spinner), `showEmpty` (con acción), `showError` (mensaje comprensible, referencia de correlación y botón "Reintentar"), mensajes de formulario y *toasts*.

## Evidencia responsiva en cuatro anchos

Generada automáticamente por la prueba P28 (sin desborde horizontal; menú colapsado < 992 px; columnas 1/3/3/4): capturas de página completa en
[`evidencias/RUN-02/P28/`](../evidencias/RUN-02/P28/) — 360 px, 768 px, 1024 px y 1440 px para inicio, catálogo y carrito.

| Ancho | Qué escala, refluye o se transforma |
|---|---|
| 360 px | logo 64 px; menú hamburguesa; carrusel apilado sin flechas; riel 1 tarjeta + fracción; catálogo 1 columna; filtros sobre la grilla |
| 768 px | carrusel en dos columnas con flechas; riel 2 tarjetas; catálogo 3 columnas; footer en 3 columnas |
| 1024 px | menú horizontal con dropdowns por hover; buscador visible; filtros a la izquierda |
| 1440 px | catálogo 4 columnas; riel 4 tarjetas |
