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