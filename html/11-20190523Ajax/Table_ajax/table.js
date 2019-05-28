function taoTable() {
  var xhtml = new XMLHttpRequest(); // bắt buộc 1
  xhtml.onreadystatechange = function() {
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
      // UNSENT-0 > OPENED-1 > HEADERS_RECEIVED-2 > LOADING-3 > DONE-4
      //
      function create(nameofElement) {
        return document.createElement(nameofElement);
      }
      function createText(textNode) {
        return document.createTextNode(textNode);
      }
      // create table
      var table = create("table");

      // create thead
      var thead = create("thead");
      table.appendChild(thead);
      var tr = create("tr");
      thead.appendChild(tr);
      var heading = ["STT", "ID", "NAME", "EMAIL"];
      for (var i = 0; i < heading.length; i++) {
        var th = create("th");
        th.appendChild(createText(heading[i]));
        tr.appendChild(th);
      }
      // cearte tbody
      var tbody = create("tbody");
      table.appendChild(tbody);
      var data = JSON.parse(this.responseText);
      var i = 0;

      for (i = 0; i < data.users.length; i++) {
        var tr = create("tr");
        tbody.appendChild(tr);
        console.log(i);
        var array = [
          i + 1,
          data.users[i].id,
          data.users[i].name,
          data.users[i].email
        ];
        for (var j = 0; j < array.length; j++) {
          var td = create("td");
          td.appendChild(createText(array[j]));
          tr.appendChild(td);
          // console.log(j);
        }
      }
    } // xóa và hiển thị lại table tránh click chuột nhiều lần (lỗi thời gian trễ)
    // document.getElementById("demo").innerHTML = "";
    // document.getElementById("demo").appendChild(table);
  };

  xhtml.open(
    "GET",
    "https://namcoi.com/projects/users-crud-laravel/public/api/users",
    true
  );
  xhtml.send();
}
