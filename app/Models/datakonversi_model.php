<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakonversi_model extends Model
{
    protected $table = 'konversi_penilaian';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkonversi()
    {
        $dataquery=$this->db->query("select * from konversi_penilaian");
        return $dataquery->getResult();
    }

    function tampilminmax()
    {
       
        $dataquery1=$this->db->query("select max(C1) as maxminK1, max(C2) as maxminK2, min(C3) as maxminK3 from konversi_penilaian");
        return $rdataquery1=$dataquery1->getResult();
       

    }

    
}