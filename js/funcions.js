function ajaxRequest(element, action){

    $.ajax({type: "GET", url: "?action=" + action, success:
            function (result) { $('#'+element).html(result);}
    });

}