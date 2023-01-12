<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">
    <title>MAIBOUTIQUE</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="" href="/">MAIBOUTIQUE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <?php echo $__env->yieldContent('navhome'); ?>
              </li>
              <li class="nav-item">
                
                <?php echo $__env->yieldContent('item0'); ?>
              </li>
              <li class="nav-item">
                
                <?php echo $__env->yieldContent('item1'); ?>
              </li>
              <li class="nav-item">
                
                <?php echo $__env->yieldContent('item2'); ?>
              </li>
              <li class="nav-item">
                <?php echo $__env->yieldContent('item3'); ?>
              </li>
              <li class="nav-item-add">
                <?php echo $__env->yieldContent('addItem'); ?>
              </li>
              <li class="nav-item">
                <div class="nav-item-logout">

                    <?php echo $__env->yieldContent('logoutItem'); ?>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div>
        <?php echo $__env->yieldContent('body'); ?>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


  </body>
</html>
<?php /**PATH C:\Users\Albert Anthony\Documents\Binus\ALDO Semester 5\Web Programming\LAB\Project\Project\resources\views/navbar.blade.php ENDPATH**/ ?>