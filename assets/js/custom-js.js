$(document).ready(function(){

  $('#sliderOne').on('input', function() {
    slider = $('#sliderOne').val();
    output1 = $('#labelMoneyOne');
    output1.html(slider);
    outLabelSlide1 = slider;
    outputLabelTrepay = $('#labelTrepay');
    outputLabelTrepay.val('N'+outLabelSlide1);
  });

  $('#sliderTwo').on('input', function() {
    slider = $('#sliderTwo').val();
    output1 = $('#labelMoneyTwo');
    output1.html(slider);
    outLabelSlide2 = slider;
    outputLabelMrepay = $('#labelMrepay');
   
    outputLabelMrepay.val("N"+outLabelSlide2);
  });

  $('.custom-file > .custom-file-input').change(function(){
    $name = $(this).val();
    $input = '#'+$(this).attr('id');
    $length = $name.length;
    $newName = $name.substring(12, $length);
    $($input).siblings('label').html($newName);
  })

});


