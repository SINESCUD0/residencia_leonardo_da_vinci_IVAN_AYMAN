<?php
class jsonConverter
{	
	var $cdata  = false;
	var $cdata_index = 0;
	var $useUTF8 = false;
	
	function xmlQueryResultConvert($rs)
	{						
		$ar = array();
		while ($data = mysqli_fetch_assoc($rs) )
		{
			foreach ($data as &$item) {
				//echo $item;
				//$item = utf8_encode($item);
			}
			
			array_push($ar, $data);
			
		}

		return $ar;
	}
	
			
}

?>
