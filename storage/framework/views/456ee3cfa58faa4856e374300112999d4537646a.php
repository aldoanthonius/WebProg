<?php $__env->startSection('navhome'); ?>
<a class="nav-link active" aria-current="page" href="/member">Home</a>
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
        <button type="submit" class="btn btn-danger">Sign Out</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albert Anthony\Documents\Binus\ALDO Semester 5\Web Programming\LAB\Project\Project\resources\views/member_profile.blade.php ENDPATH**/ ?>