<?php $titulo = 'Cosas que les pasan a los superheroes' ?>

<?php ob_start() ?>
  <h1>Cosas de superheroes</h1>
  <ul>
      <?php foreach ($entradas as $entrada): ?>
      <li>
          <a href="/blogFlatPHP/detalle.php?id=<?= $entrada['id'] ?>">
            <?= $entrada['titulo'] ?>
      </li>
      <?php endforeach ?>
  </ul>
<?php $contenido = ob_get_clean() ?>

<?php include 'plantilla.php' ?>
