<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-brand"><a class="text-white" href="/">Agenda</a></div>
            <ul class="navbar-nav">
                <li class="navbar-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownteste" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user mr-1"></i>
                        <span><?php echo $_SESSION['nome'] ?></span>
                        
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownteste">
                        <a class="dropdown-item" href="#">Conta</a>
                        <a href="sair.php" class="dropdown-item">Sair</a>
                    </div>
                </li>    
            </ul>
            
        </div>
    </nav>
</header>