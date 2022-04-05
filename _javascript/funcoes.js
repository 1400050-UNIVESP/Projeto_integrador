function mudaFoto (foto)
{ 
	document.getElementById("icone").src = foto;
}

// Formulários Extintores

function cadastrarExtintor() {
	var vistoriaForm = document.getElementById("inserir_extintor_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

function alterarExtintor() {
	var vistoriaForm = document.getElementById("alterar_extintor_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

function deletarExtintor() {
	var vistoriaForm = document.getElementById("deletar_extintor_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

// Formulários Vistorias

function cadastrarVistoria() {
	var vistoriaForm = document.getElementById("inserir_vistoria_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

function alterarVistoria() {
	var vistoriaForm = document.getElementById("alterar_vistoria_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

function deletarVistoria() {
	var vistoriaForm = document.getElementById("deletar_vistoria_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

// Formulários Manutenções

function cadastrarManutencao() {
	var vistoriaForm = document.getElementById("inserir_manutencao_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

function alterarManutencao() {
	var vistoriaForm = document.getElementById("alterar_manutencao_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}

function deletarManutencao() {
	var vistoriaForm = document.getElementById("deletar_manutencao_formulario");
	vistoriaForm.classList.toggle("visible");

	if (vistoriaForm.classList.contains("visible")) {
		vistoriaForm.style.display = 'inherit';
	} else {
		vistoriaForm.style.display = 'none';
	}
}
  