'use strict';
$(document).ready(function() {

    // $('#date,#datejoin').bootstrapMaterialDatePicker({
    //        time: false,
    //        clearButton: true
    //    });
    //  $("#example-date-inputS").bootstrapMaterialDatePicker({
    //                time: false,
    //                clearButton: true
    //            });

    $("#basic-forms").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        autoFocus: true
    });
    $("#verticle-wizard").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slide",
        stepsOrientation: "vertical",
        autoFocus: true
    });

    $("#design-wizard").steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        autoFocus: true
    });




    var form = $("#affilate_user_update_frm").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {

            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {

            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form.steps("previous");
            }
        },
        onFinishing: function(event, currentIndex) {

            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            // alert("Submitted!");
            form.submit();

            // $('.content input[type="text"]').val('');
            // $('.content input[type="email"]').val('');
            // $('.content input[type="password"]').val('');
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {

            element.after(error);
        },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });
    var form1 = $("#affiliate_business_edit").show();

    form1.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {

            // Allways allow previous action even if the current form1 is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form1.find(".body:eq(" + newIndex + ") label.error").remove();
                form1.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form1.validate().settings.ignore = ":disabled,:hidden";
            return form1.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {

            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form1.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form1.steps("previous");
            }
        },
        onFinishing: function(event, currentIndex) {

            form1.validate().settings.ignore = ":disabled";
            return form1.valid();
        },
        onFinished: function(event, currentIndex) {
            // alert("Submitted!");
            form1.submit();

            // $('.content input[type="text"]').val('');
            // $('.content input[type="email"]').val('');
            // $('.content input[type="password"]').val('');
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {

            element.after(error);
        },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });

    //adit form 09-07-19
    var form2 = $("#affilate_user_add_frm").show();

    form2.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {

            // Allways allow previous action even if the current form2 is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                form2.find(".body:eq(" + newIndex + ") label.error").remove();
                form2.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form2.validate().settings.ignore = ":disabled,:hidden";
            return form2.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {

            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                form2.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                form2.steps("previous");
            }
        },
        onFinishing: function(event, currentIndex) {

            form2.validate().settings.ignore = ":disabled";
            return form2.valid();
        },
        onFinished: function(event, currentIndex) {
            // alert("Submitted!");
            form2.submit();

            // $('.content input[type="text"]').val('');
            // $('.content input[type="email"]').val('');
            // $('.content input[type="password"]').val('');
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {

            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });


    //add form for business module 12-07-2019
    var add_cust = $("#customer_add_frm").show();

    add_cust.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {

            // Allways allow previous action even if the current add_cust is not valid!
            if (currentIndex > newIndex) {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18) {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex) {
                // To remove error styles
                add_cust.find(".body:eq(" + newIndex + ") label.error").remove();
                add_cust.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            add_cust.validate().settings.ignore = ":disabled,:hidden";
            return add_cust.valid();
        },
        onStepChanged: function(event, currentIndex, priorIndex) {

            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18) {
                add_cust.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3) {
                add_cust.steps("previous");
            }
        },
        onFinishing: function(event, currentIndex) {

            add_cust.validate().settings.ignore = ":disabled";
            return add_cust.valid();
        },
        onFinished: function(event, currentIndex) {
            // alert("Submitted!");
            add_cust.submit();

            // $('.content input[type="text"]').val('');
            // $('.content input[type="email"]').val('');
            // $('.content input[type="password"]').val('');
        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) {

            element.after(error);
        },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });

});
