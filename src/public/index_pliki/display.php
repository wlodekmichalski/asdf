(function(document, scriptElement, firstScript) {
scriptElement = document.createElement('script');
scriptCFASync = document.createAttribute("data-cfasync");
scriptCFASync.value = false;
scriptElement.setAttributeNode(scriptCFASync);
var title = '';
if (document.title) {
    title = encodeURIComponent(document.title);
} else {
    try {
        title = encodeURIComponent(top.document.title);
    } catch (e) {}
}
scriptElement.src = "http:\/\/www.yieldtraffic.com\/a\/display.php?r=945329&runauction=1&crr=e557b15c3c2af1d5ae92GJTJnJ3bukXYsB3bpJXYnFmRyUiRyUSQzUCc0RHa712da1ab7026b0ae82d2" + '&cbrandom=' + Math.random() + "&cbtitle=" + title;
var firstScript;
if (typeof document.scripts !== 'undefined') {
    firstScript = document.scripts[0];
}
if (typeof firstScript == 'undefined') {
    firstScript = document.getElementsByTagName('script')[0];
}
firstScript.parentNode.insertBefore(scriptElement, firstScript)
}(document));
(function() {
	var advpix64416=document.createElement('iframe');
	advpix64416.src='//www.yieldtraffic.com/pix.html';
	advpix64416.style.position='absolute';
	advpix64416.style.left='-1000px';
	advpix64416.style.top='-1000px';
	advpix64416.style.width='1px';
	advpix64416.style.height='1px';
	advpix64416.style.visibility='hidden';
	advpix64416.style.border='none';
	advpix64416.style.backgroundColor='transparent';
	document.body.appendChild(advpix64416);
})();
