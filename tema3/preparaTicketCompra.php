<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Ticket Compra</title>
</head>
<body>

    <h1>Tikect de compra</h1>

    <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="producto-row">
                <h3>Producto <?= $i ?></h3>
                <label>Nombre:</label>
                <input type="text" name="nombre[]">
                
                <label>Cantidad:</label>
                <input type="number" name="cantidad[]" >
                
                <label>Coste Unitario (€):</label>
                <input type="number" name="coste[]" >
            </div>
             <hr>
        <?php endfor; ?>

        <button type="submit">Enviar</button>

    
    </form>
   
</body>
</html>