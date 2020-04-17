<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0" action="<?php echo RUTAPUBLIC; ?>/mostrar.php" method="POST" autocomplete="off">
            <input class="form-control mr-sm-2" type="search" placeholder="No de Inscripción" aria-label="Search" name="busqueda" required>
            <button class="btn btn-warning my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>