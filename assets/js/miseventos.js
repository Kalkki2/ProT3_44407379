document.addEventListener("DOMContentLoaded", inicializar);

function inicializar() {
  const btnConfirmar = document.getElementById("btn-confirmar");
  // Inicializar modales
  const modalPago = new bootstrap.Modal(document.getElementById("modalPago"));
  const modalConfirmado = new bootstrap.Modal(document.getElementById("modalConfirmado"));
  // Asociar evento al botón
  btnConfirmar.addEventListener("click", () => {
    mostrarModalProcesando(modalPago, modalConfirmado);
  });
}

function mostrarModalProcesando(modalPago, modalConfirmado) {
  // Mostrar primer modal (Procesando...)
  modalPago.show();
  // Esperar 3 segundos y mostrar el segundo modal
  setTimeout(() => {
    cambiarAModalConfirmado(modalPago, modalConfirmado);
  }, 1000);
}

function cambiarAModalConfirmado(modalPago, modalConfirmado) {
  modalPago.hide();
  modalConfirmado.show();
}