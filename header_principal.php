<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-brand">Agenda </div>
            <ul class="navbar-nav">
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><?php echo $_SESSION['nome'] ?></span>
                        <i class="fa fa-user ml-3"></i>
                        
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Conta</a>
                        <a href="sair.php" class="dropdown-item">Sair</a>
                    </div>
                </li>    
            </ul>
            
        </div>
    </nav>
</header>