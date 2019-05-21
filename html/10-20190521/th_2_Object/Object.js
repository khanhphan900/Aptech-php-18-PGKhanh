var gioiThieu = {
    name: "Khánh",
    "gioi-tinh": 'nam',
    age: 30,
    married: "true",
    "name-of-dog": ['hổ', 'báo'],
    tiengKeu: function (hanhdong) {
        console.log(hanhdong + " éc éc ");
        return {
            name: "Heo",
        }
    }
};

// gioiThieu.tiengKeu();
// console.log(gioiThieu.name);
// console.log(gioiThieu["gioi-tinh"]);
// console.log(gioiThieu.tiengKeu('dungKeu'));
// console.log(gioiThieu.tiengKeu().name);
// console.log(gioiThieu.name);

var arrayNameOfDog = gioiThieu['name-of-dog'];

console.log(arrayNameOfDog);

for (var i = 0; i < arrayNameOfDog.length; i++) {
    console.log(i);
    var h = document.createElement('h1');
    var in_h = document.createTextNode(arrayNameOfDog[i]);
    h.appendChild(in_h);
    console.log(i);
    document.body.appendChild(h);
}