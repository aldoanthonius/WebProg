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
<?php $__env->startSection('logoutItem'); ?>
<div>
    <form action="/logout" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-info">Sign Out</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

        <?php if(session()->has('updatedPassword')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo e(session('updatedPassword')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>


<div class="member">
    <div class="text-profile">
        My Profile
    </div>
    <div class="text-member">
        member
    </div>
    <div>
        username : <?php echo e($profile->username); ?>

        <br>
        <?php echo e($profile->email); ?>

        <br>
        Address : <?php echo e($profile->address); ?>

        <br>
        Phone : <?php echo e($profile->phone); ?>

    </div>
    <div>

        <a href="/editProfile" class="btn btn-primary">edit profile</a>
        <a href="/editPasswordM" class="btn btn-light" id="btn">edit password</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albert Anthony\Documents\Binus\ALDO Semester 5\Web Programming\LAB\Project\Project\resources\views/member_profile.blade.php ENDPATH**/ ?>