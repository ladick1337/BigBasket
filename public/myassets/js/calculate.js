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
    }
};

let cusCommision = 0.1;
let stdCommision = 0.1;
let minCommision = 5;
let maxCommision = {
    coef: 0.1,
    USD: 200,
    GBP: 150,
    EUR: 150,
};
let expCommision = 0.05;
/////////////////////////////////////////////


$(document).ready(function(){
    $(".cal_currency").text("USD");
    $(".nselect_head").on("change", function() {
        console.log("Changed");
        console.log(this.value);
        let stateType = $(".nselect_head").attr("data-val");
        $(".cal_currency").text(statesTarifs[stateType].currency);
    });
});

function getPrice(state, weight, price) {

    let rawPrice = weight * statesTarifs[state].regular;

    if (state == "USAAir" && weight < 1) {
        rawPrice = weight * statesTarifs.USAAir.minPerTenth;
    }
    if (state.substr(0, 3) !== "USA" && state !== "CHI"){
        if(weight*statesTarifs[state].regular < statesTarifs[state].min) {
            rawPrice = statesTarifs[state].min;
        } else {
            rawPrice = weight*statesTarifs[state].regular;
        }
    }

    rawPrice += rawPrice*stdCommision;
    if(price > maxCommision[statesTarifs[state].currency]) {
        rawPrice += rawPrice*maxCommision.coef;
    }
    return rawPrice;

}


