// $(document).ready(function(){
//     $.ajax({
//         type: "POST",
//         url: "../../Controller/mainpageController.php",
//         data: "getUser",
//         success: function(data){
//             var splitedData = data.split("¡");
//             var temp;
//             console.log(temp);
//             $("#topName").html(splitedData[0]);
//             if (splitedData[1] == 1) {
//                 temp = "male";
//             } else if (splitedData[1] == 2) {
//                 temp = "female";
//             }
//             $("#genderDisplay").html(temp);
//             $("#ageDisplay").html(splitedData[2]);
//             $("#heightDisplay").html(splitedData[3]+"cm");
//             $("#weightDisplay").html(splitedData[4]+"kg");
//         }
//     })
// })