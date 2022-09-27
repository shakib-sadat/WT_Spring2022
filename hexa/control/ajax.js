function searchtasks() {
    //var taskname = document.getElementById("taskname").value;
    var xttp = new XMLHttpRequest();
    xttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("searchtaskresult").innerHTML = this.responseText;
        }
    };

    xttp.open("POST", "/insertdbdata/control/ajaxcontrol.php", true);
    xttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xttp.send("taskname =" + document.getElementById("taskname").value);
}