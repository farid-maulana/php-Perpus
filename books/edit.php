<div class="card p-3">
    <div class="card-title">
        <h3 class="ps-3">Edit Buku</h3>
    </div>
    <div class="card-body">
        <form action="index.php?page=update-buku&id=<?php echo $id; ?>" method="POST">
            <div class="row">
                <div class="col mb-3">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="<?php echo $book['title']; ?>" placeholder="Masukkan judul buku">
                </div>
                <div class="col mb-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="author" name="author"
                        value="<?php echo $book['author']; ?>" placeholder="Masukkan penulis buku">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="publisher" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="publisher" name="publisher"
                        value="<?php echo $book['publisher']; ?>" placeholder="Masukkan penerbit buku">
                </div>
                <div class="col mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $book['isbn']; ?>"
                        placeholder="Masukkan ISBN">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="year" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="year" name="year" value="<?php echo $book['year']; ?>"
                        placeholder="Masukkan tahun terbit buku">
                </div>
                <div class="col mb-3">
                    <label for="total" class="form-label">Jumlah Buku</label>
                    <input type="number" class="form-control" id="total" name="total"
                        value="<?php echo $book['total']; ?>" placeholder="Masukkan jumlah buku">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label for="description" class="form-label">Deskripsi Buku</label>
                    <textarea class="form-control" id="description" name="description"
                        placeholder="Masukkan deskripsi buku secara singkat" rows="5"
                        style="resize: none;"><?php echo $book['description']; ?></textarea>
                </div>
            </div>
            <div class="mt-3">
                <a href="index.php?page=daftar-buku" class="btn btn-secondary">Batal</a>
                <button type="submit" name="create" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>