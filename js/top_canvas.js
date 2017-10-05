var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
var CenterW, CenterH, cw, ch;
var Container, LineContainer, LogoContainer;
var IntervalX, IntervalY, particleSize, Xnum, Ynum, textsize, texts
var particles;
var particle;
var Num = 80;
var size = 0;
var Circles;
var Circle;
var stage = new createjs.Stage("myCanvas");
var Logo = $('#symbol')
var CanvasInitFlg = false;

stage.enableMouseOver();
WIN.ready(function() {
    Logo.css({ 'margin-top': -(Logo.height() / 2) })
    $(window).scrollTop(0);
    $('html,body').animate({ scrollTop: 0 }, '1');
});
jQuery.event.add(window, "load", function() {
    $(window).scrollTop(0);
    $('html,body').animate({ scrollTop: 0 }, '1');
    var LoadTimer = setTimeout(function() {
        drawLineflg = true;
        clearTimeout(LoadTimer);
        CanvasInitFlg = true;
    }, 600);
});
window.addEventListener("load", init);
WIN.resize(function() {
    emancipation = false;
    Logoline.graphics.clear();
    for (var i = 0; i < particles.length; i++) {
        particle = particles[i];
        particle.graphics.clear();
    }
    for (var i = 0; i < LogoPoints.length; i++) {
        LogoPoint = LogoPoints[i];
        LogoPoint.graphics.clear();
    }
    init()
    emancipationcheck()

});

var LogoPoints = [];
var LogoPoint;
var Logoline;
var logo_p_t, logo_p_l, logo_l, logo_t, logo_w, logo_h

var mv = $('div#mv');
var mv_w, mv_h;
var mvpadd = 56
var mvpadd_bt = 36;

var TextBox = $('#mv_text_box')
var lw = 4;
var lw2 = 4;
function init() {
    if(Career == "SP"){
        var mvpadd = 10
        var mvpadd_bt = 10;
        Num = 30;
        Logo.css({ 'margin-top': -(Logo.height() / 2) })
        TextBox.css({ 'top': WinH*0.55, 'margin-top': -(TextBox.height() / 2) })
        lw = 3;
        lw2 = 3;
    } else if(Career == "SP"){
        var mvpadd = 20
        var mvpadd_bt =20;
        Num = 50;
        Logo.css({ 'margin-top': -(Logo.height() / 2) })
        TextBox.css({ 'top': WinH*0.55, 'margin-top': -(TextBox.height() / 2) })
        lw = 3;
        lw2 = 3;
    } else {
        var mvpadd = 0
        var mvpadd_bt = 0;
        Num = 80;
        Logo.css({ 'margin-top': -(Logo.height() / 2) })
        TextBox.css({ 'top': WinH*0.52, 'margin-top': -(TextBox.height() / 2) })
        lw = 4;
        lw2 = 4;
    }
    mv.css({ 'height': WinH, 'width': WinW })
    mv_h = WinH - (mvpadd_bt * 2);
    mv_w = WinW - (mvpadd * 2);
    $('#myCanvas').css({ 'position': 'absolute', 'top': mvpadd_bt, 'left': mvpadd })
    canvas.width = mv_w*2;
    canvas.height = mv_h*2;
    cw = canvas.width * 1.5;
    ch = canvas.height * 1.5;
    CenterW = cw / 2;
    CenterH = ch / 2;
    Container = new createjs.Container();
    Container.x = -mvpadd;
    Container.y = -mvpadd_bt;
    logo_t = $('#symbol').offset().top * 2-mvpadd_bt;
    logo_l = $('#symbol').offset().left * 2-mvpadd;
    logo_h = $('#symbol').height()*2;
    logo_w = $('#symbol').width()*2;
    var bg = new createjs.Shape();
    bg.graphics
        .beginFill("#fcfcfc")
        .drawRect(0, 0, cw, ch)
    Container.addChild(bg);
    stage.addChild(Container);
    LogoPoints = [];



    for (var i = 0; i < $('#symbol span.p').length; i++) {
        LogoPoint = new createjs.Shape();
        logo_p_t = $('#symbol span.p').eq(i).offset().top * 2-mvpadd_bt;
        logo_p_l = $('#symbol span.p').eq(i).offset().left * 2-mvpadd;
        LogoPoint.x = logo_p_l;
        LogoPoint.y = logo_p_t;
        LogoPoint.x0 = logo_p_l;
        LogoPoint.y0 = logo_p_t;
        LogoPoint.radius = 1;

        LogoPoint.vx = (Math.random() * 10) - 1;
        LogoPoint.vy = (Math.random() * 10) - 1;
        LogoPoint.bgc = 'rgba(' + Math.floor(Math.random() * 10) + ',' + (Math.floor(Math.random() * 50) + 100) + ',' + (Math.floor(Math.random() * 50) + 100) + ',1)'

        LogoPoint.graphics
            .beginStroke('#00a99d')
            .setStrokeStyle(0.5)
            .drawCircle(0, 0, 5);

        LogoPoints.push(LogoPoint)
    }



    Logoline = new createjs.Shape();







    createjs.Ticker.setFPS(60);
    createjs.Ticker.timingMode = createjs.Ticker.RAF;
    createjs.Ticker.addEventListener("tick", handleTick);
    draw();
    if (LoadFlg == false) {
        pers = []
        for (var i = 0; i <= 14; i++) {
            pers.push(0)
        }

        LineContainer = new createjs.Container();
        LineContainer.x = -mvpadd;
        LineContainer.y = -mvpadd_bt;
        line = new createjs.Shape();
        LineContainer.addChild(line);
        stage.addChild(LineContainer);
    }
    LogoContainer = new createjs.Container();
    LogoContainer.x = -mvpadd;
    LogoContainer.y = -mvpadd_bt;
    stage.addChild(LogoContainer);
    LogoContainer.addChild(Logoline);
    for (var i = 0; i < LogoPoints.length; i++) {
        LogoPoint = LogoPoints[i];
        LogoContainer.addChild(LogoPoint);
    }
}




function handleTick(event) {
    Logoline.graphics.clear();
    line.graphics.clear();
    for (var i = 0; i < particles.length; i++) {
        particle = particles[i];
        particle.graphics.clear();
    }
    for (var i = 0; i < LogoPoints.length; i++) {
        LogoPoint = LogoPoints[i];
        LogoPoint.graphics.clear();
    }
    moveParticle();

    if (drawLineflg == true) {
        drawLine()

    } else {
        LineContainer.alpha = (1 - pers[2]);
        Container.alpha = pers[2];
        Logoline.alpha = pers[2];
        for (var i = 0; i < LogoPoints.length; i++) {
            LogoPoint = LogoPoints[i];
            LogoPoint.alpha = pers[1];
        }
    }

    stage.update();
}

var Soundflg = true;


var line;
var per = 0;
var percount = 0;
var pers = []
var acs = 0.03;
var LoadFlg = false;
var drawLineflg = false;

function drawLine() {


    line.x = 0;
    line.y = 0;
    line.alpha = pers[0]
        // 
        // 
    if (per <= (1 - acs)) {
        per += acs;
    } else {
        pers[percount] = 1;
        percount++;
        per = 0;
    }

    pers[percount] = per;
    LineContainer.alpha = (1 - pers[2]);
    Container.alpha = pers[2];
    Logoline.alpha = pers[2];

    for (var i = 0; i < LogoPoints.length; i++) {
        LogoPoint = LogoPoints[i];
        LogoPoint.alpha = pers[1];
    }

    if (pers[1] == 1) {
        if(Soundflg == true){
            Soundflg = false;
            document.getElementById("toyo").currentTime = 1;
            document.getElementById("toyo").play();
            document.getElementById("toyo").volume=0.2;
        }
    }

    if (pers[2] == 1) {
        LoadFlg = true;
        
    }
    LoadFlg = true;
    line.graphics
        .beginStroke('#A8CFCE')
        .setStrokeStyle(1)
        .moveTo(LogoPoints[13].x, LogoPoints[13].y)
        .lineTo(((LogoPoints[11].x - LogoPoints[13].x) * pers[0]) + LogoPoints[13].x, ((LogoPoints[11].y - LogoPoints[13].y) * pers[0]) + LogoPoints[13].y)
        .closePath()
        .moveTo(LogoPoints[11].x, LogoPoints[11].y)
        .lineTo(((LogoPoints[12].x - LogoPoints[11].x) * pers[0]) + LogoPoints[11].x, ((LogoPoints[12].y - LogoPoints[11].y) * pers[0]) + LogoPoints[11].y)
        .closePath()
        .moveTo(LogoPoints[11].x, LogoPoints[11].y)
        .lineTo(((LogoPoints[10].x - LogoPoints[11].x) * pers[0]) + LogoPoints[11].x, ((LogoPoints[10].y - LogoPoints[11].y) * pers[0]) + LogoPoints[11].y)
        .closePath()
        .moveTo(LogoPoints[10].x, LogoPoints[10].y)
        .lineTo(((LogoPoints[9].x - LogoPoints[10].x) * pers[0]) + LogoPoints[10].x, ((LogoPoints[9].y - LogoPoints[10].y) * pers[0]) + LogoPoints[10].y)
        .closePath()
        .moveTo(LogoPoints[9].x, LogoPoints[9].y)
        .lineTo(((LogoPoints[8].x - LogoPoints[9].x) * pers[0]) + LogoPoints[9].x, ((LogoPoints[8].y - LogoPoints[9].y) * pers[0]) + LogoPoints[9].y)
        .closePath()
        .moveTo(LogoPoints[8].x, LogoPoints[8].y)
        .lineTo(((LogoPoints[7].x - LogoPoints[8].x) * pers[0]) + LogoPoints[8].x, ((LogoPoints[7].y - LogoPoints[8].y) * pers[0]) + LogoPoints[8].y)
        .closePath()
        .moveTo(LogoPoints[7].x, LogoPoints[7].y)
        .lineTo(((LogoPoints[6].x - LogoPoints[7].x) * pers[0]) + LogoPoints[7].x, ((LogoPoints[6].y - LogoPoints[7].y) * pers[0]) + LogoPoints[7].y)
        .closePath()
        .moveTo(LogoPoints[6].x, LogoPoints[6].y)
        .lineTo(((LogoPoints[5].x - LogoPoints[6].x) * pers[0]) + LogoPoints[6].x, ((LogoPoints[5].y - LogoPoints[6].y) * pers[0]) + LogoPoints[6].y)
        .closePath()
        .moveTo(LogoPoints[5].x, LogoPoints[5].y)
        .lineTo(((LogoPoints[4].x - LogoPoints[5].x) * pers[0]) + LogoPoints[5].x, ((LogoPoints[4].y - LogoPoints[5].y) * pers[0]) + LogoPoints[5].y)
        .closePath()
        .moveTo(LogoPoints[4].x, LogoPoints[4].y)
        .lineTo(((LogoPoints[2].x - LogoPoints[4].x) * pers[0]) + LogoPoints[4].x, ((LogoPoints[2].y - LogoPoints[4].y) * pers[0]) + LogoPoints[4].y)
        .closePath()
        .moveTo(LogoPoints[2].x, LogoPoints[2].y)
        .lineTo(((LogoPoints[1].x - LogoPoints[2].x) * pers[0]) + LogoPoints[2].x, ((LogoPoints[1].y - LogoPoints[2].y) * pers[0]) + LogoPoints[2].y)
        .closePath()
        .moveTo(LogoPoints[1].x, LogoPoints[1].y)
        .lineTo(((LogoPoints[0].x - LogoPoints[1].x) * pers[0]) + LogoPoints[1].x, ((LogoPoints[0].y - LogoPoints[1].y) * pers[0]) + LogoPoints[1].y)
        .closePath()
        .moveTo(LogoPoints[0].x, LogoPoints[0].y)
        .lineTo(((LogoPoints[2].x - LogoPoints[0].x) * pers[0]) + LogoPoints[0].x, ((LogoPoints[2].y - LogoPoints[0].y) * pers[0]) + LogoPoints[0].y)
        .closePath()
        .moveTo(LogoPoints[2].x, LogoPoints[2].y)
        .lineTo(((LogoPoints[3].x - LogoPoints[2].x) * pers[0]) + LogoPoints[2].x, ((LogoPoints[3].y - LogoPoints[2].y) * pers[0]) + LogoPoints[2].y)
        .closePath()
        .moveTo(LogoPoints[3].x, LogoPoints[3].y)
        .lineTo(((LogoPoints[4].x - LogoPoints[3].x) * pers[0]) + LogoPoints[3].x, ((LogoPoints[4].y - LogoPoints[3].y) * pers[0]) + LogoPoints[3].y)
        .closePath()

}


function draw() {
    particles = []
    Circles = [];
    var wcw = cw;
    var wch = ch;
    makeCircle(wcw, wch)
    stage.addChild(Container);
    makedot();
    ParticleSpeed();


};

function ParticleSpeed() {
    for (var i = 0; i < particles.length; i++) {
        var _self = particles[i];
        for (var i2 = 0; i2 < particles.length; i2++) {
            var _target = particles[i2];

            if (_self.p1x == _target.p1x && _self.p1y == _target.p1y) {
                _target.p1vx = _self.p1vx;
                _target.p1vy = _self.p1vy;
            }

            if (_self.p1x == _target.p2x && _self.p1y == _target.p2y) {
                _target.p2vx = _self.p1vx;
                _target.p2vy = _self.p1vy;
            }

            if (_self.p1x == _target.p3x && _self.p1y == _target.p3y) {
                _target.p3vx = _self.p1vx;
                _target.p3vy = _self.p1vy;
            }

            if (_self.p2x == _target.p1x && _self.p2y == _target.p1y) {
                _target.p1vx = _self.p2vx;
                _target.p1vy = _self.p2vy;
            }
            if (_self.p2x == _target.p2x && _self.p2y == _target.p2y) {
                _target.p2vx = _self.p2vx;
                _target.p2vy = _self.p2vy;
            }
            if (_self.p2x == _target.p3x && _self.p2y == _target.p3y) {
                _target.p3vx = _self.p2vx;
                _target.p3vy = _self.p2vy;
            }

            if (_self.p3x == _target.p1x && _self.p3y == _target.p1y) {
                _target.p1vx = _self.p3vx;
                _target.p1vy = _self.p3vy;
            }
            if (_self.p3x == _target.p2x && _self.p3y == _target.p2y) {
                _target.p2vx = _self.p3vx;
                _target.p2vy = _self.p3vy;
            }
            if (_self.p3x == _target.p3x && _self.p3y == _target.p3y) {
                _target.p3vx = _self.p3vx;
                _target.p3vy = _self.p3vy;
            }

        }

    }
    for (var i = 0; i < particles.length; i++) {
        var _self = particles[i];
        for (var i2 = 0; i2 < LogoPoints.length; i2++) {
            var _target = LogoPoints[i2];

            if (_self.p1x == _target.x && _self.p1y == _target.y) {
                _target.vx = _self.p1vx;
                _target.vy = _self.p1vy;
            }

            if (_self.p1x == _target.x && _self.p1y == _target.y) {
                _target.vx = _self.p1vx;
                _target.vy = _self.p1vy;
            }

            if (_self.p1x == _target.x && _self.p1y == _target.y) {
                _target.vx = _self.p1vx;
                _target.vy = _self.p1vy;
            }


        }
    }

};




function makeCircle(_wcw, _wch) {
    var WrapCircle = new createjs.Shape();
    var CircleRadius = Math.sqrt((_wcw * _wcw) + (_wch * _wch)) / 2;
    var ccx = _wcw / 2;
    var ccy = _wch / 2;
    makeTriangle(ccx, ccy, CircleRadius, _wcw, _wch)
};

function makeTriangle(_ccx, _ccy, _CircleRadius, _wcw, _wch) {
    var WrapTriangle = new createjs.Shape();
    var p1 = { x: _ccx - Math.sqrt(3) * _CircleRadius, y: _ccy - _CircleRadius };
    var p2 = { x: _ccx + Math.sqrt(3) * _CircleRadius, y: _ccy - _CircleRadius };
    var p3 = { x: _ccx, y: _ccy + _CircleRadius * 2 };
    var radomX = (Math.random() * (_wcw - 50)) + 50;
    var radomY = (Math.random() * (_wch - 50)) + 50;

    makeParticle(p1, p2, p3, radomX, radomY)
};

function makeParticle(_p1, _p2, _p3, _x, _y) {
    for (var i = 0; i < 3; i++) {
        particle = new createjs.Shape();
        if (i == 0) {
            var p1 = { x: _p1.x, y: _p1.y };
            var p2 = { x: _p2.x, y: _p2.y };
            var p3 = { x: _x, y: _y };
        } else if (i == 1) {
            var p1 = { x: _p2.x, y: _p2.y };
            var p2 = { x: _p3.x, y: _p3.y };
            var p3 = { x: _x, y: _y };
        } else if (i == 2) {
            var p1 = { x: _p3.x, y: _p3.y };
            var p2 = { x: _p1.x, y: _p1.y };
            var p3 = { x: _x, y: _y };
        }

        particle.p1 = p1;
        particle.p2 = p2;
        particle.p3 = p3;

        particle.p1x = p1.x;
        particle.p1y = p1.y;
        particle.p2x = p2.x;
        particle.p2y = p2.y;
        particle.p3x = p3.x;
        particle.p3y = p3.y;

        particle.p1x0 = particle.p1x;
        particle.p1y0 = particle.p1y;
        particle.p2x0 = particle.p2x;
        particle.p2y0 = particle.p2y;
        particle.p3x0 = particle.p3x;
        particle.p3y0 = particle.p3y;

        particle.x = 0;
        particle.y = 0;
        particle.x0 = particle.x;
        particle.y0 = particle.y;
        particle.radius = 1;

        particle.p1vx = (Math.random() * 5) - 1;
        particle.p1vy = (Math.random() * 5) - 1;
        particle.p2vx = (Math.random() * 5) - 1;
        particle.p2vy = (Math.random() * 5) - 1;
        particle.p3vx = (Math.random() * 5) - 1;
        particle.p3vy = (Math.random() * 5) - 1;

        var rand_c = Math.floor(Math.random() * 0) + 51
		var rand_d = Math.floor(Math.random() * 80) + 153
		var rand_e = Math.floor(Math.random() * 80) + 255
        particle.bgc = 'rgba(' + rand_c + ',' + rand_d + ',' + rand_e + ',1)'
        //particle.bgc = 'rgba(245, 41, 75,1)'
        particle.graphics
            .beginStroke('rgba(255,255,255,1)')
            .setStrokeStyle(1)
            .moveTo(p1.x, p1.y)
            .lineTo(p2.x, p2.y)
            .lineTo(p3.x, p3.y)
            .closePath();

        makeCircle2(p1, p2, p3)
        Container.addChild(particle);
        particles.push(particle)
    }
};

function makeCircle2(_p1, _p2, _p3) {
    Circle = new createjs.Shape();
    var x1 = _p1.x;
    var y1 = _p1.y;
    var x2 = _p2.x;
    var y2 = _p2.y;
    var x3 = _p3.x;
    var y3 = _p3.y;
    var x1pow2 = Math.pow(x1, 2);
    var x2pow2 = Math.pow(x2, 2);
    var x3pow2 = Math.pow(x3, 2);
    var y1pow2 = Math.pow(y1, 2);
    var y2pow2 = Math.pow(y2, 2);
    var y3pow2 = Math.pow(y3, 2);
    

    var c = 2 * ((x2 - x1) * (y3 - y1) - (y2 - y1) * (x3 - x1));
    var x = ((y3 - y1) * (x2pow2 - x1pow2 + y2pow2 - y1pow2) + (y1 - y2) * (x3pow2 - x1pow2 + y3pow2 - y1pow2)) / c;
    var y = ((x1 - x3) * (x2pow2 - x1pow2 + y2pow2 - y1pow2) + (x2 - x1) * (x3pow2 - x1pow2 + y3pow2 - y1pow2)) / c;
    var r = Math.sqrt(Math.pow(x1 - x, 2) + Math.pow(y1 - y, 2));
    Circle.a = x;
    Circle.b = y;
    Circle.r = r;
    Circle.p1 = _p1;
    Circle.p2 = _p2;
    Circle.p3 = _p3;
    Circles.push(Circle)
    return false;
}


function makedot() {
    for (var i = 0; i < Num; i++) {

        if (i < LogoPoints.length) {
            var rx = LogoPoints[i].x
            var ry = LogoPoints[i].y
        } else {
            var rx = (Math.random() * cw);
            var ry = (Math.random() * ch);

            if (rx >= (logo_l - 50) && rx < (logo_l + logo_w + 50)) {
                if (ry >= (logo_t - 50) && ry < (logo_t + logo_h + 50)) {
                    rx = (Math.random() * logo_l);
                }
            }


        }

        adddot(rx, ry)
    }
}

function adddot(_rx, _ry) {
    mx = _rx;
    my = _ry;
    cleararray = [];
    var cl = Circles.length;

    for (var i = 0; i < cl; i++) {
        Circle = Circles[i];        
        var n = Math.pow(mx - Circle.a, 2) + Math.pow(my - Circle.b, 2) - Math.pow(Circle.r, 2)
        if (n < 0) {
            var p1 = Circle.p1
            var p2 = Circle.p2
            var p3 = Circle.p3
            particles[i].graphics.clear();
            Circles[i].graphics.clear();
            cleararray.push(i)
            makeParticle(p1, p2, p3, mx, my)
        }
    }

    for (var i = 0; i < particles.length; i++) {
        p = particles[i];
        for (var i2 = 0; i2 < particles.length; i2++) {
            p2 = particles[i2];
            if (i != i2) {

                if (p.p1.x + p.p2.x + p.p3.x == p2.p1.x + p2.p2.x + p2.p3.x && p.p1.y + p.p2.y + p.p3.y == p2.p1.y + p2.p2.y + p2.p3.y) {
                    particles[i].graphics.clear();
                    Circles[i].graphics.clear();
                    cleararray.push(i)
                }
            }
        }
    }

    var cleararray2 = [];
    for (var i = 0; i < cleararray.length; i++) {
        flag = true;
        for (var j = 0; j < cleararray2.length; j++) {
            if (cleararray[i] === cleararray2[j]) {
                flag = false;
            }
        }

        if (flag) {
            cleararray2.push(cleararray[i]);
        }
    }

    for (var c = 0; c < cleararray2.length; c++) {
        particles.splice(cleararray2[c] - c, 1)
        Circles.splice(cleararray2[c] - c, 1)
    }
}

var mouseFlg = false;
$('canvas').mouseover(function() {
    mouseFlg = true;
})
$('canvas').mouseout(function() {
    mouseFlg = false;
})

function moveParticle() {
    var mx = stage.mouseX - Container.x;
    var my = stage.mouseY - Container.y;
    for (var i = 0; i < particles.length; i++) {
        particle = particles[i];
        if (emancipation == false) {
            particle.alpha = 1;
            if (mouseFlg == true) {
                var repulsion_p1 = 0.99;
                var repulsion_p2 = 0.99;
                var repulsion_p3 = 0.99;
                var angle_p1 = Math.atan2(particle.p1x - mx, particle.p1y - my);
                var distance_p1 = Math.sqrt(Math.pow((particle.p1x - mx), 2) + Math.pow((particle.p1y - my), 2));
                particle.p1x += Math.cos(angle_p1) * 20 * Math.pow(repulsion_p1, distance_p1);
                particle.p1y += Math.sin(angle_p1) * 20 * Math.pow(repulsion_p1, distance_p1);

                var angle_p2 = Math.atan2(particle.p2x - mx, particle.p2y - my);
                var distance_p2 = Math.sqrt(Math.pow((particle.p2x - mx), 2) + Math.pow((particle.p2y - my), 2));
                particle.p2x += Math.cos(angle_p2) * 20 * Math.pow(repulsion_p2, distance_p2);
                particle.p2y += Math.sin(angle_p2) * 20 * Math.pow(repulsion_p2, distance_p2);
                var angle_p3 = Math.atan2(particle.p3x - mx, particle.p3y - my);
                var distance_p3 = Math.sqrt(Math.pow((particle.p3x - mx), 2) + Math.pow((particle.p3y - my), 2));
                particle.p3x += Math.cos(angle_p3) * 20 * Math.pow(repulsion_p3, distance_p3);
                particle.p3y += Math.sin(angle_p3) * 20 * Math.pow(repulsion_p3, distance_p3);
            }

            particle.p1x += (particle.p1x0 - particle.p1x) * 0.05;
            particle.p1y += (particle.p1y0 - particle.p1y) * 0.05;
            particle.p2x += (particle.p2x0 - particle.p2x) * 0.05;
            particle.p2y += (particle.p2y0 - particle.p2y) * 0.05;
            particle.p3x += (particle.p3x0 - particle.p3x) * 0.05;
            particle.p3y += (particle.p3y0 - particle.p3y) * 0.05;

            particle.radius++
                var rad = particle.radius * Math.PI / 180;
            var x = Math.cos(rad);
            var y = Math.sin(rad);

            particle.p1x += (x * particle.p1vx);
            particle.p1y += (y * particle.p1vy);
            particle.p2x += (x * particle.p2vx);
            particle.p2y += (y * particle.p2vy);
            particle.p3x += (x * particle.p3vx);
            particle.p3y += (y * particle.p3vy);

        } else {
            particle.p1x += (particle.rx - particle.p1x) * 0.010;
            particle.p1y += (particle.ry - particle.p1y) * 0.010;
            particle.p2x += (particle.rx - particle.p1x) * 0.010;
            particle.p2y += (particle.ry - particle.p1y) * 0.010;
            particle.p3x += (particle.rx - particle.p1x) * 0.010;
            particle.p3y += (particle.ry - particle.p1y) * 0.010;

            particle.radius += 0.2
            var rad = particle.radius * Math.PI / 180;
            var x = (Math.cos(rad) * 20);
            var y = (Math.sin(rad) * 15);
            // console.log(x)

            particle.p1x += (x * particle.p1vx);
            particle.p1y += (y * particle.p1vy);
            particle.p2x += (x * particle.p1vx);
            particle.p2y += (y * particle.p1vy);
            particle.p3x += (x * particle.p1vx);
            particle.p3y += (y * particle.p1vy);
        }



        
        particle.graphics
            .beginStroke('#3399ff')
            .setStrokeStyle(0.6)
            .beginFill(particle.bgc)
            .moveTo(particle.p1x, particle.p1y)
            .lineTo(particle.p2x, particle.p2y)
            .lineTo(particle.p3x, particle.p3y)
            .closePath()

    }

    for (var i = 0; i < LogoPoints.length; i++) {
        LogoPoint = LogoPoints[i];
        if (emancipation == false) {
            LogoPoint.alpha = 1;
            if (mouseFlg == true) {
                var repulsion_logo = 0.99;
                var angle_logo = Math.atan2(LogoPoint.x - mx, LogoPoint.y - my);
                var distance_logo = Math.sqrt(Math.pow((LogoPoint.x - mx), 2) + Math.pow((LogoPoint.y - my), 2));
                LogoPoint.x += Math.cos(angle_logo) * 20 * Math.pow(repulsion_logo, distance_logo);
                LogoPoint.y += Math.sin(angle_logo) * 20 * Math.pow(repulsion_logo, distance_logo);
            }

            LogoPoint.x += (LogoPoint.x0 - LogoPoint.x) * 0.05;
            LogoPoint.y += (LogoPoint.y0 - LogoPoint.y) * 0.05;
            LogoPoint.radius++
                var rad = LogoPoint.radius * Math.PI / 180;
            var x = Math.cos(rad);
            var y = Math.sin(rad);

            LogoPoint.x += (x * LogoPoint.vx);
            LogoPoint.y += (y * LogoPoint.vy);
        } else {
            LogoPoint.x += (LogoPoint.rx - LogoPoint.x) * 0.010;
            LogoPoint.y += (LogoPoint.ry - LogoPoint.y) * 0.010;
            LogoPoint.radius += 0.2
            var rad = LogoPoint.radius * Math.PI / 180;
            var x = (Math.cos(rad) * 20);
            var y = (Math.sin(rad) * 15);
            LogoPoint.x += (x * LogoPoint.vx);
            LogoPoint.y += (y * LogoPoint.vy);
        }
        LogoPoint.alpha = 0.5
        LogoPoint.graphics
            .beginFill('#33a0ff')
            .drawCircle(0, 0, lw);

    }
    Logoline.x = LogoPoints[0].x
    Logoline.y = LogoPoints[0].y

    Logoline.graphics
        .beginStroke('#33a0ff')
        .setStrokeStyle(lw2)
        .moveTo(0, 0)
        .lineTo(LogoPoints[1].x - Logoline.x, LogoPoints[1].y - Logoline.y)
        .lineTo(LogoPoints[2].x - Logoline.x, LogoPoints[2].y - Logoline.y)
        .closePath()
        .moveTo(LogoPoints[2].x - Logoline.x, LogoPoints[2].y - Logoline.y)
        .lineTo(LogoPoints[3].x - Logoline.x, LogoPoints[3].y - Logoline.y)
        .lineTo(LogoPoints[4].x - Logoline.x, LogoPoints[4].y - Logoline.y)
        .closePath()
        .moveTo(LogoPoints[4].x - Logoline.x, LogoPoints[4].y - Logoline.y)
        .lineTo(LogoPoints[5].x - Logoline.x, LogoPoints[5].y - Logoline.y)
        .lineTo(LogoPoints[6].x - Logoline.x, LogoPoints[6].y - Logoline.y)
        .lineTo(LogoPoints[7].x - Logoline.x, LogoPoints[7].y - Logoline.y)
        .lineTo(LogoPoints[8].x - Logoline.x, LogoPoints[8].y - Logoline.y)
        .lineTo(LogoPoints[9].x - Logoline.x, LogoPoints[9].y - Logoline.y)
        .lineTo(LogoPoints[10].x - Logoline.x, LogoPoints[10].y - Logoline.y)
        .lineTo(LogoPoints[11].x - Logoline.x, LogoPoints[11].y - Logoline.y)
        .lineTo(LogoPoints[12].x - Logoline.x, LogoPoints[12].y - Logoline.y)
        .moveTo(LogoPoints[11].x - Logoline.x, LogoPoints[11].y - Logoline.y)
        .lineTo(LogoPoints[13].x - Logoline.x, LogoPoints[13].y - Logoline.y)
};
var emancipation = false;
WIN.scroll(function() {
    SCROLL = WIN.scrollTop();
    if(CanvasInitFlg == true){
        emancipationcheck();
    }
});

function emancipationcheck() {
    if (SCROLL > WinH*0.3) {
        if (emancipation == false) {
            emancipation = true;
            $('#myCanvas').addClass('on')
            for (var i = 0; i < particles.length; i++) {
                particle.alpha = 0.95;
                particle = particles[i];
                var rx = CenterW + (Math.random() * (cw * 2)) - (cw);
                var ry = CenterH + (Math.random() * (ch * 2)) - (ch);
                particle.rx = rx;
                particle.ry = ry;
            }

            for (var i = 0; i < LogoPoints.length; i++) {
                LogoPoint.alpha = 0.95;
                LogoPoint = LogoPoints[i];
                var rx = CenterW + (Math.random() * (cw * 2)) - (cw);
                var ry = CenterH + (Math.random() * (ch * 2)) - (ch);
                LogoPoint.rx = rx;
                LogoPoint.ry = ry;
            }
        }
        
    } else {
        emancipation = false;
        $('#myCanvas').removeClass('on')
    }
}
