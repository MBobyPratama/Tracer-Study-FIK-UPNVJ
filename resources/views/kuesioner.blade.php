<x-layout>

<body>
    <special-header></special-header>
    <section class="hero">
        <div class="container">
            <div class="form-container">
                <h2>Kuisioner Tracer Study Fakultas Ilmu Komputer UPNVJ</h2> <br>
                <form id="kuisionerForm">
                    @csrf
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
    document.getElementById('kuisionerForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const formData = new FormData(e.target);
    const data = { data: {} }; // Membuat objek data

    formData.forEach((value, key) => {
        data.data[key] = value; // Menyimpan semua jawaban dalam array 'data'
    });

    const jsonData = JSON.stringify(data, null, 2);

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    try {
        const response = await fetch('/posts', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
            },
            body: jsonData,
        });
        console.log('Response status:', response.status);
        const responseData = await response.json();
        console.log('Response data:', responseData);


        if (response.ok) {
            const modal = document.getElementById('customAlert');
            modal.style.display = "block";
            document.getElementById('okButton').onclick = function() {
                window.location.href = '/';
            };
        } else {
            const errorData = await response.json();
            console.error('Error response:', errorData);
            alert('Error: ' + errorData.message);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('Terjadi kesalahan saat mengirim data.');
    }
    });

    window.onclick = function(event) {
        const modal = document.getElementById('customAlert');
        if (event.target === modal) {
            modal.style.display = "none";
        }
    };
    </script>
    <div id="customAlert" class="modal">
        <div class="modal-content">
            <p>Kuisioner berhasil disimpan!</p>
            <button id="okButton">OK</button>
        </div>
    </div>
</body>

</x-layout>