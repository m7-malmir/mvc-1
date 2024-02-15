<?php
/**
* Main class model
*/
trait Model 
{
    protected $table='users';
    protected $limit=1;
    protected $offset=0;
    use Database;
    public function where($data)
    {
        $keys=array_keys($data);
        $query="select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= "$key" ." = :"."$key "." && ";
        }
        $query=trim($query," && ");
        $query .=" limit $this->limit offset $this->offset";
        //echo $query;
        return $this->query($query,$data);

    }
    public function first($data)
    {
    }


    public function insert($data)
    {
        $keys=array_keys($data);
        $query="INSERT INTO $this->table (".implode(',',$keys).") VALUES (:".implode(',:',$keys).")";
        
         if($this->query($query,$data)){
            echo 'true';
         }else{
            echo 'false';
         }

    }


    public function update($id, $data, $id_column = '')
    {
    }



    public function delete($id, $data, $id_column = '')
    {
    }
}