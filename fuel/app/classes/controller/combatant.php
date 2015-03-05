<?php
class Controller_Combatant extends Controller_Template
{

	public function action_index()
	{
        if ( ! $data['encounter'] = Model_Encounter::find('all', array(
            'select' => array('encid', 'title', 'starttime'),
            'order_by' => array('starttime' => 'desc'),
        )))
		{
			Session::set_flash('error', 'Could not find combatant');
			Response::redirect_back('encounter');
		}

        $this->template->title = 'Compare combatants';
        $scriptorg = '
                var xmlHttp;

				function setCombatantA(){
				  var obja = document.getElementById("for_encountera");
                  index = obja.selectedIndex;
                  if (index != 0){
                    encid = obj.options[index].value;
				    var combatants = "combatant/list/" + encid;
                  }
				
				  if (window.XMLHttpRequest){
				    xmlHttp = new XMLHttpRequest();
				  }else{
				    if (window.ActiveXObject){
				      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				    }else{
				      xmlHttp = null;
				    }
				  }
				  xmlHttp.onreadystatechange = checkStatus;
				  xmlHttp.open("POST", combatants, true);
				
				  xmlHttp.send(null);
				}
				
				function checkStatusA(){
				  if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
				    var node = document.getElementById("form_titlea");
				    node.innertext = xmlHttp.responseText;
				  }
				}

				function setCombatantB(){
				  var objb = document.getElementById("for_encounterb");
                  index = objb.selectedIndex;
                  if (index != 0){
                    encid = obj.options[index].value;
				    var combatants = "combatant/list/" + encid;
                  }
				
				  if (window.XMLHttpRequest){
				    xmlHttp = new XMLHttpRequest();
				  }else{
				    if (window.ActiveXObject){
				      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				    }else{
				      xmlHttp = null;
				    }
				  }
				  xmlHttp.onreadystatechange = checkStatusB;
				  xmlHttp.open("POST", combatants, true);
				
				  xmlHttp.send(null);
				}
				
				function checkStatusB(){
				  if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
				    var node = document.getElementById("form_titleb");
				    node.innertext = xmlHttp.responseText;
				  }
				}';
        $this->template->script= htmlentities($scriptorg);
		$this->template->content = View::forge('combatant/index', $data);

	}

	public function action_view($encid = null)
	{
		is_null($encid) and Response::redirect('encounter/index');

        $data['encid'] = $encid;

        if ( ! $data['combatant'] = Model_Combatant::find('all', array(
            'where' => array('encid' => $encid),
            'order_by' => array('job' => 'desc'),
        )))
		{
			Session::set_flash('error', 'Could not find combatant #'.$id);
			Response::redirect_back('encounter/index');
		}

        $this->template->title = Model_Encounter::find('first', array(
            'select' => array('zone'),
            'where' => array('encid' => $encid),
        ))->zone;
		$this->template->content = View::forge('combatant/view', $data);

	}

	public function action_list($encid = null)
	{
		is_null($encid) and Response::redirect('combatant/index');

        if ( $combatants = Model_Combatant::find('all', array(
            'where' => array('encid' => $encid),
            'order_by' => array('job' => 'desc'),
        )))
        {
            foreach($combatants as $item)
            {
                $value .= html_tag('option', array('value' => $item->name), $item->name);
            }
            return $value;
        }

	}
}
