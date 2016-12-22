 $(function () { 
     $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); 
     
     $('.button').click(function(){
        $('.result').css('display','block');
         $('.result').addClass('animated zoomIn');
         
         var getSum = $(".form-control").val();
         
         var usdEur = (getSum * $('li#n1').text());
         
         var usdRub = (getSum * $('li#n2').text());
         var usdUah = (getSum * $('li#n3').text());
         var usdZl = (getSum * $('li#n4').text());
         var eurUsd = (getSum * $('li#n5').text());
         var eurRub = (getSum * $('li#n6').text());
         var rubUsd = (getSum * $('li#n7').text());
         var rubEur = (getSum * $('li#n8').text());
         var uahUsd = (getSum * ($('li#n9').text())*10);
         var zlUsd = (getSum * $('li#n10').text());
         
switch ($('.moneyselect').val()) {
   case '1':
      $('.res').text(usdEur.toFixed(3) +' EUR');
      break
   case '2':
      $('.res').text(usdRub +' RUB');
      break
   case '3':
      $('.res').text(usdUah.toFixed(1) +' UAH');
      break
   case '4':
      $('.res').text(usdZl.toFixed(2) +' ZL');
      break
   case '5':
      $('.res').text(eurUsd.toFixed(3) +' USD');
      break
   case '6':
      $('.res').text(eurRub.toFixed(1) +' RUB');
      break
    case '7':
      $('.res').text(rubUsd.toFixed(3) +' USD');
      break
   case '8':
      $('.res').text(rubEur.toFixed(1) +' EUR');
      break
   case '9':
      $('.res').text(uahUsd.toFixed(4) +' USD');
      break
   case '10':
      $('.res').text(zlUsd.toFixed(2) +' USD');
      break
   default:
      console.log('def');
      break
}
         
         function HeightDetected(){
        var height = $(window).height();
        $('.wrapper').css('height',height);
    }
        HeightDetected();
         
          $(window).resize(function(){
        HeightDetected();
    })
         
     });
     
     
     
     $('.fa-times').click(function(){
         $('.result').addClass('animated zoomOut');
         setTimeout(function(){
            $('.result').css('display','none');
             $('.result').removeClass('animated zoomOut');
             $('.result').removeClass('animated zoomIn');
         },500);
         
     });

     
 } );