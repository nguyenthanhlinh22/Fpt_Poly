<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> <!--tải thư viện GG Charts thông qua url-->
<script type="text/javascript">
google.charts.load("current", {
    packages: ["corechart"]
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Loại', 'Số Lượng'],
        <?php
            foreach ($items as $item) {
                echo "['$item[ten_loai]',     $item[so_luong]],";
            }
            ?>
    ]);
    //tạo một đối tượng dl dạng bảng từ dl PHP

    var options = {
        title: 'TỶ LỆ HÀNG HÓA',
        is3D: true,
    };
    //tạo một đối tượng tuỳ chọn cho biểu đồ, tiêu đề TỶ LỆ HH dạng 3d

    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    //Tạo một đối tượng biểu đồ pie và gắn nó vào phần tử HTML có ID piechart_3d
    chart.draw(data, options);
    //vẽ biểu đồ với dl
}
</script>
</head>

<body>
    <h3>BIỂU ĐỒ THỐNG KÊ</h3>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
</body>

</html>