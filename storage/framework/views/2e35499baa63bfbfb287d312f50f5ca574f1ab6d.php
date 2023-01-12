<?php $__env->startSection('body'); ?>
<?php $__env->startSection('navhome'); ?>
<a class="nav-link active" aria-current="page" href="/admin">Home</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('item0'); ?>
<a class="nav-link" href="/adminSearch">Search</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('addItem'); ?>
<a class="nav-link" href="/adminAddItem">Add Item</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('item3'); ?>
<a class="nav-link" href="/profileA">Profile</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('logoutItem'); ?>
<div>
    <form action="/logout" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">Sign Out</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Add Item</h1>
            <form enctype="multipart/form-data" action="/adminAddItem" method="post">
                <?php echo csrf_field(); ?>
              <div class="form-label">
                <label for="clothesImage" class="form-label">Clothes Image</label>
                <input name="clothesImage" class="form-control" type="file" id="formFile">
              </div>

              <div class="form-label">
                <label for="clothesName">Clothes Name</label>
                <input type="text" name="clothesName" class="form-control <?php $__errorArgs = ['clothesName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="clothesName"  required value="<?php echo e(old('clothesName')); ?>">
                <?php $__errorArgs = ['clothesName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>

              <div class="form-label">
                <label for="clothesDesc">Clothes Desc</label>
                <input type="text" name="clothesDesc" class="form-control <?php $__errorArgs = ['clothesDesc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="clothesDesc"  required value="<?php echo e(old('clothesDesc')); ?>">
                <?php $__errorArgs = ['clothesDesc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>

              <div class="form-label">
                <label for="clothesPrice">Clothes Price</label>
                <input type="number" name="clothesPrice" class="form-control <?php $__errorArgs = ['clothesPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="clothesPrice"  required value="<?php echo e(old('clothesPrice')); ?>">
                <?php $__errorArgs = ['clothesPrice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>

              <div class="form-label">
                <label for="clothesStock">Clothes Stock</label>
                <input type="number" name="clothesStock" class="form-control <?php $__errorArgs = ['clothesStock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="clothesStock"  required value="<?php echo e(old('clothesStock')); ?>">
                <?php $__errorArgs = ['clothesStock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>

              <button class="btn btn-danger" type="submit">Add</button>

            </form>
        </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albert Anthony\Documents\Binus\ALDO Semester 5\Web Programming\LAB\Project\Project\resources\views/adminAddItem.blade.php ENDPATH**/ ?>