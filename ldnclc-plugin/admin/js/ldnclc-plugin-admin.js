/*
 * Attaches the image uploader to the input field
 */
jQuery(document).ready(function($){
 
    // Add files / images to additional resources
    $('#ldnclc-materials').on('click', '.meta-image-button', function(e){
        
        // Prevents the default action from occuring.
        e.preventDefault();

        $el = $(this);

        // Instantiates the variable that holds the media library frame.
        var meta_image_frame;

        // If the frame already exists, re-open it.
        if ( meta_image_frame ) {
            meta_image_frame.open();
            return;
        }
        
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
            title: "Select or Upload Media",
            button: { text:  "Use this media" },
            library: { type: 'image' }
        });

        // Runs when an image is selected.
        meta_image_frame.on('select', function(event){

            // Grabs the attachment selection and creates a JSON representation of the model.
            var media_attachment = meta_image_frame.state().get('selection').first().toJSON();

            // Sends the attachment URL to our custom image input field.
            $el.siblings('.material-link').val(media_attachment.url);

        });
        

        // Opens the media library frame.
        meta_image_frame.open();
    });

    // Delete additional resource items
    $('#ldnclc-materials').on('click', '.material-delete-button', function(e){
        
        e.preventDefault();

        $el = $(this);

        // Remove input if more than one left, or if only one left just blank input values.
        var $numOfInputs = $el.parent('p').siblings('p').length ;
        
        if ( $numOfInputs > 0) {

            $el.parent('p').remove();      

        } else if ( $numOfInputs === 0) {
             $el.parent('p').children('input').val('');
        }

    });

    // Add more material input boxes.
    var $inputPar = $('#ldnclc-materials').children('p').last();
    $('#material-item-more').click(function(e){

        $clone = $inputPar.clone();
        $clone.children('.material-title').val('');
        $clone.children('.material-link').val('');
        $('#ldnclc-materials').children('p:last').after( $clone  );

    });
});