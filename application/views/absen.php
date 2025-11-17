<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Absensi Welding</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body style="font-family: 'Roboto', sans-serif; margin: 0; padding: 0; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); color: #333;">
    <header style="background: linear-gradient(135deg, #003366 0%, #005599 100%); color: white; padding: 20px; text-align: center; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
        <h1 style="margin: 0; font-size: 2.5em; font-weight: 700; text-shadow: 2px 2px 4px rgba(0,0,0,0.3);"><i class="fas fa-user-check"></i> SISTEM ABSENSI WELDING</h1>
        <p style="margin: 5px 0 0; opacity: 0.9;">Struktur Organisasi & Kehadiran Karyawan</p>
    </header>

    <div class="main" style="position: relative; max-width: 1200px; margin: 0 auto; padding: 20px;">
        <!-- Tab Navigation -->
        <div class="tab-navigation" style="margin-bottom: 20px; background: white; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); overflow: hidden;">
            <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center;">
                <li><a href="#" onclick="switchTab('tab1')" class="tab-link active" style="padding: 15px 30px; text-decoration: none; color: #003366; font-weight: 500; transition: all 0.3s ease; display: block;"><i class="fas fa-calendar-check"></i> Absensi</a></li>
                <li><a href="#" onclick="switchTab('tab2')" class="tab-link" style="padding: 15px 30px; text-decoration: none; color: #666; font-weight: 500; transition: all 0.3s ease; display: block;"><i class="fas fa-user-plus"></i> Tambah Karyawan</a></li>
            </ul>
        </div>

        <!-- Tab Contents -->
        <div class="tab-contents">
            <!-- Tab 1: Absensi -->
            <div id="tab1" class="tab-content active">
                <div class="content-section" style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                        <h2 style="margin: 0; color: #003366; font-size: 1.8em;"><i class="fas fa-sitemap"></i> Struktur Organisasi</h2>
                        <div style="font-size: 0.9em; color: #666;">
                            <i class="fas fa-clock"></i> Jadwal Absen: 08:00 - 17:00 WIB
                        </div>
                    </div>
                    <p class="content-text" style="background: #e3f2fd; padding: 15px; border-radius: 8px; border-left: 4px solid #003366; margin-bottom: 20px; line-height: 1.6;">
                        Selamat datang di sistem absensi WELDING. Klik kotak nama di struktur organisasi untuk absen. 
                        <strong style="color: #d32f2f;">Warna merah = Tidak Hadir</strong>, <strong style="color: #1976d2;">biru = Hadir</strong>.
                    </p>

                    <!-- Struktur Organisasi -->
                    <div id="org-chart" class="org-chart" style="overflow-x: auto; max-height: 600px; background: #fafafa; border-radius: 10px; padding: 20px;">
                        <?php $this->load->view('absen_tree', array('karyawan' => $karyawan)); ?>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Tambah Karyawan -->
            <div id="tab2" class="tab-content">
                <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); max-width: 500px; margin: 0 auto;">
                    <h2 style="text-align: center; color: #003366; margin-bottom: 20px; font-size: 1.8em;"><i class="fas fa-user-plus"></i> Tambah Karyawan Baru</h2>
                    <!-- Form Tambah Karyawan (Create dengan Upload Foto) -->
                    <form id="form-tambah" enctype="multipart/form-data">
                        <div style="margin-bottom: 20px;">
                            <label for="nama-baru" style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;"><i class="fas fa-user"></i> Nama Baru:</label>
                            <input type="text" id="nama-baru" name="nama" placeholder="Masukkan nama lengkap" required style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 8px; box-sizing: border-box; transition: border-color 0.3s ease; font-size: 16px;">
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label for="jabatan-baru" style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;"><i class="fas fa-briefcase"></i> Jabatan Baru:</label>
                            <input type="text" id="jabatan-baru" name="jabatan" placeholder="Masukkan jabatan" required style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 8px; box-sizing: border-box; transition: border-color 0.3s ease; font-size: 16px;">
                        </div>
                        <div style="margin-bottom: 20px;">
                            <label for="foto" style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;"><i class="fas fa-image"></i> Foto Profil (Opsional):</label>
                            <input type="file" id="foto" name="foto" accept="image/*" style="width: 100%; padding: 12px; border: 2px solid #ddd; border-radius: 8px; box-sizing: border-box; transition: border-color 0.3s ease;">
                        </div>
                        <button type="button" onclick="addKaryawan()" style="width: 100%; padding: 15px; background: linear-gradient(135deg, #003366 0%, #005599 100%); color: white; border: none; border-radius: 8px; cursor: pointer; margin-top: 10px; font-weight: 500; font-size: 16px; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,51,102,0.3);">
                            <i class="fas fa-save"></i> Tambah Karyawan
                        </button>
                        <button type="button" onclick="switchTab('tab1')" style="width: 100%; padding: 15px; background: #666; color: white; border: none; border-radius: 8px; cursor: pointer; margin-top: 10px; font-weight: 500; font-size: 16px; transition: all 0.3s ease;">
                            <i class="fas fa-arrow-left"></i> Kembali ke Absensi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div id="edit-modal" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: white; padding: 30px; border-radius: 15px; z-index: 1000; box-shadow: 0 10px 30px rgba(0,0,0,0.3); max-width: 400px; width: 90%;">
    <h3 style="color: #003366; margin-bottom: 20px; text-align: center;"><i class="fas fa-edit"></i> Edit Karyawan</h3>
    <form id="form-edit" enctype="multipart/form-data">
        <input type="hidden" id="edit-id" name="id">
        <div style="margin-bottom: 15px;">
            <label for="edit-nama" style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;">Nama:</label>
            <input type="text" id="edit-nama" name="nama" required style="width: 100%; padding: 10px; border: 2px solid #ddd; border-radius: 5px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="edit-jabatan" style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;">Jabatan:</label>
            <input type="text" id="edit-jabatan" name="jabatan" required style="width: 100%; padding: 10px; border: 2px solid #ddd; border-radius: 5px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="edit-foto" style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;">Foto Baru (Opsional):</label>
            <input type="file" id="edit-foto" name="foto" accept="image/*" style="width: 100%; padding: 10px; border: 2px solid #ddd; border-radius: 5px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 20px;">
            <label for="edit-status" style="display: block; margin-bottom: 5px; font-weight: 500; color: #003366;">Status Absen:</label>
            <select id="edit-status" name="status_absen" style="width: 100%; padding: 10px; border: 2px solid #ddd; border-radius: 5px; box-sizing: border-box;">
                <option value="tidak_hadir">Tidak Hadir</option>
                <option value="hadir">Hadir</option>
            </select>
        </div>
        <div style="text-align: center;">
            <button type="button" onclick="updateKaryawan()" style="padding: 10px 20px; background: #4caf50; color: white; border: none; border-radius: 5px; margin-right: 10px; cursor: pointer; transition: all 0.3s ease;"><i class="fas fa-check"></i> Update</button>
            <button type="button" onclick="closeModal()" style="padding: 10px 20px; background: #f44336; color: white; border: none; border-radius: 5px; cursor: pointer; transition: all 0.3s ease;"><i class="fas fa-times"></i> Batal</button>
        </div>
    </form>
</div>

<!-- Overlay Modal -->
<div id="modal-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 999; transition: opacity 0.3s ease;"></div>

<style>
    /* Animasi dan Hover Effects */
    .tab-link:hover { background: #f0f8ff; }
    input:focus, select:focus { border-color: #003366; outline: none; box-shadow: 0 0 5px rgba(0,51,102,0.3); }
    button:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(0,0,0,0.2); }
    .node:hover { transform: scale(1.05); box-shadow: 0 6px 20px rgba(0,0,0,0.2); }
    .org-chart { animation: fadeIn 0.5s ease; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

    .org-chart { display: flex; flex-direction: column; align-items: center; margin: 20px 0; padding: 20px; background: #fafafa; border-radius: 10px; }
    .level-1 { margin-bottom: 20px; }
    .level-2 { display: flex; justify-content: space-around; width: 100%; max-width: 800px; }
    .branch { display: flex; flex-direction: column; align-items: center; margin: 0 20px; }
    .sub-branch { display: flex; justify-content: space-around; width: 100%; margin-top: 10px; }
    .node { background-color: red; color: white; padding: 10px; margin: 5px; border-radius: 12px; cursor: pointer; transition: all 0.3s ease; text-align: center; min-width: 120px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); position: relative; }
    .node.hadir { background: linear-gradient(135deg, #1976d2 0%, #42a5f5 100%); }
    .node-foto { width: 50px; height: 50px; border-radius: 50%; margin: 0 auto 8px; display: block; object-fit: cover; border: 2px solid white; }
    .node-foto-default { background: linear-gradient(135deg, #666 0%, #999 100%); width: 50px; height: 50px; border-radius: 50%; margin: 0 auto 8px; display: block; line-height: 50px; text-align: center; color: white; font-size: 18px; font-weight: bold; border: 2px solid white; }
    .node-name { font-weight: bold; font-size: 14px; margin-bottom: 4px; }
    .node-jabatan { font-size: 12px; opacity: 0.9; margin-bottom: 4px; }
    .node-status { font-size: 10px; background: rgba(255,255,255,0.2); padding: 2px 6px; border-radius: 10px; }
    .edit-btn, .delete-btn { position: absolute; top: 4px; right: 4px; font-size: 10px; padding: 4px; border: none; border-radius: 50%; cursor: pointer; transition: all 0.3s ease; opacity: 0; }
    .node:hover .edit-btn, .node:hover .delete-btn { opacity: 1; }
    .edit-btn { background: #4caf50; color: white; top: 4px; right: 28px; }
    .delete-btn { background: #f44336; color: white; }
    @media (max-width: 768px) { 
        .level-2 { flex-direction: column; align-items: center; } 
        .sub-branch { flex-direction: row; justify-content: center; flex-wrap: wrap; } 
        .tab-link { padding: 10px 15px; font-size: 14px; }
    }
    .tab-content { display: none; animation: slideIn 0.3s ease; }
    .tab-content.active { display: block; }
    @keyframes slideIn { from { opacity: 0; transform: translateX(20px); } to { opacity: 1; transform: translateX(0); } }
    .tab-link.active { background: #e3f2fd; }
    .tab-link:hover { background: #e3f2fd; }
</style>

<script>
    // Fix: Reindex nodes by ID from PHP array
    var nodes = {};
    <?php foreach ($karyawan as $row): ?>
        nodes[<?php echo $row['id']; ?>] = {
            id: <?php echo $row['id']; ?>,
            nama: '<?php echo addslashes($row['nama']); ?>',
            jabatan: '<?php echo addslashes($row['jabatan']); ?>',
            status_absen: '<?php echo $row['status_absen']; ?>',
            foto: '<?php echo isset($row['foto']) ? $row['foto'] : ''; ?>'
        };
    <?php endforeach; ?>

    // Fungsi untuk generate inisial nama
    function getInitials(nama) {
        var namaParts = nama.trim().split(' ');
        var initials = namaParts.map(function(part) {
            return part.charAt(0).toUpperCase();
        }).join('');
        return initials.substring(0, 2); // Ambil 2 huruf pertama
    }

    // Fungsi untuk switch tab
    function switchTab(tabId) {
        // Hide all tab contents
        var contents = document.querySelectorAll('.tab-content');
        contents.forEach(function(content) {
            content.classList.remove('active');
        });
        
        // Remove active from all tab links
        var links = document.querySelectorAll('.tab-link');
        links.forEach(function(link) {
            link.classList.remove('active');
        });
        
        // Show selected tab content
        document.getElementById(tabId).classList.add('active');
        
        // Add active to selected tab link
        event.target.classList.add('active');
    }

    function loadNodes() {
        var saved = localStorage.getItem('absen_nodes');
        if (saved) {
            var savedNodes = JSON.parse(saved);
            Object.keys(savedNodes).forEach(function(id) {
                if (nodes[id]) {
                    nodes[id].status_absen = savedNodes[id].status_absen;
                }
            });
        }
        updateDisplay();
    }

    function updateDisplay() {
        Object.keys(nodes).forEach(function(id) {
            var node = document.getElementById('node-' + id);
            if (node) {
                var statusEl = document.getElementById('status-' + id);
                var fotoEl = document.getElementById('foto-' + id);
                var isHadir = nodes[id].status_absen === 'hadir';
                node.classList.toggle('hadir', isHadir);
                statusEl.innerHTML = isHadir ? '<i class="fas fa-check"></i> Hadir' : '<i class="fas fa-times"></i> Tidak Hadir';
                // Tampilkan foto
                if (fotoEl) {
                    if (nodes[id].foto) {
                        fotoEl.innerHTML = '<img src="' + nodes[id].foto + '" alt="Foto ' + nodes[id].nama + '" class="node-foto">';
                    } else {
                        var initials = getInitials(nodes[id].nama);
                        fotoEl.innerHTML = '<div class="node-foto-default">' + initials + '</div>';
                    }
                }
            }
        });
    }

    function toggleNode(id) {
        fetch('<?php echo base_url("index.php/home/toggle_absen"); ?>', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'id=' + id
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                nodes[id].status_absen = (nodes[id].status_absen === 'tidak_hadir') ? 'hadir' : 'tidak_hadir';
                updateDisplay();
            } else {
                alert('Gagal toggle: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => alert('Error: ' + error));
    }

    // Add Karyawan (AJAX dengan Upload)
    function addKaryawan() {
        var formData = new FormData();
        formData.append('nama', document.getElementById('nama-baru').value.trim());
        formData.append('jabatan', document.getElementById('jabatan-baru').value.trim());
        var fotoFile = document.getElementById('foto').files[0];
        if (fotoFile) formData.append('foto', fotoFile);

        if (!formData.get('nama') || !formData.get('jabatan')) {
            alert('Mohon isi nama dan jabatan!');
            return;
        }

        fetch('<?php echo base_url("index.php/home/add_karyawan"); ?>', {
            method: 'POST',
            body: formData  // FormData untuk file upload
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Karyawan berhasil ditambahkan!');
                // Clear form
                document.getElementById('form-tambah').reset();
                // Switch back to tab1 and reload structure
                switchTab('tab1');
                location.reload();  // Reload untuk tampilkan baru
            } else {
                alert('Gagal: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => alert('Error: ' + error));
    }

    function editKaryawan(id) {
        var karyawan = nodes[id];
        if (!karyawan) {
            alert('Karyawan tidak ditemukan!');
            return;
        }
        document.getElementById('edit-id').value = id;
        document.getElementById('edit-nama').value = karyawan.nama;
        document.getElementById('edit-jabatan').value = karyawan.jabatan;
        document.getElementById('edit-status').value = karyawan.status_absen;
        document.getElementById('modal-overlay').style.display = 'block';
        document.getElementById('edit-modal').style.display = 'block';
    }

    function updateKaryawan() {
        var formData = new FormData();
        formData.append('id', document.getElementById('edit-id').value);
        formData.append('nama', document.getElementById('edit-nama').value);
        formData.append('jabatan', document.getElementById('edit-jabatan').value);
        formData.append('status_absen', document.getElementById('edit-status').value);
        var editFotoFile = document.getElementById('edit-foto').files[0];
        if (editFotoFile) formData.append('foto', editFotoFile);

        fetch('<?php echo base_url("index.php/home/update_karyawan"); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                alert('Karyawan berhasil diupdate!');
                closeModal();
                location.reload();
            } else {
                alert('Gagal: ' + (data.message || 'Unknown error'));
            }
        })
        .catch(error => alert('Error: ' + error));
    }

    function closeModal() {
        document.getElementById('modal-overlay').style.display = 'none';
        document.getElementById('edit-modal').style.display = 'none';
    }

    function deleteKaryawan(id) {
        if (confirm('Yakin hapus karyawan ini?')) {
            fetch('<?php echo base_url("index.php/home/delete_karyawan"); ?>', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'id=' + id
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    alert('Karyawan berhasil dihapus!');
                    location.reload();
                } else {
                    alert('Gagal: ' + (data.message || 'Unknown error'));
                }
            })
            .catch(error => alert('Error: ' + error));
        }
    }

    // Load saat halaman load
    window.onload = function() {
        loadNodes();
    };
</script>
</body>
</html>