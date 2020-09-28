<?php
class BaseModel
{
    function __construct()
    {
    }

    function getConnect()
    {
        $this->conn = new PDO(
            "mysql:host=127.0.0.1;dbname=php2;charset=utf8",
            "root",
            ""
        );
    }

    function all()
    {
        $getALLquery = "select * from " . $this->table;
        $data = $this->excuteQuery($getALLquery);
        return $data;
    }

    function remove($id)
    {
        //delete from tên bảng where id = $id;
        //Kiểm tra có tồn tại bản ghi không
        $object = $this->findOne($id);
        if (empty($object)) {
            return false;
        }
        $getRemovequery = "delete from " . $this->table . " where id = $id";
        $this->excuteQuery($getRemovequery);
        return true;
    }

    function findOne($id)
    {
        //Tìm bản ghi phù hợp dựa vào id truyền vào
        $getALLquery = "select * from " . $this->table . " where id = $id";
        $data = $this->excuteQuery($getALLquery);
        if (count($data) > 0) {
            return $data[0];
        }
        return null;
    }

    function excuteQuery($query)
    {
        $this->getConnect();
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        //Tham số trong fetchALL để ép dữ liệu trả về thành dạng object
        //object loại gì thì phụ thuộc vào get_class
        return $stmt->fetchALL(PDO::FETCH_CLASS, get_class($this));
    }
}
