<header> 
        <div class="home-header">
            <nav class="d-flex justify-content-end align-items-center" id="nav-header">
                <?php if(isset($_SESSION['loggedUser'])): ?>
                    <button id="home-header-btn" onclick="window.location.href='./index.php?page=disconnect'"><i class="fas fa-arrow-right"></i> Disconnect</button>
                <?php else: ?>
                    <button id="home-header-btn" onclick="window.location.href='./index.php?page=createUser'"><i class="fas fa-arrow-right"></i> Register</button>
                    <button id="home-header-btn" onclick="window.location.href='./index.php?page=login'"><i class="fas fa-arrow-right"></i> Login</button>
                <?php endif; ?>
            </nav>
            <div class="d-flex justify-content-center align-items-center">
                <h1 class="text-white mb-10">Les Nains PORTEQUOI ?</h1>
            </div>
        </div>
    </header>

<?php

//liens disponibles tout le temps
echo '<a href="index.php">Home</a>';
echo "<br>";

//liens disponibles quand on est connectés
if (isset($_SESSION['loggedUser'])) {
    echo '<a href="index.php?page=profile">Profile</a>';
    echo '<br>';
    echo '<a href="index.php?page=disconnect">Disconnect</a>';
} else {

    //liens disponibles quand on est pas connectés
    echo '<a href="index.php?page=createUser">Register</a>';
    echo '<br>';
    echo '<a href="index.php?page=login">Login</a>';
}

//le même principe est à appliquer quand on veut restreindre l'accès à certaines fonctionnalités, il faut juste mettre la condition au bon endroit
//(probablement uniquement dans le view)