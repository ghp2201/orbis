var delayInMilliseconds = 500; // half a second

setTimeout(function() { 

   var iframe = document.getElementsByTagName('iframeCorpo')[0];
   iframe.style.background = 'white';
   iframe.contentWindow.document.body.style.backgroundColor = 'white';

}, delayInMilliseconds)