const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener('click', ()=> {
    container.classList.add("sign-up-mode");
});


sign_in_btn.addEventListener('click',()=> {
    container.classList.remove("sign-up-mode");
});

function ValidaDados(form){
    acesslog=["MARCELO","MAICON"];
    acessosen=[1234,5678];
    alert("Obrigado pelo seu login");
    i=0;
    senha = form.senha.value;
    for(i=0;i<acessolog.length;i++){
        if(form.log.value==acessolog[i]){
            if(form.senha.value==acessosen[i]){
            alert("Usuário ou senha errados");
            }
        }
    }
}

