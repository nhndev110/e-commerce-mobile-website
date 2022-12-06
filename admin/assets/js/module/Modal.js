'use strict'
const $ = document.querySelector.bind(document)

export default function Modal({ handleModal = () => {} }) {
  if ($('.modal-container')) {
    $('.modal .btn-close').onclick = function (e) {
      e.target.closest('.modal-container').style.display = 'none'
    }

    handleModal()
  }
}