

<?php $__env->startSection('content'); ?>

<div class="container">
<h1>Edit Data Siswa PPLG</h1>

<form action="/siswa/<?php echo e($siswapplg->id); ?>" method="POST">
    <?php echo method_field('put'); ?>
    <?php echo csrf_field(); ?>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NIS</label>
        <input type="text" name="nis" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->nis); ?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->nama); ?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">KELAS JURUSAN</label>
        <input type="text" name="kelas_jurusan" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->kelas_jurusan); ?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA ORTU</label>
        <input type="text" name="nama_ibu" placeholder="IBU" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->nama_ibu); ?>" aria-describedby="emailHelp">
        <input type="text" name="nama_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->nama_ayah); ?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NAMA WALI</label>
        <input type="text" name="nama_wali" placeholder="WALI" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->nama_wali); ?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NO TELP ORTU</label>
        <input type="text" name="no_telp_ibu" placeholder="IBU" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->no_telp_ibu); ?>" aria-describedby="emailHelp">
        <input type="text" name="no_telp_ayah" placeholder="AYAH" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->no_telp_ayah); ?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">NO TELP WALI</label>
        <input type="text" name="no_telp_wali" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->no_telp_wali); ?>" aria-describedby="emailHelp">
    </div>
    <div class="mb-2">
        <label for="TabelInput1" class="form-label">FOTO SISWA</label>
        <input type="text" name="foto_siswa" class="form-control" id="TabelInput1" value="<?php echo e($siswapplg->foto_siswa); ?>" aria-describedby="emailHelp">
    </div>
    <input class="btn btn-success" type="submit" name="submit" value="Save">
    <a href="/siswapplg" class="btn btn-danger">Batal</a>
</form>
</div>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project-tumbal\resources\views/siswa/edit.blade.php ENDPATH**/ ?>