<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location:/');
}
?>

<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php
        if(isset($_SESSION['cart'])){
            foreach ($catalog as $key => $cookie) {
                foreach($_SESSION['cart'] as $cartItemId){
                   if($key == $cartItemId){
                       ?><li><?= $cookie['name'] ?></li><?php
                   }
                }
           }
        }
        else {
            echo '';
        }
         ?>
        TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
