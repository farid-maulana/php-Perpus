<div class="card p-3">
    <div class="card-title">
        <div class="d-flex justify-content-between align-item-center">
            <h3 class="ps-3">Daftar Buku</h3>
            <div class="align-item-center">
                <a href="index.php?page=tambah-buku" class="btn btn-primary">Tambah Buku</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive-xxl">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col" style="width: 15%;">Deskripsi</th>
                        <th scope="col" style="width: 12%;">Penulis</th>
                        <th scope="col" style="width: 12%;">Penerbit</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Jumlah Buku</th>
                        <th scope="col" style="width: 10%;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $numbering = 1;
                    foreach($books as $index => $book)
                    {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $numbering++; ?></th>
                        <td><?php echo $book['title']; ?></td>
                        <td>
                            <?php 
                                $description = strip_tags($book['description']);
                                if (strlen($description) > 50) 
                                {
                                    $desc = substr($description, 0, 50);
                                    echo $desc . '...';
                                } 
                                else 
                                {
                                    echo $description;
                                }
                            ?>
                            <span id="demo<?php echo $index; ?>" class="collapse"><?php echo $description; ?></span>

                            </p>
                        </td>
                        <td><?php echo $book['author']; ?></td>
                        <td><?php echo $book['publisher']; ?></td>
                        <td><?php echo $book['isbn']; ?></td>
                        <td><?php echo $book['year']; ?></td>
                        <td><?php echo $book['total']; ?></td>
                        <td>
                            <a href="index.php?page=edit-buku&id=<?php echo $index; ?>"
                                class="btn btn-info btn-sm">Edit</a>
                            <a href="index.php?page=delete-buku&id=<?php echo $index; ?>"
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