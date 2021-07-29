function calculateInterest() { //function to calculate interest
    let amount = parseFloat(document.querySelector(('#principalAmount')).value);
    let time = parseInt(document.querySelector(('#timePeriod')).value);
    let rate = parseFloat(document.querySelector(('#interestRate')).value);
    let total = (amount * time * rate) / 100;
    document.querySelector(".interest").innerHTML += total;
}

document.querySelector(".btn").addEventListener("click", calculateInterest); //event listener for button
document.querySelector(".btn").addEventListener("mouseover", function() { //query for mouseover
    document.querySelector(".btn").style.backgroundColor = "red";
});