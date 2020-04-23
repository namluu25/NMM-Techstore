
<?php $__env->startSection('title'); ?>
    List Category
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Category</h4>
                </p>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th class="text-center"> ID </th>
                        <th class="text-center">  Category Name </th>
                        <th class="text-center"> Edit </th>
                        <th class="text-center"> Delete </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $listCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td class="text-center" width="20px"><a href="admin/category/edit/<?php echo e($item->id); ?>"><button class="btn btn-primary">Edit</button></a></td>
                                <td class="text-center" width="20px"><a href="admin/category/delete/<?php echo e($item->id); ?>"><button class="btn btn-danger">Delete</button></a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <div class="mt-3">
                    <?php echo e($listCategory->links()); ?>

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/nmm/resources/views/admin/category/list.blade.php ENDPATH**/ ?>