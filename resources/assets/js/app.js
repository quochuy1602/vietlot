/**
 * Created by chuong on 10/23/2016.
 */
$(document).ready(function(){
    console.log( "ready!" );

    $.ajax({
        url: "http://localhost/demo/blog/public/api/register",
        dataType: "json",
        type: "POST",
        data: {"name":"HD","email":"test@gmail.com","password":"123456"},
        success: function (data) {
            alert("user created successfully")
        }
    });
});