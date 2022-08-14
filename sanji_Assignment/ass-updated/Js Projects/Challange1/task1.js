let Kangaroo = [98, 112, 102, 100]
let Gumtree = [110, 96, 107, 99]

let KanTotal = 0;
let GumTotal = 0;

for (let i in Kangaroo) {
    KanTotal += Kangaroo[i];
    GumTotal += Gumtree[i];
}
let kanAvg = KanTotal / Kangaroo.length;
let gumAvg = GumTotal / Gumtree.length;

if (kanAvg > gumAvg) {
    if (kanAvg >= 100) {
        alert("Kangaroo");
    }
} else if (kanAvg < gumAvg) {
    if (gumAvg >= 100) {
        alert("Gumtree")
    }
}
if (kanAvg == gumAvg) {
    alert("draw")
}