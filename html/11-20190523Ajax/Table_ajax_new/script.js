function loadDoc() {
  var xhtml = new XMLHttpRequest(); // lệnh bắt buộc 1
  xhtml.onreadystatechange = function() {
    // lệnh bắt buộc 2
    if (this.readyState == 4 && this.status == 200) {
      // lệnh bắt buộc 3
      var data = JSON.parse(this.responseText);
      table =
        "<table><thead><tr><th>STT</th><th>ID</th><th>Name</th><th>Email</th></tr></thead><tbody>";
      // tạo table
      for (var i = 0; i < data.users.length; i++) {
        table +=
          "<tr><td>" +
          (i + 1) +
          "</td><td>" +
          data.users[i].id +
          "</td><td>" +
          data.users[i].name +
          "</td><td>" +
          data.users[i].email +
          "</td></tr>";
      }
      table += "</tbody>";
      document.getElementById("text").innerHTML = table;
      // nguồn https://www.youtube.com/watch?v=nC3_QqYOfxs (Phát :D)
    }
  };
  xhtml.open(
    "GET",
    "https://namcoi.com/projects/users-crud-laravel/public/api/users",
    true
  ); // lệnh bắt buộc 4
  xhtml.send(); // lệnh bắt buộc 5
}
