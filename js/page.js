/**
 * Created by PATRICK on 1/10/2017.
 */
$(document).ready(function (e) {

    var url = "http://localhost/UrbraCMS/";
    var no_of_slides;
    var slides_img_url = 'img/slideshowimgs/';
    async_get_slide_show();
    async_get_sec_1();
    //async_get_sec_2();
    async_get_sec_3();
    add('mailing-form', 'php/add_mail.php');
    add('send-email-form', 'php/send_mail.php');
    add('comment-form', 'php/comment.php');

    function async_get_slide_show() {
        $.ajax({
            type: "POST",
            url: url + "php/get_slide_show.php",
            success: function (data) {
                var json_obj = JSON.parse(data);
                set_up_slide_show(json_obj);
            }
        });
    }

    function set_up_slide_show(json) {
        no_of_slides = json.length;
        for (i = 0; i < no_of_slides; i++) {
            var image_name = url + slides_img_url + json[i].imagename;
            var link = json[i].link;
            var caption = json[i].caption;

            if (i == 0) {
                $('#indicators').append('<li data-target="#carousel-example-generic" data-slide-to="' + i + '" class="active"></li>');
            } else {
                $('#indicators').append('<li data-target="#carousel-example-generic" data-slide-to="' + i + '"></li>');
            }

            if (i == 0) {
                $('#carousel-inner').append('<div  class="item active">' +
                '<a href="' + link + '"><img src="' + image_name + '" alt="Slide image"></a>' +
                '<div class="carousel-caption">' +
                '<span class="caption-text caption">' + caption + '</span>' +
                '</div>' +
                '</div>');
            }
            else {

                $('#carousel-inner').append('<div class="item">' +
                '<a href="' + link + '"><img src="' + image_name + '" alt="slide image"></a>' +
                '<div class="carousel-caption">' +
                '<span class="caption-text caption">' + caption + '</span>' +
                '</div>' +
                '</div>');
            }
        }
    }

    function async_get_sec_1() {
        $.ajax({
            type: "POST",
            url: url + "php/get_sec1.php",
            success: function (data) {

                data = data.split("-");
                var img_url = url + 'img/home_services/' + data[0];
                var heading = data[1];
                var text = data[2];

                $("#sec_head1").text(heading);
                $("#sec_btn1").val(heading);
                $("#sec_text1").text(text);

                var $image = $("#sec_img1");
                var $downloadingImage = $("<img>");
                $downloadingImage.load(function () {
                    $image.attr("src", $(this).attr("src"));
                });
                $downloadingImage.attr("src", img_url);
            }
        });
    }

    function async_get_sec_3() {
        $.ajax({
            type: "POST",
            url: url + "php/get_sec3.php",
            success: function (data) {

                data = data.split("-");
                var img_url = url + 'img/home_services/' + data[0];
                var heading = data[1];
                var text = data[2];

                $("#sec_head3").text(heading);
                $("#sec_btn3").val(heading);
                $("#sec_text3").text(text);

                var $image = $("#sec_img3");
                var $downloadingImage = $("<img>");
                $downloadingImage.load(function () {
                    $image.attr("src", $(this).attr("src"));
                });
                $downloadingImage.attr("src", img_url);
            }
        });
    }

    function add(form, url) {
        $("#" + form).on('submit', (function (e) {
            e.preventDefault();
            $('.loader').show();

            var path = location.pathname.substring(location.pathname.lastIndexOf("/") + 1);

            $.ajax({
                url: url, // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                contentType: false,       // The content type used when sending data to the server.
                cache: false,             // To unable request pages to be cached
                processData: false,        // To send DOMDocument or non processed data file it is set to false
                success: function (data)   // A function to be called if request succeeds
                {
                    $('.loader').hide();
                    if (data == true) {
                        if(form == 'send-email-form'){
                            $('#message-sent-alert').fadeIn(400).delay(3000).fadeOut(300); //fade out after 3 seconds
                            $('#captcha-error').hide();
                        }else{
                            $('#success-alert').fadeIn(400).delay(3000).fadeOut(300); //fade out after 3 seconds
                            $('#mail-captcha-error').hide();
                        }

                    }else if(data == '2'){
                        if(form == 'send-email-form') {
                            $('#captcha-error').show();
                        }else{
                            $('#mail-captcha-error').show();
                        }
                    }

                    else {
                        $('.error').fadeIn(400).delay(3000).fadeOut(400); //fade out after 3 seconds
                    }
                },
                error: function () {
                    $('#error').fadeIn(400).delay(3000).fadeOut(400); //fade out after 3 seconds
                    $('.loader').hide();
                },
                complete: function () {
                    $('.loader').hide();
                }
            });

        }));
    }

    $("#myTabs").find("a").click(function (e) {
        e.preventDefault();
        $(this).tab('show')
    })

});