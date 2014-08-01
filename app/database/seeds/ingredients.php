<?php

class IngredientsSeeder extends Seeder {

	ini_set('auto_detect_line_endings', true);

	$ing_array = array();

	$header = NULL;

	if(($ingredients_file = fopen('data/ingredients.csv', 'r')) !== FALSE)
	{
	    while(($row = fgetcsv($ingredients_file)) !== FALSE)
	    {
	        foreach($row as $field)
	        {
	            $field = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $field);
	        }

	        if($header)
	        {
	            $ing_array[] = array_combine($header, $row); 
	        }
	        else
	        {
	            $header = $row;
	        }
	    }

	    fclose($ingredients_file);
	}

	return $ing_array;
	
}


