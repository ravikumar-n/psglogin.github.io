/////////////////////////////////////////////////////////////////////////////////////////////////////
//
// common.js
//
/////////////////////////////////////////////////////////////////////////////////////////////////////

var WIN = $(window)
var WinW
var WinH
var BODY = $('body')
var Wrap = $('#wrapAll')
var Main = $('#main')
var HEADER = $('header')
var HeaderH
var HeaderW
var FOOTER = $('footer')
var FooterH
var FooterW
var TB = 980
var SP = 760
var Career = "PC"
var CareerSet = "PC"
var gr = 1.618;
var sr = 1.4;
var Section = $('section')
WIN.ready(function() {
    HEADER.width($(window).height())
    if(!location.hash){
        $(window).scrollTop(0);
        $('html,body').animate({ scrollTop: 0 }, '1');
    }
});

jQuery.event.add(window, "load", function() {
    CommonInit()
    BODY.addClass('load')
    if(!location.hash){
        $(window).scrollTop(0);
        $('html,body').animate({ scrollTop: 0 }, '1');
    }
});



WIN.resize(function() {
    CommonInit()
});



var SCROLL = 0
var ScrollAfter = 0;
WIN.scroll(function() {
    SCROLL = WIN.scrollTop();
    if (SCROLL > WinH) {
        HEADER.addClass('on');
        MenuBtn.addClass('on');
    } else {
        HEADER.removeClass('on');
        MenuBtn.removeClass('on');
    }
    if (NavOpenFlg == true) {
        PopNavClose();
    }
    if (!BODY.hasClass('page-index')) {
        SubttlCheck();
    }
});

var SectionT = [];
var SubttlText = [];
var Sunbttl = $('#sub_ttl');
var SunbttlP = $('#sub_ttl p span');
var SectionIndex = 0;
var SectionIndexAfter = 0;
var BorderLine = 0;

function SubttlInit() {
    SectionT = []
    for (var i = 0; i < Section.length; i++) {
        SectionT.push(Math.floor(Section.eq(i).offset().top))
        SubttlText.push(Section.eq(i).data('ttl'))
    }
    BorderLine = WinH * 0.7;
    SunbttlP.text(SubttlText[0])
        // SunbttlP.text(SectionT)
    SubttlCheck();
}

function SubttlCheck() {
    SCROLL = WIN.scrollTop();
    for (var s = 0; s < SectionT.length; s++) {
        if ((SCROLL + BorderLine) > SectionT[s]) {
            SectionIndex = s;
        }
    }

    if (SectionIndex != SectionIndexAfter) {
        SunbttlP.stop(false, false).animate({ 'opacity': 0 }, 400, function() {
            SunbttlP.text(SubttlText[SectionIndex])
            SunbttlP.stop(false, false).animate({ 'opacity': 1 }, 400)
                // SunbttlP.text(Section.eq(0).data('ttl'))
        })
    }

    SectionIndexAfter = SectionIndex;
    // SunbttlP.text(Section.eq(0).data('ttl'))
};

// function SubttlChange(){

// };



function CommonInit() {
    WinW = WIN.width()
    WinH = WIN.height()

    HEADER.width(WinH)
    Sunbttl.width(WinH)
    HeaderH = HEADER.height()
    HeaderW = HEADER.width()
    FooterH = FOOTER.height()
    FooterW = FOOTER.width()
    CareerCheck()

    if (!BODY.hasClass('page-index')) {
        SubttlInit();
    }

}

function CareerCheck() {
    if (WinW > TB) {
        Career = "PC"
    } else if (WinW > SP) {
        Career = "TB"
    } else {
        Career = "SP"
    }

    CareerSet = Career
}

var MenuBtn = $('#menubtn')
var PopupNav = $('#popupnav')
var PopupNavBase = $('#popupnav .base')
var NavOpenFlg = false;


MenuBtn.click(function() {
    if ($(this).hasClass('active')) {
        PopNavClose();
    } else {
        PopNavOpen();
    }
})

PopupNavBase.click(function() {
    PopNavClose();
})

function PopNavOpen() {
    MenuBtn.addClass('active');
    PopupNav.addClass('active');
    NavOpenFlg = true;
    $('#sub_head').addClass('active');
}

function PopNavClose() {
    MenuBtn.removeClass('active');
    PopupNav.removeClass('active');
    $('#sub_head').removeClass('active');
    NavOpenFlg = false;
}

// var sound_btn = $('.gnav ul li a span.cover,a.btn span.wrap');

// sound_btn.mouseover(function(event) {
//     document.getElementById("toyo").currentTime = 0;
//     document.getElementById("toyo").play();
//     document.getElementById("toyo").volume=0.2;
// });
