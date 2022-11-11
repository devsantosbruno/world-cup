
let countries = ["_none",
  'Alemanha',
  'Arabia_Saudita',
  'Argentina',
  'Australia',
  'Belgica',
  'Brasil',
  'Camaroes',
  'Canada',
  'Catar',
  'Coreia_do_Sul',
  'Costa_Rica',
  'Croacia',
  'Dinamarca',
  'Equador',
  'Espanha',
  'Estados_Unidos',
  'Franca',
  'Gana',
  'Holanda',
  'Inglaterra',
  'Ira',
  'Japao',
  'Marrocos',
  'Mexico',
  'Pais_de_Gales',
  'Polonia',
  'Portugal',
  'Senegal',
  'Servia',
  'Suica',
  'Tunisia',
  'Uruguai',
];

let spots = [
  'o1',
  'o2',
  'o3',
  'o4',
  'o5',
  'o6',
  'o7',
  'o8',
  'o9',
  'o10',
  'o11',
  'o12',
  'o13',
  'o14',
  'o15',
  'o16',
  'q1',
  'q2',
  'q3',
  'q4',
  'q5',
  'q6',
  'q7',
  'q8',
  's1',
  's2',
  's3',
  's4',
  'f1',
  'f2',
  'c1'
];

function home(){
  console.log("home()");
  var http = new XMLHttpRequest();
    var url = 'functions.php';
    var params = 'allGuesses=true';
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
            var data = http.response;
            json = JSON.parse(data);
            table(json,"Main");  
            update_left_links(json);   
        }    
    };
    http.send(params); 
}

function table(data,option){
  let row = "";
  if(option=="all"){
    for (let i = 0 ; i < data.length; i++) {
      row += rowToHTML(data[i]);
  } 
  } else {    
      for (let i = 0 ; i < data.length; i++) {
        if(data[i].player_name == option){
          row += rowToHTML(data[i]);
        } 
      }    
  } 
  document.querySelector(".middle_main").innerHTML=row;     
}

function rowToHTML(data){
  let html = "<div class=\"container\">";
    html+="<div class=\"flag_area space_o1\"><img class='main-middle-img' src=./Images/flags/" + data.o1 + ".svg></div>";
    html+="<div class=\"flag_area space_o2\"><img class='main-middle-img' src=./Images/flags/" + data.o2 + ".svg></div>";
    html+="<div class=\"flag_area space_o3\"><img class='main-middle-img' src=./Images/flags/" + data.o3 + ".svg></div>";
    html+="<div class=\"flag_area space_o4\"><img class='main-middle-img' src=./Images/flags/" + data.o4 + ".svg></div>";
    html+="<div class=\"flag_area space_o5\"><img class='main-middle-img' src=./Images/flags/" + data.o5 + ".svg></div>";
    html+="<div class=\"flag_area space_o6\"><img class='main-middle-img' src=./Images/flags/" + data.o6 + ".svg></div>";
    html+="<div class=\"flag_area space_o7\"><img class='main-middle-img' src=./Images/flags/" + data.o7 + ".svg></div>";
    html+="<div class=\"flag_area space_o8\"><img class='main-middle-img' src=./Images/flags/" + data.o8 + ".svg></div>";
    html+="<div class=\"flag_area space_o9\"><img class='main-middle-img' src=./Images/flags/" + data.o9 + ".svg></div>";
    html+="<div class=\"flag_area space_o10\"><img class='main-middle-img' src=./Images/flags/" + data.o10 + ".svg></div>";
    html+="<div class=\"flag_area space_o11\"><img class='main-middle-img' src=./Images/flags/" + data.o11 + ".svg></div>";
    html+="<div class=\"flag_area space_o12\"><img class='main-middle-img' src=./Images/flags/" + data.o12 + ".svg></div>";
    html+="<div class=\"flag_area space_o13\"><img class='main-middle-img' src=./Images/flags/" + data.o13 + ".svg></div>";
    html+="<div class=\"flag_area space_o14\"><img class='main-middle-img' src=./Images/flags/" + data.o14 + ".svg></div>";
    html+="<div class=\"flag_area space_o15\"><img class='main-middle-img' src=./Images/flags/" + data.o15 + ".svg></div>";
    html+="<div class=\"flag_area space_o16\"><img class='main-middle-img' src=./Images/flags/" + data.o16 + ".svg></div>";
    html+="<div class=\"flag_area space_q1\"><img class='main-middle-img' src=./Images/flags/" + data.q1 + ".svg></div>";
    html+="<div class=\"flag_area space_q2\"><img class='main-middle-img' src=./Images/flags/" + data.q2 + ".svg></div>";
    html+="<div class=\"flag_area space_q3\"><img class='main-middle-img' src=./Images/flags/" + data.q3 + ".svg></div>";
    html+="<div class=\"flag_area space_q4\"><img class='main-middle-img' src=./Images/flags/" + data.q4 + ".svg></div>";
    html+="<div class=\"flag_area space_q5\"><img class='main-middle-img' src=./Images/flags/" + data.q5 + ".svg></div>";
    html+="<div class=\"flag_area space_q6\"><img class='main-middle-img' src=./Images/flags/" + data.q6 + ".svg></div>";
    html+="<div class=\"flag_area space_q7\"><img class='main-middle-img' src=./Images/flags/" + data.q7 + ".svg></div>";
    html+="<div class=\"flag_area space_q8\"><img class='main-middle-img' src=./Images/flags/" + data.q8 + ".svg></div>";
    html+="<div class=\"flag_area space_s1\"><img class='main-middle-img' src=./Images/flags/" + data.s1 + ".svg></div>";
    html+="<div class=\"flag_area space_s2\"><img class='main-middle-img' src=./Images/flags/" + data.s2 + ".svg></div>";
    html+="<div class=\"flag_area space_s3\"><img class='main-middle-img' src=./Images/flags/" + data.s3 + ".svg></div>";
    html+="<div class=\"flag_area space_s4\"><img class='main-middle-img' src=./Images/flags/" + data.s4 + ".svg></div>";
    html+="<div class=\"flag_area space_f1\"><img class='main-middle-img' src=./Images/flags/" + data.f1 + ".svg></div>";
    html+="<div class=\"flag_area space_f2\"><img class='main-middle-img' src=./Images/flags/" + data.f2 + ".svg></div>";
    html+="<div class=\"flag_area space_c1\"><img class='main-middle-img' src=./Images/flags/" + data.c1 + ".svg></div>";
    html+="<div class=\"empty_div\"></div>";
    html+="<div class=\"empty_div\"></div>";
    html+="<div class=\"empty_div\"></div>";
    html+="<div class=\"user_name_style\">" +data.player_name+ "</div>";
    html+="<div class=\"empty_div\"></div>";
    html+="<div class=\"empty_div\"></div>";
    html+="<div class=\"empty_div\"></div>";
    html+="</div>";
      return html;
}

function button_add(){
  let html= "<form action='functions.php' name='add_user' method='post'>";
      html+= "<input type='hidden' name='add_user' value='add_user'>";
      html+= "<label for='user'>Username:</label><br>";
      html+= "<input type='text' id='user_name' name='user_name'><br><div class='add_form'>";      
      html+= form_add();
      html+= "</div>";
      html+= "<input type='submit' value='Submit'>";
      html+= "</form>";
      document.getElementsByClassName('middle_main')[0].innerHTML = html;
      add_user.addEventListener("submit", function(event){
        var nameValue = document.getElementById("user_name").value;
        if(nameValue == "Main3"){
          event.preventDefault()
        }  
      }); 
}



function form_add(){
  let string_option="";
  string_option+="<div class='container'>";
  for (j = 0; j < spots.length; j++) {
    string_option += "<div class='flag_area space_" + spots[j] +
      "'><label for='" +
      spots[j] +
      "'>" +
      spots[j] +
      ": </label><select class='icon-menu' name='" +
      spots[j] +
      "' id='" +
      spots[j] +
      "'>";
    for (i = 0; i < countries.length; i++) {
      string_option +=
        "<option value='" + countries[i] + "'>" + countries[i] + '</option>';
    }
    string_option += '</select></div>';
  }
  return string_option;
}

function button_update(){
  console.log("button_update()");
  var http = new XMLHttpRequest();
    var url = 'functions.php';
    var params = 'allGuesses=true';
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
            var data = http.response;
            json = JSON.parse(data);
            list_update(json);     
        }    
    };
    http.send(params); 
}

function list_update(data){
  var linkPlayers =[];
  data.forEach(element => {
      linkPlayers.push(element.guess_id);  
  });
  console.log("linkplayers"+linkPlayers);
  console.log("list_update()");
  let list = "<ul>";
    for (i = 0; i<linkPlayers.length; i++) {
      list += "<li onclick='filter_player(\""+linkPlayers[i]+"\")'>"+linkPlayers[i]+"</li>"
    }
    list += "</ul>";
    document.getElementsByClassName('middle_main')[0].innerHTML = list;
}

function display_player_choices(player){
  console.log("display_player_choices()");
  let string_option="";
  string_option+="<div class='container'>";
  for (j = 0; j < spots.length; j++) {
    string_option += "<div class='flag_area space_" + spots[j] +
      "'><label for='" +
      spots[j] +
      "'>" +
      spots[j] +
      ": </label><select class='icon-menu' name='" +
      spots[j] +
      "' id='" +
      spots[j] +
      "'>";
      
      string_option +=
        "<option value='" + player[0][spots[j]] + "'>" + player[0][spots[j]] + '</option>';
    for (i = 0; i < countries.length; i++) {
      string_option +=
        "<option value='" + countries[i] + "'>" + countries[i] + '</option>';
    }
    string_option += '</select>';
    string_option+="</div>";
  }
    string_option+="<div class=\"empty_div\"></div>";
    string_option+="<div class=\"empty_div\"></div>";
    string_option+="<div class=\"empty_div\"></div>";
    string_option+="<div class=\"user_name_style\">" +player[0].player_name+ "</div>";
    string_option+="<div class=\"empty_div\"></div>";
    string_option+="<div class=\"empty_div\"></div>";
    string_option+="<div class=\"empty_div\"></div>";
    string_option+="</div>";
  let html= "<form action='functions.php' name='update' method='post'>";
      html+= "<input type='hidden' name='update' value='update'>";
      html+= "<label for='user'>Username:</label><br>";
      html+= "<input type='text' id='user_name' name='user_name' value='"+player[0].player_name+"'><br><div class='update_form'>";   
      html+= "<input type='text' id='guess_id' name='guess_id' value='"+player[0].guess_id+"' readonly><br><div class='update_form'>";   
      html+= string_option;
      html+= "</div>";
      html+= "<input type='submit' value='Submit'>";
      html+= "</form>";
      document.getElementsByClassName('middle_main')[0].innerHTML = html;
}

function filter_player(player){
  console.log("filter_player()");
  var http = new XMLHttpRequest();
    var url = 'functions.php';
    var params = 'filter=true&player='+player;
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
            var data = http.response;
            json = JSON.parse(data);
            display_player_choices(json);     
        }    
    };
    http.send(params); 
}

function button_delete(){
  console.log("button_delete()");
  var http = new XMLHttpRequest();
    var url = 'functions.php';
    var params = 'allGuesses=true';
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
            var data = http.response;
            json = JSON.parse(data);
            list_delete(json);     
        }    
    };
    http.send(params); 
}

function list_delete(data){
  console.log("list_delete()");
  var linkPlayers =[];
  data.forEach(element => {
    if(element.player_name != "Main"){
      linkPlayers.push(element.guess_id);  
    } 
      
  });
  let list = "<ul>";
    for (i = 0; i<linkPlayers.length; i++) {
      list += "<li onclick='player_delete(\""+linkPlayers[i]+"\")'>"+linkPlayers[i]+"</li>"
    }
    list += "</ul>";
    document.getElementsByClassName('middle_main')[0].innerHTML = list;
}

function player_delete(player){
  console.log("player_delete()");
  var http = new XMLHttpRequest();
    var url = 'functions.php';
    var params = 'delete=true&player='+player;
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {  
            home();
        }    
    };
    http.send(params); 
    
}

function update_left_links(data){
  console.log("update_left_links()");
  var linkPlayers =[];
  data.forEach(element => {
      linkPlayers.push(element.guess_id);  
  });
  let list = "<ul>";
    for (i = 0; i<linkPlayers.length; i++) {
      list += "<li onclick='home_each(\""+linkPlayers[i]+"\")'>"+linkPlayers[i]+"</li>"
    }
    list += "</ul>";
    document.getElementsByClassName('left')[0].innerHTML = list;
}

function home_each(player){
  console.log("home_each()");
  var http = new XMLHttpRequest();
    var url = 'functions.php';
    var params = 'each_player='+player;
    http.open('POST', url, true);

    http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    http.onreadystatechange = function() {
        if(http.readyState == 4 && http.status == 200) {
            var data = http.response;
            json = JSON.parse(data);
            table(json,"all");     
        }    
    };
    http.send(params); 
}



                    
                    
                



