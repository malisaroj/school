


<?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            


<div class="row">

          <div class="col-md-2 navigation ">

            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

          </div>

          <div class="col-md-10">

          
            <?php echo Form::open(['url' => 'addNew']); ?>


              <div class="form-group">
                
                <?php echo e(Form::label('news','News Title')); ?><br>

                <?php echo e(Form::text('title')); ?>


              </div>

              <div class="form-group">
                
                 <?php echo e(Form::label('newsdescription','News Description')); ?><br>

                  <?php echo e(Form::text('description')); ?>

              </div>
              
              
              <?php echo e(Form::submit('Submit')); ?>


            <?php echo Form::close(); ?>


          </div>

      </div>

    </div>

          
       

      

    




