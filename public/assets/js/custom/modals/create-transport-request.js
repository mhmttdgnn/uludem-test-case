var submitButton = $('button[data-kt-stepper-action="submit"]');
// Stepper lement
var element = document.querySelector("#transport_request_stepper");

// Initialize Stepper
var stepper = new KTStepper(element);

// Handle next step
stepper.on("kt.stepper.next", function (stepper) {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on("kt.stepper.previous", function (stepper) {
    stepper.goPrevious(); // go previous step
});

stepper.on("kt.stepper.changed", function (stepper) { 
    if (stepper.getCurrentStepIndex() == 4) {
        submitButton.show();
    } else {
        submitButton.hide();
    }
});

$(submitButton).on('click', function () {

    submitButton.attr("data-kt-indicator", "on");

    let formData = $('#transport_request_form').serialize();

    $.ajax({
        type: "POST",
        url: "/bicozum-express/store",
        data: formData,
        success: function (response) {
            if (response) {
                console.log(response);
                submitButton.removeAttr("data-kt-indicator");
            }
        },
        error: function (xhr) { 
            console.log(xhr.responseText);
         }
    });
});

