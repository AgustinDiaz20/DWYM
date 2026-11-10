<div align="center">

# Juguetería Ludiko — Aplicación Integrada (Unidades 1, 2 y 3)

**Creado por Agustín Díaz**

</div>
*Proyecto de tienda en línea de juguetes didácticos y lúdicos para niños.*

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

 Cambios — Semana 4 

Definición de Temática
- **E-Commerce de Juguetes Didácticos:** Se definió formalmente el enfoque del sitio web, orientado a la venta en línea de productos educativos y juegos didácticos (Juguetería Ludiko).

Mockup y Diseño UI/UX
- **Subida del Mockup inicial:** Se integró la propuesta gráfica e interfaz de usuario estructurada a mano (`docs/diseno/mockup-jugueteria.jpg`), definiendo la distribución principal de la tienda:
  - **Header & Navegación:** Menú principal con categorías clave (*Inicio, Categorías, Edades, Novedades, Ofertas*), barra de búsqueda, acceso a perfil y carrito de compras.
  - **Juguete Destacado:** Sección promocional diaria con precio, sistema de calificaciones por estrellas, control de cantidad y acceso rápido al carrito.
  - **Packs Destacados:** Módulo interactivo con carrusel de imágenes para visualizar la variedad de productos incluidos en cada paquete.
  - **Catálogo & Filtros:** Zona de filtrado y orden de búsqueda, junto con tarjetas de producto que incluyen previsualización dinámica al pasar el cursor.

Paleta de Colores e Identidad Visual
- **Esquema de Colores:** Se definió una paleta basada en **degradados en tonalidades celestes y colores claros**, buscando transmitir una estética infantil, limpia, accesible y didáctica.

---

 Cambios — Semana 5 (Unidad 1: Front-end)

Desarrollo Responsivo y UI
- Integración de **Bootstrap (grid)**, box model y flexbox para garantizar una correcta adaptabilidad en distintos tamaños de pantalla.
- Manipulación de **DOM dinámico** para mejorar la experiencia del usuario de forma fluida.
- Manejo visual de los distintos momentos de interacción: **estados de carga, vacío y error**.
- *Nota:* El detalle completo de esta implementación se encuentra en `docs/unidad1-frontend.md`.

---

 Cambios — Semana 6 (Unidad 2: Backend Seguro)

Arquitectura y Microservicios
- **API Gateway (Puerto 8080):** Establecido como el único backend público. Incluye lista blanca de rutas, autenticación mediante JWT RS256, revocación, límites de solicitudes (rate limiting), timeouts, CORS y manejo de `X-Correlation-Id`.
- **Servicios Privados:** Se construyeron módulos aislados que exigen identidad de servicio HMAC:
  - `auth`: Credenciales scrypt, sesiones y JWT.
  - `inventory`: Catálogo, control de stock y reservas.
  - `orders`: Gestión de pedidos y transiciones.
  - `clients`: Perfil cifrado y solicitudes.
  - `payments`: Pagos y webhooks firmados, integrados con un sandbox (Puerto 8090).
- **GraphQL Gateway:** Encargado de la agregación de los servicios (orders, inventory, payments y clients).
- **Gestor de Secretos:** Servicio ejecutado al arranque que administra credenciales con ACL por consumidor.
- *Nota:* Informe técnico disponible en `docs/unidad2-informe.md`.

---

 Cambios — Semana 7 (Unidad 3: Integración y Validación)

Validación del Sistema
- **Protocolo de Integración:** Verificación exhaustiva de la comunicación entre el API Gateway, los microservicios y el gestor de secretos.
- **Monitoreo y Trazabilidad:** Uso de `X-Correlation-Id` para registrar y auditar las operaciones del backend.
- *Nota:* Conclusiones e incidencias documentadas en `docs/unidad3-informe.md`.

---

 Configuración y Despliegue 

Requisitos del Sistema
- **Node.js:** ≥ 22.13 (usa `node:sqlite`).
- **PHP:** ≥ 8.1 (para el servidor frontend embebido).
- **Dependencias:** `npm` instalado.
- *(Opcional)* **Docker + Docker Compose** para contenedores y separación de redes.

Inicio Rápido (Modo Local)
- Instalar dependencias: `cd backend && npm ci && cd ..`
- Generar secretos iniciales: `node backend/scripts/init-secrets.js`
- Arrancar el entorno: `node backend/scripts/start-local.js`
- *Uso:* Abrir `http://localhost:8000`. Las credenciales base (admin, clienteA, clienteB) están en `.secrets/seed-accounts.json` (archivo generado localmente, no compartir).
- Restablecer la base de datos (requiere sistema detenido): `node backend/scripts/reset-data.js`

Alternativa con Docker Compose
- Generar secretos: `node backend/scripts/init-secrets.js`
- Levantar servicios: `docker compose up --build`
- *Nota:* Esto publicará únicamente los puertos 8000, 8080 y 8090; dejando el resto en una red `internal`.

---

 Estructura del Proyecto 

Organización de Directorios
- `frontend/` : Páginas PHP e interfaz gráfica (css, js, imágenes, librerías autoalojadas).
- `backend/` : Lógica de servidor, `services/`, librería compartida y `scripts/` operativos (start, reset, init-secrets).
- `docs/` : Documentación, diagramas arquitectónicos, ADRs y trazabilidad del proyecto.
