// alert(1);


//メニューリストの説明
$(function(){
    $(".menu a").hover(function() {
      $(this).next("span").animate({opacity: "show", top: "-50"}, "slow");}, function() {
        $(this).next("span").animate({opacity: "hide", top: "-80"}, "fast");
      });
  });

  $(function(){
    $('.btn').click(function(){
      var check_count = $('.div_class :checked').length;
      if (check_count == 0 ){
        alert('カテゴリ未選択です！')
        return false;
      }
    });
  });  

  
//ページトップへ移動
$(function(){
    $('.toTop').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });

  $(document).ready(function(){
    $('.header').spectrum();
  });
