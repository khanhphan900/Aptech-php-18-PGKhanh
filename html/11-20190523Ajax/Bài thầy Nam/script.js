var data;
function loadDoc() {
  var xhttp = new XMLHttpRequest(); //class
  xhttp.onreadystatechange = function() {
    console.log(this.readyState);
    if (this.readyState == XMLHttpRequest.DONE && this.status == 200) {
      console.log(JSON.parse(this.responseText));
      var data = JSON.parse(this.responseText);
      document.getElementById("demo").innerHTML = "kiểm tra bài ";
      document.getElementById("demo2").innerHTML = data;
      console.log(data);
    }
  };
  // xhttp.open("GET", "data.json", true);
  xhttp.open(
    "GET",
    "https://namcoi.com/projects/users-crud-laravel/public/api/users",
    true
  );

  xhttp.send();
}
