<?php
namespace App\Service;

use App\Entity\News;
use Exception;
use SoapFault;

class NewsService extends News
{

    /* Метод возвращает новость по её идентификатору */
    function getNewsById($id){
        try{
            $sql = "SELECT id, title, 
					(SELECT name FROM category WHERE category.id=msgs.category) as category, description, source, datetime 
					FROM msgs
					WHERE id = $id";
            $result = $this->db->query($sql);
            if (!is_object($result))
                throw new Exception($this->db->lastErrorMsg());
            return base64_encode(serialize($this->fetchArray($result)));
        }catch(Exception $e){
            throw new SoapFault('getNewsById', $e->getMessage());
        }
    }
    /* Метод считает количество всех новостей */
    function getNewsCount(){
        try{
            $sql = "SELECT count(*) FROM msgs";
            $result = $this->db->querySingle($sql);
            if (!$result)
                throw new Exception($this->db->lastErrorMsg());
            return $result;
        }catch(Exception $e){
            throw new SoapFault('getNewsCount', $e->getMessage());
        }
    }
    /* Метод считает количество новостей в указанной категории */
    function getNewsCountByCat($cat_id){
        try{
            $sql = "SELECT count(*) FROM msgs WHERE category=$cat_id";
            $result = $this->db->querySingle($sql);
            if (!$result)
                throw new Exception($this->db->lastErrorMsg());
            return $result;
        }catch(Exception $e){
            throw new SoapFault('getNewsCountByCat', $e->getMessage());
        }
    }
}