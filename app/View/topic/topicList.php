<?php // Use any data loaded in the controller here ?>

<section>
        <nav>
            <div class="container-fluid" id="breadcrumb">
                <ol class="breadcrumb align-text-bottom bread-style">
                    <li class="breadcrumb-item">
                        <a href="./index.php" class="text-decoration-none">
                        <i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item active mauveicons">
                        Board Index
                    </li>
                    <li class="breadcrumb-item active">Category One</li>
                    <li class="breadcrumb-item active"><?= $_GET['board']?></li>
                </ol>
            </div>
        </nav>

    <h2 class="topicicondemos"><?=$_GET['board']?></h2>
    <?php if(isset($_SESSION['loggedUser']) && $_SESSION['loggedUser']!=""):?>
        <button class="btn btn-danger" onclick="window.location.href='index.php?page=CreateTopic&board=<?= $board ?>'">New Topic</button>
    <?php endif;?>
    <table class="table table_topics border rounded">
        <tr class="title_topics">
            <th class="text-light">Topics</th>
            <th class="text-light"><i class="fas fa-comments"></i></th>
            <th class="text-light"><i class="fas fa-eye"></i></th>
            <th class="text-light"><i class="far fa-clock"></i></th>
        </tr>
        <?php foreach ($topics as $topic) : ?>
            <tr>
                <td><a href="index.php?page=Topic&Topic=<?= $topic->title?>"><?=$topic->title ?></a><br>by <?=$topic->author?></td>
                <td>Number of comments</td>
                <td>Number of views</td>
                <td><?=$topic->author?><br><?= $topic->creationDate ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>


