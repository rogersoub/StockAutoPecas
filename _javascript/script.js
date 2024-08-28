
//Produto 1
let quantidade1 = 1;
let valorTot1 = 120;
let total = 537

function incrementar1() {
    if (quantidade1 < 9) {
        quantidade1++;
        atualizarQuantidade();  
        valorTot1 += 120; 
        atualizarValor();
        total += 120;
        atualizarTotal();
    }    
}

function decrementar1() {
    if (quantidade1 > 1) {
        quantidade1--;
        atualizarQuantidade();
        valorTot1 -= 120; 
        atualizarValor();
        total -= 120;
        atualizarTotal();
    }
}

function atualizarQuantidade() {
    document.getElementById('quantidade1').innerText = quantidade1;
}

function atualizarValor(){
    document.getElementById('valorTot1').innerText = valorTot1;
}

//Produto 2
let quantidade2 = 1;
let valorTot2 = 270;

function incrementar2() {
    if (quantidade2 < 9) {
        quantidade2++;
        atualizarQuantidade2();  
        valorTot2 += 270; 
        atualizarValor2();
        total += 270;
        atualizarTotal();
    }    
}

function decrementar2() {
    if (quantidade2 > 1) {
        quantidade2--;
        atualizarQuantidade2();
        valorTot2 -= 270; 
        atualizarValor2();
        total -= 270;
        atualizarTotal();
    }
}

function atualizarQuantidade2() {
    document.getElementById('quantidade2').innerText = quantidade2;
}

function atualizarValor2(){
    document.getElementById('valorTot2').innerText = valorTot2;
}

//Produto 3
let quantidade3 = 1;
let valorTot3 = 147;

function incrementar3() {
    if (quantidade3 < 9) {
        quantidade3++;
        atualizarQuantidade3();  
        valorTot3 += 147; 
        atualizarValor3();
        total += 147;
        atualizarTotal();
    }    
}

function decrementar3() {
    if (quantidade3 > 1) {
        quantidade3--;
        atualizarQuantidade3();
        valorTot3 -= 147; 
        atualizarValor3();
        total -= 147;
        atualizarTotal();
    }
}

function atualizarQuantidade3() {
    document.getElementById('quantidade3').innerText = quantidade3;
}

function atualizarValor3(){
    document.getElementById('valorTot3').innerText = valorTot3;
}

function atualizarTotal(){
    document.getElementById('varTotal').innerText = total;
    document.getElementById('varTotal1').innerText = total;
}