
$(document).ready(function(){
	// menu navigation
    $('[data-toggle="offcanvas"]').click(function(){
       $("#navigation").toggleClass("hidden-xs");
    });
	// select box
    $("#selectAll").click(function(){
        $('.case').prop('checked',this.checked);
    });
    $(".case").click(function(){
        if($(".case").length==$(".case:checked").length){
            $("#selectAll").prop('checked',true);
        }else{
            $("#selectAll").prop('checked', false);
        }
    });

    /*$("#deleteAll").click(function(){
        getListCheck();
        if(listId ==''){
            alert("Please choose item !");
        }else{
            listId = listId.substring(0, listId.length -1);
            var answer = confirm("Are you sure delete item");
            if (answer) {
                alert("List item delete"+listId);
            } else {
                return false;
            }
        }
    });*/
});
var listId="";
function getListCheck(){
    listId ="";
    $("input[name='selectId']").each(function(){
        if(this.checked){
            var value = $(this).val();
            listId += value + ",";
        }
    });
}
