//to display users name
function getName() {
  return localStorage.getItem("username");
}

function username()
{
    var name = getName();
    document.getElementById('username').innerHTML = name;
}