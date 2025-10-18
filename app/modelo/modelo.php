<?php

    require_once './database/config.php';

    class Modelo {
        protected $db;
      
        public function __construct() {
          $this->db = new PDO ("mysql:host=" . MYSQL_HOST . ";dbname=" . MYSQL_DB . ";charset=utf8", MYSQL_USER, MYSQL_PASS);
          $this->deploy();
        }
      
        private function deploy() {
          $query = $this->db->query('SHOW TABLES');
          $tables = $query->fetchAll();
          if(count($tables) == 0) {
            $sql =<<<END
                      CREATE TABLE `generos` (
                        `id_genero` int(11) NOT NULL,
                        `nombre` text NOT NULL
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

                        --
                        -- Volcado de datos para la tabla `generos`
                        --

                        INSERT INTO `generos` (`id_genero`, `nombre`) VALUES
                        (1, 'Accion'),
                        (2, 'Aventura'),
                        (3, 'Ciencia Ficcion'),
                        (4, 'Terror');

                        -- --------------------------------------------------------

                        --
                        -- Estructura de tabla para la tabla `libro`
                        --

                        CREATE TABLE `libro` (
                        `id_libro` int(11) NOT NULL,
                        `titulo` text NOT NULL,
                        `genero_id` int(11) NOT NULL,
                        `autor` text NOT NULL,
                        `anio` date NOT NULL,
                        `descripcion` text NOT NULL,
                        `disponibilidad` int(11) NOT NULL
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

                        --
                        -- Volcado de datos para la tabla `libro`
                        --

                        INSERT INTO `libro` (`id_libro`, `titulo`, `genero_id`, `autor`, `anio`, `descripcion`, `disponibilidad`) VALUES
                        (3, 'Harry Potter 1', 3, 'J. K. Rowling', '2015-10-01', 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y el insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vida para siempre. ', 1),
                        (4, 'La máquina del tiempo ', 4, 'Herbert George Wells', '2015-10-08', 'El pionero H.G. Wells escribió este absoluto clásico del género, que no se entretiene demasiado en las cuestiones técnicas (nunca sabemos cuál es la teoría de los viajes en el tiempo o cómo funciona la máquina), y que va al grano con lo que le interesa: la aventura de exploración futura y el adoctrinamiento de sus lectores. El retrato de una sociedad futura dividida entre gente hipersensible y mostrencos monstruosos es fascinante, y términos como \'Morlock\' han pasado al acervo popular.', 0),
                        (7, 'Al límite de la cordura', 2, 'Lorena Franco', '2018-10-17', 'La tercera parte de la emocionante serie Chloe Bennett, sumerge al lector en un mundo donde el misterio y la emoción se entrelazan magistralmente. Franco, una escritora de renombre en el ámbito de la literatura de aventuras y ficción, crea una trama absorbente y personajes que capturan la imaginación y los corazones de sus lectores. ¿Hasta dónde estarías dispuesto a ir para descubrir la verdad detrás de la cordura?', 1),
                        (8, 'La última revelación', 2, 'Fernando Gamboa', '2019-10-30', '¿Te imaginas una aventura donde la historia y el misterio se entrelazan de manera fascinante? La tercera entrega de Las aventuras de Ulises Vidal ofrece justamente eso. Tras ser desacreditados por la comunidad científica, Ulises, Cassie y el profesor Castillo se embarcan en un viaje repleto de acción para recuperar su honor. Esta novela te sumerge en un mundo donde la búsqueda de pruebas sobre la presencia nazi en la Ciudad Negra se convierte en una aventura que desafía la imaginación. ', 0);

                        -- --------------------------------------------------------

                        --
                        -- Estructura de tabla para la tabla `usuarios`
                        --

                        CREATE TABLE `usuarios` (
                        `id` int(11) NOT NULL,
                        `usuario` text NOT NULL,
                        `contrasenia` text NOT NULL
                        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

                        --
                        -- Volcado de datos para la tabla `usuarios`
                        --

                        INSERT INTO `usuarios` (`id`, `usuario`, `contrasenia`) VALUES
                        (1, 'webadmin', '$2y$10\$ztUuk38KaDsp/yCmrF0/w.3TSRvvzp153ZLOjT3hj9cF6xFcDnrDK');

                        --
                        -- Índices para tablas volcadas
                        --

                        --
                        -- Indices de la tabla `generos`
                        --
                        ALTER TABLE `generos`
                        ADD PRIMARY KEY (`id_genero`);

                        --
                        -- Indices de la tabla `libro`
                        --
                        ALTER TABLE `libro`
                        ADD PRIMARY KEY (`id_libro`),
                        ADD KEY `genero` (`genero_id`) USING BTREE;

                        --
                        -- Indices de la tabla `usuarios`
                        --
                        ALTER TABLE `usuarios`
                        ADD PRIMARY KEY (`id`);

                        --
                        -- AUTO_INCREMENT de las tablas volcadas
                        --

                        --
                        -- AUTO_INCREMENT de la tabla `generos`
                        --
                        ALTER TABLE `generos`
                        MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

                        --
                        -- AUTO_INCREMENT de la tabla `libro`
                        --
                        ALTER TABLE `libro`
                        MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

                        --
                        -- AUTO_INCREMENT de la tabla `usuarios`
                        --
                        ALTER TABLE `usuarios`
                        MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

                        --
                        -- Restricciones para tablas volcadas
                        --

                        --
                        -- Filtros para la tabla `libro`
                        --
                        ALTER TABLE `libro`
                        ADD CONSTRAINT `fk_genero` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id_genero`);
                        COMMIT;  
            END;
            $this->db->query($sql);
          }
        } // la contraseña hasheada es: $2b$12$hJLzoFf1I1lT3OOPnaYfguWWYFui7lrKXYUdfbyjGJMMUuLkrRUQm pero si no le poniaa el "\" me maracaba error
      }
?>