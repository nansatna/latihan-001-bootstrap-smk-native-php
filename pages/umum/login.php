<main class="flex-grow-1">
  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <div class="card shadow-lg border-0 rounded-4">
            <div class="card-body p-4">
              <h3 class="text-center mb-4">Login</h3>
              <form action="proses_login.php" method="POST">
                <!-- Username -->
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input 
                    type="text" 
                    class="form-control" 
                    id="username" 
                    name="username" 
                    placeholder="Masukkan username" 
                    required>
                </div>
                <!-- Password -->
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input 
                    type="password" 
                    class="form-control" 
                    id="password" 
                    name="password" 
                    placeholder="Masukkan password" 
                    required>
                </div>
                <!-- Tombol Login -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
              </form>
              <!-- Link tambahan -->
              <div class="mt-3 text-center">
                <small>Belum punya akun? <a href="register.php">Daftar di sini</a></small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>