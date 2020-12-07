function getName() {
  return localStorage.getItem("username");
}

function username()
{
    var name = getName();
    document.getElementById('username').innerHTML = name;
}

function calculate(){
var y = document.getElementById("type").selectedIndex;
  var phone = document.getElementsByTagName("option")[y].value;
  var cover = document.getElementById('cover').value;
    var model = document.getElementById("model").value;
    var x = 100;
    if ( phone == "samsung")
        {
            if (model == "a")
                {
                    x = x + 60;
                    if( cover == "hardcase")
                        {
                            x = x+ 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x =x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
            else
                 if (model == "j")
                {
                     x = x + 80;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
            else
                 if (model == "galaxy")
                {
                     x = x + 100;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
            else
                 {
                     x = x + 30;
                     if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                 }
        }
    if ( phone == "apple")
        {
            if (model == "12" || model == "11" || model == "10")
                {
                    x = x + 80;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
            else
                 if (model == "9" || model == "8" || model == "7")
                {
                     x = x + 60;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
            else
                 {
                     x = x + 50;
                     if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                 }
        }
    if (phone == "oneplus")
        {
            if (model == "8" || model == "8t" || model == "8pro")
                {
                    x = x + 80;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
            else
                 if (model == "7" || model == "7t" || model == "7pro")
                {
                    x = x + 70;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
            else
                 if (model == "6" || model == "6t")
                {
                    x = x + 60;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
            else
                {
                    x = x + 50;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
        }
    if (phone == "motorola")
        {
                    x = x + 40;
                    if( cover == "hardcase")
                        {
                            x = x + 60;
                        }
                    if( cover == "plastic")
                        {
                            x = x + 40;
                        }
                    if( cover == "powerbanked")
                        {
                            x = x + 150;
                        }
                    if( cover == "hardsanded")
                        {
                            x = x + 100;
                        }
                }
push_total(x);
}

function push_total(x){
    localStorage.setItem("case_total",parseInt(x));
    localStorage.setItem("case_model",document.getElementById("model").value);
    localStorage.setItem("case_company",document.getElementById("type").value);
    localStorage.setItem("case_type",document.getElementById('cover').value);
    localStorage.setItem("case_bgcolor",document.getElementById("color").value);
    localStorage.setItem("image_file",document.getElementById("file").value);
}

var lastbtn = document.getElementById("payment");
lastbtn.onclick = function(){
    localStorage.setItem("object", document.getElementById("payment").value);
    calculate();
}