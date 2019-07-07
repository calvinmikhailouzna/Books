 <?php 
    $judul = '';
    $pengarang = '';
    $penerbit = '';
    $sinopsis = '';
    $thnterbit = '';
    $idkategori = '';
    $imgcover = '';

    foreach ($books as $book_item) :
        if($book_item['idbuku'] == $idbuku){
          $judul = $book_item['judul'];
          $pengarang = $book_item['pengarang'];
          $penerbit = $book_item['penerbit'];
          $sinopsis = $book_item['sinopsis'];
          $thnterbit = $book_item['thnterbit'];
          $idkategori = $book_item['idkategori'];
          $imgcover =  $book_item['imgfile'];
        }
      endforeach;
  ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Buku</h1>
      </div>
      <div class="form-group row">
          
              <div style=' width : 800px; height : 480px; background : transparent;'><img style='max-width : 100%; max-height : 100%;' src= <?php echo '"'; echo base_url('assets/images/'. $imgcover); echo '"'; ?> /></div> 
              </div>
              <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
      </div>
      <div class="form-group row">
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <tbody>
            <tr>
              <th>Judul</th>
              <td><?php echo $judul;?></td>
            </tr>
            <tr>
              <th>Nama Pengarang</th>
              <td><?php echo $pengarang;?></td>
            </tr>
            <tr>
              <th>Kategori Buku</th>
              <td><?php echo $idkategori;?></td>
            </tr>
            <tr>
              <th>Penerbit</th>
              <td><?php echo $penerbit;?></td>
            </tr>
            <tr>
              <th>Tahun Terbit</th>
              <td><?php echo $thnterbit;?></td>
            </tr>
            <tr>
              <th>Sypnosis</th>
            </tr>
            <tr>
              <td><?php echo $sinopsis;?></td><td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
  