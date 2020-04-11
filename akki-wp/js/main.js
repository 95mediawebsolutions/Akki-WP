jQuery(document).ready(function(e){
    $win = jQuery(window);
    $navbar = jQuery('#header');
    $toggle = jQuery('.toggle-button');
    var width = $navbar.width();
    toggle_onclick($win, $navbar, width);

    jQuery('#comment').addClass('form-control');
    jQuery('#author').addClass('form-control');
    jQuery('#email').addClass('form-control');
    jQuery('#url').addClass('form-control');
    jQuery('input[type="submit"]').addClass('btn btn-dark');
   
    //resize event
    $win.resize(function(){
        toggle_onclick($win, $navbar, width);
    });
    $toggle.click(function(e){
        $navbar.toggleClass("toggle-left");
    });

    var typed = new Typed('#typed',{
        stringsElement: '#typed-strings',
        backSpeed: 40,
        typeSpeed: 40,
        loop:true
    });

    var typed_2 = new Typed('#typed_2',{
        stringsElement: '#typed-strings-2',
        backSpeed: 40,
        typeSpeed: 40,
        loop:true
    });

});


function toggle_onclick($win, $navbar, width){
    if($win.width() <= 768 ){
        $navbar.css({left: `-${width}px`});
    } else{
        $navbar.css({left: '0px'});
    }

   
}


document.querySelectorAll('a[href^="#"]').forEach(anchor =>{
    anchor.addEventListener('click', function(e){
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


jQuery( document ).ready(function() {
    
   
  
  });
