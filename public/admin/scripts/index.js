//index JS


// timer
var siteURL='http://localhost:8000/';

var myVar = setInterval(function(){ myTimer() }, 1000);

function myTimer() {
    var d = new Date();
    var t = d.toLocaleTimeString();
    document.getElementById("timer").innerHTML = t;
}

$.ajaxSetup({
        headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});


function deleteUser(id,method) { 
 $.ajax({
  type: ""+method,
  url: siteURL+"admin/members/" + id,
  data: {
                "_token": document.getElementsByName(name).value,
                "id": id
            },
  			success: function( data ) {
              	window.location= 'members';  
            } 
});
 }



 function changeStatus(id,method,code) { 
 $.ajax({
  type: ""+method,
  url: siteURL+"admin/members/" + id,
  data: {
                _token: document.getElementsByName(name).value,
                id: id,
                statuscode : code
            },
        success: function( data ) {
                window.location= siteURL+'admin/members/'+id;  
            } 
});
 }