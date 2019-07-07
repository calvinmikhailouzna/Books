<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      </form>
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah User</h1>
      </div>
      <?php
      echo form_open_multipart('user/edit'); 
      ?>
          
      <div class="form-group row">
              <label for="judul" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" placeholder="Masukkan nama">
              </div>
          </div>

          <div class="form-group row">
              <label for="pengarang" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="password" placeholder="Masukkan username">
              </div>
          </div>

          <div class="form-group row">
              <label for="pengarang" class="col-sm-2 col-form-label">Fullname</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="fullname" placeholder="Masukkan nama lengkap">
              </div>
          </div>
          <div class="form-group row">
              <label for="kategori" class="col-sm-2 col-form-label">Role</label>
              <div class="col-sm-10">
                  <select class="form-control" name="role">
                      <option value="admin">Administrator</option>
                      <option value="operator">Operator</option>
                  </select>
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary mb-2">Submit User</button>      
              </div>
          </div>
          
      </form>
</main>