// https://www.hackmanit.de/script/foo.js
window.name="";
document.designMode = "off";
if (top !== self) top.location.replace(self.location.href);
