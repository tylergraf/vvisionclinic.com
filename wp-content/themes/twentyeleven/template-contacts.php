<?php
/**
 * Template Name: Contacts
 * Description: A Page Template that showcases Sticky Posts, Asides, and Blog Posts
 *
 * The showcase template in Twenty Eleven consists of a featured posts section using sticky posts,
 * another recent posts area (with the latest post shown in full and the rest as a list)
 * and a left sidebar holding aside posts.
 *
 * We are creating two queries to fetch the proper posts and a custom widget for the sidebar.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div id="bd" class="wrapper">
  <div style="margin-top:30px;"><img src="/wp-content/themes/twentyeleven/images/contacts-hd.jpg"></div>
  <h2>Contact Lenses</h2>
    <?php the_post(); echo get_the_content(); ?>
</div>

<?php get_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $('label').each(function() {

        varLabel = ($(this).text());
        $("[title=" + varLabel + "]").val(varLabel);

    });
    function changeField(){
//        if ()
    }
    $('input, textarea').focus(function() {
        var title = $(this).attr('title');
        var value = $(this).attr('value');
        $(this).addClass('filled');

        if (value == title) {
            $(this).val('');
        }

    });
    $('input, textarea').blur(function() {

        if ($(this).val() == '') {
            var value = $(this).attr('title');
            $(this).val(value);
            $(this).removeClass('filled');
        }
        else {
            $(this).addClass('filled');
        }
    });

    $(function() {
        $.validator.addMethod('formName', function(value) {
            return value != 'Your Name';
        });
        $.validator.addMethod('formEmail', function(value) {
            return value != 'Your Email';
        });
        $.validator.addMethod('formSubject', function(value) {
            return value != 'Subject';
        });
        $.validator.addMethod('formMessage', function(value) {
            return value != 'Your Message';
        });

        $("#ajax_form").validate({
            errorPlacement: function(error, element) {
                error.prependTo(element.parent("span"));
            },
            rules: {
                name: {
                    formName: true
                },
                email: {
                    formEmail: true,
                    required: true,
                    email: true
                },
                subject: {
                    formSubject: true
                },
                message: {
                    formMessage: true
                }
            },
            messages: {
                name: "Please enter your name.",
                email: {
                    required: "Please enter your email.",
                    email: "Must be a valid email."
                },
                subject: "Please enter a subject.",
                message: "Please enter a message."

            },
            submitHandler: function(){
                // do other stuff for a valid form
                $.ajax({
                    url: "/wp-content/themes/twentyeleven/email.php",
                    type: 'post',
                    success: function(){
                        $('#contact-form').animate({
                            opacity: 0
                        },function(){
                            $('#contact-form').html('<div class="grid-8" id="email-success"><h3>Email submitted successfully.</h3><h4>We look forward to hearing from you.</h4></div>').animate({
                                opacity: 100
                            });
                        });
                    }
                });
            }
        });
        $('#contact-blurb h4').click(function(){
            $('#contact-form').animate({
                opacity: 0
            },function(){
                $('#contact-form').html('<div class="grid-8" id="email-success"><h3>Email submitted successfully.</h3><h4>We look forward to hearing from you.</h4></div>').animate({
                    opacity: 100
                });
            });
        });
    });
</script>