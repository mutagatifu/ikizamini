
   function previewFile(){
       var preview = document.getElementById('img'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;     
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL
       } else {
           preview.src = "";
       }
  }

  previewFile();  //calls the function named previewFile()




//   regex for form validation
var btn = document.getElementById('send').disabled=true;
const submitBtn = document.getElementById('send');
const inputs = document.querySelectorAll('input');
const patterns= {
    indangamuntu:/^\d{20}$/,
    izinaBwite:/^[a-z][A-Z]$/,
    andimazina:/^[a-z][A-Z]$/,
    
};

function validate(field, regex){
    // console.log(regex.test(field.value));
    if(regex.test(field.value)){
        field.className= "valid";
    }
    else{
        field.className="invalid";
    }
  
}
inputs.forEach((input)=>{
    input.addEventListener('keyup',(e)=>{
        // console.log(e.target.attributes.name.value);
         validate(e.target,patterns[e.target.attributes.name.value]);
        // validate(e.target,patterns['indangamuntu']);
    })
});

 



$(document).ready(function(){
    $('#myformData').submit(function(e){
        e.preventDefault();
        if(inputs !=null){
            $('#send').attr("disabled", true);
            
            return true;
        

        }
        else{
            $('#send').attr("disabled", false);
            return false;
        }
        
            
        

    });
   
    

});



