var Ten = ["Khánh", "Đại", "Ca"];

for (var i = 0; i < Ten.length; ++i) {
    console.log(i);
    document.getElementById("ten" + (i + 1)).innerHTML = Ten[i];
}
console.log(i);