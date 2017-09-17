<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?php echo e($form->title()); ?></h3>

        <div class="box-tools">
            <?php echo $form->renderHeaderTools(); ?>

        </div>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?php echo $form->open(['class' => "form-horizontal"]); ?>

        <div class="box-body">

            <?php if(!$tabObj->isEmpty()): ?>
                <?php echo $__env->make('admin::form.tab', compact('tabObj'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php else: ?>
                <div class="fields-group">
                    <?php $__currentLoopData = $form->fields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $field->render(); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">

            <?php if( ! $form->isMode(\Encore\Admin\Form\Builder::MODE_VIEW)  || ! $form->option('enableSubmit')): ?>
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <?php endif; ?>
            <div class="col-sm-<?php echo e($width['label']); ?>">

            </div>
            <div class="col-sm-<?php echo e($width['field']); ?>">

                <?php echo $form->submitButton(); ?>


                <?php echo $form->resetButton(); ?>


            </div>

        </div>

        <?php $__currentLoopData = $form->getHiddenFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hiddenField): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $hiddenField->render(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- /.box-footer -->
    <?php echo $form->close(); ?>

</div>

