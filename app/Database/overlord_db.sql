CREATE USER 'overlord_admin'@'localhost' IDENTIFIED BY ''; -- Creación del usuario
GRANT ALL PRIVILEGES ON overlord_db.* to 'overlord_admin'@'localhost'; -- Asignar persmisos al usuario
-- /////////////////////////////////////////////////////////////////////////
DROP DATABASE overlord_db; -- Borrar la base de datos

-- CREATION OF 'overlord_db' DATABASE
CREATE DATABASE overlord_db DEFAULT CHARSET utf8mb4 COLLATE utf8mb4_general_ci;
USE overlord_db;

-- CREATION OF 'rol' TABLE
CREATE TABLE rol (
    id_rol int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID del rol',
    rol varchar(45) NOT NULL COMMENT 'Nombre del rol'
)ENGINE=INNODB;

-- INSERT VALUES INTO 'usuario' TABLE
INSERT INTO rol (rol) VALUES
('Administrador'),
('Operador'),
('Usuario');

-- CREATION OF 'usuario' TABLE
CREATE TABLE usuario (
    id_usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID del usuario',
    nombre varchar(45) NOT NULL COMMENT 'Nombre del usuario',
    apellido_p varchar(45) NOT NULL COMMENT 'Apellido paterno del usuario', 
    apellido_m varchar(45) NOT NULL COMMENT 'Apellido materno del usuario',
    sexo varchar(1) NOT NULL COMMENT 'Masculino (M), Femenino (F)',
    email varchar(60) NOT NULL COMMENT 'Email del usuario',
    password varchar(60) NOT NULL COMMENT 'Contraseña del usuario',
    imagen varchar(1024) NULL COMMENT 'Dirección de la imagen del usuario',
    id_rol int NOT NULL COMMENT 'ID del rol que desempeña el usuario',
    FOREIGN KEY (id_rol) REFERENCES rol(id_rol)
)ENGINE=INNODB;

-- INSERT VALUES INTO 'usuario' TABLE
INSERT INTO usuario (nombre, apellido_p, apellido_m, sexo, email, password, id_rol) VALUES
('Darien', 'Pérez', 'Cano', 'M', 'darien@gmail.com', 'darien', 1),
('Andric', 'Pérez', 'Cano', 'M', 'andric@gmail.com', 'andric', 2),
('Stacey', 'Conde', 'Corona', 'F', 'stacey@gmail.com', 'stacey', 3),
('Paulina', 'Fernández', 'Macia', 'F', 'paulina_905@gmail.com', 'paulina_905', 1),
('Igor', 'Ávila', 'Sánchez', 'F', 'igor_216@gmail.com', 'igor_216', 2),
('Emily', 'Vilchez', 'González', 'F', 'emily_343@gmail.com', 'emily_343', 3),
('Héctor', 'Campo', 'Méndez', 'M', 'héctor_007@gmail.com', 'hector_007', 1);

-- CREATION OF 'ins_baterias' TABLE
CREATE TABLE ins_baterias (
    id_bateria int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID de la batería',
    precio decimal(10,2) NOT NULL COMMENT 'Precio de la bateria en MXN',
    stock int NOT NULL COMMENT 'Número de unidades disponibles',
    marca varchar(50) NOT NULL COMMENT 'Marca de la batería',
    modelo varchar(100) NOT NULL COMMENT 'Modelo de la batería',
    acabado_color varchar(50) NOT NULL COMMENT 'Acabado o color de la batería',
    carcasa varchar(50) NOT NULL COMMENT 'Material de la carcasa',
    elementos_extra text NULL COMMENT 'Elementos extra del kit de batería',
    piezas_totales int NOT NULL COMMENT 'Elementos totales del kit de batería',
    descripcion text NOT NULL COMMENT 'Descripción del producto',
    imagen varchar(1024) NULL COMMENT 'Imagen del producto'
)ENGINE=INNODB;

-- CREATION OF 'ins_guitarras' TABLE
CREATE TABLE ins_guitarras (
    id_guitarra int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID de la guitarra',
    precio decimal(10,2) NOT NULL COMMENT 'Precio de la guitarra en MXN',
    stock int NOT NULL COMMENT 'Número de unidades disponibles',
    marca varchar(50) NOT NULL COMMENT 'Marca de la guitarra',
    modelo varchar(100) NOT NULL COMMENT 'Modelo de la guitarra',
    acabado_color varchar(50) NOT NULL COMMENT 'Acabado o color de la guitarra',
    cuerpo varchar(50) NOT NULL COMMENT 'Material del cuerpo de la guitarra',
    mastil varchar(50) NOT NULL COMMENT 'Material del mastil de la guitarra',
    diapason varchar(50) NOT NULL COMMENT 'Material del diapason de la guitarra',
    no_trastes int NOT NULL COMMENT 'Número de trastes de la guitarra',
    no_cuerdas int NOT NULL COMMENT 'Número de cuerdas de la guitarra',
    descripcion text NOT NULL COMMENT 'Descripción del producto',
    imagen varchar(1024) NULL COMMENT 'Imagen del producto'
)ENGINE=INNODB;

-- CREATION OF 'ins_monitores' TABLE
CREATE TABLE ins_monitores (
    id_monitor int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID del monitor',
    precio decimal(10,2) NOT NULL COMMENT 'Precio del monitor en MXN',
    stock int NOT NULL COMMENT 'Número de unidades disponibles',
    marca varchar(50) NOT NULL COMMENT 'Marca del monitor',
    modelo varchar(100) NOT NULL COMMENT 'Modelo del monitor',
    acabado_color varchar(50) NOT NULL COMMENT 'Acabado o color del monitor',
    material varchar(50) NOT NULL COMMENT 'Material principal del monitor',
    no_monitores int NOT NULL COMMENT 'Número de monitores en el paquete',
    anchura_mm int NOT NULL COMMENT 'Anchura del monitor',
    altura_mm int NOT NULL COMMENT 'Altura del monitor',
    profundidad_mm int NOT NULL COMMENT 'Profundidad del monitor',
    descripcion text NOT NULL COMMENT 'Descripción del producto',
    imagen varchar(1024) NULL COMMENT 'Imagen del producto'
)ENGINE=INNODB;

-- CREATION OF 'ins_teclados' TABLE
CREATE TABLE ins_teclados (
    id_teclado int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'ID del teclado',
    precio decimal(10,2) NOT NULL COMMENT 'Precio del teclado en MXN',
    stock int NOT NULL COMMENT 'Número de unidades disponibles',
    marca varchar(50) NOT NULL COMMENT 'Marca del teclado',
    modelo varchar(100) NOT NULL COMMENT 'Modelo del teclado',
    acabado_color varchar(50) NOT NULL COMMENT 'Acabado o color del teclado',
    monitor varchar(20) NOT NULL COMMENT 'Tipo de monitor del teclado.',
    no_teclas int NOT NULL COMMENT 'Número de teclas del teclado',
    anchura_mm int NOT NULL COMMENT 'Anchura del teclado',
    altura_mm int NOT NULL COMMENT 'Altura del teclado',
    profundidad_mm int NOT NULL COMMENT 'Profundidad del teclado',
    descripcion text NOT NULL COMMENT 'Descripción del producto',
    imagen varchar(1024) NULL COMMENT 'Imagen del producto'
)ENGINE=INNODB;

-- INSERT VALUES INTO 'ins_baterias' TABLE
INSERT INTO ins_baterias (precio, stock, marca, modelo, acabado_color, carcasa, elementos_extra, piezas_totales, descripcion, imagen) VALUES
(13229.99, 5, 'DDrum', 'D2 Drum Kit', 'Midnight Black', 'Tilo', '1 soporte hi-hat, 1 soporte de platillos, 1 soporte de snare, 1 taburete, 1 pedal de bombo, 2 platos 14" para hi-hat, 1 plato 16" crash.', 14, 'DDrum El kit de batería de 6 piezas D2 22" es una batería ejemplar diseñada para principiantes y aprendices. Es todo lo que necesitas y más. Después de todo, DDrum se especializa en baterías diseñadas y hechas con cariño por bateristas, para bateristas. Así que, ¿a quién mejor recurrir para su primer kit?', 'd01.jpg'),
(21099.99, 2, 'Yamaha', 'Stage Custom', 'Raven Black', 'Abedul', 'N/A', 5, '¡Nuevo y mejorado! El kit de batería Yamaha Stage Custom Birch moderniza las características del clásico kit anterior. La parte posterior de la carcasa de 5 piezas Stage Custom de Yamaha presenta una estructura de 6 capas y está hecha 100% de abedul, produciendo tonos fuertes y resonantes.', 'd02.jpg'),
(32239.99, 1, 'Tama', 'Superstar Classic Exotix', 'Gloss Sapphire Lacebark Pine', 'Arce', 'N/A', 7, 'Diseño rompedor. Tono de ley. El paquete de cascos de 7 piezas Tama Superstar Classic Exotix de 22" sube el listón y reduce el precio. Perfecto si buscas una relación calidad-precio excepcional. La nueva versión de Tama del Superstar incluye cascos de arce cuidadosamente seleccionados, que ofrecen un carácter tonal rico y cálido con tonos medios y brillantes.', 'd03.jpg'),
(37199.99, 6, 'Pearl', 'Crystal Beat', 'Ultra Clear', 'Acrílico', 'N/A', 4, 'El Pearl Crystal Beat 22" 4pc Shell Pack nació para ser el centro de atención. Sus llamativas carcasas acrílicas ofrecen una estética transparente como ninguna otra, con un tono singularmente deslumbrante a juego. Su diseño moldeado y sin costuras imparte su tono con una resonancia más profunda y completa para equilibrar la firma del acrílico y el ataque agresivo.', 'd04.jpg'),
(8999.99, 10, 'Stagg', 'Junior Drum Kit', 'Black', 'Triplay', '1 soporte hi-hat, 1 soporte de platillos, 1 soporte de snare, 1 taburete, 1 pedal de bombo, 2 platos 8" para hi-hat, 1 plato 10" para crash, 1 par de baquetas.', 15, '¡Todo lo que un niño necesita para convertirse en baterista! El kit de batería junior Stagg de 5 piezas y 16" con herrajes y trono es perfecto para cualquier niño. El kit de batería incluye un bombo, tom drums, snare drum, charles y platillos crash junto con sus soportes y soportes. ', 'd05.jpg'),
(9599.99, 2, 'Pearl', 'Roadshow Junior', 'Grindstone Sparkle', 'Álamo', '1 soporte hi-hat, 1 soporte de platillos, 1 soporte de snare, 1 taburete, 1 pedal de bombo, 2 platos 10" para hi-hat, 1 plato 13" para crash, 1 par de baquetas.', 15, 'El kit de batería completo Pearl Roadshow Junior de 5 piezas inspira diversión y creatividad infinitas y desarrollará la coordinación, la disciplina y el enfoque de su hijo. Todo mientras se divierten y aprenden a tocar un instrumento.', 'd06.jpg'),
(10199.99, 4, 'Mapex', 'Tornado III Rock Fusion', 'Burgundy', 'Tilo', '1 soporte hi-hat, 1 soporte de platillos, 1 soporte de snare, 1 taburete, 1 pedal de bombo, 2 platos para hi-hat, 1 plato para crash, 1 par de baquetas.', 15, 'El Mapex Tornado III 22" Rock Fusion Drum Kit, Burgundy se considera el mejor kit de batería de nivel básico que existe. La serie ofrece una calidad inigualable por su precio accesible sin necesidad de preocuparse por comprar extras.', 'd07.jpg'),
(10699.99, 1, 'WHD', 'Genesis Complete', 'Jet Black', 'Álamo', '1 soporte hi-hat, 2 soportes de platillos, 1 soporte de snare, 1 taburete, 1 pedal de bombo, 2 platos 14" para hi-hat, 1 plato 16" para crash, 1 plato 18" para ride, 1 par de baquetas.', 17, 'Empieza a tocar la batería. Un kit de batería para principiantes todo en uno. Aprovechando la experiencia de percusión premium de WHD, WHD Genesis es la introducción perfecta al mundo de la percusión. Tienes todo lo que necesitas para empezar a tocar jazz, rock, metal y más.', 'd08.jpg'),
(11119.99, 7, 'Natal', 'EVO Fusion Drum', 'Red', 'Tilo', '1 soporte hi-hat, 1 soporte de platillos, 1 soporte de snare, 1 taburete, 1 pedal de bombo, 2 platos 14" para hi-hat, 1 plato 16" crash, 1 par de baquetas.', 15, 'El Natal EVO 20" Fusion Drum Kit with Hardware & Cymbals, Red es un excelente kit de batería para principiantes de Natal, que incluye todo lo que necesita para comenzar su viaje con la batería. Además de un juego de 5 piezas de cascos de tilo, el paquete incluye hardware de batería, platillos y accesorios. ', 'd09.jpg'),
(11499.99, 5, 'Tama', 'Club-Jam', 'Aqua Blue', 'Álamo', 'N/A', 4, 'El Tama Club-Jam Shell Pack con Cymbal Holder, Aqua Blue es un paquete de carcasas de alta calidad de Tama, que se inspira en los kits antiguos y los desarrolla para llevar el sonido y la estética antiguos a la actualidad. ', 'd10.jpg'),
(12339.99, 2, 'Dixon', 'American Fusion', 'Cyclone Red', 'Álamo', '1 soporte hi-hat, 2 soportes de platillos, 1 soporte de snare, 1 taburete, 1 pedal de bombo, 2 platos 14" para hi-hat, 1 plato 16" para crash, 1 plato 18" para ride, 1 par de baquetas.', 17, 'El kit de batería Dixon Drums Spark de 22" American Fusion de 5 piezas incluye todo lo que necesitas para empezar a tocar directamente desde la caja, solo agrega las baquetas y ¡listo! Los cascos de álamo de 6 capas y 6,8 mm proporcionan un tono cálido con mucha proyección.', 'd11.jpg'),
(12529.99, 1, 'Natal', 'Arcadia Birch', 'Red Sparkle', 'Abedul', 'N/A', 5, 'El Natal Arcadia Birch 5pc 22" Shell Pack, Red Sparkle es un abarcador de todas las necesidades para que los bateristas perfeccionen sus habilidades, junto con algunas características premium de kits de gama superior. El casco de abedul produce un sonido grave y profundo, mientras conserva un tono brillante y claro.', 'd12.jpg'),
(13019.99, 4, 'Mapex', 'Mars Rock Fusion', 'Dragonwood', 'Abedul', 'N/A', 5, '¿Está buscando un kit asequible y de alta calidad? El Mapex Mars 22" Rock Fusion Shell Pack de 5 piezas realmente redefine qué esperar de este rango de precios. Las conchas de abedul proporcionan algunos de los tonos más dulces imaginables. ', 'd13.jpg'),
(13229.99, 5, 'Yamaha', 'Rydeen', 'Hot Red', 'Abedul ', '1 soporte hi-hat, 2 soportes de platillos, 1 soporte de snare.', 9, 'El kit de batería Yamaha Rydeen de 22" con hardware, Hot Red lleva el nombre del dios japonés del trueno y está diseñado para ofrecer una calidad y un rendimiento inigualables para principiantes, sin romper el banco. ', 'd14.jpg'),
(14189.99, 6, 'Mapex', 'Mars Bebop', 'Driftwood', 'Abedul', 'N/A', 4, 'Busca un kit compacto que se cargue fácilmente en su automóvil? Entonces no busques más. El Mapex Mars 18" Bebop Shell Pack de 4 piezas cuenta con carcasas de poca profundidad y tamaños más pequeños, lo que lo hace ideal para el baterista que toca y tiene poco espacio. ', 'd15.jpg');

-- INSERT VALUES INTO 'ins_guitarras' TABLE
INSERT INTO ins_guitarras (precio, stock, marca, modelo, acabado_color, cuerpo, mastil, diapason, no_trastes, no_cuerdas, descripcion, imagen) VALUES
(37499.99, 3, 'Gibson', 'SG Standard', 'Heritage Cherry', 'Caoba', 'Caoba', 'Palo de rosa', 22, 6, 'Todo guitarrista reconoce una icónica Gibson SG cuando la ve. Con un mástil de caoba, dos Gibson 490 humbucker y un cuerpo elegante basado en los modelos SG de los "60s, esta guitarra representa lo mejor de la historia y del ahora,con un diseño clásico y características modernas.', 'g01.jpg'),
(16059.99, 4, 'Epiphone', 'Les Paul Custom', 'Alpine White', 'Caoba', 'Caoba', 'Ébano', 22, 6, 'Un diseño maestro, echo para guitarristas modernos. Esta Les Paul Custom toma como base las características clasicas, y las lleva a un nuevo nivel. Graves profundos, agudos vertiginosos, y todo lo que hay en medio gracias a sus dos pastillas humbucker. Llamarás la atención, seguro, y sin perder el estilo.', 'g02.jpg'),
(5549.99, 8, 'Ibanez', 'GRGA120QA GIO', 'Transparent Black Sunburst', 'Tapa de grano de arce acolchado con cuerpo de álamo', 'Arce', 'Corazón Púrputa', 24, 6, 'Ya seas un principiante, o un maestro del shreding, esta guitarra se adaptará a cualquiera de tus necesidades. Sus pastillas Infinity R son ideales para tonos saturados y sucios, hechas para las almas que buscan el rock pesado y el metal.', 'g03.jpg'),
(9199.99, 3, 'Ibanez', 'RG421AHM', 'Blue Moon Burst', 'Fresno', 'Arce', 'Arce', 24, 6, 'Combinando sus características distintivas, como un aspecto nítido, humbuckers potentes y mástiles delgados, esta guitarra ha sido esculpida para ser versátil, adaptandose a cualquier tipo de música gracias a sus pastillas Quantum Humbucker.', 'g04.jpg'),
(86459.99, 1, 'Ibanez', 'PIA3761', 'Stallion White', 'Aliso', 'Arce/Nogal', 'Palo de rosa', 24, 6, 'Una leyenda viviente. Un rendimiento inigualable. Un estilo visionario. Una clase magistral total. Citando a Steve Vai, "esta guitarra es una de las mejores en el universo". Esta hacha legendaria te brinda acceso a todo tipo de texturas tonales, desde un mordisco arenoso, hasta un crujido vicioso en un abrir y cerrar de ojos.', 'g05.jpg'),
(73599.99, 2, 'Gibson', 'ES-335', 'Sixties Cherry', 'Triplay Arce/Álamo/Arce', 'Caoba', 'Palo de rosa', 22, 6, 'Un tono que definió una época. La Gibson ES-335 es un instrumento que rebosa de la calidad atemporal de Gibson. El sonido legendario que sentó las bases para el rock "n" roll de Gibson se combina con un diseño que anhela el escenario moderno. Mostrando el potencial ilimitado de un cuerpo semi-hueco, esta guitarra anhela ser exhibida en el escenario. ', 'g06.jpg'),
(26799.99, 1, 'Ibanez', 'RGIR9FME', 'Faded Denim Flat', 'Arce flameado', 'Arce/Nogal', 'Jatoba', 24, 9, 'El siguiente nivel de pesado. En la etiqueta de hierro Ibanez RGIR9FME de 9 cuerdas, ha encontrado el instrumento de metal más pesado. Con 9 cuerdas, podrá hacer un ruido serio cuando toque esas notas más bajas.', 'g07.jpg'),
(15459.99, 4, 'Epiphone', 'Explorer', 'Ebony', 'Caoba', 'Caoba', 'Laurel Indio', 22, 6, 'Tono inconfundible. Diseño impresionante. Todo en una guitarra. El Epiphone Explorer rinde el máximo homenaje al codiciado ícono de los años 50. Desbloquee la escala completa de su potencial creativo. Únase a personas como Eric Clapton, The Edge y Dave Grohl, que usaron Explorer para obtener su sonido icónico.', 'g08.jpg'),
(10199.99, 7, 'Hartwood', 'Speedway Vibrato', 'Greaser Black', 'Tilo', 'Arce', 'Arce', 22, 6, 'Velocidad a lo largo. La guitarra Hartwood Speedway Vibrato ofrece una jugabilidad excepcional y te hará tocar riffs toda la noche. Con un diseño de cuerpo semihueco, cuenta con una resonancia audaz y orgullosa y un sonido distintivo. ', 'g09.jpg'),
(53499.99, 2, 'Gibson', 'Flying V', 'Antique Natural', 'Caoba', 'Caoba', 'Palo de rosa', 22, 6, 'Más potencia que un cohete. La Gibson Flying V es una guitarra que ha sellado su lugar en la historia como un icono. Su poderosa imagen se combina con su sonido aún más intenso, ofreciendo una experiencia de juego como ninguna otra.', 'g10.jpg'),
(30299.99, 4, 'Jackson', 'KV7Q Corey Beaulieu King V', 'Winterstorm', 'Caoba', 'Arce', 'Ébano', 24, 7, 'No se le llama "El Rey" por nada. Uno de los mejores guitarristas de esta generación, Corey Bealieu, y su Jackson Pro Corey Beaulieu King V de 7 cuerdas, están en la cima de su juego. Habiendo legado nuestros oídos con innumerables líneas principales melódicas y solos pesados, es lógico que su firma sea un demonio de velocidad de alta ganancia.', 'g11.jpg'),
(112699.99, 1, 'PRS', '35th Anniversary Custom 24', 'Emmerald', 'Arce/Caoba', 'Caoba', 'Palo de rosa', 24, 6, 'Actúa con la historia detrás de ti. El PRS 35th Anniversary Custom 24 es un guiño a la estimada magnificencia de la fabricación de guitarras que PRS nunca deja de ofrecer. Con características del modelo Custom 24 original, esta guitarra es un instrumento en el que sabe que puede confiar.', 'g12.jpg'),
(4789.99, 5, 'Gear4music', 'Harlem Z', 'Black', 'Tilo', 'Arce', 'Laminado de álamo', 24, 6, 'La guitarra eléctrica Harlem Z de Gear4music presenta una forma icónica en un llamativo acabado burl transparente negro, ideal para músicos de rock y metal. Las dos pastillas de voz modernas de alto rendimiento crean una gran plataforma para triturar pistas y ritmos potentes por igual.', 'g13.jpg'),
(347759.99, 2, 'PRS', 'Private Stock', 'High Gloss Nitro', 'Caoba africana y Arce rizado', 'Palisandro Indio Oriental', 'Arce/Ébano', 24, 6, 'El stock privado de PRS Ltd Edition es lo mejor de lo mejor. Todas las maderas premium que lo componen han sido seleccionadas a mano de la legendaria bóveda Private Stock de PRS, que contiene las maderas más finas que jamás haya visto. ', 'g14.jpg'),
(5099.99, 5, 'Ibanez', 'GRX40 GIO', 'Candy Apple Red', 'Álamo', 'Arce GRX', 'Jatoba', 22, 6, 'Un hacha para las masas. La Ibanez GRX40 GIO es una guitarra impresionante que está llena de potencial. Con tres pastillas Infinity, incluida una humbucker y dos bobinas simples, ofrece una amplia gama de tonos que le darán el poder de hacer que cualquier género suene excelente. ', 'g15.jpg');

-- INSERT VALUES INTO 'ins_monitores' TABLE
INSERT INTO ins_monitores (precio, stock, marca, modelo, acabado_color, material, no_monitores, anchura_mm, altura_mm, profundidad_mm, descripcion, imagen) VALUES
(2629.99, 5, 'Presonus', 'Eris E3.5', 'Negro', 'Fibra de densidad media', 2, 141, 210, 162, 'Los monitores multimedia activos Presonus Eris E3,5 pulgadas, par, son lo último en monitores de estudio compactos y portátiles, diseñados para músicos, productores y configuraciones multimedia. Con un diseño biamplificado compuesto por un transductor Kevlar LF de 3,5 pulgadas y un transductor de alta frecuencia de cúpula de seda de 1 pulgada, el Presonus Eris E3.5 ofrece un amplio rango de frecuencia y componentes de primera calidad.', 'm01.jpg'),
(2999.99, 6, 'Mackie', 'CR3-X', 'Negro', 'Metal cepillado', 2, 163, 231, 170, 'Los altavoces de monitor multimedia Mackie CR3-X de 3" son la solución perfecta para músicos en casa, jugadores, creadores de contenido en línea, transmisores y más. La conectividad flexible y el excelente rendimiento de audio aseguran que no importa qué tarea estés haciendo, ya sea relajante. escuchando sus canciones favoritas, mezclando su música o sumergiéndose en un juego en línea con sus amigos.', 'm02.jpg'),
(3219.99, 2, 'Mackie', 'CR4-X', 'Negro', 'Metal cepillado', 2, 180, 263, 192, 'No se conforme con un sonido deficiente. Lleva tu escucha al siguiente nivel. Tanto si eres músico, creador de contenido, jugador o simplemente te encanta escuchar música y te preocupas por la calidad del sonido. Los altavoces de monitor multimedia Mackie CR4-X de 4" son para usted.', 'm03.jpg'),
(3599.99, 6, 'SubZero', 'Active', 'Negro', 'MDF, PVC', 1, 225, 394, 242, 'Compacto y muy versátil. El monitor de estudio activo SubZero de 6" es el mejor monitor de campo cercano para cualquier grabador doméstico. Ya sea que esté trabajando en estéreo o en sonido envolvente. Este altavoz está aquí para nivelar el campo de juego.', 'm04.jpg'),
(6289.99, 7, 'ESI', 'Aktiv', 'Negro', 'MDF, PVC', 2, 250, 176, 200, 'El monitor de estudio activo ESI aktiv 05 es un monitor de referencia de estudio de 8" de alto rendimiento que cuenta con un controlador Kevlar LF de 5" y un tweeter de cúpula de seda de 1". Este monitor de estudio de calidad profesional ofrece 60 vatios de potencia a través de su sistema de altavoces de 2 vías.', 'm05.jpg'),
(7849.99, 1, 'KRK', 'RP5 Classic', 'Negro', 'Metal', 2, 190, 285, 241, 'Mejora tus habilidades de mezcla y masterización. El monitor de estudio clásico KRK RP5 es una valiosa adición al arsenal de cualquier profesional y entusiasta. El monitor es el resultado de más de 30 años de innovación de uno de los principales fabricantes de monitores de estudio del mundo.', 'm06.jpg'),
(100299.99, 4, 'Neumann', 'KH310A', 'Negro', 'Metal', 2, 383, 253, 292, 'El monitor de estudio de campo cercano activo de tres vías Neumann KH310A es un monitor de estudio activo de tres vías triamplificado que cuenta con un controlador LF de 8,25", un controlador MF de 3" y un controlador HF de 1". Este monitor de estudio de primera calidad está diseñado con una transparencia absoluta, lo que permite escuchar todos los matices del sonido original, sin añadir coloración para un rendimiento totalmente equilibrado. ', 'm07.jpg'),
(2319.99, 5, 'Hercules', 'DJMonitor', 'Negro', 'MDF, PVC', 2, 135, 195, 155, 'Monitores perfectos para aspirantes a DJ. Los Hercules DJMonitor 32 son un par de monitores de estudio activos de 3 pulgadas, diseñados pensando en los DJ. Hercules es famoso por sus controladores de DJ, por lo que el siguiente paso fue introducir monitoreo de primera calidad para DJ. ', 'm08.jpg'),
(4119.99, 8, 'Pioneer', 'DM-40', 'Blanco', 'Metal', 2, 146, 227, 223, 'Los altavoces de monitor activos Pioneer DM-40 son versátiles y versátiles, ideales para cualquier configuración doméstica. Estos monitores de escritorio producen un sonido rico y balanceado ideal para DJs, producción y reproducción en general.', 'm09.jpg'),
(3699.99, 1, 'JBL', '104-BT', 'Blanco', 'ABS con rejilla metálica', 2, 152, 240, 125, 'Haga que su estudio en casa cobre vida con los monitores de referencia Bluetooth JBL 104-BT. Cada altavoz ultraelegante se integrará a la perfección en la configuración de su estudio, brindándole todo lo que necesita para comenzar a mejorar sus mezclas.', 'm10.jpg'),
(7829.99, 3, 'Avantone', 'Mixcube', 'Butter Cream', 'MDF 18mm', 2, 165, 165, 165, 'Los Avantone Active MixCubes son monitores de mini-referencia de estudio blindados de rango completo. Su diseño está inspirado en el legado de los Sound Cubes 5C utilizados en prácticamente todos los estudios principales durante los últimos 25 años. ', 'm11.jpg'),
(9099.99, 8, 'Yamaha', 'KS5', 'Negro', 'MDF Bass Reflex', 2, 180, 263, 192, 'El paquete de monitores de estudio activos Yamaha HS5 (par) con almohadillas de aislamiento ofrece dos monitores de estudio de campo cercano de primera calidad con un woofer de cono de 5 pulgadas y un tweeter de cúpula de 1 pulgada. ', 'm12.jpg'),
(27234.99, 7, 'Focal', 'Solo 6 BE', 'Dark Red', 'Paneles MDF', 1, 225, 385, 252, 'El altavoz de monitor de estudio activo Focal Solo 6 BE (único) es un monitor profesional de 2 vías que combina un tamaño compacto con potencia bruta y una respuesta de graves ampliada. Ideal para mezclar y masterizar, el Focal Solo 6 BE cuenta con un woofer medio tipo sándwich en forma de "W" compuesto de 6,5 pulgadas que combina neutralidad en el rango medio.', 'm13.jpg'),
(9245.99, 1, 'Palmer', 'Sutdimon', 'Negro', 'Contrachapado de abedul, MDF', 2, 190, 268, 215, 'Mezcla y masteriza con confianza. El monitor de estudio de referencia con alimentación de 5" de Palmer, sencillo, es perfecto para mezclar y masterizar música, y ofrece una fidelidad de audio y una precisión de sonido excepcionales.', 'm14.jpg'),
(12348.99, 6, 'ESI', 'uniK', 'Negro', 'MDF', 2, 190, 265, 210, 'El monitor de estudio activo ESI uniK 08+ es un monitor de referencia activo de grado de estudio de 5" con una salida de 40W. Este monitor de estudio activo profesional cuenta con un controlador de baja frecuencia de Kevlar de 4" y un nuevo tweeter magnetostático de alta frecuencia diseñado a medida que produce tonos graves gruesos y dominantes con una respuesta de alta frecuencia articulada y transparente.', 'm15.jpg');

-- INSERT VALUES INTO 'ins_teclados' TABLE
INSERT INTO ins_teclados (precio, stock, marca, modelo, acabado_color, monitor, no_teclas, anchura_mm, altura_mm, profundidad_mm, descripcion, imagen) VALUES
(1229.99, 6, 'Casio', 'SA 77 Mini', 'Negro', 'LCD', 44, 606, 78, 198, 'Perfecto para los dedos pequeños. El mini teclado portátil Casio SA 77 está cuidadosamente diseñado con un poderoso conjunto de funciones fáciles de usar. Equipado con 100 sonidos diferentes, el SA 77 constituye una emocionante introducción a la interpretación ya la música electrónica.', 'k01.jpg'),
(1349.99, 4, 'Alesis', 'Harmony', 'Negro', 'LED', 32, 559, 64, 165, 'Comienza el viaje para convertirte en compositor. El teclado portátil Alesis Harmony 32 con parlantes incorporados le brinda todo el espacio del mundo para ser creativo. Rápidamente te volverás experto en el teclado, inventando pequeños jingles y melodías, mientras perfeccionas tu oído y te preparas para un futuro musical.', 'k02.jpg'),
(1639.99, 1, 'Yamaha', 'PSS E30', 'Blanco', 'LED', 37, 506, 54, 201, 'Descubre el mundo de la música. De una manera divertida y atractiva. El teclado portátil Yamaha PSS E30 ha sido diseñado específicamente para niños pequeños e incluye todo lo que tu hijo necesita para descubrir la música.', 'k03.jpg'),
(2339.99, 7, 'Casio', 'CTK 240', 'Negro', 'LCD', 49, 680, 69, 204, 'Conviértete en un compositor de teclado. El teclado portátil Casio CTK 240 combina la diversión al tocar con un aprendizaje serio que le brindará una base musical firme. Cubriendo cuatro octavas con 49 teclas estándar, hay muchas melodías para tocar. ', 'k04.jpg'),
(2699.99, 3, 'Yamaha', 'PSR F52', 'Negro', 'LCD', 61, 920, 73, 266, 'El teclado portátil Yamaha PSR-F52 es el teclado perfecto para principiantes. Ya sea que sea completamente nuevo en el teclado o tenga algo de experiencia, el PSR-F52 lo tiene cubierto con funciones para que el aprendizaje sea divertido. ', 'k05.jpg'),
(3999.99, 2, 'Casio', 'CT S200', 'Rojo', 'LCD', 61, 930, 73, 256, 'Bienvenido a un nuevo nivel de comodidad. El teclado portátil Casio CT S200 es revolucionario con su asa integrada en la parte superior. Usted y su instrumento tendrán una nueva libertad ya que su método de transporte está integrado en su forma.', 'k06.jpg'),
(7789.99, 9, 'Yamaha', 'EZ300', 'Blanco', 'LCD', 61, 945, 118, 369, '¡Comienza tu viaje musical hoy! El Yamaha EZ300 ha sido diseñado para mantener inspirados a los jugadores primerizos durante los próximos años. Con 61 teclas sensibles al tacto, el Yamaha EZ300 ofrece todo lo que podría desear de un teclado para principiantes.', 'k07.jpg'),
(12899.99, 5, 'Casio', 'CT X5000', 'Negro', 'LCD', 61, 948, 116, 384, 'Crea una nueva calidad de sonido. El teclado portátil Casio CT X5000 te permite hacer música con un motor de sonido revolucionario, el AiX. Esto utiliza muestreo de alta resolución combinado con efectos DSP en cada tono para crear una calidad realista que no se igualará. Esta tecnología de nivel profesional significa que no hay límite para lo que puede lograr.', 'k08.jpg'),
(1549.99, 5, 'Alesis', 'Harmony', 'Negro', 'LED', 32, 559, 64, 165, 'Comienza el viaje para convertirte en compositor. El teclado portátil Alesis Harmony 32 con auriculares Numark HF125 le ofrece todo el espacio del mundo para ser creativo. Rápidamente te volverás experto en el teclado, inventando pequeños jingles y melodías, mientras perfeccionas tu oído y te preparas para un futuro musical. ', 'k09.jpg'),
(3099.99, 8, 'Yamaha', 'YPT 260', 'Negro', 'LCD', 61, 940, 106, 317, 'Su viaje de aprendizaje comienza con el teclado portátil Yamaha YPT 260. Construido cuidadosamente con una serie de características que se prestan a su desarrollo personal. El YPT 260 está fielmente diseñado con una función de aprendizaje de 3 pasos, Escuchar, cronometrar y esperar.', 'k10.jpg'),
(6899.99, 2, 'Yamaha', 'PSR E360', 'Arce', 'LCD', 61, 940, 100, 316, '¡La serie PSR acaba de recibir una actualización! El PSR E360 es ideal para cualquiera que se encuentre en las primeras etapas de su experiencia de aprendizaje. Construido con 61 teclas sensibles al tacto, el PSR E360 es simple y fácil de usar para principiantes y estudiantes avanzados.', 'k11.jpg'),
(8999.99, 3, 'Roland Go', 'Keys Music Creation', 'Rojo', 'LCD', 61, 877, 82, 271, 'Un teclado divertido para jugadores de todos los niveles. El teclado de creación musical Roland Go:Keys cuenta con 500 sonidos para que experimentes, incluidos sintetizadores, pianos y cuerdas. ¡Incluso puede tocar sus canciones favoritas a través de Bluetooth y conectarse a aplicaciones de producción de música compatibles en su teléfono inteligente o tableta!', 'k12.jpg'),
(10299.99, 5, 'Korg', 'EK-50', 'Negro', 'LCD', 61, 994, 132, 392, 'Infinitas posibilidades en un tamaño compacto. El teclado Korg EK-50 Entertainer está aquí para ayudarlo a desarrollar su verdadero potencial creativo. Desde principiantes hasta profesionales, el EK-50 es increíblemente versátil. Ofrece algo para todos, independientemente de la experiencia.', 'k13.jpg'),
(10449.99, 6, 'Yamaha', 'Reface YC', 'Rojo', 'N/A', 37, 530, 60, 175, 'El Yamaha reface YC Combo Organ tiene 5 sonidos de órgano vintage con tiradores y percusión para complacer a los amantes del órgano de la vieja escuela. El YC también tiene efectos de distorsión y reverberación que alteran instantáneamente los parámetros de su sonido. ', 'k14.jpg'),
(13899.99, 1, 'Korg', 'I3', 'Plata', 'LCD', 61, 1037, 80, 296, 'Los teclados de arreglos nunca han sido tan accesibles. ¡La estación de trabajo de arreglos portátil Korg I3 presenta todo lo que necesita para ser una banda de un solo hombre de gira! Y gracias a su atractivo precio, ahora es más fácil que nunca empezar a hacer arreglos musicales.', 'k15.jpg');
