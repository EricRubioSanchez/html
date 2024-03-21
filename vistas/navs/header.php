<div class="p-3 text-white header" style=" width:100%;height:12.9vh;z-index:1">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 ">

        <div class="col col-3 col-xl-4 text-center"></div>
        <div class="col col-2 text-center">
            <a href="./index.php" <?php if ($noticiasActive) : ?> class="nav-link link-danger " aria-current="page">
            <?php else : ?> class="nav-link link-light alink">
            <?php endif; ?>
            <strong>NOTICIAS</strong>
            </a>
        </div>
        <div class="col col-2 text-center">
            <a href="./crearFantasy.php" <?php if ($crearFantasyActive) : ?> class="nav-link link-danger " aria-current="page">
            <?php else : ?> class="nav-link link-light alink">
            <?php endif; ?>
            <strong>CREAR FANTASY</strong>
            </a>
        </div>
        <div class="col col-2 text-center">
            <a href="./unirseFantasy.php" <?php if ($unirseFantasyActive) : ?> class="nav-link link-danger " aria-current="page">
            <?php else : ?> class="nav-link link-light alink">
            <?php endif; ?>
            <strong>UNIRSE FANTASY</strong>
            </a>
        </div>
        <div class="col col-xl-2 col-1 text-end">
            <?php if (isset($_SESSION['correo'])) : ?>
                <div class="dropdown text-end">
                    120
                    <svg xmlns="http://www.w3.org/2000/svg" style="background-color: #ffc107;border-radius:100%" width="30" height="30" fill="#000" class="bi bi-coin" viewBox="0 0 16 16">
                        <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518z" />
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11m0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                    </svg>
                    <a href="#" class=" align-items-center text-white text-decoration-none dropdown-toggla" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="imagenDePerfil" width="54" height="54" class="rounded-circle me-2">
                    </a>
                    <ul class="dropdown-menu  mt-5 dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="./perfil.php"><strong>PERFIL</strong></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <?php if ($_SESSION["admin"]) : ?>
                            <li><a class="dropdown-item" href="./admin.php"><strong>ADMIN</strong></a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        <?php endif; ?>
                        <li><a class="dropdown-item" href="./logout.php"><strong>LOG OUT</strong></a></li>
                    </ul>
                </div>
            <?php else : ?>
                <a href="./login.php" <?php if ($loginActive) : ?> class="nav-link px-2 link-danger " aria-current="page">
                <?php else : ?> class="nav-link px-2 link-light alink">
                <?php endif; ?>
                <strong>LOGIN</strong>
                </a>
            <?php endif; ?>
        </div>
    </header>
</div>