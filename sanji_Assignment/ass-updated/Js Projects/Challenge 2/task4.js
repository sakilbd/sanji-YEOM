let array = [10, 20, 30, 40, 50];

function calAverage(arr) {
    let total = 0;
    let avg = 0;
    for (let i in arr) {
        total += arr[i];
    }

    avg = total / arr.length;

    return avg;
}

console.log(calAverage(array));