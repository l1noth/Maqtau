
var selectIds = ['fontsizeselect','fontselect','fontsizeselectteacher'];
var inputIds = [
  //Бірінші бет
  'region', 
  'school_name',
  'school_name1', 
  'fio',
  'director',
  'teacher1', 
  'teacher2',
  'city', 
  'date',
  'month',

  'region_ru', 
  'school_name_ru',
  'school_name1_ru', 
  'fio_ru',
  'director_ru',
  'teacher1_ru', 
  'teacher2_ru',
  'city_ru', 
  'date_ru',
  'month_ru'
  
  ];


var generateButton = document.getElementById('generateButton');


generateButton.addEventListener('click', function() {

  var data = {};
  //data["class"] = "11";

  for (var i = 0; i < inputIds.length; i++) {
    var inputId = inputIds[i];

    var input = document.getElementById(inputId);
  
    data[inputId] = input.value;

    var inputnumberId= inputId +'_number';
    var inputnumberIdY= inputId +'_numberY';
  
    var inputnumber = document.getElementById(inputnumberId);
    data[inputnumberId] = inputnumber.value;

    var inputnumberY = document.getElementById(inputnumberIdY);
    data[inputnumberIdY] = inputnumberY.value;
  }

 
  for (var i = 0; i < selectIds.length; i++) {
    var selectId = selectIds[i];
    var select = document.getElementById(selectId);
    data[selectId] = select.value;

  }

  
  var jsonData = JSON.stringify(data);

  var downloadLink = document.createElement('a');
  downloadLink.href = 'data:text/json;charset=utf-8,' + encodeURIComponent(jsonData);
  downloadLink.download = 'config_maqtau_qagazi.json';

  
  document.body.appendChild(downloadLink);
  downloadLink.click();
  document.body.removeChild(downloadLink);
});








var fileInput = document.getElementById('fileInput');


fileInput.addEventListener('change', function(event) {
  var file = event.target.files[0];


  var reader = new FileReader();


  reader.onload = function(e) {
    var jsonData = e.target.result;

   
    var data = JSON.parse(jsonData);
    
      
      for (var inputName in data) {
        if (data.hasOwnProperty(inputName)) {
          var inputValue = data[inputName];
          var inputElement = document.querySelector('input[name="' + inputName + '"]');
          if (inputElement) {
            inputElement.value = inputValue;
          }
        }
      }

      
      for (var selectName in data) {
        if (data.hasOwnProperty(selectName)) {
          var selectValue = data[selectName];
          var selectElement = document.querySelector('select[name="' + selectName + '"]');
          if (selectElement) {
            for (var i = 0; i < selectElement.options.length; i++) {
              var option = selectElement.options[i];
              if (option.value === selectValue) {
                option.selected = true;
                break;
              }
            }
          }
        }
      }
  alert(langData.for_js['3_error']);
   

    };
  
  reader.readAsText(file);
});
