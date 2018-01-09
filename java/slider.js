function myslid() {
    $(document).ready(function () {
        $(".game-continer .one").fadeIn(700, function () {
            $(".main_dots .dot1").css("background-color", "blue")
        }), $(".game-continer .one").delay(5500).fadeOut(1e3, function () {
            $(".game-continer .two").fadeIn(700, function () {
                $(".main_dots .dot2").css("background-color", "red")
            }), $(".game-continer .two").delay(5500).hide(700, function () {
                $(".game-continer .three").show(700, function () {
                    $(".main_dots .dot3").css("background-color", "orange")
                }), $(".game-continer .three").delay(5500).fadeOut(1e3, function () {
                    $(".game-continer .four").show(700, function () {
                        $(".main_dots .dot4").css("background-color", "aqua")
                    })
                })
            })
        })
    })
}

$(document).ready(function() {
$(".reccon").fadeIn(2300);
$(".fa-close").click(function(){
  $(".reccon").fadeOut(1000);
})
});

function scrollFunction() {
    document.body.scrollTop > 20 || document.documentElement.scrollTop > 20 ? document.getElementById("myBtn").style.display = "block" : document.getElementById("myBtn").style.display = "none"
}

function topFunction() {
    document.body.scrollTop = 0, document.documentElement.scrollTop = 0
}
$(document).ready(function () {
    $(".editbtn_dis").click(function () {
        $(".editform").toggle(500, function () {
            $(".editbtn_dis").hide(500, function () {
                $(".deletebtn").hide(500)
            })
        })
    })
}), $(document).ready(function () {
    $(".replay_button").click(function () {
        $(".replay_form").toggle(500, function () {
            $(".replay_button").hide(500)
        })
    })
});
var myslider = setInterval(myslid, 3e4),
    varslider = $(document).ready(function () {
        $(".game-continer .one").fadeIn(700, function () {
            $(".main_dots .dot1").css("background-color", "blue")
        }), $(".game-continer .one").delay(5500).hide(1e3, function () {
            $(".game-continer .two").fadeIn(700, function () {
                $(".main_dots .dot2").css("background-color", "red")
            }), $(".game-continer .two").delay(5500).hide(700, function () {
                $(".game-continer .three").show(700, function () {
                    $(".main_dots .dot3").css("background-color", "orange")
                }), $(".game-continer .three").delay(5500).fadeOut(1e3, function () {
                    $(".game-continer .four").show(700, function () {
                        $(".main_dots .dot4").css("background-color", "aqua")
                    })
                })
            })
        })
    });
$(document).ready(function () {
    $("#signup").click(function () {
        $("#login").hide(500, function () {
            $("#sign").fadeIn(500)
        })
    }), $("#button").click(function () {
        $("#login").hide(500, function () {
            $("#login").fadeIn(500)
        })
    })
}), $(document).ready(function () {
    $(".content_box").click(function () {
        $("#lang_info").toggle(500)
    })
}), $(document).ready(function () {
    $(".site_works").click(function () {
        $(".safe_games").toggle(500)
    })
}), $(document).ready(function () {
    $(".programer").click(function () {
        $(".pro_design").toggle(500)
    })
}), $(document).ready(function () {
    $("#main_section .cat-con").click(function () {
        $(this).toggleClass("visible")
    })
}), $(document).ready(function () {
    $("#main_section .cat-con").click(function () {
        $("#game_type").toggle()
    })
}), $(document).ready(function () {
    $(".more-games").click(function () {
        $(".game_artical").toggle(200)
    })
}), $(document).ready(function () {
    $(".more-games2").click(function () {
        $(".more-info2").toggle(200)
    })
}), $(document).ready(function () {
    $(".more-games3").click(function () {
        $(".more-info3").toggle(200)
    })
}), $(document).ready(function () {
    $(".more-games4").click(function () {
        $(".more-info4").toggle(200)
    })
}), $(document).ready(function () {
    $(".more-games5").click(function () {
        $(".more-info5").toggle(200)
    })
}), $(document).ready(function () {
    $(".more-games6").click(function () {
        $(".more-info6").toggle(200)
    })
}), window.onscroll = function () {
    scrollFunction()
};
