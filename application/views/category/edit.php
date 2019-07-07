
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Kategori</h1>
      </div>
    <form method="post" action="<?php echo site_url('category/edit/'); ?>">
    <input type="hidden" name="idkategori2" value=<?php echo $idkategori; ?> >
    <input class="form-control form-control-dark" type="text" placeholder="Tambah Kategori disini" name="kategoriBaru" style="border: 1px solid #cccccc; margin-top: 20px;">
    </form>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Id Kategori</th>
              <th>Kategori</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            // menampilkan data buku
            foreach ($kategori as $kategori_item): 

            if ($kategori_item['idkategori'] == $idkategori){
              echo "
            <tr>
              <td>"; echo $kategori_item['idkategori']; echo "</td>
              <td>"; echo $kategori_item['kategori']; echo "</td>
            </tr>
            "; }
             endforeach; ?>
          </tbody>
        </table>
      </div>
    </main>
  