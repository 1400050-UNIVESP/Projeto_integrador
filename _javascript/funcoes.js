// Formulários Usuários

function alterarUsuario() {
	var vistoriaForm = document.getElementById("alterar_usuario_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

function deletarUsuario() {
	var vistoriaForm = document.getElementById("deletar_usuario_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}
function inserirRespostas() {
	var crudForm = document.getElementById("inserir_respostas_formulario");
	crudForm.classList.toggle("visible");

	if (crudForm.classList.contains("visible")) {
		crudForm.style.display = 'inherit';
	} else {
		crudForm.style.display = 'none';
	}
}
function alterarRespostas() {
	var crudForm = document.getElementById("alterar_respostas_formulario");
	crudForm.classList.toggle("visible");

	if (crudForm.classList.contains("visible")) {
		crudForm.style.display = 'inherit';
	} else {
		crudForm.style.display = 'none';
	}
}

function deletarRespostas() {
	var crudForm = document.getElementById("deletar_respostas_formulario");
	crudForm.classList.toggle("visible");

	if (crudForm.classList.contains("visible")) {
		crudForm.style.display = 'inherit';
	} else {
		crudForm.style.display = 'none';
	}
}
function inserirPerguntas() {
	var crudForm = document.getElementById("inserir_perguntas_formulario");
	crudForm.classList.toggle("visible");

	if (crudForm.classList.contains("visible")) {
		crudForm.style.display = 'inherit';
	} else {
		crudForm.style.display = 'none';
	}
}
function alterarPerguntas() {
	var crudForm = document.getElementById("alterar_perguntas_formulario");
	crudForm.classList.toggle("visible");

	if (crudForm.classList.contains("visible")) {
		crudForm.style.display = 'inherit';
	} else {
		crudForm.style.display = 'none';
	}
}

function deletarPerguntas() {
	var crudForm = document.getElementById("deletar_perguntas_formulario");
	crudForm.classList.toggle("visible");

	if (crudForm.classList.contains("visible")) {
		crudForm.style.display = 'inherit';
	} else {
		crudForm.style.display = 'none';
	}
}