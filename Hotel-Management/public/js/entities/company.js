$(function(){

  $('.my-company-delete').on('click', function(e) {
    e.preventDefault();

    $companyDelete = $(this);
    $company = $companyDelete.closest('.my-company');
    $user = $company.closest('.my-user');
    companyLabel = $company.find('.my-filter-target').text();


    $.ajax({
      
      url: $companyDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $companyDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {

          $company.remove();

          if($user.find('.my-company').length < 1) {
            $user.remove();
          }
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${companyLabel}"</i> has successfully been deleted`);

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${companyLabel}"</i>`);

        }

      },
      

      error: function (error) {
        
        $('#my-entity-delete-status')
          .addClass('my-entity-delete-status-ko')
          .removeClass('d-none')
          .text(error);
      
      }

    });
  });

});

