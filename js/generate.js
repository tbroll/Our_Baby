window.onload = init;
function init(){

    //generate options date of graduation
    var year = new Date().getFullYear(); 
    year = parseInt(year, 10);
    var gradYears = year + 6;
    var earliestTerm = year - 6;
    var option; 
    var text;

    var selectGrad = document.getElementById("graduationDate");
    var selectTerm = document.getElementById("term");

    for(var i = year; i <=gradYears; i++){

        option = document.createElement("option");
        text = document.createTextNode("Spring " + i);
        option.appendChild(text);
        selectGrad.appendChild(option);

        option = document.createElement("option");
        text = document.createTextNode("Fall " + i);
        option.appendChild(text);
        selectGrad.appendChild(option);
    }

    // create term options for each class

    var termOption;
    for(var k = year; k >= earliestTerm; k--){

        termOption = document.createElement("option");
        text = document.createTextNode("Fall " + k);
        termOption.appendChild(text);
        selectTerm.appendChild(termOption);

        termOption = document.createElement("option");
        text = document.createTextNode("Spring " + k);
        termOption.appendChild(text);
        selectTerm.appendChild(termOption);
    }

    for(var j = 2; j < 5; j++){
        var ClassTerm = "term" + j;
        selectTerm = document.getElementById(ClassTerm);

        for(var k = year; k >= earliestTerm; k--){

            termOption = document.createElement("option");
            text = document.createTextNode("Fall " + k);
            termOption.appendChild(text);
            selectTerm.appendChild(termOption);

            termOption = document.createElement("option");
            text = document.createTextNode("Spring " + k);
            termOption.appendChild(text);
            selectTerm.appendChild(termOption);
        }
    }
}

