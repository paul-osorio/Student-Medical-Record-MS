$(document).ready(function(){

   $('#search_nurse').keyup(function(){
      
      var search = $('#search_nurse').val();

      $('.card_container').load('./php_ajax/search_nurse.php', {
         search:search
      });

   });


   $('#filter_nurse').change(function(){
      
      var sort = $('#filter_nurse').val();

      $('.card_container').load('./php_ajax/sort_nurse.php', {
         sort:sort
      });

   });

});