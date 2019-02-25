<?php 
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 01:40
 */
class MyList
{
	public $arrayList;
	
	public function ArrayList($arr = "")
	{
		if (is_array($arr) == true)
			$this->arrayList = $arr;
		else
			$this->arrayList = array();
	}



	public function add($obj)
	{
		array_push($this->arrayList, $obj);
	}


	public function clear()
	{
		$this->arrayList = array();
	}


    /**
     * Trả về phần tử tại vị trí đã chỉ định trong danh sách này
     * @param $index
     **/
    public function get($index)
    {
    	if ($this->isInteger($index) && $index < $this->size()) {
    		return $this->arrayList[$index];
    	} else {
    		die("ERROR in ArrayList.get");
    	}
    }



    /**
     * Kiểm tra nếu danh sách này không có phần tử nào.
     * @return boolean
     **/
    public function isEmpty()
    {
    	if (count($this->arrayList) == 0) {
    		return true;
    	}
    	return false;
    }



    /**
     * Loại bỏ phần tử ở vị trí đã chỉ định trong danh sách này.
     * @param $index
     **/
    public function remove($index)
    {
    	if ($this->isInteger($index)) {
    		$newArrayList = array();
    		for ($i = 0; $i < $this->size(); $i++)
    			if ($index != $i) $newArrayList[] = $this->get($i);
    		$this->arrayList = $newArrayList;
    	} else {
    		die("ERROR in ArrayList.remove <br> Integer value required");
    	}
    }



    /**
     * Trả về số phần tử trong danh sách này.
     * @return integer
     **/
    public function size()
    {
    	return count($this->arrayList);
    }



    /**
     * Sắp xếp danh sách theo thứ tự bảng chữ cái.
     **/
    public function sort()
    {
    	sort($this->arrayList);
    }



    /**
     * Trả về một mảng chứa tất cả các phần tử trong danh sách này theo đúng thứ tự.
     * @return array
     **/
    public function toArray()
    {
    	return $this->arrayList;
    }



    /**
     * Trả về true nếu tham số chứa một giá trị số nguyên
     * @return boolean
     **/
    public function isInteger($toCheck) {
    	return preg_match("/^[0-9]+$/", $toCheck);
    }
}



$listInteger = new MyList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(1);
// echo $listInteger->get(-1);

?>


