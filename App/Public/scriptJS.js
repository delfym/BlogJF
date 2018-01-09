
/*
$(console.log("input#inpCom".attr("value")));
*/
        console.log(document.getElementById('inpCom').getAttribute("value"));


/*

$("#contentOne").on('show.bs.modal', function (e) {
    var idReport = $(e.relatedTarget).data('idReport');

    $(e.currentTarget).find('input[name="idReport"]').val(idReport);
});


$(function(){
    $("#inpCom").submit(function(e) {
        var $form = $(this);
        $.post($form.attr("value"), $form.serialize())
            .done(function(data) {
                $("#inpCom").html(data);
            })
            .fail(function() {
                alert("Oups, un problème...");
            });
    });
});
*/

