document.addEventListener('DOMContentLoaded', () => {
    $('.modal').on('shown.bs.modal', function () {
        $('.cyan-button').trigger('focus')
      })
})

