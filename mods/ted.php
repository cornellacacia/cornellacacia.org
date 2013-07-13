<?php

class ted extends site
{
	function exe()
	{
		$this->temps->get_templates('TemplateEdit');
		
		if(!$this->user->p->pass('manage_temps'))
		{
			return eval($this->temps->d('LOCKOUT'));
		}
		
		if(isset($this->post['desc'])){
			foreach($this->post['desc'] as $key => $val){
				$this->post['html'][$key] = html_entity_decode($this->post['html'][$key]);
				$this->post['html'][$key] = str_replace('&amp;nbsp;', '&nbsp;', $this->post['html'][$key]);
				$this->db->q("UPDATE {$this->db->pre}templates SET template_desc='{$this->post['desc'][$key]}', template_html='{$this->post['html'][$key]}' WHERE tid={$key}");
			}
			if(trim($this->post['new_desc']) != ''){
				$this->post['new_html'] = html_entity_decode($this->post['new_html']);
				$this->db->q("INSERT INTO {$this->db->pre}templates (template_set, template_name, template_desc, template_html)
											VALUES('{$this->post['new_set']}', '{$this->post['new_name']}', '{$this->post['new_desc']}', '{$this->post['new_html']}');");
			}
		}
		
		if(isset($this->get['set']) && $this->get['set'] != '')
		{
			$where = "WHERE template_set='{$this->get['set']}'";
		}else{
			$this->get['set'] = '';
		}
		
		$q = $this->db->q("SELECT * FROM {$this->db->pre}templates {$where}ORDER BY template_set ASC, template_name ASC");
		$ts = '';
		while($r = $this->db->nqf($q)){
			$r['template_html'] = htmlentities($r['template_html']);
			$r['template_html'] = str_replace('&nbsp;', '&amp;nbsp;', $r['template_html']);
			$ts .= eval($this->temps->d('TEMPLATEEDIT_ROW'));
		}
		$out = eval($this->temps->d('TEMPLATEEDIT_WRAPPER'));
		
		return eval($this->temps->d('MAIN_LAYOUT'));
	}
}

?>
