// Declaring Varables.
let countries = [
  "_none",
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

// MAIN FUNCTION HOME STARTS HERE
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
            total_money(json,25);
            most_chosen(json);  
            DisplayPoints(points(json));
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

function total_money(data,betPrice){
  console.log("total_money()");
  let count = -1;
  data.forEach(element => {
    count++ 
  });
  let total = count*betPrice;
  document.getElementsByClassName('total')[0].innerHTML = "Total: R$"+total+" <br> 1<sup>o</sup>: R$"+total*0.6+" <br>2<sup>o</sup>: R$"+total*0.4;
}
//MAIN FUNCTION HOME ENDS HERE

//*************** FUNCTION DISPLAY STATS STARTS HERE ***************
function DisplayPoints(pointsList){
  // let pointsList = { Debora: 95, Eva: 86, Gilberto: 84, Nico: 71, Rafael: 96, Raquel: 96, Taiane: 85, Yuri: 96, Main: 162 };
  let basePoint = pointsList['Main'];
  let html= "<div><h4>Max pontos:"+basePoint+"</h4></div><div class='main_grid'>";
    for (var key in pointsList){
      if(key != 'Main'){
        let finalValue=((77.3*pointsList[key])/basePoint);
        html += "<div class='div_row'>";
        html += "<div class='div_fixed'>";
        html+=key;
        html += "</div>";
        html += "<div class='div_flex' style='flex:0 0 "+finalValue+"%'><h3>";
        html+=pointsList[key];     
        html += "</h3></div>";
        html += "</div>";
      }
      
    }        
  
  html += "</div>";
  document.getElementsByClassName('middle_stats')[0].innerHTML = html;
}

function DisplayStats(){
  document.getElementsByClassName('middle_main')[0].style.display = "none";
  document.getElementsByClassName('hide_stats')[0].style.display = "block";
  document.getElementsByClassName('display_stats')[0].style.display = "none";
  document.getElementsByClassName('middle_stats')[0].style.display = "block";
}

function HideStats(){
  document.getElementsByClassName('middle_main')[0].style.display = "block";
  document.getElementsByClassName('hide_stats')[0].style.display = "none";
  document.getElementsByClassName('display_stats')[0].style.display = "block";
  document.getElementsByClassName('middle_stats')[0].style.display = "none";
}
// *************** FUNCTION DISPLAY STATS ENDS HERE ***************

//FUNCTION ADD USER STARTS HERE
function button_add(){
  let html= "<form action='functions.php' name='add_user' method='post'>";
      html+= "<input type='hidden' name='add_user' value='add_user'>";
      html+= "<label for='user'>Username:</label><br>";
      html+= "<input type='text' id='user_name' name='user_name'><br><div class='add_form'>";      
      html+= form_add();
      html+= "</div>";
      html+= "<input class='form_button' type='submit' value='ADD USER'>";
      html+= "</form>";
      document.getElementsByClassName('middle_main')[0].innerHTML = html;
      add_user.addEventListener("submit", function(event){
        var nameValue = document.getElementById("user_name").value;
        if(nameValue == "Main"){
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
//FUNCTION ADD USER ENDS HERE

//FUNCTION UPDATE USER STARTS HERE
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
      if(linkPlayers[i]=='Main id: 221111094441'){
        list += "<li class='update_user' onclick='filter_player(\""+linkPlayers[i]+"\")'>"+linkPlayers[i]+"</li>";
      }
    }
    for (i = 0; i<linkPlayers.length; i++) {
      if(linkPlayers[i]!='Main id: 221111094441'){
        list += "<li class='update_user' onclick='filter_player(\""+linkPlayers[i]+"\")'>"+linkPlayers[i]+"</li>";
      }
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
      html+= "<input type='text' id='user_name' name='user_name' value='"+player[0].player_name+"'><br>"; 
      html+= "<label for='user_id'>User Id:</label><br>";  
      html+= "<input class='readonly' type='text' id='guess_id' name='guess_id' value='"+player[0].guess_id+"' readonly>";   
      html+= string_option;
      html+= "</div>";
      html+= "<input class='form_button' type='submit' value='Update'>";
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
//FUNCTION UPDATE USER ENDS HERE

//FUNCTION DELETE USER STARTS HERE
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
      list += "<li class='delete_user' onclick='player_delete(\""+linkPlayers[i]+"\")'>"+linkPlayers[i]+"</li>"
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
//FUNCTION DELETE USER ENDS HERE

//LEFT MENU STARTS HERE
function update_left_links(data){
  console.log("update_left_links()");
  var linkPlayers =[];
  data.forEach(element => {
      linkPlayers.push(element.guess_id);  
  });
  let list = "<ul>";
  for (i = 0; i<linkPlayers.length; i++) {
    if(linkPlayers[i]=='Main id: 221111094441'){
      list += "<li class='menu_user' onclick='home_each(\""+linkPlayers[i]+"\")'>"+linkPlayers[i]+"</li>"
    }      
  }
  for (i = 0; i<linkPlayers.length; i++) {
    if(linkPlayers[i]!='Main id: 221111094441'){
      list += "<li class='menu_user' onclick='home_each(\""+linkPlayers[i]+"\")'>"+linkPlayers[i]+"</li>"
    }      
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
//LEFT MENU ENDS HERE

//RIGHT MENU STARTS HERE
function most_chosen(data){
  console.log("most_chosen()");
  var teamQty ={};
  for (i=0; i <= 15;i++){
    data.forEach(element => {
      if(element.player_name != "Main"){
        if(element[spots[i]] in teamQty){
          teamQty[element[spots[i]]] +=1 ;        
        } else {
          var name = element[spots[i]];
          var val = 1;
          teamQty[name] = val;
        }
      }      
    })
  }
  function getSortedKeys(obj) {
    var keys = Object.keys(obj);
    return keys.sort(function(a,b){return obj[b]-obj[a]});
  }
  
  var teamQtySorted = getSortedKeys(teamQty);
  
  let listTeams = "<h3>Times que <br>mais aparecem <br>nas Oitavas:</h3>";
    listTeams += "<ul>";
  for (i = 0; i<teamQtySorted.length;i++){
    for (var key in teamQty){
      if(key == teamQtySorted[i]){
        if (key != "undefined"){
          listTeams+="<li>";
          listTeams+=key;
          listTeams+=": ";
          listTeams+=teamQty[key];     
          listTeams+="</li>";
        }  
      }        
    }
  }
  
  listTeams+="</ul>";

  document.getElementsByClassName("right")[0].innerHTML=listTeams; 
}
//RIGHT MENU ENDS HERE

//***************   FUNCTION CALCULATE POINTS STARTS HERE ***************
function points(data){
  console.log("points()");
  for (let i = 0 ; i < data.length; i++) {
    if(data[i].player_name == "Main"){
      var real = data[i];
    } 
  } 
  var listPoints = {};
  console.log(listPoints);  
  console.log(real);
  console.log(data.length);
  // listPoints.array.forEach(element => {
  //   console.log(element);
  // });
  // listPoints.toString();
  // for (i=0; i <= data.length;i++){
    // var listPoints = {};
    console.log(typeof listPoints);
    console.log(Object.values(listPoints).length);
    data.forEach(element => {
      // if(element.player_name != "Main"){        
          var name = element.player_name;
          var val = 0;
          listPoints[name] = val;
          // console.log(listPoints[name]);
        // }
        // console.log(name);
        
      }      
    )
  // }  
  console.log(listPoints);
  // console.log(listPoints['Debora']);
  
  var listSliceOitavas = spots.slice(0,16);
  var listSliceQuartas = spots.slice(16,24);
  var listSliceSemi = spots.slice(24,28);
  var listSliceFinal = spots.slice(28,30);
  
  var points = 0;

  for (let i = 0 ; i < data.length; i++){
    points = 0;
    var player = data[i];
    listPoints[player.player_name]=0; 
    console.log(player);
    console.log("PRE GROUPS");  
    listPoints[player.player_name]=points; 
    console.log(listPoints);  
    // 2 points groups  
    points += CalculatePart2Groups(real,player,listSliceOitavas,listSliceQuartas);
    console.log("PRE OITAVAS");  
    listPoints[player.player_name]=points; 
    console.log(listPoints);  
    //3 points oitavas
    points += CalculatePart3Oitavas(real,player,listSliceOitavas,listSliceQuartas);
    console.log("PRE QUARTAS");  
    listPoints[player.player_name]=points; 
    console.log(listPoints);  
    //4 points quartas
    points += CalculatePart4Quartas(real,player,listSliceQuartas,listSliceSemi);
    console.log("PRE SEMI");  
    listPoints[player.player_name]=points; 
    console.log(listPoints);  
    //5 points semi
    points += CalculatePart5Semis(real,player,listSliceSemi,listSliceFinal);
    console.log("PRE FINAL");  
    listPoints[player.player_name]=points; 
    console.log(listPoints);  
    //6 points final
    points += CalculatePart6Final(real,player,listSliceSemi,listSliceFinal);
    console.log("FIM");  
    listPoints[player.player_name]=points; 
    console.log(listPoints);  
  }
  return listPoints;
}

function CalculatePart2Groups(real,player,listSliceOitavas,listSliceQuartas){
  let points = 0;
  for(let j = 0 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] == real[spots[j]]){
        points+=3;
        console.log("+3");
      }
    }
    
  }
  // 2b
  for(let j = 1 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] == real[spots[j]]){
        points+=2;
        console.log("+2");
      }
    }
    
  }      
  // 2c/d
  for(let j = 0 ; j < listSliceOitavas.length; j+=1){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 0 ; k < listSliceOitavas.length; k+=1){
          if(player[spots[j]] == real[spots[k]]){
            points+=1;
            console.log("+1");
            console.log(player[spots[j]]);
          }
        }
      }
    }
    
  }
  return points;
}
                    
function CalculatePart3Oitavas(real,player,listSliceOitavas,listSliceQuartas){     
  points = 0;              
  for(let j = 0 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] == real[spots[j]]){
        if(player[spots[j+1]] == real[spots[j+1]]){
          points+=5;
          console.log("+5");
          console.log(real[spots[j]]);
          console.log("=")
          console.log(real[spots[j]]);
        }
      }
    }
    
  }
  // 3b - part 1
  for(let j = 0 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 0 ; k < listSliceOitavas.length; k+=2){
          if(player[spots[k]] == real[spots[j]]){
            if (player[spots[k+1]] == real[spots[j+1]]) {
              points+=4;
              console.log("confronto correto pos errada+4");
            }
          }
        }
      }
    }    
  }
  // 3b - part 2
  for(let j = 1 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 1 ; k < listSliceOitavas.length; k+=2){
          if(player[spots[k]] == real[spots[j]]){
            if (player[spots[k-1]] == real[spots[j-1]]) {
              points+=4;
              console.log("+4");
            }
          }
        }
      }
    }
    
  }

  // 3c - part 1
  for(let j = 0 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] == real[spots[j]]){
        if(player[spots[j+1]] != real[spots[j+1]]){
          points+=2;
          console.log("+2");
        }
      }
    }
    
  }
  // 3c - part 2
  for(let j = 1 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] == real[spots[j]]){
        if(player[spots[j-1]] != real[spots[j-1]]){
          points+=2;
          console.log("+2");
        }
      }
    }
    
  }
  // 3d - part 1
  for(let j = 0 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 0 ; k < listSliceOitavas.length; k+=2){
          if(player[spots[k]] == real[spots[j]]){
            if (player[spots[k+1]] != real[spots[j+1]]) {
              points+=1;
              console.log("+1");
            }
          }
        }
      }
    }
    
  }
  // 4d - part 2
  for(let j = 1 ; j < listSliceOitavas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 1 ; k < listSliceOitavas.length; k+=2){
          if(player[spots[k]] == real[spots[j]]){
            if (player[spots[k-1]] != real[spots[j-1]]) {
              points+=1;
              console.log("+1");
            }
          }
        }
      }
    }    
  }
  
  // 3e - part 1
  for(let j = 16 ; j < 16+listSliceQuartas.length; j+=1){
    if(real[spots[j]]!="_none"){
      for(let k = 16 ; k < 16+listSliceQuartas.length; k+=1){
        if(player[spots[j]] == real[spots[k]]){
          points+=3;
          console.log("+3");
        }
      }  
    }
      
  }     
  return points;
} 

function CalculatePart4Quartas(real,player,listSliceQuartas,listSliceSemi){     
  points = 0;   
  for(let j = 16 ; j < 16+listSliceQuartas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] == real[spots[j]]){
        if(player[spots[j+1]] == real[spots[j+1]]){
          points+=5;
          console.log("confronto correto +5");
        }
      }
    }
    
  }
  // 4b - part 1
  for(let j = 16 ; j < 16+listSliceQuartas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 16 ; k < 16+listSliceQuartas.length; k+=2){
          if(player[spots[k]] == real[spots[j]]){
            if (player[spots[k+1]] == real[spots[j+1]]) {
              points+=4;
              console.log("confronto correto pos errada+4");
            }
          }
        }
      }
    }
    
  }
  // 4b - part 2
  for(let j = 17 ; j < 16+listSliceQuartas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 17 ; k < 16+listSliceQuartas.length; k+=2){
          if(player[spots[k]] == real[spots[j]]){
            if (player[spots[k-1]] == real[spots[j-1]]) {
              points+=4;
              console.log("+4");
            }
          }
        }
      }
    }
    
  }

  // 4c - part 1
  for(let j = 16 ; j < 16+listSliceQuartas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] == real[spots[j]]){
        if (player[spots[j+1]] != real[spots[j+1]]) {
          points+=2;
          console.log("+2");
        }          
      }
    }
    
  }
  
  
  // 4c - part 2
  for(let j = 17 ; j < 16+listSliceQuartas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] == real[spots[j]]){
        if (player[spots[j-1]] != real[spots[j-1]]) {
          points+=2;
          console.log("+2");
        }          
      }
    }
    
  }
  // 4d - part 1
  for(let j = 16 ; j < 16+listSliceQuartas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 16 ; k < 16+listSliceQuartas.length; k+=2){
          if(player[spots[k]] == real[spots[j]]){
            if (player[spots[k+1]] != real[spots[j+1]]) {
              points+=1;
              console.log("+1");
            }
          }
        }
      }
    }
    
  }
  // 4d - part 2
  for(let j = 17 ; j < 16+listSliceQuartas.length; j+=2){
    if(real[spots[j]]!="_none"){
      if(player[spots[j]] != real[spots[j]]){
        for(let k = 17 ; k < 16+listSliceQuartas.length; k+=2){
          if(player[spots[k]] == real[spots[j]]){
            if (player[spots[k-1]] != real[spots[j-1]]) {
              points+=1;
              console.log("+1");
            }
          }
        }
      }
    }
    
  }
  // 4e
  for(let j = 24 ; j < 24+listSliceSemi.length; j+=1){
    if(real[spots[j]]!="_none"){
      for(let k = 24 ; k < 24+listSliceSemi.length; k+=1){
        if(player[spots[j]] == real[spots[k]]){
          points+=3;
          console.log("+3");
        }
      } 
    }
           
  }
  

  return points;
}

function CalculatePart5Semis(real,player,listSliceSemi,listSliceFinal){     
  points = 0;  
// 5a
for(let j = 24 ; j < 24+listSliceSemi.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] == real[spots[j]]){
      if(player[spots[j+1]] == real[spots[j+1]]){
        points+=5;
        console.log("+5");
      }
    }
  }
  
}
// 5b - part 1
for(let j = 24 ; j < 24+listSliceSemi.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] != real[spots[j]]){
      for(let k = 24 ; k < 24+listSliceSemi.length; k+=2){
        if(player[spots[k]] == real[spots[j]]){
          if (player[spots[k+1]] == real[spots[j+1]]) {
            points+=4;
            console.log("+4");
          }
        }
      }
    }
  }
  
}
// 5b - part 2
for(let j = 25 ; j < 24+listSliceSemi.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] != real[spots[j]]){
      for(let k = 25 ; k < 24+listSliceSemi.length; k+=2){
        if(player[spots[k]] == real[spots[j]]){
          if (player[spots[k-1]] == real[spots[j-1]]) {
            points+=4;
            console.log("+4");
          }
        }
      }
    }
  }
  
}

// 5c - part 1
for(let j = 24 ; j < 24+listSliceSemi.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] == real[spots[j]]){
      if (player[spots[j+1]] != real[spots[j+1]]) {
        points+=2;
        console.log("+2");
      }          
    }
  }
  
}


// 5c - part 2
for(let j = 25 ; j < 24+listSliceSemi.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] == real[spots[j]]){
      if (player[spots[j-1]] != real[spots[j-1]]) {
        points+=2;
        console.log("+2");
      }          
    }
  }
  
}
// 5d - part 1
for(let j = 24 ; j < 24+listSliceSemi.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] != real[spots[j]]){
      for(let k = 24 ; k < 24+listSliceSemi.length; k+=2){
        if(player[spots[k]] == real[spots[j]]){
          if (player[spots[k+1]] != real[spots[j+1]]) {
            points+=1;
            console.log("+1");
          }
        }
      }
    }
  }
  
}
// 5d - part 2
for(let j = 25 ; j < 24+listSliceSemi.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] != real[spots[j]]){
      for(let k = 25 ; k < 24+listSliceSemi.length; k+=2){
        if(player[spots[k]] == real[spots[j]]){
          if (player[spots[k-1]] != real[spots[j-1]]) {
            points+=1;
            console.log("+1");
          }
        }
      }
    }
  }
  
}
// 5e
for(let j = 28 ; j < 28+listSliceFinal.length; j+=1){
  if(real[spots[j]]!="_none"){
    for(let k = 28 ; k < 28+listSliceFinal.length; k+=1){
      if(player[spots[j]] == real[spots[k]]){
        points+=3;
        console.log("+3");
      }
    }  
  }
        
}
  
  return points;
}

function CalculatePart6Final(real,player,listSliceSemi,listSliceFinal){     
  points = 0;  

// 6a
for(let j = 28 ; j < 28+listSliceFinal.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] == real[spots[j]]){
      if(player[spots[j+1]] == real[spots[j+1]]){
        points+=5;
        console.log("final correta +5");
      }
    }
  }
  
}
// 6b
for(let j = 28 ; j < 28+listSliceFinal.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] == real[spots[j+1]]){
      if(player[spots[j+1]] == real[spots[j]]){
        points+=4;
        console.log("final correta pos trocada+4");
      }  
    }
  }
  
}

// 6c 
if(player.c1 == real.c1){
  if(real.c1 !="_none"){
    points+=5;
    console.log("acertando campeao +5");   
  }             
}        
   
// 6d
for(let j = 28 ; j < 28+listSliceFinal.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] == real[spots[j]]){
      if(player[spots[j+1]] != real[spots[j+1]]){
        points+=3;
        console.log("1 pais certo +3");
      }              
    }
    if(player[spots[j+1]] == real[spots[j+1]]){
      if(player[spots[j]] != real[spots[j]]){
        points+=3;
        console.log("1 pais certo +3");
      }              
    }
  }
  
}

// 6e
for(let j = 28 ; j < 28+listSliceFinal.length; j+=2){
  if(real[spots[j]]!="_none"){
    if(player[spots[j]] != real[spots[j]]){
      if(player[spots[j]] == real[spots[j+1]]){
        points+=2;
        console.log("1 pais trocado 1 +2");
      }              
    }
    if(player[spots[j+1]] != real[spots[j+1]]){
      if(player[spots[j+1]] == real[spots[j]]){
        points+=2;
        console.log("1 pais trocado 2 +2");
      }              
    }
  }
  
}
return points;
}


//*************** FUNCTION CALCULATE POINTS ENDS HERE


