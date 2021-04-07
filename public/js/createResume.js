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
var skill = function (obj, id, dataP) {
    var storePlace = document.getElementById(id);
    var dataPlace= document.getElementById(dataP);
    if (id == "hardSkill") {
        var value = prompt("Số năm kinh nghiệm");
        if (value != null) {
            storePlace.innerHTML +="<div class='d-flex justify-content-between align-items-center font-weight-bold'>" +value +" năm kinh nghiệm về " +obj.innerHTML +"<i class='fas fa-minus mr-2' onclick='remove(this,"+dataP+")'></i></div><hr>";
            dataPlace.innerHTML+=value +" năm kinh nghiệm về " +obj.innerHTML+"\n";
        }
    } else if (id == "softSkill" && id == "language") {
        var value = prompt("Đánh giá kĩ năng (?/100)");
        if (value != null && value <= 100) {
            storePlace.innerHTML +="<div class='d-flex justify-content-between align-items-center font-weight-bold'>" +value +"/100 " +obj.innerHTML +"<i class='fas fa-minus mr-2' onclick='remove(this,"+dataP+")'></i></div><hr>";
            dataPlace.innerHTML+=value +"/100 " +obj.innerHTML+"\n";
        }
    }else{
        storePlace.innerHTML +="<div class='d-flex justify-content-between align-items-center font-weight-bold'>"+obj.innerHTML +"<i class='fas fa-minus mr-2' onclick='remove(this,"+dataP+")'></i></div><hr>";
        dataPlace.innerHTML+=obj.innerHTML+"\n";
    }
};
var remove= function (obj,dataP){
    var data=document.getElementById(dataP);
    console.log(data);
    data.innerHTML=data.innerText.replace(obj.parentElement.innerText,'');
    obj.parentElement.remove();

}
