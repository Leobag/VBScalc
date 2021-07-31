window.onload = function(){

var descriptions = document.getElementById('divDescriptions');
var addDescription = document.getElementById('addDescription');
let counter = 0;

addDescription.onclick = function(){

  var newDiv = document.createElement('div');
  var label = document.createElement('label');
  var input1 = document.createElement('input');
  var input2 = document.createElement('input');

  descriptions.append(newDiv);
  newDiv.append(label, input1, input2);

  newDiv.setAttribute('class', 'form-group');

  input1.setAttribute('placeholder', 'Text part 1');
  input1.setAttribute('name', "newDescription[" + counter + "][text1]");
  input1.setAttribute('type', 'text');
  input1.setAttribute('rows', '3');
  input1.setAttribute('class', 'form-control my-2');

  input2.setAttribute('placeholder', 'Text part 2');
  input2.setAttribute('name', "newDescription[" + counter + "][text2]");
  input2.setAttribute('type', 'text');
  input2.setAttribute('rows', '3');
  input2.setAttribute('class', 'form-control my-1');

  label.innerHTML = "New Description";
  counter += 1;

}



}
