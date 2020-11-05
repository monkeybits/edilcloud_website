// (function($){
    // "use strict";

jQuery(document).ready(function ($) {

    $('.pix-multifields-meta').each(function(){
        pix_init_multifields($(this));
    });

    $(document).on("change", ".pix_fields_field", function (e) {
        pix_update_multifields($(this).closest('.pix-multifields-meta'));
    });

    $(document).on("click", ".pix-multi-fields-add", function (e) {
       e.preventDefault();
       var $button = $(this);
       var item = '<div class="pix-multifields-item">';
                item += '<input class="pix_item_title pix_fields_field" type="text" placeholder="Title" />';
                item += '<input class="pix_item_value pix_fields_field" type="text" placeholder="Value" />';
                item += '<a href="#" class="pix_field_remove">Delete</a>';
            item += '</div>';
       $button.siblings('.pix-multi-fields-input').append(item);
       pix_init_fields_sortable($button.closest('.pix-multifields-meta'));
       pix_update_multifields($button.closest('.pix-multifields-meta'));
       return false;
    });


   $(document).on("click", ".pix_field_remove", function (e) {
       e.preventDefault();
       var $button = $(this);
       var field = $button.closest('.pix-multifields-meta');
       $button.closest('.pix-multifields-item').remove();
       pix_update_multifields(field);
       pix_init_fields_sortable(field);



    });
   $(document).on("click", ".meta-box-upload-button-remove", function (e) {
       e.preventDefault();
       var $button = $(this);
       $button.siblings('.meta-box-upload-value').val('');
       $button.siblings('.image-preview').html('');
    });

    $(document).on("click", ".meta-box-upload-button", function (e) {
       e.preventDefault();
       var $button = $(this);


       // Create the media frame.
       var file_frame = wp.media.frames.file_frame = wp.media({
          title: 'Select or upload image',
          library: { // remove these to show all
             type: 'image' // specific mime
          },
          button: {
             text: 'Select'
          },
          multiple: false  // Set to true to allow multiple files to be selected
       });

       // When an image is selected, run a callback.
       file_frame.on('select', function () {
          // We set multiple to false so only get one image from the uploader

          var attachment = file_frame.state().get('selection').first().toJSON();
          // console.log(attachment);
          $button.siblings('input[type="hidden"]').val(attachment.id);
          let img = '<img src="'+attachment.url+'" style="max-width:150px;height:auto;margin-top:20px;">';
          $button.siblings('.image-preview').html(img);
          // console.log("OK");
       });

       // Finally, open the modal
       file_frame.open();
    });


   $(document).on("click", ".upload_image_button", function (e) {
      e.preventDefault();
      var $button = $(this);


      // Create the media frame.
      var file_frame = wp.media.frames.file_frame = wp.media({
         title: 'Select or upload image',
         library: { // remove these to show all
            type: [ 'video', 'image' ] // specific mime
         },
         button: {
            text: 'Select'
         },
         multiple: false  // Set to true to allow multiple files to be selected
      });

      // When an image is selected, run a callback.
      file_frame.on('select', function () {
         // We set multiple to false so only get one image from the uploader

         var attachment = file_frame.state().get('selection').first().toJSON();
         // console.log(attachment);
         $button.siblings('input').val(attachment.id);
         // console.log("OK");
      });

      // Finally, open the modal
      file_frame.open();
      return false;
   });




   function pix_init_multifields(field){
       if(field.find('.pix-multi-fields-value').val()){
           var data = JSON.parse(field.find('.pix-multi-fields-value').val());
           console.log(data);
           if(data){
               // data = JSON.parse(data);
               // console.log(data);
               // field.find('.pix-multi-fields-value').val(JSON.stringify(data));
               // if(data.length>0&&data!=""){
                   field.find('.pix-multi-fields-input').html('');
                   $.each(data,function(i, f){
                       var title = f.title? f.title:'';
                       var value = f.value? f.value:'';
                       var item = '<div class="pix-multifields-item">';
                               item += '<input class="pix_item_title pix_fields_field" type="text" placeholder="Title" value="'+title+'" />';
                               item += '<input class="pix_item_value pix_fields_field" type="text" placeholder="Value" value="'+value+'" />';
                               item += '<a href="#" class="pix_field_remove">Delete</a>';
                            item += '</div>';
                       field.find('.pix-multi-fields-input').append(item);
                   });

               // }

           }
           // pix_init_fields_sortable(field);
           // pix_update_multifields(field);


       }
       pix_init_fields_sortable(field);

   }

   function pix_update_multifields(field){

       var out = [];
       let el = field.find('.pix-multi-fields-input');


       el.sortable( "refresh" );
       el.sortable( "refreshPositions" );
       el.find('.pix-multifields-item').each(function(){
           let title = $(this).find('.pix_item_title').val();
           let value = $(this).find('.pix_item_value').val();
           let temp = {
               title: title,
               value: value
           };
           if(temp.title || temp.value){
               out.push(temp);
           }

       });
       // console.log(out);
       // console.log(el);
       field.find('.pix-multi-fields-value').val(JSON.stringify(out));
       // if(out.length>0){
       //     el.find('.pix-multi-fields-value').val(JSON.stringify(out));
       // }else{
       //     el.find('.pix-multi-fields-value').val('');
       // }
   }

   function pix_init_fields_sortable(field){
       field.find('.pix-multi-fields-input').sortable({
          stop: function( event, ui ) {
              pix_update_multifields(field);
          }
        });
   }








});
