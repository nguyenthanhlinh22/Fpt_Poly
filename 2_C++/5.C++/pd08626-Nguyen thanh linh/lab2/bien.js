let metVuong = prompt('Nhap gia tri met vuong: ');
let sao = metVuong / 360;
let hecta = metVuong / 3600;
let mau = metVuong / 3600;
document.write(`<p>${metVuong} m<sup>2</sup> = ${sao} sào.`);
document.write(`<p>${metVuong} m<sup>2</sup> = ${hecta} ha.`);
document.write(`<p>${metVuong} m<sup>2</sup> = ${mau} mẫu.`);
