<div class="card p-3">
    <div class="card-title">
        <h3 class="ps-3">Edit Anggota</h3>
    </div>
    <div class="card-body">
        <form action="index.php?page=update-anggota&id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $member['name']; ?>"
                        placeholder="Masukkan nama lengkap">
                </div>
                <div class="col mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $member['nim']; ?>"
                        placeholder="Masukkan nomor induk mahasiswa">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="address" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="address" name="address" placeholder="Masukkan alamat lengkap"
                        rows="5" style="resize: none;"><?php echo $member['address']; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="phone_number" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                        value="<?php echo $member['phone_number']; ?>" placeholder="Masukkan nomor telepon">
                </div>
                <div class="col mb-3">
                    <label for="photo_profile" class="form-label">Foto Anggota</label>
                    <input type="file" class="form-control" id="photo_profile" name="photo_profile"
                        placeholder="Masukkan foto anggota">
                </div>
            </div>
            <div class="mt-3">
                <a href="index.php?page=daftar-anggota" class="btn btn-secondary">Batal</a>
                <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>