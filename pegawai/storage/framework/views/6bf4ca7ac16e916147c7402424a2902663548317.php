<div class="row">
                        <div class="col s4">
                            <a class="btn-floating waves-effect btn-small waves-light red" href="<?php echo e(route('pegawai.show', $data->id)); ?>"><i class="material-icons">visibility</i></a>
                        </div>
                        <div class="col s4">
                            <a class="btn-floating btn-small waves-effect waves-light red" href="<?php echo e(route('pegawai.edit', $data->id)); ?>"><i class="material-icons">edit</i></a>
                        </div>
                        <div class="col s4">
                            <form action="<?php echo e(route('pegawai.destroy', $data->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn-floating btn-small waves-effect waves-light red"><i class="material-icons">delete</i></button>

                            </form>
                        </div>
                    </div><?php /**PATH /home/littleasia/Downloads/Compressed/tugascrud5_update-master/pegawai/resources/views/pegawai/view/aksi.blade.php ENDPATH**/ ?>