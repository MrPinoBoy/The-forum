<header> 
        <div class="home-header">
            <nav class="d-flex justify-content-end align-items-center" id="nav-header">
                <?php if(isset($_SESSION['loggedUser'])): ?>
                    <button id="home-header-btn" onclick="window.location.href='./index.php?page=disconnect'"><i class="fas fa-arrow-right"></i> Disconnect</button>
                    <button id="home-header-btn" onclick="window.location.href='./index.php?page=profile'"><i class="fas fa-arrow-right"></i> Profile</button>
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