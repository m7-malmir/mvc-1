<?php
/**
* Main class model
*/
class Model 
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
    }


    public function update($id, $data, $id_column = '')
    {
    }



    public function delete($id, $data, $id_column = '')
    {
    }
}