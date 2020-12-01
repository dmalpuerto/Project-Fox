function validateAll(){
    
    if (myFunction()){
        document.form.submit();
    }
}

function myFunction(){
    var lastNameValue = document.getElementsByName.("LastName").value;
    var firstNameValue = document.getElementsByName.("FirstName").value;
    var middleInitialValue = document.getElementsByName.("MiddleInitial").value;
    var genderValue = document.getElementsByName.("Gender").value;
    var birthdateValue = document.getElementsByName.("Birthdate").value;
    var birthplaceValue = document.getElementsByName.("Birthplace").value;
    var occupationValue = document.getElementsByName.("Occupation").value;
    var sectorValue = document.getElementsByName.("Sector").value;
    
    
    if (lastNameValue == "") {
        setErrorFor(LastName, 'Please input your last name');
      return false;
      }  else {
        if (isLetter()) {
          setSuccessFor(LastName);
        }else{
          setErrorFor(LastName,"Last name must contains only alphabets");
          return false;
        }      
      }
    
}


function setErrorFor(input, message) {
  var formControl = input.parentElement;
  var small = formControl.querySelector('small');
  formControl.className = 'form-control error';
  small.innerText = message;
}

function setSuccessFor(input) {
  var formControl = input.parentElement;
  formControl.className = 'form-control success';
}

function isLetter() {
  var lastNameValue = document.getElementById("lastName").value;
  let alp2 =/[\d\W]/;
  if (alp2.test(lastNameValue) == true) {
    if (/(\s)+/.test(lastNameValue)== true) {
      return true;
    } else{
      alert("Alphabet lang hoy!!!");
      return false;
    }   
  }
  else{
    return true;
  }
}

