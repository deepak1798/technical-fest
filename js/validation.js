function validateForm(){
  for(var i=0;i< myform.elements.length;i++){
    if(myform.elements[i].value.length==0){
      alert("Please fill in all the fields");
      return false;
    }
  }
}
