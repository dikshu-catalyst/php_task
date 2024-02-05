$(document).ready(function(){
    $("#submit-button").click(function () {
        var id = $("#id").val();
        var userId = $("#userId").val();
        var password = $("#password").val();

        var formData = new FormData();
       formData.append("id", id);
       formData.append("userId",userId);
       formData.append("password",password);

       var fileInput = $("#upload_file")[0].files[0];
       formData.append("upload_file",fileInput);

        $.ajax({
            type: 'POST',
            url: 'result.php',
            data: formData,
            contentType: false,
            processData : false,  
            success: function(response) {
                alert(response);
            }
        });
    });
});

