    // Here is an amazing vid that will give an idea about what is happening below
    // www.youtube.com/watch?v=rJesac0_Ftw&t=1074s


    function getPlaceName() {
        var place = document.getElementById("myText").value;
        var mapRequest = new XMLHttpRequest();
        mapRequest.open('GET', 'https://maps.googleapis.com/maps/api/geocode/json?address=' + place + '&key=AIzaSyCf5Bci0EX_JeN0lCDW-WCYuMeqQgz-rPI');
        mapRequest.onload = function () {
            var placeData = JSON.parse(mapRequest.responseText).results[0].address_components;
            var fullName = "";
            for (i = 0; i < placeData.length; i++) {
                fullName += placeData[i].long_name + ", ";
            }
            document.getElementById("printedResult").innerHTML = fullName;
            document.getElementById("printedResult2").innerHTML = JSON.parse(mapRequest.responseText).results[0].formatted_address;
            document.getElementById("cards").style.display = "flex";

        }
        mapRequest.send();
    }
    document.getElementById('myText').onkeypress = function (e) {
        if (e.keyCode == 13) {
            document.getElementById('botn').click();
        }
    }
