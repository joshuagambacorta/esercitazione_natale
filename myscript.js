$( document ).ready(function() {

    $("#exampleFormControlSelect0").val("option")
    $(".if_concerto_is_set").hide();
    $("#purchase").prop("disabled",true);
    $("small").hide();
    $("#not_disponibility").hide();

    $('#exampleFormControlSelect0').on('change', function() {
        $("#not_disponibility").hide();
        $("#name"). val("")
        $("#surname"). val("")
        $("#n_tickets"). val("1")
        $(".if_concerto_is_set").fadeIn();
        var concerto =  $('#exampleFormControlSelect0').val()
        $.ajax({
            url: './get_disponibility.php',
            method: 'POST',
            data: {
                concerto: concerto,
            },
            success: function(response) {
                if(response <= 0){
                    $(".if_concerto_is_set").hide();
                    $("#not_disponibility").show();
                }
            },
            error: function(error){
                console.log(error);
            }
        });
        $.ajax({
            url: './get_info.php',
            method: 'POST',
            data: {
                concerto: concerto,
            },
            success: function(response) {
                console.log(response)
                $("#info_concert").html(response);
            },
            error: function(error){
                console.log(error);
            }
        });
    });

    $("#name").focus(function() {
        $("#errorName").hide();
    });

    $("#name").blur(function() {
        if(/^[a-zA-Z ]+$/.test($("#name").val()) == false){
            $("#errorName").show();
            $("#purchase").prop('disabled', true);
        } else if (/^[a-zA-Z ]+$/.test($("#surname").val()) == true){
            $("#purchase").prop('disabled', false);
        }
    });

    $("#surname").focus(function() {
        $("#errorSurname").hide();
    });

    $("#surname").blur(function() {
        if(/^[a-zA-Z ]+$/.test($("#surname").val()) == false){
            $("#errorSurname").show();
            $("#purchase").prop('disabled', true);
        } else if (/^[a-zA-Z ]+$/.test($("#name").val()) == true){
            $("#purchase").prop('disabled', false);
        }
    });

});