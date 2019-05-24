var data = {
  users: [
    {
      id: 10,
      name: "Ethyl Medhurst",
      email: "noah.hand@example.org",
      password: "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
      created_at: "2019-03-26 04:55:04",
      updated_at: "2019-03-26 04:55:04"
    },
    {
      id: 9,
      name: "Eula Lebsack PhD",
      email: "schroeder.sylvan@example.org",
      password: "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
      created_at: "2019-03-26 04:55:03",
      updated_at: "2019-03-26 04:55:03"
    },
    {
      id: 8,
      name: "Mrs. Kathlyn Parisian DDS",
      email: "ggrimes@example.net",
      password: "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
      created_at: "2019-03-26 04:55:03",
      updated_at: "2019-03-26 04:55:03"
    }
  ]
};

function create(nameOfElement) {
  return document.createElement(nameOfElement);
}

var table = create("table");
document.body.appendChild(table);
var thead = create("thead");
table.appendChild(thead);
var tbody = create("tbody");
table.appendChild(tbody);

var tr = create("tr");
thead.appendChild(tr);
var arrayGioiThieu = ["ID", "Name", "Email"];
for (var i = 0; i < 3; i++) {
  var th = create("th");

  tr.appendChild(th);
  th.appendChild(document.createTextNode(arrayGioiThieu[i]));
}

for (var i = 0; i < 3; i++) {
  var tr = create("tr");
  tbody.appendChild(tr);
  var arrayElementGT = [
    data.users[i].id,
    data.users[i].name,
    data.users[i].email
  ];
  for (var j = 0; j < 3; j++) {
    var td = create("td");
    tr.appendChild(td);
    td.appendChild(document.createTextNode(arrayElementGT[j]));
  }
}

// css border
var cssTable = document.createAttribute("style");
cssTable.value =
  "border: 2px solid gray; color:blue; border-collapse: collapse";
table.setAttributeNode(cssTable);

th.setAttributeNode(cssTable);
td.setAttributeNode(cssTable);
//
