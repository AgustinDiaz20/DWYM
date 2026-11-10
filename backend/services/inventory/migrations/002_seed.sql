-- Datos ficticios iniciales (estado restaurable con scripts/reset-data.js).
INSERT INTO products (id, sku, nombre, descripcion, categoria, precio, unidad, stock, imagen, destacado, activo, updated_at) VALUES
 ('p-001','BLO-ARCO-100','Bloques Gigantes Arcoíris (100 pzas)','Set de 100 bloques de construcción de colores, livianos y con bordes redondeados. Desde 3 años.','Construcción',29990,'pack',15,'/assets/img/productos/bloques.svg',1,1,'2026-11-01T00:00:00Z'),
 ('p-002','PEL-GATO','Peluche Gatito Miau','Peluche suave con forma de gatito, lavable. Ideal para los más pequeños.','Peluches',3990,'unidad',40,'/assets/img/productos/peluche-gato.svg',1,1,'2026-11-01T00:00:00Z'),
 ('p-003','PEL-PERRO','Peluche Perrito Wau','Peluche suave con forma de perrito, con orejas largas.','Peluches',3990,'unidad',35,'/assets/img/productos/peluche-perro.svg',1,1,'2026-11-01T00:00:00Z'),
 ('p-004','PEL-FLOR','Peluche Flor Sonriente','Flor de peluche con cara sonriente, ideal para regalo.','Peluches',5490,'unidad',25,'/assets/img/productos/peluche-flor.svg',1,1,'2026-11-01T00:00:00Z'),
 ('p-005','PUZ-SET-4','Set de Puzzles Educativos (4 u.)','Cuatro puzzles de madera con animales, números, letras y formas. Desde 4 años.','Puzzles',12990,'unidad',20,'/assets/img/productos/puzzles.svg',1,1,'2026-11-01T00:00:00Z'),
 ('p-006','PUZ-MAPA-60','Puzzle Mapamundi (60 piezas)','Puzzle de cartón grueso para aprender países y continentes. Desde 6 años.','Puzzles',8990,'unidad',18,'/assets/img/productos/mapamundi.svg',0,1,'2026-11-01T00:00:00Z'),
 ('p-007','CON-TREN','Mini Tren de Madera','Tren de madera con vagones encastrables y vías. Desde 2 años.','Construcción',4590,'unidad',50,'/assets/img/productos/tren.svg',0,1,'2026-11-01T00:00:00Z'),
 ('p-008','ART-PINT','Set de Pintura para Niños','Set con témperas lavables, pinceles y paleta. Desde 4 años.','Arte',6990,'unidad',3,'/assets/img/productos/pintura.svg',0,1,'2026-11-01T00:00:00Z'),
 ('p-009','PEL-DINO','Dinosaurio Sorpresa de Peluche','Dinosaurio de peluche con una sorpresa escondida en su bolsillo.','Peluches',9990,'unidad',0,'/assets/img/productos/dinosaurio.svg',0,1,'2026-11-01T00:00:00Z');

INSERT INTO promotions (id, product_id, titulo, subtitulo, orden, activo) VALUES
 ('promo-1','p-001','Bloques Gigantes Arcoíris','100 bloques de colores para construir sin límites.',1,1),
 ('promo-2','p-005','Set de Puzzles Educativos','Cuatro puzzles para aprender jugando.',2,1),
 ('promo-3','p-004','Peluche Flor Sonriente','Un regalo suave que nunca se marchita.',3,1),
 ('promo-4','p-002','Peluche Gatito Miau','Nuestro gatito, favorito de los niños.',4,1);
