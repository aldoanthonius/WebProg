<?php $__env->startSection('navhome'); ?>
<a class="nav-link active" aria-current="page" href="/admin">Home</a>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('addItem'); ?>
<a class="nav-link" href="#">Add Item</a>
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

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albert Anthony\Documents\Binus\ALDO Semester 5\Web Programming\LAB\Project\Project\resources\views/admin.blade.php ENDPATH**/ ?>