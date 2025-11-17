<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#[AllowDynamicProperties]  // Fix deprecation PHP 8+
class Karyawan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Read: Ambil semua karyawan dengan hierarki
    public function get_all_karyawan() {
        $this->db->order_by('parent_id', 'ASC');
        $query = $this->db->get('karyawan');
        return $query->result_array();
    }

    // Get children karyawan berdasarkan parent_id
    public function get_children($parent_id) {
        $this->db->where('parent_id', $parent_id);
        $query = $this->db->get('karyawan');
        return $query->result_array();
    }

    // Create: Tambah karyawan baru (dengan foto upload)
    public function add_karyawan($data) {
        // Handle parent_id: Pastikan NULL kalau kosong
        if (empty($data['parent_id'])) {
            $data['parent_id'] = NULL;
        } else {
            $data['parent_id'] = (int)$data['parent_id'];
        }

        // Handle upload foto kalau ada
        if (!empty($_FILES['foto']['name'])) {
            $upload_path = FCPATH . 'uploads/karyawan/';  // Absolute path
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true);  // Buat folder kalau gak ada
            }
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $data['foto'] = 'uploads/karyawan/' . $upload_data['file_name'];  // Relatif path untuk DB
            } else {
                log_message('error', 'Upload error: ' . $this->upload->display_errors());
                return FALSE;  // Return false kalau upload gagal
            }
        }
        return $this->db->insert('karyawan', $data);
    }

    // Update: Update karyawan berdasarkan ID (termasuk foto baru)
    public function update_karyawan($id, $data) {
        // Handle parent_id kalau ada (opsional)
        if (isset($data['parent_id']) && empty($data['parent_id'])) {
            $data['parent_id'] = NULL;
        } else if (isset($data['parent_id'])) {
            $data['parent_id'] = (int)$data['parent_id'];
        }

        // Handle upload foto baru kalau ada
        if (!empty($_FILES['foto']['name'])) {
            $upload_path = FCPATH . 'uploads/karyawan/';
            if (!is_dir($upload_path)) {
                mkdir($upload_path, 0777, true);
            }
            // Hapus foto lama kalau ada
            $old = $this->get_karyawan_by_id($id);
            if ($old && $old['foto'] && file_exists(FCPATH . $old['foto'])) {
                unlink(FCPATH . $old['foto']);
            }
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $upload_data = $this->upload->data();
                $data['foto'] = 'uploads/karyawan/' . $upload_data['file_name'];
            } else {
                log_message('error', 'Update upload error: ' . $this->upload->display_errors());
                return FALSE;
            }
        }
        $this->db->where('id', $id);
        return $this->db->update('karyawan', $data);
    }

    // Delete: Hapus karyawan berdasarkan ID (termasuk foto)
    public function delete_karyawan($id) {
        $karyawan = $this->get_karyawan_by_id($id);
        if ($karyawan && $karyawan['foto'] && file_exists(FCPATH . $karyawan['foto'])) {
            unlink(FCPATH . $karyawan['foto']);
        }
        $this->db->where('id', $id);
        return $this->db->delete('karyawan');
    }

    // Get karyawan by ID
    public function get_karyawan_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('karyawan');
        return $query->row_array();
    }

    // Toggle absen
    public function toggle_absen($id) {
        $karyawan = $this->get_karyawan_by_id($id);
        if ($karyawan) {
            $new_status = ($karyawan['status_absen'] === 'tidak_hadir') ? 'hadir' : 'tidak_hadir';
            $data = array('status_absen' => $new_status);
            $this->db->where('id', $id);
            return $this->db->update('karyawan', $data);
        }
        return false;
    }
}