<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA ROL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="wrapper justify-content-center">
        <header class="header-mobile">
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <h1 class="logo">CRUD DB LABART</h1>
            </header>
            <nav>
                <ul class="menu">
                <li>
                    <button id="todos" class="boton-menu boton-categoria" onclick="location.href='../index.php';">
                        <i class="bi bi-hand-index-thumb"></i> Todas Las Tablas
                    </button>
                </li>

                    <li>
                        <button id="abrigos" class="boton-menu boton-categoria active"><i class="bi bi-hand-index-thumb-fill"></i> Tabla Rol</button>
                    </li>
                </ul>
            </nav>
            <footer>
                <a></a>
            </footer>
        </aside>
        <main>
            <h2 class="titulo-principal" id="titulo-principal">INGRESAR DATOS</h2>
            <div id="contenedor-productos" class="contenedor-productos">
                <div class="contenedor">
                    <!-- Formulario para agregar Roles -->
                    <h3>Agregar Roles</h3>
                    <form action="../Controlador/controladorPqrs.php" method="post">
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="ID_pqrs" class="form-label">Número Pqrs</label>
                                <input class="form-control" id="ID_pqrs" name="ID_pqrs" type="text">
                            </div>

                            <div class="col-md-4">
                                <label for="Fecha_pqrs" class="form-label">Fecha Pqrs</label>
                                <input class="form-control" id="Fecha_pqrs" name="Fecha_pqrs" type="date">
                            </div>

                            <div class="col-md-4">
                                <label for="Contenido_pqrs" class="form-label">Descripcion Pqrs</label>
                                <input class="form-control" id="Contenido_pqrs" name="Contenido_pqrs" type="text">
                            </div>
                        </div>

                        <div class="row mt-3 justify-content-center"> 
                          <div class="col-md-4">
                            <label for="ID_estado" class="form-label">Estado</label>
                            <select class="form-select" id="ID_estado" name="ID_estado">
                                <option value="">Seleccionar Estado</option>
                                <?php foreach ($estados as $estado): ?>
                                    <option value="<?php echo $estado['ID_estado']; ?>">
                                        <?php echo $estado['Nombre_estado']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    

                          <div class="col-md-4">
                            <label for="ID_usuario" class="form-label">Usuario</label>
                            <select class="form-select" id="ID_usuario" name="ID_usuario">
                                <option value="">Seleccionar Usuario</option>
                                <?php foreach ($usuarios as $usuario): ?>
                                    <option value="<?php echo $usuario['ID_usuario']; ?>">
                                        <?php echo $usuario['Nombre_usuario']; ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        </div>
          

                        <button class="Boton_refrescar mt-3" type="submit" name="Acciones" value="Crear Pqrs">Crear Roles</button>
                    </form>




                        <!-- Tabla de Roles -->
                        <h3 class="mt-3">Lista de Pqrs</h3>
                        <form action="../Controlador/controladorPqrs.php" method="post">
                            <button class="Boton_refrescar mb-3" type="submit" name="Acciones" value="Refrescar tabla">Refrescar tabla</button>
                        </form>
                        <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>ID_pqrs</th>
                                    <th>Fecha_pqrs</th>
                                    <th>Contenido_pqrs</th>
                                    <th>ID_estado</th>
                                    <th>ID_usuario</th>
                                    <th>Actualizar</th>
                                    <th>Rol a Inexistente</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                while ($fila = mysqli_fetch_assoc($resultado)) {
                                    echo "<tr>";
                                    echo "<td>{$fila['ID_pqrs']}</td>";
                                    echo "<td>{$fila['Fecha_pqrs']}</td>";
                                    echo "<td>{$fila['Contenido_pqrs']}</td>";
                                    echo "<td>{$fila['ID_estado']}</td>";
                                    echo "<td>{$fila['ID_usuario']}</td>";
                                    
                                    // Botón para abrir el modal de actualización
                                    echo "<td><button class='Boton_refrescar' style='padding: 0.40rem 0.5rem; font-size: 1rem;' data-bs-toggle='modal' data-bs-target='#updateModal{$fila['ID_pqrs']}'>Editar</button></td>";

                                    // Botón para cambiar el estado de la pqrs
                                    echo "<td>
                                        <form action='../Controlador/controladorPqrs.php' method='post'>
                                            <input type='hidden' name='ID_pqrs' value='{$fila['ID_pqrs']}'>
                                            <button class='btn btn-danger' style='padding: 0.40rem 0.5rem; font-size: 0.7rem;' type='submit' name='Acciones' value='Borrar Pqrs'>Cambiar</button>
                                        </form>
                                    </td>";
                                    echo "</tr>";

                                    // Modal para actualizar la pqrs
                                    echo '<div class="modal fade" id="updateModal' . $fila['ID_pqrs'] . '" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">';
                                    echo '<div class="modal-dialog">';
                                    echo '<div class="modal-content">';
                                    echo '<div class="modal-header">';
                                    echo '<h5 class="modal-title" id="updateModalLabel">Actualizar Pqrs - ID: ' . $fila['ID_pqrs'] . '</h5>';
                                    echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                                    echo '</div>';
                                    echo '<div class="modal-body">';
                                    echo '<form action="../Controlador/controladorPqrs.php" method="post">';
                                    echo '<input type="hidden" name="ID_pqrs" value="' . $fila['ID_pqrs'] . '">';
                                    echo '<div class="mb-3">
                                        <label class="form-label">Fecha Pqrs</label>
                                        <input class="form-control" name="Fecha_pqrs" type="date" value="' . $fila['Fecha_pqrs'] . '">
                                    </div>';
                                    echo '<div class="mb-3">
                                        <label class="form-label">Descripcion Pqrs</label>
                                        <input class="form-control" name="Contenido_pqrs" type="text" value="' . $fila['Contenido_pqrs'] . '">
                                    </div>';
                                   
                                    echo '<div class="mb-3">
                                        <label for="ID_estado" class="form-label">Estado Pqrs</label>
                                        <select class="form-control" id="ID_estado" name="ID_estado">
                                            <option value="">Seleccionar Estado</option>';
                                    
                                    foreach ($estados as $estado) {
                                        $selected = ($estado['ID_estado'] == $fila['ID_estado']) ? 'selected' : '';
                                        echo '<option value="' . $estado['ID_estado'] . '" ' . $selected . '>'
                                            . $estado['Nombre_estado'] . 
                                            '</option>';
                                    }
                                    echo '</select>
                                    </div>';

                                    echo '<div class="mb-3">
                                    <label for="ID_usuario" class="form-label">Usuario Pqrs</label>
                                    <select class="form-control" id="ID_usuario" name="ID_usuario">
                                        <option value="">Seleccionar Estado</option>';
                                
                                foreach ($usuarios as $usuario) {
                                    $selected = ($usuario['ID_usuario'] == $fila['ID_usuario']) ? 'selected' : '';
                                    echo '<option value="' . $usuario['ID_usuario'] . '" ' . $selected . '>'
                                        . $usuario['Nombre_usuario'] . 
                                        '</option>';
                                }
                                echo '</select>
                                </div>';

                                    echo '<button class="Boton_refrescar" type="submit" name="Acciones" value="Actualizar Pqrs">Actualizar Pqrs</button>';
                                    echo '</form>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>';
                                    
                                }
                                ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
