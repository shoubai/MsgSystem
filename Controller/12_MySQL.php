<?php
class MySQL{
    private $db;
    //数据库连接
    public function __construct($host,$user,$pass,$dbname){
        $this->db = mysqli_connect($host,$user,$pass,$dbname);
    }
    //向数据库发送一条查询
    public function query($sql){
        $query = mysqli_query($this->db, $sql);
        if(!$query){
            die($this->getError());
        }
        return $query;
    }
    //错误提示
    public function getError(){
        return mysqli_error($this->db);
    }
    //获取整个查询
    public function getRow($sql){
        $query = $this->query($sql);
        $info = mysqli_fetch_array($query);
        return $info;
    }
    //获取多个
    public function getRows($sql){
        $query = $this->query($sql);
        $data = array();
        while($info = mysqli_fetch_array($query)){
            $data[] = $info;
        }
        return $data;
    }
    //插入
    public function getInerteId(){
        return mysqli_insert_id($this->db);//返回上一次插入数据的索引
    }
}
?>