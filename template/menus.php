<?php
@session_start();
?>

<nav class="menu_navegacion">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <?php if(isset($_SESSION['usuario'])){ ?> 
                <li><a href="restaurante.php">Restaurante</a></li>
                <li><a href="refrigerio.php">Refrigerio</a></li>
                <?php }?>
            <li><a href="conocenos.php">Conocenos</a></li>
            <?php if(isset($_SESSION['usuario'])){ ?> 
                <li><a href="logout.php">Cerrar Sesión</a></li>
                <?php }else{?>
                    <li><a href="register.php">Acceder</a></li>
                    <?php }?>
                    
        </ul>
    </nav>