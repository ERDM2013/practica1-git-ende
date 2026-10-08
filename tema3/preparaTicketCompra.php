<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Ticket Compra</title>
</head>
<body>

    <h1>Tikect de compra</h1>

    <form action="imprimeTicketCompra.php" method="post">
            <!-- producto 1 -->
                <h3>Producto 1</h3>
                <label>Nombre:</label> 
                <input type="text" name="nombre[]"><br><br>
                
                <label>Cantidad:</label> 
                <input type="number" name="cantidad[]" ><br><br>
                
                <label>Coste :</label>
                <input type="number" name="coste[]" ><br><br><br>

                <!-- producto 2 -->
                <h3>Producto 2</h3>
                <label>Nombre:</label>
                <input type="text" name="nombre[]"><br><br>
                
                <label>Cantidad:</label>
                <input type="number" name="cantidad[]" ><br><br>
                
                <label>Coste :</label>
                <input type="number" name="coste[]" ><br><br><br>

                <!-- producto 3 -->
                <h3>Producto 3</h3>
                <label>Nombre:</label>
                <input type="text" name="nombre[]"><br><br>
                
                <label>Cantidad:</label>
                <input type="number" name="cantidad[]" ><br><br>
                
                <label>Coste :</label>
                <input type="number" name="coste[]" ><br><br><br>
            
        <button type="submit">Enviar</button>

    </form>
    
   
</body>
</html>