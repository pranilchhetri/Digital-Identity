App = {
  
  init: function() {
    // Load pets.
    $.getJSON('computer.json', function(data) {
      var petsRow = $('#petsRow');
      var petTemplate = $('#petTemplate');

      for (i = 0; i < data.length; i ++) {
        petTemplate.find('.panel-title').text(data[i].faculty);
        petTemplate.find('img').attr('src', data[i].photo);
        petTemplate.find('.pet-breed').text(data[i].fulL_name);
        petTemplate.find('.pet-age').text(data[i].batch);
        petTemplate.find('.pet-location').text(data[i].dob);
        petTemplate.find('.btn-adopt').attr('data-id', data[i].id);

        petsRow.append(petTemplate.html());
      }
    });

    return App.initWeb3();
  },

$(function() {
  $(window).load(function() {
    App.init();
  });
});
