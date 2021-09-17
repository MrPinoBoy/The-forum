<main class="mx-4">
        <div class="container-fluid bg-light" id="main-container">
        
            <!-- Breadcrumb -->
            <nav>       
                <div class="container-fluid" id="breadcrumb">
                    <ol class="breadcrumb align-text-bottom bread-style">
                        <li class="breadcrumb-item">
                            <a href="" class="text-decoration-none text-dark">
                            <i class="fas fa-home"></i> Home</a>
                        </li>
                        <li class="breadcrumb-item active"> Board Index
                        </li>
                    </ol>
                </div>
            </nav>
            
            <!-- Home page topic -->   
            <div class="row">
                <div class="col-md-9 col-sm col-lg-9">
                    <div class="container pt-5 bg-light d-flex flex-wrap" id="background-topic">
                        <h2 class="display-8">Category One</h2>
                        <div class="container" id="background-topic-category">
                            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                <?php foreach($boards as $board): ?>
                                <div class="col" id="topic-category"><a href="index.php?page=Boards&board=<?=$board->name?>"><?= $board->name ?>
                                    <div><?= $board->description?></div>
                                </a>
                                    <?php for($i=0;$i<3;$i++): ?>
                                    <div>
                                        <h3><?= $topics[$i."title".$board->name]?></h3>
                                        <p><?= $topics[$i."date".$board->name] ?></p>
                                        <p><?= $topics[$i."author".$board->name] ?></p>
                                    </div>    
                                    <?php endfor;?>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Search bar // Last post // Last active user-->
            <div class="col-md-3 col-lg-3 px-5" id="nav-bar">

            <!-- Search Bar $ Form User -->
            <form id="search-bar" class="form-inline flex-nowrap">
                <input class="form-control w-100" type="search" placeholder="Search">
                <button class="btn" type="submit"><i class="fas fa-search"></i>
                </button>
                <button class="btn" type="submit"><i class="fas fa-cog"></i>
                </button>
            </form>
            <hr>
            <p>Login - Register</p>
            <form id="login-form" class="form-inline flex-nowrap">
                <input class="form-control w-100" type="search" placeholder="Username">
            </form>
            <form id="login-form" class="form-inline flex-nowrap">
                <input class="form-control w-100" type="search" placeholder="Password">
            </form>
            <div id="login-register">
                <input type="checkbox" class="form-check-input" id="">
                <label class="form-check-label"> Remember me</label>
            </div>
            <button id="btn-login" class="btn btn-block flex-nowrap">Login</button>
            <hr>
            <p>I forgot my password</p>

            <!-- Last post -->
            <div class="table-responsive mt-5" id="">    
            </div>
            <table id="table-side" class="table">
                <thead class="thead">
                    <tr>
                        <th scope="col" class="h4">Last posts</th>
                    </tr>
                </thead>

                <tbody class="d-flex justify-content-center" id="tbody">
                    <tr>
                        <td class="card" style="width: 100%;">
                            <div>
                                <div class="card-body" id="post">
                                    <div class="title d-flex align-items-center">
                                        <h5 class="card-title">Post - Category</h5>
                                        <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                                    </div>
                                        <p class="fw-normal">Writing your own post here. It gets displayed here.</p>
                                        <p class="fw-light">Tags: test, work, eat, repeat</p>
                                </div>
                            </div>
                        </td>
                        <td class="card" style="width: 100%;">
                            <div>
                                <div class="card-body" id="post">
                                    <div class="title d-flex align-items-center">
                                        <h5 class="card-title">Post - Category</h5>
                                        <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                                    </div>
                                        <p class="fw-normal">Writing your own post here. It gets displayed here.</p>
                                        <p class="fw-light">Tags: test, work, eat, repeat</p>
                                </div>
                            </div>
                        </td>
                        <td class="card" style="width: 100%;">
                            <div>
                                <div class="card-body" id="post">
                                    <div class="title d-flex align-items-center">
                                        <h5 class="card-title">Post - Category</h5>
                                        <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                                    </div>
                                        <p class="fw-normal">Writing your own post here. It gets displayed here.</p>
                                        <p class="fw-light">Tags: test, work, eat, repeat</p>
                                </div>
                            </div>
                        </td>
                        <td class="card" style="width: 100%;">
                            <div>
                                <div class="card-body" id="post">
                                    <div class="title d-flex align-items-center">
                                        <h5 class="card-title">Post - Category</h5>
                                        <h6 class="card-subtitle ml-auto text-muted">2 hours ago</h6>
                                    </div>
                                        <p class="fw-normal">Writing your own post here. It gets displayed here.</p>
                                        <p class="fw-light">Tags: test, work, eat, repeat</p>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
      </div>
  </main>
