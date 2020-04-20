$( document ).ready(function() {
    console.log("SS");
    //setup before functions
    var typingTimer;                //timer identifier
    var doneTypingInterval = 1000;  //time in ms, 5 second for example
    var $input = $('#scheme');

    //on keyup, start the countdown
    $input.on('keyup', function () {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(doneTyping, doneTypingInterval);
    });

    //on keydown, clear the countdown 
    $input.on('keydown', function () {
    clearTimeout(typingTimer);
    });

    //user is "finished typing," do something
    function doneTyping () {
        console.log("Done");
        getValues();
    }



    function getValues () {
        var schemeName = $("#scheme").val();

        $('#currentStatus').load('./src/php/main.php', {
            schemeName: schemeName,
            currentStatus: true
        }, function (res, status) {
            if (res != "") {
                $("#currentStatus").val(res);
                $("#changeBtn").html('<button name="update_form" class="btn w-50 btn-primary mb-3">Update</button>');
            } else {
                $("#currentStatus").val("");
                $("#changeBtn").html('<button name="submit_form" class="btn w-50 btn-primary mb-3">Submit</button>');
            }
        });



        $('#description').load('./src/php/main.php', {
            schemeName: schemeName,
            description: true
        }, function (res, status) {
            if (res != "") {
                CKEDITOR.instances['description'].setData(res);
            } else {
                CKEDITOR.instances['description'].setData("");
            }
        });


        $('#editor').load('./src/php/main.php', {
            schemeName: schemeName,
            proposed_target: true
        }, function (res, status) {
            if (res != "") {
                CKEDITOR.instances['editor'].setData(res);
            } else {
                CKEDITOR.instances['editor'].setData("");
            }
        });


        $('#editor2').load('./src/php/main.php', {
            schemeName: schemeName,
            future_target: true
        }, function (res, status) {
            if (res != "") {
                CKEDITOR.instances['editor2'].setData(res);
            } else {
                CKEDITOR.instances['editor2'].setData("");
            }
        });



    }
});



