
function get_driver(str) {
if (str == "") {
    document.getElementById("txtDriver").innerHTML = "";
    return;
} else { 
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtDriver").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","get_driver_model.php?driver="+str,true);
    xmlhttp.send();
  }
}

function get_wood(str) {
if (str == "") {
    document.getElementById("txtWood").innerHTML = "";
    return;
} else { 
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtWood").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","get_wood_models.php?wood="+str,true);
    xmlhttp.send();
  }
}

function get_hybrid(str) {
if (str == "") {
    document.getElementById("txtHybrid").innerHTML = "";
    return;
} else { 
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("txtHybrid").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","get_hybrid_models.php?hybrid="+str,true);
    xmlhttp.send();
  }
}