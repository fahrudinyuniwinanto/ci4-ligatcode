<?php
$out = [];
foreach ($all as $fd) {
    $out[] = "'" . $fd['column_name'] . "'";
} 
if($pk==null){
   // $f = explode(',', $out);
    $pk = str_replace("'","",array_shift(($out)));
}
$string ="<?php namespace App\Models;
/**
* THIS CONTROLER CODEIGNITER 4
* Codeigniter Version 4.x
* Generated by LigatCode
**/
use CodeIgniter\Model;

class $m extends Model
{
    protected \$table      = '$table_name';
    protected \$primaryKey = '$pk';
    //To help protect against Mass Assignment Attacks, the Model class requires 
    //that you list all of the field names that can be changed during inserts and updates
    // https://codeigniter4.github.io/userguide/models/model.html#protecting-fields
    protected \$allowedFields = [";

        $string .= implode(',',$out);


$string .="]; 

    // GET ALL DATA
    public function getData(\$id = false)
    {
        if (\$id == false) {
            return \$this->findAll();
        }
        return \$this->db->where(\$this->primaryKey, \$id)->first();
    }
";
$string .= "\n\n}\n\n/* End of file $m_file */
/* Location: ./app/models/$m_file */
/* Please DO NOT modify this information : */
/* Generated by Ligatcode Codeigniter 4 CRUD Generator ".date('Y-m-d H:i:s')." */";


$result_model = createFile($string, $target."models/" . $m_file);