
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Clientes</title>
    <link rel="shortcut icon" href="views/img/logo.jpeg">
    <link rel="stylesheet" href="views/css/styles.css">
    <link rel="stylesheet" href="views/css/main.css">
    <link rel="stylesheet" href="views/css/dashboard.css">
    <link rel="stylesheet" href="views/css/dashboard_producto.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="views/js/index.js"></script>
    <script src="views/js/validate.js"></script>
</head>
<body>
<div id="root">
<header class="hero">
<b><div style="color: black; font-size:1.3rem;" id="precioDolar">Cargando...</div></b>
            <div class="user"><img class="logo_user" src="views/img/avatar-male.png" alt="user">
            <span name="user" style="color: black;" ><?php echo $_SESSION['s_usuario']['usuario'];?></span></div>
            <a href="views/php/logout.php" class="hero__logger">Log Out</a>
        </header>
        <aside class="aside">
            <header class="aside__hero">
                <a href="pag_inic.php"><img class="logo" src="views/img/logo.jpeg" alt="Logo"></a>
                <span style="color: white; margin-left:2rem;" >Teobar.CA</span>
            </header>
            <nav class="aside__navbar">
                <ul style="padding: 0;" class="aside__list">
                    <li class="aside__item"><a href="pag_inic.php" class="aside__link">Home</a></li>
                    <li class="aside__item"><a href="crud_admin.php?action=d" class="aside__link">Usuarios</a></li>
                    <li class="aside__item"><a href="crud_producto.php" class="aside__link">Productos</a></li>
                    <li class="aside__item"><a href="crud_tipo.php" class="aside__link">Tipo Productos</a></li>
                    <li class="aside__item"><a href="crud_cliente.php" class="aside__link">Clientes</a></li>
                    <li class="aside__item"><a href="crud_proveedor.php" class="aside__link">Proveedores</a></li>
                    <li class="aside__item"><a href="crud_venta.php" class="aside__link">Ventas</a></li>
                    <li class="aside__item"><a href="crud_compra.php" class="aside__link">Compras</a></li>
                    <li class="aside__item"><a href="crud_pago.php" class="aside__link">Pagos</a></li>
                    <li class="aside__item"><a href="reportes.php" class="aside__link">Reportes</a></li>
                </ul>            
            </nav>
        </aside>
        <main class="main">
    <header>
    <form class="formulario" action="crud_cliente.php?action=agregar" method="post" name="form"  id="miFormulario"> 
    <h1 class="titulo_form">Agregar Cliente</h1> 
    <?php if (!empty($message)): ?> 
        <p class="alert alert-<?php echo ($message == "CLIENTE AGREGADO CORRECTAMENTE") ? 'success' : 'danger'; ?>"> 
            <?php echo $message; ?> 
        </p> 
    <?php endif; ?> 
    
    <b><label for="id">CI del Cliente
    <select name="tipo">
        <option value="V-">V-</option>
        <option value="E-">E-</option>
    </select>
    <input class="entrada" type="number" min="0" id="id" name="id" placeholder="CI" required oninput="validateId()"> 
    </label></b>
    <span id="idError" class="error-message"></span>
    <b><label for="nombre">Nombre del Cliente
    <input class="entrada" type="text" id="nombre" name="nombre" placeholder="Nombre" required oninput="validateName()"> 
    </label></b> 
    <span id="nameError" class="error-message"></span>
    <b><label for="tlf">Tlf del Cliente
    <select name="codigo_tlf"> 
        <option value="0412">0412</option> 
        <option value="0416">0416</option> 
        <option value="0426">0426</option> 
        <option value="0414">0414</option> 
        <option value="0424">0424</option> 
        <option value="0424">0251</option>
    </select>
    <input class="entrada" type="number" id="numero_tlf" name="numero_tlf" placeholder="Ejem: 1234567" required oninput="validatePhone()"> 
    </label></b>
    <span id="phoneError" class="error-message"></span>
    <b><label for="email">Correo del Cliente
    <input class="entrada" type="email" id="email" name="email" placeholder="Correo" required oninput="validateEmail()"> 
    </label></b> 
    <b><label for="direccion">Direccion del Cliente 
    <input class="entrada" type="text" name="direccion" placeholder="Direccion" required oninput="validateAddress()"> 
    </label></b>  
    <span id="addressError" class="error-message"></span><br>
    <a href="crud_cliente.php" class="hero__agg3" type="button">Cancelar</a> 
    <input onclick="return validateForm()" class="hero__agg2" type="submit" value="Registrar"> 
</form>
    </header>
    </main>
</div>
</body>
</html>