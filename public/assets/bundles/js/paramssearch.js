function initLetters(n) {
    var t = $(".letters")
        , i = $('<div class="placeholder-letters"><\/div>')
        , r = !1;
    t.removeClass("fixed");
    i.remove();
    n && (t = n.find($(".letters")));
    t.length > 0 && $(window).scroll(function() {
        var n = $(window).scrollTop();
        n > t.offset().top && r == !1 && (i.insertAfter(t),
            i.height(t.outerHeight(!0)),
            t.addClass("fixed"),
            t.css({
                top: 0
            }),
        0 < $("#topFixedBar").length && t.css({
            top: $("#topFixedBar").outerHeight(!0)
        }),
            r = !0);
        n < i.offset().top && r == !0 && (i.remove(),
            t.removeClass("fixed"),
            t.removeAttr("style"),
            r = !1)
    })
}
function findLetterBox(n, t) {
    var i = $(t)
        , r = i.attr("href");
    n.preventDefault();
    $("html, body").animate({
        scrollTop: $(r).offset().top + -120
    }, 200, function() {})
}
(function(n) {
        n(document).ready(function() {
            initLetters()
        })
    }
)(jQuery)
