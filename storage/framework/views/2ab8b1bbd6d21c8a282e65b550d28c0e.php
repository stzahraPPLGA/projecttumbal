

<?php $__env->startSection('content'); ?>

<div class="container mt-3">
    <h1>Harap Masukan Data Siswa</h1>
    <p>Dimohon lebih teliti saat memasukan data siswa!</p>
    <a class="btn btn-primary mb-3" href="/siswa/create">Add Data Siswa PPLG</a>
    <table class="table table-bordered">
        <tr>
            <td>NO</td>
            <td>NIS</td>
            <td>NAMA</td>
            <td>KELAS</td>
            <td>NAMA IBU</td>
            <td>NAMA AYAH</td>
            <td>NAMA WALI</td>
            <td>NO TELP IBU</td>
            <td>NO TELP AYAH</td>     
            <td>NO TELP WALI</td>     
            <td>FOTO</td>
            <td>AKSI</td>
        </tr>
        <?php $__currentLoopData = $siswapplg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pplg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($pplg->id); ?></td>
            <td><?php echo e($pplg->nis); ?></td>
            <td><?php echo e($pplg->nama); ?></td>
            <td><?php echo e($pplg->kelas_jurusan); ?></td>
            <td><?php echo e($pplg->nama_ibu); ?></td>
            <td><?php echo e($pplg->nama_ayah); ?></td>
            <td><?php echo e($pplg->nama_wali); ?></td>
            <td><?php echo e($pplg->no_telp_ibu); ?></td>
            <td><?php echo e($pplg->no_telp_ayah); ?></td>
            <td><?php echo e($pplg->no_telp_wali); ?></td>
            <td><?php echo e($pplg->foto_siswa); ?></td>
            <td>
                <a class="btn btn-outline-success" href="/siswa/<?php echo e($pplg->id); ?>/edit">Edit</a>
                <form action="/siswa/<?php echo e($pplg->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('delete'); ?>
                    <input class="btn btn-outline-danger" type="submit" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tumbal\resources\views/siswa/index.blade.php ENDPATH**/ ?>