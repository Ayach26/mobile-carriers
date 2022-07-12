// 読み込まれたらuserAgentを取得
let ua = document.getElementById("ua");
const userAgent = navigator.userAgent;
console.log(userAgent);

ua.innerHTML = userAgent;
