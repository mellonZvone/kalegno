$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    var name = $("#form_name").val();
    var email = $("#form_email").val();
    var message = $("#form_message").val();

    $.ajax({
        type: "POST",
        url: "php/contact.php",
        data: "form_name=" + name + "&form_email=" + email + "&form_message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });

}

function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );

}