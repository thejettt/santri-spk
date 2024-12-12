<?php 
namespace App\Models;
use CodeIgniter\Model;

class datakeputusan_model extends Model
{
    protected $table = 'konversi_penilaian';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkeputusan()
    {
        $dataquery1=$this->db->query("select max(C1) as maxminK1, max(C2) as maxminK2, min(C3) as maxminK3 from konversi_penilaian");
        $rdataquery1=$dataquery1->getResult();

        $dataquery2=$this->db->query("select * from konversi_penilaian");
        $rdataquery2=$dataquery2->getResult();

        //proses ambil bobot 
        $dataquery3=$this->db->query("select nilai_kriteria from data_kriteria where kode_kriteria='C1'");
        $rdataquery3=$dataquery3->getResult();
        $dataquery4=$this->db->query("select nilai_kriteria from data_kriteria where kode_kriteria='C2'");
        $rdataquery4=$dataquery4->getResult();
        $dataquery5=$this->db->query("select nilai_kriteria from data_kriteria where kode_kriteria='C3'");
        $rdataquery5=$dataquery5->getResult();
        
        return array('maxmin' => $rdataquery1, 'all' => $rdataquery2,'B1' => $rdataquery3,'B2' => $rdataquery4,'B3' => $rdataquery5) ;
    }

    
}