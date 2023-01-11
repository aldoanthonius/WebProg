<?php $__env->startSection('body'); ?>
<?php $__env->startSection('navhome'); ?>
<a class="nav-link active" aria-current="page" href="/admin">Home</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('item0'); ?>
<a class="nav-link" href="/adminSearch">Search</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('addItem'); ?>
<a class="nav-link" href="#">Add Item</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('logoutItem'); ?>
<div>
    <form action="/logout" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">Sign Out</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php if(session()->has('updatedPassword')): ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('updatedPassword')); ?>

    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>
<div class="admin">
    <div class="text-profile">
        My Profile
    </div>
    <div class="text-admin">
        admin
    </div>
    <div>
        username : <?php echo e($profile->username); ?>

        <br>
        <?php echo e($profile->email); ?>

        <br>
        Password : <?php echo e($profile->password); ?>

        <br>
        Address : <?php echo e($profile->address); ?>

        <br>
        Phone : <?php echo e($profile->phone); ?>

    </div>
    <div>
        <a href="/editPasswordA">edit password</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albert Anthony\Documents\Binus\ALDO Semester 5\Web Programming\LAB\Project\Project\resources\views/admin_profile.blade.php ENDPATH**/ ?>