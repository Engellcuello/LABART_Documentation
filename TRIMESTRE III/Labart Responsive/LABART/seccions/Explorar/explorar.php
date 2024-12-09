<?php
require_once '../../PHP/Controlador/controladorCategorias.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/LABART/style.css"/>
    <link rel="stylesheet" href="explorar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a51261991.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>LABART</title>
    <link rel="icon" href="/LABART/img/solo_logo.png" type="image/x-icon">  

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar a la izquierda -->
            <div class="col-md-4 col-lg-2 menu">
                <div class="logo">
                    <img class="img_logo" src="/LABART/img/concepto logo.png" alt="">
                </div>
                <div class="options_menu">
                    <a href="/LABART/index.php" class="opciones">
                        <i class=" fa-solid fa-house" style="color: #545454;"></i>
                        <h4 style="color: #000000; font-size: 18px; font-weight:bold; margin-bottom:-2px;">Inicio</h4>
                    </a>
                    <div class="opciones indicador_actual">
                        <div class="indicador_opcion "></div>
                        <i class="icon_selected fa-regular fa-compass"></i>
                        <h4 class="text_selected " style="font-size: 18px; font-weight:bold; margin-bottom:-2px;" >Explorar</h4>
                    </div>
                    <a href="/LABART/seccions/ia/ia.html" class="opciones">
                        <i class="icons fa-regular fa-lightbulb" style="color: #545454;"></i>
                        <h4 style="color: #000000; font-size: 18px; font-weight:bold; margin-bottom:-2px;" >IA</h4>
                    </a>
                    <a href="/LABART/seccions/ArtStudio/ArtStudio.html" class="opciones">
                        <i class="icons fa-solid fa-palette" style="color: #545454;"></i>
                        <h4 style="color: #000000; font-size: 18px; font-weight:bold; margin-bottom:-2px;">Crea Tu Arte</h4>
                    </a>
                    <div class="opciones" onclick="abrir_guardados()">
                        <i class="icons fa-regular fa-bookmark" style="color: #545454;"></i>
                        <h4 style="color: #000000; font-size: 18px; font-weight:bold;">Publicaciones Guardadas</h4>
                    </div>
                    <h3>Settings</h3>
                    <a href="/LABART/seccions/perfil/perfil.html" class="opciones">
                        <i class="icons fa-regular fa-user" style="color: #545454;"></i>
                        <h4 style="color: #000000; font-size: 18px; font-weight:bold; margin-bottom:-2px;">Mi Perfil</h4>
                    </a>
                    <div class="opciones" onclick="mostrar_ajustes()">
                        <i class="icons fa-solid fa-gear" style="color: #545454;"></i>
                        <h4 style="font-size: 18px; font-weight:bold; margin-bottom:-2px;">Configuraciones</h4>
                    </div>
                </div>

                <div class="box ">
                    <div class="ayuda">
                        <div class="overlap-group"><img class="primary-button" src="/LABART/img/primary-button.svg" /></div>
                    </div>
                </div>
            </div>
        

    <div class="col-md-8 col-lg-9 home" id="home">
     <div class="row">
        <div class="text-center contendor_tittle_principal">
            <h1>
                CATEGORIAS
            </h1>
        </div>
        
        <div class="input-group contenedor_bucador">
            <div class="cabeza_buscador_explorar">
                <div class="buscador_explorar">
                    <form action="#" method="GET">
                        <button class="icon_buscar_explorar" type="submit">
                            <i class=" fa-solid fa-magnifying-glass" style="color: #000000af; margin-right: -15px;"></i>
                        </button>
                        <input class="buscar_explorar" type="search" name="q" placeholder="Buscar" maxlength="56">
                        <i class="icon_setting_explorar fa-solid fa-sliders" style="color: #000000af;"></i>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="contenedor_tarjetas_categorias"> 
            <div class="row">

            <?php foreach ($categoriasAgrupadas as $categoria): ?>
            <div class="col-lg-3 col-md-4 mb-4 card_categoria">
                <img class="imagenes_categorias" src="<?php echo $categoria['Img_categoria']; ?>" alt="<?php echo htmlspecialchars($categoria['Nombre_categoria']); ?>">
                <div class="contenedor_tittle_categoria_fila">
                    <h3 class="titulo_categorias">
                        <?php echo htmlspecialchars($categoria['Nombre_categoria']); ?>
                    </h3>
                </div>
            </div>
        <?php endforeach; ?>
            

            </div>
        </div>
    </div>
</div>
</div>
    




    <div class="contenedor_detalles" id="contenedor_ajustes" onclick="nomostrar_ajustes()">
        
        <div class="tarjeta_detalles tarjeta_settings contenedor_ajustes_id tarjeta_set" onclick="event.stopPropagation();">

            <div class="tittle_settings">
                <div class="parte_left_tittle_ajustes">
                    <i class="fa-solid fa-gear icono_settings_set"></i>
                    <h2 class="titulo_ajustes">
                        AJUSTES
                    </h2>
                </div>

                <div class="parte_right_tittle_ajustes">
                    <button class="boton_tarjeta" onclick="nomostrar_ajustes()">
                        X
                    </button>
                </div>
            </div>

            <div class="ajustes_cuenta">
                <div class="tittle_detalles_cuenta">
                    <i class="fa-regular fa-user icono_user_setting"></i>
                    <h2 class="titulo_detalles_cuenta">
                        Cuenta
                    </h2>
                    
                </div>
                <hr class="linea_separadora_ajustes">
                <div class="contenid_ajustes_cuenta">
                    <div class="contenido_editar_perfil">
                        <div class="texto_contenido_editar_perfil">
                            <p class="texto_ajustes_cuenta">
                                Editar Perfil
                            </p>
                        </div>
                        <div class="flecha_editar_perfil">
                            <i class="fa-solid fa-greater-than"></i>
                        </div>
                    </div>
                    <div class="contenido_editar_perfil">
                        <div class="texto_contenido_editar_perfil">
                            <p class="texto_ajustes_cuenta">
                                Cambiar Contraseña
                            </p>
                        </div>
                        <div class="flecha_editar_perfil">
                            <i class="fa-solid fa-greater-than"></i>
                        </div>
                    </div>
                    <div class="contenido_editar_perfil">
                        <div class="texto_contenido_editar_perfil">
                            <p class="texto_ajustes_cuenta">
                                Tus preferencias
                            </p>
                        </div>
                        <div class="flecha_editar_perfil">
                            <i class="fa-solid fa-greater-than"></i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ajustes_cuenta">

                <div class="tittle_detalles_cuenta">
                    <i class="fa-regular fa-bell"></i>
                    <h2 class="titulo_detalles_cuenta">
                        NOTIFICACIONES
                    </h2>
                </div>

                <hr class="linea_separadora_ajustes">
                
                <div class="contenido_ajustes_cuenta">
                    <div class="contenido_editar_perfil">
                        <div class="texto_contenido_editar_perfil">
                            <p class="texto_ajustes_cuenta">
                                Mostrar Notificaciones
                            </p>
                        </div>
                        <div class="toglle_notifications">
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <div class="toggle-switch-background">
                                <div class="toggle-switch-handle"></div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ajustes_cuenta">

                <div class="tittle_detalles_cuenta">
                    <i class="fa-regular fa-bell"></i>
                    <h2 class="titulo_detalles_cuenta">
                        OTROS AJUSTES
                    </h2>
                </div>

                <hr class="linea_separadora_ajustes">
                
                <div class="contenido_ajustes_cuenta contenedor_idiomas">
                    <div class="contenido_editar_perfil">
                        <div class="ajustes_lenguajes">
                            <button class="cssbuttons-io-button">
                                Cambiar Lenguaje
                                <div class="icon" id="chose_language" onclick="mostrar_ajustes_lenguaje()">
                                <svg
                                    height="24"
                                    width="100"
                                    viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                    d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                    fill="currentColor"
                                    ></path>
                                </svg>
                                </div>
                            </button>
                            
                        </div>
                    </div>
                    
                </div>

            </div>

        </div>

    </div>


    <div class="contenedor_detalles contenedor_detalles_ajustes" id="contenedor_ajustes_2" onclick="verificarYOcultar_detalles()">

        <div class="tarjeta_detalles tarjeta_settings contenedor_ajustes_id_detale " id="contenedor_ajustes_id_detale" onclick="event.stopPropagation();">
            
            <div class="contenido_detalles_lenguaje contenido_lenguaje">

                <div class="tittle_settings">
                    <div class="parte_left_tittle_ajustes">
                        <i class="icono_cambio_lenguaje fa-solid fa-earth-americas"></i>
                        <h2 class="titulo_ajustes">
                            Cambiar Lenguaje
                        </h2>
                    </div>

                    <div class="parte_right_tittle_ajustes">
                        <button class="boton_tarjeta" onclick="nomostrar_ajustes_lenguaje()">
                            X
                        </button>
                    </div>
                </div>
                <div class="band_settings">
                    <div class="uband banderas" id="language_english" onclick="cambiarIdioma('en')">
                        <img src="/LABART/img/banderas/band_eeuu.png" alt="">
                        <h3>
                            ENGLISH
                        </h3>                        
                    </div>
                    <div class="banderas" onclick="cambiarIdioma('es')">
                        <img src="/LABART/img/banderas/band_spain.png" alt="">
                        <h3>
                            ESPAÑOL
                        </h3>   
                    </div>
                    <div class="banderas">
                        <img src="/LABART/img/banderas/band_portugal.png" alt="">
                        <h3>
                            PORTUGUES
                        </h3> 
                    </div>
                    <div class="banderas">
                        <img src="/LABART/img/banderas/band_francia.png" alt="">
                        <h3>
                            FRANCES
                        </h3> 
                    </div>
                </div>
            </div>

        </div>
</div>



    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script src="/LABART/index.js"></script>
</body>
</html>