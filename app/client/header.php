<header class="container-fluid">
  <nav class="nav-header container">
    <a href="./index.php" class="logo-header">
      <img class="img-logo" src="./assets/img/logo.png" alt="nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng" title="nhndev110 - Điện thoại, laptop, tablet, phụ kiện chính hãng">
    </a>
    <ul class="nav nav-left">
      <li><a class="set-home" href="./index.php">Trang Chủ</a></li>
      <li><a class="set-intro" href="##">Giới Thiệu</a></li>
      <li><a class="set-products" href="./index.php?page=products">Sản Phẩm</a></li>
      <li><a class="set-news" href="##">Tin Tức</a></li>
    </ul>
    <ul class="nav nav-right">
      <?php if (empty($_SESSION['name']) || empty($_SESSION['id'])) { ?>
        <li class="section-guest">
          <button type="button" class="btn btn-light set-signin" data-bs-toggle="modal" data-bs-target="#modal-signin">Đăng Nhập</button>
          <?php require_once './src/client/signin.php' ?>
        </li>
        <li class="section-guest">
          <button type="button" class="btn btn-outline-light set-signup" data-bs-toggle="modal" data-bs-target="#modal-signup">Đăng Kí</button>
          <?php require_once './src/client/signup.php' ?>
        </li>
      <?php } else { ?>
        <li>
          <a href="./index.php?page=cart">
            <div class="container-nav-icon cart-header">
              <ion-icon class="nav-icon" name="bag-handle-outline"></ion-icon>
              <div id="products-in-cart"><?= (!empty($_SESSION['quantity_product_in_cart'])) ? $_SESSION['quantity_product_in_cart'] : 0 ?></div>
            </div>
          </a>
        </li>
        <li>
          <a href="./index.php?page=user" class="set-user" title="<?php echo $_SESSION['name'] ?>">
            <div class="container-nav-icon">
              <ion-icon class="nav-icon" name="person-circle-outline"></ion-icon>
              <ion-icon name="caret-down-outline"></ion-icon>
            </div>
          </a>
          <ul class="subnav">
            <li><a href="./index.php?page=user"><?= $_SESSION['name'] ?></a></li>
            <hr>
            <li><a href="./src/client/signout.php">item1</a></li>
            <li><a href="./src/client/signout.php">item2</a></li>
            <hr>
            <li><a href="./src/client/signout.php">Đăng Xuất</a></li>
          </ul>
        </li>
      <?php } ?>
    </ul>
  </nav>
</header>