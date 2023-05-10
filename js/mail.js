$(document).ready(function() {

    $(this).scrollTop(0);

    const $registerForm = $('#contactForm')
    let validator = void(0)

    if ($registerForm.length) {
        validator = $registerForm.validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                msg_subject: {
                    required: true,
                },
                message: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: 'Bitte geben Sie Ihren Vor- und Nachnamen ein.'
                },
                email: {
                    required: 'Bitte geben Sie Ihre E-Mail-Adresse ein.',
                    email: 'Ihre E-Mail-Adresse ist ungültig.'
                },
                msg_subject: {
                    required: 'Bitte geben Sie den Betreff Ihrer Nachricht ein.',
                },
                message: {
                    required: 'Bitte geben Sie Ihre Nachricht ein.'
                }
            },
            submitHandler: function submitHandler(form) {
                event.preventDefault();
                $.ajax({
                    url: '../sendemail.php',
                    method: 'POST',
                    data: new FormData(form),
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        let objResp = JSON.parse(data);
                        let str = objResp.type;
                        if (str === 'ERROR') {
                            str = objResp.data;
                            swal({
                                title: "ERROR",
                                text: str,
                                timer: 2500,
                                showCancelButton: false,
                                showConfirmButton: false,
                                type: "error"
                            });
                            return;
                        }

                        if (str === 'OK') {
                            str = objResp.data;
                            swal({
                                    title: "SUCCESS",
                                    text: str,
                                    showCancelButton: false,
                                    showConfirmButton: true,
                                    type: "success",

                                },
                                function(isConfirm) {
                                    $(location).attr('href', 'index.php');
                                }
                            );
                        }

                    }
                })
            }
        })
    }    
});