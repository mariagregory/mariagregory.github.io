$(document).ready(function() {

//Email Ajax Send
    $("form").submit( function() {         // Change
        var th = $(this);
        $.ajax(
            {   type: "post",
                url="mail.php", //Change
                data: th.serialize()
            }).done(function() {
                    alert("Thank you!");     // Change on some div in html
                    setTimeout(function() {
                        // Done Functions. Can add a redirect function to open "Thank you" page
                        th.trigger("reset");  // Reset the form.
                    }, 1000);
                });
            return false;
    });

});