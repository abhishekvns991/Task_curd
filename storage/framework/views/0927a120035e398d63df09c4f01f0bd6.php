<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-lg-3">
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-info">
                    Logout
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
            <div class="col-lg-6">
                <h1 class="text-center">Add Products</h1>
                <form action="<?php echo e(route('products.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Product Name" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="price" placeholder="Price" required>
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" placeholder="Description" required></textarea>
                    </div>
                    <div class="text-center">
                    <button class="btn btn-success" type="submit">Create product</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                <form action="<?php echo e(route('products.update', $product)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('PUT'); ?>
                                    <td class="text-center"> <input type="text" class="form-control" name="name" value="<?php echo e($product->name); ?>" required></td>
                                    <td class="text-center"><input type="number" class="form-control" name="price" value="<?php echo e($product->price); ?>" required></td>
                                    <td class="text-center"> <textarea name="description" class="form-control" required><?php echo e(formatDescription($product->description)); ?></textarea></td>
                                    <td class="text-center"> <button class="btn btn-info" type="submit">Update</button></td>
                               </form>
                                <td class="text-center">
                                    <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST" style="display:inline;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr>
                                    <td colspan="7">
                                    <center style="padding: 70px;"><i data-feather="frown" style="width: 300px !important;height: 100px;"></i><br><h2>Nothing Product</h2></center>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

</body>
</html>
<?php /**PATH C:\Users\Abhishek\Desktop\task\resources\views/products/index.blade.php ENDPATH**/ ?>