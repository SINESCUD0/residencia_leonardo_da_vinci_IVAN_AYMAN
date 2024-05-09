$(window).on("load",inicio);

function inicio(){
    $("[name='B']").on("click", katz);
    $("[name='V']").on("click", katz);
    $("[name='WC']").on("click", katz);
    $("[name='M']").on("click", katz);
    $("[name='C']").on("click", katz);
    $("[name='A']").on("click", katz);

    $("[name='BM']").on("click", katz2);
    $("[name='L']").on("click", katz2);
    $("[name='BC']").on("click", katz2);
    $("[name='T']").on("click", katz2);
    $("[name='Z']").on("click", katz2);
    $("[name='O']").on("click", katz2);

    $("#B[name='B']")[2].addEventListener("click", katzpai);
    $("#B[name='B']")[3].addEventListener("click", katzpai);
    $("#V[name='V']")[2].addEventListener("click", katzpai);
    $("#V[name='V']")[3].addEventListener("click", katzpai);
    $("#WC[name='WC']")[2].addEventListener("click", katzpai);
    $("#WC[name='WC']")[3].addEventListener("click", katzpai);
    $("#M[name='M']")[2].addEventListener("click", katzpai);
    $("#M[name='M']")[3].addEventListener("click", katzpai);
    $("#C[name='C']")[2].addEventListener("click", katzpai);
    $("#C[name='C']")[3].addEventListener("click", katzpai);
    $("#A[name='A']")[2].addEventListener("click", katzpai);
    $("#A[name='A']")[3].addEventListener("click", katzpai);

    $("#selectKatz").on("click", katz2);
}

function katz(){
    var bano;
    var vestido;
    var wc;
    var movilidad;

    var contador = 0;
    var clasificacion;
    var texto;

    var todos = true;

    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia
    if($("#B[name='B']")[0].checked){
        bano = false;
    }else if($("#B[name='B']")[1].checked){ 
        bano = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#V[name='V']")[0].checked){
        vestido = false;
    }else if($("#V[name='V']")[1].checked){ 
        vestido = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#WC[name='WC']")[0].checked){
        wc = false;
    }else if($("#WC[name='WC']")[1].checked){ 
        wc = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#M[name='M']")[0].checked){
        movilidad = false;
    }else if($("#M[name='M']")[1].checked){ 
        movilidad = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#C[name='C']")[0].checked){
    }else if($("#C[name='C']")[1].checked){
        contador++;
    }else{
        todos = false;
    }

    if($("#A[name='A']")[0].checked){
    }else if($("#A[name='A']")[1].checked){
        contador++;
    }else{
        todos = false;
    }

    if(contador == 0 || contador == 1){
        texto = "Ausencia de incapacidad o incapacidad leve";
    }else if(contador == 2 || contador == 3){
        texto = "Incapacidad moderada";
    }else{
        texto = "Incapacidad severa";
    }


    //If final que te saca la clasificación por letras

    if(contador == 0){
        clasificacion = "A";
    }else if(contador == 1){
        clasificacion = "B";
    }else if(contador == 2){
        if(bano){
            clasificacion = "C";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 3){
        if(bano && vestido){
            clasificacion = "D";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 4){
        if(bano && vestido && wc){
            clasificacion = "E";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 5){
        if(bano && vestido && wc && movilidad){
            clasificacion = "F";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 6){
        clasificacion = "G";
    }
    
    if(todos){
        $("#IK").val(contador +"  "+ clasificacion);
        $("#J").val(texto);
    }
}

function katz2(){
    var bano;
    var vestido;
    var wc;
    var movilidad;
    var contador = 0;
    var clasificacion;
    var texto;
    var todos = true;

    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia
    if($("#BM[name='BM']")[0].checked){
        bano = false;
    }else if($("#BM[name='BM']")[1].checked){ 
        bano = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#L[name='L']")[0].checked){
        vestido = false;
    }else if($("#L[name='L']")[1].checked){ 
        vestido = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#BC[name='BC']")[0].checked){
        wc = false;
    }else if($("#BC[name='BC']")[1].checked){ 
        wc = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#T[name='T']")[0].checked){
        movilidad = false;
    }else if($("#T[name='T']")[1].checked){ 
        movilidad = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#Z[name='Z']")[0].checked){
    }else if($("#Z[name='Z']")[1].checked){
        contador++;
    }else{
        todos = false;
    }

    if($("#O[name='O']")[0].checked){
    }else if($("#O[name='O']")[1].checked){
        contador++;
    }else{
        todos = false;
    }

    if(contador == 0 || contador == 1){
        texto = "Ausencia de incapacidad o incapacidad leve";
    }else if(contador == 2 || contador == 3){
        texto = "Incapacidad moderada";
    }else{
        texto = "Incapacidad severa";
    }


    //If final que te saca la clasificación por letras

    if(contador == 0){
        clasificacion = "A";
    }else if(contador == 1){
        clasificacion = "B";
    }else if(contador == 2){
        if(bano){
            clasificacion = "C";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 3){
        if(bano && vestido){
            clasificacion = "D";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 4){
        if(bano && vestido && wc){
            clasificacion = "E";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 5){
        if(bano && vestido && wc && movilidad){
            clasificacion = "F";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 6){
        clasificacion = "G";
    }
    
    // console.log("cantidad: "+contador+" clasificacion: "+clasificacion+" texto: "+texto);
    if(todos){
        $("#IK2").val(contador +"  "+ clasificacion);
        $("#J2").val(texto);
    }
}

function katzpai(){
    var bano;
    var vestido;
    var wc;
    var movilidad;

    var contador = 0;
    var clasificacion;
    var texto;

    var todos = true;

    //Ifs que te suman dependencia al contador e identifican en qué es esa dependencia
    if($("#B[name='B']")[2].checked){
        bano = false;
    }else if($("#B[name='B']")[3].checked){ 
        bano = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#V[name='V']")[2].checked){
        vestido = false;
    }else if($("#V[name='V']")[3].checked){ 
        vestido = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#WC[name='WC']")[2].checked){
        wc = false;
    }else if($("#WC[name='WC']")[3].checked){ 
        wc = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#M[name='M']")[2].checked){
        movilidad = false;
    }else if($("#M[name='M']")[3].checked){ 
        movilidad = true;
        contador++;
    }else{
        todos = false;
    }

    if($("#C[name='C']")[2].checked){
    }else if($("#C[name='C']")[3].checked){
        contador++;
    }else{
        todos = false;
    }

    if($("#A[name='A']")[2].checked){
    }else if($("#A[name='A']")[3].checked){
        contador++;
    }else{
        todos = false;
    }

    if(contador == 0 || contador == 1){
        texto = "Ausencia de incapacidad o incapacidad leve";
    }else if(contador == 2 || contador == 3){
        texto = "Incapacidad moderada";
    }else{
        texto = "Incapacidad severa";
    }


    //If final que te saca la clasificación por letras

    if(contador == 0){
        clasificacion = "A";
    }else if(contador == 1){
        clasificacion = "B";
    }else if(contador == 2){
        if(bano){
            clasificacion = "C";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 3){
        if(bano && vestido){
            clasificacion = "D";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 4){
        if(bano && vestido && wc){
            clasificacion = "E";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 5){
        if(bano && vestido && wc && movilidad){
            clasificacion = "F";
        }else{
            clasificacion = "H";
        }
    }else if(contador == 6){
        clasificacion = "G";
    }
    
    // console.log("cantidad: "+contador+" clasificacion: "+clasificacion+" texto: "+texto);
    if(todos){
        $("#IKpai").val(contador +"  "+ clasificacion);
        $("#Jpai").val(texto);
    }
}

