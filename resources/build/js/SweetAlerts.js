
import Swal from 'sweetalert2'

////////// Colors ///////////

const COLOR_DANGER = '#dc3545'
const COLOR_WARNING = '#ffc107'
const COLOR_CYAN = '#17a2b8'
const COLOR_SECONDARY = '#433A76';

////////// Toast ///////////

const Toast = Swal.mixin({
    toast: true,
    showConfirmButton: false,
    position: 'top',
    timer: 3000,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})

window.toastSuccess = function (text = 'Acción ejecutada con éxito') {
    Toast.fire({
        icon: 'success',
        title: text,
    }).then()
}

window.toastError = function (text = 'Acción ejecutada con éxito') {
    Toast.fire({
        icon: 'error',
        title: text,
    }).then()
}

////////// ConfirmAlert ///////////

function confirmAlert (formId, text, title, confirmButtonText, confirmColorButton, icon) {
    Swal.fire({
        icon: icon,
        title: text,
        text: title,
        showCancelButton: true,
        confirmButtonText: confirmButtonText,
        cancelButtonText: 'Cancelar',
        confirmButtonColor: confirmColorButton,
        cancelButtonColor: COLOR_SECONDARY,
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    })
}

window.disabledConfirm = function (formId, nameItem) {
    let text =  '¿Esta seguro de suspender a '+nameItem+'?'
    let title =  'Esta acción es reversible'
    confirmAlert(formId, text, title, 'Suspender', COLOR_WARNING, 'warning')
}

window.enableConfirm = function (formId, nameItem) {
    let text =  '¿Esta seguro de habilitar a '+nameItem+'?'
    confirmAlert(formId, text, '', 'Habilitar', COLOR_CYAN, 'info')
}

window.deleteConfirm = function (formId, nameItem) {
    let text =  '¿Esta seguro de eliminar a '+nameItem+'?'
    let title =  'Esta acción no es reversible'
    confirmAlert(formId, text, title, 'Eliminar', COLOR_DANGER, 'warning')
}
