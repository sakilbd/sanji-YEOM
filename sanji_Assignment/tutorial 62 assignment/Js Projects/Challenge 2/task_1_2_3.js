//task1_2_3

const taxableIncomes = [35000, 45000, 50000, 62000, 70500, 82500, 97000, 101000, 132000, 150000]
let taxes = []
let netIncome = []


function calTax(taxableIncomes) {
    let tax, nIncome;
    for (i of taxableIncomes) {
        if (i > 60000 && i < 100000) {
            tax = (i * 40) / 100;
            Income = i - tax;
            taxes.push(tax);
            netIncome.push(Income);
        } else {
            tax = (i * 35) / 100;
            Income = i - tax;
            taxes.push(tax);
            netIncome.push(Income);
        }
    }
}


calTax(taxableIncomes)

console.log(taxes)
console.log(netIncome)