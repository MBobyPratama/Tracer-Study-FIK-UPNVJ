<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Tracer Study FIK UPNVJ</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <special-header></special-header>

    <section class="hero">
        <div class="container">
            <div class="dashboard-container">
                <div class="dashboard-content">
                    <h2>Informasi Pengguna</h2>
                    
                    <div class="info-grid">
                        <div class="info-group full-width">
                            <label>Foto Profil</label>
                            <img src="{{ asset(auth()->user()->foto) }}" alt="Foto Profil" class="profile-photo">
                        </div>
                        
                        <div class="info-group">
                            <label>Nama Lengkap</label>
                            <p>{{ auth()->user()->name }}</p>
                        </div>
                        
                        <div class="info-group">
                            <label>NIM</label>
                            <p>{{ auth()->user()->nim }}</p>
                        </div>

                        <div class="info-group">
                            <label>Email</label>
                            <p>{{ auth()->user()->email }}</p>
                        </div>

                        <div class="info-group">
                            <label>Jenis Kelamin</label>
                            <p>{{ auth()->user()->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                        </div>

                        <div class="info-group">
                            <label>Nomor HP</label>
                            <p>{{ auth()->user()->no_hp }}</p>
                        </div>

                        <div class="info-group">
                            <label>Nomor KTP</label>
                            <p>{{ auth()->user()->no_ktp }}</p>
                        </div>

                        <div class="info-group">
                            <label>Tempat Lahir</label>
                            <p>{{ auth()->user()->tempat_lahir }}</p>
                        </div>

                        <div class="info-group">
                            <label>Tanggal Lahir</label>
                            <p>{{ auth()->user()->tgl_lahir }}</p>
                        </div>

                        <div class="info-group full-width">
                            <label>Alamat</label>
                            <p>{{ auth()->user()->alamat }}</p>
                        </div>
                    </div>

                    <div class="logout-container">
                        <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                            <button type="submit" class="btn-logout" onclick="handleLogout()">LOGOUT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <special-footer></special-footer>
    <script src="js/headerFooter.js"></script>
    <script src="js/script.js"></script>
</body>
</html>