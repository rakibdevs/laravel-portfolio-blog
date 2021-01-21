"use strict";
function a(e, s) {
    e.children(".submenu-content").show().slideUp(200, function() {
        $(this).css("display", ""), $(this).find(".menu-item").removeClass("is-shown"), e.removeClass("open"), s && s()
    })
}

$(".sidebar-content").on("click", ".navigation-main .nav-item a", function() {
    var e = $(this).parent(".nav-item");
    if (e.hasClass("has-sub") && e.hasClass("open")) a(e);
    else {
        if (e.hasClass("has-sub") && function(e, s) {
                var a = e.children(".submenu-content"),
                    n = a.children(".menu-item").addClass("is-hidden");
                e.addClass("open"), a.hide().slideDown(200, function() {
                    $(this).css("display", ""), s && s()
                }), setTimeout(function() {
                    n.addClass("is-shown"), n.removeClass("is-hidden")
                }, 0)
            }(e), $(".sidebar-content").data("collapsible")) return !1;
        a(e.siblings(".open")), e.siblings(".open").find(".nav-item.open").removeClass("open")
    }
})
