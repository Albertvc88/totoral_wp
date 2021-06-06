jQuery(document).ready(function ($) {
    $(".btn-intro").on("click", function(){
        var dataId = $(this).attr("data-id");
        console.log(dataId)
        jQuery.ajax({
            type: "post",
            url: ajax_var.url,
            data: "action=" + ajax_var.action + "&nonce=" + ajax_var.nonce+ "&id=" + $(this).attr("data-id"),
            success: function(result){
                $('#my-events-list').html(result);
            }
        });
    });
});