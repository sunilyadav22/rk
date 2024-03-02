jQuery(document).ready(function ($) {

        function updateView() {
            if ($(window).width() >= 767) {
                if ($('#list-view').is(":checked")) {
                    $('#course-list').addClass('list-view');
                } else {
                    $('#course-list').removeClass('list-view');
                }
            } else {
                // If window width is less than 767px, switch to grid view and check the checkbox
                $('#course-list').removeClass('list-view');
                $('#grid-view').prop('checked', true);
            }
        }
    
        // Function to check window width and update view
        function checkWindowWidth() {
            updateView();
        }
    
        // Initial check on page load
      //  checkWindowWidth();
    
        // Attach change event handler to checkboxes
        $('#list-view, #grid-view').change(function () {
            checkWindowWidth();
        });
    
        // Attach orientation change event handler
        $(window).on('orientationchange', function () {
            // Check window width after orientation change
            checkWindowWidth();
        });
    
        // Attach resize event handler
        $(window).on('resize', function () {
            // Check window width after resize
            checkWindowWidth();
        });
    });
