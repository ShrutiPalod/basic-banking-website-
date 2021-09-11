const trasnfer = document.getElementById("transfer")
const transferBtn = document.getElementById("send")
const sent = document.getElementById("sendmoney") 

transferBtn.addEventListener("click", function(){
    trasnfer.style.display ="block"
  });

sent.addEventListener("click", function(){
    trasnfer.style.display ="none"
    //alert("Money Sent")
  });
