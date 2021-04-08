var preview = function (event) {
    var output = document.getElementById("output");
    output.src = URL.createObjectURL(event.target.files[0]);
    output.style.width = "100px";
    output.style.height = "100px";
    output.style.objectFit = "cover";
    output.onload = function () {
        URL.revokeObjectURL(output.src);
    };
};
var skill = function (obj, id) {
    var storePlace = document.getElementById(id);
    if (id == "hardSkill") {
        var value = prompt("Số năm kinh nghiệm");
        if (value != null) {
            if(storePlace.innerHTML==""){
                storePlace.innerHTML +="+"+
                value + " năm kinh nghiệm về " + obj.innerHTML.trim();
            }else{
                storePlace.innerHTML +="\n+"+
                value + " năm kinh nghiệm về " + obj.innerHTML.trim();
            }
            storePlace.style.height = "";
            storePlace.style.height = storePlace.scrollHeight + "px";
        }
    } else if (id == "softSkill" || id == "language") {
        var value = prompt("Đánh giá kĩ năng (?/100)");
        if (value != null && value <= 100) {
            if(storePlace.innerHTML==""){
                storePlace.innerHTML +="+"+ value + "/100 " + obj.innerHTML.trim();
            }else{
                storePlace.innerHTML +="\n+"+ value + "/100 " + obj.innerHTML.trim();
            }
            storePlace.style.height = "";
            storePlace.style.height = storePlace.scrollHeight + "px";
        }
    } else {
        if(storePlace.innerHTML==""){
            storePlace.innerHTML +="+"+ obj.innerHTML.trim();
        }else{
            storePlace.innerHTML +="\n+"+ obj.innerHTML.trim();
        }
        storePlace.style.height = "";
        storePlace.style.height = storePlace.scrollHeight + "px";
    }
};
function auto_grow(element) {
    element.style.height = "5px";
    element.style.height = element.scrollHeight + "px";
}
