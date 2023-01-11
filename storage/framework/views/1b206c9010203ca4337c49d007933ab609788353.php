<?php $__env->startSection('body'); ?>
<?php $__env->startSection('navhome'); ?>
<a class="nav-link active" aria-current="page" href="/member">Home</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('item0'); ?>
<a class="nav-link" href="/memberSearch">Search</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('item1'); ?>
<a class="nav-link" href="#">Cart</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('item2'); ?>
<a class="nav-link" href="#">History</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('item3'); ?>
<a class="nav-link" href="/profileM">Profile</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('logoutItem'); ?>
<div>
    <form action="/logout" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-info">Sign Out</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.rtl.min.css" integrity="sha384-WJUUqfoMmnfkBLne5uxXj+na/c7sesSJ32gI7GfCk4zO4GthUKhSEGyvQ839BC51" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<div class="row justify-content-center">
    <?php if(session()->has('failedUpdatePassword')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo e(session('failedUpdatePassword')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Update Password</h1>
            <form action="/editPasswordM" method="post">
                <?php echo csrf_field(); ?>
              <div class="form-floating">
                <input type="password" name="old_password" class="form-control rounded-top <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="old_password" placeholder="Old Password" required value="<?php echo e(old('old_password')); ?>">
                <label for="old_password">Old Password</label>
                <?php $__errorArgs = ['old_password'];
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
              <div class="form-floating">
                <input type="password" name="new_password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                id="new_password" placeholder="new_password" required>
                <label for="new_password">New Password</label>
                <?php $__errorArgs = ['new_password'];
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

              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Save Update</button>
              <a href="/profileM">Back</a>
            </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albert Anthony\Documents\Binus\ALDO Semester 5\Web Programming\LAB\Project\Project\resources\views/memberEditPassword.blade.php ENDPATH**/ ?>