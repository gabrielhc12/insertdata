<?php
include_once 'CRUD.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
<center>
    <br>
    <br>
    <div id="form">
        <form method="post">
            <table width="100%" border="1" cellpading="15">
                <tr>
                    <td>
                        <input type="text" name="fn" placeholder="Nombre" value="<?php if(isset($_GET['edit'])) {echo $getROW['fn'];} ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="ln" placeholder="Apellido" value="<?php if(isset($_GET['edit'])) {echo $getROW['ln'];} ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                            if(isset($_GET['edit'])){
                                ?>
                                <button type="submit" name="update" >Editar</button>
                                <?php
                            }
                            else{
                                ?>
                                <button type="submit" name="save">Registrar</button>
                                <?php
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
        <br><br>

        <table width="100%" border="1" cellpading="15" aling="center">
            <?php
            
            $res = $MySQLiconn->query("SELECT * FROM data");
            while($row=$res->fetch_array()){
            ?>
            <tr>
                <td><?php echo $row['id'];  ?></td>
                <td><?php echo $row['fn'];  ?></td>
                <td><?php echo $row['ln'];  ?></td>
                <td><a href="?del=<?php echo $row['id']; ?>" onclick= "return confirm('Confirmar eliminación')">Eliminación </a></td>
                <td><a href="?edit=<?php echo $row['id']; ?>" onclick= "return confirm('Confirmar edición')">Editar </a></td>
            </tr>
            <?php
            }
            ?>
        </table>

    </div>
</center>

    
</body>
</html>