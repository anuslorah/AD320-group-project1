//
// function val() {
//     clearForm();
//     var bool = true;        // Sets boolean value to true.
//
//     //Creating variable names
//
//     var name = document.forms["form"]["name"].value;
//     var email = document.forms["form"]["email"].value;
//
//     //Checks to see if values are null or empty
//
//     if (name==null || name==""){
//         document.getElementById('nameReq').innerHTML = "*Required";
//         bool = false;
//     }
//     if (email==null || email==""){
//         document.getElementById('emailReq').innerHTML = "*Required";
//         bool = false;
//     }
//
//     return bool;
// }
//
//
// function clearForm() {
//     document.getElementById('nameReq').innerHTML = "";
//     document.getElementById('emailReq').innerHTML = "";
//     console.log("clear function");
// }
//



        //make sure form name matches

        function custInfo(){
            var name = document.ThereData.elements[0].value
            var streetAddress = document.ThereData.elements[1].value
            var city = document.ThereData.elements[2].value
            var zip = document.ThereData.elements[3].value
            var phone = document.ThereData.elements[4].value
            var happyHour = document.ThereData.elements[5].value
            var awesome = document.ThereData.elements[6].value

            alert("name is " + name)
            alert("streetAddress is " + streetAddress)
            alert("city is " + city)
            alert("zip is " + zip)
            alert("phone is " + phone)
            alert("happyHour is " + happyHour)
            alert("awesome is " + awesome)

        }

    //-->
