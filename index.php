
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
                    <nav class="menu-programa">
                        <a href="#talleres"><i class="fas fa-file-code"></i>Talleres</a>
                        <a href="#conferencias"><i class="fas fa-comment-alt"></i>Conferencias</a>
                        <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                    </nav>

                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3 y JavaScript</h3>
                            <p><i class="fas fa-history"></i>16:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user-friends"></i>Juan Pablo de la torre Valdez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive Web Design</h3>
                            <p><i class="fas fa-history"></i>20:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user-friends"></i>Juan Pablo de la torre Valdez</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                    <!--#Talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fas fa-history"></i>10:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user-friends"></i>Gregorio Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Technologias del futuro</h3>
                            <p><i class="fas fa-history"></i>17:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user-friends"></i>Susan Sanchez</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                    <!--#Talleres-->
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseno UI/UX para moviles</h3>
                            <p><i class="fas fa-history"></i>16:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user-friends"></i>Harold Garcia</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una manana</h3>
                            <p><i class="fas fa-history"></i>20:00hrs</p>
                            <p><i class="fas fa-calendar-alt"></i>10 de Dic</p>
                            <p><i class="fas fa-user-friends"></i>Susana rivera</p>
                        </div>
                        <a href="#" class="button float-right">Ver Todos</a>
                    </div>
                    <!--#Talleres-->
                </div>
                <!--programa-evento-->
            </div>
            <!--.contenedor-->
        </div>
        <!--.contenido programa-->
    </section>
    <!--Programa-->

    <section class="invitados contenedor seccion">
        <h2>Nuestros invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="imagen invitado" />
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="imagen invitado" />
                    <p>Shari Herrera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="imagen invitado" />
                    <p>Gregorio Snachez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="imagen invitado" />
                    <p>Susana Rivera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="imagen invitado" />
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="imagen invitado" />
                    <p>Rafael Bautista</p>
                </div>
            </li>
        </ul>
    </section>
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
   