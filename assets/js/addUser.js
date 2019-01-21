/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali & MD Azizul Hoque Rimon
 */

$(document).ready(function(){
	
	var addUserForm = $("#addUser");
	var addNewsForm = $("#addNews");
	var addEventForm = $("#addEvent");
	var uploadNoticeForm = $("#uploadNotice");

	var validator = addUserForm.validate({
		rules:{
			fname :{ required : true },
			email : { required : true, email : true, remote : { url : baseURL + "checkEmailExists", type :"post"} },
			password : { required : true },
			cpassword : {required : true, equalTo: "#password"},
			mobile : { required : true, digits : true },
			role : { required : true, selected : true}
		},
		messages:{
			fname :{ required : "This field is required" },
			email : { required : "This field is required", email : "Please enter valid email address", remote : "Email already taken" },
			password : { required : "This field is required" },
			cpassword : {required : "This field is required", equalTo: "Please enter same password" },
			mobile : { required : "This field is required", digits : "Please enter numbers only" },
			role : { required : "This field is required", selected : "Please select atleast one option" }			
		}
	});

    var validator = addNewsForm.validate({

        rules:{
            news_title :{ required : true },
            news_details :{ required : true },
        },
        messages:{
            news_title :{ required : "This field is required" },
            news_details :{ required : "This field is required" },
        }
    });

    var validator = uploadNoticeForm.validate({

        rules:{
            notice_title :{ required : true },
        },
        messages:{
            notice_title :{ required : "This field is required" },
        }
    });

    var validator = addEventForm.validate({

        rules:{
            event_title :{ required : true },
            event_type :{ required : true },
            event_details :{ required : true },
            event_date :{ required : true },
        },
        messages:{
            event_title :{ required : "This field is required" },
            event_type :{ required : "This field is required",selected : "Please select atleast one option"  },
            event_details :{ required : "This field is required" },
            event_date :{ required : "This field is required" },
        }
    });
    $('.form_datetime').datetimepicker({
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1,
        minuteStep: 15,
        pickerPosition: "bottom-left"
    });

});

$(document).on("focusin", "#event_date", function() {
    $(this).prop('readonly', true);
});

$(document).on("focusout", "#event_date", function() {
    $(this).prop('readonly', false);
});

$("#image_upload").on('change', function () {

    //Get count of selected files
    var countFiles = $(this)[0].files.length;

    var imgPath = $(this)[0].value;
    var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
    var image_holder = $("#image-holder");
    image_holder.empty();

    if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
        if (typeof (FileReader) != "undefined") {

            //loop for each file selected for uploaded.
            for (var i = 0; i < countFiles; i++) {

                var reader = new FileReader();
                reader.onload = function (e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "thumb-image",
						"width":"100",
						"height":"100"
                    }).appendTo(image_holder);
                }

                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
            }

        } else {
            alert("This browser does not support FileReader.");
        }
    } else {
        alert("Pls select only images");
    }
});