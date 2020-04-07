<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- Page Content goes here -->
    <!-- halaman create -->
    <center>
        <h3> Form Data Pegawai</h3>
    </center>
    <div class="row">
        <div class="col s6">
            <a href="<?php echo e(route('pegawai.index')); ?>" class="btn-floating btn-medium waves-effect waves-light red"><i class="material-icons">arrow_back</i></a>
        </div>
    </div>
    <hr>

    <div class="row">
        <form class="col s12" action="<?php echo e(route('pegawai.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="number" name="nip" class="validate">
                    <label for="name">NIP</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="nama_pegawai" class="validate">
                    <label for="name">Nama Pegawai</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="tempat_lahir" class="validate">
                    <label for="name">Tempat Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="alamat" class="validate">
                    <label for="name">Alamat</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="date" name="tanggal_lahir" class="validate">
                    <label for="name">Tanggal Lahir</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="jenis_kelamin" class="validate">
                    <label for="name">Jenis_Kelamin</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="name" type="text" name="jabatan" class="validate">
                    <label for="name">Jabatan</label>
                </div>
            </div>

            <button class="btn-medium waves-effect waves-light btn red" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </form>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('pegawai.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/littleasia/Downloads/Compressed/tugascrud5_update-master/pegawai/resources/views/pegawai/create.blade.php ENDPATH**/ ?>