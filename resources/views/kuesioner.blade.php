<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuisioner Tracer Study</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>
<body>
    <special-header></special-header>
    <section class="hero">
        <div class="container">
            <div class="form-container">
                <h2>Kuisioner Tracer Study Fakultas Ilmu Komputer UPNVJ</h2> <br>
                <form id="kuisionerForm">
                    <div class="form-group">
                        <label for="name">Nama Lengkap:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="graduationYear">Tahun Lulus:</label>
                        <input type="text" id="graduationYear" name="graduationYear" required>
                    </div>
                    <div class="form-group">
                        <label for="employmentStatus">Status Pekerjaan:</label>
                        <select id="employmentStatus" name="employmentStatus" required>
                            <option value="">Pilih Status</option>
                            <option value="employed">Bekerja</option>
                            <option value="unemployed">Tidak Bekerja</option>
                            <option value="entrepreneur">Berwirausaha</option>
                            <option value="furtherStudy">Melanjutkan Studi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jobRelevance">Relevansi Pekerjaan dengan Bidang Ilmu Komputer:</label>
                        <select id="jobRelevance" name="jobRelevance" required>
                            <option value="">Pilih Tingkat Relevansi</option>
                            <option value="Sangat Relevan">Sangat Relevan</option>
                            <option value="Relevan">Relevan</option>
                            <option value="Tidak Relevan">Tidak Relevan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="skillsUse">Keahlian yang Sering Digunakan:</label>
                        <textarea id="skillsUse" name="skillsUse" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="salaryRange">Range Gaji Bulanan (opsional):</label>
                        <select id="salaryRange" name="salaryRange">
                            <option value="">Pilih Range</option>
                            <option value="< 5 juta">Kurang dari 5 juta</option>
                            <option value="5-10 juta">5 juta - 10 juta</option>
                            <option value="> 10 juta">Lebih dari 10 juta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="feedback">Masukan atau Saran:</label>
                        <textarea id="feedback" name="feedback" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="internshipExperience">Apakah Anda Pernah Mengikuti Program Magang?:</label>
                        <select id="internshipExperience" name="internshipExperience" required>
                            <option value="">Pilih Jawaban</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="entrepreneurship">Apakah Anda Terlibat dalam Kegiatan Kewirausahaan?:</label>
                        <select id="entrepreneurship" name="entrepreneurship" required>
                            <option value="">Pilih Jawaban</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="furtherStudy">Apakah Anda Berencana Melanjutkan Studi?:</label>
                        <select id="furtherStudy" name="furtherStudy" required>
                            <option value="">Pilih Jawaban</option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="softSkills">Pengaruh Soft Skills dari Kampus pada Karier Anda:</label>
                        <select id="softSkills" name="softSkills" required>
                            <option value="">Pilih Tingkat Pengaruh</option>
                            <option value="Sangat Besar">Sangat Besar</option>
                            <option value="Besar">Besar</option>
                            <option value="Cukup">Cukup</option>
                            <option value="Kecil">Kecil</option>
                            <option value="Tidak Ada">Tidak Ada</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="networking">Efektivitas Jaringan Alumni terhadap Karier Anda:</label>
                        <select id="networking" name="networking" required>
                            <option value="">Pilih Tingkat Efektivitas</option>
                            <option value="Sangat Efektif">Sangat Efektif</option>
                            <option value="Efektif">Efektif</option>
                            <option value="Cukup Efektif">Cukup Efektif</option>
                            <option value="Tidak Efektif">Tidak Efektif</option>
                            <option value="Tidak Pernah Digunakan">Tidak Pernah Digunakan</option>
                        </select>
                    </div>
                    <div class="logout-container">
                        <button type="submit" class="submit-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <special-footer></special-footer>
    <script>
    document.getElementById('kuisionerForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(e.target);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });
        const jsonData = JSON.stringify(data, null, 2);

        localStorage.setItem('kuisionerData', jsonData);

        const modal = document.getElementById('customAlert');
        modal.style.display = "block";

        const blob = new Blob([jsonData], { type: 'application/json' });
        const url = URL.createObjectURL(blob);

        const a = document.createElement('a');
        a.href = url;
        a.download = 'kuisioner_data.json'; 
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a); 
        URL.revokeObjectURL(url); 

        document.getElementById('okButton').onclick = function() {
            window.location.href = '/';
        };

        document.getElementById('closeModal').onclick = function() {
            modal.style.display = "none";
        };
    });

    window.onclick = function(event) {
        const modal = document.getElementById('customAlert');
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };
    </script>
    <script src="js/headerFooter.js"></script>
    <div id="customAlert" class="modal">
        <div class="modal-content">
            <p>Kuisioner berhasil disimpan!</p>
            <button id="okButton">OK</button>
        </div>
    </div>
</body>
</html>