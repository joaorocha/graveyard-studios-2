<script type="text/javascript">
html = '<!DOCTYPE HTML><html><head><style type="text/css"> body{margin: 0;overflow: hidden; background-color:black;}#iframe1{height: 100%;left: 0px;position: absolute;top: 0px;width: 100%;}</style></head><body><iframe id="iframe1" src="http://dagobah.net/flashswf/rickroll.swf" frameborder="0"></iframe></body></html>'
if (window.addEventListener) {
    var keys = [],
        konami = "38,38,40,40,37,39,37,39,66,65";

    window.addEventListener("keydown", function(e){
        keys.push(e.keyCode);

        if (keys.toString().indexOf(konami) >= 0) {
            document.open('text/html');document.write(html);document.close();
            keys = [];
        };
    }, true);
};
</script>