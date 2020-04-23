<?php $__env->startSection('title'); ?>
    Create Product
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create Product</h4>
                <form class="forms-sample" method="POST" action="<?php echo e(asset('admin/product/add')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" name = "name" placeholder="Name">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <label for="exampleInputEmail3">Category</label>
                            <select class="form-control" name="category_id" >
                                <?php $__currentLoopData = $listCategory ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label for="exampleInputEmail3">Brand</label>
                            <select class="form-control" name="brand_id" >
                                <?php $__currentLoopData = $listBrand ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="form-group col-4">
                            <label for="exampleInputPassword4">Price</label>
                            <input type="text" class="form-control text-danger" name="unit_price">
                        </div>
                        <div class="form-group col-4">
                            <label for="exampleInputPassword4">Promotion Price</label>
                            <input type="text" class="form-control text-danger" name="promotion_price">
                        </div>
                        <div class="form-group col-4">
                            <label for="exampleInputPassword4">Quantity</label>
                            <input type="text" class="form-control " name="quantity">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Product Detail</label>
                        <textarea name="detail" class="form-control " id="editor1"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Product Images</label>
                            <div class="dropzone" id="my-dropzone" name="myDropzone">

                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="button" class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
        
    <link rel="stylesheet" href="<?php echo e(asset('dropzone/dist/dropzone.css')); ?>">
    <script src="<?php echo e(asset('dropzone/dist/dropzone.js')); ?>"></script>
    <script type="text/javascript">
        Dropzone.options.myDropzone= {
            url: '<?php echo e(url('admin/product/uploadImg')); ?>',
            headers: {
                'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
            },
            autoProcessQueue: true,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFiles: 10,
            maxFilesize: 5,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            dictFileTooBig: 'Image is bigger than 5MB',
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;
                console.log(file);
                name =name.replace(/\s+/g, '-').toLowerCase();    /*only spaces*/
                $.ajax({
                    type: 'POST',
                    url: '<?php echo e(url('admin/product/deleteImg')); ?>',
                    headers: {
                        'X-CSRF-TOKEN': '<?php echo csrf_token(); ?>'
                    },
                    data: "id="+name,
                    dataType: 'html',
                    success: function(data) {
                        console.log(data)
                        $("#msg").html(data);
                    }
                });
                var _ref;
                if (file.previewElement) {
                    if ((_ref = file.previewElement) != null) {
                        _ref.parentNode.removeChild(file.previewElement);
                    }
                }
                return this._updateMaxFilesReachedClass();
            },
            previewsContainer: null,
            hiddenInputContainer: "body",
        }
    </script>
    <style>
        .dropzone {
            border: 2px dashed #0087F7;
            border-radius: 5px;
            background: white;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/nmm/resources/views/admin/product/createproduct.blade.php ENDPATH**/ ?>