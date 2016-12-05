window.onload = init;
function init(){

//generate date application was started

var date = Date().split(" ");
var month = date[1];
var day = date[2];
var year = date[3];
 console.log(month + " " + day + ", " + year);//print out as month/day/year

//generate options date of graduation

year = parseInt(year, 10);
var gradYears = year + 6;
var terms = year - 6;
var option; 
var text;
var selectGrad = document.getElementById("graduationDate");
var selectTerm = document.getElementById("term");
var id;

for(var i = year; i <=gradYears; i++){

option = document.createElement("option");
text = document.createTextNode("Fall " + i);
option.appendChild(text);
selectGrad.appendChild(option);

option = document.createElement("option");
var text = document.createTextNode("Spring " + i);
option.appendChild(text);
selectGrad.appendChild(option);
}

for(var j = year; j >= terms; j--){

option = document.createElement("option");
text = document.createTextNode("Fall " + j);
option.appendChild(text);
selectTerm.appendChild(option);

option = document.createElement("option");
var text = document.createTextNode("Spring " + j);
option.appendChild(text);
selectTerm.appendChild(option);
}

for(var k = 2; k < 5; k++){
id = "term"+k;
selectTerm = document.getElementById(id);
for(var l = year; l >= terms; l--){

option = document.createElement("option");
text = document.createTextNode("Fall " + l);
option.appendChild(text);
selectTerm.appendChild(option);

option = document.createElement("option");
var text = document.createTextNode("Spring " + l);
option.appendChild(text);
selectTerm.appendChild(option);
}
}
}
