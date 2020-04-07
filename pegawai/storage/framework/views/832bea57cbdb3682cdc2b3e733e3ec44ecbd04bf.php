<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Page Content goes here -->
    <!-- halaman create -->
    <center>
        <h3> Show Data Pegawai</h3>
    </center>
    <div class="row">
        <div class="col s6">
            <a href="<?php echo e(route('pegawai.index')); ?>" class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">arrow_back</i></a>
        </div>
    </div>
    <hr>

    <div class="row">
        <form class="col s12" action="" method="post">
            <?php echo csrf_field(); ?>

            <div class="row">
                <div class="input-field col s12">
                    <input id="last_name" type="number" name="nip" class="validate" disabled value="<?php echo e($pegawai->nip); ?>">
                    <label for="last_name">Nip</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="last_name" type="text" name="nama_pegawai" class="validate" disabled value="<?php echo e($pegawai->nama_pegawai); ?>">
                    <label for="last_name">Nama Pegawai</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="last_name" type="text" name="tempat_lahir" class="validate" disabled value="<?php echo e($pegawai->tempat_lahir); ?>">
                    <label for="last_name">Tempat Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="last_name" type="text" name="alamat" class="validate" disabled value="<?php echo e($pegawai->alamat); ?>">
                    <label for="last_name">Alamat</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="last_name" type="date" name="tanggal_lahir" class="validate" disabled value="<?php echo e($pegawai->tanggal_lahir); ?>">
                    <label for="last_name">Tanggal Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="last_name" type="text" name="jenis_kelamin" class="validate" disabled value="<?php echo e($pegawai->jenis_kelamin); ?>">
                    <label for="last_name">Jenis Kelamin</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="last_name" type="text" name="jabatan" class="validate" disabled value="<?php echo e($pegawai->jabatan); ?>">
                    <label for="last_name">Jabatan</label>
                </div>
            </div>

        </form>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('pegawai.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/littleasia/Downloads/Compressed/tugascrud5_update-master/pegawai/resources/views/pegawai/show.blade.php ENDPATH**/ ?>