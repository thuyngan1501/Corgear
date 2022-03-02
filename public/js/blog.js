$(document).ready(function () {
    
    $('#img-aq').click(function () {
        location.href = "/product";
    });
    $('.post-thumb').click(function () {
        location.href = "./blog/detail?title=" + e.target.parentNode.parentNode.title   ;
    });
    $(".page-link").click(function(){
        var id = $(this).attr("data-id");
        var select_id = $(this).parent().attr("id");
        $.ajax({
            url: "pagination.php",
            type: "GET",
            data: {
                page : id
            },
            cache: false,
            success: function(dataResult){
                $("#target-content").html(dataResult);
                $(".pageitem").removeClass("active");
                $("#"+select_id).addClass("active");
                
            }
        });
    }); 

});