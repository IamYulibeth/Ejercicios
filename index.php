<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main style="background-color: gray">
            <h1>Formulario de Usuarios</h1>
            <div class="container">
                <div class="row">
                    <div class="col-3" style="background-color: #A0DEFF">
                        <form action="./actions/insert.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nombre</label>
                            <input class="form-control" type="text" name="first_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellido Paterno</label>
                            <input class="form-control" type="text" name="last_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apellido Materno</label>
                            <input class="form-control" type="text" name="family_name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Correo electrónico:</label>
                            <input class="form-control" type="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Teléfono</label>
                            <input class="form-control" type="tel" minlength="10" maxlength="10" name="phone_number">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Fecha de Nacimiento</label>
                            <input class="form-control" type="date" name="date_birth">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="Submit">Insetar</button>
                        </div>
                        </form>
                    </div>
                    <div class="col-9" style="background-color: #A0DEFF">
                        <table class="table"> 
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Teléfono</th>
                                <th>Correo electrónico</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Acciones</th>
                            </tr>

                            <?php
                            include_once "./connection/connect.php";

                            $sql = "SELECT * FROM users";

                            $result = $conexion->query($sql);

                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>$row[id_user]</td>";
                                echo "<td>$row[first_name]</td>";
                                echo "<td>$row[last_name]</td>";
                                echo "<td>$row[family_name]</td>";
                                echo "<td>$row[email]</td>";
                                echo "<td>$row[phone_number]</td>";
                                echo "<td>$row[date_birth]</td>";
                                echo "<td>
                                    <a class= 'btn' style='background-color: #9DDE8B;'>Editar</a>
                                    <a class= 'btn' style='background-color: #B0EBB4;'>Eliminar</a>
                                    </td>";
                                echo "</tr>";
                                }
                            } else {
                                echo "No hay datos en la base de datos";
                            }

                            ?>
                            
                        </table>
                    </div>
                </div>

            </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
