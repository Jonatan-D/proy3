<!-- boton toggle de mostrar clases -->


<div class="row table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th> Clase</th>
                <th>Fecha</th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            <?php
            include "conexion.php";

            $consulta = mysqli_query($base_de_datos, "SELECT * from clases");
            ?>
            <?php
            while ($row = $consulta->fetch_array(MYSQLI_ASSOC)) { ?>
                <tr>
                    <td><?php echo $row['unidad'] ?></td>
                    <td><?php echo $row['fecha'] ?></td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>