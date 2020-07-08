$('#deleteAnimal').on('show.bs.modal', function (event) {
    
    var button = $(event.relatedTarget) // Button that triggered the modal
    
    
    var name = button.data('name') // Extract info from data-* attributes
    var animalId = button.data('animalid')

    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    
    modal.find('.modal-title').text('Supprimer l\'animal ?')
    modal.find('.modal-body .name').text('Nom : ' + name)
    modal.find('input[type=number]').val(animalId)
  })

$('#deleteSpecie').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) // Button that triggered the modal
  
  
  var name = button.data('name') // Extract info from data-* attributes
  var animalId = button.data('animalid')

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
  modal.find('.modal-title').text('Supprimer l\'espèce ?')
  modal.find('.modal-body .name').text('Nom : ' + name)
  modal.find('input[type=number]').val(animalId)
})

$('#editSpecie').on('show.bs.modal', function (event) {
  
  var button = $(event.relatedTarget) // Button that triggered the modal
  
  
  var name = button.data('name') // Extract info from data-* attributes
  var animalId = button.data('animalid')

  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  
  modal.find('.modal-title').text('Editer l\'espèce :')
  modal.find('input[type=text][name=name]').val(name)
  modal.find('input[type=number]').val(animalId)
})