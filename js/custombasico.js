var form = document.getElementById("questionario");

if (form.addEventListener) {                   
    form.addEventListener("submit", validaquestao);
} else if (form.attachEvent) {                  
    form.attachEvent("onsubmit", validaquestao);
}

function validaquestao(evt){
	var questao1 = document.getElementById('questao1');
	var questao2 = document.getElementById('questao2');

	
	var contErro = 0;


	/* Validação da questao1 */
	caixa_questao1 = document.querySelector('.msg-questao1');
	if(questao1.value == ""){
		caixa_questao1.innerHTML = "Favor preencher a Questao 1";
		caixa_questao1.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao1.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	/* Validação da questao2 */
	caixa_questao2 = document.querySelector('.msg-questao2');
	if(questao2.value == ""){
		caixa_questao2.innerHTML = "Favor preencher a Questao 2";
		caixa_questao2.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao2.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	
	
	/* Validação da questao3 */
	caixa_questao3 = document.querySelector('.msg-questao3');
	if(questao3.value == ""){
		caixa_questao3.innerHTML = "Favor preencher a Questao 3";
		caixa_questao3.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao3.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	
	/* Validação da questao4 */
	caixa_questao4 = document.querySelector('.msg-questao4');
	if(questao4.value == ""){
		caixa_questao4.innerHTML = "Favor preencher a Questao 4";
		caixa_questao4.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao4.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	/* Validação da questao5 */
	caixa_questao5 = document.querySelector('.msg-questao5');
	if(questao5.value == ""){
		caixa_questao5.innerHTML = "Favor preencher a Questao 5";
		caixa_questao5.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao5.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	
	
/* Validação da questao6 */
	caixa_questao6 = document.querySelector('.msg-questao6');
	if(questao6.value == ""){
		caixa_questao6.innerHTML = "Favor preencher a Questao 6";
		caixa_questao6.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao6.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	
	/* Validação da questao7 */
	caixa_questao7 = document.querySelector('.msg-questao7');
	if(questao7.value == ""){
		caixa_questao7.innerHTML = "Favor preencher a Questao 7";
		caixa_questao7.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao7.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	
	/* Validação da questao8 */
	caixa_questao8 = document.querySelector('.msg-questao8');
	if(questao8.value == ""){
		caixa_questao8.innerHTML = "Favor preencher a Questao 8";
		caixa_questao8.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao8.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	
	/* Validação da questao9 */
	caixa_questao9 = document.querySelector('.msg-questao9');
	if(questao9.value == ""){
		caixa_questao9.innerHTML = "Favor preencher a Questao 9";
		caixa_questao9.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao9.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	
	/* Validação da questao10 */
	caixa_questao10 = document.querySelector('.msg-questao10');
	if(questao10.value == ""){
		caixa_questao10.innerHTML = "Favor preencher a Questao 10";
		caixa_questao10.style.display = 'block';
		contErro += 1;
	}else{
		caixa_questao10.style.display = 'none';
	}
	if(contErro > 0){
		evt.preventDefault();
	}
	
	
	
}