<?php

class AdminController extends BaseController
{
	public function loadDatabase()
	{
		DB::table('ingredients')->delete();

	    ini_set('auto_detect_line_endings', true);

		$ing_array = array();

		$header = NULL;

		if(($ingredients_file = fopen(app_path().'/database/seeds/ingredients.csv', 'r')) !== FALSE)
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

		//DB::table('ingredients')->insert($ing_array);
	    $i = 0;

	    while(array_key_exists($i, $ing_array))
	    {
	    	$ingredient = new Ingredient;
	    	$ingredient->name = $ing_array[$i]['name'];
	    	$ingredient->calories = $ing_array[$i]['calories'];
	    	$ingredient->proteins = $ing_array[$i]['proteins'];
	    	$ingredient->carbohydrates = $ing_array[$i]['carbohydrates'];
	    	$ingredient->fats = $ing_array[$i]['fats'];
	    	$ingredient->srvSize1 = $ing_array[$i]['srvSize1'];
	    	$ingredient->srvName1 = $ing_array[$i]['srvName1'];
	    	$ingredient->srvSize2 = $ing_array[$i]['srvSize2'];
	    	$ingredient->srvName2 = $ing_array[$i]['srvName2'];
	    	$ingredient->save();

	    	$i++;
	    }
	}

}