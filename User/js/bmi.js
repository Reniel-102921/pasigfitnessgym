// To calculate the user bmi
var heightInput = document.querySelector(".height-input-field");
var weightInput = document.querySelector(".weight-input-field");
var calculateButton = document.querySelector(".calculate-button");
var result = document.querySelector(".result");
var resultBMI;
var inputHeight, inputWeight;
var statement = document.querySelector(".result-statement");
var BMI, height, weight;


calculateButton.addEventListener("click", ()=>{

    height = heightInput.value;
    weight = weightInput.value;
    inputHeight = document.querySelector("#en_height").value=height;
    inputWeight = document.querySelector("#en_weight").value=weight;
    BMI = weight/(height**2);
    result.innerText = BMI;
    resultBMI = document.querySelector("#bmi").value=BMI; 
    console.log(BMI);

    if ((BMI > 1) && (BMI < 18.5)) {
        statement.innerText = "Your BMI falls within the underweight range";
    }else if((BMI > 18.5) && (BMI < 24.9)){
        statement.innerText = "Your BMI falls within the normal or healthy weight range";
    }else if((BMI > 25) && (BMI < 29.9 )){
        statement.innerText = "Your BMI falls within the overweight range";
    }else{
        statement.innerText = "Your BMI falls within the obese range";
    }
});
