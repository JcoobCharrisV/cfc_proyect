// Call the dataTables jQuery plugin
$(document).ready(function() {

  $('#PacienteProximo').DataTable({
    "language": {
      "url": "vendor/datatables/spanish.json"
    },
    "ordering": false
  });

  $('#PacienteBuscar').DataTable({
    "language": {
      "url": "vendor/datatables/spanish.json"
    },
    "searching": false,
  });

  $('#PacienteListar').DataTable({
    "language": {
      "url": "vendor/datatables/spanish.json"
    }
  });

  $('#DoctorServicioListar').DataTable({
    "language": {
      "url": "vendor/datatables/spanish.json"
    }
  });

  $('#NotificacionListar').DataTable({
    "language": {
      "url": "vendor/datatables/spanish.json"
    },
    "searching": false,
    "ordering": false
  });

  $('#MantenimeintoListar').DataTable({
    "language": {
      "url": "vendor/datatables/spanish.json"
    },
    "searching": false,
    "ordering": false
  });

  $('#ContactabilidadListar').DataTable({
    "language": {
      "url": "vendor/datatables/spanish.json"
    },
    "searching": false,
    "ordering": false
  });

});
