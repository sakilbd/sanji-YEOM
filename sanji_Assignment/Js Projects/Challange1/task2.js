let Kangaroo = [44, 56, 71, 85, 54];
let Gumtree = [65, 54, 49, 23, 34];
let avgKangaroo = calculateAverage(Kangaroo);
let avgGumtree = calculateAverage(Gumtree);

let winnerValue = determineWinner(avgKangaroo, avgGumtree);

if (winnerValue == avgKangaroo) {
    alert(`Kangaroo wins!!(${avgKangaroo} vs ${avgGumtree})`);
} else if (winnerValue == avgGumtree) {
    alert(`Gumtree wins!!(${avgGumtree} vs ${avgKangaroo})`);
} else {
    alert("There is no Winner!!!!")
}

function calculateAverage(array) {

    let total = 0;
    let avg = 0;
    for (let i in array) {

        total += array[i];
    }

    avg = total / array.length;

    return avg;
}

function determineWinner(value1, value2) {
    if (value1 > value2) {
        if (value2 * 2 <= value1) {
            return value1;
        } else {
            return false;
        }
    } else if (value2 > value1) {
        if (value1 * 2 <= value2) {
            return value2;
        } else {
            return false;
        }
    }
}