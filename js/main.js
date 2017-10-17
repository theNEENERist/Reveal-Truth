/*jshint browser: true, jquery: true*/
$(document).ready(function() {
    var $contactForm = $('.contact');
    var $name = $contactForm.find('[name=name]');
    var $email = $contactForm.find('[name=email]');
    var $comments = $contactForm.find('[name=comments]');
    var $submit = $contactForm.find('[name=submit]');
    var $response = $contactForm.find('.response');
    
    $contactForm.on('submit', function(event) {
        event.preventDefault();
        
        if($name.val() && $email.val() && $comments.val()) {
            $submit.text('Sending...').prop('disabled', true);
            
            $.ajax({
                method: 'post',
                data: $contactForm.serialize(),
                url: $contactForm.attr('action')
            }).done(function(response) {
                $submit.text('Submit').prop('disabled', false);
                $response.text(response.message);
            });
        }
    });
});