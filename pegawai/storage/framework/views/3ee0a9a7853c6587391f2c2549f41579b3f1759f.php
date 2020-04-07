<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Page Content goes here -->
    <!-- halaman create -->
    <center>
        <h3> Form Edit Data Pegawai</h3>
    </center>
    <div class="row">
        <div class="col s6">
            <a href="<?php echo e(route('pegawai.index')); ?>" class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">arrow_back</i></a>
        </div>
    </div>
    <hr>

    <div class="row">
        <form class="col s12" action="<?php echo e(route('pegawai.update', $pegawai->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field("PUT"); ?>

            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="number" name="nip" class="validate" value="<?php echo e($pegawai->nip); ?>">
                    <label for="name">NIP</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="nama_pegawai" class="validate" value="<?php echo e($pegawai->nama_pegawai); ?>">
                    <label for="name">Nama Pegawai</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="tempat_lahir" class="validate" value="<?php echo e($pegawai->tempat_lahir); ?>">
                    <label for="name">Tempat Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="alamat" class="validate" value="<?php echo e($pegawai->alamat); ?>">
                    <label for="name">Alamat</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="date" name="tanggal_lahir" class="validate" value="<?php echo e($pegawai->tanggal_lahir); ?>">
                    <label for="name">Tanggal Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="jenis_kelamin" class="validate" value="<?php echo e($pegawai->jenis_kelamin); ?>">
                    <label for="name">Jenis_Kelamin</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="jabatan" class="validate" value="<?php echo e($pegawai->jabatan); ?>">
                    <label for="name">Jabatan</label>
                </div>
            </div>
            <button class="btn-medium waves-effect waves-light btn red" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('pegawai.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/littleasia/Downloads/Compressed/tugascrud5_update-master/pegawai/resources/views/pegawai/edit.blade.php ENDPATH**/ ?>