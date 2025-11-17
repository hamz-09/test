<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Karyawan_model');  // Load model untuk absen
    }

    // Method untuk halaman HOME (default)
    public function index() {
        $data['title'] = 'WELDING - Integritas, Inovasi, Unggul';
        $this->load->view('templates/header', $data);
        $this->load->view('home', $data);
        $this->load->view('templates/footer', $data);
    }

    // Method untuk halaman PROFIL
    public function profil() {
        $data['title'] = 'Profil - WELDING';
        $this->load->view('templates/header', $data);
        $this->load->view('profil', $data);
        $this->load->view('templates/footer', $data);
    }

    // Method untuk halaman ARTIKEL
    public function artikel() {
        $data['title'] = 'Artikel - WELDING';
        $this->load->view('templates/header', $data);
        $this->load->view('artikel', $data);
        $this->load->view('templates/footer', $data);
    }

    // Method untuk halaman ABSEN (load data dari DB)
    public function absen() {
        $data['title'] = 'ABSEN - WELDING';
        $data['karyawan'] = $this->Karyawan_model->get_all_karyawan();  // Load data karyawan dari DB
        $this->load->view('templates/header', $data);
        $this->load->view('absen', $data);
        $this->load->view('templates/footer', $data);
    }

    // Method untuk halaman INFORMASI
    public function informasi() {
        $data['title'] = 'Informasi - WELDING';
        $this->load->view('templates/header', $data);
        $this->load->view('informasi', $data);
        $this->load->view('templates/footer', $data);
    }

    // Method untuk halaman KONTAK
    public function kontak() {
        $data['title'] = 'Kontak - WELDING';
        $this->load->view('templates/header', $data);
        $this->load->view('kontak', $data);
        $this->load->view('templates/footer', $data);
    }
    

    // CREATE: Tambah karyawan baru (AJAX dengan upload)
    public function add_karyawan() {
        try {
            $nama = $this->input->post('nama');
            $jabatan = $this->input->post('jabatan');
            $parent_id = $this->input->post('parent_id') ? (int)$this->input->post('parent_id') : NULL;
            if (empty($nama) || empty($jabatan)) {
                throw new Exception('Nama dan jabatan wajib diisi');
            }
            $data = array(
                'nama' => $nama,
                'jabatan' => $jabatan,
                'parent_id' => $parent_id
            );
            // Handle upload foto
            if (!empty($_FILES['foto']['name'])) {
                $config['upload_path'] = './uploads/karyawan/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    $upload_data = $this->upload->data();
                    $data['foto'] = $upload_data['file_name'];
                } else {
                    throw new Exception('Upload foto gagal: ' . $this->upload->display_errors());
                }
            }
            if ($this->Karyawan_model->add_karyawan($data)) {
                echo json_encode(array('status' => 'success', 'message' => 'Karyawan ditambahkan!'));
            } else {
                throw new Exception('Gagal insert ke DB');
            }
        } catch (Exception $e) {
            echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
        }
    }

    // UPDATE: Edit karyawan (AJAX dengan upload)
    public function update_karyawan() {
        try {
            $id = $this->input->post('id');
            $nama = $this->input->post('nama');
            $jabatan = $this->input->post('jabatan');
            $status_absen = $this->input->post('status_absen');
            if (empty($id) || empty($nama) || empty($jabatan)) {
                throw new Exception('ID, nama, atau jabatan tidak valid');
            }
            $data = array(
                'nama' => $nama,
                'jabatan' => $jabatan,
                'status_absen' => $status_absen
            );
            // Handle upload foto baru
            if (!empty($_FILES['foto']['name'])) {
                $old = $this->Karyawan_model->get_karyawan_by_id($id);
                if ($old && $old['foto'] && file_exists('./uploads/karyawan/' . $old['foto'])) {
                    unlink('./uploads/karyawan/' . $old['foto']);
                }
                $config['upload_path'] = './uploads/karyawan/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 2048;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    $upload_data = $this->upload->data();
                    $data['foto'] = $upload_data['file_name'];
                } else {
                    throw new Exception('Upload foto gagal: ' . $this->upload->display_errors());
                }
            }
            if ($this->Karyawan_model->update_karyawan($id, $data)) {
                echo json_encode(array('status' => 'success', 'message' => 'Karyawan diupdate!'));
            } else {
                throw new Exception('Gagal update ke DB');
            }
        } catch (Exception $e) {
            echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
        }
    }

    // TOGGLE ABSEN: Update status absen (AJAX)
    public function toggle_absen() {
        try {
            $id = $this->input->post('id');
            if (empty($id)) {
                throw new Exception('ID tidak valid');
            }
            if ($this->Karyawan_model->toggle_absen($id)) {
                echo json_encode(array('status' => 'success'));
            } else {
                throw new Exception('Gagal update status');
            }
        } catch (Exception $e) {
            echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
        }
    }

    // DELETE: Hapus karyawan (AJAX)
    public function delete_karyawan() {
        try {
            $id = $this->input->post('id');
            if (empty($id)) {
                throw new Exception('ID tidak valid');
            }
            if ($this->Karyawan_model->delete_karyawan($id)) {
                echo json_encode(array('status' => 'success', 'message' => 'Karyawan dihapus!'));
            } else {
                throw new Exception('Gagal hapus dari DB');
            }
        } catch (Exception $e) {
            echo json_encode(array('status' => 'error', 'message' => $e->getMessage()));
        }
    }
}