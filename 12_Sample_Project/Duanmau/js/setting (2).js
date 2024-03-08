// Tạo một file riêng cho biểu tượng cài đặt (setting.js)
// Lấy các phần tử cần sử dụng
const settingsIcon = document.querySelector('.settings-icon');
const caiDat = document.querySelector('#setting-caidat');

// Thêm sự kiện mouseover cho biểu tượng cài đặt
settingsIcon.addEventListener('mouseover', () => {
    caiDat.style.display = 'block';
});

// Thêm sự kiện mouseout cho biểu tượng cài đặt
settingsIcon.addEventListener('mouseout', () => {
    caiDat.style.display = 'none';
});
