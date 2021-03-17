let numbersToCalculateFactorial = [3,4,5,6] 

//factorial functional
const calculateFunctionalFactorial = function fac(n) { return n < 2 ? 1 : n * fac(n - 1) }

//factorial imperative
function calculateImperativeFactorial(n){
    let result = 1;
    
    for(i=1;i<=n;i++){
        result = result*i;
    }
    return result;
}

const printResults = numbersToCalculateFactorial.forEach(function(value){
    console.log("Form Imperative "+"!" + value + ": ", calculateImperativeFactorial(value));
    console.log("Form Functional "+"!" + value + ": ", calculateFunctionalFactorial(value));
})

printResults;
