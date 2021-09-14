<!-- <?php require '../app/View/includes/header.php'?> -->

<form method="POST" action="./index.php?page=createUser" enctype="multipart/form-data"><!-- php sends the form values to this page-->
    <input type="text" name="nickname" placeholder="Username"></input>
    <input type="email" name="email" placeholder="Email"></input>
    <input type="text" name="password" placeholder="Password"></input>
    <input type="file" name="avatar"></input>
    <input type="text" name="signature" placeholder="notrequired"></input>
    <input type="submit"></input>
</form>

<!-- <?php require '../app/View/includes/footer.php'?> -->