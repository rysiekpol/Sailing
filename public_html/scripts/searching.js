function fill(Value) {
    $('#search').val(Value);
    $('#searchGalery').hide();
}
$(document).ready(function () {
    $("#search").keyup(function () {
        var image = $('#search').val();
        if (image == "") {
            $("#searchGalery").html("");
        }
        else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    search: image
                },
                success: function (html) {
                    $("#searchGalery").html(html).show();
                }
            });
        }
    });
});