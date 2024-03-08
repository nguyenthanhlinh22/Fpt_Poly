let tlCoThe = prompt('Nhap trong luong co the: ');
let chieuCao = prompt('Nhap chieu cao: ');
let BMI = tlCoThe / (chieuCao * chieuCao);
if (BMI < 18.5) {
    alert('Tình trạng thiếu cân.');
} else if (BMI >=18.5 && BMI<25) {
    alert('Tình trạng bình thường.');
} else if (BMI>=25 && BMI<30) {
    alert('Tình trạng thừa cân.');
} else {
    alert('Tình trạng béo phì.');
}
