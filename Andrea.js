$("#ADD").on("click",function((event) {
$("#ADD").append() i++;
    var f1='<th>'+i+'</th><th>'+i+'</th>';
    $("#table").append(f1);
});

function eliminarCampos(i) {
var nombre_f1="#f1";
var num="";

var num_f1=i;
num=num_f1.toString();
var f1=nombre_f1.concat(num);
$("+f1+").empty();

var num2_f2=i;
num=num2_f2.toString();
var f2=nombre_f2.concat(num2);
$("+f2+").empty();

var num3_f3=i;
num=num3_f3.toString();
var f3=nombre_f3.concat(num3);
$("+f3+").empty();

var num4_f4=i;
num=num4_f4.toString();
var f4=nombre_f4.concat(num4);
$("+f4+").empty();

var num5_f5=i;
num=num5_f5.toString();
var f5=nombre_f5.concat(num5);
$("+f5+").empty();

var num6_f6=i;
num=num6_f6.toString();
var f6=nombre_f6.concat(num6);
$("+f6+").empty();

var num7_f7=i;
num=num7_f7.toString();
var f7=nombre_f7.concat(num7);
$("+f7+").empty();
}

