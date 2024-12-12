<?php 
namespace App\Models;
use CodeIgniter\Model;

class datanormalisasi_model extends Model
{
    protected $table = 'konversi_penilaian';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilnormalisasi()
    {
        $dataquery1=$this->db->query("select max(C1) as maxminK1, max(C2) as maxminK2, min(C3) as maxminK3 from konversi_penilaian");
        $rdataquery1=$dataquery1->getResult();

        $dataquery2=$this->db->query("select * from konversi_penilaian");
        $rdataquery2=$dataquery2->getResult();

        return array('maxmin' => $rdataquery1, 'all' => $rdataquery2);
    }

    
}