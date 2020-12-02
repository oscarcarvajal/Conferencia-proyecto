<?php include_once 'includes/templates/header.php'; ?>
    <section class="seccion contenedor">
        <h2>LA mejor conferencia de diseno web en espanol</h2>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel fugiat, quo ipsa quos pariatur reiciendis alias nihil cum distinctio explicabo sit officiis porro quam ab nisi. Tempora, culpa. Modi, nesciunt. Lorem ipsum dolor, sit amet consectetur adipisicing
            elit. Sapiente explicabo quo alias esse? Labore quidem, incidunt quia iure mollitia sapiente! Earum provident rem in fuga tempore, tempora rerum praesentium quisquam.
        </p>
    </section>
    <!--Seccion-->

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv" type="video/ogv">
            </video>
        </div>
        <!--Contenedor video-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    <?php
                        try{
                            require_once('includes/funciones/db_conexion.php');
                            $sql = "SELECT * FROM `categoria_evento` ";
                            $resultado = $conn->query($sql);
                        }catch (\Exception $e){
                            echo $e->getMessage();
                        }
                        ?>
                    <nav class="menu-programa">
                        <?php while($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <?php $categoria = $cat['cat_evento']; ?>
                                <a href="#<?php echo strtolower($categoria)?>">
                                    <i class="fa <?php echo $cat['icono'] ?>" aria-hidden="true"></i><?php echo $categoria ?>
                                </a>
                        <?php } ?>
                    </nav>
                    <?php
                        try{
                            require_once('includes/funciones/db_conexion.php');
                            $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= "AND eventos.id_cat_evento = 1 ";
                            $sql .= "ORDER BY evento_id LIMIT 2;";
                            $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= "AND eventos.id_cat_evento = 2 ";
                            $sql .= "ORDER BY evento_id LIMIT 2;";
                            $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                            $sql .= " FROM eventos ";
                            $sql .= " INNER JOIN categoria_evento ";
                            $sql .= "ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                            $sql .= " INNER JOIN invitados ";
                            $sql .= " ON eventos.id_inv = invitados.invitado_id ";
                            $sql .= "AND eventos.id_cat_evento = 3 ";
                            $sql .= "ORDER BY evento_id LIMIT 2;"; 
                        }catch (\Exception $e){
                            echo $e->getMessage();
                        }
                    ?>

<?php $conn->multi_query($sql); ?>
          <?php 
              do {
                $resultado = $conn->store_result();
                $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>
                <?php $i = 0; ?>
                <?php foreach($row as $evento): ?>
                  <?php if($i % 2 == 0){?>
                    <div id="<?php echo strtolower($evento['cat_evento'])?>" class="info-curso ocultar clearfix">
                <?php }?> 
                    <div class="detalle-evento">
                      <h3><?php echo mb_convert_encoding($evento["nombre_evento"],'UTF-8'); ?></h3>
                      <p><i class="far fa-clock" aria-hidden="true"></i> <?php echo $evento['hora_evento'];?></p>
                      <p><i class="far fa-calendar" aria-hidden="true"></i> <?php echo $evento['fecha_evento'];?></p>
                      <p><i class="fas fa-user" aria-hidden="true"></i><?php echo $evento['nombre_invitado'] . " ".$evento['apellido_invitado'];?></p>
                    </div>
                  <?php if($i % 2 ==1):?>
                    <a href="calendario.php" class="button float-right">Ver todos</a>
                  </div> <!--Talleres-->
                  <?php endif; ?>
                <?php $i++; ?>
                <?php endforeach;?>
                <?php $resultado->free();?>
             <?php } while ($conn->more_results() && $conn->next_result());?>


               
                </div>
                <!--programa-evento-->
            </div>
            <!--.contenedor-->
        </div>
        <!--.contenido programa-->
    </section>
    <!--Programa-->

    <?php include_once 'includes/templates/invitados.php'; ?>
    <!--Invitados-->
    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero"></p>Invitados</li>
                <li>
                    <p class="numero"></p>Talleres</li>
                <li>
                    <p class="numero"></p>Dias</li>
                <li>
                    <p class="numero"></p>Conferencias</li>
            </ul>
        </div>
    </div>
    <!--Parallax-->
    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase Por dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Todos los dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 Dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las Conferencias</li>
                            <li>Todos los Talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Precios Seccion-->
    <div id="mapa" class="mapa"></div>
    <!--mapa-->
    <section class="seccion">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis tenetur dignissimos mollitia commodi et necessitatibus porro, ipsam aspernatur blanditiis illo eligendi molestias voluptatibus. Similique sunt ullam sed sit soluta excepturi!</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedospan<span>Disenador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--Fin de testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis tenetur dignissimos mollitia commodi et necessitatibus porro, ipsam aspernatur blanditiis illo eligendi molestias voluptatibus. Similique sunt ullam sed sit soluta excepturi!</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedospan<span>Disenador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--Fin de testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis tenetur dignissimos mollitia commodi et necessitatibus porro, ipsam aspernatur blanditiis illo eligendi molestias voluptatibus. Similique sunt ullam sed sit soluta excepturi!</p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="imagen testimonial">
                        <cite>Oswaldo Aponte Escobedospan<span>Disenador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--Fin de testimonial-->
        </div>
    </section>

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p>registro al newsletter</p>
            <h3>proyectogld</h3>
            <a href="#" class="button transparente">Registro</a>
        </div>
        <!--contenido-->
    </div>
    <!--Newsletter-->

    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>Dias</li>
                <li>
                    <p id="horas" class="numero"></p>horas</li>
                <li>
                    <p id="minutos" class="numero"></p>minutos</li>
                <li>
                    <p id="segundos" class="numero"></p>segundos</li>
            </ul>
        </div>
    </section>
    <!--cuenta regresiva-->
    <?php include_once 'includes/templates/footer.php'; ?>
   