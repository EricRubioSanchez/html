<div class="d-flex flex-column flex-shrink-0 p-3 text-white aside" style="height:87.6vh ;width:max-content;margin-left:auto">
  <ul class="nav nav-pills flex-column mb-auto mt-auto ">
    <li class="nav-item my-4">
      <a href="./miEquipo.php" <?php if ($miEquipoActive) : ?> class="nav-link link-danger " aria-current="page">
      <?php else : ?> class="nav-link link-light alink">
      <?php endif; ?>
      <strong>MI EQUIPO</strong>
      </a>
    </li>
    <li class="nav-item my-4">
      <a href="./ofertas.php" <?php if ($misOfertasActive) : ?> class="nav-link link-danger " aria-current="page">
      <?php else : ?> class="nav-link link-light alink">
      <?php endif; ?>
      <strong>MIS OFERTAS</strong>
      </a>
    </li>
    <li class="nav-item my-4">
      <a href="./miLiga.php" <?php if ($laLigaActive) : ?> class="nav-link link-danger " aria-current="page">
      <?php else : ?> class="nav-link link-light alink">
      <?php endif; ?>
        <strong>LA LIGA</strong>
      </a>
    </li>
    <li class="nav-item my-4">
      <a href="./mercado.php" <?php if ($mercadoActive) : ?> class="nav-link link-danger " aria-current="page">
      <?php else : ?> class="nav-link link-light alink">
      <?php endif; ?>
        <strong>MERCADO</strong>
      </a>
    </li>
    <li class="nav-item my-4">
      <a href="./equipos.php" <?php if ($equiposActive) : ?> class="nav-link link-danger " aria-current="page">
      <?php else : ?> class="nav-link link-light alink">
      <?php endif; ?>
        <strong>EQUIPOS</strong>
      </a>
    </li>
    <li class="nav-item my-4">
      <a href="./ojear.php" <?php if ($ojearActive) : ?> class="nav-link link-danger " aria-current="page">
      <?php else : ?> class="nav-link link-light alink">
      <?php endif; ?>
        <strong>OJEAR</strong>
      </a>
    </li>
    <li class="nav-item my-4">
      <a href="./partidos.php" <?php if ($partidosActive) : ?> class="nav-link link-danger " aria-current="page">
      <?php else : ?> class="nav-link link-light alink">
      <?php endif; ?>
        <strong>PARTIDOS</strong>
      </a>
    </li>
  </ul>
  <hr>
  <a href="./misEquipos.php" <?php if ($misEquiposActive) : ?> class="nav-link link-danger " aria-current="page">
      <?php else : ?> class="nav-link link-light alink">
      <?php endif; ?>
    <strong>MIS EQUIPOS</strong>
  </a>
</div>