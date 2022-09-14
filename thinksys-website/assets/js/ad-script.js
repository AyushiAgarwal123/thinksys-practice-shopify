;(function () {
  'use strict'
  $.MixItUp = function () {
    var self = this
    self._execAction('_constructor', 0)
    $.extend(self, {
      controls: {
        enable: !0,
        live: !1,
        toggleFilterButtons: !1,
        toggleLogic: 'or',
        activeClass: 'active',
      },
    })
    self._execAction('_constructor', 1)
  }
})(jQuery)
$(document).ready(function () {
  $('.emailer').css('display', 'none')
  $('.EmailerCta').on('click', function () {
    $('.UndertoneCta').addClass('disabled')
    $('.EmailerCta').removeClass('disabled')
    $('.emailer').css('display', 'block')
    $('.undertone').css('display', 'none')
  })
  $('.UndertoneCta').on('click', function () {
    $('.EmailerCta').addClass('disabled')
    $('.UndertoneCta').removeClass('disabled')
    $('.emailer').css('display', 'none')
    $('.undertone').css('display', 'block')
  })
  $('.controls button').on('click', function () {
    $('.controls button').removeClass('active')
    $(this).addClass('active')
  })
  $('.PageGrabberTab').on('click', function () {
    $('.BottomAdhesion, .Screenshift, .ExpandableAdhesion, .Complex')
      .removeClass('animate animateTwo')
      .addClass('animateTwo')
      .hide()
    $('.PageGrabber')
      .removeClass('animate animateTwo')
      .addClass('animate')
      .show()
  })
  $('.BottomAdhesionTab').on('click', function () {
    $('.PageGrabber, .Screenshift, .ExpandableAdhesion, .Complex')
      .removeClass('animate animateTwo')
      .addClass('animateTwo')
      .hide()
    $('.BottomAdhesion')
      .removeClass('animate animateTwo')
      .addClass('animate')
      .show()
  })
  $('.ScreenshiftTab').on('click', function () {
    $('.BottomAdhesion, .PageGrabber, .ExpandableAdhesion, .Complex')
      .removeClass('animate animateTwo')
      .addClass('animateTwo')
      .hide()
    $('.Screenshift')
      .removeClass('animate animateTwo')
      .addClass('animate')
      .show()
  })
  $('.ExpandableAdhesionTab').on('click', function () {
    $('.BottomAdhesion, .Screenshift, .PageGrabber, .Complex')
      .removeClass('animate animateTwo')
      .addClass('animateTwo')
      .hide()
    $('.ExpandableAdhesion')
      .removeClass('animate animateTwo')
      .addClass('animate')
      .show()
  })
  $('.ComplexTab').on('click', function () {
    $('.BottomAdhesion, .Screenshift, .PageGrabber, .ExpandableAdhesion')
      .removeClass('animate animateTwo')
      .addClass('animateTwo')
      .hide()
    $('.Complex').removeClass('animate animateTwo').addClass('animate').show()
  })
  $('.AllTab').on('click', function () {
    $(
      '.BottomAdhesion, .Screenshift, .PageGrabber, .ExpandableAdhesion, .Complex'
    )
      .removeClass('animate animateTwo')
      .addClass('animate')
      .show()
  })
})
