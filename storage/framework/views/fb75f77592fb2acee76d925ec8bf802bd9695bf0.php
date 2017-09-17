<div class="form-group <?php echo !$errors->has($errorKey) ?: 'has-error'; ?>">

    <label for="<?php echo e($id); ?>" class="col-sm-<?php echo e($width['label']); ?> control-label"><?php echo e($label); ?></label>

    <div class="col-sm-<?php echo e($width['field']); ?>">

        <?php echo $__env->make('admin::form.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="radio">
                <label>
                    <input type="radio" name="<?php echo e($name); ?>" value="<?php echo e($option); ?>" class="minimal <?php echo e($class); ?>" <?php echo e(($option == old($column, $value))?'checked':''); ?> />&nbsp;<?php echo e($label); ?>&nbsp;&nbsp;
                </label>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo $__env->make('admin::form.help-block', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </div>
</div>
