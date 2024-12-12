<?php 
namespace App\Models;
use CodeIgniter\Model;

class dataalter_model extends Model
{
    protected $table = 'data_alternatif'; // Nama tabel
    protected $primaryKey = 'id';       // Primary key tabel (id)

    public function __construct()
    {
        $this->db = db_connect(); // Koneksi database
    }

    // Function Read All (MeAnggunakan Query Manual)
    public function tampilAlter()
    {
        $query = $this->db->query("SELECT * FROM $this->table");
        return $query->getResult(); // Mengembalikan semua data sebagai objek
    }

    // Function Create
    public function tambahAlter($data)
    {
        $sql = "INSERT INTO $this->table (kode_alternatif, nama_alternatif, C1, C2,C3,C4,C5,C6,C7,C8) 
                VALUES (:kode_alternatif:, :nama_alternatif:, :C1:, :C2:,:C3:,:C4:,:C5:,:C6:,:C7:,:C8:)";
        return $this->db->query($sql, $data);
    }

    // Function Find by ID
    public function cariAlter($id)
    {
        $query = $this->db->query("SELECT * FROM $this->table WHERE id = ?", [$id]);
        return $query->getRow(); // Mengembalikan satu baris data sebagai objek
    }

    // Function Update
    public function updateAlter($id, $data)
    {
        $sql = "UPDATE $this->table 
                SET kode_alternatif=:kode_alternatif:, nama_alternatif=:nama_alternatif:, C1=:C1:, C2=:C2:,C3=:C3:,C4=:C4:,C5=:C5:,C6=:C6:,C7=:C7:,C8=:C8: 
                WHERE id = :id:";
        $data['id'] = $id; // Tambahkan ID ke data array
        return $this->db->query($sql, $data);
    }

    // Function Delete
    public function hapusAlter($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        return $this->db->query($sql, [$id]);
    }
}
