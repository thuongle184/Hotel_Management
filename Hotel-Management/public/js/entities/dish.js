$(function(){

  $('.my-dish-delete').on('click', function(e) {
    e.preventDefault();

    $dishDelete = $(this);
    $dish = $dishDelete.closest('.my-dish');
    $dishType = $dish.closest('.my-dish-type');
    dishLabel = $dish.find('.my-filter-target').text();


    $.ajax({
      
      url: $dishDelete.attr('data-url'),
      method: 'delete',
      
      data: {
        _token: $dishDelete.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {

          $dish.remove();

          if($dishType.find('.my-dish').length < 1) {
            $dishType.remove();
          }
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`<i>"${dishLabel}"</i> has successfully been deleted`);

        } 


        else {
          
          $('#my-entity-delete-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete <i>"${dishLabel}"</i>`);

        }

      },
      

      error: function (error) {
        
        $('#my-entity-delete-status')
          .addClass('my-entity-delete-status-ko')
          .removeClass('d-none')
          .text(error);
      
      },


      complete: function () {
        resizeLayout();
      }

    });
  });

  $('.my-dish-discard-picture').on('click', function(e) {
    e.preventDefault();

    $('.my-frame').removeClass('my-margin-top-40');
    
    $dishDiscardPicture = $(this);


    $.ajax({
      
      url: $dishDiscardPicture.attr('data-url'),
      method: 'patch',
      
      data: {
        _token: $dishDiscardPicture.attr('data-token')
      },
      

      success : function(data) {

        if(data === "ok") {

          $('.my-dish-image').remove();
          $dishDiscardPicture.remove();

          $('#my-dish-discard-picture-status')
            .addClass('my-entity-delete-status-ok')
            .removeClass('d-none')
            .html(`Picture has successfully been deleted`);

        } 


        else {
          
          $('#my-dish-discard-picture-status')
            .addClass('my-entity-delete-status-ko')
            .removeClass('d-none')
            .html(`Something went wrong when attempting to delete the picture`);

        }

      },
      

      error: function (error) {
        
        $('#my-dish-discard-picture-status')
          .addClass('my-entity-delete-status-ko')
          .removeClass('d-none')
          .text(error);
      
      }

    });
  });

});

