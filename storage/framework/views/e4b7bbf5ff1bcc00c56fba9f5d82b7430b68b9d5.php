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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<div class="row row-cols-1 row-cols-md-4 g-4 m-2">

    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
            <div class="card h-100 text-white text-center bg-dark mb-3" style="width: 90%">
                <img class="card-img-top" src="<?php echo e($product->image); ?>" alt="Image Not Found" style="width: 100%; height:70%">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($product->name); ?></h5>
                    <p class="card-text">Rp <?php echo e(number_format($product->price,0, ',')); ?></p>
                    <a href="" class="btn btn-primary">More Detail</a>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="m-5 d-flex justify-content-center">
    <?php echo e($products->withQueryString()->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Albert Anthony\Documents\Binus\ALDO Semester 5\Web Programming\LAB\Project\Project\resources\views/admin.blade.php ENDPATH**/ ?>