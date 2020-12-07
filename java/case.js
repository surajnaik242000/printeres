function getName() {
  return localStorage.getItem("username");
}

function username()
{
    var name = getName();
    document.getElementById('username').innerHTML = name;
}

var y = document.getElementById("case").selectedIndex;
  var tsize = document.getElementsByTagName("option")[y].value;
