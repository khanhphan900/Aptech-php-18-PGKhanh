var img = document.getElementById('bongDen');

console.log(img.src);


function bongDen() {
    if (img.src == "file:///C:/Users/Softech_PC/Desktop/Khanh%20PHP%2018/Aptech-php-18-PGKhanh/html/8-20190516/image/pic_bulboff.gif") {
        document.getElementById('bongDen').src = "../8-20190516/image/pic_bulbon.gif";
        console.log("bat ne");
    } else {
        document.getElementById('bongDen').src = "../8-20190516/image/pic_bulboff.gif";
        console.log("tat ne");
    }
}