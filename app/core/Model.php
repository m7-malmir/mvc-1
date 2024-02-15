<?php
/**
* Main class model
*/
class Model 
{
    use Database;
    public function test(){
        $quey='select * from users';
        $res=$this->query($quey);
        show($res);
    }
    public function where($data)
    {
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