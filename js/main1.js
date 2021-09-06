

$(document).ready(function(){
    $('.search span, .search input').hover(
        function(){
            $('.search input').css({
                "width": "350px",
                "border-radius": "40px",
                "border": "1px solid var(--second-color)"
            });
            $('.search span').css({
                "transform": "translateX(144px)",
                "background":"transparent"
            });
            $('.search span i').css({
                'color':"var(--second-color)"
            })
        },
        function(){
            $('.search input').css({
                "width": "40px",
                "border-radius": "50%",
                "border": "none"
            });
            $('.search span').css({
                "transform": "translateX(0)",
                "background":"var(--second-color)"
            });
            $('.search span i').css({
                'color':"#1d1d1f"
            })
        }
    )
    $('.nab-bar .nav-item:last-child').hover(
        function(){
            $('.sub-nav').css({
                "transform": "translateY(0)",
                // "display": "block",
                "visibility":"visible",
                "opacity": "1"
            })
        }
    )
    $('.title').on('click',function(){
        var width = $(this).parents('.show-list').width()
        console.log(width)
        if(width < 576)
        {
            if($(this).next().children('p').css('display') === 'block'){
                $(this).next().children('p').css('display','none')
            }
            else{
                $(this).next().children('p').css('display','block')
            }   
        }    
    })

    // Sign Up Confirmation
    $('.psw1').on("change",function(){
        psw1 = $(this).val();
    })
    $('.psw2').on("keyup",function(){
        psw2 = $(this).val();
        if(psw1 === psw2){
            var i = "<i class='bx bxs-check-circle'></i>";
            $(".confirm").html(i);
            if($(".signup").attr("disabled")){
                $(".signup").removeAttr("disabled")
            }
        }
        else if(psw2 === ''){
            $('.confirm').html(" ");
        }
        else{
            var i = "<i class='bx bxs-x-circle' ></i>";
            $(".confirm").html(i);
            $(".signup").attr("disabled","disabled")
            
        }
    })
    
    $(".visible").on("click",function(){
        if($(this).hasClass("bxs-hide")){
            parent = $(this).parentsUntil("form");
            $(this).removeClass();
            $(this).addClass("bx bxs-show visible");
            $("input",parent).attr("type","text");
        }
        else if($(this).hasClass("bxs-show")){
            parent = $(this).parentsUntil("form");
            $(this).removeClass();
            $(this).addClass("bx bxs-hide visible");
            $("input",parent).attr("type","password");
        }
    })
    
    // Drop Down
    $(".filter-head").on("click",function(){
        parent = $(this).parent();
        $("ul",parent).slideToggle();
    })

    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
    $('.nav-item a').each(function() {
        if (this.href === path) {
            $(this).addClass('active');
        }
    });

    // count = $('.cart_table > tr').length;
    // $('span.badge').text(count)

    // Slick Jquery
    $('.demo').slick({
        accessibility:true,
        autoplay:true,
        autoplaySpeed: 2000,
        dots: true,
    });

    $('.multiple-items').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        accessibility:true,
        autoplay:true,
        autoplaySpeed: 2000,
        dots: true,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 800,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
        ]
    });
    
})
