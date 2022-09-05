let Kangaroo = [97, 109, 89, 90]
let Gumtree = [89, 92, 92, 111]

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
        console.log("Kangaroo");
    }
} else if (kanAvg < gumAvg) {
    if (gumAvg >= 100) {
      console.log("Gumtree")
    }
}
if (kanAvg == gumAvg) {
    console.log("draw")
}
else{
    console.log("no winner");
}