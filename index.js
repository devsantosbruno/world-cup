function main_screen(main, add, update, del) {
  if (add == 'true') {
    document.getElementsByClassName('add_section')[0].style.display = 'block';
    document.getElementsByClassName('update_section')[0].style.display = 'none';
    document.getElementsByClassName('delete_section')[0].style.display = 'none';
    document.getElementsByClassName('middle_main')[0].style.display = 'none';
  } else if (update == 'true') {
    document.getElementsByClassName('add_section')[0].style.display = 'none';
    document.getElementsByClassName('update_section')[0].style.display = 'block';
    document.getElementsByClassName('delete_section')[0].style.display = 'none';
    document.getElementsByClassName('middle_main')[0].style.display = 'none';
  } else if (del == 'true') {
    document.getElementsByClassName('add_section')[0].style.display = 'none';
    document.getElementsByClassName('update_section')[0].style.display = 'none';
    document.getElementsByClassName('delete_section')[0].style.display = 'block';
    document.getElementsByClassName('middle_main')[0].style.display = 'none';
  } else if (main == 'true') {
    document.getElementsByClassName('add_section')[0].style.display = 'none';
    document.getElementsByClassName('update_section')[0].style.display = 'none';
    document.getElementsByClassName('delete_section')[0].style.display = 'none';
    document.getElementsByClassName('middle_main')[0].style.display = 'block';
  } else {
    console('test');
  }
}

function build_url(name) {
  main_screen('true', 'false', 'false', 'false');
  let a = '';
  if (name != 'empty') {
    a = a + 'name=' + name;
  }
  let url_string = '?' + a;
  window.location = url_string;
}

let countries = [
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
  'c1',
];

function remove_user(key) {
  window.location = '?remove_user=' + key;
}

/**
 * function to create select options for each spot
 */
function country_choice(list_countries, list_spots) {
  let string_option = "<div class='container'>";
  for (j = 0; j < list_spots.length; j++) {
    string_option +=
      "<div class='flag_area space_" +
      list_spots[j] +
      "'><label for='" +
      list_spots[j] +
      "'>" +
      list_spots[j] +
      ": </label><select class='icon-menu' name='" +
      list_spots[j] +
      "' id='" +
      list_spots[j] +
      "'>";
    for (i = 0; i < list_countries.length; i++) {
      string_option +=
        "<option value='" + list_countries[i] + "'>" + list_countries[i] + '</option>';
    }
    string_option += '</select></div>';
  }
  ('</div>');
  document.getElementsByClassName('add_form')[0].innerHTML = string_option;
}
country_choice(countries, spots);
