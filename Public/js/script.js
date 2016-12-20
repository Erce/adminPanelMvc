/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*$('ul.nav li.dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
          }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
          });*/

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/*$(function() {
    var form_delete = $('#delete');


    $(form_delete).submit(function (e) {
        e.preventDefault();
        e.stopPropagation();
          $.ajax({
            type: 'post',
            url: 'delete.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });
          return false;
    });
});*/

        
    /*$(function () {
        $('#logoff').click(function (event) {
          $.ajax({
            type: 'get',
            url: 'logoff.php',
            data: $('#logoff').serialize(),
            success: function () {
                //alert();
            }
          });
          return false;
        });
    });*/

    $(function () {
        $('.arrow-buttons-left').click(function (event) {
          $id = event.target.id.toString();
          if($id !== 1) {
            $row = "#row" + $id;
            $id = "id=" + $id;
            $($row).remove();
            $.ajax({
              type: 'post',
              url: 'deleteRecord.php',
              data: $id,
              success: function () {

              }
            });
            return false;
          }
        });
    });
    
    $(function () {
        $('.arrow-buttons-right').click(function (event) {
          alert("arrow button right");
          $id = event.target.id.toString();
          $id = $id.substring(12, $id.length);
          $row = "#row" + $id;
          $id = "id=" + $id;
          $($row).remove();
          $.ajax({
            type: 'post',
            url: 'deleteRecord.php',
            data: $id,
            success: function () {
              
            }
          });
          return false;
        });
    });
      

$(function() {
    // Get the form.
    var form = $('#form');
    // Get the messages div.
    var formMessages = $('#message-div');

    $(form).submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        e.stopPropagation();
        // Serialize the form data.
        var formData = $(form).serialize();

        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData,
            success: function (response) {// if it is success in ajax side
                if (response=='true') {//if it is success in backend
                    $(formMessages).text('');//clears the message
                    $(formMessages).removeClass('failure');//removes the failure class
                    $(formMessages).addClass('success');//adds the success class
                    $(formMessages).text("E-mail was sent. Thank you for contacting us.");//adds the text
                    $('#firstName').val(''); //clears fields
                    $('#lastName').val(''); //clears fields
                    $('#email').val(''); //clears fields
                    $('#company').val(''); //clears fields
                    $('#phoneNumber').val(''); //clears fields
                    document.getElementById('captchaImage').src = 'captcha.php?' + Math.random();
                    $('#captcha').val(''); //clears fields
                    setTimeout(function() { $(formMessages).text('');
                                            $(formMessages).removeClass('success');
                                            $(formMessages).addClass('message-div');},3000);
                }
                else {
                    $(formMessages).text('');//clears the message
                    $(formMessages).removeClass('success');//removes the success class
                    $(formMessages).addClass('failure');//adds the failure class
                    $(formMessages).text("E-mail sending has failed. Please check the fields and try again.");//adds the text
                    setTimeout(function() { $(formMessages).text('');
                                            $(formMessages).removeClass('failure');
                                            $(formMessages).addClass('message-div');},3000);
                }

            },
            error: function(){// if it is error in ajax side
                $(formMessages).removeClass('success');//removes the success class
                $(formMessages).addClass('failure');//adds the failure class
                $(formMessages).text("E-mail sending has failed. Please check the fields and try again.");//adds the text
                setTimeout(function() { $(formMessages).text('');
                                        $(formMessages).removeClass('failure');
                                        $(formMessages).addClass('message-div');},3000);
            }           
        });     
    });
});


//SLIDER SUBMIT

    /*$(function () {
        $('body').on('click','#sliderSubmit', function (event) {
            
            document.getElementById("firstform").submit();
            document.getElementById("secondform").submit();
            var file_data = $('#file-input').prop('files')[0];  
            alert(file_data);
            var formData = new FormData($(this)[0]);
            alert(formData);
            formData.append('photo', file_data);
            alert(formData);
            $.ajax({
                type: 'post',
                dataType: 'text',
                cache: false,
                url: 'add-photo.php',
                processData: false,
                contentType: false,
                data: formData,
                success: function(php_script_response){
                    alert(php_script_response);
                }
            });
        });
    });*/


    $(function () {
        $('.sliderphotobox').click(function (event) {
            $id = $(this).attr('id');
            $(".sliderphotobox").removeClass("sliderphotoboxfocus");
            $('#'+ $id).addClass("sliderphotoboxfocus");
        });
    });
    
    
    $(function () {
        $('.delete-slider-icon').click(function (event) {
            $id = $(".sliderphotoboxfocus").attr('id');
            var formData = "id=" + $id.substring(11,$id.length);
            alert($id);
            if($id !== 'undefined') {
                $row = '#' + $id;              
                $.ajax({     
                    type: 'post',
                    url: 'delete-photo.php',
                    data: formData,
                    success: function(php_script_response){
                        $($row).remove();
                    }
                });
            }
        });
    });  
    
    $(function () {
        $('.edit-slider-icon').click(function (event) {
            $id = $(".sliderphotoboxfocus").attr('id');
            var formData = "id=" + $id.substring(11,$id.length);
            alert($id);
            if($id !== 'undefined') {          
                $.ajax({     
                    type: 'post',
                    url: 'View/pages/slider/editPhoto.php',
                    data: formData,
                    success: function(php_script_response){
                        window.location.href = "?controller=pages&action=slider&page=edit&" + formData;
                    }
                });
            }
        });
    }); 
    
    $(function () {
        /*var form = $('#firstform');
        
        $(form).submit(function(e) {
            // Stop the browser from submitting the form.
            alert("script.js");
            e.preventDefault();
            e.stopPropagation();
            // Serialize the form data.
            var formData = $(form).serialize();         
            $.ajax({     
                type: 'POST',
                url: 'Controller/photoController.php',
                data: formData,
                success: function(php_script_response){
                    //window.location.href = "?controller=pages&action=slider";
                }
            });
        });*/
    }); 
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image-preview').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file-input").change(function(){
        readURL(this);
    });  
    
    
    $("#template").ready(function(){
        for (i=0; i< $(jArray).length; i++ ) {
            if($(jArray)[i]['IsOn'] == 1) {
                $arr = $(jArray)[i];
                break;
            }
        }
        $('#templateId').val($arr['Id']);
        $('#templateName').val($arr['Name']);
        $('#templateBodyBackground').val($arr['BodyBackground']);
        $('#templateFontFamily').val($arr['FontFamily']);
        $('#templateBackgroundColor').val($arr['BackgroundColor']);
    });
    
    $("#template").change(function(event){
        $id = $(this).children(":selected").attr("id");
        $id = $id.substring(6, $id.length);
        for (i=0; i< $(jArray).length; i++ ) {
            if($(jArray)[i]['Id'] == $id) {
                $arr = $(jArray)[i];
                break;
            }
        }
        $('#templateId').val($arr['Id']);
        $('#templateName').val($arr['Name']);
        $('#templateBodyBackground').val($arr['BodyBackground']);
        $('#templateFontFamily').val($arr['FontFamily']);
        $('#templateBackgroundColor').val($arr['BackgroundColor']);
    });
    
    /*
    $(function () {
        $('.sliderphotobox').click(function (event) {
            document.getElementById("firstform").submit();
            document.getElementById("secondform").submit();
            var file_data = $('#file-input').prop('files')[0];  
            alert(file_data);
            var formData = new FormData($(this)[0]);
            alert(formData);
            formData.append('photo', file_data);
            alert(formData);
            $.ajax({
                type: 'post',
                dataType: 'text',
                cache: false,
                url: 'add-photo.php',
                processData: false,
                contentType: false,
                data: formData,
                success: function(php_script_response){
                    alert(php_script_response);
                }
            });
        });
    });*/