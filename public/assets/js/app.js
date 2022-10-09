$(document).ready(function(){

    // Welcome page design and animation
    setTimeout(function(){
        $('.welcome-screen-content h2').css('display', 'none');
        $('.welcome-screen-content p.time').css('display', 'block');
        $('.welcome-screen-content a').css('display', 'none');
    }, 10000);

    setTimeout(function(){
        $('.welcome-screen-content h2').css('display', 'none');
        $('.welcome-screen-content p.time, .welcome-screen-content p.progress-bar').css('display', 'none');
        $('.welcome-screen-content a').css('display', 'inline-block');
    }, 20000);


    // select 2 js
    $('.select-2').select2();

    // Material datepicker js
    $('.date-picker').bootstrapMaterialDatePicker({
        time: false,
        clearButton: true
    });

    $('.time-picker').bootstrapMaterialDatePicker({
        time: true,
        date:false,
        clearButton: true
    });

    // Droify js
    $('.dropify').dropify({
        messages: {
            'default': 'Drag and drop a file here or click',
            'replace': 'Drag and drop or click to replace',
            'remove':  'Remove',
            'error':   'Ooops, something wrong happended.'
        }
    });

    // Bar click js
    $('.bar-btn').click(function(){
        $('.bsuite-dashboard-content').toggleClass('space-grow');
    });

    // Hold Scroll position in setting page
    $('.bsuite-setting-content-area').scroll(function() {
        sessionStorage.scrollTop = $(this).scrollTop();
    });
    if (sessionStorage.scrollTop != "undefined") {
        $('.bsuite-setting-content-area').scrollTop(sessionStorage.scrollTop);
    }

});
