$(document).ready(function(){
    $("#submit-button").click(function () {
        var userId = $("#userId").val();
        var password = $("#password").val();
        $.ajax({
            type: 'POST',
            url: 'result.php',
            data: {
                userId: userId,
                password: password,
            },
            success: function(response) {
                var $final = response.userId+" "+response.password;
                // Display values
                alert($final);

            }
        });
    });
});

