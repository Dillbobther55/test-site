var myImage = document.querySelector('img');

myImage.onclick = function() {
    var mySrc = myImage.getAttribute('src');
    if(mySrc === 'images/noice-inv.png') {
      myImage.setAttribute ('src','images/noice-logo.png');
    } else {
      myImage.setAttribute ('src','images/noice-inv.png');
    }
};
