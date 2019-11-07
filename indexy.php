<html>
<form name="myform" id="myForm">
    <select name="optone" id="stateSel" size="1">
        <option value="" selected="selected">Select state</option>
    </select>
    <br>
    <br>
    <select name="opttwo" id="area" size="1">
        <option value="" selected="selected">Please select state first</option>
    </select>
    <br>
    <br>
    <select name="optthree" id="citySel" size="1">
        <option value="" selected="selected">Please select county first</option>
    </select>
</form>

<script>
var stateObject = {
    "Jawa Timur": {
        "JTM-1": ["Kota Malang","Kota Batu","Kabupaten Malang","Kabupaten Pasuruan","Kota Pasuruan"]
     
    }
}
window.onload = function () {
    var stateSel = document.getElementById("stateSel"),
        countySel = document.getElementById("area"),
        citySel = document.getElementById("citySel");
    for (var state in stateObject) {
        stateSel.options[stateSel.options.length] = new Option(state, state);
    }
    stateSel.onchange = function () {
        countySel.length = 1; // remove all options bar first
        citySel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) {
          countySel.options[0].text = "Please select state first"
          citySel.options[0].text = "Please select county first"
          return; // done   
        }  
        countySel.options[0].text = "Please select county"
        for (var county in stateObject[this.value]) {
            countySel.options[countySel.options.length] = new Option(county, county);
        }
        if (countySel.options.length==2) {
          countySel.selectedIndex=1;
          countySel.onchange();
        }  
        
    }
    stateSel.onchange(); // reset in case page is reloaded
    countySel.onchange = function () {
        citySel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) {
          citySel.options[0].text = "Please select county first"
          return; // done   
        }  
        citySel.options[0].text = "Please select city"
        
        var cities = stateObject[stateSel.value][this.value];
        for (var i = 0; i < cities.length; i++) {
            citySel.options[citySel.options.length] = new Option(cities[i], cities[i]);
        }
        if (citySel.options.length==2) {
          citySel.selectedIndex=1;
          citySel.onchange();
        }  
        
    }
}
</script>
</html>