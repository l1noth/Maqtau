function UploadProcess() {
    //Reference the FileUpload element.
    var fileUpload = document.getElementById("fileUpload");

    //Validate whether File is valid Excel file.
    var regex = /^([a-zA-Zа-яА-ЯәіңғүұқөһӘІҢҒҮҰҚӨҺ0-9\s_\\.\-:])+(.xls|.xlsx)$/;
    if (regex.test(fileUpload.value.toLowerCase())) {
        if (typeof (FileReader) != "undefined") {
            var reader = new FileReader();

            //For Browsers other than IE.
            if (reader.readAsBinaryString) {
                reader.onload = function (e) {
                    GetTableFromExcel(e.target.result);
                };
                reader.readAsBinaryString(fileUpload.files[0]);
            } else {
                //For IE Browser.
                reader.onload = function (e) {
                    var data = "";
                    var bytes = new Uint8Array(e.target.result);
                    for (var i = 0; i < bytes.byteLength; i++) {
                        data += String.fromCharCode(bytes[i]);
                    }
                    GetTableFromExcel(data);
                };
                reader.readAsArrayBuffer(fileUpload.files[0]);
            }
        } else {
			alert(langData.for_js['1_error']);
        }
    } else {
		alert(langData.for_js['2_error']);
    }
};
function GetTableFromExcel(data) {
    //Read the Excel File data in binary
    var workbook = XLSX.read(data, {
        type: 'binary'
    });

    //get the name of First Sheet.
    var Sheet = workbook.SheetNames[0];
    
    //Read all rows from First Sheet into an JSON array.
    var excelRows = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[Sheet]);
    
    ClearLS();
    //Add the data rows from Excel file.
    for (var i = 0; i <excelRows.length; i++) {
            var  test =excelRows[i].ТӘА;
            localStorage.setItem(test,JSON.stringify(excelRows[i]) );
        }
    localStorage.setItem('excel',true);
    Change();
};

function Change(){
if(localStorage.getItem('excel')){
    var articleDiv = document.querySelector("div.article");
        for(let i=0; i<localStorage.length; i++) {
              let key = localStorage.key(i);
              if (key=='excel' ||  key=='visible' || key=='undefined')
                continue;				 
            
            let div = document.createElement('li');						
            div.innerHTML = `<a href=# onclick="test('${key}')">${key}<a>`;

            articleDiv.append(div);		
        }
    localStorage.setItem('visible',true);
}
}

function ClearLS(){
if(localStorage.getItem('excel')){
    localStorage.clear();
    var articleDiv = document.querySelector("div.article");
    articleDiv.innerHTML="";
    }
}
function test(key){
    let baga=JSON.parse( localStorage.getItem(key) );
   
    let bagalar ={
         'school_name1' : baga.Класс,
         'teacher1':baga.Мұғалім1,
         'teacher2':baga.Мұғалім2,
         'teacher1_ru':baga.Мұғалім1,
         'teacher2_ru':baga.Мұғалім2,
         'pol':baga.Жынысы,
         'school_name_ru':baga.Класс_ru
       

    };
    
 
   let arr=baga.ТӘА.trim().replace(/[ ]+/g, ' ').split(' ')
    
    let fio={
        fio:baga.ТӘА,
        fio_ru:baga.ТӘА
      
 }
 
    for(let key in fio)
        {   
            if(fio[key]==undefined)
                {
                    $(`#${key}`).val('');
                    continue;
                }
                    $(`#${key}`).val(`${fio[key]}`);
    }    

    for(let key in bagalar)
        {
            if (key=='pol') {
                if((bagalar[key]=='Қ')){
                    $('#letter_a').val('а');
                    $('#letter_ca').val('ца');
                 }
                 else{
                    $('#letter_a').val('');
                    $('#letter_ca').val('к');
                 }
            }
            else{

            }
            $(`#${key}`).val(`${bagalar[key]}`).change();
        }
}



$( document ).ready(function() {
    if(localStorage.getItem('excel')){
        let art=$("#article").html();
        art=art.trim();
       // console.log(art);
        if(!art){
            Change();
        }
        
    }
});