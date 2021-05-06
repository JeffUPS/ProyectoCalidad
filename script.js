var prov;

function myOnLoad(){
var req = new XMLHttpRequest();
var requ = new XMLHttpRequest();
req.open('GET','provincias.json');
req.send();
requ.open('GET','ciudades.json');
requ.send();


requ.onreadystatechange = function(){
  if(this.readyState == 4 && this.status == 200){
     prov=JSON.parse(requ.responseText);
    }
}

req.onreadystatechange = function(){
  if(this.readyState == 4 && this.status == 200){
    var provs=JSON.parse(this.responseText);
    cargar_provincias(provs);
    }
}
}


function cargar_provincias(jsonObj) {
var select = document.getElementsByName("prov")[0]; 
 for (var i of jsonObj){ 
  var option = document.createElement("option");
  option.text = i.provincia;
  select.add(option);
 }
}

function ciudades(){
      actualizar();
			var select = document.getElementsByName("ciu")[0];
      var ciu = document.getElementById("provincia");
      var ciud = document.getElementById("select2");
      var selected = ciu.options[ciu.selectedIndex].text;
      for (var i of prov){
        if(selected == i.provincia){
          for (var u of i.ciudad){
            var option = document.createElement("option");
            option.text = u;
            select.add(option);
          }  
        }
      } 
}


function actualizar(){
  var ciud = document.getElementById("select2");
 for (let i = ciud.options.length; i >= 0; i--) {
    ciud.remove(i);
  }
}




