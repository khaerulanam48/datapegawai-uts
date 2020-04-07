<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Page Content goes here -->
    <center>
        <h3>Data Departement</h3>
    </center>


    <hr>
    <div class="row">
        <div class="col s6">
            <a href="<?php echo e(route ('departement.create')); ?>" class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">add</i></a>
        </div>

        <div class="col s6">

            <div class="col s6">
                <input placeholder="Search" type="search" required>
            </div>
            <div class="col s4">
                <button id="search" class="btn-medium waves-effect waves-light btn red" type="submit" name="action">Cari
                    <i class="material-icons right">search</i>
                </button>
            </div>

        </div>
    </div>

    <table class="responsive-table highlight">
        <thead>
            <tr>
                <th>NO</th>
                <th>NAMA DEPARTEMENT</th>
                <th>ACTION</th>
            </tr>
        </thead>

        <tbody>
            <?php $no = 1; ?>
            <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($value->nama_departement); ?></td>
                <td>
                    <div class="row">
                        <div class="col s2">
                            <a class="btn-floating waves-effect btn-small waves-light red" href="<?php echo e(route('departement.show', $value->id)); ?>"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col s2">
                            <a class="btn-floating waves-effect btn-small waves-light red" href="<?php echo e(route('departement.edit', $value->id)); ?>"><i class="material-icons">edit</i></a>
                        </div>
                        <div class="col s2">
                            <form action="<?php echo e(route('departement.destroy', $value->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn-floating waves-effect btn-small waves-light red"><i class="material-icons">delete</i></button>
                                
                            </form>
                        </div>
                    </div>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('departement.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/littleasia/Downloads/Compressed/tugascrud5_update-master/pegawai/resources/views/departement/index.blade.php ENDPATH**/ ?>