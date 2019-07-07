
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <form method="post" action="<?php echo site_url('book/findbooks'); // arahkan form submit ke kontroller 'book/findbooks ?>">
    <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search" name="key" style="border: 1px solid #cccccc; margin-top: 20px;">
    </form>

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Buku</h1> <h1 class="h2" align="center">Jumlah buku: <?php echo $jumlahBuku; ?></h1>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Judul Buku</th>
              <th>Pengarang</th>
              <th>Penerbit</th>
              <th>Tahun Terbit</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            // menampilkan data buku
            foreach ($rowset as $baris): 

            ?>
            <tr>
              <td><?php echo $baris['judul'] ?></td>
              <td><?php echo $baris['pengarang'] ?></td>
              <td><?php echo $baris['penerbit'] ?></td>
              <td><?php echo $baris['thnterbit'] ?></td>
              <td><?php echo anchor('book/view/'.$baris['idbuku'], 'View', 'Lihat Buku'); ?> | <?php echo anchor('book/redirect_edit/'.$baris['idbuku'], 'Edit', 'Edit Buku'); ?> | <?php echo anchor('book/delete/'.$baris['idbuku'], 'Del', 'Hapus Buku'); ?></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <?php 
          echo $pagin;
        ?>
      </div>
    </main>
  