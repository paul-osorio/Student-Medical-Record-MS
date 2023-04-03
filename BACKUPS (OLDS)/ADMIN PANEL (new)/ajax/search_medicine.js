$(document).ready(function(){

   $('#search_meds').keyup(function(){
      
      var search = $('#search_meds').val();

      $('.accordion').load('./php_ajax/search_medicine.php', {
         search:search
      });

   });


   $('#filter').change(function(){
      
      var sort = $('#filter').val();

      $('.accordion').load('./php_ajax/sort_medicine.php', {
         sort:sort
      });

   });

});