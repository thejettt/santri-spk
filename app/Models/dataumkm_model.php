<?php 
namespace App\Models;
use CodeIgniter\Model;

class dataumkm_model extends Model
{
    protected $table = 'data_umkm';
 
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        $dataquery=$this->db->query("select * from data_umkm");
        return $dataquery->getResult();
    }

    
}