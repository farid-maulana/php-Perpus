<div class="card p-3">
    <div class="card-title">
        <div class="d-flex justify-content-between align-item-center">
            <h3 class="ps-3">Daftar Anggota</h3>
            <div class="align-item-center">
                <a href="index.php?page=tambah-anggota" class="btn btn-primary">Tambah Anggota</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive-xxl">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Tanggal Registrasi</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $numbering = 1;
                    foreach($members as $index => $member)
                    {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $numbering++; ?></th>
                        <td>
                            <img src="<?php echo $member['photo_profile']; ?>" alt="photo profile" width="50px"
                                height="50px">
                        </td>
                        <td><?php echo $member['name']; ?></td>
                        <td><?php echo $member['address']; ?></td>
                        <td><?php echo $member['phone_number']; ?></td>
                        <td><?php echo $member['registration_date']; ?></td>
                        <td>
                            <a href="index.php?page=edit-anggota&id=<?php echo $index; ?>"
                                class="btn btn-info btn-sm">Edit</a>
                            <a href="index.php?page=delete-anggota&id=<?php echo $index; ?>"
                                class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>