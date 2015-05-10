
// registration.js
// ====================================================================
// Initialize Employee registration wizard
//

$(document).ready(function() {


    // CHOSEN Multi-Select and Select 
    // =================================================================
    // Require Chosen
    // http://eternicode.github.io/bootstrap-datepicker/
    // =================================================================
    $('.chosen-multi-select').chosen({width:'100%'});
    $('.chosen-select').chosen({width:'100%'});
    
    
    // DATEPICKER
    // =================================================================
    // Require Bootstrap Datepicker
    // http://eternicode.github.io/bootstrap-datepicker/
    // =================================================================
    $('.input-group.date').datepicker({
        startView: 2,
        autoclose: true
    });
    

    // SWITCHERY
    // =================================================================
    // Require Switchery
    // http://abpetkov.github.io/switchery/
    // =================================================================
    // Find all the checkboxes on the page
    // and put them in an array
    var checkBoxArray = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    // Go through the Array and assign a switchery instance
    // to each checkbox
    checkBoxArray.forEach(function(html) {
        var switchery = new Switchery(html,{color:'#2cd0a7'});
    });


	// FORM WIZARD WITH VALIDATION
	// =================================================================
    $('#customer-registration-wizard').bootstrapWizard({
		tabClass		: 'wz-classic',
		nextSelector	: '.next',
		previousSelector	: '.previous',
		onTabClick: function(tab, navigation, index) {
			return true;
		},
		onInit : function(){
			$('#customer-registration-wizard').find('.finish').hide().prop('disabled', true);
		},
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;
            var $percent = ($current/$total) * 100;
            var wdt = 100/$total;
            var lft = wdt*index;
            $('#customer-registration-wizard').find('.progress-bar').css({width:$percent+'%'});


            // If it's the last tab then hide the last button and show the finish instead
			if($current >= $total) {
				$('#customer-registration-wizard').find('.next').hide();
				$('#customer-registration-wizard').find('.finish').show();
				$('#customer-registration-wizard').find('.finish').prop('disabled', false);
			} else {
				$('#customer-registration-wizard').find('.next').show();
				$('#customer-registration-wizard').find('.finish').hide().prop('disabled', true);
			}
		},
		onNext: function(){
			isValid = null;
			$('#customer-registration-wizard-form').bootstrapValidator('validate');

			if(isValid === false)return false;
		}

	});

    // If we are rerouted back because of errors this finds the hidden form field called wizard-stage
    // and lets us know how far we made it through the save process.
    // then it tells us which tab to start on accordingly.
    if (document.getElementById("wizard-stage").getAttributeNode("value") != null) {
        showTab = document.getElementById("wizard-stage").getAttributeNode("value").value;
        $('#wiz-tab'+showTab).trigger('click');
    }


	// LIVE FORM VALIDATION
	// =================================================================
	// Require Bootstrap Validator
	// http://bootstrapvalidator.com/
	// =================================================================
	var isValid;
	$('#customer-registration-wizard-form').bootstrapValidator({
		message: 'This value is not valid',
		feedbackIcons: {
		valid: 'fa fa-check-circle fa-lg text-success',
		invalid: 'fa fa-remove fa-lg',
		validating: 'fa fa-refresh'
		},
		fields: {
		username: {
			message: 'The username is not valid',
			validators: {
				notEmpty: {
					message: 'The username is required.'
				}
			}
		},
		email: {
			validators: {
				notEmpty: {
					message: 'The email address is required and can\'t be empty'
				},
				emailAddress: {
					message: 'The input is not a valid email address'
				}
			}
		},
        password: {
            validators: {
                notEmpty: {
                    message: 'The password can have alphabetical & numerical characters, spaces, as well as these special characters # $ ! % & * , . /'
                },
                regexp: {
                    regexp: /^[A-Z\s\0-9]+$/i,
                    message: 'The password must only consist of alphabetical & numerical characters, spaces, or # $ ! % & * , . / '
                },
                identical: {
                    field: 'password_confirmation',
                    message: 'Confirmation required'
                }
            }
        },
        password_confirmation: {
            validators: {
                notEmpty: {
                    message: 'Must not be empty'
                },
                identical: {
                    field: 'password',
                    message: 'Does not match'
                }
            }
        },
		first_name: {
			validators: {
				notEmpty: {
					message: 'The first name is required and cannot be empty'
				},
				regexp: {
					regexp: /^[A-Z\s]+$/i,
					message: 'The first name can only consist of alphabetical characters and spaces'
				}
			}
		},
		last_name: {
			validators: {
				notEmpty: {
					message: 'The last name is required and cannot be empty'
				},
				regexp: {
					regexp: /^[A-Z\s]+$/i,
					message: 'The last name can only consist of alphabetical characters and spaces'
				}
			}
		},
		address_street: {
			validators: {
				notEmpty: {
					message: 'The address is required'
				}
			}
		},
        address_city: {
            validators: {
                notEmpty: {
                    message: 'The city is required'
                }
            }
        },
        address_state: {
            validators: {
                notEmpty: {
                    message: 'The state is required'
                }
            }
        },
        address_zip: {
            validators: {
                notEmpty: {
                    message: 'The zip is required'
                }
            }
        },
        dob: {
            validators: {
                notEmpty: {
                    message: 'The date of birth is required'
                }
            }
        }

		}
	}).on('success.field.bv', function(e, data) {
		// $(e.target)  --> The field element
		// data.bv      --> The BootstrapValidator instance
		// data.field   --> The field name
		// data.element --> The field element

		var $parent = data.element.parents('.form-group');

		// Remove the has-success class
		$parent.removeClass('has-success');


		// Hide the success icon
		//$parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]').hide();
	}).on('error.form.bv', function(e) {
		isValid = false;
	});


    // MASKED INPUT
    // =================================================================
    // Require Masked Input
    // http://digitalbush.com/projects/masked-input-plugin/
    // =================================================================
    $('#phone').mask('(999) 999-9999');

});

