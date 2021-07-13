//////////////////////////// Params
let statesTarifs = {
    USAAir: {
        regular: 9,
        minPerTenth: 10,
        currency: "USD" 
    },
    USASea50: {
        regular: 4,
        currency: "USD" 
    },
    USASea30: {
        regular: 6,
        currency: "USD" 
    },
    GER: {
        regular: 3,
        min: 6,
        currency: "EUR" 
    },
    UK: {
        regular: 4,
        min: 7,
        currency: "GBP",
    },
    SPA: {
        regular: 3,
        min: 5,
        currency: "EUR",
    },
    ITA: {
        regular: 3,
        min: 5,
        currency: "EUR",
    },
    CHI: {
        regular: 12,
        currency: "USD",
    }
};

let cusCommision = 0.1;
let stdCommision = 0.1;
let minCommision = 5;
let maxCommision = {
    coef: 0.05,
    USD: 200,
    USDBound: 4000,
    GBP: 150,
    GBPBound: 3000,
    EUR: 150,
    EURBound: 3000,
};
let expCommision = 0.05;

let currencyTable = {
    USD: "\u0024",
    GBP: "\u00a3",
    EUR: "\u20ac",
}
/////////////////////////////////////////////


$(document).ready(function(){

    let selectedState = "USAAir";

    /////////////////////////////// Смена валюты
    $(".cal_currency").text(currencyTable.USD); 
    $(".nselect__list li").on("click", function() {
        selectedState = $(this).attr("data-val");
        $(".cal_currency").text(currencyTable[statesTarifs[selectedState].currency]);
    });

    //////////////////////////// Кнопка "Расчитать"
    $(".calculate__btn").click(function(){
        let price = $("#price").val();
        let weight = $("#from").val();
        console.log(price + " " + weight + " " + selectedState);
        let finalPrice = getPrice(selectedState, weight, price).toFixed(2);
        $(".final_price").text(finalPrice + " " + statesTarifs[selectedState].currency);
        $(".calculate__label--result").show();
    });

});


function getPrice(state, weight, price) {

    let rawShipmentPrice = weight * statesTarifs[state].regular;
    let finalPrice = +price;

    let currency = statesTarifs[state].currency;

    if (state == "USAAir" && weight < 1) {
        rawShipmentPrice = weight * statesTarifs.USAAir.minPerTenth;
    }
    if (state.substr(0, 3) !== "USA" && state !== "CHI"){
        if(rawShipmentPrice < statesTarifs[state].min) {
            rawShipmentPrice = statesTarifs[state].min;
        }
    }
    finalPrice += rawShipmentPrice;


    if(price < maxCommision[currency+"Bound"]) {
        if(price*stdCommision < 5){
            finalPrice+=5;
        } else if (price*stdCommision > maxCommision[currency]) {
            finalPrice += maxCommision[currency];
        } else {
            finalPrice += price * stdCommision;
        }
    } else {
        finalPrice += price * maxCommision.coef;
    }

    return finalPrice;
}


// function getPrice(state, weight, price) {

//     let rawPrice = weight * statesTarifs[state].regular;

//     if (state == "USAAir" && weight < 1) {
//         rawPrice = weight * statesTarifs.USAAir.minPerTenth;
//     }
//     if (state.substr(0, 3) !== "USA" && state !== "CHI"){
//         if(rawPrice < statesTarifs[state].min) {
//             rawPrice = statesTarifs[state].min;
//         }
//     }

//     rawPrice += rawPrice*stdCommision;
//     if(price > maxCommision[statesTarifs[state].currency]) {
//         rawPrice += rawPrice*maxCommision.coef;
//     }
//     return rawPrice;

// }
