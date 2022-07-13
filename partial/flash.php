<?php if(isset($_SESSION['notification']['message'])): ?>
    <div class="container">
        <div class ="col-lg-12 alert alert-<?= $_SESSION['notification']['type'] ?> alert-dismissible fade show" role="alert">
            <strong class="col-lg-11"><?= $_SESSION['notification']['message'] ?></strong>
            <button class="col-lg-1" type="button" class="close" data-dismiss="alert" aria-hidden="Close"><strong>&times;</strong></button>
        </div>
    </div>
<?php $_SESSION = ['notification'] ?>
<?php endif ?>

<style>
    button{
        background-color: transparent;
        border: none;
    }
</style>