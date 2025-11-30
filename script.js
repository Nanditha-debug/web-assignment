// jQuery for hover effect on nav links
$(document).ready(function(){
    $('.nav-link').hover(function(){
        $(this).css('color', '#ffdd59');
    }, function(){
        $(this).css('color', 'white');
    });
});
