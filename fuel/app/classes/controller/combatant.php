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
				  var obja = document.getElementById("form_encountera");
                  index = obja.selectedIndex;
                  if (index != 0){
                    encid = obja.options[index].value;
				    var combatants = "http://drakontia.com/actdb/list/combatants/" + encid;
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
				  xmlHttp.onreadystatechange = checkStatusA;
				  xmlHttp.open("GET", combatants, true);
				
				  xmlHttp.send(null);
				}
				
				function checkStatusA(){
				  if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
				    var node = document.getElementById("form_combatanta");
                    for (var i = node.childNodes.length-1; i>=0; i--)
                    {
                        node.removeChild(node.childNodes[i]);
                    }
                    var lists = JSON.parse(xmlHttp.responseText);

                    for(var i in lists)
                    {
                        var option = document.createElement("option");
                        option.value = lists[i].name;
                        option.appendChild(document.createTextNode(lists[i].name + " " + lists[i].job));
                        node.appendChild(option);
                    }
				  }
				}

				function setCombatantB(){
				  var objb = document.getElementById("form_encounterb");
                  index = objb.selectedIndex;
                  if (index != 0){
                    encid = objb.options[index].value;
				    var combatants = "http://drakontia.com/actdb/list/combatants/" + encid;
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
				  xmlHttp.open("GET", combatants, true);
				
				  xmlHttp.send(null);
				}
				
				function checkStatusB(){
				  if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
				    var node = document.getElementById("form_combatantb");
                    for (var i = node.childNodes.length-1; i>=0; i--)
                    {
                        node.removeChild(node.childNodes[i]);
                    }
                    var lists = JSON.parse(xmlHttp.responseText);

                    for(var i in lists)
                    {
                        var option = document.createElement("option");
                        option.value = lists[i].name;
                        option.appendChild(document.createTextNode(lists[i].name + " " + lists[i].job));
                        node.appendChild(option);
                    }
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

}
