// const showData = async () => {
//   try {
//     const response = await fetch("http://192.168.10.2/", {
//       headers: {
//         "Content-Type": "application/json",
//         "X-Requested-With": "XMLHttpRequest",
//       },
//     });
//     const data = await response.json();

//     console.log(data);
//   } catch (err) {
//     console.log(err);
//   }
// };
// showData();

$(document).ready(getDataSensor(), setInterval(getDataSensor, 1000));

function changeColor(a, b) {
  if (a < 15) {
    $('#' + b + " " + 'button').removeClass("btn-outline-dark");
    $('#' + b + " " + 'small').removeClass("text-muted");
    $('#' + b).addClass("text-bg-danger");
    $('#' + b + " " + 'button').addClass("btn-outline-light");
    $('#' + b + " " + 'small').addClass("text-light");
  } else {
    $('#' + b + " " + 'button').removeClass("btn-outline-dark");
    $('#' + b + " " + 'small').removeClass("text-muted");
    $('#' + b).addClass("text-bg-success");
    $('#' + b + " " + 'button').addClass("btn-outline-light");
    $('#' + b + " " + 'small').addClass("text-light");
  }
}

async function getDataSensor() {
  var respondLt4 = await $.ajax({
    url: "/lt4",
    contentType: "application/json",
    headers: {
      "X-Requested-With": "XMLHttpRequest",
    },
    dataType: "json",
  });
  //   console.log(respondLt4);

  var sensorS1 = respondLt4.sensor1.suhu;
  var sensorS2 = respondLt4.sensor2.suhu;
  var sensorS3 = respondLt4.sensor3.suhu;
  var sensorK1 = respondLt4.sensor1.kelembaban;
  var sensorK2 = respondLt4.sensor2.kelembaban;
  var sensorK3 = respondLt4.sensor3.kelembaban;
  var suhuBSS = respondLt4.BSS.suhu.toFixed(1);
  var kelemBSS = respondLt4.BSS.kelembaban.toFixed(2);
  var suhuRecti = respondLt4.recti.suhu.toFixed(1);
  var kelemRecti = respondLt4.recti.kelembaban.toFixed(2);

  changeColor(suhuBSS, "cardBss");
  changeColor(suhuRecti, "cardRecti");

  $("#suhuBSS").text(suhuBSS);
  $("#kelemBSS").text(kelemBSS);
  $("#suhuRecti4").text(suhuRecti);
  $("#kelemRecti4").text(kelemRecti);
}
