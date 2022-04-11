<?php include("template/cabecera.php"); ?>
<?php  
    include("administrador/config/db.php");
    $sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
    $sentenciaSQL->execute();
    $listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);//trae todos los libros con la sociacion

?>


<?php foreach ($listaLibros as $libro) {?>

<div class="col-md-3">
    <div class="card ">
        <img class="card-img-top" src="./img/<?php echo $libro['imagen']; ?>" alt="">
        <div class="card-body">
            <h4 class="card-title" echo><?php echo $libro['nombre']?></h4>
            <a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
        </div>
    </div>
</div>

<?php }?>




<?php include("template/pie.php"); ?>