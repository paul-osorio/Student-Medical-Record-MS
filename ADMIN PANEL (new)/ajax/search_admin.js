$(document).ready(function(){

   $('#search_admin').keyup(function(){
      
      var search = $('#search_admin').val();

      $('.admins_table_details').load('./php_ajax/search_admin.php', {
         search:search
      });

   });


   $('#filter_admin').change(function(){
      
      var sort = $('#filter_admin').val();

      $('.admins_table_details').load('./php_ajax/sort_admin.php', {
         sort:sort
      });

   });

});