var xmlHttp;

function setCombatantA(){
  var obja = document.getElementById("form_encountera");
  index = obja.selectedIndex;
  if (index != 0){
    encid = obja.options[index].value;
    var combatants = "http://drakontia.com/actdb/combatants/list/" + encid;
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
    var length = node.childNodes.length;
    for (var i = length-1; i>=0; i--)
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
    var combatants = "http://drakontia.com/actdb/combatants/list/" + encid;
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
    var length = node.childNodes.length;
    for (var i = length-1; i>=0; i--)
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
