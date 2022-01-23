<?php
			
				$shoppingCart = new InvoiceController(); // class
				$product_array = $shoppingCart->getAllProduct(); // Get All Products Function
			
				$category  = '{ "products": '; 
				$jsonArray = json_encode($product_array);
				$endcategory  = ' }';
				$jasonData = $category  . " " . $jsonArray. " " .$endcategory;
				
				
				//write to json file
				$fp = fopen('jsonfolder/jdata.json', 'w');
				fwrite($fp, $jasonData);
				fclose($fp);
		
?>	 			
