<?php

/************************************\
 * Everything you see here          *
 * (c) Apr 2006-now, Mark A. Elliot *
 *     All rights reserved.         *
\************************************/

class templates
{
	
	var $temps;
	var $db;
	
	function templates(&$db)
	{
		$this->temps = array();
		$this->db = $db;
	}
	
	function get_templates()
	{
		
		$tlist = func_get_args(); // Array of the template sets to grab.
		$tsetq = '';
		foreach($tlist as $set)
		{
			$tsetq .= " OR template_set='{$set}'";
		}
		
		$temp_query = $this->db->q("SELECT template_name, template_html FROM {$this->db->pre}templates 
																		 WHERE (template_set='Main'{$tsetq})");

																		 
		$templates = array();
		
		while($template = $this->db->nqf($temp_query))
		{
			$template['template_html'] = preg_replace('~<IF (.*?)(?<!\-)>(.*?)</IF>~se', '$this->get_templates_callback(\'\\1\', \'\\2\', $template[\'template_name\'])', $template['template_html']);
			$template['template_html'] = preg_replace('~<T (.*?)(?<!\-)>~se', '$this->templates_macro_i(\'\\1\', $template[\'template_name\'])', $template['template_html']);
			$template['template_html'] = preg_replace('~<D (.*?)(?<!\-)>(.*?)</D>~se', '$this->templates_macro_date(\'\\1\', \'\\2\', $template[\'template_name\'])', $template['template_html']);
			$templates[$template['template_name']] = $template['template_html'];
		}

		if(count($templates) > 0){
			$templates = str_replace(array('\\', '"', '\\$'), array('\\\\', '\\"', '\\\\$'), $templates);
			$this->temps = $templates;
		} else {
			// Replace this with a thrown exception
			die('Could not get ' . implode(',', $tlist));
		}
	}
	
	function templates_macro_i($temp, $piece)
	{
		$macro_id = isset($this->macro[$piece]) ? count($this->macro[$piece]) : 0;
		$this->macro[$piece][$macro_id] = '$macro_replace[\'' . $piece . '\'][' . $macro_id . '] = eval($this->temps->d(\''.$temp.'\'));';
		return '{' . chr(36) . 'macro_replace[\'' . $piece . '\'][' . $macro_id . ']}';
	}
	
	function templates_macro_date($format, $date, $piece)
	{
		$macro_id = isset($this->macro[$piece]) ? count($this->macro[$piece]) : 0;
		$this->macro[$piece][$macro_id] = '$macro_replace[\'' . $piece . '\'][' . $macro_id . '] = date(\''.$format.'\', '.$date.');';
		return '{' . chr(36) . 'macro_replace[\'' . $piece . '\'][' . $macro_id . ']}';
	}
	
	function get_templates_callback($condition, $code, $piece)
	{
		$macro_id = isset($this->macro[$piece]) ? count($this->macro[$piece]) : 0;
		$this->macro[$piece][$macro_id] = '$macro_replace[\'' . $piece . '\'][' . $macro_id . '] = ((' . stripslashes($condition) . ') ? "' . $code . '" : ""); ';
		return '{' . chr(36) . 'macro_replace[\'' . $piece . '\'][' . $macro_id . ']}';
	}
	
	function d($piece)
		{
			if (!isset($this->temps[$piece])){
				die("{$piece} Unavailable");
			}
			
			$macro_output = "\$macro_replace['{$piece}'] = array(); ";

			if (isset($this->macro[$piece])) {
				foreach ($this->macro[$piece] as $macro_id => $macro_code) {
					$macro_output .= $macro_code;
				}
			}
			//echo $macro_output;
			return "$macro_output return \"{$this->temps[$piece]}\r\n\";";
		}
}

?>
