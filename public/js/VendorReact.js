
function sales_chart() {
    console.log('Chart_Success');
    var charts=document.getElementById('chart'),
    sales_chart=new Chart(charts,{
    // 參數設定[註1]
    type: "bar", // 圖表類型
    data: {
        labels: [ "9:00", "10:00", "11:00" ,
         "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00"], // 標題
        datasets: [{
            label: "Sales", // 標籤
            data: [ 12, 19, 22 ,25,
            21,15,20,21,25,30] ,// 資料
            backgroundColor: [ // 背景色
            "#0362fc",
            "#0362fc",
            "#0362fc","#0362fc","#0362fc","#0362fc","#0362fc","#0362fc","#0362fc","#0362fc"
            ],
            borderWidth: 1 // 外框寬度
        }]
    }

});}
