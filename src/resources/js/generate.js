window.onload = init;
function init(){

//generate date application was started
var date = Date().split(" ");
var month = date[1];
var day = date[2];
var year = date[3];
 console.log(month + " " + day + ", " + year);

//generate options date of graduation
year = parseInt(year, 10);
var gradYears = year + 6;
var option; 
var text;
var select = document.getElementById("graduationDate");

for(var i = year; i <=gradYears; i++){

option = document.createElement("option");
text = document.createTextNode("Fall " + i);
option.appendChild(text);
select.appendChild(option);

option = document.createElement("option");
var text = document.createTextNode("Spring " + i);
option.appendChild(text);
select.appendChild(option);
}

//generate number of activities fields

document.getElementById("numberOfActivities").onchange = createActivityFields;

document.getElementById("numberOfClasses").onchange = createClassesFields;
}
function createActivityFields(){
var brk;
var label;
var textfield;
var act = document.getElementById("activity");
var activ = document.getElementById("numberOfActivities");
var numOfActivities = activ.options[activ.selectedIndex].text;
numOfActivities = parseInt(numOfActivities, 10);
console.log(numOfActivities);
for (var j = 1; j <= numOfActivities; j++){
brk = document.createElement("br");
act.appendChild(brk);

textfield = document.createElement("input");
textfield.type = "text";
textfield.placeholder = "enter activity here";
act.appendChild(textfield);

textfield = document.createElement("input");
textfield.type = "number";
textfield.min = 0;
textfield.max = 1200; 
textfield.placeholder = "time(minutes) spent on activity";
act.appendChild(textfield);
}
}

//generate number of classes fields

function createClassesFields(){

var brk;
var textfield;
var radioButton;
var label;

var cTaken = document.getElementById("classesTaken");
var classes = document.getElementById("numberOfClasses");
var numOfClasses = classes.options[classes.selectedIndex].text;
numOfClasses = parseInt(numOfClasses, 10);

for (var j = 1; j <= numOfClasses; j++){

brk = document.createElement("br");
cTaken.appendChild(brk);

label = document.createElement("label");
radioButton = document.createElement("input");
radioButton.type = "radio";
radioButton.name = "input" + j;
radioButton.value = "Math";
label.appendChild(radioButton);
label.appendChild(document.createTextNode("Math"));
cTaken.appendChild(label);

label = document.createElement("label");
radioButton = document.createElement("input");
radioButton.type = "radio";
radioButton.name = "input" + j;
radioButton.value = "Computer Science";
label.appendChild(radioButton);
label.appendChild(document.createTextNode("Computer Science"));
cTaken.appendChild(label);

textfield = document.createElement("input");
textfield.type = "number";
textfield.placeholder = "class number";
cTaken.appendChild(label);
cTaken.appendChild(textfield);

textfield = document.createElement("input");
textfield.type = "text";
textfield.placeholder = "Term";
cTaken.appendChild(textfield);

textfield = document.createElement("input");
textfield.type = "text";
textfield.placeholder = "Instructor's name";
cTaken.appendChild(textfield);

label = document.createElement("label");
radioButton = document.createElement("input");
radioButton.type = "radio";
radioButton.name = "input" + j;
radioButton.value = "Yes";
label.appendChild(radioButton);
label.appendChild(document.createTextNode("Retake Yes"));
cTaken.appendChild(label);

label = document.createElement("label");
radioButton = document.createElement("input");
radioButton.type = "radio";
radioButton.name = "input" + j;
radioButton.value = "No";
label.appendChild(radioButton);
label.appendChild(document.createTextNode("Retake No"));
cTaken.appendChild(label);
}
}
