function loginUser() {
  // document.user_form.action = "https://bxf517wsga.execute-api.us-east-1.amazonaws.com/default/reCaptcha_prod?returnUrl=https://www.thinksys.com/thank-you";
  document.user_form.action =
    'https://bxf517wsga.execute-api.us-east-1.amazonaws.com/Prod/reCaptcha_prod_ver01?returnUrl=https://www.thinksys.com/thank-you'
}

var emailPattern = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
var clear
var msgDuration = 2000
var $alertMessage = ''
var $msg = $('.error-msg')

function render(message) {
  hide()
  switch (message) {
    case 'warning':
      $msg.addClass('msg-danger active').text($alertMessage)
      break
  }
}

function timer() {
  clearTimeout(clear)
  clear = setTimeout(function () {
    hide()
  }, msgDuration)
}

function hide() {
  $msg.removeClass('msg-success msg-danger msg-warning msg-info active')
}

$('#contactSubmit').click(function () {
  $('#contactBtn').trigger('click')
})

// Validation
var code
const createCaptcha = () => {
  //clear the contents of captcha div first
  document.getElementById('captcha').innerHTML = ''
  var charsArray =
    '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*'
  var lengthOtp = 6
  var captcha = []
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1) //get the next character from the array
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index])
    else i--
  }
  var canv = document.createElement('canvas')
  canv.id = 'captcha'
  canv.width = 100
  canv.height = 50
  var ctx = canv.getContext('2d')
  ctx.font = '25px Georgia'
  ctx.strokeText(captcha.join(''), 0, 30)
  //storing captcha so that can validate you can save it somewhere else according to your specific requirements
  code = captcha.join('')
  document.getElementById('captcha').appendChild(canv) // adds the canvas to the body element
}

$('#contactForm').on('submit', function (e) {
  e.preventDefault()

  var assistanceservice = []
  $.each($("input[name='assistservice']:checked"), function () {
    assistanceservice.push($(this).val())
  })
  assistanceservice = assistanceservice.join(', ')

  // console.log(assistanceservice);
  var contactformdata = {
    Thanks: $.trim($('#contactForm #Thanks').val()),
    name: $.trim($('#contactForm #name').val()),
    email: $.trim($('#contactForm #email').val()),
    number: $.trim($('#contactForm #number').val()),
    designation: $.trim($('#contactForm #designation').val()),
    organization: $.trim($('#contactForm #organization').val()),
    country: $.trim($('#contactForm #country').val()),
    message: $.trim($('#contactForm #message').val()),
    assistanceservice: assistanceservice.toString(),
  }
  // console.log(captchaResponse.length);

  var emailFormatContact = emailPattern.test(contactformdata.email)
  if (
    contactformdata.name === null ||
    contactformdata.name === '' ||
    contactformdata.name === undefined
  ) {
    $alertMessage = 'Please Enter Name'
    render('warning')
    return
  } else if (
    contactformdata.email === null ||
    contactformdata.email === '' ||
    contactformdata.email === undefined
  ) {
    $alertMessage = 'Please Enter Email'
    render('warning')
    return
  } else if (!emailFormatContact) {
    $alertMessage = 'Please Enter Valid Email'
    render('warning')
    return
  } else if ($('#contactForm #number').val() == '') {
    $alertMessage = 'Please Enter Mobile Number'
    render('warning')
  } else if ($('#contactForm #number').val().length != 10) {
    $alertMessage = 'Please Enter correct Mobile Number'
    render('warning')
  } else if (
    contactformdata.designation === null ||
    contactformdata.designation === '' ||
    contactformdata.designation === undefined
  ) {
    $alertMessage = 'Please Enter Designation'
    render('warning')
    return
  } else if (
    contactformdata.organization === null ||
    contactformdata.organization === '' ||
    contactformdata.organization === undefined
  ) {
    $alertMessage = 'Please Enter Organization'
    render('warning')
    return
  } else if (
    contactformdata.message === null ||
    contactformdata.message === '' ||
    contactformdata.message === undefined
  ) {
    $alertMessage = 'Please Enter Message'
    render('warning')
    return
  } else if (!$('#contactForm #contact_term').is(':checked')) {
    $alertMessage = 'Please accept Terms'
    render('warning')
  } else if ('#contactForm #cpatchaTextBox'.value !== code) {
    $alertMessage = 'Please Enter Captcha'
    render('warning')
    createCaptcha()
    return
  } else {
    $('#contactForm')[0].submit()
    //  var getInTouch = $.ajax({
    //     type: "post",
    //     url: $("#contactForm").attr("action"),
    //     dataType: "json",
    //     data: contactformdata,
    //     success: function (succ) {
    //       console.log('succ ', succ);
    //       $("#contact_term").prop("checked", false);
    //        contactformdata = {
    //         name: $("#name").val(''),
    //         email: $("#email").val(''),
    //         number: $("#number").val(''),
    //         designation: $("#designation").val(''),
    //         organization: $("#organization").val(''),
    //         country: $("#country").val(''),
    //         message: $("#message").val(''),
    //         assistanceservice: $("input[name='assistservice']:checked")
    //           .prop("checked", false)
    //       }
    //       grecaptcha.reset();
    //       $('#formregistration').modal('show');
    //       setTimeout(function () {
    //         $('#formregistration').modal('hide');
    //       }, 2000);
    //     },
    //     error: function (error) {
    //       console.log('error ', error)
    //     }
    //   })

    //   getInTouch.done(function(data) {
    //     console.log('data ',data);
    //   });
    //   getInTouch.fail(function(jqXHR, textStatus) {
    //     console.log(`jqXHR: ${jqXHR} textStatus ${textStatus}`);
    //   });
    grecaptcha.reset()
  }

  return false
})
function ccb(response) {
  // document.getElementById("contact-submit").disabled = false;
  return new Promise(function (resolve, reject) {
    //Your code logic goes here

    //Instead of using 'return false', use reject()
    //Instead of using 'return' / 'return true', use resolve()
    resolve()
  }) //end promise
}
