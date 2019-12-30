var TIME = new Date().getTime();

var AConf = window.AConf = {
    activity: false,
    imgUrl: '//news-bos.cdn.bcebos.com/mvideo/2019lianghui.jpg',
    timeFlag: TIME,
    extCSSRule: ''
}

try {
    var nowTime = new Date().getTime();
    var startTime = 1569168001000; // 2019年09月23日00：00：01
    var endTime = 1570464001000; // 2019年10月08日00：00：01
    if (nowTime > startTime && nowTime < endTime) {
        AConf = window.AConf = {
            activity: true,
            imgUrl: '//news-bos.cdn.bcebos.com/mvideo/2019guoqing.jpg',
            timeFlag: TIME,
            extCSSRule: ''
        }
    }

    function loadjscssfile(filename, filetype) {

        if (filetype == "js") {
            var fileref = document.createElement('script');
            fileref.setAttribute("type", "text/javascript");
            fileref.setAttribute("src", filename);
        } else if (filetype == "css") {

            var fileref = document.createElement('link');
            fileref.setAttribute("rel", "stylesheet");
            fileref.setAttribute("type", "text/css");
            fileref.setAttribute("href", filename);
        } else if (filetype == 'meta') {
            if (location.protocol == 'http:') {
                var oMeta = document.createElement('meta');
                oMeta.name = 'baidu_union_verify';
                oMeta.content = 'c06c0cb3fdfe79722bc814edc74f301e';
                document.getElementsByTagName('head')[0].appendChild(oMeta);
            }
        }
        if (typeof fileref != "undefined") {
            document.getElementsByTagName("head")[0].appendChild(fileref);
        }

    }
    loadjscssfile("//news-bos.cdn.bcebos.com/mvideo/temp.css?radom=" + new Date().getTime(), "css");
} catch (e) {

}